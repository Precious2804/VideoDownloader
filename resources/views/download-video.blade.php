<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('style.css')}}">
    <link href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('plugins/font-icons/fontawesome/css/regular.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}">
    <title>Download Now</title>
</head>

<body style="background-color: #101933;">

    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <div class="path" style="text-transform: uppercase; font-size: 20px; font-weight:bold">Download Content HERE</div>
                        <div class="row">
                            <div class="col-md-6 text-center align-self-center"> <img class="img-fluid" src="{{$video['image']}}"> </div>
                            <div class="col-md-6 info">
                                <div class="row title">
                                    <div class="col">
                                        <span class="text-info">Title: </span>
                                        <h2 class="text-secondary"> {{$video['title']}} </h2>
                                    </div>
                                </div>
                                <div class="row title">
                                    <div class="col">
                                        <span class="text-info">Description:</span>
                                        <p class="text-secondary">{{$video['description']}}</p>
                                    </div>
                                </div>
                                <div class="row price" > <label class="radio"> <input type="radio" name="size1" value="small" checked> <span>
                                            <div class="row"><big><b>File Type</b></big></div>
                                            <div class="row">{{$video['type']}}</div></a>
                                        </span> </label> <label class="radio"> <input type="radio" name="size1" value="large"> <span>
                                            <div class="row"><big><b>File Size</b></big></div>
                                            <div class="row">{{$video['size']}}</div></a>
                                        </span> </label> 
                                </div>
                                <div class="row title">
                                    <div class="col">
                                        @if($video['video_type'] == "Video")
                                        <span class="text-info">Produced by: </span>
                                        @endif                                        
                                        @if($video['video_type'] == "UTorrent")
                                        <span class="text-info">Produced by: </span>
                                        @endif                                        
                                        @if($video['video_type'] == "Youtube")
                                        <span class="text-info">Created by: </span>
                                        @endif                                        
                                        @if($video['video_type'] == "Audio")
                                        <span class="text-info">Song by: </span>
                                        @endif                                        
                                        <p class="text-secondary">{{$video['name']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row lower">
                        @if($video['video_type'] == "Video")
                            <div class="col text-left align-self-center"> <a href="" download="{{$video['subtitle']}}"><button class="btn btn btn-success">Download Subtitle</button></a> </div>
                        @endif    
                        @if($video['video_type'] == "Audio")
                            <div class="col text-right align-self-center"> <a href="" download="{{$video['url']}}"><button class="btn btn-lg btn-success active">Download Audio Now</button></a> </div>
                        @else
                            <div class="col text-right align-self-center"> <a href="" download="{{$video['url']}}"><button class="btn btn-lg btn-success active">Download Video Now</button></a> </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>






<!-- {{$video['title']}} <br>
{{$video['type']}} <br>
{{$video['name']}} <br>
{{$video['size']}} <br>
{{$video['video_type']}} <br>
{{$video['url']}} <br>
{{$video['subtitle']}} <br>
{{$video['description']}} <br>
{{$video['image']}} <br>
{{$video['created_at']}} <br>
{{$video['updated_at']}} <br> -->