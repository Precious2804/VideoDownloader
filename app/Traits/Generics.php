<?php

namespace app\Traits;

use App\Models\VideosTable;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Str;



trait Generics
{
    // a function that generates a random unique ID
    function generateId()
    {
        $unique_id = (string) Str::uuid();
        $exploded = explode('-', $unique_id);
        $n_unique_id = $exploded[4];
        return $n_unique_id;
    }

    //a function that generates random numbers
    function generateRand()
    {
        $random = rand(100000, 999999);
        return $random;
    }

    function insertIntoVideosTable($req, $upload, $url, $video_type)
    {
        $req->validate([
            'title' => 'required|string',
            'type' => 'required',
            $upload => 'required|url',
            'image' => 'mimes:png,jpg,jpeg,gif,svg'
        ]);
        if($req->file('video')){
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('video_images', $name, 'public');

            $video_name = time() . '_' . $req->video->getClientOriginalName();
            $videoPath = $req->file('video')->storeAs('videos', $video_name, 'public');

            $unique_id = $this->generateId();
            $result = VideosTable::create([
                'unique_id' => $unique_id,
                'title' => $req->title,
                'type' => $req->type,
                'size' => $req->size,
                'video_type'=>$video_type,
                'url' => $url,
                'subtitle' => $req->subtitle,
                'description' => $req->description,
                'image'=>$req->image = '/storage/' . $filePath,
                'video'=>$req->video = '/storage/' . $videoPath
            ]);
            if($result){
                return back()->with('success', "The File Upload was Successfully Completed!!!");
            }        
        } 
        elseif($req->file('image')){
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('video_images', $name, 'public');

            $unique_id = $this->generateId();
            $result = VideosTable::create([
                'unique_id' => $unique_id,
                'title' => $req->title,
                'type' => $req->type,
                'size' => $req->size,
                'video_type'=>$video_type,
                'url' => $url,
                'embed'=>$req->embed,
                'subtitle' => $req->subtitle,
                'description' => $req->description,
                'image'=>$req->image = '/storage/' . $filePath
            ]);
            if($result){
                return back()->with('success', "The File Upload was Successfully Completed!!!");
            }
        }
    }
}
