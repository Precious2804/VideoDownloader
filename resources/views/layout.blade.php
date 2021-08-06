<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/auth_login_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 02:06:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Uploader </title>
    <link rel="icon" type="image/x-icon" href="{{URL::asset('assets/img/favicon.ico')}}" />
    <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Nunito:400,600,700')}}" rel="stylesheet">
    <link href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/forms/switches.css')}}">
    <link href="{{URL::asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{URL::asset('assets/js/loader.js')}}"></script>
    <link href="{{URL::asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/components/cards/card.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{URL::asset('assets/css/scrollspyNav.cs')}}s" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('plugins/font-icons/fontawesome/css/regular.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}">

    <style>
        .feather-icon .icon-section {
            padding: 30px;
        }
        .feather-icon .icon-section h4 {
            color: #bfc9d4;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .feather-icon .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #191e3a;
            border-radius: 6px;
        }
        .feather-icon .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .feather-icon .icon-container { cursor: pointer; }
        .feather-icon .icon-container svg {
            color: #bfc9d4;
            margin-right: 6px;
            vertical-align: middle;
            width: 20px;
            height: 20px;
            fill: rgba(0, 23, 55, 0.08);
        }
        .feather-icon .icon-container:hover svg {
            color: #888ea8;
        }
        .feather-icon .icon-container span { display: none; }
        .feather-icon .icon-container:hover span { color: #888ea8; }
        .feather-icon .icon-link {
            color: #888ea8;
            font-weight: 600;
            font-size: 14px;
        }


        /*FAB*/
        .fontawesome .icon-section {
            padding: 30px;
        }
        .fontawesome .icon-section h4 {
            color: #bfc9d4;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .fontawesome .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #191e3a;
            border-radius: 6px;
        }
        .fontawesome .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .fontawesome .icon-container { cursor: pointer; }
        .fontawesome .icon-container i {
            font-size: 20px;
            color: #bfc9d4;
            vertical-align: middle;
            margin-right: 10px;
        }
        .fontawesome .icon-container:hover i { color: #888ea8; }
        .fontawesome .icon-container span { color: #888ea8; display: none; }
        .fontawesome .icon-container:hover span { color: #888ea8; }
        .fontawesome .icon-link {
            color: #888ea8;
            font-weight: 600;
            font-size: 14px;
        }
    </style>
</head>

<body>


    @yield('content')

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{URL::asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{URL::asset('assets/js/authentication/form-2.js')}}"></script>
    <script src="{{URL::asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>
    <script src="{{URL::asset('plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{URL::asset('plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/dashboard/dash_1.js')}}"></script>
    <script src="{{URL::asset('assets/js/scrollspyNav.js')}}"></script>

    <script src="{{URL::asset('assets/js/scrollspyNav.js')}}"></script>
    <script src="{{URL::asset('plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS --> 

    <script src="{{URL::asset('plugins/font-icons/feather/feather.min.js')}}"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
</body>

</html>