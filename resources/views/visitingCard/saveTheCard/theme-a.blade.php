<!doctype html>
<html lang="en">
<head>

    <title>{{$marriageData['boy_name']['value']}} Weds {{$marriageData['girl_name']['value']}}</title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$marriageData['boy_name']['value']}} Weds {{$marriageData['girl_name']['value']}}" />
    <meta property="og:description" content='Save the Date : {{date("d", strtotime($marriageData["event_date"]["value"]))}} {{date("F", strtotime($marriageData["event_date"]["value"]))}} {{date("Y", strtotime($marriageData["event_date"]["value"]))}}' />
    <meta property="og:image" content="{{url('public/upload/save-the-date/cover_image/'.$occasionData['cover_image'])}}" />
    <meta property="og:site_name" content="{{$marriageData['boy_name']['value']}} Weds {{$marriageData['girl_name']['value']}}" />

    <!-- Basic -->
    <meta charset="utf-8">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link href="{{asset('public/visitingCard/a/img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <link href="{{asset('public/visitingCard/a/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/owlcarousel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/animate_css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/magnific-popup/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/vegas/dist/vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/aos/dist/aos.css')}}">

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('public/visitingCard/a/css/style.css')}}">

    <script type="text/javascript" src="{{asset('public/visitingCard/a/js/sharethis.js#property=5bf6ae289b95fc00123f97b1&product=inline-share-buttons')}}"></script>

    <link rel="stylesheet" href="{{asset('public/visitingCard/a/fancybox/jquery.fancybox.css?v=2.1.5')}}">

    <link rel="stylesheet" href="{{asset('public/visitingCard/a/css/custom.css')}}">

</head>
<body>

    <!-- Page Loader Animation -->
    <div id="loader">
        <div class="container loader-img-holder text-center">
            <img style="width:100%;" class="img-fluid" src="{{asset('public/visitingCard/a/img/loader.svg')}}" alt="">
        </div>
    </div>

    <!-- Page Loader Animation End-->
    <nav style="z-index:9999!important;" class="navbar fixed-top navbar-expand-lg navbar-light navbar-fixed-top top-nav-collapse">
        <div class="container">
            <h1 class="wthree-logo">
                <a href="#" id="logoLink" style="font-size:0.8em;color:white;font-family:'Dancing Script', cursive;font-weight:bold;"><span style="text-align:center;padding-right:0;">My</span>Invitation : Save the Date</a>
            </h1>
            <div style="display:block;float:right;">
                <div class="nav-sec  position-relative" style="float:right;margin-top:0.1em;">
                    <a>
                        <i style="color:white;font-size:1.5em;" id="btnSendWhatsapp" class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>

                {{--
                <div class="nav-sec  position-relative" style="float:right;margin-top:0.1em;">
                    <a id="sharethis">
                        <i style="color:white;font-size:1.5em;" class="fa fa-share-alt" aria-hidden="true"></i>
                    </a>
                </div>
                --}}
            </div>
        </div>
    </nav>

    <!-- slider Section -->
    <section id="slider">
        <div class="holder-caption">
            <div class="container relative-z" style="margin-bottom:-5em;" ">
                <div class="row">
                    <div class="col col-lg-12 align-self-center" style="margin-top: 24em;">
                        <div class="the-heart-welcome-content">
                            <h1><span class="custom-color">W</span>edding</h1>
                            <div class="slider-text-holder">
                                <h2 style="font-family:'Dancing Script', cursive;font-size:2em;">{{$marriageData['boy_name']['value']}} <span class="custom-color">Weds</span> {{$marriageData['girl_name']['value']}}</h2>
                                <p style="font-family:'Dancing Script', cursive;font-size:22px;">{{date("d", strtotime($marriageData['event_date']['value']))}} <span class="custom-color">{{date("F", strtotime($marriageData['event_date']['value']))}}</span> {{date("Y", strtotime($marriageData['event_date']['value']))}}</p>
                                <div class="slider-img-holder"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-scroll">
                <a class="scroll-link" href="#about">
                    <i class="fa fa-angle-down fade-down"></i>
                </a>
            </div>
            <div class="img-overlay"></div>
        </div>
    </section>
    <!-- slider Section End -->
    <!-- About Section -->
    <section id="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="big-head-wrap">
                        <img class="headline-hearth" src="{{asset('public/visitingCard/a/img/headline_hearth.svg')}}" alt="wedding-head-image">
                    </div>
                    <h2 class="big-heading mt-0 mt-0">Save the <span class="custom-color">Date</span></h2>
                    <img class="headline_1" src="{{asset('public/visitingCard/a/img/headline_simple.svg')}}" alt="">
                    <p class="sub-heading col-lg-8 offset-lg-2 margin-b-1" style="font-family:'Dancing Script', cursive;letter-spacing:7px;font-weight:bold;font-size:1em;text-transform: uppercase;">Wedding</p>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 col-md-6 text-center margin-xs-b-2 margin-sm-b-2">

                    <figure>
                        @if(isset($marriageData['boy_profile']['value']))
                        <input type="hidden" name="boy_profile_old" value="{{$marriageData['boy_profile']['value']}}">
                        <img src="{{url('public/upload/save-the-date/boy_profile/'.$marriageData['boy_profile']['value'])}}" alt="bride" style="max-width:400px;" class="img-fluid rounded-circle" data-aos="zoom-in">
                        @endif
                    </figure>


                    <div class="about-content col-sm-8 offset-sm-2">
                        <h4 style="font-family:'Dancing Script', cursive;font-weight:bold;font-size:2em;">
                            <span class="custom-color">{{$marriageData['boy_name']['value']}}</span>
                        </h4>
                        <ul class="social-link">
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <a href="{{$marriageData['boy_fb_url']['value']}}" target="_blank" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            {{--
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="400">
                                <a href="{{$marriageData['boy_name']['value']}}" target="_blank" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            --}}
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="500">
                                <a href="{{$marriageData['boy_in_url']['value']}}" target="_blank" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            {{--
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="500">
                                <a href="{{$marriageData['boy_name']['value']}}" target="_blank" title="G Plus">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <figure>
                        @if(isset($marriageData['girl_profile']['value']))
                        <input type="hidden" name="girl_profile_old" value="{{$marriageData['girl_profile']['value']}}">
                        <img src="{{url('public/upload/save-the-date/girl_profile/'.$marriageData['girl_profile']['value'])}}" alt="groom" style="max-width:400px;" class="img-fluid rounded-circle" data-aos="zoom-in">
                        @endif
                    </figure>

                    <div class="about-content col-sm-8 offset-sm-2">
                        <h4 style="font-family:'Dancing Script', cursive;font-weight:bold;font-size:2em;">
                            <span class="custom-color">{{$marriageData['girl_name']['value']}}</span>
                        </h4>
                        <ul class="social-link">
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                                <a href="{{$marriageData['girl_fb_url']['value']}}" target="_blank" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            {{--
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="400">
                                <a href="http://twitter.com" target="_blank" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            --}}
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="500">
                                <a href="{{$marriageData['girl_in_url']['value']}}" target="_blank" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            {{--
                            <li class="d-inline-block" data-aos="fade-up" data-aos-duration="300" data-aos-delay="500">
                                <a href="http://gplus.com" target="_blank" title="G Plus">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            --}}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- Comment Section -->
    <section id="comment" style="background-color:rgb(0,0,0, 0.5);background-attachment:fixed;background-repeat:no-repeat;">

        <div class="container relative-z">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="big-head-wrap">
                        <img class="headline-hearth" src="{{asset('public/visitingCard/a/img/headline_hearth.svg')}}" alt="wedding-head-image" style="opacity:0.2;">
                    </div>
                    <h2 class="big-heading mt-0 mt-0">Coming <span class="custom-color">Soon</span></h2>
                    <img class="headline_1" src="{{asset('public/visitingCard/a/img/headline_simple.svg')}}" alt="">
                    <p class="sub-heading col-lg-8 offset-lg-2 margin-b-1" style="font-family:'Dancing Script', cursive;letter-spacing:7px;font-weight:bold;font-size:1em;color:white; text-transform: uppercase;">Wedding</p>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="justify-content-lg-center counter">
                        <div id="countdown"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-overlay"></div>
    </section>
    <!-- Comment Section End -->

    <!-- Story Section -->
     @if (!empty($occasionEventData))

    <section id="story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-3 mt-3">
                    <div class="big-head-wrap">
                        <img class="headline-hearth" src="{{asset('public/visitingCard/a/img/headline_hearth.svg')}}" alt="">
                    </div>
                    <h2 class="big-heading mt-0 mt-0">
                        <span class="custom-color">Occasion</span>
                    </h2>
                    <img class="headline_1" src="{{asset('public/visitingCard/a/img/headline_simple.svg')}}" alt="">

                </div>
            </div>

            <div class="inner_w3l_agile_grids spa-agile">

                @foreach($occasionEventData as $occasionEventDetail)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 spa-grid " style="display:inline-block;">
                        <div class="OccasionContainer">
                            <h4 class="OccasionTitle" style="">{{$occasionEventDetail->name}}</h4>
                            <p class="Occasiondatetime">
                                <i class="fa fa-calendar" aria-hidden="true" style="font-size:inherit!important;"></i> {{date("d/m/Y", strtotime($occasionEventDetail->event_time))}} <br />
                                <i class="fa fa-clock-o" aria-hidden="true" style="font-size:inherit!important;"></i> {{date("h:i A", strtotime($occasionEventDetail->event_time))}}
                            </p>

                            <p class="OccasionContent">
                                <span style="font-weight:bold;">{{$occasionEventDetail->invite_by}}</span><br />
                                    <a href="http://google.co.in" target="_blank"><i class="fa fa-map-marker" aria-hidden="true" style="font-size:inherit!important;"></i> {{$occasionEventDetail->address}}</a>
                            </p>

                        </div>
                </div>
                @endforeach

                <div class="clearfix"> </div>
            </div>


        </div>
    </section>
    @endif

    <!-- Story Section  End -->
    <!-- Event Section -->
    <section id="event" style="padding:1rem 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <div class="big-head-wrap">
                        <img class="headline-hearth" src="{{asset('public/visitingCard/a/img/headline_hearth.svg')}}" alt="">
                    </div>
                    <h2 class="big-heading mt-0 mt-0">
                        <span class="custom-color">Venue</span>
                    </h2>
                    <img class="headline_1" src="{{asset('public/visitingCard/a/img/headline_simple.svg')}}" alt="">

                </div>
            </div>
            <div class="row">


                <div class="col-md-6 pr-70 text-right order-1 main-order-xs-1 main-order-sm-1 margin-sm-b-1">

                    <p style="font-size:1em;font-weight:bold;line-height:1em;"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; {{$marriageData['boy_name']['value']}}</p>
                    <p style="font-size:0.9em;margin-top:0.6em;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; +91{{$marriageData['tel']['value']}} &nbsp;&nbsp;&nbsp;<a style="font-size:1.3em;" href="tel:+91{{$marriageData['tel']['value']}}"><i class="fa fa-phone" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a style="font-size:1.3em;" href="sms:+91{{$marriageData['tel']['value']}}"><i class="fa fa-comment" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a style="font-size:1.3em;" href="https://wa.me/91{{$marriageData['tel']['value']}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></p>


                        <a target="_blank" href="http://google.co.in"><p style="font-size:0.9em;margin-top:-1em;"><i style="font-size:0.9em;" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{isset($marriageData['venue']['value']) ? $marriageData['venue']['value'] : ''}}</p></a>




                    <audio style="" id="myAudioElement" controls>
                        <source src="{{asset('public/visitingCard/a/music.ogg')}}" type="audio/ogg">
                        <source src="{{asset('public/visitingCard/a/music.mp3')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>

                        <a id="welcomebanner" class="fancybox-welcome" rel="group1" href="{{url('public/upload/save-the-date/welcome_image/'.$occasionData['welcome_image'])}}"></a>

                </div>


                <div class="col-md-6 pl-70 order-2 main-order-xs-2 main-order-sm-2 margin-sm-b-1">


                </div>


            </div>
        </div>
    </section>
    <!-- Event Section End -->

    <!-- Footer Bottom -->
    <div id="footer-bottom" style="background:-webkit-linear-gradient(top right, #147efb, #de037f);">
        <div class="container">
            <div class="row">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

        <div class="modal fade" id="myModalShare" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Using Whatsapp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="whatsappnumber" class="col-form-label">Whatsapp Number :</label>
                                <input type="text" class="form-control" value="+91" id="SendWhatsappNumber">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnSendWhatsappSubmit" class="btncolor btn btn-primary">Send</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>

            </div>
        </div>

        <div class="form-box " id="myDIV" style="right:25px;">

            <a id="displaywelcomebanner">
                <!-- <a data-toggle="modal" data-target="#ModalBuy"> -->
                <button title="Status" class="floating-btnOpen" onclick="" style="margin-top:0.4em;">
                    <i style="margin-left:0!important" class="fa fa-circle"></i>
                </button>
            </a>

            <button id="musicplaypause" current title="Play / Pause" class="floating-btnOpen" onclick="" style="margin-top:0.4em;">
                <i id="iconmusicplay" class="fa fa-play" style="margin-left:0!important"></i>
                <i id="iconmusicpause" class="fa fa-pause" style="margin-left:0!important"></i>
            </button>

        </div>

        <button title="Click Here" class="floating-btn" onclick="myFunction()">
            <i style="margin-left:0!important" class="fa fa-plus"></i>
        </button>

        <!-- Scroll Up End -->
        <!-- Frameworks -->
        <script src="{{asset('public/visitingCard/a/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Plugins -->
        <script src="{{asset('public/visitingCard/a/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/vegas/dist/vegas.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/jquery-validation/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/waypoint/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/isotope/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/owlcarousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/countup/js/countUp.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/jquery.scrollTo/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/a/vendor/aos/dist/aos.js')}}"></script>

        <script type="text/javascript" src="{{asset('public/visitingCard/a/fancybox/jquery.fancybox.js?v=2.1.5')}}"></script>
        <script type="text/javascript" src="{{asset('public/visitingCard/a/fancybox/jquery.fancybox-media.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('public/visitingCard/a/css/style.css')}}" media="screen" />
        <script>

            $(document).ready(function () {
                $("#displaywelcomebanner").click(function () {
                    $(".fancybox-welcome").click();
                });
            });

        </script>

        <script>
            $('#submitButt').click(function () {
                $(this).toggleClass('active');
            });
            $(function () {
                $("#test").focus();
            });
            document.querySelector('.floating-btn').addEventListener('click', function (e) {
                e.target.closest('button').classList.toggle('clicked');
            });

            function myFunction() {
                var x = document.getElementById("myDIV");

                if (x.classList.contains('open')) {
                    x.classList.remove("open");
                } else {
                    x.classList.add("open");
                }
            }
        </script>
        <script>
            $(document).ready(function () {
                var playing = false;

                $('#iconmusicpause').hide();

                $('#musicplaypause').click(function () {
                    if (playing == false) {

                        document.getElementById('myAudioElement').play();
                        playing = true;


                        $('#iconmusicpause').show();
                        $('#iconmusicplay').hide();

                    } else {
                        document.getElementById('myAudioElement').pause();
                        playing = false;

                        $('#iconmusicpause').hide();
                        $('#iconmusicplay').show();
                    }
                });
            });
        </script>


        <script>
        $(document).ready(function () {
            if ($("#slider").length) {
                $("#slider").vegas({
                    delay: 7000,
                    timer: true,
                    shuffle: true,
                    firstTransition: 'fade2',
                    firstTransitionDuration: 2000,
                    transition: 'fade2',
                    transitionDuration: 4000,
                    slides: [
                        { src: "{{url('public/upload/save-the-date/cover_image/'.$occasionData['cover_image'])}}" }
                    ]
                });
            }
        });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sharethis").click(function () {
                    console.log('share');
                    $(".st-btn.st-first.st-last.st-remove-label").click();
                });
            });
        </script>

            <script>
                $(document).on('click', '.closemodelbtn', function (e) {
                    e.preventDefault();
                    $.fancybox.close()
                    $("#myAudioElement")[0].play();
                    parent.$.fancybox.close();
                });
            </script>

            <script>
        function AddCalendar() {
                $.ajax(
                      {
                        url: 'SaveTheDate/DownloadCalendar',
                            contentType: 'application/json; charset=utf-8',
                            datatype: 'json',
                            data: {
                            EventID: 38
                            },
                            type: "GET",
                            success: function () {
                            window.location = 'SaveTheDate/DownloadCalendar?EventID=38';
                        }
                    });
            }

            </script>
            <script>
            $(".fancybox-welcome").fancybox({
                margin: [20, 10, 65, 10],
                closeBtn: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none',
                helpers:
                {
                    title: { type: 'inside' },
                    overlay: { closeClick: true }
                },
                beforeShow: function () {
                    // add content
                    /*
                    this.title = '<div class="welcomebannercontainer"><img id="welcomebannerimage" src="{{url('public/upload/save-the-date/welcome_image/'.$occasionData['welcome_image'])}}" style="width:50%;" /><h3 id="welcomebannerdate" style="color:#147efb;font-size:1.3em;"><span style="color:#ac877e">{{date("d", strtotime($marriageData['event_date']['value']))}} <span class="custom-color">{{date("F", strtotime($marriageData['event_date']['value']))}}</span> {{date("Y", strtotime($marriageData['event_date']['value']))}}</span></h3><a id="closemodelbtn" class="closemodelbtn" style="text-align:center;cursor:pointer;text-decoration:none;" data-count="none">&nbsp;&nbsp;View&nbsp;&nbsp;</a></div>';*/
                    this.title = '<div class="welcomebannercontainer"><h3 id="welcomebannerdate" style="color:#147efb;font-size:1.3em;"><span style="color:#ac877e">{{date("d", strtotime($marriageData['event_date']['value']))}} <span class="custom-color">{{date("F", strtotime($marriageData['event_date']['value']))}}</span> {{date("Y", strtotime($marriageData['event_date']['value']))}}</span></h3><a id="closemodelbtn" class="closemodelbtn" style="text-align:center;cursor:pointer;text-decoration:none;" data-count="none">&nbsp;&nbsp;View&nbsp;&nbsp;</a></div>';
            },
        beforeClose: function() {
                // alert('add Calendar');
                AddCalendar();
            }
            }).trigger('click');


            </script>



        <script type="text/javascript">
        $(document).ready(function () {

            $("#footericonmobilesavedate").click(function () {
                AddCalendar();
            });

            function AddCalendar() {
                $.ajax(
                        {
                            url: 'SaveTheDate/DownloadCalendar',
                            contentType: 'application/json; charset=utf-8',
                            datatype: 'json',
                            data: {
                                EventID: 38
                            },
                            type: "GET",
                            success: function () {
                                window.location = 'SaveTheDate/DownloadCalendar?EventID=38';
                            }
                        });
            }

        });
    //<h2><span style="color:#ac877e">Sahaj</span> <span style="color:#4e3f44">Weds</span> <span style="color:#ac877e">Rujal</span></h2>
        </script>


        <script type="text/javascript">
        $(document).ready(function () {

            $("#footericonmobilesavedate").click(function () {
                AddCalendar();
            });

            function AddCalendar() {
                $.ajax(
                        {
                            url: 'SaveTheDate/DownloadCalendar',
                            contentType: 'application/json; charset=utf-8',
                            datatype: 'json',
                            data: {
                                EventID: 38
                            },
                            type: "GET",
                            success: function () {
                                window.location = 'SaveTheDate/DownloadCalendar?EventID=38';
                            }
                        });
            }

        });
    //<h2><span style="color:#ac877e">Sahaj</span> <span style="color:#4e3f44">Weds</span> <span style="color:#ac877e">Rujal</span></h2>
        </script>


        <script src="{{asset('public/visitingCard/a/js/main.js')}}"></script>

        <script type='text/javascript' src='wedding/wp-content/plugins/LayerSlider/static/js/layerslider.kreaturamedia.jquery.js?ver=5.6.9'></script>
        <script type='text/javascript' src='wedding/wp-content/plugins/LayerSlider/static/js/layerslider.transitions.js?ver=5.6.9'></script>
        <!--
        <link href="DigitalSaveTheDateB/css/owl.carousel.css" rel="stylesheet">
        <script src="DigitalSaveTheDateB/js/owl.carousel.js"></script>
            -->

        <link rel="stylesheet" href="{{asset('public/visitingCard/a/owl/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/visitingCard/a/owl/owl.theme.default.min.css')}}">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>

            $(function () {
                function randomNum(m, n) {
                    m = parseInt(m);
                    n = parseInt(n);
                    return Math.floor(Math.random() * (n - m + 1)) + m;
                }

                function heartAnimation() {
                    $this = $('.the-heart-welcome-content');
                    var heartCount = ($this.width() / 50) * 5;
                    for (var i = 0; i < heartCount; i++) {
                        var heartSize = (randomNum(60, 120) / 10);
                        $this.append('<span class="tiny-heart" style="top: ' + randomNum(40, 80) + '%; left: ' + randomNum(0, 100) + '%; width: ' + heartSize + 'px; height: ' + heartSize + 'px ; animation-delay: -' + randomNum(0, 3) + 's; animation-duration: ' + randomNum(2, 5) + 's"></span>')
                    }
                }

                window.addEventListener('onload', heartAnimation());
            });

        </script>


        <script>
        if ($('#countdown').length) {
            // Set the date we're counting down to
            var countDownDate = new Date({{date("Y", strtotime($marriageData["event_date"]["value"]))}}, {{date("m", strtotime($marriageData["event_date"]["value"]))}}, {{date("d", strtotime($marriageData["event_date"]["value"]))}}, 0,0,0,0);
            var countDownDate = new Date('{{date("Y", strtotime($marriageData["event_date"]["value"]))}}-{{date("m", strtotime($marriageData["event_date"]["value"]))}}-{{date("d", strtotime($marriageData["event_date"]["value"]))}}');

            // Update the count down every 1 second
            var x = setInterval(function () {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with class="countdown"
                document.getElementById('countdown').innerHTML =
                    "<ul>" +
                    "<li>" + "<h2>" + days + "</h2>" + "<h4>days</h4>" + "</li>" +
                    "<li>" + "<h2>" + hours + "</h2>" + "<h4>hours</h4>" + "</li>" +
                    "<li>" + "<h2>" + minutes + "</h2>" + "<h4>min</h4>" + "</li>" +
                    "<li>" + "<h2>" + seconds + "</h2>" + "<h4>sec</h4>" + "</li>" +
                    "</ul>";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById('countdown').innerHTML = "EXPIRED";
                }
            }, 1000);
        }

        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#btnSendWhatsapp").click(function () {
                   $("#myModalShare").modal();
                });


                $("#btnSendWhatsappSubmit").click(function () {
                    var number = $('#SendWhatsappNumber').val();
                    number = number.replace("+", "");
                    window.open(
                      "https://wa.me/" + number + "?text=" + "Hi, " + "%0A%0A" + "I am {{$marriageData['boy_name']['value']}}" + "%0A%0A" + "This is my digital Save the Date. Contact us for any Enquiry." + "%0A%0A" + "{{url("vc/".$userObj->slug)}}",
                      '_tab' // <- This is what makes it open in a new window.
                    );

                });

            });
        </script>


    </body>
</html>
