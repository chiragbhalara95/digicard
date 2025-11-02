<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('public/frontView/assets/css/custom.css') }}?v={{date('YmdHis')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Scripts -->
  <script src="{{ asset('public/js/app.js') }}" defer></script>
  <script src="{{ asset('public/frontView/assets/js/custom.js') }}?v={{date('YmdHis')}}" defer></script>

  <style>
    body {
      background: #f5f6fa;
      font-family: 'Nunito', sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #6f42c1, #4f8cff);
    }
    .navbar .navbar-brand, .navbar .nav-link {
      color: #fff !important;
      font-weight: 600;
    }
    .navbar .navbar-toggler {
      border-color: rgba(255,255,255,0.3);
    }

    /* WhatsApp Button */
    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 15px;
      right: 15px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50%;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
      z-index: 999;
      transition: transform 0.3s ease;
    }
    .float:hover {
      transform: scale(1.05);
    }
    .my-float {
      margin-top: 16px;
    }

    /* Main Area */
    main {
      padding-top: 30px;
      padding-bottom: 50px;
    }

    /* Mobile tweaks */
    @media (max-width: 768px) {
      .navbar-brand {
        font-size: 1.1rem;
      }
      main {
        padding-top: 20px;
      }
    }
  </style>

  @yield('custom_style')
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            @guest
              @if (Route::has('login') && Request::is('register'))
                <li class="nav-item">
                  <a class="btn btn-sm btn-light ms-2" href="{{ route('login') }}">Login</a>
                </li>
              @endif
              @if (Route::has('register') && Request::is('login'))
                <li class="nav-item">
                  <a class="btn btn-sm btn-light ms-2" href="{{ route('register') }}">Register</a>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main>
      @yield('content')
    </main>
  </div>

  <a href="https://api.whatsapp.com/send?phone=919537178057&text=Inquiry%20for%20Digital%20Business%20Cards" 
     class="float" target="_blank">
     <i class="fa fa-whatsapp my-float"></i>
  </a>

  <!-- jQuery -->
  <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Select CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

  @yield('custom_script')
</body>
</html>
