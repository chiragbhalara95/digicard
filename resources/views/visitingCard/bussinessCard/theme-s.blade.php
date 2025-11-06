<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif</title>
    
    <meta property="og:title" content="@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif">
    <meta content="{{$companyInfoData->seo_description}}" name="description">
    <meta content="{{$companyInfoData->seo_keyword}}" name="keywords">
    <meta property="og:url" content="{{url('vc')}}/{{$userObj->slug}}">
    
    @if(!empty($companyInfoData->company_logo))
    <meta property="og:image" content="{{url('public')}}/{{$companyInfoData->company_logo}}">
    <link rel="icon" href="{{url('public')}}/{{$companyInfoData->company_logo}}" type="image/png">
    @elseif(!empty($userObj->profile_pic))
    <meta property="og:image" content="{{url('public')}}/{{$userObj->profile_pic}}">
    <link rel="icon" href="{{url('public')}}/{{$userObj->profile_pic}}" type="image/png">
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{asset('public/visitingCard/bussinessCard/g/css/intlTelInput.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin/plugins/toastr/toastr.min.css')}}">

    <script>
        document.documentElement.style.setProperty('--theme-color', "{{$userObj->theme_color}}");
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: {{$userObj->theme_color ?? '#6366f1'}};
            --secondary-color: #8b5cf6;
            --accent-color: #ec4899;
            --dark-bg: #0f172a;
            --card-bg: #1e293b;
            --text-primary: #f1f5f9;
            --text-secondary: #94a3b8;
            --success-color: #10b981;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--dark-bg);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 480px;
            margin: 0 auto;
            background: var(--dark-bg);
            min-height: 100vh;
        }

        /* Hero Section */
        .hero {
            background: var(--gradient);
            padding: 60px 20px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: drift 20s linear infinite;
        }

        @keyframes drift {
            from { transform: translate(0, 0); }
            to { transform: translate(50px, 50px); }
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid rgba(255,255,255,0.3);
            margin: 0 auto 20px;
            object-fit: cover;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
            background: var(--card-bg);
        }

        .company-name {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
        }

        .gst-number {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 5px;
            position: relative;
            z-index: 1;
        }

        .user-name {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 5px;
            position: relative;
            z-index: 1;
        }

        .profession {
            font-size: 14px;
            opacity: 0.8;
            font-style: italic;
            position: relative;
            z-index: 1;
        }

        .views-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            z-index: 2;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            padding: 20px;
            margin-top: -20px;
            position: relative;
            z-index: 2;
        }

        .action-btn {
            background: var(--card-bg);
            border: none;
            padding: 15px;
            border-radius: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--text-primary);
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .action-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(99, 102, 241, 0.3);
            background: var(--primary-color);
        }

        .action-btn i {
            font-size: 24px;
        }

        .action-btn span {
            font-size: 10px;
            text-transform: uppercase;
        }

        /* Section Base */
        .section {
            padding: 30px 20px;
            background: var(--card-bg);
            margin: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .section-header {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .section-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--gradient);
            border-radius: 3px;
        }

        /* Contact Info */
        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 12px;
            margin-bottom: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: var(--text-primary);
        }

        .contact-item:hover {
            background: rgba(99, 102, 241, 0.2);
            transform: translateX(5px);
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            background: var(--gradient);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        /* Share Section */
        .share-section {
            background: rgba(99, 102, 241, 0.1);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .whatsapp-input-group {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .whatsapp-input-group input {
            flex: 1;
            padding: 12px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            border-radius: 10px;
            background: var(--dark-bg);
            color: var(--text-primary);
            font-size: 14px;
        }

        .whatsapp-input-group button {
            padding: 12px 24px;
            background: var(--success-color);
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .whatsapp-input-group button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
        }

        /* Action Buttons */
        .action-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .btn {
            padding: 14px 20px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
        }

        .btn-secondary {
            background: rgba(99, 102, 241, 0.2);
            color: var(--text-primary);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.4);
        }

        /* Social Media */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 22px;
        }

        .social-link:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .social-facebook { background: #1877f2; color: white; }
        .social-instagram { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); color: white; }
        .social-linkedin { background: #0077b5; color: white; }
        .social-twitter { background: #1da1f2; color: white; }
        .social-youtube { background: #ff0000; color: white; }
        .social-pinterest { background: #bd081c; color: white; }
        .social-telegram { background: #0088cc; color: white; }

        /* QR Code Section */
        .qr-section {
            text-align: center;
        }

        .qr-code {
            background: white;
            padding: 20px;
            border-radius: 16px;
            display: inline-block;
            margin: 20px 0;
        }

        .url-copy {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .url-copy input {
            flex: 1;
            padding: 12px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            border-radius: 10px;
            background: var(--dark-bg);
            color: var(--text-primary);
        }

        /* Gallery */
        .gallery-filters {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            border-radius: 20px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            background: transparent;
            color: var(--text-primary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--gradient);
            border-color: transparent;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            background: var(--dark-bg);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .gallery-item.hidden {
            display: none;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
        }

        .gallery-item img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            cursor: pointer;
        }

        .gallery-info {
            padding: 12px;
        }

        .gallery-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .gallery-price {
            color: var(--success-color);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .gallery-price del {
            color: var(--text-secondary);
            margin-right: 5px;
        }

        .product-actions {
            display: flex;
            gap: 8px;
        }

        .product-btn {
            flex: 1;
            padding: 8px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            color: white;
        }

        .buy-btn {
            background: var(--primary-color);
        }

        .cart-btn {
            background: var(--success-color);
        }

        .enquiry-btn {
            background: var(--gradient);
            display: block;
            width: 100%;
        }

        .product-btn:hover {
            transform: scale(1.05);
        }

        /* Payment Methods */
        .payment-item {
            background: var(--dark-bg);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .payment-detail {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid rgba(99, 102, 241, 0.1);
        }

        .payment-detail:last-child {
            border-bottom: none;
        }

        .qr-image {
            width: 200px;
            height: 200px;
            margin: 15px auto;
            display: block;
            border-radius: 12px;
        }

        /* Feedback Section */
        .feedback-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 10px;
            font-size: 32px;
            cursor: pointer;
        }

        .star {
            color: var(--text-secondary);
            transition: all 0.3s ease;
        }

        .star:hover, .star.active {
            color: #fbbf24;
        }

        .form-input, .form-textarea {
            padding: 12px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            border-radius: 10px;
            background: var(--dark-bg);
            color: var(--text-primary);
            font-family: inherit;
        }

        .form-textarea {
            min-height: 100px;
            resize: vertical;
        }

        /* Video Section */
        .video-item {
            margin-bottom: 20px;
            border-radius: 12px;
            overflow: hidden;
        }

        .video-item iframe {
            width: 100%;
            height: 240px;
            border: none;
        }

        .video-title {
            padding: 15px;
            background: var(--dark-bg);
            text-align: center;
            font-weight: 600;
        }

        /* Enquiry Form */
        .map-container {
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 20px;
            height: 300px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Footer Navigation */
        .footer-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--card-bg);
            padding: 10px 0;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.3);
            z-index: 1000;
        }

        .footer-menu {
            display: flex;
            justify-content: space-around;
            max-width: 480px;
            margin: 0 auto;
            list-style: none;
        }

        .footer-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 11px;
            transition: all 0.3s ease;
        }

        .footer-item:hover {
            color: var(--primary-color);
        }

        .footer-item i {
            font-size: 20px;
        }

        .content-wrapper {
            padding-bottom: 80px;
        }

        /* Cart Badge */
        .cart-badge {
            position: relative;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ef4444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 20px;
            max-width: 90%;
            max-height: 90%;
            overflow: auto;
            position: relative;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 30px;
            cursor: pointer;
            color: var(--text-secondary);
        }

        .modal-close:hover {
            color: var(--text-primary);
        }

        .modal img {
            max-width: 100%;
            border-radius: 12px;
        }

        #caption, #description {
            text-align: center;
            margin-top: 15px;
            color: var(--text-secondary);
        }
.feedback-item:hover {
  background-color: rgba(255, 255, 255, 0.08) !important;
  transform: translateY(-2px);
  transition: all 0.25s ease-in-out;
}

.modal-content {
  backdrop-filter: blur(12px);
}

.text-muted {
  color: rgba(255,255,255,0.6) !important;
}
.section-header {
  font-weight: 600;
  font-size: 1.4rem;
}

@media (max-width: 576px) {
  .input-group input {
    font-size: 0.95rem;
  }

  .btn {
    font-size: 0.9rem;
    padding: 10px 14px;
  }

  .action-buttons .btn {
    width: 100%;
  }
}
  .btn-gradient {
    background: linear-gradient(to right, #00c6ff, #7d2ae8);
    border: none;
  }
  .btn-gradient:hover {
    opacity: 0.9;
  }
  .margin_bottom {
    margin-bottom:5px
  }
  .star-filled {
  color: #ffc107; /* gold */
}

.star-empty {
  color: #d6d6d6; /* light grey */
}

</style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <!-- Hero Section -->
            <div class="hero">
                @if($userConfigObj->isShowNoOfVisit == '1')
                <div class="views-badge">
                    <i class="fas fa-eye"></i> Views: <strong>{{$userObj->no_visit}}</strong>
                </div>
                @endif

                @if(!empty($companyInfoData->company_logo))
                <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="profile-pic" alt="Logo">
                @elseif(!empty($userObj->profile_pic))
                <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="profile-pic" alt="Logo">
                @endif

                @if (!empty($companyInfoData->company_name))
                <div class="company-name">{!! $companyInfoData->company_name !!}</div>
                @if (!empty($companyInfoData->gst_number))
                <div class="gst-number">GST No: {!! $companyInfoData->gst_number !!}</div>
                @endif
                <div class="user-name">{!! $userObj->name !!}</div>
                @else
                <div class="company-name">{!! $userObj->name !!}</div>
                @endif

                @if(!empty($companyInfoData->company_profession))
                <div class="profession">{!! $companyInfoData->company_profession !!}</div>
                @endif
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="action-btn">
                    <i class="fas fa-phone"></i>
                    <span>Call</span>
                </a>
                <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" target="_blank" class="action-btn">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
                <a href="mailto:{{$userObj->email}}" class="action-btn">
                    <i class="fas fa-envelope"></i>
                    <span>Email</span>
                </a>
                @if (!empty($companyInfoData->company_address))
                <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}" target="_blank" class="action-btn">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Location</span>
                </a>
                @endif
            </div>

            <!-- Contact Information -->
            <div class="section" id="home-section">
                <h2 class="section-header">Contact Information</h2>
                
                <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="contact-item">
                    <div class="contact-icon"><i class="fas fa-phone"></i></div>
                    <div>
                        <div style="font-weight: 600;">Mobile</div>
                        <div style="color: var(--text-secondary);">{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}</div>
                        @if(!empty($companyInfoData->country_landline))
                        <div style="color: var(--text-secondary);">{{$companyInfoData->country_landline}}</div>
                        @endif
                    </div>
                </a>

                @if(!empty($companyInfoData->company_website))
                <a href="{{$companyInfoData->company_website}}" target="_blank" class="contact-item">
                    <div class="contact-icon"><i class="fas fa-globe"></i></div>
                    <div>
                        <div style="font-weight: 600;">Website</div>
                        <div style="color: var(--text-secondary);">{{$companyInfoData->company_website}}</div>
                    </div>
                </a>
                @endif

                <a href="mailto:{{$userObj->email}}" class="contact-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <div style="font-weight: 600;">Email</div>
                        <div style="color: var(--text-secondary);">{{$userObj->email}}</div>
                    </div>
                </a>

                @if (!empty($companyInfoData->company_address))
                <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}" target="_blank" class="contact-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <div style="font-weight: 600;">Address</div>
                        <div style="color: var(--text-secondary);">{!! $companyInfoData->company_address !!}</div>
                    </div>
                </a>
                @endif
            </div>

<!-- Share My Card Section -->
<div class="section py-4 mt-4">
  <h2 class="section-header text-center mb-3 text-light">Share My Card</h2>

  <div class="share-section bg-dark rounded-4 p-4 mx-auto" style="max-width: 480px;">
    <p class="text-muted mb-3 text-center small">
      Enter a WhatsApp number to share your digital card
    </p>

    <input type="hidden" id="whatsapp-msg" value="{{ url('vc') }}/{{ $userObj->slug }}">

    <!-- WhatsApp Input + Button -->

<div class="d-flex align-items-center gap-2 mb-4 px-1 margin_bottom">
  <input 
    type="tel"
    id="whatsapp-input"
    class="form-input margin_bottom"
    placeholder="Enter WhatsApp number"
    maxlength="10"
    oninput="this.value=this.value.replace(/[^0-9]/g,'');"
  >
</div>

<!-- Action Buttons -->
<div class="row g-2 justify-content-center">
        <button 
          class="btn btn-success rounded-pill px-4 py-2 margin_bottom"
          type="button"
          onclick="handleWhatsappShare()"
        >
          <i class="fab fa-whatsapp me-1"></i> Send
        </button>
      <div class="col-12 col-sm-6 d-grid">
        <a href="{{ url('saveViewCard') }}/{{ $userObj->slug }}" 
           download="contact.vcf" 
           class="btn btn-gradient btn-lg rounded-pill text-white">
          <i class="fas fa-download me-2"></i> Save Contact
        </a>
      </div>

      <div class="col-12 col-sm-6 d-grid">
        <a href="javascript:void(0)" 
           onclick="openShareModal()" 
           class="btn btn-outline-light btn-lg rounded-pill">
          <i class="fas fa-share-alt me-2"></i> Share Card
        </a>
      </div>
    </div>
  </div>
</div>

            @if (count($socialMediaData) > 0)
            <!-- Social Media -->
            <div class="section">
                <h2 class="section-header">Connect With Me</h2>
                <div class="social-links">
                    @foreach($socialMediaData as $socialMediaDetail)
                        @if ($socialMediaDetail->type == 'fb')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link social-facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'in')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link social-instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'li')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link social-linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'tw')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link social-twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'pi')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link social-pinterest">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'yt')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link social-youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'tg')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link social-telegram">
                            <i class="fab fa-telegram"></i>
                        </a>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif

            <!-- QR Code -->
            <div class="section qr-section">
                <h2 class="section-header">Scan QR Code</h2>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Share your digital card instantly</p>
                <div class="qr-code">
                    {!! QrCode::size(200)->generate($vistingUrl) !!}
                </div>
                <input type="text" readonly id="visitingUrlText" value="{{$vistingUrl}}" style="width: 100%; padding: 12px; border: 2px solid rgba(99, 102, 241, 0.3); border-radius: 10px; background: var(--dark-bg); color: var(--text-primary); margin-bottom: 15px;">
                <div class="action-buttons">
                    <button class="btn btn-primary" onclick="copyUrlSecond()">
                        <i class="fas fa-copy"></i> Copy URL
                    </button>
                    <a href="{{url('downloadQrCode')}}/{{$userObj->slug}}" class="btn btn-secondary">
                        <i class="fas fa-download"></i> Download QR
                    </a>
                </div>
            </div>

            <!-- About -->
            <div class="section" id="about-us-section">
                <h2 class="section-header">{{$userConfigObj->aboutLabel}}</h2>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    {!! $companyInfoData->company_info !!}
                </p>
                @if(!empty($companyInfoData->broucher_file))
                <div style="margin-top: 20px;">
                    <a href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download class="btn btn-secondary" style="width: 100%;">
                        <i class="fas fa-file-pdf"></i> Download Brochure - @if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif
                    </a>
                </div>
                @endif
            </div>

            @if($galleryData->count() > 0)
            <!-- Products/Gallery -->
            <div class="section" id="products-services-section">
                <h2 class="section-header">{{$userConfigObj->galleryLabel}}</h2>
                
                @if (!empty($galleryCatInfo))
                <div class="gallery-filters">
                    <button class="filter-btn active all-filter-btn" data-filter="all">All</button>
                    @foreach($galleryCatInfo as $catlbl => $catName)
                    <button class="filter-btn" data-filter="{{$catlbl}}">{{$catName}}</button>
                    @endforeach
                </div>
                @endif

                <div class="gallery-grid">
                    @foreach($galleryData as $galleryDetail)
                    <div class="gallery-item filter {{$galleryDetail->category_name}}">
                        <img onclick="openImageModal(this)" 
                             alt="{{$galleryDetail->title}}" 
                             src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" 
                             description="{{$galleryDetail->description}}">
                        <div class="gallery-info">
                            <div class="gallery-title">{{$galleryDetail->title}}</div>
                            @if ($galleryDetail->special_price > 0 && $galleryDetail->mrp_price > $galleryDetail->special_price)
                            <div class="gallery-price">
                                <del>₹{{$galleryDetail->mrp_price}}</del> ₹{{$galleryDetail->special_price}}
                            </div>
                            @elseif($galleryDetail->mrp_price > 0)
                            <div class="gallery-price">₹{{$galleryDetail->mrp_price}}</div>
                            @endif

                            <div class="product-actions">
                                @php
                                    $link="https://api.whatsapp.com/send?phone=".str_replace('+','',$companyInfoData->country_code).$companyInfoData->company_mobile."&text=Enquery for product:".urlencode($galleryDetail->title);
                                    $price=0;
                                    if ($galleryDetail->mrp_price > 0) {
                                        if ($galleryDetail->special_price > 0 && $galleryDetail->mrp_price > $galleryDetail->special_price){
                                            $link .= " Price=₹".$galleryDetail->special_price;
                                            $price = $galleryDetail->special_price;
                                        } else{
                                            $link .= " Price=₹".$galleryDetail->mrp_price;
                                            $price = $galleryDetail->mrp_price;
                                        }
                                    }    
                                @endphp

                                @if($userConfigObj->isEcommerceEnable == '1')
                                <button class="product-btn buy-btn buyNowBtn" 
                                        data-id="{{$galleryDetail->id}}" 
                                        data-product="{{$galleryDetail->title}}" 
                                        data-price="{{$price}}">
                                    Buy Now
                                </button>
                                <button class="product-btn cart-btn add" 
                                        data-id="{{$galleryDetail->id}}" 
                                        data-product="{{$galleryDetail->title}}" 
                                        data-price="{{$price}}">
                                    Add to Cart
                                </button>
                                @else
                                <a href="{{$link}}" target="_blank" class="product-btn enquiry-btn">
                                    {{$userConfigObj->enquiryLabel}}
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            @if(count($videosData) > 0)
            <!-- Videos -->
            <div class="section" id="video-section">
                <h2 class="section-header">Videos</h2>
                @foreach($videosData as $videosDetail)
                <div class="video-item">
                    <iframe src="{{$videosDetail->video_path}}" 
                            title="{{$videosDetail->title}}" 
                            allowfullscreen></iframe>
                    <div class="video-title">{{$videosDetail->title}}</div>
                </div>
                @endforeach
            </div>
            @endif

            @if(count($paymentMasterData) > 0)
            <!-- Payment Options -->
            <div class="section" id="payment-options-section">
                <h2 class="section-header">Payment Options</h2>
                
                @foreach($paymentMasterData as $paymentMasterDetail)
                    @if ($paymentMasterDetail->type == 'bank')
                    <div class="payment-item">
                        <h3 style="margin-bottom: 15px; color: var(--primary-color);">Bank Details</h3>
                        <div class="payment-detail">
                            <span style="color: var(--text-secondary);">Bank Name:</span>
                            <strong>{{$paymentMasterDetail->bank_name}}</strong>
                        </div>
                        <div class="payment-detail">
                            <span style="color: var(--text-secondary);">Account Holder:</span>
                            <strong>{{$paymentMasterDetail->account_holder_name}}</strong>
                        </div>
                        <div class="payment-detail">
                            <span style="color: var(--text-secondary);">Account Number:</span>
                            <strong>{{$paymentMasterDetail->account_no}}</strong>
                        </div>
                        <div class="payment-detail">
                            <span style="color: var(--text-secondary);">Account Type:</span>
                            <strong>{{ucwords($paymentMasterDetail->account_type)}} Account</strong>
                        </div>
                        <div class="payment-detail">
                            <span style="color: var(--text-secondary);">IFSC Code:</span>
                            <strong>{{$paymentMasterDetail->ifsc_code}}</strong>
                        </div>
                        <div class="payment-detail">
                            <span style="color: var(--text-secondary);">Branch Name:</span>
                            <strong>{{$paymentMasterDetail->branch_name}}</strong>
                        </div>
                    </div>
                    @else
                    <div class="payment-item">
                        <h3 style="margin-bottom: 15px; color: var(--primary-color);">UPI Details</h3>
                        <div class="payment-detail">
                            <span style="color: var(--text-secondary);">{{ucwords($paymentMasterDetail->type)}} Number:</span>
                            <strong>{{$paymentMasterDetail->account_no}}</strong>
                        </div>
                        @if(!empty($paymentMasterDetail->qr_img))
                        <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" 
                             class="qr-image" 
                             alt="Payment QR Code">
                        @endif
                    </div>
                    @endif
                @endforeach
            </div>
            @endif

            <!-- Feedback -->
            <div class="section" id="feedback-section">
                <h2 class="section-header">Feedbacks</h2>
                @include('visitingCard.bussinessCard.include.feedbackV2')
            </div>

            @if($userConfigObj->isShowEnquiry == '1')
            <!-- Enquiry Form -->
            <div class="section" id="enquiry-section">
                <h2 class="section-header">Enquiry Form</h2>

                @if (!empty($companyInfoData->company_address) && !empty($companyInfoData->latitude))
                <div class="map-container">
                    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                @endif

                <form data-parsley-validate method="post" class="feedback-form" id="enquiry-form" novalidate>
                    <meta name="csrf_token" content="{{ csrf_token() }}" />
                    <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
                    <input type="hidden" id="companyEmail" value="{{$userObj->email}}">

                    <input type="text" 
                           name="enquiryName" 
                           id="enquiryName" 
                           placeholder="Enter Full Name" 
                           pattern="[a-zA-Z ]*$" 
                           required 
                           class="form-input">

                    <input type="email" 
                           name="email" 
                           id="email" 
                           placeholder="Enter Email" 
                           class="form-input">

                    <input type="text" 
                           name="phoneNumber" 
                           id="phoneNumber" 
                           required 
                           placeholder="Enter Phone Number" 
                           class="form-input">

                    <textarea name="message" 
                              id="message" 
                              required 
                              placeholder="Enter Message" 
                              class="form-textarea"></textarea>

                    <button type="submit" id="inquiry-send" class="btn btn-primary" style="width: 100%;">
                        Send Enquiry
                    </button>
                </form>
            </div>
            @endif

        </div>

        <!-- Footer Navigation -->
        <div class="footer-nav">
            <ul class="footer-menu">
                <li>
                    <a class="footer-item" href="#home-section">
                        <i class="fas fa-home"></i>
                        <span>HOME</span>
                    </a>
                </li>
                <li>
                    <a class="footer-item" href="#about-us-section">
                        <i class="fas fa-briefcase"></i>
                        <span>{{$userConfigObj->aboutLabel}}</span>
                    </a>
                </li>
                @if($galleryData->count() > 0)
                <li>
                    <a class="footer-item" href="#products-services-section">
                        <i class="fas fa-box-open"></i>
                        <span>{{$userConfigObj->galleryLabel}}</span>
                    </a>
                </li>
                @endif
                @if(count($paymentMasterData) > 0)
                <li>
                    <a class="footer-item" href="#payment-options-section">
                        <i class="fas fa-money-bill-alt"></i>
                        <span>PAYMENT</span>
                    </a>
                </li>
                @endif
                @if(count($videosData) > 0)
                <li>
                    <a class="footer-item" href="#video-section">
                        <i class="fas fa-video"></i>
                        <span>VIDEOS</span>
                    </a>
                </li>
                @endif
                @if($userConfigObj->isShowEnquiry == '1')
                <li>
                    <a class="footer-item" href="#enquiry-section">
                        <i class="fas fa-comment-alt"></i>
                        <span>ENQUIRY</span>
                    </a>
                </li>
                @endif
                <li>
                    <a class="footer-item" href="#feedback-section">
                        <i class="fas fa-star"></i>
                        <span>FEEDBACK</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="modal">
        <span class="modal-close" onclick="closeImageModal()">×</span>
        <div class="modal-content">
            <img id="img01" alt="Product Image">
            <div id="caption"></div>
            <div id="description"></div>
        </div>
    </div>

    <!-- Share Modal -->
    <div id="shareModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeShareModal()">×</span>
            <h3 style="margin-bottom: 20px;">Share Profile</h3>
            <p style="color: var(--text-secondary); margin-bottom: 20px;">Share my Digital Card in your network.</p>
            
            <div class="social-links" style="margin-top: 20px;">
                <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #25d366;">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="sms:?body={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #00b2ff;">
                    <i class="fas fa-comment-dots"></i>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link social-facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?text={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link social-twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://pinterest.com/pin/create/link/?url={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link social-pinterest">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                <a href="mailto:?subject=Digital Card&body=Check out this digital card {{url('vc')}}/{{$userObj->slug}}" 
                   class="social-link" 
                   style="background: #ea4335;">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </div>

    <input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

    <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery.star-rating.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/common/js/feedbackSub.js')}}"></script>
    <script src="{{asset('public/js/prevent.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>

    @if($userConfigObj->isEcommerceEnable == '1')
    <script src="{{asset('public/visitingCard/bussinessCard/common/js/add2Cart.js')}}"></script>
    @endif

    <script>
        // Gallery Filter
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                document.querySelectorAll('.gallery-item').forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });

        // Image Modal
        function openImageModal(img) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('img01');
            const caption = document.getElementById('caption');
            const description = document.getElementById('description');
            
            modal.classList.add('active');
            modalImg.src = img.src;
            caption.innerHTML = img.alt;
            description.innerHTML = img.getAttribute('description');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.remove('active');
        }

        // Share Modal
        function openShareModal() {
            document.getElementById('shareModal').classList.add('active');
        }

        function closeShareModal() {
            document.getElementById('shareModal').classList.remove('active');
        }

        // Copy URL
        function copyUrlSecond() {
            const copyText = document.getElementById('visitingUrlText');
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand('copy');
            
            toastr.success('URL copied to clipboard!');
        }

        // WhatsApp Share
        function handleWhatsappShare() {
            const phoneNumber = document.getElementById('whatsapp-input').value;
            const message = document.getElementById('whatsapp-msg').value;
            
            if (phoneNumber && phoneNumber.length === 10) {
                const url = `https://api.whatsapp.com/send?phone=91${phoneNumber}&text=${encodeURIComponent(message)}`;
                window.open(url, '_blank');
            } else {
                toastr.error('Please enter a valid 10-digit phone number');
            }
        }

        // Close modals on outside click
        window.onclick = function(event) {
            const imageModal = document.getElementById('imageModal');
            const shareModal = document.getElementById('shareModal');
            
            if (event.target === imageModal) {
                closeImageModal();
            }
            if (event.target === shareModal) {
                closeShareModal();
            }
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
$(document).ready(function() {
    // initialize the star rating plugin
    $('#ratingStars').starRating({
        stars: 5,
        starsSize: 1.8,
        titles: ["Very Bad", "Bad", "Okay", "Good", "Excellent"],
        showInfo: true,
        inputName: 'rating_count'
    });

    // sync selected value to hidden field
    $('#ratingStars').on('change', function (e, value) {
        $('#ratingVal').val(value);
    });
});

</script>

</body>
</html>