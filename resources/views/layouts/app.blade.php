<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public//css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontView/assets/css/custom.css') }}?v={{date('YmdHis')}}" rel="stylesheet">


    <script src="{{ asset('public/frontView/assets/js/custom.js') }}?v={{date('YmdHis')}}" defer></script>

      <link href="{{ asset('public/frontView/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

      <style>
      .float{
         position:fixed;
         width:60px;
         height:60px;
         bottom:10px;
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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                        {{ Session::get('error')}}
                        </div>
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login') && Request::is('register'))
                                <li class="nav-item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register') && Request::is('login'))
                                <li class="nav-item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')
        </main>
    </div>

  <a href="https://api.whatsapp.com/send?phone=919537178057&text=Inquiry%20for%20Digital%20Business%20Cards" class="float " target="_blank">
     <i class="fa fa-whatsapp my-float"></i>
  </a>

<!-- jQuery -->
<script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>

@yield('custom_script')

</body>
</html>
