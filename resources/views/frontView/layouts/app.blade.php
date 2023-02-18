<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Online Digital Business Cards</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta content="business cards,digital business card,business card designer,business card maker,card maker,free business cards,business cards online,business card creator,electronic business card,free business card maker,business card best,business card design free,online card maker,create card,make your own business cards,digital business card free,online business card maker,free card maker,create business cards free,business card app,create your own business cards,digital business card app,best digital business card,business card design online,design your own business cards" name="description">
      <meta content="business cards,digital business card,business card designer,business card maker,card maker,free business cards,business cards online,business card creator,electronic business card,free business card maker,business card best,business card design free,online card maker,create card,make your own business cards,digital business card free,online business card maker,free card maker,create business cards free,business card app,create your own business cards,digital business card app,best digital business card,business card design online,design your own business cards" name="keywords">
      <!-- Favicons -->
      <link rel="shortcut icon" href="{{ asset('public/frontView/assets/img/favicon.ico') }}">

      <link href="{{ asset('public/frontView/assets/img/logo.png') }}" rel="icon" alt="logo">
      <link href="{{ asset('public/frontView/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" alt="icon">
      <!-- Google Fonts -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet"> -->
      <!-- Vendor CSS Files -->
      <link href="{{ asset('public/frontView/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- <link href="{{ asset('public/frontView/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> -->
      <!-- <link href="{{ asset('public/frontView/assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet"> -->
      <!-- <link href="{{ asset('public/frontView/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet"> -->
      <!-- <link href="{{ asset('public/frontView/assets/vendor/venobox/venobox.css') }}" rel="stylesheet"> -->
      <!-- <link href="{{ asset('public/frontView/assets/vendor/aos/aos.css') }}" rel="stylesheet"> -->
      <!-- Template Main CSS File -->
      <link href="{{ asset('public/frontView/assets/css/style.css') }}?v={{date('YmdHis')}}" rel="stylesheet">

      <!-- =======================================================
         * Template Name: NewBiz - v2.1.0
         * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->

      <link href="{{ asset('public/frontView/assets/css/custom.css') }}?v={{date('YmdHis')}}" rel="stylesheet">

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
            <nav class="main-nav float-right d-none d-lg-block">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#services">Our Products</a></li>
                  <li><a href="#contact">Contact Us</a></li>
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
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
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
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
      <script src="{{ asset('public/frontView/assets/js/main.js') }}"></script>
      <script src="{{ asset('public/frontView/assets/js/custom.js') }}?v={{date('YmdHis')}}"></script>
      @yield('custom_script')
      <script>
         setTimeout(() => {
            $(".alert").alert('close');
         }, 2000);
      </script>
   </body>
</html>