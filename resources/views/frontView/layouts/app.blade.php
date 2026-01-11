<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Primary Meta Tags -->
  <title>@yield('title', 'AI-Powered Digital Business Cards | Create Smart Virtual Cards in 5 Minutes - DigitalCards.tech')</title>
  <meta name="title" content="AI-Powered Digital Business Cards | Create Smart Virtual Cards - DigitalCards.tech">
  <meta name="description" content="Create professional AI-powered digital business cards in 5 minutes. Share via QR code, NFC, or link. Perfect for entrepreneurs, freelancers & businesses. Free templates, unlimited updates, analytics dashboard.">
  <meta name="keywords" content="digital business card, virtual business card, AI business card maker, electronic business card, smart business card, QR code business card, NFC business card, online business card, vCard creator, contactless business card, digital visiting card, professional business card online, mobile business card, instant business card, custom digital card">
  <meta name="author" content="DigitalCards.tech">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="{{ url()->current() }}">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="Create AI-Powered Digital Business Cards in Minutes | DigitalCards.tech">
  <meta property="og:description" content="Build professional digital business cards with AI technology. Share instantly via QR code, NFC, or link. Perfect for modern professionals and businesses.">
  <meta property="og:image" content="{{ asset('public/frontView/assets/img/og-image.jpg') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name" content="DigitalCards.tech">
  <meta property="og:locale" content="en_US">
  
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:title" content="AI-Powered Digital Business Cards | DigitalCards.tech">
  <meta name="twitter:description" content="Create and share professional digital business cards in 5 minutes. QR code, NFC, unlimited updates. Start free today!">
  <meta name="twitter:image" content="{{ asset('public/frontView/assets/img/twitter-image.jpg') }}">
  <meta name="twitter:site" content="@digitalcardstech">
  <meta name="twitter:creator" content="@digitalcardstech">
  
  <!-- Additional SEO Meta Tags -->
  <meta name="theme-color" content="#667eea">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <!-- Geo Tags -->
  <meta name="geo.region" content="IN">
  <meta name="geo.placename" content="India">
  
  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/frontView/assets/img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/frontView/assets/img/favicon-16x16.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/frontView/assets/img/apple-touch-icon.png') }}">
  <link rel="shortcut icon" href="{{ asset('public/frontView/assets/img/favicon.ico') }}">
  
  <!-- Preconnect to External Resources -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  
  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  
  <!-- Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous">

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
      text-decoration: none;
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

    .chat-option {
      padding: 0.75rem;
      margin: 0.5rem 0;
      background: #f1f5f9;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }
    
    .chat-option:hover {
      background: #e2e8f0;
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
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .chat-popup { width: calc(100% - 40px); right: 20px; bottom: 160px; }
      .chat-icon { right: 20px; bottom: 100px; }
      .whatsapp-float { right: 20px; bottom: 20px; }
    }
  </style>

  <!-- Enhanced Schema.org Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "{{ url('/') }}#organization",
        "name": "DigitalCards.tech",
        "url": "{{ url('/') }}",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ asset('public/frontView/assets/img/logo.png') }}",
          "width": 250,
          "height": 60
        },
        "description": "Leading AI-powered digital business card platform helping professionals and businesses create, share, and manage smart virtual cards.",
        "foundingDate": "2020",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "A108 Adam Street",
          "addressLocality": "New York",
          "addressRegion": "NY",
          "postalCode": "535022",
          "addressCountry": "US"
        },
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "+1-5589-55488-55",
          "contactType": "Customer Support",
          "email": "info@digitalcards.tech",
          "areaServed": ["US", "IN", "GB", "AU", "CA"],
          "availableLanguage": ["English", "Hindi"],
          "contactOption": "TollFree",
          "hoursAvailable": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "18:00"
          }
        }],
        "sameAs": [
          "https://facebook.com/digitalcards.tech",
          "https://instagram.com/digitalcards.tech",
          "https://linkedin.com/company/digitalcards-tech",
          "https://twitter.com/digitalcardstech"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "{{ url('/') }}#website",
        "url": "{{ url('/') }}",
        "name": "DigitalCards.tech",
        "description": "Create AI-powered digital business cards in minutes",
        "publisher": {
          "@id": "{{ url('/') }}#organization"
        },
        "potentialAction": {
          "@type": "SearchAction",
          "target": "{{ url('/search') }}?q={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      },
      {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}#webpage",
        "url": "{{ url()->current() }}",
        "name": "AI-Powered Digital Business Cards | DigitalCards.tech",
        "isPartOf": {
          "@id": "{{ url('/') }}#website"
        },
        "about": {
          "@id": "{{ url('/') }}#organization"
        },
        "description": "Create professional digital business cards with AI technology. Share instantly via QR code, NFC, or link. Unlimited updates, analytics, and custom branding.",
        "breadcrumb": {
          "@id": "{{ url()->current() }}#breadcrumb"
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "{{ url()->current() }}#breadcrumb",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "{{ url('/') }}"
        }]
      },
      {
        "@type": "SoftwareApplication",
        "name": "DigitalCards Business Card Creator",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web, iOS, Android",
        "offers": {
          "@type": "AggregateOffer",
          "lowPrice": "0",
          "highPrice": "999",
          "priceCurrency": "INR",
          "offerCount": "3"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.8",
          "ratingCount": "274",
          "bestRating": "5",
          "worstRating": "1"
        },
        "screenshot": "{{ asset('public/frontView/assets/img/screenshot.jpg') }}",
        "author": {
          "@id": "{{ url('/') }}#organization"
        }
      },
      {
        "@type": "Product",
        "name": "Digital Business Card",
        "description": "Professional AI-powered digital business card with QR code, NFC support, and analytics",
        "brand": {
          "@id": "{{ url('/') }}#organization"
        },
        "offers": {
          "@type": "Offer",
          "url": "{{ url('/register') }}",
          "priceCurrency": "INR",
          "price": "999",
          "priceValidUntil": "{{ date('Y-12-31') }}",
          "availability": "https://schema.org/InStock",
          "itemCondition": "https://schema.org/NewCondition"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.8",
          "reviewCount": "142"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [{
          "@type": "Question",
          "name": "What is a digital business card?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A digital business card is an electronic version of a traditional business card that can be shared via QR code, NFC, email, or link. It's accessible on any device and can include interactive elements like clickable links, videos, and social media profiles."
          }
        }, {
          "@type": "Question",
          "name": "How do I create a digital business card?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sign up on DigitalCards.tech, choose a template, add your contact information and branding, and your digital card is ready in minutes. You can share it via QR code, link, or NFC."
          }
        }, {
          "@type": "Question",
          "name": "Can I update my digital business card?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! Digital business cards can be updated unlimited times. Any changes you make are instantly reflected for everyone who has your card."
          }
        }]
      },
      {
        "@type": "ItemList",
        "name": "Digital Business Card Features",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "QR Code Generation"
        }, {
          "@type": "ListItem",
          "position": 2,
          "name": "NFC Support"
        }, {
          "@type": "ListItem",
          "position": 3,
          "name": "Analytics Dashboard"
        }, {
          "@type": "ListItem",
          "position": 4,
          "name": "Custom Branding"
        }, {
          "@type": "ListItem",
          "position": 5,
          "name": "Unlimited Updates"
        }]
      }
    ]
  }
  </script>

  <!-- Google Analytics (Replace with your GA4 ID) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  </script>

  @yield('custom_style')
</head>
<body>
  <!-- Header Navigation -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" role="navigation" aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" aria-label="DigitalCards.tech Home">
          <img src="{{ asset('public/frontView/assets/img/logo.png') }}" alt="DigitalCards.tech Logo - AI-Powered Digital Business Cards" height="40" width="auto">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav align-items-lg-center">
            <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}" aria-label="Home">Home</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}#about" aria-label="About Digital Business Cards">About</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}#services" aria-label="Our Digital Card Products">Products</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('frontpage') }}#contact" aria-label="Contact Us">Contact</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('search') }}" aria-label="Our Partners">Our Partners</a></li>

            @auth
            <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ route('home') }}" aria-label="User Dashboard">Dashboard</a></li>
            <li class="nav-item mx-lg-2">
              <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" aria-label="Logout">Logout</a>
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>
            @else
            <li class="nav-item mx-lg-2"><a class="nav-link" href="{{ url('/login') }}" aria-label="Login to Your Account">Login</a></li>
            <li class="nav-item mx-lg-2">
              <a class="btn btn-primary" href="{{ url('/register?packageId=3') }}" aria-label="Register for Digital Business Card">Get Started Free</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main role="main">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer role="contentinfo">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4 mb-3">
          <h5>About DigitalCards.tech</h5>
          <p>Create professional AI-powered digital business cards in minutes. Share via QR code, NFC, or link. Perfect for modern professionals.</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('frontpage') }}" class="text-white-50">Home</a></li>
            <li><a href="{{ route('frontpage') }}#about" class="text-white-50">About</a></li>
            <li><a href="{{ route('frontpage') }}#services" class="text-white-50">Pricing</a></li>
            <li><a href="{{ route('frontpage') }}#contact" class="text-white-50">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Contact Info</h5>
          <p class="text-white-50">
            <i class="fas fa-map-marker-alt"></i> A108 Adam Street, NY 535022<br>
            <i class="fas fa-envelope"></i> info@digitalcards.tech<br>
            <i class="fas fa-phone"></i> +1 5589 55488 55
          </p>
        </div>
      </div>
      <hr class="bg-white">
      <p class="text-center mb-0">&copy; {{ date('Y') }} DigitalCards.tech. All Rights Reserved. | <a href="/privacy-policy" class="text-white-50">Privacy Policy</a> | <a href="/terms" class="text-white-50">Terms of Service</a></p>
    </div>
  </footer>

  <!-- Floating Action Buttons -->
  <div class="chat-icon" id="chatIcon" onclick="toggleChat()" role="button" aria-label="Open chat support" tabindex="0">
    <i class="fas fa-comments"></i>
  </div>

  <div class="chat-popup" id="chatPopup" role="dialog" aria-labelledby="chatTitle">
    <div class="chat-header">
      <h5 id="chatTitle">💬 Chat with us</h5>
      <button class="btn btn-sm btn-light" onclick="toggleChat()" aria-label="Close chat">&times;</button>
    </div>
    <div class="chat-body" id="chatBody">
      <p><strong>DigiCards Support</strong><br>Hello! 👋 How can we help you today?</p>
      <div class="chat-option" onclick="selectOption('pricing')" role="button" tabindex="0">💰 Pricing Information</div>
      <div class="chat-option" onclick="selectOption('demo')" role="button" tabindex="0">🎯 Request a Demo</div>
      <div class="chat-option" onclick="selectOption('support')" role="button" tabindex="0">🛠️ Technical Support</div>
    </div>
    <div class="chat-input-area">
      <input type="text" id="chatInput" class="chat-input" placeholder="Type your message..." aria-label="Chat message input">
      <button class="chat-send" onclick="sendMessage()" aria-label="Send message">Send</button>
    </div>
  </div>

  <a href="https://api.whatsapp.com/send?phone=919537178057&text=Hello%20DigiCards%20Team!" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
</body>

  <!-- Scripts -->
  <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const chatPopup = document.getElementById('chatPopup');
      const chatIcon = document.getElementById('chatIcon');

      // Define functions as variables to ensure they're in scope
      window.toggleChat = function() {
          if (chatPopup) {
              chatPopup.classList.toggle('active');
          }
      }

      window.sendMessage = function() {
          const input = document.getElementById('chatInput');
          const message = input.value.trim();
          if (message) {
              const body = document.getElementById('chatBody');
              body.innerHTML += `<p><strong>You:</strong> ${message}</p>`;
              input.value = '';
              body.scrollTop = body.scrollHeight;
              
              // Simulate response
              setTimeout(() => {
                  body.innerHTML += `<p><strong>DigiCards:</strong> Thank you for your message. Our team will respond shortly.</p>`;
                  body.scrollTop = body.scrollHeight;
              }, 1000);
          }
      }

      window.selectOption = function(option) {
          const body = document.getElementById('chatBody');
          let reply = '';
          if (option === 'pricing') {
              reply = 'Our pricing plans start at ₹0/month for basic features. Premium plans start at ₹999/month with advanced analytics and unlimited cards. 🎯';
          } else if (option === 'demo') {
              // FIXED: Use escaped apostrophe or backticks
              reply = 'We\'d love to give you a personalized demo! Please share your email or contact us at info@digitalcards.tech 📧';
          } else if (option === 'support') {
              reply = 'Please describe your issue and our technical team will assist you within 24 hours. You can also email support@digitalcards.tech 🛠️';
          }
          body.innerHTML += `<p><strong>You:</strong> ${option}</p><p><strong>DigiCards:</strong> ${reply}</p>`;
          body.scrollTop = body.scrollHeight;
      }

      // Keyboard accessibility for chat options
      document.addEventListener('keydown', function(e) {
          if (e.target.classList.contains('chat-option') && e.key === 'Enter') {
              e.target.click();
          }
      });
  });
  </script>

  @yield('custom_script')
</html>