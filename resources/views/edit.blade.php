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
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="overlay"></div>
                <div class="search-overlay"></div>

                <!--  BEGIN SIDEBAR  -->
                @include('/partials/sidebar')
                <!--  END SIDEBAR  -->
                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                    <div class="user-profile layout-spacing">
                        <div class="widget-content widget-content-area">
                            <div class="text-center user-info">
                                <img src="{{URL::asset($findUpload['image'])}}" width="200px" height="150px" alt="avatar">
                                <p class="">{{$findUpload['title']}}</p>
                            </div>
                            <div class="user-info-list">
                                <div class="">
                                    <ul class="contacts-block list-unstyled">
                                        <li class="contacts-block__item">
                                            File type: <span style="color: #009688;">{{$findUpload['type']}}</span>
                                        </li>
                                        <li class="contacts-block__item">
                                            Producer/Artiste: <span style="color: #009688;">{{$findUpload['name']}}</span>
                                        </li>
                                        <li class="contacts-block__item">
                                            File Size: <span style="color: #009688;">{{$findUpload['size']}}</span>
                                        </li>
                                        <li class="contacts-block__item">
                                            Category: <span style="color: #009688;">{{$findUpload['video_type']}}</span>
                                        </li>
                                        <li class="contacts-block__item">
                                            URL: <span style="color: #009688;">{{$findUpload['url']}}</span>
                                        </li>
                                        @if($findUpload['video_type'] == "Video")
                                        <li class="contacts-block__item">
                                            Subtile: <span style="color: #009688;">{{$findUpload['subtitle']}}</span>
                                        </li>
                                        @endif
                                        <li class="contacts-block__item">
                                            Creation Date/Time: <span style="color: #009688;">{{$findUpload['created_at']}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                    <div class="skills layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Edit details</h3>
                            @if(Session::get('updated'))
                            <div class="alert alert-success">
                                {{Session::get('updated')}}
                            </div>
                            @endif
                            <form method="POST" action="{{route('do_edit')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="unique_id" value="{{$findUpload['unique_id']}}" id="">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Title</label>
                                        <input type="title" name="title" class="form-control" value="{{$findUpload['title']}}" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">FIle Type</label>
                                        <input type="text" name="type" class="form-control" value="{{$findUpload['type']}}" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">File Size Here</label>
                                        <input type="text" name="size" class="form-control" value="{{$findUpload['size']}}" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="basic-url">Video URL Here</label>
                                        <input type="url" name="url" value="{{$findUpload['url']}}" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        <span class="text-danger">@error('url'){{ "$message" }}@enderror</span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="basic-url">Subtitle URL Here</label>
                                        @if($findUpload['video_type'] == "Video")
                                        <input type="url" name="subtitle" value="{{$findUpload['subtitle']}}" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        <span class="text-danger">@error('subtitle'){{ "$message" }}@enderror</span>
                                        @else
                                        <input type="url" name="subtitle" disabled value="Subtitle cannot be added for this content" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        @endif
                                    </div>
                                    @if($findUpload['video_type'] != "Audio")
                                    <div class="form-group col-md-6">
                                        <label for="basic-url">Brief Description </label>
                                        <input type="text" name="description" value="{{$findUpload['description']}}" class="form-control" aria-describedby="basic-addon3">
                                    </div>
                                    @endif
                                    <div class="form-group col-md-6">
                                        <label for="basic-url">Produced by:</label>
                                        <input type="name" name="name" value="{{$findUpload['name']}}" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <div class="widget-content widget-content-area">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label>Choose a Featured Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
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
                                    <div class="form-group col-lg-6">
                                        <button type="submit" class="btn btn-lg btn-secondary float-right">Edit Now</button>
                                    </div>
                                </div>
                            </form>
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