<!-- <!DOCTYPE html>
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
                            @if($video['subtitle'])
                                <div class="col text-left align-self-center"> <a href="/download"><button class="btn btn btn-success">Download Subtitle</button></a> </div>
                            @endif
                        @endif    
                        @if($video['video_type'] == "Audio")
                            <div class="col text-right align-self-center"> <a href="/download"><button class="btn btn-lg btn-success active">Download Audio Now</button></a> </div>
                        @else
                            <div class="col text-right align-self-center"> <a href="/download"><button class="btn btn-lg btn-success active">Download Video Now</button></a> </div>
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





<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-39050107-1" type="73f7f2fdfafe67cd84c3ffd1-text/javascript"></script>
    <script type="73f7f2fdfafe67cd84c3ffd1-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-39050107-1');
    </script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-39050107-16" type="73f7f2fdfafe67cd84c3ffd1-text/javascript"></script>
    <script type="73f7f2fdfafe67cd84c3ffd1-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-39050107-16');
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Download Now</title>
    <meta name="description" content="The Green Knight (2021) HDCAM" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/meetdownload.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/pop-modal.css')}}" />
</head>

<body>
    <nav class="navbar mb40" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="{{URL::asset('assets/img/meet_dl.png')}}" width="112" height="28">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>
                <a class="navbar-item" href="https://movies.meetdownload.com/">
                    Meetdownload Movies
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{route('welcome')}}" class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="content_area">
        <div xmlns="http://www.w3.org/1999/html">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-9">
                    <!-- <div style="text-align: center;">
                        <a class='advert' href='https://meetdownload.com/wl-ad/go/6112e734099cc541285678' target='_blank'>
                            <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="73f7f2fdfafe67cd84c3ffd1-|49"></script><img src='../../i0.wp.com/storage.waploaded.com/images/83e4e5a45845c96edea3be4367e7133d.png' onLoad='wl_ad_imp_1628628788_33173172()' alt='SMM Buy Telegram Members' />
                            <div id='wl_ad_imp_1628628788_33173172_dom'></div>
                        </a>
                    </div> -->
                </div>
            </div>
            <nav class="panel file-info-panel  is-primary">
                <p class="panel-heading">
                    {{$video['title']}}
                </p>
                <div class="row">
                    <div class="col-xs-12 col-sm-0 col-md-0 col-lg-4">
                        <img src="{{URL::asset($video['image'])}}" style="max-width: 100%; width: 100%;" />
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-8">
                        <div class="panel-block">
                            <div class="flex flex_row flex_justify_space_between">
                                <div>
                                    <span class="panel-icon">
                                        <ion-icon name="document-outline"></ion-icon>
                                    </span>
                                    File Type:
                                </div>
                                <div>
                                    {{$video['type']}}
                                </div>
                            </div>
                        </div>
                        <div class="panel-block">
                            <div class="flex flex_row flex_justify_space_between">
                                <div>
                                    <span class="panel-icon">
                                        <ion-icon name="barbell-outline"></ion-icon>
                                    </span>
                                    File Size:
                                </div>
                                <div>
                                    {{$video['size']}}
                                </div>
                            </div>
                        </div>
                        <div class="panel-block">
                            <div class="flex flex_row flex_justify_space_between">
                                <div>
                                    <span class="panel-icon">
                                        <ion-icon name="time-outline"></ion-icon>
                                    </span>
                                    Upload Date/Time:
                                </div>
                                <div>
                                    {{$video['created_at']}}
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center; border: 1px solid red; padding: 5px;">
                            <ion-icon name="warning"></ion-icon> <span style="color: #1abc9c; font-weight: bold"> Uploader's Note:</span> All <strong>Movies</strong> and <strong>Series</strong> must be Watched from the latest version of <strong>VLC Media player</strong> or any advanced player, else it would be
                            blank video with just sound. <a target="_blank" href="https://wll.pw/v/74490"><strong>Learn How to Fix it</strong></a></a>
                        </div>
                        <p id="fastdl"><br /></p>
                        <div class="panel-block">
                            <div>


                                <a href="{{$video['url']}}" target="_blank">
                                    <span class="icon is-medium">
                                        <ion-icon size="medium" name="cloud-download-outline"></ion-icon>
                                    </span>
                                    <button style="background-color: #2ecc71;">Download Video ({{$video['size']}})</button>
                                </a>
                            </div>
                            <hr />
                            <div style="text-align: center;" class="mt20">
                                <p><a target="_blank" href="https://wll.pw/v/368556">How to Improve Download Speed</a></p>
                            </div>
                            <br /><br />
                            <div class="panel-block">
                                <div class="panel-block">
                                    <a target="_blank" href="https://bit.ly/wapmovie" class="button is-rounded is-success is-medium is-fullwidth mt10">
                                        <span class="icon">
                                            <ion-icon name="logo-whatsapp"></ion-icon>
                                        </span>
                                        <span>Get Movies on Whatsapp</span>
                                    </a>
                                </div>
                                <div class="mt20">
                                    <a target="_blank" href="https://t.me/waploadedmovies" class="button is-rounded is-info is-medium is-fullwidth mt10">
                                        <span class="icon">
                                            <ion-icon size="medium" name="paper-plane-outline"></ion-icon>
                                        </span>
                                        <span>Get Movies on Telegram</span>
                                    </a>
                                </div>
                            </div>

                        </div>
            </nav>
            <div class="mb20">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <nav class="panel file-info-panel  is-info">
                            <p class="panel-heading">
                                Share On
                            </p>
                            <div class="panel-block">
                                <div class="row">
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="facebook" data-width="100%" data-title="Facebook" data-url="waploaded-392-the-green-knight-2021-hdcam-mp4.html">
                                            Facebook </button>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="twitter" data-width="100%" data-title="Twitter" data-url="waploaded-392-the-green-knight-2021-hdcam-mp4.html">
                                            Twitter </button>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="whatsapp" data-width="100%" data-title="WhatsApp Mobile" data-url="waploaded-392-the-green-knight-2021-hdcam-mp4.html">
                                            WhatsApp Mobile </button>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="whatsapp" data-width="100%" data-title="WhatsApp Web" data-url="https://meetdownload.com/1b1c467239834bcaa0571171d53cb9e1/waploaded-392-the-green-knight-2021-hdcam-mp4" data-web>
                                            WhatsApp Web </button>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="email" data-width="100%" data-title="Email" data-url="waploaded-392-the-green-knight-2021-hdcam-mp4.html">
                                            Email </button>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="telegram" data-width="100%" data-title="Telegram" data-url="waploaded-392-the-green-knight-2021-hdcam-mp4.html">
                                            Telegram </button>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="linkedin" data-width="100%" data-title="Linkedin" data-url="waploaded-392-the-green-knight-2021-hdcam-mp4.html">
                                            Linkedin </button>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <button class="button" data-sharer="pinterest" data-width="100%" data-title="Pinterest" data-url="waploaded-392-the-green-knight-2021-hdcam-mp4.html">
                                            Pinterest </button>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-8">
                        <nav class="panel file-info-panel  is-info">
                            <p class="panel-heading">
                                Embed
                            </p>
                            <div class="panel-block">
                                <div>URL:</div>
                                <div><input class="input is-info" type="text" readonly value="{{$video['url']}}" /></div>
                            </div>
                            <div class="panel-block">
                                <div>Embed Code</div>
                                <div><input class="input is-info" type="text" readonly value="<iframe src='https://meetdownload.com/embed/1b1c467239834bcaa0571171d53cb9e1/waploaded-392-the-green-knight-2021-hdcam-mp4' width='100%'  frameborder='0'></iframe>" /></div>
                            </div>
                            <div class="panel-block">
                                <div>BB Code</div>
                                <div><input class="input is-info" type="text" readonly value="[URL=https://meetdownload.com/1b1c467239834bcaa0571171d53cb9e1/waploaded-392-the-green-knight-2021-hdcam-mp4][Waploaded_392]The_Green_Knight_2021_HDCAM.mp4 ( 190.83MB )[/URL]" /></div>
                            </div>

                        </nav>
                    </div>
                    <script src="../assets/js/sharer.min.js" async type="73f7f2fdfafe67cd84c3ffd1-text/javascript"></script>
                </div>
            </div>

        </div>
    </div>
    <div class="center_children">

        <script type="73f7f2fdfafe67cd84c3ffd1-text/javascript">
            function handleStickyAdCloseBtn() {

                var closeBtn = document.getElementById("close_stick_ad_btn") || null

                if (closeBtn == null) return false;

                closeBtn.addEventListener("click", function(e) {
                    e.preventDefault();

                    var stickyAdDom = document.getElementById("bottom_sticky") || null

                    if (stickyAdDom == null) return false;

                    stickyAdDom.style.display = 'none';
                });
            }

            window.onload = function() {
                handleStickyAdCloseBtn();
            }

            window.addEventListener('DOMContentLoaded', function() {
                handleStickyAdCloseBtn();
            });
        </script>
        <footer class="page-footer text-center text-md-left font-small indigo pt-4 mt-4">

            <div class="container-fluid text-center text-md-left">
                <div class="row">

                    <div class="coll-md-6 pb-3">
                        <div class="text-center"> <strong>
                                <h3 class="title mb-3">Meetdownload Service</h3>
                            </strong></div>
                        <hr />
                        <p>
                            <b>Meetdownload</b> is a service that grabs and serves downloads of files around the internet (public domain).
                            If you experience an issue with this page, kindly email <b><a href="https://meetdownload.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9cbdcc9d6cbcdcaf9d4dcdccdddd6ced7d5d6d8dd97dad6d4">[email&#160;protected]</a></b> we will try to fix it.
                        </p>
                        <br />
                        <p>
                            if you find any infringing files of yours on our service, contact us immediately <b><a href="https://meetdownload.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="21454c4240614c444455454e564f4d4e40450f424e4c">[email&#160;protected]</a></b>.
                            While we may disable access to the page, the file may still exist on the internet for download.
                        </p>
                    </div>


                    <div class="coll-md-6 pb-3">
                        <div class="text-center"> <strong>
                                <h3 class="title mb-3">Vital Pages</h3>
                            </strong></div>
                        <hr />
                        <ul class="list-unstyled">
                            <li>
                                🔥 <a href="https://movies.meetdownload.com/">Latest Movies 2020</a>
                            </li>
                            <br />
                            <li>
                                🔥 <a href="http://dlmovies.waploaded.ng/">Download Youtube Movies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright py-3 text-center">
                Copyright © 2020 Meetdownload Service. All right reserved.
            </div>

        </footer>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="73f7f2fdfafe67cd84c3ffd1-module" src="../../unpkg.com/ionicons%405.0.0/dist/ionicons/ionicons.esm.js" async></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="73f7f2fdfafe67cd84c3ffd1-|49" defer=""></script>
</body>


<script data-cfasync="false" id="clevernt" type="text/javascript">
    (function(document, window) {
        var c = document.createElement("script");
        c.type = "text/javascript";
        c.async = !0;
        c.id = "CleverNTLoader41628";
        c.setAttribute("data-target", window.name);
        c.setAttribute("data-callback", "put-your-callback-macro-here");
        c.src = "../../clevernt.com/scripts/dd397ca544cee1bf727b75ae92ab7038.min638e.js?20200221=" + Math.floor((new Date).getTime());
        var a = !1;
        try {
            a = parent.document.getElementsByTagName("script")[0] || document.getElementsByTagName("script")[0];
        } catch (e) {
            a = !1;
        }
        a || (a = document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]);
        a.parentNode.insertBefore(c, a);
    })(document, window);
</script>

<script type="73f7f2fdfafe67cd84c3ffd1-text/javascript">
    _atrk_opts = {
        atrk_acct: "zs80k1a0Sn00ic",
        domain: "waploaded.com",
        dynamic: true
    };
    (function() {
        var as = document.createElement('script');
        as.type = 'text/javascript';
        as.async = true;
        as.src = "../../certify-js.alexametrics.com/atrk.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(as, s);
    })();
</script>
<noscript><img src="../../certify.alexametrics.com/atrk1e3e.gif?account=zs80k1a0Sn00ic" style="display:none" height="1" width="1" alt="" /></noscript>


<script data-cfasync="false" type="text/javascript" src="http://ateletswitoto.com/rFqbltDBbesEJ/13892"></script>

<script data-cfasync="false" async type="text/javascript" src="http://venuegirtjive.com/1clkn/13114"></script>


<script type="73f7f2fdfafe67cd84c3ffd1-application/javascript">
    (function() {

        //version 1.0.0

        var adConfig = {
            "ads_host": "a.exdynsrv.com",
            "syndication_host": "syndication.exdynsrv.com",
            "idzone": 3041612,
            "popup_fallback": true,
            "popup_force": false,
            "chrome_enabled": true,
            "new_tab": true,
            "frequency_period": 5,
            "frequency_count": 1,
            "trigger_method": 3,
            "trigger_class": "",
            "only_inline": false,
            "t_venor": false
        };

        if (!window.document.querySelectorAll) {
            document.querySelectorAll = document.body.querySelectorAll = Object.querySelectorAll = function querySelectorAllPolyfill(r, c, i, j, a) {
                var d = document,
                    s = d.createStyleSheet();
                a = d.all;
                c = [];
                r = r.replace(/\[for\b/gi, "[htmlFor").split(",");
                for (i = r.length; i--;) {
                    s.addRule(r[i], "k:v");
                    for (j = a.length; j--;) {
                        a[j].currentStyle.k && c.push(a[j])
                    }
                    s.removeRule(0)
                }
                return c
            }
        }
        var popMagic = {
            version: "1.0.0",
            cookie_name: "",
            url: "",
            config: {},
            open_count: 0,
            top: null,
            browser: null,
            venor_loaded: false,
            venor: false,
            configTpl: {
                ads_host: "",
                syndication_host: "",
                idzone: "",
                frequency_period: 720,
                frequency_count: 1,
                trigger_method: 1,
                trigger_class: "",
                popup_force: false,
                popup_fallback: false,
                chrome_enabled: true,
                new_tab: false,
                cat: "",
                tags: "",
                el: "",
                sub: "",
                sub2: "",
                sub3: "",
                only_inline: false,
                t_venor: false
            },
            init: function(config) {
                if (typeof config.idzone === "undefined" || !config.idzone) {
                    return
                }
                for (var key in this.configTpl) {
                    if (!this.configTpl.hasOwnProperty(key)) {
                        continue
                    }
                    if (typeof config[key] !== "undefined") {
                        this.config[key] = config[key]
                    } else {
                        this.config[key] = this.configTpl[key]
                    }
                }
                if (typeof this.config.idzone === "undefined" || this.config.idzone === "") {
                    return
                }
                if (this.config.only_inline !== true) {
                    this.loadHosted()
                }
                this.addEventToElement(window, "load", this.preparePop)
            },
            getCountFromCookie: function() {
                var shownCookie = popMagic.getCookie(popMagic.cookie_name);
                var ctr = typeof shownCookie === "undefined" ? 0 : parseInt(shownCookie);
                if (isNaN(ctr)) {
                    ctr = 0
                }
                return ctr
            },
            shouldShow: function() {
                if (popMagic.open_count >= popMagic.config.frequency_count) {
                    return false
                }
                var ctr = popMagic.getCountFromCookie();
                popMagic.open_count = ctr;
                return !(ctr >= popMagic.config.frequency_count)
            },
            venorShouldShow: function() {
                return !popMagic.config.t_venor || popMagic.venor_loaded && popMagic.venor === "0"
            },
            setAsOpened: function() {
                var new_ctr = 1;
                if (popMagic.open_count !== 0) {
                    new_ctr = popMagic.open_count + 1
                } else {
                    new_ctr = popMagic.getCountFromCookie() + 1
                }
                popMagic.setCookie(popMagic.cookie_name, new_ctr, popMagic.config.frequency_period);
                if (new_ctr >= popMagic.config.frequency_count) {
                    popMagic.setCookie("nb-no-req-" + popMagic.config.idzone, true, popMagic.config.frequency_period)
                }
            },
            loadHosted: function() {
                var hostedScript = document.createElement("script");
                hostedScript.type = "application/javascript";
                hostedScript.async = true;
                hostedScript.src = "//" + this.config.ads_host + "/popunder1000.js";
                hostedScript.id = "popmagicldr";
                for (var key in this.config) {
                    if (!this.config.hasOwnProperty(key)) {
                        continue
                    }
                    if (key === "ads_host" || key === "syndication_host") {
                        continue
                    }
                    hostedScript.setAttribute("data-exo-" + key, this.config[key])
                }
                var insertAnchor = document.getElementsByTagName("body").item(0);
                if (insertAnchor.firstChild) {
                    insertAnchor.insertBefore(hostedScript, insertAnchor.firstChild)
                } else {
                    insertAnchor.appendChild(hostedScript)
                }
            },
            preparePop: function() {
                if (typeof exoJsPop101 === "object" && exoJsPop101.hasOwnProperty("add")) {
                    return
                }
                popMagic.top = self;
                if (popMagic.top !== self) {
                    try {
                        if (top.document.location.toString()) {
                            popMagic.top = top
                        }
                    } catch (err) {}
                }
                popMagic.cookie_name = "splashWeb-" + popMagic.config.idzone + "-42";
                if (popMagic.config.t_venor && popMagic.shouldShow()) {
                    var xmlhttp = new XMLHttpRequest;
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
                            popMagic.venor_loaded = true;
                            if (xmlhttp.status == 200) {
                                popMagic.venor = xmlhttp.responseText
                            }
                        }
                    };
                    var protocol = document.location.protocol !== "https:" && document.location.protocol !== "http:" ? "https:" : document.location.protocol;
                    xmlhttp.open("GET.html", protocol + "//" + popMagic.config.syndication_host + "/venor.php", true);
                    try {
                        xmlhttp.send()
                    } catch (error) {
                        popMagic.venor_loaded = true
                    }
                }
                popMagic.buildUrl();
                popMagic.browser = popMagic.browserDetector.detectBrowser(navigator.userAgent);
                if (!popMagic.config.chrome_enabled && (popMagic.browser.name === "chrome" || popMagic.browser.name === "crios")) {
                    return
                }
                var popMethod = popMagic.getPopMethod(popMagic.browser);
                popMagic.addEvent("click", popMethod)
            },
            getPopMethod: function(browserInfo) {
                if (popMagic.config.popup_force) {
                    return popMagic.methods.popup
                }
                if (popMagic.config.popup_fallback && browserInfo.name === "chrome" && browserInfo.version >= 68 && !browserInfo.isMobile) {
                    return popMagic.methods.popup
                }
                if (browserInfo.isMobile) {
                    return popMagic.methods.default
                }
                if (browserInfo.name === "chrome") {
                    return popMagic.methods.chromeTab
                }
                return popMagic.methods.default
            },
            buildUrl: function() {
                var protocol = document.location.protocol !== "https:" && document.location.protocol !== "http:" ? "https:" : document.location.protocol;
                var p = top === self ? document.URL : document.referrer;
                var script_info = {
                    type: "inline",
                    name: "popMagic",
                    ver: this.version
                };
                var encodeScriptInfo = function(script_info) {
                    var result = script_info["type"] + "|" + script_info["name"] + "|" + script_info["ver"];
                    return encodeURIComponent(btoa(result))
                };
                this.url = protocol + "//" + this.config.syndication_host + "/splash.php" + "?cat=" + this.config.cat + "&idzone=" + this.config.idzone + "&type=8" + "&p=" + encodeURIComponent(p) + "&sub=" + this.config.sub + (this.config.sub2 !== "" ? "&sub2=" + this.config.sub2 : "") + (this.config.sub3 !== "" ? "&sub3=" + this.config.sub3 : "") + "&block=1" + "&el=" + this.config.el + "&tags=" + this.config.tags + "&scr_info=" + encodeScriptInfo(script_info)
            },
            addEventToElement: function(obj, type, fn) {
                if (obj.addEventListener) {
                    obj.addEventListener(type, fn, false)
                } else if (obj.attachEvent) {
                    obj["e" + type + fn] = fn;
                    obj[type + fn] = function() {
                        obj["e" + type + fn](window.event)
                    };
                    obj.attachEvent("on" + type, obj[type + fn])
                } else {
                    obj["on" + type] = obj["e" + type + fn]
                }
            },
            addEvent: function(type, fn) {
                var targetElements;
                if (popMagic.config.trigger_method == "3") {
                    targetElements = document.querySelectorAll("a");
                    for (i = 0; i < targetElements.length; i++) {
                        popMagic.addEventToElement(targetElements[i], type, fn)
                    }
                    return
                }
                if (popMagic.config.trigger_method == "2" && popMagic.config.trigger_method != "") {
                    var trigger_classes;
                    var trigger_classes_final = [];
                    if (popMagic.config.trigger_class.indexOf(",") === -1) {
                        trigger_classes = popMagic.config.trigger_class.split(" ")
                    } else {
                        var trimmed_trigger_classes = popMagic.config.trigger_class.replace(/\s/g, "");
                        trigger_classes = trimmed_trigger_classes.split(",")
                    }
                    for (var i = 0; i < trigger_classes.length; i++) {
                        if (trigger_classes[i] !== "") {
                            trigger_classes_final.push("." + trigger_classes[i])
                        }
                    }
                    targetElements = document.querySelectorAll(trigger_classes_final.join(", "));
                    for (i = 0; i < targetElements.length; i++) {
                        popMagic.addEventToElement(targetElements[i], type, fn)
                    }
                    return
                }
                popMagic.addEventToElement(document, type, fn)
            },
            setCookie: function(name, value, ttl_minutes) {
                var now_date = new Date;
                now_date.setMinutes(now_date.getMinutes() + parseInt(ttl_minutes));
                var c_value = encodeURIComponent(value) + "; expires=" + now_date.toUTCString() + "; path=/";
                document.cookie = name + "=" + c_value
            },
            getCookie: function(name) {
                var i, x, y, cookiesArray = document.cookie.split(";");
                for (i = 0; i < cookiesArray.length; i++) {
                    x = cookiesArray[i].substr(0, cookiesArray[i].indexOf("="));
                    y = cookiesArray[i].substr(cookiesArray[i].indexOf("=") + 1);
                    x = x.replace(/^\s+|\s+$/g, "");
                    if (x === name) {
                        return decodeURIComponent(y)
                    }
                }
            },
            randStr: function(length, possibleChars) {
                var text = "";
                var possible = possibleChars || "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                for (var i = 0; i < length; i++) {
                    text += possible.charAt(Math.floor(Math.random() * possible.length))
                }
                return text
            },
            isValidUserEvent: function(event) {
                if ("isTrusted" in event && event.isTrusted && popMagic.browser.name !== "ie" && popMagic.browser.name !== "safari") {
                    return true
                } else {
                    return event.screenX != 0 && event.screenY != 0
                }
            },
            isValidHref: function(href) {
                if (typeof href === "undefined" || href == "") {
                    return false
                }
                var empty_ref = /\s?javascript\s?:/i;
                return !empty_ref.test(href)
            },
            findLinkToOpen: function(clickedElement) {
                var target = clickedElement;
                var location = false;
                try {
                    var breakCtr = 0;
                    while (breakCtr < 20 && !target.getAttribute("href") && target !== document && target.nodeName.toLowerCase() !== "html") {
                        target = target.parentNode;
                        breakCtr++
                    }
                    var elementTargetAttr = target.getAttribute("target");
                    if (!elementTargetAttr || elementTargetAttr.indexOf("_blank") === -1) {
                        location = target.getAttribute("href")
                    }
                } catch (err) {}
                if (!popMagic.isValidHref(location)) {
                    location = false
                }
                return location || window.location.href
            },
            getPuId: function() {
                return "ok_" + Math.floor(89999999 * Math.random() + 1e7)
            },
            browserDetector: {
                browserDefinitions: [
                    ["firefox", /Firefox\/([0-9.]+)(?:\s|$)/],
                    ["opera", /Opera\/([0-9.]+)(?:\s|$)/],
                    ["opera", /OPR\/([0-9.]+)(:?\s|$)$/],
                    ["edge", /Edg(?:e|)\/([0-9._]+)/],
                    ["ie", /Trident\/7\.0.*rv:([0-9.]+)\).*Gecko$/],
                    ["ie", /MSIE\s([0-9.]+);.*Trident\/[4-7].0/],
                    ["ie", /MSIE\s(7\.0)/],
                    ["safari", /Version\/([0-9._]+).*Safari/],
                    ["chrome", /(?!Chrom.*Edg(?:e|))Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],
                    ["chrome", /(?!Chrom.*OPR)Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],
                    ["bb10", /BB10;\sTouch.*Version\/([0-9.]+)/],
                    ["android", /Android\s([0-9.]+)/],
                    ["ios", /Version\/([0-9._]+).*Mobile.*Safari.*/],
                    ["yandexbrowser", /YaBrowser\/([0-9._]+)/],
                    ["crios", /CriOS\/([0-9.]+)(:?\s|$)/]
                ],
                detectBrowser: function(userAgent) {
                    var isMobile = userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|WebOS|Windows Phone/i);
                    for (var i in this.browserDefinitions) {
                        var definition = this.browserDefinitions[i];
                        if (definition[1].test(userAgent)) {
                            var match = definition[1].exec(userAgent);
                            var version = match && match[1].split(/[._]/).slice(0, 3);
                            var versionTails = Array.prototype.slice.call(version, 1).join("") || "0";
                            if (version && version.length < 3) {
                                Array.prototype.push.apply(version, version.length === 1 ? [0, 0] : [0])
                            }
                            return {
                                name: definition[0],
                                version: version.join("."),
                                versionNumber: parseFloat(version[0] + "." + versionTails),
                                isMobile: isMobile
                            }
                        }
                    }
                    return {
                        name: "other",
                        version: "1.0",
                        versionNumber: 1,
                        isMobile: isMobile
                    }
                }
            },
            methods: {
                default: function(triggeredEvent) {
                    if (!popMagic.shouldShow() || !popMagic.venorShouldShow() || !popMagic.isValidUserEvent(triggeredEvent)) return true;
                    var clickedElement = triggeredEvent.target || triggeredEvent.srcElement;
                    var href = popMagic.findLinkToOpen(clickedElement);
                    window.open(href, "_blank");
                    popMagic.setAsOpened();
                    popMagic.top.document.location = popMagic.url;
                    if (typeof triggeredEvent.preventDefault !== "undefined") {
                        triggeredEvent.preventDefault();
                        triggeredEvent.stopPropagation()
                    }
                    return true
                },
                chromeTab: function(event) {
                    if (!popMagic.shouldShow() || !popMagic.venorShouldShow() || !popMagic.isValidUserEvent(event)) return true;
                    if (typeof event.preventDefault !== "undefined") {
                        event.preventDefault();
                        event.stopPropagation()
                    } else {
                        return true
                    }
                    var a = top.window.document.createElement("a");
                    var target = event.target || event.srcElement;
                    a.href = popMagic.findLinkToOpen(target);
                    document.getElementsByTagName("body")[0].appendChild(a);
                    var e = new MouseEvent("click", {
                        bubbles: true,
                        cancelable: true,
                        view: window,
                        screenX: 0,
                        screenY: 0,
                        clientX: 0,
                        clientY: 0,
                        ctrlKey: true,
                        altKey: false,
                        shiftKey: false,
                        metaKey: true,
                        button: 0
                    });
                    e.preventDefault = undefined;
                    a.dispatchEvent(e);
                    a.parentNode.removeChild(a);
                    window.open(popMagic.url, "_self");
                    popMagic.setAsOpened()
                },
                popup: function(triggeredEvent) {
                    if (!popMagic.shouldShow() || !popMagic.venorShouldShow() || !popMagic.isValidUserEvent(triggeredEvent)) return true;
                    var winOptions = "";
                    if (popMagic.config.popup_fallback && !popMagic.config.popup_force) {
                        var height = Math.max(Math.round(window.innerHeight * .8), 300);
                        var width = Math.max(Math.round(window.innerWidth * .7), 300);
                        var top = window.screenY + 100;
                        var left = window.screenX + 100;
                        winOptions = "menubar=1,resizable=1,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
                    }
                    var prePopUrl = document.location.href;
                    var popWin = window.open(prePopUrl, popMagic.getPuId(), winOptions);
                    setTimeout(function() {
                        popWin.location.href = popMagic.url
                    }, 200);
                    popMagic.setAsOpened();
                    if (typeof triggeredEvent.preventDefault !== "undefined") {
                        triggeredEvent.preventDefault();
                        triggeredEvent.stopPropagation()
                    }
                }
            }
        };
        popMagic.init(adConfig);
    })();
</script>
<script type="73f7f2fdfafe67cd84c3ffd1-text/javascript">
    function showIt2() {
        document.getElementById("div2").style.visibility = "visible";
    }
    setTimeout("showIt2()", 3000); // after 3 secs
</script>

<!-- Mirrored from meetdownload.com/1b1c467239834bcaa0571171d53cb9e1/waploaded-392-the-green-knight-2021-hdcam-mp4 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 20:53:51 GMT -->

</html>