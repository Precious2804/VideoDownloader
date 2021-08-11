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
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('/partials/sidebar')
    <!--  END SIDEBAR  -->
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                    <div class="skills layout-spacing ">
                        <h3>Admin Settings</h3>
                        <div class="widget-content widget-content-area">
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        @if(Session::get('done'))
                        <div class="alert alert-success">
                            {{Session::get('done')}}
                        </div>
                        @endif
                        @if(Session::get('footer_change'))
                        <div class="alert alert-success">
                            {{Session::get('footer_change')}}
                        </div>
                        @endif
                            <form method="POST" action="{{route('add_socials')}}">
                                @csrf
                                <div class="form-row mb-4">
                                    <div class="form-group col-lg-6">
                                        <label for="inputEmail4">Whatsapp Promotion Link</label>
                                        <input type="text" name="whatsapp_promotion" value="{{$setting['whatsapp_promotion']}}" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="inputEmail4">Telegram Promotion Link</label>
                                        <input type="text" name="telegram_promotion" value="{{$setting['telegram_promotion']}}" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-lg-6">
                                        <label for="inputEmail4">Facebook Link</label>
                                        <input type="text" name="facebook" value="{{$setting['facebook']}}" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="inputEmail4">WhatsApp Link</label>
                                        <input type="text" name="whatsapp" value="{{$setting['whatsapp']}}" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-lg-6">
                                        <label for="inputEmail4">Instagram Link</label>
                                        <input type="text" name="instagram" value="{{$setting['instagram']}}" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="text" name="email" value="{{$setting['email']}}" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-lg-6">
                                        <label for="inputEmail4">Telegram</label>
                                        <input type="text" name="telegram" value="{{$setting['telegram']}}" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn btn-lg btn-secondary">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                    <div class="skills layout-spacing ">
                        <h3>Uploader's Note:</h3>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('uploader_note')}}" method="POST">
                                @csrf
                                <div class="form-row mb-4">
                                    <div class="form-group col-lg-12">
                                        <label for="">Uploader's Note</label>
                                        <textarea name="uploader_note" id="" cols="30" placeholder="Write Uploader's note here" rows="10" class="form-control">{{$setting['uploader_note']}}</textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" class="btn btn-lg btn-secondary">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                    <div class="skills layout-spacing ">
                        <h3>Footer Note:</h3>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('footer_upload')}}" method="POST">
                                @csrf
                                <div class="form-row mb-4">
                                    <div class="form-group col-lg-12">
                                        <label for="">Footer Note</label>
                                        <textarea name="footer_note" id="" cols="30" rows="10" class="form-control">
                                            {{$setting['footer_note']}}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" class="btn btn-lg btn-secondary">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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