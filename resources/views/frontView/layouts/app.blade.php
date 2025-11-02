<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Just in 5 min Make your Digital Visiting Card - digitalcards.tech</title>
    <meta content="Digital Visiting Card is the standard for digital business cards that works on Smartphones, Tablets and computers with no app required." name="description">
    <meta content="online,digital,card,makers,professional card,business card,customize card,consultants,visiting card,contact,email,business,professional,customize,mumbai,surat,ahmedabad,vadodara, india, share,save,online digital card,makes, digital visiting card,digital card online,digitalcard,digital card website,digital cards,what is digital card,digital card,digital card information,digital online card,get digital card,about digital card,how to make digital card online,create digital card,digital business card online,how to make digital card, digitalcards.tech, digicards, digitalcards" name="keywords">
    <meta name="author" content="digitalcards.tech">
    <meta name="subject" content="Website">
    <meta name="copyright" content="Digital Card">
    <meta name="classification" content="Digital Card">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('public/frontView/assets/img/favicon.ico') }}">
    <link href="{{ asset('public/frontView/assets/img/logo.png') }}" rel="icon" alt="logo">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

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
            --success: #10b981;
            --danger: #ef4444;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Top Banner */
        .top-banner {
            background: var(--gradient);
            color: white;
            text-align: center;
            padding: 0.75rem;
            font-size: 0.875rem;
            font-weight: 500;
            position: relative;
            animation: slideDown 0.5s ease;
            z-index: 1001;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }

        .banner-close {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.25rem;
            opacity: 0.8;
            background: none;
            border: none;
            color: white;
            padding: 0;
            line-height: 1;
        }

        .banner-close:hover {
            opacity: 1;
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand img {
            height: 40px;
        }

        .navbar-nav .nav-link {
            color: var(--dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary);
        }

        .btn-primary {
            background: var(--gradient);
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102, 102, 255, 0.3);
        }

        /* Alerts */
        .alert {
            border-radius: 10px;
            animation: slideInDown 0.3s ease;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer */
        footer {
            background: var(--dark-light);
            color: white;
            padding: 3rem 0 1rem;
        }

        footer h3, footer h4 {
            margin-bottom: 1rem;
            color: white;
        }

        footer p, footer a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: var(--primary);
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 0.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-bottom {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            color: rgba(255,255,255,0.5);
        }

        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            cursor: pointer;
            transition: all 0.3s;
            z-index: 999;
            text-decoration: none;
            color: white;
            font-size: 2rem;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 30px rgba(37, 211, 102, 0.6);
            color: white;
        }

        .back-to-top {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 45px;
            height: 45px;
            background: var(--primary);
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(99, 102, 241, 0.4);
            cursor: pointer;
            transition: all 0.3s;
            z-index: 999;
            text-decoration: none;
            color: white;
        }

        .back-to-top.active {
            display: flex;
        }

        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 30px rgba(99, 102, 241, 0.6);
            color: white;
        }

        /* Chat Popup */
        .chat-popup {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 350px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            z-index: 998;
            display: none;
            animation: slideUp 0.3s ease;
        }

        .chat-popup.active {
            display: block;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .chat-header {
            background: var(--gradient);
            color: white;
            padding: 1.5rem;
            border-radius: 20px 20px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-header h3 {
            font-size: 1.125rem;
            font-weight: 600;
            margin: 0;
        }

        .chat-close {
            cursor: pointer;
            font-size: 1.5rem;
            opacity: 0.8;
            background: none;
            border: none;
            color: white;
            padding: 0;
            line-height: 1;
        }

        .chat-close:hover {
            opacity: 1;
        }

        .chat-body {
            padding: 1.5rem;
            max-height: 400px;
            overflow-y: auto;
        }

        .chat-message {
            background: #f8fafc;
            padding: 1rem;
            border-radius: 15px;
            margin-bottom: 1rem;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .chat-message p {
            color: var(--dark);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .chat-message p:last-child {
            margin-bottom: 0;
        }

        .chat-options {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .chat-option {
            background: white;
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 0.75rem;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            font-weight: 500;
        }

        .chat-option:hover {
            background: var(--primary);
            color: white;
        }

        .chat-input-area {
            padding: 1rem 1.5rem;
            border-top: 1px solid #e2e8f0;
            display: flex;
            gap: 0.5rem;
        }

        .chat-input {
            flex: 1;
            padding: 0.75rem;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.9rem;
        }

        .chat-send {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }

        .chat-send:hover {
            transform: scale(1.05);
        }

        /* Default Bootstrap 5 danger color */
         .error {
         color: #dc3545 !important;
         }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
                bottom: 20px;
                right: 20px;
            }

            .back-to-top {
                bottom: 80px;
                right: 20px;
            }

            .chat-popup {
                width: calc(100% - 40px);
                right: 20px;
                bottom: 80px;
            }
        }
        @media (max-width: 991.98px) {
  .navbar-nav .nav-item {
    text-align: center;
    margin: 8px 0;
  }
  .navbar-nav .btn {
    width: 90%;
    margin: 0 auto;
  }
}

    </style>

    @yield('custom_style')
</head>
<body>
    <!-- Top Banner -->
    <div class="top-banner" id="topBanner">
        <span>🎉 Special Offer: Get 50% OFF on Annual Plans - Limited Time Only!</span>
        <button class="banner-close" onclick="closeBanner()" aria-label="Close banner">&times;</button>
    </div>

    <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 sticky-top">
  <div class="container d-flex justify-content-between align-items-center">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="{{url('/')}}">
      <img src="{{ asset('public/frontView/assets/img/logo.png') }}" alt="My DigiCard" height="40" class="mr-2">
      <span class="font-weight-bold text-dark">MY DIGICARD</span>
    </a>

    <!-- Toggler for mobile -->
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-lg-center">
            <li class="nav-item mx-lg-2"><a class="nav-link text-dark font-weight-medium" href="{{route('frontpage')}}">Home</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link text-dark font-weight-medium" href="{{route('frontpage')}}#about">About Us</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link text-dark font-weight-medium" href="{{route('frontpage')}}#services">Products</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link text-dark font-weight-medium" href="{{route('frontpage')}}#contact">Contact</a></li>
            <li class="nav-item mx-lg-2"><a class="nav-link text-dark font-weight-medium" href="{{route('search')}}">Our Partners</a></li>

            @if(Auth::check())
            <li class="nav-item mt-2 mt-lg-0 ms-lg-3">
                <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
            </li>
            <li class="nav-item mt-2 mt-lg-0 ms-lg-3">
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
                </a>
            </li>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <li class="nav-item mt-2 mt-lg-0 ms-lg-3">
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
            </li>
            <li class="nav-item mt-2 mt-lg-0 ms-lg-3">
                <a class="btn btn-primary w-100 w-lg-auto px-4 py-2 rounded-pill text-white" 
                href="{{ url('/register?packageId=2') }}">
                Register
                </a>
            </li>
            @endif
        </ul>
    </div>
  </div>
</nav>


    <!-- Alert Messages -->
    @if (session()->has('success'))
    <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            @if(is_array(session('success')))
                <ul class="mb-0">
                    @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('success') }}
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if (session()->has('error'))
    <div class="container mt-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @if(is_array(session('error')))
                <ul class="mb-0">
                    @foreach (session('error') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('error') }}
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    <!-- Main Content -->
    <main id="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h3>DigiCards</h3>
                    <p>A digital card is an online hosted, digital virtual representation of any plastic card. A digital card, unlike a plastic card, doesn't require any physical representation.</p>
                    <div class="social-links">
                        <a href="{{route('frontpage')}}" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="{{route('frontpage')}}" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="{{route('frontpage')}}" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="{{route('frontpage')}}" title="Google Plus"><i class="fab fa-google-plus"></i></a>
                        <a href="{{route('frontpage')}}" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{route('frontpage')}}">Home</a></li>
                        <li><a href="{{route('frontpage')}}#about">About us</a></li>
                        <li><a href="{{route('frontpage')}}#services">Services</a></li>
                        <li><a href="{{route('frontpage')}}">Terms of service</a></li>
                        <li><a href="{{route('frontpage')}}">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street<br>
                       New York, NY 535022<br>
                       United States<br>
                       <strong>Phone:</strong> +1 5589 55488 55<br>
                       <strong>Email:</strong> info@digitalcards.tech</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; Copyright <strong>DigiCards</strong>. All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <!-- Chat Popup -->
    <div class="chat-popup" id="chatPopup">
        <div class="chat-header">
            <div>
                <h3>💬 Chat with us</h3>
                <p class="mb-0" style="font-size: 0.875rem; opacity: 0.9;">We're online now!</p>
            </div>
            <button class="chat-close" onclick="toggleChat()" aria-label="Close chat">&times;</button>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="chat-message">
                <p><strong>DigiCards Support</strong></p>
                <p>Hello! 👋 Welcome to DigiCards. How can we help you today?</p>
                <div class="chat-options">
                    <div class="chat-option" onclick="selectOption('pricing')">💰 Pricing Information</div>
                    <div class="chat-option" onclick="selectOption('demo')">🎯 Request a Demo</div>
                    <div class="chat-option" onclick="selectOption('support')">🛠️ Technical Support</div>
                    <div class="chat-option" onclick="selectOption('other')">💬 Other Questions</div>
                </div>
            </div>
        </div>
        <div class="chat-input-area">
            <input type="text" class="chat-input" id="chatInput" placeholder="Type your message...">
            <button class="chat-send" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <!-- WhatsApp Float Button -->
    <a href="https://api.whatsapp.com/send?phone=919537178057&text=Inquiry%20for%20Digital%20Business%20Cards" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/frontView/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <script>
        // Close top banner
        function closeBanner() {
            const banner = document.getElementById('topBanner');
            banner.style.transition = 'all 0.3s ease';
            banner.style.transform = 'translateY(-100%)';
            setTimeout(() => {
                banner.style.display = 'none';
            }, 300);
        }

        // Toggle chat popup
        function toggleChat() {
            const chatPopup = document.getElementById('chatPopup');
            chatPopup.classList.toggle('active');
        }

        // Show chat popup automatically after 5 seconds
        setTimeout(() => {
            const chatPopup = document.getElementById('chatPopup');
            if (!chatPopup.classList.contains('active')) {
                chatPopup.classList.add('active');
                setTimeout(() => {
                    if (document.querySelectorAll('.chat-message').length === 1) {
                        chatPopup.classList.remove('active');
                    }
                }, 10000);
            }
        }, 5000);

        // Handle chat option selection
        function selectOption(option) {
            const chatBody = document.getElementById('chatBody');
            const messages = {
                pricing: 'Great! Our plans start at just Rs.999. Would you like to see our full pricing page?',
                demo: 'Excellent! We\'d love to show you DigiCards in action. Please share your email and we\'ll schedule a demo.',
                support: 'We\'re here to help! What technical issue are you experiencing?',
                other: 'Sure! Feel free to type your question below and we\'ll get back to you shortly.'
            };

            const userMessage = document.createElement('div');
            userMessage.className = 'chat-message';
            userMessage.style.background = '#667eea';
            userMessage.style.color = 'white';
            userMessage.style.marginLeft = '2rem';
            userMessage.innerHTML = '<p style="color: white;">' + option.charAt(0).toUpperCase() + option.slice(1) + '</p>';
            chatBody.appendChild(userMessage);

            setTimeout(() => {
                const botMessage = document.createElement('div');
                botMessage.className = 'chat-message';
                botMessage.innerHTML = '<p><strong>DigiCards Support</strong></p><p>' + messages[option] + '</p>';
                chatBody.appendChild(botMessage);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 500);

            chatBody.scrollTop = chatBody.scrollHeight;
        }

        // Send chat message
        function sendMessage() {
            const input = document.getElementById('chatInput');
            const message = input.value.trim();
            
            if (message) {
                const chatBody = document.getElementById('chatBody');
                
                const userMessage = document.createElement('div');
                userMessage.className = 'chat-message';
                userMessage.style.background = '#667eea';
                userMessage.style.color = 'white';
                userMessage.style.marginLeft = '2rem';
                userMessage.innerHTML = '<p style="color: white;">' + message + '</p>';
                chatBody.appendChild(userMessage);
                
                input.value = '';
                chatBody.scrollTop = chatBody.scrollHeight;
                
                setTimeout(() => {
                    const botMessage = document.createElement('div');
                    botMessage.className = 'chat-message';
                    botMessage.innerHTML = '<p><strong>DigiCards Support</strong></p><p>Thanks for your message! Our team will respond shortly. For immediate assistance, please WhatsApp us or call +1 5589 55488 55</p>';
                    chatBody.appendChild(botMessage);
                    chatBody.scrollTop = chatBody.scrollHeight;
                }, 1000);
            }
        }

        // Send message on Enter key
        document.getElementById('chatInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Auto hide alerts
        setTimeout(() => {
            $('.alert').fadeOut('slow');
        }, 3000);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href !== '#!') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CJZJHWL0WG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-CJZJHWL0WG');
    </script>


    @yield('custom_script')
</body>
</html>