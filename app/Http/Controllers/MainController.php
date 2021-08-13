<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\User;
use App\Models\VideosTable;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\Generics;
use Hamcrest\Core\Set;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    use Generics;
    //

    //checks the users inputs and perform sign in
    public function doLogin(Request $req)
    {
        if (User::Where('email', $req->email)->exists() == true) {
            $credentials = ['email' => $req->email, 'password' => $req->password];
            if (Auth::validate($credentials) == true) {
                Auth::attempt($credentials, $req->remember_me == 'on' ? true : false);

                $user = Auth::user();
                return redirect()->to(route('dashboard'));
            } else {
                return redirect()->back()->with('info', 'Incorrect password!, please check your credentials and try again.')->withInput($req->only('loginEmail'));
            }
        } else {
            return redirect()->back()->with('infoEmail', 'Email address does not exist!, please check your credentials and try again.');
        }
    }

    //logout method
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $lastVideo = ['lastVideo' => VideosTable::where('video_type', "Video")->orderBy('created_at', 'desc')->first()];
        $lastAudio = ['lastAudio' => VideosTable::where('video_type', "Audio")->orderBy('created_at', 'desc')->first()];
        $lastYoutube = ['lastYoutube' => VideosTable::where('video_type', "Youtube")->orderBy('created_at', 'desc')->first()];
        $lastUtorrent = ['lastUtorrent' => VideosTable::where('video_type', "UTorrent")->orderBy('created_at', 'desc')->first()];
        $allUploads = ['allUploads' => VideosTable::latest()->take(5)->get()];
        return view('dashboard')->with($lastVideo)
            ->with($lastAudio)
            ->with($lastYoutube)
            ->with($lastUtorrent)
            ->with($allUploads)
            ->with($setting);
    }

    public function uploadVideo()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        return view('upload-video')->with($setting);
    }

    public function doUploadVideo(Request $req)
    {
        $req->validate([
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:102400'
        ]);

        $upload = 'video_url';
        $url = $req->video_url;
        $video_type = "Video";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type);
    }


    public function uploadAudio()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        return view('upload-audio')->with($setting);
    }

    public function doUploadAudio(Request $req)
    {
        $req->validate([
            'video' => 'required|mpeg,mpga,mp3,wav|max:102400'
        ]);

        $upload = 'audio_url';
        $url = $req->audio_url;
        $video_type = "Audio";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type);
    }

    public function allUploads()
    {
        $allUploads = ['allUploads' => VideosTable::all()];
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        return view('all-uploads')->with($allUploads)->with($setting);
    }

    public function edit($unique_id)
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $findUpload = ['findUpload' => VideosTable::where('unique_id', $unique_id)->first()];
        return view('/edit')->with($findUpload)->with($setting);
    }

    public function doEdit(Request $req)
    {
        $req->validate([
            'url' => 'url',
            'subtitle' => 'url',
            'image' => 'mimes:png,jpg,jpeg,gif,svg'
        ]);
        $selectUpload = VideosTable::where('unique_id', $req->unique_id)->first();
        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('video_images', $name, 'public');
            $locationImage = '/storage/' . $filePath;
        } else {
            $locationImage = $selectUpload['image'];
        }

        $selectUpload->update([
            'title' => $req->title,
            'type' => $req->type,
            'name' => $req->name,
            'size' => $req->size,
            'url' => $req->url,
            'subtitle' => $req->subtitle,
            'description' => $req->description,
            'image' => $req->image = $locationImage
        ]);
        return back()->with('updated', "This file has been updated successfully");
    }

    public function delete($unique_id)
    {
        $selectID = VideosTable::where('unique_id', $unique_id)->first();
        $selectID->delete();

        return back()->with('deleted', "Delete was Successfull");
    }

    public function uploadYoutube()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        return view('upload-youtube')->with($setting);
    }

    public function doUploadYoutube(Request $req)
    {
        $req->validate([
            'embed' => 'required'
        ]);

        $upload = 'youtube_url';
        $url = $req->youtube_url;
        $video_type = "Youtube";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type);
    }

    public function uploadUtorrent()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        return view('upload-utorrent')->with($setting);
    }

    public function doUploadUtorrent(Request $req)
    {
        $req->validate([
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:102400'
        ]);

        $upload = 'utorrent_url';
        $url = $req->utorrent_url;
        $video_type = "UTorrent";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type);
    }

    public function downloadVideo($unique_id)
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $video = ['video' => VideosTable::where('unique_id', $unique_id)->first()];
        return view('download')
            ->with($setting)
            ->with($video);
    }

    public function allVideo()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $allVideos = ['allVideos' => VideosTable::where('video_type', "Video")->get()];
        return view('all-video', $allVideos)->with($setting);
    }
    public function allYoutube()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $allYoutubes = ['allYoutubes' => VideosTable::where('video_type', "Youtube")->get()];
        return view('all-youtube', $allYoutubes)->with($setting);
    }
    public function allUtorrent()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $allUtorrents = ['allUtorrents' => VideosTable::where('video_type', "UTorrent")->get()];
        return view('all-utorrent', $allUtorrents)->with($setting);
    }
    public function allAudio()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $allAudios = ['allAudios' => VideosTable::where('video_type', "Audio")->get()];
        return view('all-audio', $allAudios)->with($setting);
    }
    public function createAdmin()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        return view('create-admin')->with($setting);
    }
    public function doCreateAdmin(Request $req)
    {
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'user_type' => 'required',
            'password' => 'required|confirmed'
        ]);
        $unique_id = $this->generateId();

        User::create([
            'unique_id' => $unique_id,
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'isAdmin' => "1",
            'user_type' => $req->user_type,
            'password' => Hash::make($req->password)
        ]);
        return back()->with('success', $req->user_type . " was created Successfully");
    }

    public function profile()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        $user = ['user' => Auth::user()];
        return view('profile', $user)->with($setting);
    }

    public function doEditProfile(Request $req)
    {
        $req->validate([
            'image' => 'mimes:png,jpg,jpeg,gif,svg'
        ]);

        $user = User::where('unique_id', Auth::user()->unique_id)->first();
        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('profile_pics', $name, 'public');
            $locationImage = '/storage/' . $filePath;
        } else {
            $locationImage = $user['image'];
        }

        $user->update([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'image' => $req->image = $locationImage
        ]);
        return back()->with('success', "Profile Changed successfully");
    }
    public function changePassword(Request $req)
    {
        $user = User::where('unique_id', Auth::user()->unique_id)->first();
        $req->validate([
            'old_password' => 'required', new MatchOldPassword,
            'password' => 'required|confirmed'
        ]);
        $user->update([
            'password' => Hash::make($req->password)
        ]);
        return back()->with('pass_update', "Password has been successfully changed");
    }

    public function pageSettings()
    {
        $setting = ['setting' => Settings::where('isAdmin', '1')->first()];
        return view('page-settings')->with($setting);
    }
    public function addSocials(Request $req)
    {
        $prev_setting = Settings::where('isAdmin', '1')->first();
        $prev_setting->update([
            'whatsapp_promotion' => $req->whatsapp_promotion,
            'telegram_promotion' => $req->telegram_promotion,
            'facebook' => $req->facebook,
            'whatsapp' => $req->whatsapp,
            'instagram' => $req->instagram,
            'email' => $req->email,
            'telegram' => $req->telegram
        ]);
        return back()->with('success', "Settings changed Successfully");
    }
    public function uploaderNote(Request $req)
    {
        $prev_setting = Settings::where('isAdmin', '1')->first();
        $prev_setting->update([
            'uploader_note' => $req->uploader_note
        ]);

        return back()->with('done', "Uploader note changes was effected successfully");
    }
    public function footerUpload(Request $req)
    {
        $prev_setting = Settings::where('isAdmin', '1')->first();
        $prev_setting->update([
            'footer_note' => $req->footer_note
        ]);

        return back()->with('footer_change', "Footer note changes was effected successfully");
    }

    public function customLogo(Request $req)
    {
        $prev_setting = Settings::where('isAdmin', '1')->first();
        $prev_setting->update([
            'logo' => $req->logo
        ]);

        return back()->with('logo', "Custom Logo Created Successfully");
    }
}
