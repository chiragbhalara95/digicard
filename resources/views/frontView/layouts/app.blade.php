<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Just in 5 min Make your Digital Visiting Card - digitalcards.tech')</title>
  <meta name="description" content="Discover premium AI tools and digital products designed for businesses. Build smarter, faster, and more efficiently with our modern solutions.">
  <meta name="keywords" content="AI tools, SaaS, business solutions, automation, digital tools, productivity software">
  <meta name="author" content="digitalcards.tech">

  <meta property="og:title" content="Your Website Title">
  <meta property="og:description" content="Explore AI-powered tools and digital products for smarter business growth.">
  <meta property="og:image" content="{{ asset('images/preview.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="canonical" href="{{ url()->current() }}">

  <link rel="shortcut icon" href="{{ asset('public/frontView/assets/img/favicon.ico') }}">
 
  <link href="{{ asset('public/frontView/assets/img/logo.png') }}" rel="icon" type="image/png">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "digitalcards",
    "operatingSystem": "Web",
    "applicationCategory": "BusinessApplication",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('public/frontView/assets/img/logo.png') }}",
    "offers": {
        "@type": "Offer",
        "price": "999",
        "priceCurrency": "INR"
    },
    "sameAs": [
    ],
    "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+1 5589 55488 55",
        "contactType": "Customer Support",
        "areaServed": "IN",
        "availableLanguage": "English"
    }]
    }
    </script>

  <style>
    :root {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --secondary: #ec4899;
      --dark: #0f172a;
      --dark-light: #1e293b;
      --gray: #64748b;
      --light: #f8fafc;
      --white: #ffffff;
      --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    body {
      font-family: 'Segoe UI', Roboto, Arial, sans-serif;
      color: var(--dark);
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    .navbar {
      background: rgba(255,255,255,0.95);
      box-shadow: 0 2px 20px rgba(0,0,0,0.1);
      padding: 1rem 0;
    }

    .navbar-nav .nav-link {
      color: var(--dark);
      font-weight: 500;
      transition: color .3s;
    }
    .navbar-nav .nav-link:hover { color: var(--primary); }

    .btn-primary {
      background: var(--gradient);
      border: none;
      color: white;
      border-radius: 50px;
      font-weight: 600;
      padding: 0.6rem 1.5rem;
    }

    footer {
      background: var(--dark-light);
      color: white;
      padding: 3rem 0 1rem;
    }

    .whatsapp-float {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #25d366;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      box-shadow: 0 4px 20px rgba(37,211,102,0.4);
      z-index: 999;
    }

    .chat-icon {
      position: fixed;
      bottom: 110px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--primary);
      color: white;
      font-size: 1.8rem;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 20px rgba(99,102,241,0.4);
      cursor: pointer;
      z-index: 998;
    }

    .chat-popup {
      position: fixed;
      bottom: 180px;
      right: 30px;
      width: 350px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
      display: none;
      flex-direction: column;
      overflow: hidden;
      z-index: 997;
    }
    .chat-popup.active { display: flex; }

    .chat-header {
      background: var(--gradient);
      color: white;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .chat-body {
      padding: 1rem;
      max-height: 300px;
      overflow-y: auto;
    }

    .chat-input-area {
      display: flex;
      border-top: 1px solid #ddd;
    }

    .chat-input {
      flex: 1;
      border: none;
      padding: 0.75rem;
      outline: none;
    }

    .chat-send {
      background: var(--primary);
      color: white;
      border: none;
      padding: 0 1rem;
    }

    @media (max-width: 768px) {
      .chat-popup { width: calc(100% - 40px); right: 20px; bottom: 160px; }
      .chat-icon { right: 20px; bottom: 100px; }
      .whatsapp-float { right: 20px; bottom: 20px; }
    }
  </style>

  @yield('custom_style')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('public/frontView/assets/img/logo.png') }}" alt="DigiCards" height="40">
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-lg-center">
          <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}">Home</a></li>
          <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}#about">About</a></li>
          <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}#services">Products</a></li>
          <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}#contact">Contact</a></li>
          <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('search') }}">Our Partners</a></li>

          @auth
          <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('home') }}">Dashboard</a></li>
          <li class="nav-item mx-lg-2">
            <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
          </li>
          @else
          <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
          <li class="nav-item mx-lg-2">
            <a class="btn btn-primary" href="{{ url('/register?packageId=2') }}">Register</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <main>@yield('content')</main>

  <footer class="text-center mt-5">
    <div class="container">
      <p>&copy; {{ date('Y') }} DigiCards. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Floating buttons -->
  <div class="chat-icon" id="chatIcon" onclick="toggleChat()">
    <i class="fas fa-comments"></i>
  </div>

  <div class="chat-popup" id="chatPopup">
    <div class="chat-header">
      <h5>💬 Chat with us</h5>
      <button class="btn btn-sm btn-light" onclick="toggleChat()">&times;</button>
    </div>
    <div class="chat-body" id="chatBody">
      <p><strong>DigiCards Support</strong><br>Hello! 👋 How can we help you today?</p>
      <div class="chat-option" onclick="selectOption('pricing')">💰 Pricing Information</div>
      <div class="chat-option" onclick="selectOption('demo')">🎯 Request a Demo</div>
      <div class="chat-option" onclick="selectOption('support')">🛠️ Technical Support</div>
    </div>
    <div class="chat-input-area">
      <input type="text" id="chatInput" class="chat-input" placeholder="Type your message...">
      <button class="chat-send" onclick="sendMessage()">Send</button>
    </div>
  </div>

  <a href="https://api.whatsapp.com/send?phone=919537178057&text=Hello%20DigiCards%20Team!" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const chatPopup = document.getElementById('chatPopup');
    const chatIcon = document.getElementById('chatIcon');

    function toggleChat() {
      chatPopup.classList.toggle('active');
    }

    function sendMessage() {
      const input = document.getElementById('chatInput');
      const message = input.value.trim();
      if (message) {
        const body = document.getElementById('chatBody');
        body.innerHTML += `<p><strong>You:</strong> ${message}</p>`;
        input.value = '';
        body.scrollTop = body.scrollHeight;
      }
    }

    function selectOption(option) {
      const body = document.getElementById('chatBody');
      let reply = '';
      if (option === 'pricing') reply = 'Our pricing plans start at ₹99/month. 🎯';
      if (option === 'demo') reply = 'We’d love to give you a demo! Please share your email. 📧';
      if (option === 'support') reply = 'Please describe your issue — our team will assist you shortly. 🛠️';
      body.innerHTML += `<p><strong>You:</strong> ${option}</p><p><strong>DigiCards:</strong> ${reply}</p>`;
      body.scrollTop = body.scrollHeight;
    }
  </script>

  @yield('custom_script')
</body>
</html>
