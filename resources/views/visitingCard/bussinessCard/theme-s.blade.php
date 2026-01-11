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

        .header-stats {
            display: flex;
            justify-content: space-between;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 0.75rem 1rem;
            border-radius: var(--radius-lg);
            margin-top: 1rem;
        }

        .stat-item {
            text-align: center;
            color: white;
        }

        .stat-number {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.75rem;
            opacity: 0.9;
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
            justify-content: space-between;
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
        .qr-section {
            text-align: center;
        }

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
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 1rem;
        }

        .gallery-item {
            background: var(--background);
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .gallery-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .gallery-img {
            width: 100%;
            height: 140px;
            object-fit: cover;
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
        }

        .gallery-price del {
            color: var(--text-light);
            margin-right: 0.5rem;
        }

        /* Social Media */
        .social-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            border-radius: var(--radius-lg);
            color: white;
            font-size: 1.25rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-link:hover {
            transform: translateY(-4px) rotate(5deg);
            box-shadow: var(--shadow-md);
        }

        /* Payment Methods */
        .payment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .payment-card {
            background: var(--background);
            padding: 1rem;
            border-radius: var(--radius-lg);
            border: 1px solid var(--border-color);
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

        /* Form Elements */
        .form-group {
            margin-bottom: 1rem;
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

        /* Rating */
        .rating-container {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .rating-stars {
            display: flex;
            gap: 0.25rem;
        }

        .star {
            color: var(--text-light);
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .star.active, .star:hover {
            color: #fbbf24;
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
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Status Indicators */
        .status-indicator {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-full);
            font-size: 0.75rem;
            font-weight: 500;
        }

        .status-online {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .status-offline {
            background: rgba(239, 68, 68, 0.1);
            color: var(--error-color);
        }

        /* Badges */
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-full);
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-primary {
            background: rgba(37, 99, 235, 0.1);
            color: var(--primary-color);
        }

        .badge-success {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .badge-warning {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
        }

        /* Animations */
        .fade-in {
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(37, 99, 235, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0); }
        }

        /* Loading States */
        .loading {
            position: relative;
            overflow: hidden;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <!-- Professional Header -->
            <div class="professional-header">
                <div class="header-content">
                    @if($userConfigObj->isShowNoOfVisit == '1')
                    <div class="status-indicator status-online" style="position: absolute; top: 1rem; right: 1rem;">
                        <i class="fas fa-eye"></i>
                        <span>{{$userObj->no_visit}} views</span>
                    </div>
                    @endif

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
                            <div class="user-name">{!! $userObj->name !!}</div>
                            @else
                            <h1 class="company-name">{!! $userObj->name !!}</h1>
                            @endif

                            @if(!empty($companyInfoData->company_profession))
                            <div class="profession">{!! $companyInfoData->company_profession !!}</div>
                            @endif
                        </div>
                    </div>

                    @if(!empty($companyInfoData->gst_number))
                    <div class="header-stats">
                        <div class="stat-item">
                            <div class="stat-number">GST</div>
                            <div class="stat-label">{!! $companyInfoData->gst_number !!}</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">EST.</div>
                            <div class="stat-label">2023</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4.8</div>
                            <div class="stat-label">Rating</div>
                        </div>
                    </div>
                    @endif
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

            <!-- Share Section -->
            <div class="share-section fade-in">
                <div class="share-header">
                    <h3 class="share-title">Share Digital Card</h3>
                    <p class="share-subtitle">Share your professional card with contacts</p>
                </div>

                <div class="form-group">
                    <input type="tel" 
                           id="whatsapp-input" 
                           class="form-input" 
                           placeholder="Enter WhatsApp number"
                           maxlength="10"
                           oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                </div>

                <div class="share-actions">
                    <button class="share-btn share-btn-primary" onclick="handleWhatsappShare()">
                        <i class="fab fa-whatsapp"></i>
                        Send via WhatsApp
                    </button>
                    <a href="{{ url('saveViewCard') }}/{{ $userObj->slug }}" 
                       download="contact.vcf" 
                       class="share-btn share-btn-outline">
                        <i class="fas fa-download"></i>
                        Save Contact
                    </a>
                </div>
            </div>

            @if (count($socialMediaData) > 0)
            <!-- Social Media -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-share-alt"></i>
                        Connect With Us
                    </h2>
                </div>
                <div class="social-grid">
                    @foreach($socialMediaData as $socialMediaDetail)
                        @php
                            $socialClass = '';
                            $socialIcon = '';
                            if ($socialMediaDetail->type == 'fb') {
                                $socialClass = 'social-facebook';
                                $socialIcon = 'fab fa-facebook-f';
                            } elseif($socialMediaDetail->type == 'in') {
                                $socialClass = 'social-instagram';
                                $socialIcon = 'fab fa-instagram';
                            } elseif($socialMediaDetail->type == 'li') {
                                $socialClass = 'social-linkedin';
                                $socialIcon = 'fab fa-linkedin-in';
                            } elseif($socialMediaDetail->type == 'tw') {
                                $socialClass = 'social-twitter';
                                $socialIcon = 'fab fa-twitter';
                            } elseif($socialMediaDetail->type == 'pi') {
                                $socialClass = 'social-pinterest';
                                $socialIcon = 'fab fa-pinterest-p';
                            } elseif($socialMediaDetail->type == 'yt') {
                                $socialClass = 'social-youtube';
                                $socialIcon = 'fab fa-youtube';
                            } elseif($socialMediaDetail->type == 'tg') {
                                $socialClass = 'social-telegram';
                                $socialIcon = 'fab fa-telegram';
                            }
                        @endphp
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link {{$socialClass}}">
                            <i class="{{$socialIcon}}"></i>
                        </a>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- QR Code -->
            <div class="card qr-section fade-in">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-qrcode"></i>
                        Scan QR Code
                    </h2>
                </div>
                <p style="color: var(--text-secondary); text-align: center; margin-bottom: 1rem;">
                    Scan to save this digital card instantly
                </p>
                <div class="qr-wrapper">
                    {!! QrCode::size(180)->generate($vistingUrl) !!}
                </div>
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
                <p style="color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.5rem;">
                    {!! $companyInfoData->company_info !!}
                </p>
                @if(!empty($companyInfoData->broucher_file))
                <a href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download class="share-btn share-btn-primary" style="width: 100%;">
                    <i class="fas fa-file-pdf"></i>
                    Download Company Brochure
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

                <div class="gallery-grid">
                    @foreach($galleryData as $galleryDetail)
                    <div class="gallery-item">
                        <img src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" 
                             alt="{{$galleryDetail->title}}" 
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
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Rest of your content sections (videos, payment, feedback, enquiry) -->
            <!-- Follow the same card pattern as above -->

        </div>

        <!-- Footer Navigation -->
        <div class="footer-nav">
            <ul class="footer-menu">
                <li>
                    <a class="footer-item active" href="#home-section">
                        <i class="fas fa-home"></i>
                        <span>HOME</span>
                    </a>
                </li>
                <li>
                    <a class="footer-item" href="#about-us-section">
                        <i class="fas fa-building"></i>
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

    <!-- Modals and Scripts -->
    <!-- Keep your existing modals and scripts, just update the IDs and classes to match the new theme -->

    <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
    <script>
        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Update active nav item
                    document.querySelectorAll('.footer-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });

        // Handle WhatsApp share
        function handleWhatsappShare() {
            const phoneNumber = document.getElementById('whatsapp-input').value;
            const message = encodeURIComponent("{{ url('vc') }}/{{ $userObj->slug }}");
            
            if (phoneNumber && phoneNumber.length === 10) {
                const url = `https://api.whatsapp.com/send?phone=91${phoneNumber}&text=${message}`;
                window.open(url, '_blank');
            } else {
                alert('Please enter a valid 10-digit phone number');
            }
        }

        // Copy URL function
        function copyUrlSecond() {
            const textToCopy = "{{$vistingUrl}}";
            navigator.clipboard.writeText(textToCopy).then(() => {
                alert('URL copied to clipboard!');
            });
        }

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
    </script>
</body>
</html>