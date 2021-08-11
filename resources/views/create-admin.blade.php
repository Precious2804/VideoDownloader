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
                            <li class="breadcrumb-item active" aria-current="page"><span>Create Admin</span></li>
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
                                    <h4>Create a new Admin</h4>
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
                                <form method="POST" action="{{route('do_create_admin')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name <span style="color: red;">*</span></label>
                                            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="inputEmail4" placeholder="Enter name">
                                            <span class="text-danger">@error('name'){{ "$message" }}@enderror</span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Email <span style="color: red;">*</span></label>
                                            <input type="email" name="email" class="form-control" value="{{old('email')}}" id="inputEmail4" placeholder="Enter email">
                                            <span class="text-danger">@error('email'){{ "$message" }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Phone Number</label>
                                            <input type="tel" name="phone" class="form-control" value="{{old('phone')}}" id="inputEmail4" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Select User Type <span style="color: red;">*</span></label>
                                            <select name="user_type" id="" class="form-control custom-select">
                                                <option value="">Select Type</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Super Admin">Super Admin</option>
                                            </select>
                                            <span class="text-danger">@error('user_type'){{ "$message" }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="basic-url">Password <span style="color: red;">*</span></label>
                                            <input type="password" name="password" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Password">
                                            <span class="text-danger">@error('password'){{ "$message" }}@enderror</span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="basic-url">Repeat Password <span style="color: red;">*</span></label>
                                            <input type="password" name="password_confirmation" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Password">
                                            <span class="text-danger">@error('password_confirmation'){{ "$message" }}@enderror</span>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit" class="btn btn-lg btn-secondary float-right">Create Now</button>
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