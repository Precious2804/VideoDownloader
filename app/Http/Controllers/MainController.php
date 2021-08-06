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
        return view('dashboard');
    }

    public function uploadVideo()
    {
        return view('upload-video');
    }
    
    public function doUploadVideo(Request $req)
    {
        $validateSUb = $req->validate([
            'subtitle'=>'url'
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
}
