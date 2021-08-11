<div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index-2.html">
                        <img src="{{URL::asset('assets/img/logo.svg')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="{{route('dashboard')}}" class="nav-link"> CORK </a>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{URL::asset('assets/img/blank-image.PNG')}}" style="background-color: white;" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a href="{{route('profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> My Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a href="{{route('create-admin')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Create Admin</a>
                            </div>
                            <div class="dropdown-item">
                                <a href="{{route('logout')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>

<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{{route('dashboard')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Dasboard</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="#video" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Video</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="video" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('all-video')}}"> All Video Uploads </a>
                    </li>
                    <li>
                        <a href="{{route('upload-video')}}"> Upload Video </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#youtube" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Youtube</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="youtube" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('all-youtube')}}"> All Youtube Uploads </a>
                    </li>
                    <li>
                        <a href="{{route('upload-youtube')}}"> Upload Youtube Video </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#torrent" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Torrent</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="torrent" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('all-utorrent')}}"> All Torrent Uploads </a>
                    </li>
                    <li>
                        <a href="{{route('upload-utorrent')}}"> Upload Torrent Video </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#audio" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Audio</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="audio" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('all-audio')}}"> All Audio Uploads </a>
                    </li>
                    <li>
                        <a href="{{route('upload-audio')}}"> Upload Audio </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="{{route('all-uploads')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>All Uploads</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="#setting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Settings</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="setting" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('profile')}}">Edit Profile </a>
                    </li>
                    <li>
                        <a href="{{route('create-admin')}}"> Create Admin </a>
                    </li>
                    <li>
                        <a href="{{route('page-settings')}}"> Page Settings </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="{{route('logout')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Logout</span>
                    </div>
                </a>
            </li>
        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>