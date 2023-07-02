<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no">

      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Just in 5 min Make your Digital Visiting Card - digitalcards.tech</title>
      <meta content="Digital Visiting Card is the standard for digital business cards that works on Smartphones, Tablets and computers with no app required. Digital Card creates a digital hub where your customers can pick and choose how they connect with you." name="description">
      <meta content="online,digital,card,makers,professional card,business card,customize card,consultants,visiting card,contact,email,business,professional,customize,mumbai,surat,ahmedabad,vadodara, india, share,save,online digital card,makes, digital visiting card,digital card online,digitalcard,digital card website,digital cards,what is digital card,digital card,digital card information,digital online card,get digital card,about digital card,how to make digital card online,create digital card,digital business card online,how to make digital card, digitalcards.tech, digicards, digitalcards" name="keywords">
       <meta name="author" content="digitalcards.tech">
       <meta name="subject" content="Website">
       <meta name="copyright" content="Digital Card">
       <meta name="classification" content="Digital Card">


      <!-- Favicons -->
      <link rel="shortcut icon" href="{{ asset('public/frontView/assets/img/favicon.ico') }}">

      <link href="{{ asset('public/frontView/assets/img/logo.png') }}" rel="icon" alt="logo">

      <!-- Vendor CSS Files -->
      <link href="{{ asset('public/frontView/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link rel="preload" as="font" href="{{ asset('public/frontView/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
      <!-- <link href="{{ asset('public/frontView/assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet"> -->
      <!-- <link href="{{ asset('public/frontView/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet"> -->
      <!-- <link href="{{ asset('public/frontView/assets/vendor/venobox/venobox.css') }}" rel="stylesheet"> -->
      <!-- <link href="{{ asset('public/frontView/assets/vendor/aos/aos.css') }}" rel="stylesheet"> -->
      <!-- Template Main CSS File -->
      <link href="{{ asset('public/frontView/minify/css/style.min.css') }}?v={{date('YmdHis')}}" rel="stylesheet">

      <!-- Google Fonts -->
      <link rel="preload" as="font" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

      <!-- =======================================================
         * Template Name: NewBiz - v2.1.0
         * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
      <style>

      .float{
         position:fixed;
         width:60px;
         height:60px;
         bottom:100px;
         right:10px;
         background-color:#25d366;
         color:#FFF;
         border-radius:50px;
         text-align:center;
        font-size:30px;
         box-shadow: 2px 2px 3px #999;
        z-index:100;
      }

      .my-float{
         margin-top:16px;
      }
      </style>

    @yield('custom_style')

   </head>
   <body >
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top">

         <div class="container">
            <div class="logo float-left">
               <!-- Uncomment below if you prefer to use an text logo -->
               <!-- <h1><a href="index.html">NewBiz</a></h1> -->
               <a href="{{url('/')}}"><img src="{{ asset('public/frontView/assets/img/logo.png') }}" alt="logo" class="img-fluid"></a>
            </div>

<!--             <div class="float-right d-sm-block">
               <i class="fa fa-list"></i>
            </div>
 -->


            <nav class="main-nav float-right d-none d-lg-block">


               <ul>
                  <li><a href="{{route('frontpage')}}">Home</a></li>
                  <li><a href="{{route('frontpage')}}#about">About Us</a></li>
                  <li><a href="{{route('frontpage')}}#services">Our Products</a></li>
                  <li><a href="{{route('frontpage')}}#contact">Contact Us</a></li>
                  <li><a href="{{route('search')}}">Our Partners</a></li>

                  @if(Auth::check())
                  <li><a href="{{route('home')}}">Dashboard</a></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                  Logout</a></li>
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>
                  @else
                  <li><a href="{{url('/login')}}">Login</a></li>
                  <li><a href="{{url('/register?packageId=2')}}">Register</a></li>

                  @endif
               </ul>
            </nav>
            <!-- .main-nav -->
         </div>
         @if (session()->has('success'))
            @if(is_array(session('success')))
               <ul>
                     @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                     @endforeach
               </ul>
            @else
               {{ session('success') }}
            @endif
         </div>
         @endif

         @if (session()->has('error'))
         <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            @if(is_array(session('error')))
               <ul>
                     @foreach (session('error') as $message)
                        <li>{{ $message }}</li>
                     @endforeach
               </ul>
            @else
               {{ session('error') }}
            @endif
         </div>
         @endif

      </header>
      <!-- #header -->
      <main id="main">

         @yield('content')
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6 footer-info">
                     <h3>DigiCards</h3>
                     <p>A digital card is an online hosted, digital virtual representation of any plastic card. A digital card, unlike a plastic card, doesn't require any physical representation.</p>
                  </div>
                  <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                        <li><a href="{{route('frontpage')}}">Home</a></li>
                        <li><a href="{{route('frontpage')}}">About us</a></li>
                        <li><a href="{{route('frontpage')}}">Services</a></li>
                        <li><a href="{{route('frontpage')}}">Terms of service</a></li>
                        <li><a href="{{route('frontpage')}}">Privacy policy</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-contact">
                     <h4>Contact Us</h4>
                     <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@digitalcards.tech<br>
                     </p>
                     <div class="social-links">
                        <a href="{{route('frontpage')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="{{route('frontpage')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{route('frontpage')}}" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="{{route('frontpage')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="{{route('frontpage')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                     </div>
                  </div>
                  <!--
                  <div class="col-lg-3 col-md-6 footer-newsletter">
                     <h4>Our Newsletter</h4>
                     <p></p>
                     <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                     </form>
                  </div>
               -->
               </div>
            </div>
         </div>
         <div class="container">
            <div class="copyright">
               &copy; Copyright <strong>digicard</strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
         </div>
      </footer>
      <!-- End Footer -->
      <a href="https://api.whatsapp.com/send?phone=919537178057&text=Inquiry%20for%20Digital%20Business%20Cards" class="float " target="_blank">
         <i class="fa fa-whatsapp my-float"></i>
      </a>

      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset('public/frontView/assets/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('public/frontView/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('public/frontView/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
      <!-- <script src="{{ asset('public/frontView/assets/vendor/php-email-form/validate.js') }}"></script> -->
      <!-- <script src="{{ asset('public/frontView/assets/vendor/counterup/counterup.min.js') }}"></script> -->
      <!-- <script src="{{ asset('public/frontView/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script> -->
      <!-- <script src="{{ asset('public/frontView/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script> -->
      <!-- <script src="{{ asset('public/frontView/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script> -->
      <!-- <script src="{{ asset('public/frontView/assets/vendor/venobox/venobox.min.js') }}"></script> -->
      <!-- <script src="{{ asset('public/frontView/assets/vendor/aos/aos.js') }}"></script> -->
      <!-- Template Main JS File -->
      <script src="{{ asset('public/frontView/minify/js/main.min.js') }}"></script>
      <script src="{{ asset('public/frontView/minify/js/custom.min.js') }}?v={{date('YmdHis')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      @yield('custom_script')
      <script>

         setTimeout(() => {
            $(".alert").alert('close');
         }, 2000);
      </script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CJZJHWL0WG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CJZJHWL0WG');
</script>


   </body>
</html>