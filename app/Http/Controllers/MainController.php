<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VideosTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\Generics;


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
        $lastVideo = ['lastVideo'=>VideosTable::where('video_type', "Video")->orderBy('created_at', 'desc')->first()];
        $lastAudio = ['lastAudio'=>VideosTable::where('video_type', "Audio")->orderBy('created_at', 'desc')->first()];
        $lastYoutube = ['lastYoutube'=>VideosTable::where('video_type', "Youtube")->orderBy('created_at', 'desc')->first()];
        $lastUtorrent = ['lastUtorrent'=>VideosTable::where('video_type', "UTorrent")->orderBy('created_at', 'desc')->first()];
        $allUploads = ['allUploads' => VideosTable::latest()->take(5)->get()];
        return view('dashboard')->with($lastVideo)
                                ->with($lastAudio)
                                ->with($lastYoutube)
                                ->with($lastUtorrent)
                                ->with($allUploads);
    }

    public function uploadVideo()
    {
        return view('upload-video');
    }

    public function doUploadVideo(Request $req)
    {
        $validateSUb = $req->validate([
            'subtitle' => 'url'
        ]);
        $upload = 'video_url';
        $url = $req->video_url;
        $video_type = "Video";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type)->with($validateSUb);
    }


    public function uploadAudio()
    {
        return view('upload-audio');
    }

    public function doUploadAudio(Request $req)
    {
        $upload = 'audio_url';
        $url = $req->audio_url;
        $video_type = "Audio";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type);
    }

    public function allUploads()
    {
        $allUploads = ['allUploads' => VideosTable::all()];
        return view('all-uploads')->with($allUploads);
    }

    public function edit($unique_id)
    {
        $findUpload = ['findUpload' => VideosTable::where('unique_id', $unique_id)->first()];
        return view('/edit')->with($findUpload);
    }

    public function doEdit(Request $req)
    {
        $req->validate([
            'url' => 'url',
            'subtitle' => 'url',
            'image' => 'mimes:png,jpg,jpeg,gif,svg'
        ]);
        $selectUpload = VideosTable::where ('unique_id', $req->unique_id)->first();
        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('video_images', $name, 'public');
            $locationImage = '/storage/' . $filePath;
        }
        else{
            $locationImage = $selectUpload['image'];
        }

        $selectUpload->update([
            'title'=>$req->title,
            'type'=>$req->type,
            'name'=>$req->name,
            'size'=>$req->size,
            'url'=>$req->url,
            'subtitle'=>$req->subtitle,
            'description'=>$req->description,
            'image'=>$req->image = $locationImage
        ]);
        return back()->with('updated', "This file has been updated successfully");
    }

    public function delete($unique_id){
        $selectID = VideosTable::where('unique_id', $unique_id)->first();
        $selectID->delete();

        return back()->with('deleted', "Delete was Successfull");
    }

    public function uploadYoutube()
    {
        return view('upload-youtube');
    }

    public function doUploadYoutube(Request $req)
    {
        $upload = 'youtube_url';
        $url = $req->youtube_url;
        $video_type = "Youtube";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type);
    }

    public function uploadUtorrent()
    {
        return view('upload-utorrent');
    }

    public function doUploadUtorrent(Request $req)
    {
        $upload = 'utorrent_url';
        $url = $req->utorrent_url;
        $video_type = "UTorrent";
        return $this->insertIntoVideosTable($req, $upload, $url, $video_type);
    }

    public function downloadVideo($unique_id){
        $video = ['video'=>VideosTable::where('unique_id', $unique_id)->first()];
        return view('download-video')->with($video);
    }
}
