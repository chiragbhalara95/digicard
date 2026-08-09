@extends('frontView.layouts.app')

@section('custom_style')
<link href="{{ asset('public/frontView/minify/css/custom.min.css') }}?v={{date('YmdHis')}}" rel="stylesheet">
<style>
    /* ===== Global Styles ===== */
    :root {
        --primary-color: #2563eb;
        --primary-dark: #1e40af;
        --primary-light: #3b82f6;
        --secondary-color: #8b5cf6;
        --accent-color: #ec4899;
        --dark-color: #0f172a;
        --dark-light: #1e293b;
        --text-primary: #1e293b;
        --text-secondary: #64748b;
        --text-light: #94a3b8;
        --background: #f8fafc;
        --surface: #ffffff;
        --border: #e2e8f0;
        --success: #10b981;
        --warning: #f59e0b;
        --error: #ef4444;
        --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        --gradient-light: linear-gradient(135deg, var(--primary-light), #f472b6);
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
        color: var(--text-primary);
        line-height: 1.6;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        line-height: 1.2;
    }

    /* ===== Hero Section ===== */
    .hero-section {
        position: relative;
        padding: 8rem 0 6rem;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: white;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(99, 102, 241, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
        animation: pulse 4s ease-in-out infinite alternate;
    }

    @keyframes pulse {
        0% { opacity: 0.5; }
        100% { opacity: 1; }
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        background: linear-gradient(to right, #ffffff, #a5b4fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .hero-cta {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn-primary-large {
        background: var(--gradient);
        color: white;
        padding: 1rem 2.5rem;
        border-radius: var(--radius-full);
        font-weight: 600;
        font-size: 1.125rem;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        box-shadow: var(--shadow-lg);
    }

    .btn-primary-large:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-xl);
        color: white;
    }

    .btn-outline-light {
        background: transparent;
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: 1rem 2.5rem;
        border-radius: var(--radius-full);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
        color: white;
    }

    .card-preview {
        position: relative;
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .card-3d {
        background: white;
        border-radius: var(--radius-xl);
        padding: 2.5rem;
        box-shadow: var(--shadow-xl);
        animation: float 6s ease-in-out infinite;
        transform: rotateY(-15deg);
        border: 1px solid var(--border);
    }

    @keyframes float {
        0%, 100% { transform: rotateY(-15deg) translateY(0); }
        50% { transform: rotateY(-15deg) translateY(-20px); }
    }

    .card-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .card-avatar {
        width: 80px;
        height: 80px;
        background: var(--gradient);
        border-radius: var(--radius-full);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        font-weight: 600;
    }

    .card-info h3 {
        font-size: 1.5rem;
        margin-bottom: 0.25rem;
        color: var(--text-primary);
    }

    .card-info p {
        color: var(--text-secondary);
        margin-bottom: 0.5rem;
    }

    .qr-badge {
        background: var(--background);
        padding: 0.5rem 1rem;
        border-radius: var(--radius-full);
        font-size: 0.875rem;
        color: var(--primary-color);
        font-weight: 500;
    }

    .card-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid var(--border);
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 0.25rem;
    }

    .stat-label {
        font-size: 0.75rem;
        color: var(--text-secondary);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* ===== About Section ===== */
    .section-padding {
        padding: 6rem 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .section-subtitle {
        font-size: 1.125rem;
        color: var(--text-secondary);
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .feature-card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius-xl);
        padding: 2rem;
        transition: all 0.3s ease;
        text-align: left;
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-xl);
        border-color: var(--primary-color);
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        background: var(--gradient);
        border-radius: var(--radius-lg);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: white;
        font-size: 1.5rem;
    }

    .feature-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        color: var(--text-primary);
    }

    .feature-desc {
        color: var(--text-secondary);
        line-height: 1.6;
    }

    .stats-showcase {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        margin-top: 4rem;
    }

    .stat-card {
        text-align: center;
        padding: 2rem;
        background: var(--surface);
        border-radius: var(--radius-xl);
        border: 1px solid var(--border);
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }

    .stat-number-large {
        font-size: 3rem;
        font-weight: 800;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
    }

    .stat-text {
        font-size: 1rem;
        color: var(--text-secondary);
        font-weight: 500;
    }

    /* ===== Products Section ===== */
    .products-section {
        background: var(--background);
    }

    .pricing-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .pricing-card {
        background: var(--surface);
        border: 2px solid var(--border);
        border-radius: var(--radius-xl);
        padding: 2.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
        border-color: var(--primary-color);
    }

    .pricing-card.popular {
        border-color: var(--primary-color);
        box-shadow: var(--shadow-lg);
    }

    .popular-badge {
        position: absolute;
        top: 0;
        right: 2rem;
        background: var(--gradient);
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 0 0 var(--radius-md) var(--radius-md);
        font-size: 0.875rem;
        font-weight: 600;
    }

    .pricing-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .pricing-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .pricing-price {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 0.5rem;
    }

    .pricing-period {
        color: var(--text-secondary);
        font-size: 0.875rem;
    }

    .pricing-features {
        list-style: none;
        padding: 0;
        margin-bottom: 2rem;
        margin-left:2rem;
    }

    .pricing-features li {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        color: var(--text-secondary);
    }

    .pricing-features li i {
        color: var(--success);
        font-size: 0.875rem;
    }

    .btn-pricing {
        display: block;
        width: 100%;
        padding: 1rem;
        background: var(--gradient);
        color: white;
        border: none;
        border-radius: var(--radius-lg);
        font-weight: 600;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-pricing:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
        color: white;
    }

    .btn-pricing.outline {
        background: transparent;
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
    }

    .btn-pricing.outline:hover {
        background: var(--primary-color);
        color: white;
    }

    /* ===== Features Section ===== */
    .features-section {
        background: var(--surface);
    }

    .feature-showcase {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .feature-item {
        text-align: center;
        padding: 2rem;
        background: var(--background);
        border-radius: var(--radius-xl);
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }

    .feature-icon-large {
        font-size: 3rem;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
    }

    .feature-item-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        color: var(--text-primary);
    }

    .feature-item-desc {
        color: var(--text-secondary);
        line-height: 1.6;
    }

    /* ===== Contact Section ===== */
    .contact-section {
        background: var(--dark-color);
        color: white;
    }

    .contact-section .section-title {
        color: white;
    }

    .contact-section .section-subtitle {
        color: rgba(255, 255, 255, 0.8);
    }

    .contact-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-bottom: 3rem;
    }

    .contact-info-item {
        background: rgba(255, 255, 255, 0.05);
        padding: 1.5rem;
        border-radius: var(--radius-lg);
        text-align: center;
        transition: all 0.3s ease;
    }

    .contact-info-item:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-5px);
    }

    .contact-info-item i {
        font-size: 2rem;
        color: var(--primary-light);
        margin-bottom: 1rem;
    }

    .contact-info-item p {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 0;
    }

    .contact-form-container {
        background: var(--dark-light);
        padding: 3rem;
        border-radius: var(--radius-xl);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-control {
        width: 100%;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--radius-lg);
        color: white;
        font-family: inherit;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-light);
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .captcha-container {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .captcha-image {
        background: white;
        padding: 0.5rem;
        border-radius: var(--radius-md);
        border: 1px solid var(--border);
    }

    .btn-refresh {
        background: var(--warning);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: var(--radius-lg);
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-refresh:hover {
        background: #d97706;
    }

    .btn-submit {
        width: 100%;
        padding: 1rem;
        background: var(--gradient);
        color: white;
        border: none;
        border-radius: var(--radius-lg);
        font-size: 1.125rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    /* ===== Responsive Design ===== */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.75rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .section-padding {
            padding: 4rem 0;
        }
        
        .card-3d {
            transform: none;
            animation: float 6s ease-in-out infinite;
        }
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.25rem;
        }
        
        .hero-cta {
            flex-direction: column;
        }
        
        .hero-cta .btn {
            width: 100%;
            text-align: center;
        }
        
        .contact-form-container {
            padding: 2rem;
        }
        
        .card-stats {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* Professional Beside-style home page refinement. */
    :root {
        --primary-color: #0e0e10;
        --primary-dark: #000000;
        --primary-light: #3191ff;
        --secondary-color: #3191ff;
        --accent-color: #3191ff;
        --dark-color: #0e0e10;
        --dark-light: #292524;
        --text-primary: #0e0e10;
        --text-secondary: #78716c;
        --text-light: #a8a29e;
        --background: #fafafa;
        --surface: #ffffff;
        --border: rgba(14, 14, 16, 0.08);
        --success: #3191ff;
        --warning: #3191ff;
        --gradient: #0e0e10;
        --gradient-light: #f5f5f4;
    }

    .hero-section {
        min-height: min(720px, calc(100vh - 76px));
        padding: 6rem 0;
        background: #ffffff;
        background-image: radial-gradient(rgba(14, 14, 16, 0.12) 0.8px, transparent 0.8px);
        background-size: 18px 18px;
        color: var(--text-primary);
    }
    .hero-section::before { background: linear-gradient(90deg, #fff 0%, rgba(255,255,255,.86) 55%, rgba(255,255,255,.20) 100%); animation: none; }
    .hero-title { color: var(--text-primary); font-size: clamp(2.75rem, 5.2vw, 4.5rem); line-height: 1.08; letter-spacing: -0.045em; }
    .hero-subtitle { color: var(--text-secondary); font-size: 1.125rem; }
    .btn-primary-large, .btn-pricing, .btn-submit { background: #0e0e10; color: #fafafa; border-color: #0e0e10; box-shadow: none; }
    .btn-primary-large:hover, .btn-pricing:hover, .btn-submit:hover { background: #292524; color: #fff; box-shadow: none; }
    .btn-outline-light { background: #fff; color: var(--text-primary); border-color: #dfdcd9; }
    .btn-outline-light:hover { background: #f5f5f4; border-color: #dfdcd9; color: var(--text-primary); }
    .card-3d, .feature-card, .pricing-card, .stat-card, .seo-content, .contact-form-container { background: #fff; border-color: var(--border); border-radius: 1.25rem; box-shadow: 0 2px 12px rgba(14,14,16,.05); }
    .card-3d { transform: none; }
    @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
    .card-avatar, .feature-icon, .popular-badge, .profession-badge { background: #eff6ff; color: #1d4ed8; }
    .section-title { font-size: clamp(2rem, 4vw, 3.25rem); letter-spacing: -0.04em; }
    .products-section, .features-section { background: #fafafa; }
    .feature-card:hover, .pricing-card:hover, .stat-card:hover { border-color: rgba(14,14,16,.16); transform: translateY(-4px); }
    .stat-number-large, .feature-icon-large, .pricing-price { background: none; -webkit-text-fill-color: currentColor; color: var(--text-primary); }
    .pricing-card.popular { border-color: #3191ff; }
    .contact-section { background: #0e0e10; }
    .contact-info-item { border-radius: 1rem; }
    .contact-form-container .form-control { background: #fff; border-color: #dfdcd9; }
    .contact-form-container .form-control:focus { border-color: #3191ff; box-shadow: 0 0 0 4px rgba(49,145,255,.12); }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.875rem;
        }
        
        .section-title {
            font-size: 1.75rem;
        }
        
        .features-grid,
        .pricing-cards,
        .feature-showcase {
            grid-template-columns: 1fr;
        }
        
        .contact-info-grid {
            grid-template-columns: 1fr;
        }
        
        .captcha-container {
            flex-direction: column;
            align-items: stretch;
        }
    }

    /* ===== SEO Optimized Content ===== */
    .seo-content {
        background: var(--background);
        border-radius: var(--radius-xl);
        padding: 3rem;
        margin-top: 4rem;
    }

    .seo-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: var(--text-primary);
    }

    .seo-text {
        color: var(--text-secondary);
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .seo-keywords {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1.5rem;
    }

    .keyword-tag {
        background: var(--surface);
        border: 1px solid var(--border);
        color: var(--primary-color);
        padding: 0.5rem 1rem;
        border-radius: var(--radius-full);
        font-size: 0.875rem;
        font-weight: 500;
    }

    /* ===== Besidee-Inspired Editorial Theme ===== */
    :root {
        --primary-color: #ff5a3d;
        --primary-dark: #d63d26;
        --primary-light: #ff8c73;
        --secondary-color: #c7f36b;
        --accent-color: #00a676;
        --dark-color: #171411;
        --dark-light: #2b261f;
        --text-primary: #171411;
        --text-secondary: #70685e;
        --text-light: #9d9286;
        --background: #f7f1e8;
        --surface: #fffaf1;
        --border: rgba(23, 20, 17, 0.12);
        --success: #00a676;
        --warning: #ffb85c;
        --gradient: linear-gradient(135deg, #ff5a3d 0%, #ffb85c 52%, #c7f36b 100%);
        --gradient-light: linear-gradient(135deg, #fff0cf 0%, #dff7e4 100%);
    }

    .hero-section {
        min-height: calc(100vh - 96px);
        padding: 7rem 0 5rem;
        background:
            linear-gradient(120deg, rgba(23, 20, 17, 0.78), rgba(23, 20, 17, 0.38)),
            url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1800&q=80') center/cover;
        color: var(--surface);
        display: flex;
        align-items: center;
    }

    .hero-section::before {
        background:
            linear-gradient(90deg, rgba(255, 250, 241, 0.12) 1px, transparent 1px),
            linear-gradient(rgba(255, 250, 241, 0.12) 1px, transparent 1px);
        background-size: 46px 46px;
        animation: none;
    }

    .hero-title {
        max-width: 760px;
        color: var(--surface);
        background: none;
        -webkit-text-fill-color: currentColor;
        font-size: clamp(2.75rem, 6vw, 5.75rem);
        line-height: 0.96;
        letter-spacing: 0;
    }

    .hero-subtitle {
        max-width: 620px;
        color: rgba(255, 250, 241, 0.84);
        font-size: 1.2rem;
    }

    .btn-primary-large,
    .btn-pricing,
    .btn-submit {
        background: var(--gradient);
        color: var(--text-primary);
        border: 1px solid rgba(23, 20, 17, 0.12);
        box-shadow: 0 12px 28px rgba(255, 90, 61, 0.24);
    }

    .btn-outline-light {
        background: rgba(255, 250, 241, 0.08);
        color: var(--surface);
        border-color: rgba(255, 250, 241, 0.58);
    }

    .card-3d,
    .feature-card,
    .pricing-card,
    .stat-card,
    .seo-content,
    .contact-form-container {
        background: rgba(255, 250, 241, 0.94);
        border: 1px solid var(--border);
        border-radius: 8px;
        box-shadow: 0 20px 52px rgba(23, 20, 17, 0.12);
    }

    .card-3d {
        transform: rotate(-3deg);
        color: var(--text-primary);
    }

    @keyframes float {
        0%, 100% { transform: rotate(-3deg) translateY(0); }
        50% { transform: rotate(-3deg) translateY(-16px); }
    }

    .card-avatar,
    .feature-icon,
    .popular-badge,
    .profession-badge {
        background: var(--gradient);
        color: var(--text-primary);
    }

    .section-title {
        color: var(--text-primary);
        font-size: clamp(2rem, 4vw, 4rem);
    }

    .section-padding {
        background: transparent;
    }

    .products-section,
    .features-section {
        background: rgba(255, 250, 241, 0.58);
    }

    .feature-card:hover,
    .pricing-card:hover,
    .stat-card:hover {
        border-color: rgba(255, 90, 61, 0.45);
        transform: translateY(-8px) rotate(-1deg);
    }

    .stat-number-large,
    .feature-icon-large,
    .pricing-price {
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .pricing-card.popular {
        border-color: var(--primary-color);
    }

    .contact-section {
        background: #171411;
    }

    .contact-info-item {
        background: rgba(255, 250, 241, 0.08);
        border: 1px solid rgba(255, 250, 241, 0.12);
        border-radius: 8px;
    }

    .form-control {
        background: rgba(255, 250, 241, 0.08);
        border-color: rgba(255, 250, 241, 0.16);
    }

    .contact-form-container .form-control {
        background: #fffaf1;
        border: 1px solid rgba(23, 20, 17, 0.16);
        color: var(--text-primary);
        caret-color: var(--primary-color);
    }

    .contact-form-container .form-control:focus {
        background: #ffffff;
        border-color: var(--primary-color);
        color: var(--text-primary);
        box-shadow: 0 0 0 4px rgba(255, 90, 61, 0.14);
    }

    .contact-form-container .form-control::placeholder {
        color: rgba(23, 20, 17, 0.48);
        opacity: 1;
    }

    .contact-form-container select.form-control {
        color: var(--text-primary);
    }

    .contact-form-container select.form-control option {
        background: #fffaf1;
        color: var(--text-primary);
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: auto;
            padding: 5rem 0 4rem;
        }

        .hero-title {
            font-size: 2.75rem;
        }
    }

    /* Keep these rules last so they supersede the older editorial colour overrides above. */
    :root { --primary-color:#0e0e10; --primary-dark:#000; --primary-light:#3191ff; --secondary-color:#3191ff; --accent-color:#3191ff; --dark-color:#0e0e10; --dark-light:#292524; --text-primary:#0e0e10; --text-secondary:#78716c; --text-light:#a8a29e; --background:#fafafa; --surface:#fff; --border:rgba(14,14,16,.08); --success:#3191ff; --warning:#3191ff; --gradient:#0e0e10; --gradient-light:#f5f5f4; }
    .hero-section { min-height:min(720px,calc(100vh - 76px)); padding:6rem 0; background-color:#fff; background-image:radial-gradient(rgba(14,14,16,.12) .8px,transparent .8px); background-size:18px 18px; color:var(--text-primary); }
    .hero-section::before { background:linear-gradient(90deg,#fff 0%,rgba(255,255,255,.86) 55%,rgba(255,255,255,.2) 100%); animation:none; }
    .hero-title { color:var(--text-primary); font-size:clamp(2.75rem,5.2vw,4.5rem); line-height:1.08; letter-spacing:-.045em; }
    .hero-subtitle { color:var(--text-secondary); font-size:1.125rem; }
    .btn-primary-large,.btn-pricing,.btn-submit { background:#0e0e10; color:#fafafa; border-color:#0e0e10; box-shadow:none; }
    .btn-primary-large:hover,.btn-pricing:hover,.btn-submit:hover { background:#292524; color:#fff; box-shadow:none; }
    .btn-outline-light { background:#fff; color:var(--text-primary); border-color:#dfdcd9; }
    .btn-outline-light:hover { background:#f5f5f4; border-color:#dfdcd9; color:var(--text-primary); }
    .card-3d,.feature-card,.pricing-card,.stat-card,.seo-content,.contact-form-container { background:#fff; border-color:var(--border); border-radius:1.25rem; box-shadow:0 2px 12px rgba(14,14,16,.05); }
    .card-3d { transform:none; }
    .card-avatar,.feature-icon,.popular-badge,.profession-badge { background:#eff6ff; color:#1d4ed8; }
    .section-title { font-size:clamp(2rem,4vw,3.25rem); letter-spacing:-.04em; }
    .products-section,.features-section { background:#fafafa; }
    .feature-card:hover,.pricing-card:hover,.stat-card:hover { border-color:rgba(14,14,16,.16); transform:translateY(-4px); }
    .stat-number-large,.feature-icon-large,.pricing-price { background:none; -webkit-text-fill-color:currentColor; color:var(--text-primary); }
    .pricing-card.popular { border-color:#3191ff; }
    .contact-section { background:#0e0e10; }
    .contact-info-item { border-radius:1rem; }
    .contact-form-container .form-control { background:#fff; border-color:#dfdcd9; }
    .contact-form-container .form-control:focus { border-color:#3191ff; box-shadow:0 0 0 4px rgba(49,145,255,.12); }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">AI-Powered Digital Business Cards That Drive Results</h1>
                <p class="hero-subtitle">Transform traditional networking with smart, shareable digital cards. Create, customize, and share your professional identity in minutes.</p>
                
                <div class="hero-cta">
                    <a href="#products" class="btn-primary-large">Start Free Trial</a>
                    <a href="#features" class="btn-outline-light">View Features</a>
                </div>

                <div class="d-flex align-items-center gap-4 mt-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span class="text-white-50">No credit card required</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span class="text-white-50">14-day free trial</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card-preview">
                    <div class="card-3d">
                        <div class="card-header">
                            <div class="card-avatar">DC</div>
                            <div class="card-info">
                                <h3>DigitalCards Pro</h3>
                                <p>Premium Business Card</p>
                                <div class="qr-badge">QR Code Enabled</div>
                            </div>
                        </div>
                        
                        <div class="card-stats">
                            <div class="stat-item">
                                <div class="stat-number">24/7</div>
                                <div class="stat-label">Support</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">99.9%</div>
                                <div class="stat-label">Uptime</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">5M+</div>
                                <div class="stat-label">Cards</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Revolutionizing Business Networking</h2>
            <p class="section-subtitle">DigitalCards transforms traditional business cards into interactive, smart digital experiences that work harder for your business.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="feature-title">Mobile-First Design</h3>
                <p class="feature-desc">Responsive digital cards that look perfect on any device - smartphone, tablet, or desktop.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-qrcode"></i>
                </div>
                <h3 class="feature-title">QR & NFC Integration</h3>
                <p class="feature-desc">Share your contact instantly with scannable QR codes and tap-to-share NFC technology.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="feature-title">Smart Analytics</h3>
                <p class="feature-desc">Track views, shares, and engagement to measure your networking success.</p>
            </div>
        </div>

        <div class="stats-showcase mt-5">
            <div class="stat-card">
                <div class="stat-number-large">5,000+</div>
                <div class="stat-text">Businesses Trust Us</div>
            </div>
            <div class="stat-card">
                <div class="stat-number-large">24/7</div>
                <div class="stat-text">Customer Support</div>
            </div>
            <div class="stat-card">
                <div class="stat-number-large">99.9%</div>
                <div class="stat-text">Uptime Guarantee</div>
            </div>
            <div class="stat-card">
                <div class="stat-number-large">50+</div>
                <div class="stat-text">Countries Served</div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="section-padding products-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Flexible Plans for Every Business</h2>
            <p class="section-subtitle">Choose the perfect plan for your networking needs. All plans include our core features.</p>
        </div>

        @if(!empty($skuCustomPackage))
            @foreach($skuCustomPackage AS $productId => $skuCustomDetail)
            <div class="row g-4 sku-package-row" id="sku-package-row-{{$productId}}">
                @foreach($skuCustomDetail AS $detail)
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card {{ $detail['package_type_name'] == 'Premium' ? 'popular' : '' }}">
                        @if($detail['package_type_name'] == 'Premium')
                        <div class="popular-badge">Most Popular</div>
                        @endif
                        
                        <div class="pricing-header">
                            <h3 class="pricing-title">{{$detail['package_type_name']}}</h3>
                            <div class="pricing-price">?{{$detail['special_price']}}</div>
                            <div class="pricing-period">per month</div>
                        </div>

                        <ul class="pricing-features">
                            <li><i class="fas fa-check"></i> Unlimited Digital Cards</li>
                            <li><i class="fas fa-check"></i> QR Code Generation</li>
                            <li><i class="fas fa-check"></i> Basic Analytics</li>
                            <li><i class="fas fa-check"></i> Email Support</li>
                            <li><i class="fas fa-check"></i> Custom Domain</li>
                        </ul>

                        @if ($userCurrency == 'USD')
                        <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_LbNfvLjHouwTBp/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
                            <script>
                                (function(){
                                    var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
                                    if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
                                    s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
                                    rzp && rzp.init && rzp.init()}})();
                            </script>
                        </div>
                        @else
                        <a href="{{url('/register')}}" class="btn-pricing {{ $detail['package_type_name'] == 'Premium' ? '' : 'outline' }}">
                            Get Started
                        </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        @endif
    </div>
</section>

<!-- Features Section -->
<section id="features" class="section-padding features-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Powerful Features for Modern Networking</h2>
            <p class="section-subtitle">Everything you need to create, share, and manage professional digital business cards.</p>
        </div>

        <div class="feature-showcase">
            <div class="feature-item">
                <div class="feature-icon-large">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h4 class="feature-item-title">Easy Sharing</h4>
                <p class="feature-item-desc">Share your card via QR code, link, email, or NFC with a single click.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon-large">
                    <i class="fas fa-palette"></i>
                </div>
                <h4 class="feature-item-title">Custom Design</h4>
                <p class="feature-item-desc">Multiple themes and customization options to match your brand.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon-large">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h4 class="feature-item-title">Analytics Dashboard</h4>
                <p class="feature-item-desc">Track views, shares, and engagement with detailed analytics.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon-large">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h4 class="feature-item-title">Real-time Updates</h4>
                <p class="feature-item-desc">Update your card anytime - changes reflect instantly.</p>
            </div>
        </div>
    </div>
</section>

<!-- SEO Content Section -->
<section class="section-padding">
    <div class="container">
        <div class="seo-content">
            <h3 class="seo-title">Digital Business Cards: The Future of Professional Networking</h3>
            <p class="seo-text">
                Digital business cards are revolutionizing how professionals connect and network. Unlike traditional paper cards that get lost or discarded, digital cards are always accessible, eco-friendly, and packed with interactive features. With DigitalCards.tech, you get a powerful platform to create AI-powered digital business cards that work 24/7 for your business.
            </p>
            <p class="seo-text">
                Our platform supports QR code generation, NFC technology, analytics tracking, and unlimited updates - everything you need to make a lasting impression. Whether you're a freelancer, startup founder, or enterprise business, our flexible plans scale with your needs.
            </p>
            <div class="seo-keywords">
                <span class="keyword-tag">digital business card</span>
                <span class="keyword-tag">virtual business card</span>
                <span class="keyword-tag">QR code business card</span>
                <span class="keyword-tag">NFC business card</span>
                <span class="keyword-tag">online business card</span>
                <span class="keyword-tag">smart business card</span>
                <span class="keyword-tag">contactless business card</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding contact-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Have questions? Our team is here to help you get started with digital business cards.</p>
        </div>

        <div class="contact-info-grid">
            <div class="contact-info-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-phone"></i>
                <p>+1 5589 55488 55</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-envelope"></i>
                <p>info@digitalcards.tech</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-clock"></i>
                <p>Mon-Fri: 9AM-6PM<br>Support 24/7</p>
            </div>
        </div>

        <div class="contact-form-container">
            <form action="{{route('saveContact')}}" method="post" id="contactFrm">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="country_code" required>
                                <option value="">Country Code</option>
                                @if (!empty($countryData))
                                    @foreach($countryData AS $countryDetail)
                                    <option value="{{$countryDetail['dial_code']}}" 
                                        @if($countryDetail['dial_code'] === $selectedCode) selected @endif>
                                        {{$countryDetail['name']}} ({{$countryDetail['dial_code']}})
                                    </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>

                <div class="form-group">
                    <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                </div>

                <div class="captcha-container">
                    <div class="captcha-image"></div>
                    <button type="button" class="btn-refresh" onclick="refreshCaptcha()">
                        <i class="fas fa-redo me-2"></i> Refresh
                    </button>
                </div>

                <div class="form-group">
                    <input type="text" name="captcha" class="form-control" placeholder="Enter Captcha Code" required>
                </div>

                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('custom_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
// Form Validation
$("#contactFrm").validate({
    rules: {
        name: {
            required: true,
            minlength: 2,
            maxlength: 100
        },
        email: {
            required: true,
            email: true
        },
        subject: {
            required: true,
            minlength: 5,
            maxlength: 200
        },
        phone_number: {
            required: true,
            minlength: 8,
            maxlength: 15
        },
        message: {
            required: true,
            minlength: 10,
            maxlength: 1000
        },
        captcha: {
            required: true
        }
    },
    messages: {
        name: {
            required: "Please enter your name",
            minlength: "Name must be at least 2 characters",
            maxlength: "Name cannot exceed 100 characters"
        },
        email: {
            required: "Please enter your email address",
            email: "Please enter a valid email address"
        },
        subject: {
            required: "Please enter a subject",
            minlength: "Subject must be at least 5 characters",
            maxlength: "Subject cannot exceed 200 characters"
        },
        phone_number: {
            required: "Please enter your phone number",
            minlength: "Phone number must be at least 8 digits",
            maxlength: "Phone number cannot exceed 15 digits"
        },
        message: {
            required: "Please enter your message",
            minlength: "Message must be at least 10 characters",
            maxlength: "Message cannot exceed 1000 characters"
        },
        captcha: {
            required: "Please enter the captcha code"
        }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "captcha") {
            error.insertAfter(element.parent().parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function(form) {
        $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            beforeSend: function() {
                $('.btn-submit').prop('disabled', true).html('Sending...');
            },
            success: function(data) {
                $('.btn-submit').prop('disabled', false).html('Send Message');
                if(data.code == '0') {
                    toastr.success(data.msg);
                    form.reset();
                    refreshCaptcha();
                } else {
                    toastr.error(data.msg);
                }
            },
            error: function() {
                $('.btn-submit').prop('disabled', false).html('Send Message');
                toastr.error('An error occurred. Please try again.');
            }
        });
    }
});

// Captcha Refresh
function refreshCaptcha() {
    $.ajax({
        url: "{{route('generate-captcha')}}",
        type: 'GET',
        success: function(data) {
            $('.captcha-image').html(data);
        },
        error: function() {
            toastr.error('Unable to load captcha. Please refresh the page.');
        }
    });
}

// Initialize captcha on page load
$(document).ready(function() {
    refreshCaptcha();
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this.getAttribute('href'));
        if(target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
});
</script>
@endsection
