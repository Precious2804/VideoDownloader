@extends('layout')
@section('content')
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="{{route('dashboard')}}">
                    <img src="{{URL::asset('assets/img/logo.svg')}}" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="{{route('dashboard')}}" class="nav-link"> CORK </a>
            </li>
        </ul>

        <ul class="navbar-item flex-row ml-md-0 ml-auto">
            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    </div>
                </form>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN NAVBAR  -->
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg></a>

        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Upload A Video</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('/partials/sidebar')
    <!--  END SIDEBAR  -->
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div id="card_4" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12 float-left">
                                    <h4>Upload A New Video Here</h4>
                                    @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST" action="{{route('do_upload_video')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Title <span style="color: red;">*</span></label>
                                            <input type="title" name="title" class="form-control" value="{{old('title')}}" id="inputEmail4" placeholder="Enter the title of the video">
                                            <span class="text-danger">@error('title'){{ "$message" }}@enderror</span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Select FIle Type (e.g. MP4, Avi, 3gp) <span style="color: red;">*</span></label>
                                            <input type="text" name="type" class="form-control" value="{{old('type')}}" id="inputEmail4" placeholder="Enter File Type">
                                            <span class="text-danger">@error('type'){{ "$message" }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">File Size (e.g. 100MB)</label>
                                            <input type="text" name="size" class="form-control" value="{{old('size')}}" id="inputEmail4" placeholder="Enter File Size">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="basic-url">Video URL <span style="color: red;">*</span></label>
                                            <input type="url" name="video_url" value="{{old('video_url')}}" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Insert the video URL">
                                            <span class="text-danger">@error('video_url'){{ "$message" }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="basic-url">Subtitle URL </label>
                                            <input type="url" name="subtitle" value="{{old('subtitle')}}" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Insert the the video URL">
                                            <span class="text-danger">@error('subtitle'){{ "$message" }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-lg-12">
                                            <label for="basic-url">Video Description </label>
                                            <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Describe the video here"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <div class="widget-content widget-content-area">
                                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                                    <label>Choose a Featured Image <span style="color: red;">*</span> <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                    <label class="custom-file-container__custom-file">
                                                        <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                        <span class="text-danger">@error('image'){{ "$message" }}@enderror</span>
                                                        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="10485760" /> -->
                                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                    </label>
                                                    <div class="custom-file-container__image-preview"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Upload Video (max. size of 10MB)</label>
                                            <input type="file" name="video" class="form-control">
                                            <span class="text-danger">@error('video'){{ "$message" }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-lg-12">
                                            <button type="submit" class="btn btn-lg btn-secondary float-right">Upload Video Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  BEGIN CONTENT AREA  -->


</div>
</div>
<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
    </div>
    <div class="footer-section f-section-2">
        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg></p>
    </div>
</div>
</div>
</div>
<!--  END CONTENT AREA  -->
<!-- END MAIN CONTAINER -->

@stop