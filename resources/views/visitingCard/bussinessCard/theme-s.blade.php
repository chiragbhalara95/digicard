<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif | Professional Digital Card</title>
    
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/g/css/intlTelInput.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin/plugins/toastr/toastr.min.css')}}">

    <script>
        document.documentElement.style.setProperty('--theme-color', "{{$userObj->theme_color ?? '#2563eb'}}");
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: {{$userObj->theme_color ?? '#2563eb'}};
            --primary-dark: #1e40af;
            --primary-light: #3b82f6;
            --secondary-color: #64748b;
            --accent-color: #8b5cf6;
            --background: #f8fafc;
            --surface: #ffffff;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-light: #94a3b8;
            --border-color: #e2e8f0;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --error-color: #ef4444;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-full: 9999px;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--background);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .container {
            max-width: 480px;
            margin: 0 auto;
            background: var(--surface);
            min-height: 100vh;
            box-shadow: var(--shadow-lg);
            position: relative;
        }

        /* Professional Header */
        .professional-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            padding: 2.5rem 1.5rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .professional-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.1) 50%, transparent 60%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .profile-container {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .profile-pic-wrapper {
            position: relative;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: var(--radius-full);
            border: 4px solid rgba(255,255,255,0.3);
            object-fit: cover;
            box-shadow: var(--shadow-xl);
            background: white;
        }

        .verified-badge {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: var(--success-color);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            border: 2px solid white;
        }

        .profile-info {
            flex: 1;
        }

        .company-name {
            font-size: 1.75rem;
            font-weight: 700;
            color: white;
            margin-bottom: 0.25rem;
            line-height: 1.2;
        }

        .user-name {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .profession {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            padding: 0.375rem 1rem;
            border-radius: var(--radius-full);
            font-size: 0.875rem;
            color: white;
            font-weight: 500;
        }

        .views-badge {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            padding: 0.5rem 1rem;
            border-radius: var(--radius-full);
            font-size: 0.75rem;
            color: white;
            font-weight: 500;
            z-index: 2;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.75rem;
            padding: 1.5rem;
            margin-top: -1.5rem;
            position: relative;
            z-index: 10;
        }

        .action-btn {
            background: var(--surface);
            border: 1px solid var(--border-color);
            padding: 1rem 0.5rem;
            border-radius: var(--radius-lg);
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--text-primary);
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            box-shadow: var(--shadow-sm);
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .action-btn i {
            font-size: 1.25rem;
            color: var(--primary-color);
        }

        .action-btn span {
            font-size: 0.75rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Professional Cards */
        .card {
            background: var(--surface);
            border-radius: var(--radius-xl);
            padding: 1.5rem;
            margin: 0 1.5rem 1.5rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.25rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--border-color);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .card-title i {
            color: var(--primary-color);
        }

        /* Contact Information */
        .contact-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--background);
            border-radius: var(--radius-lg);
            text-decoration: none;
            color: var(--text-primary);
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .contact-item:hover {
            background: white;
            border-color: var(--primary-color);
            transform: translateX(4px);
            box-shadow: var(--shadow-sm);
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .contact-details {
            flex: 1;
        }

        .contact-label {
            font-size: 0.875rem;
            color: var(--text-secondary);
            margin-bottom: 0.25rem;
        }

        .contact-value {
            font-weight: 500;
            color: var(--text-primary);
        }

        /* Share Section */
        .share-section {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            padding: 1.5rem;
            border-radius: var(--radius-xl);
            margin: 0 1.5rem 1.5rem;
        }

        .share-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .share-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .share-subtitle {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .share-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .share-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 1rem;
            border-radius: var(--radius-lg);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .share-btn-primary {
            background: var(--primary-color);
            color: white;
        }

        .share-btn-outline {
            background: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .share-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* QR Code Section */
        .qr-wrapper {
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius-xl);
            display: inline-block;
            margin: 1rem 0;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
        }

        .qr-code {
            width: 180px;
            height: 180px;
        }

        .qr-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .qr-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            border-radius: var(--radius-lg);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
            border: none;
        }

        .btn-secondary {
            background: white;
            color: var(--primary-color);
            border: 2px solid var(--border-color);
        }

        .btn-primary:hover, .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Gallery */
        .gallery-filters {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.5rem 1.25rem;
            border-radius: var(--radius-full);
            border: 2px solid var(--border-color);
            background: transparent;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .gallery-item {
            background: var(--background);
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .gallery-item.hidden {
            display: none;
        }

        .gallery-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .gallery-img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            cursor: pointer;
        }

        .gallery-info {
            padding: 0.75rem;
        }

        .gallery-title {
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: var(--text-primary);
        }

        .gallery-price {
            font-size: 0.875rem;
            font-weight: 700;
            color: var(--success-color);
            margin-bottom: 0.75rem;
        }

        .gallery-price del {
            color: var(--text-light);
            margin-right: 0.5rem;
        }

        .product-actions {
            display: flex;
            gap: 0.5rem;
        }

        .product-btn {
            flex: 1;
            padding: 0.5rem 0.75rem;
            border-radius: var(--radius-md);
            border: none;
            cursor: pointer;
            font-size: 0.75rem;
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
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            display: block;
            width: 100%;
        }

        .product-btn:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        /* Social Media */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .social-link {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 1.25rem;
            color: white;
        }

        .social-link:hover {
            transform: translateY(-4px) rotate(5deg);
            box-shadow: var(--shadow-md);
        }

        /* Payment Methods */
        .payment-item {
            background: var(--background);
            padding: 1.25rem;
            border-radius: var(--radius-lg);
            margin-bottom: 1rem;
            border: 1px solid var(--border-color);
        }

        .payment-header {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .payment-detail {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .payment-detail:last-child {
            border-bottom: none;
        }

        .payment-label {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .payment-value {
            font-weight: 500;
            color: var(--text-primary);
        }

        .qr-image {
            width: 180px;
            height: 180px;
            margin: 1rem auto;
            display: block;
            border-radius: var(--radius-lg);
            border: 1px solid var(--border-color);
            padding: 0.5rem;
            background: white;
        }

        /* Feedback Section */
        .feedback-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            font-size: 2rem;
            cursor: pointer;
        }

        .star {
            color: var(--text-light);
            transition: all 0.3s ease;
        }

        .star:hover, .star.active {
            color: #fbbf24;
        }

        /* Video Section */
        .video-item {
            margin-bottom: 1.5rem;
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        .video-item iframe {
            width: 100%;
            height: 200px;
            border: none;
        }

        .video-title {
            padding: 1rem;
            background: var(--background);
            text-align: center;
            font-weight: 600;
            font-size: 0.875rem;
        }

        /* Enquiry Form */
        .map-container {
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-bottom: 1.5rem;
            height: 250px;
            border: 1px solid var(--border-color);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: var(--radius-lg);
            font-family: 'Inter', sans-serif;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            background: white;
            color: var(--text-primary);
        }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-textarea {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.875rem 1.5rem;
            border-radius: var(--radius-lg);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1rem;
        }

        .submit-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Footer Navigation */
        .footer-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--surface);
            padding: 0.75rem 0;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.08);
            z-index: 1000;
            border-top: 1px solid var(--border-color);
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
            gap: 0.25rem;
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.75rem;
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: var(--radius-md);
        }

        .footer-item.active, .footer-item:hover {
            color: var(--primary-color);
            background: rgba(37, 99, 235, 0.1);
        }

        .footer-item i {
            font-size: 1.25rem;
        }

        .content-wrapper {
            padding-bottom: 80px;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(8px);
            align-items: center;
            justify-content: center;
            z-index: 9999;
            padding: 1rem;
        }

        .modal.active {
            display: flex;
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background: var(--surface);
            border-radius: var(--radius-xl);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: var(--shadow-xl);
            animation: modalSlideUp 0.3s ease;
        }

        @keyframes modalSlideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-secondary);
            cursor: pointer;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: var(--radius-full);
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background: var(--background);
            color: var(--text-primary);
        }

        /* About Section */
        .about-content {
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        /* Whatsapp Input */
        .whatsapp-input-group {
            display: flex;
            gap: 0.75rem;
            margin: 1rem 0;
        }

        .whatsapp-input-group input {
            flex: 1;
            padding: 0.875rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: var(--radius-lg);
            font-size: 0.875rem;
            background: white;
            color: var(--text-primary);
        }

        .whatsapp-input-group button {
            padding: 0.875rem 1.5rem;
            background: var(--success-color);
            border: none;
            border-radius: var(--radius-lg);
            color: white;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .whatsapp-input-group button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            background: #0da65c;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                border-radius: 0;
            }
            
            .professional-header {
                padding: 2rem 1rem 1.5rem;
            }
            
            .card, .share-section {
                margin: 0 1rem 1rem;
                padding: 1.25rem;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            
            .quick-actions {
                padding: 1rem;
            }
        }

        /* Animation */
        .fade-in {
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Utility Classes */
        .text-center {
            text-align: center;
        }
        
        .mb-3 {
            margin-bottom: 0.75rem;
        }
        
        .mt-4 {
            margin-top: 1rem;
        }
        
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .star-filled {
            color: #ffc107;
        }

        .star-empty {
            color: #d6d6d6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <!-- Professional Header -->
            <div class="professional-header">
                @if($userConfigObj->isShowNoOfVisit == '1')
                <div class="views-badge">
                    <i class="fas fa-eye"></i> {{$userObj->no_visit}} Views
                </div>
                @endif

                <div class="header-content">
                    <div class="profile-container">
                        <div class="profile-pic-wrapper">
                            @if(!empty($companyInfoData->company_logo))
                            <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="profile-pic" alt="Logo">
                            @elseif(!empty($userObj->profile_pic))
                            <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="profile-pic" alt="Logo">
                            @endif
                            <div class="verified-badge">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="profile-info">
                            @if (!empty($companyInfoData->company_name))
                            <h1 class="company-name">{!! $companyInfoData->company_name !!}</h1>
                            @if (!empty($companyInfoData->gst_number))
                            <div style="font-size: 0.75rem; color: rgba(255,255,255,0.8); margin-bottom: 0.5rem;">
                                GST No: {!! $companyInfoData->gst_number !!}
                            </div>
                            @endif
                            <div class="user-name">{!! $userObj->name !!}</div>
                            @else
                            <h1 class="company-name">{!! $userObj->name !!}</h1>
                            @endif

                            @if(!empty($companyInfoData->company_profession))
                            <div class="profession">{!! $companyInfoData->company_profession !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
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
            <div class="card fade-in" id="home-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-address-card"></i>
                        Contact Information
                    </h2>
                </div>

                <div class="contact-list">
                    <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Mobile</div>
                            <div class="contact-value">{{$companyInfoData->country_code}} {{$companyInfoData->company_mobile}}</div>
                            @if(!empty($companyInfoData->country_landline))
                            <div class="contact-value">{{$companyInfoData->country_landline}}</div>
                            @endif
                        </div>
                    </a>

                    @if(!empty($companyInfoData->company_website))
                    <a href="{{$companyInfoData->company_website}}" target="_blank" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Website</div>
                            <div class="contact-value">{{$companyInfoData->company_website}}</div>
                        </div>
                    </a>
                    @endif

                    <a href="mailto:{{$userObj->email}}" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Email</div>
                            <div class="contact-value">{{$userObj->email}}</div>
                        </div>
                    </a>

                    @if (!empty($companyInfoData->company_address))
                    <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}" target="_blank" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Address</div>
                            <div class="contact-value">{!! $companyInfoData->company_address !!}</div>
                        </div>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Share My Card Section -->
            <div class="share-section fade-in">
                <div class="share-header">
                    <h3 class="share-title">Share My Card</h3>
                    <p class="share-subtitle">Enter a WhatsApp number to share your digital card</p>
                </div>

                <input type="hidden" id="whatsapp-msg" value="{{ url('vc') }}/{{ $userObj->slug }}">

                <div class="whatsapp-input-group">
                    <input 
                        type="tel"
                        id="whatsapp-input"
                        class="form-input"
                        placeholder="Enter WhatsApp number"
                        maxlength="10"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                    >
                    <button type="button" onclick="handleWhatsappShare()">
                        <i class="fab fa-whatsapp"></i> Send
                    </button>
                </div>

                <div class="share-actions">
                    <a href="{{ url('saveViewCard') }}/{{ $userObj->slug }}" 
                       download="contact.vcf" 
                       class="share-btn share-btn-primary">
                        <i class="fas fa-download"></i>
                        Save Contact
                    </a>
                    <button onclick="openShareModal()" class="share-btn share-btn-outline">
                        <i class="fas fa-share-alt"></i>
                        Share Card
                    </button>
                </div>
            </div>

            @if (count($socialMediaData) > 0)
            <!-- Social Media -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-share-alt"></i>
                        Connect With Me
                    </h2>
                </div>
                <div class="social-links">
                    @foreach($socialMediaData as $socialMediaDetail)
                        @if ($socialMediaDetail->type == 'fb')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #1877f2;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'in')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                            <i class="fab fa-instagram"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'li')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #0077b5;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'tw')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #1da1f2;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'pi')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #bd081c;">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'yt')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #ff0000;">
                            <i class="fab fa-youtube"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'tg')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #0088cc;">
                            <i class="fab fa-telegram"></i>
                        </a>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif

            <!-- QR Code -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-qrcode"></i>
                        Scan QR Code
                    </h2>
                </div>
                <p style="color: var(--text-secondary); text-align: center; margin-bottom: 1rem;">
                    Share your digital card instantly
                </p>
                <div class="qr-wrapper">
                    {!! QrCode::size(180)->generate($vistingUrl) !!}
                </div>
                <input type="text" readonly id="visitingUrlText" value="{{$vistingUrl}}" class="form-input mb-3" style="margin-top: 1rem;">
                <div class="qr-actions">
                    <button class="qr-btn btn-primary" onclick="copyUrlSecond()">
                        <i class="fas fa-copy"></i>
                        Copy URL
                    </button>
                    <a href="{{url('downloadQrCode')}}/{{$userObj->slug}}" class="qr-btn btn-secondary">
                        <i class="fas fa-download"></i>
                        Download QR
                    </a>
                </div>
            </div>

            <!-- About -->
            <div class="card fade-in" id="about-us-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-building"></i>
                        {{$userConfigObj->aboutLabel}}
                    </h2>
                </div>
                <div class="about-content">
                    {!! $companyInfoData->company_info !!}
                </div>
                @if(!empty($companyInfoData->broucher_file))
                <a href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download class="share-btn share-btn-primary" style="width: 100%; margin-top: 1rem;">
                    <i class="fas fa-file-pdf"></i>
                    Download Brochure - @if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif
                </a>
                @endif
            </div>

            @if($galleryData->count() > 0)
            <!-- Products/Gallery -->
            <div class="card fade-in" id="products-services-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-box-open"></i>
                        {{$userConfigObj->galleryLabel}}
                    </h2>
                </div>

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
                             description="{{$galleryDetail->description}}"
                             class="gallery-img">
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
                                    $link="https://api.whatsapp.com/send?phone=".str_replace('+','',$companyInfoData->country_code).$companyInfoData->company_mobile."&text=Enquiry for product:".urlencode($galleryDetail->title);
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
            <div class="card fade-in" id="video-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-video"></i>
                        Videos
                    </h2>
                </div>
                @foreach($videosData as $videosDetail)
                <div class="video-item">
                    <iframe src="{{$videosDetail->video_path}}" 
                            title="{{$videosDetail->title}}" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <div class="video-title">{{$videosDetail->title}}</div>
                </div>
                @endforeach
            </div>
            @endif

            @if(count($paymentMasterData) > 0)
            <!-- Payment Options -->
            <div class="card fade-in" id="payment-options-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-credit-card"></i>
                        Payment Options
                    </h2>
                </div>
                
                @foreach($paymentMasterData as $paymentMasterDetail)
                    @if ($paymentMasterDetail->type == 'bank')
                    <div class="payment-item">
                        <h3 class="payment-header">Bank Details</h3>
                        <div class="payment-detail">
                            <span class="payment-label">Bank Name:</span>
                            <span class="payment-value">{{$paymentMasterDetail->bank_name}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Account Holder:</span>
                            <span class="payment-value">{{$paymentMasterDetail->account_holder_name}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Account Number:</span>
                            <span class="payment-value">{{$paymentMasterDetail->account_no}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Account Type:</span>
                            <span class="payment-value">{{ucwords($paymentMasterDetail->account_type)}} Account</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">IFSC Code:</span>
                            <span class="payment-value">{{$paymentMasterDetail->ifsc_code}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Branch Name:</span>
                            <span class="payment-value">{{$paymentMasterDetail->branch_name}}</span>
                        </div>
                    </div>
                    @else
                    <div class="payment-item">
                        <h3 class="payment-header">UPI Details</h3>
                        <div class="payment-detail">
                            <span class="payment-label">{{ucwords($paymentMasterDetail->type)}} Number:</span>
                            <span class="payment-value">{{$paymentMasterDetail->account_no}}</span>
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
            <div class="card fade-in" id="feedback-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-star"></i>
                        Feedbacks
                    </h2>
                </div>
                @include('visitingCard.bussinessCard.include.feedbackV2')
            </div>

            @if($userConfigObj->isShowEnquiry == '1')
            <!-- Enquiry Form -->
            <div class="card fade-in" id="enquiry-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-comment-alt"></i>
                        Enquiry Form
                    </h2>
                </div>

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

                    <button type="submit" id="inquiry-send" class="submit-btn">
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
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Product Image</h3>
                <button class="modal-close" onclick="closeImageModal()">&times;</button>
            </div>
            <img id="img01" alt="Product Image" style="width: 100%; border-radius: var(--radius-lg);">
            <div id="caption" style="text-align: center; margin: 1rem 0; font-weight: 600;"></div>
            <div id="description" style="text-align: center; color: var(--text-secondary);"></div>
        </div>
    </div>

    <!-- Share Modal -->
    <div id="shareModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Share Profile</h3>
                <button class="modal-close" onclick="closeShareModal()">&times;</button>
            </div>
            <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">Share my Digital Card in your network.</p>
            
            <div class="social-links" style="margin-top: 1rem;">
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
                   class="social-link" 
                   style="background: #1877f2;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?text={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #1da1f2;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://pinterest.com/pin/create/link/?url={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #bd081c;">
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

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.card').forEach(card => {
                observer.observe(card);
            });
        });

        // Star Rating
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