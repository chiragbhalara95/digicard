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
  <meta name="theme-color" content="#ff5a3d">
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
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700;9..144,800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --primary-light: #818cf8;
      --secondary: #ec4899;
      --dark: #0f172a;
      --dark-light: #1e293b;
      --gray: #64748b;
      --light: #f8fafc;
      --white: #ffffff;
      --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
      --gradient-light: linear-gradient(135deg, var(--primary-light) 0%, #f472b6 100%);
      --radius-sm: 0.375rem;
      --radius-md: 0.5rem;
      --radius-lg: 0.75rem;
      --radius-xl: 1rem;
      --radius-full: 9999px;
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 96px;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      color: var(--dark);
      overflow-x: hidden;
      scroll-behavior: smooth;
      line-height: 1.6;
      background: var(--light);
    }

    main {
      display: block;
      width: 100%;
    }

    section[id] {
      scroll-margin-top: 96px;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      line-height: 1.3;
    }

    /* Modern Navigation */
    .navbar {
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(10px);
      box-shadow: var(--shadow-sm);
      padding: 1rem 0;
      transition: all 0.3s ease;
      z-index: 1030;
    }

    .navbar.scrolled {
      padding: 0.75rem 0;
      box-shadow: var(--shadow-md);
    }

    .navbar-brand img {
      height: 40px;
      transition: all 0.3s ease;
      max-width: 100%;
    }

    .navbar-toggler {
      border: none;
      padding: 0.5rem 0.75rem;
      box-shadow: none;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-collapse {
      min-width: 0;
      flex-basis: 100%;
    }

    .navbar-nav .nav-link {
      color: var(--dark);
      font-weight: 500;
      padding: 0.5rem 1rem;
      position: relative;
      transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: var(--primary);
    }

    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 1rem;
      right: 1rem;
      height: 2px;
      background: var(--gradient);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
      transform: scaleX(1);
    }

    .navbar-nav li,
    .footer-links li,
    .contact-info li,
    .footer-bottom-links li {
      margin-left: 0 !important;
    }

    /* Enhanced Buttons */
    .btn-primary {
      background: var(--gradient);
      border: none;
      color: white;
      border-radius: var(--radius-full);
      font-weight: 600;
      padding: 0.75rem 2rem;
      transition: all 0.3s ease;
      box-shadow: var(--shadow-md);
      position: relative;
      overflow: hidden;
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.7s ease;
    }

    .btn-primary:hover::before {
      left: 100%;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .btn-outline-primary {
      border: 2px solid var(--primary);
      color: var(--primary);
      background: transparent;
      border-radius: var(--radius-full);
      font-weight: 600;
      padding: 0.75rem 2rem;
      transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-2px);
      box-shadow: var(--shadow-md);
    }

    /* Floating Action Buttons */
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
      font-size: 1.75rem;
      box-shadow: var(--shadow-xl);
      z-index: 999;
      text-decoration: none;
      transition: all 0.3s ease;
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .whatsapp-float:hover {
      transform: scale(1.1);
      box-shadow: 0 8px 30px rgba(37, 211, 102, 0.6);
    }

    .chat-icon {
      position: fixed;
      bottom: 110px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--gradient);
      color: white;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: var(--shadow-xl);
      cursor: pointer;
      z-index: 998;
      transition: all 0.3s ease;
    }

    .chat-icon:hover {
      transform: scale(1.1);
      box-shadow: 0 8px 30px rgba(99, 102, 241, 0.4);
    }

    /* Enhanced Chat Popup */
    .chat-popup {
      position: fixed;
      bottom: 180px;
      right: 30px;
      width: 380px;
      background: white;
      border-radius: var(--radius-xl);
      box-shadow: var(--shadow-xl);
      display: none;
      flex-direction: column;
      overflow: hidden;
      z-index: 997;
      transform: translateY(20px);
      opacity: 0;
      transition: all 0.3s ease;
    }

    .chat-popup.active {
      display: flex;
      transform: translateY(0);
      opacity: 1;
    }

    .chat-header {
      background: var(--gradient);
      color: white;
      padding: 1.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .chat-header h5 {
      margin: 0;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .chat-body {
      padding: 1.5rem;
      max-height: 400px;
      overflow-y: auto;
    }

    .chat-message {
      margin-bottom: 1rem;
      padding: 1rem;
      border-radius: var(--radius-lg);
      background: var(--light);
      border: 1px solid var(--border);
      transition: transform 0.3s ease;
    }

    .chat-message:hover {
      transform: translateX(5px);
    }

    .chat-option {
      padding: 0.875rem 1rem;
      margin: 0.5rem 0;
      background: white;
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-weight: 500;
    }

    .chat-option:hover {
      background: var(--primary-light);
      color: white;
      border-color: var(--primary-light);
      transform: translateX(5px);
    }

    .chat-input-area {
      display: flex;
      border-top: 1px solid var(--border);
    }

    .chat-input {
      flex: 1;
      border: none;
      padding: 1rem;
      outline: none;
      font-family: inherit;
    }

    .chat-send {
      background: var(--gradient);
      color: white;
      border: none;
      padding: 0 1.5rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .chat-send:hover {
      background: var(--primary-dark);
    }

    /* Modern Footer */
    .main-footer {
      background: var(--dark);
      color: white;
      position: relative;
      overflow: hidden;
    }

    .footer-wave {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      overflow: hidden;
      line-height: 0;
    }

    .footer-wave svg {
      position: relative;
      display: block;
      width: calc(100% + 1.3px);
      height: 50px;
    }

    .footer-wave .shape-fill {
      fill: var(--light);
    }

    .footer-content {
      padding: 5rem 0 3rem;
      position: relative;
    }

    .footer-col {
      min-width: 0;
    }

    .footer-logo {
      margin-bottom: 1.5rem;
    }

    .footer-logo img {
      height: 40px;
    }

    .footer-description {
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 1.5rem;
      line-height: 1.8;
      margin-left: 10px;
    }

    .footer-title {
      color: white;
      font-size: 1.125rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 0.75rem;
    }

    .footer-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--gradient);
      border-radius: var(--radius-full);
    }

    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-links li {
      margin-bottom: 0.75rem;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      white-space: normal;
      overflow-wrap: anywhere;
    }

    .footer-links a:hover {
      color: white;
      transform: translateX(5px);
    }

    .footer-links a i {
      font-size: 0.875rem;
      transition: transform 0.3s ease;
    }

    .footer-links a:hover i {
      transform: translateX(3px);
    }

    .contact-info {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .contact-info li {
      margin-bottom: 1rem;
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      color: rgba(255, 255, 255, 0.7);
      word-break: break-word;
    }

    .contact-info li i {
      color: var(--primary-light);
      font-size: 1.125rem;
      margin-top: 0.125rem;
    }

    .contact-info li > div,
    .contact-info li a,
    .footer-description,
    .copyright,
    .footer-bottom-links a {
      overflow-wrap: anywhere;
      word-break: break-word;
    }

    .social-links {
      display: flex;
      gap: 1rem;
      margin-top: 1.5rem;
    }

    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .social-link:hover {
      background: var(--gradient);
      transform: translateY(-5px);
    }

    .newsletter-form {
      margin-top: 1.5rem;
    }

    .newsletter-input {
      width: 100%;
      padding: 0.875rem 1rem;
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: var(--radius-lg);
      background: rgba(255, 255, 255, 0.05);
      color: white;
      margin-bottom: 0.75rem;
    }

    .newsletter-input:focus {
      outline: none;
      border-color: var(--primary-light);
      background: rgba(255, 255, 255, 0.1);
    }

    .newsletter-input::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .footer-bottom {
      padding: 2rem 0;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: rgba(255, 255, 255, 0.7);
    }

    .footer-bottom-links {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .footer-bottom-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-bottom-links a:hover {
      color: white;
    }

    .copyright {
      text-align: center;
      margin-top: 1rem;
    }

    .back-to-top {
      position: fixed;
      bottom: 110px;
      right: 100px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--gradient);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 996;
      box-shadow: var(--shadow-lg);
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .back-to-top:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-xl);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
      .navbar {
        padding: 0.85rem 0;
      }

      .navbar > .container {
        align-items: center;
        flex-wrap: wrap;
      }

      .navbar-brand {
        max-width: calc(100% - 64px);
      }

      .navbar-collapse {
        width: calc(100% + 2rem);
        flex-basis: 100%;
        margin-top: 0.75rem;
        margin-left: -1rem;
        margin-right: -1rem;
        padding: 0;
        background: #ffffff;
        border-top: 1px solid rgba(15, 23, 42, 0.08);
        border-radius: 0;
        box-shadow: none;
      }

      .navbar-nav {
        width: 100%;
        padding: 0.75rem 1rem 1rem;
        align-items: stretch !important;
        gap: 0.25rem;
        background: #ffffff;
      }
      
      .navbar-nav .nav-link {
        padding: 0.875rem 0;
        display: block;
        width: 100%;
      }

      .navbar-nav .nav-link::after {
        left: 0;
        right: auto;
        width: 48px;
      }

      .navbar-nav .btn.btn-primary {
        width: 100%;
        text-align: center;
        margin-top: 0.5rem;
      }

      .main-footer {
        overflow: visible;
      }

      .footer-content .container,
      .footer-bottom .container {
        overflow: hidden;
      }
      
      .chat-popup {
        width: calc(100% - 40px);
        right: 20px;
        bottom: 160px;
      }
      
      .chat-icon {
        right: 20px;
        bottom: 100px;
      }
      
      .whatsapp-float {
        right: 20px;
        bottom: 20px;
      }
      
      .back-to-top {
        right: 20px;
        bottom: 180px;
      }
    }

    @media (max-width: 768px) {
      .navbar-brand img {
        height: 34px;
      }

      .navbar-collapse {
        padding: 0.875rem 1rem;
      }

      .footer-content {
        padding: 4rem 0 2rem;
      }
      
      .footer-col {
        margin-bottom: 2rem;
      }

      .footer-logo,
      .footer-description,
      .footer-title,
      .contact-info,
      .social-links {
        margin-left: 0;
        text-align: center;
      }

      .footer-title::after {
        left: 50%;
        transform: translateX(-50%);
      }

      .footer-links a,
      .contact-info li,
      .social-links {
        justify-content: center;
      }

      .footer-links a {
        text-align: center;
      }

      .contact-info li {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      
      .footer-bottom-links {
        gap: 1rem;
      }
      
      .chat-popup {
        bottom: 140px;
      }
    }

    @media (max-width: 576px) {
      .navbar {
        padding: 0.75rem 0;
      }

      .navbar-brand {
        max-width: calc(100% - 58px);
      }

      .navbar-brand img {
        height: 30px;
      }

      .navbar-collapse {
        margin-top: 0.75rem;
        padding: 0.75rem 0.875rem;
      }

      .hero-title {
        font-size: 2rem;
      }

      .footer-content {
        padding-top: 3.5rem;
      }

      .footer-bottom {
        padding: 1.5rem 0;
      }

      .footer-bottom-links {
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
      }

      .copyright {
        padding: 0 0.75rem;
      }
      
      .chat-popup {
        width: calc(100% - 30px);
        right: 15px;
      }
      
      .back-to-top {
        bottom: 200px;
      }
    }

    /* Utility Classes */
    .text-gradient {
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .section-padding {
      padding: 5rem 0;
    }

    .card-hover {
      transition: all 0.3s ease;
      border: none;
      box-shadow: var(--shadow-md);
    }

    .card-hover:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow-xl);
    }

    .bg-gradient {
      background: var(--gradient);
    }

    .bg-light-gradient {
      background: var(--gradient-light);
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
        "@type": "Service",
        "serviceType": "Digital Business Card Creation",
        "provider": {
          "@id": "{{ url('/') }}#organization"
        },
        "areaServed": {
          "@type": "Country",
          "name": "Global"
        },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Digital Card Packages",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Free Digital Card",
                "description": "Basic digital business card with QR code"
              },
              "price": "0",
              "priceCurrency": "INR"
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Premium Digital Card",
                "description": "Advanced digital card with analytics and NFC support"
              },
              "price": "999",
              "priceCurrency": "INR"
            }
          ]
        }
      },
      {
        "@type": "LocalBusiness",
        "@id": "{{ url('/') }}#localbusiness",
        "name": "DigitalCards.tech Headquarters",
        "image": "{{ asset('public/frontView/assets/img/og-image.jpg') }}",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "A108 Adam Street",
          "addressLocality": "New York",
          "addressRegion": "NY",
          "postalCode": "535022",
          "addressCountry": "US"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "40.7128",
          "longitude": "-74.0060"
        },
        "url": "{{ url('/') }}",
        "telephone": "+1-5589-55488-55",
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "18:00"
          }
        ],
        "priceRange": "₹₹"
      }
    ]
  }
  </script>

  <!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CJZJHWL0WG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CJZJHWL0WG');
    
    // Enhanced Click Tracking
    document.addEventListener('DOMContentLoaded', function() {
      // Track WhatsApp clicks
      document.querySelector('.whatsapp-float')?.addEventListener('click', function() {
        gtag('event', 'whatsapp_click', {
          'event_category': 'Engagement',
          'event_label': 'Floating WhatsApp Button'
        });
      });
      
      // Track demo requests
      document.querySelectorAll('[href*="demo"], [onclick*="demo"]').forEach(btn => {
        btn.addEventListener('click', function() {
          gtag('event', 'demo_request', {
            'event_category': 'Conversion',
            'event_label': 'Demo Request'
          });
        });
      });
    });
  </script>
  <style id="besidee-theme-layout">
    :root {
      --primary: #ff5a3d;
      --primary-dark: #d63d26;
      --primary-light: #ff8c73;
      --secondary: #c7f36b;
      --ink: #171411;
      --dark: #171411;
      --dark-light: #2b261f;
      --gray: #70685e;
      --light: #f7f1e8;
      --paper: #fffaf1;
      --mint: #dff7e4;
      --border: rgba(23, 20, 17, 0.12);
      --gradient: linear-gradient(135deg, #ff5a3d 0%, #ffb85c 52%, #c7f36b 100%);
      --gradient-light: linear-gradient(135deg, #fff0cf 0%, #dff7e4 100%);
      --shadow-sm: 0 1px 2px rgba(23, 20, 17, 0.06);
      --shadow-md: 0 12px 32px rgba(23, 20, 17, 0.09);
      --shadow-lg: 0 18px 42px rgba(23, 20, 17, 0.12);
      --shadow-xl: 0 28px 70px rgba(23, 20, 17, 0.16);
    }

    body {
      font-family: 'Space Grotesk', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      color: var(--ink);
      background:
        linear-gradient(90deg, rgba(23, 20, 17, 0.035) 1px, transparent 1px),
        linear-gradient(rgba(23, 20, 17, 0.035) 1px, transparent 1px),
        var(--light);
      background-size: 42px 42px;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Fraunces', Georgia, serif;
      letter-spacing: 0;
    }

    .navbar {
      background: rgba(255, 250, 241, 0.92);
      backdrop-filter: blur(18px);
      border-bottom: 1px solid var(--border);
      box-shadow: none;
    }

    .navbar.scrolled {
      box-shadow: 0 18px 48px rgba(23, 20, 17, 0.08);
    }

    .navbar-nav .nav-link {
      color: var(--ink);
      font-weight: 700;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: var(--primary-dark);
    }

    .navbar-nav .nav-link::after {
      height: 3px;
      background: var(--gradient);
    }

    .btn-primary,
    .chat-header,
    .chat-send,
    .back-to-top {
      background: var(--gradient);
      color: var(--ink);
    }

    .btn-primary {
      border: 1px solid rgba(23, 20, 17, 0.12);
      box-shadow: 0 10px 24px rgba(255, 90, 61, 0.24);
    }

    .btn-outline-primary {
      border-color: var(--ink);
      color: var(--ink);
      background: rgba(255, 250, 241, 0.76);
    }

    .btn-outline-primary:hover {
      background: var(--ink);
      color: var(--paper);
      border-color: var(--ink);
    }

    .main-footer {
      background: #171411;
      color: var(--paper);
    }

    .footer-title::after {
      background: var(--gradient);
    }

    .footer-links a:hover,
    .contact-info li i {
      color: var(--secondary);
    }

    .social-link:hover {
      background: var(--gradient);
      color: var(--ink);
    }

    .newsletter-input {
      border-color: rgba(255, 250, 241, 0.22);
      background: rgba(255, 250, 241, 0.08);
    }

    /* Beside-inspired professional foundation: quiet neutrals, soft borders and one blue accent. */
    :root {
      --primary: #0e0e10;
      --primary-dark: #000000;
      --primary-light: #3191ff;
      --secondary: #3191ff;
      --ink: #0e0e10;
      --dark: #0e0e10;
      --dark-light: #292524;
      --gray: #78716c;
      --light: #fafafa;
      --paper: #ffffff;
      --mint: #eff6ff;
      --border: rgba(14, 14, 16, 0.08);
      --gradient: #0e0e10;
      --gradient-light: #f5f5f4;
      --shadow-sm: 0 1px 3px rgba(14, 14, 16, 0.04);
      --shadow-md: 0 4px 16px rgba(14, 14, 16, 0.06);
      --shadow-lg: 0 12px 32px rgba(14, 14, 16, 0.08);
      --shadow-xl: 0 20px 48px rgba(14, 14, 16, 0.10);
    }

    body {
      font-family: 'Space Grotesk', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      background: var(--light);
    }

    h1, h2, h3, h4, h5, h6 { font-family: inherit; font-weight: 500; letter-spacing: -0.03em; }
    .navbar { background: rgba(255, 255, 255, 0.96); border-bottom-color: var(--border); }
    .navbar.scrolled { box-shadow: 0 2px 12px rgba(14, 14, 16, 0.06); }
    .navbar-nav .nav-link { font-size: 0.875rem; font-weight: 500; }
    .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { color: var(--ink); background: #f5f5f4; border-radius: var(--radius-full); }
    .navbar-nav .nav-link::after { display: none; }
    .btn-primary, .chat-header, .chat-send, .back-to-top { background: #0e0e10; color: #f5f5f4; }
    .btn-primary { border-color: #0e0e10; box-shadow: none; }
    .btn-primary:hover { background: #292524; color: #fff; box-shadow: none; transform: translateY(-1px); }
    .btn-outline-primary { border-color: #dfdcd9; color: var(--ink); background: #fff; }
    .btn-outline-primary:hover { background: #f5f5f4; color: var(--ink); border-color: #dfdcd9; }
    .main-footer { background: #0e0e10; color: #fafafa; }
    .footer-title::after, .footer-links a:hover, .contact-info li i { background: none; color: #3191ff; }
    .social-link:hover { background: #292524; color: #fff; }
  </style>
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

  <!-- Modern Footer -->
  <footer class="main-footer" role="contentinfo">
    <!-- Wave Divider -->
    <div class="footer-wave">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>

    <div class="footer-content">
      <div class="container">
        <div class="row">
          <!-- Company Info -->
          <div class="col-lg-4 col-md-6 footer-col mb-5 mb-lg-0">
            <div class="footer-logo">
              <img src="{{ asset('public/frontView/assets/img/logo-white.png') }}" alt="DigitalCards.tech Logo">
            </div>
            <p class="footer-description">
              Create professional AI-powered digital business cards in minutes. Share via QR code, NFC, or link. Perfect for modern professionals and businesses looking to make lasting connections.
            </p>
            <div class="social-links">
              <a href="https://facebook.com/digitalcards.tech" class="social-link" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/digitalcardstech" class="social-link" aria-label="Twitter" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com/digitalcards.tech" class="social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://linkedin.com/company/digitalcards-tech" class="social-link" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://youtube.com/@digitalcards.tech" class="social-link" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>

          <!-- Quick Links -->
          <div class="col-lg-2 col-md-6 footer-col mb-5 mb-md-0">
            <h5 class="footer-title">Quick Links</h5>
            <ul class="footer-links">
              <li><a href="{{ route('frontpage') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
              <li><a href="{{ route('frontpage') }}#about"><i class="fas fa-chevron-right"></i> About Us</a></li>
              <li><a href="{{ route('frontpage') }}#services"><i class="fas fa-chevron-right"></i> Pricing</a></li>
              <li><a href="{{ route('frontpage') }}#features"><i class="fas fa-chevron-right"></i> Features</a></li>
              <li><a href="{{ route('search') }}"><i class="fas fa-chevron-right"></i> Our Partners</a></li>
              <li><a href="{{ route('frontpage') }}#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
            </ul>
          </div>

          <!-- Products -->
          <div class="col-lg-2 col-md-6 footer-col mb-5 mb-md-0">
            <h5 class="footer-title">Products</h5>
            <ul class="footer-links">
              <li><a href="{{ url('/register?packageId=1') }}"><i class="fas fa-chevron-right"></i> Free Digital Card</a></li>
              <li><a href="{{ url('/register?packageId=2') }}"><i class="fas fa-chevron-right"></i> Premium Card</a></li>
              <li><a href="{{ url('/register?packageId=3') }}"><i class="fas fa-chevron-right"></i> Business Suite</a></li>
              <li><a href="#"><i class="fas fa-chevron-right"></i> NFC Cards</a></li>
              <li><a href="#"><i class="fas fa-chevron-right"></i> Team Accounts</a></li>
              <li><a href="#"><i class="fas fa-chevron-right"></i> White Label</a></li>
            </ul>
          </div>

          <!-- Contact & Newsletter -->
          <div class="col-lg-4 col-md-6 footer-col">
            <h5 class="footer-title">Contact Info</h5>
            <ul class="contact-info">
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <div>
                  <strong>Headquarters</strong><br>
                  A108 Adam Street, New York, NY 535022
                </div>
              </li>
              <li>
                <i class="fas fa-phone"></i>
                <div>
                  <strong>Phone</strong><br>
                  <a href="tel:+155895548855" class="text-white">+1 5589 55488 55</a>
                </div>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <div>
                  <strong>Email</strong><br>
                  <a href="mailto:info@digitalcards.tech" class="text-white">info@digitalcards.tech</a>
                </div>
              </li>
            </ul>

            <h5 class="footer-title mt-4">Newsletter</h5>
            <p class="footer-description">Subscribe to get updates on new features and offers.</p>
            <form class="newsletter-form" id="newsletterForm">
              <input type="email" class="newsletter-input" placeholder="Your email address" required aria-label="Email for newsletter subscription">
              <button type="submit" class="btn btn-primary w-100">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-links">
          <a href="/privacy-policy">Privacy Policy</a>
          <a href="/terms">Terms of Service</a>
          <a href="/refund-policy">Refund Policy</a>
          <a href="/cookie-policy">Cookie Policy</a>
          <a href="/sitemap">Sitemap</a>
          <a href="/security">Security</a>
        </div>
        <div class="copyright">
          &copy; {{ date('Y') }} DigitalCards.tech. All rights reserved. | Made with <i class="fas fa-heart text-danger"></i> for professionals worldwide
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
  </a>

  <!-- Floating Action Buttons -->
  <div class="chat-icon" id="chatIcon" onclick="toggleChat()" role="button" aria-label="Open chat support" tabindex="0">
    <i class="fas fa-comments"></i>
  </div>

  <div class="chat-popup" id="chatPopup" role="dialog" aria-labelledby="chatTitle">
    <div class="chat-header">
      <h5 id="chatTitle"><i class="fas fa-robot"></i> DigiCards AI Assistant</h5>
      <button class="btn btn-sm btn-light" onclick="toggleChat()" aria-label="Close chat">&times;</button>
    </div>
    <div class="chat-body" id="chatBody">
      <div class="chat-message">
        <strong>DigiCards AI</strong><br>
        Hello! 👋 I'm your AI assistant. How can I help you today? Choose an option below or type your question.
      </div>
      <div class="chat-option" onclick="selectOption('pricing')" role="button" tabindex="0">
        <i class="fas fa-tags"></i> Pricing Information
      </div>
      <div class="chat-option" onclick="selectOption('demo')" role="button" tabindex="0">
        <i class="fas fa-desktop"></i> Request a Demo
      </div>
      <div class="chat-option" onclick="selectOption('support')" role="button" tabindex="0">
        <i class="fas fa-headset"></i> Technical Support
      </div>
      <div class="chat-option" onclick="selectOption('features')" role="button" tabindex="0">
        <i class="fas fa-star"></i> Feature Details
      </div>
    </div>
    <div class="chat-input-area">
      <input type="text" id="chatInput" class="chat-input" placeholder="Type your message..." aria-label="Chat message input">
      <button class="chat-send" onclick="sendMessage()" aria-label="Send message">
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
  </div>

  <a href="https://api.whatsapp.com/send?phone=919537178057&text=Hello%20DigiCards%20Team!" class="whatsapp-float" target="_blank" rel="noopener noreferrer nofollow" aria-label="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- Scripts -->
  <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Back to top button
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });

    backToTop.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Newsletter form
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
      newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        // Add your newsletter submission logic here
        alert('Thank you for subscribing to our newsletter!');
        this.reset();
      });
    }

    // Chat functions
    const chatPopup = document.getElementById('chatPopup');
    const chatIcon = document.getElementById('chatIcon');

    window.toggleChat = function() {
      chatPopup.classList.toggle('active');
    }

    window.sendMessage = function() {
      const input = document.getElementById('chatInput');
      const message = input.value.trim();
      if (message) {
        const body = document.getElementById('chatBody');
        body.innerHTML += `<div class="chat-message"><strong>You:</strong> ${message}</div>`;
        input.value = '';
        body.scrollTop = body.scrollHeight;
        
        // Simulate AI response
        setTimeout(() => {
          const responses = [
            "Thanks for your message! Our team will get back to you shortly.",
            "I've noted your query. A specialist will contact you soon.",
            "Great question! Let me connect you with our support team.",
            "Thank you for reaching out. We'll respond within 24 hours."
          ];
          const randomResponse = responses[Math.floor(Math.random() * responses.length)];
          body.innerHTML += `<div class="chat-message"><strong>DigiCards AI:</strong> ${randomResponse}</div>`;
          body.scrollTop = body.scrollHeight;
        }, 1000);
      }
    }

    window.selectOption = function(option) {
      const body = document.getElementById('chatBody');
      let reply = '';
      let icon = '';
      
      switch(option) {
        case 'pricing':
          reply = 'Our pricing plans start at ₹0/month for basic features. Premium plans start at ₹999/month with advanced analytics and unlimited cards. Would you like to see detailed pricing?';
          icon = '💰';
          break;
        case 'demo':
          reply = 'We\'d love to give you a personalized demo! Please share your email or contact us at demo@digitalcards.tech to schedule a session.';
          icon = '🎯';
          break;
        case 'support':
          reply = 'Our technical support team is available 24/7. You can email support@digitalcards.tech or call +1 5589 55488 55 for immediate assistance.';
          icon = '🛠️';
          break;
        case 'features':
          reply = 'Our digital cards feature QR codes, NFC support, analytics dashboard, custom branding, unlimited updates, and team management. Which feature interests you most?';
          icon = '✨';
          break;
      }
      
      body.innerHTML += `
        <div class="chat-message"><strong>You:</strong> ${option}</div>
        <div class="chat-message"><strong>DigiCards AI:</strong> ${icon} ${reply}</div>
      `;
      body.scrollTop = body.scrollHeight;
    }

    // Close chat when clicking outside
    document.addEventListener('click', function(e) {
      if (!chatPopup.contains(e.target) && !chatIcon.contains(e.target) && chatPopup.classList.contains('active')) {
        chatPopup.classList.remove('active');
      }
    });

    // Keyboard accessibility
    document.addEventListener('keydown', function(e) {
      if (e.target.classList.contains('chat-option') && e.key === 'Enter') {
        e.target.click();
      }
      if (e.key === 'Escape' && chatPopup.classList.contains('active')) {
        chatPopup.classList.remove('active');
      }
    });

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.add('loaded');
            imageObserver.unobserve(img);
          }
        });
      });

      document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
      });
    }
  });
  </script>

  @yield('custom_script')
</html>





