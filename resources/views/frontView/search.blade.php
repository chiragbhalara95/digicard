@extends('frontView.layouts.app')

@section('custom_style')
<link href="{{ asset('public/frontView/assets/css/search-page.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* ===== Updated Global Styles to Match Home Page ===== */
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
    background: var(--background);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: var(--text-primary);
}

/* ===== Hero Section - Matched with Home Page ===== */
.hero-section {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    padding: 6rem 0 4rem;
    color: white;
    position: relative;
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
    font-size: 2.75rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    background: linear-gradient(to right, #ffffff, #a5b4fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 2rem;
    line-height: 1.6;
}

/* ===== Search Bar - Updated Design ===== */
.search-bar-modern {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow-xl);
    padding: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.search-input-group {
    position: relative;
    flex: 1;
}

.search-input-group i {
    position: absolute;
    left: 1.25rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
    font-size: 1.125rem;
}

.search-input {
    width: 100%;
    padding: 1.125rem 1.125rem 1.125rem 3.5rem;
    background: rgba(255, 255, 255, 0.9);
    border: 2px solid transparent;
    border-radius: var(--radius-lg);
    font-size: 1rem;
    transition: all 0.3s ease;
    color: var(--text-primary);
}

.search-input:focus {
    outline: none;
    border-color: var(--primary-color);
    background: white;
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
}

.search-input::placeholder {
    color: var(--text-light);
}

.search-btn {
    background: var(--gradient);
    color: white;
    border: none;
    padding: 1.125rem 2.5rem;
    border-radius: var(--radius-lg);
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: var(--shadow-lg);
}

.search-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-xl);
    background: linear-gradient(135deg, var(--primary-dark), var(--secondary-color));
}

/* ===== Stats Section - Updated ===== */
.stats-section {
    background: var(--surface);
    padding: 3rem 0;
    border-bottom: 1px solid var(--border);
    box-shadow: var(--shadow-sm);
}

.stat-item {
    text-align: center;
    padding: 1rem;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 0.5rem;
    line-height: 1;
}

.stat-label {
    color: var(--text-secondary);
    font-size: 0.875rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* ===== Business Cards - Redesigned ===== */
.business-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-xl);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: var(--shadow-md);
    position: relative;
}

.business-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
    border-color: var(--primary-color);
}

.card-header {
    position: relative;
    padding: 0;
    overflow: hidden;
}

.profile-image-container {
    position: relative;
    width: 100%;
    height: 180px;
    overflow: hidden;
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.business-card:hover .profile-image {
    transform: scale(1.1);
}

.logo-overlay {
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 80px;
    background: var(--surface);
    border: 4px solid var(--surface);
    border-radius: var(--radius-full);
    box-shadow: var(--shadow-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.company-logo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: var(--radius-full);
}

.verified-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--gradient);
    color: white;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.875rem;
    border: 2px solid var(--surface);
    box-shadow: var(--shadow-md);
}

.card-body {
    padding: 2.5rem 1.5rem 1.5rem;
    text-align: center;
}

.company-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.25rem;
    line-height: 1.3;
}

.person-name {
    color: var(--text-secondary);
    font-size: 0.875rem;
    margin-bottom: 1rem;
    font-weight: 500;
}

.profession-badge {
    display: inline-block;
    background: var(--gradient);
    color: white;
    padding: 0.5rem 1.25rem;
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.contact-info {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0;
}

.contact-info li {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.75rem;
    color: var(--text-secondary);
    font-size: 0.875rem;
}

.contact-info li i {
    color: var(--primary-color);
    width: 16px;
    font-size: 0.875rem;
}

.card-footer {
    padding: 1.25rem 1.5rem;
    border-top: 1px solid var(--border);
    background: var(--background);
}

.visit-btn {
    background: var(--gradient);
    color: white;
    border: none;
    padding: 0.875rem 1.5rem;
    border-radius: var(--radius-lg);
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    box-shadow: var(--shadow-sm);
}

.visit-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    background: linear-gradient(135deg, var(--primary-dark), var(--secondary-color));
    color: white;
}

/* ===== Featured Badge - Updated ===== */
.featured-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: var(--gradient-light);
    color: white;
    padding: 0.375rem 1rem;
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    z-index: 2;
    box-shadow: var(--shadow-sm);
}

/* ===== Business Stats - Updated ===== */
.business-stats {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin: 1.5rem 0;
    padding: 1rem 0;
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
}

.stat-item-small {
    text-align: center;
}

.stat-number-small {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 0.25rem;
}

.stat-label-small {
    font-size: 0.75rem;
    color: var(--text-secondary);
    font-weight: 500;
}

/* ===== Sort Dropdown - Updated ===== */
.sort-dropdown .btn-outline-primary {
    background: var(--surface);
    border: 2px solid var(--border);
    color: var(--text-primary);
    padding: 0.75rem 1.5rem;
    border-radius: var(--radius-lg);
    font-weight: 600;
    transition: all 0.3s ease;
}

.sort-dropdown .btn-outline-primary:hover {
    background: var(--gradient);
    border-color: transparent;
    color: white;
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.sort-dropdown .dropdown-menu {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-xl);
    padding: 0.5rem 0;
    min-width: 200px;
}

.sort-dropdown .dropdown-item {
    padding: 0.75rem 1.25rem;
    color: var(--text-primary);
    transition: all 0.2s ease;
    font-weight: 500;
}

.sort-dropdown .dropdown-item:hover {
    background: var(--gradient);
    color: white;
}

.sort-dropdown .dropdown-item.active {
    background: var(--gradient);
    color: white;
}

.sort-dropdown .dropdown-item i {
    width: 20px;
    color: var(--text-secondary);
}

.sort-dropdown .dropdown-item.active i,
.sort-dropdown .dropdown-item:hover i {
    color: white;
}

/* ===== No Results - Updated ===== */
.no-results {
    padding: 5rem 0;
    text-align: center;
    background: var(--surface);
    border-radius: var(--radius-xl);
    border: 1px solid var(--border);
}

.no-results-icon {
    font-size: 4rem;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1.5rem;
}

.no-results-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.no-results-text {
    color: var(--text-secondary);
    font-size: 1.125rem;
    margin-bottom: 2rem;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.no-results .btn-primary {
    background: var(--gradient);
    border: none;
    padding: 1rem 2.5rem;
    border-radius: var(--radius-lg);
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.no-results .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* ===== Pagination - Updated ===== */
.pagination-container {
    margin-top: 4rem;
}

.pagination {
    justify-content: center;
}

.page-link {
    border: 2px solid var(--border);
    color: var(--text-secondary);
    margin: 0 0.25rem;
    border-radius: var(--radius-lg) !important;
    transition: all 0.3s ease;
    font-weight: 600;
    padding: 0.75rem 1rem;
    min-width: 45px;
    text-align: center;
}

.page-link:hover {
    background: var(--gradient);
    color: white;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.page-item.active .page-link {
    background: var(--gradient);
    border-color: transparent;
    color: white;
    box-shadow: var(--shadow-md);
}

/* ===== Call to Action - Updated ===== */
.bg-gradient-primary {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important;
    position: relative;
    overflow: hidden;
}

.bg-gradient-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 30% 70%, rgba(99, 102, 241, 0.2) 0%, transparent 50%),
        radial-gradient(circle at 70% 30%, rgba(139, 92, 246, 0.15) 0%, transparent 50%);
}

.bg-gradient-primary .btn-light {
    background: white;
    color: var(--primary-color);
    border: none;
    padding: 1rem 2.5rem;
    border-radius: var(--radius-full);
    font-weight: 600;
    font-size: 1.125rem;
    transition: all 0.3s ease;
    box-shadow: var(--shadow-lg);
}

.bg-gradient-primary .btn-light:hover {
    background: #f1f5f9;
    transform: translateY(-3px);
    box-shadow: var(--shadow-xl);
}

/* ===== Animations ===== */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in-up {
    animation: fadeInUp 0.6s ease-out;
}

/* ===== Responsive Design ===== */
@media (max-width: 992px) {
    .hero-title {
        font-size: 2.25rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .search-bar-modern {
        flex-direction: column;
        gap: 1rem;
    }
    
    .search-input-group {
        width: 100%;
    }
    
    .search-btn {
        width: 100%;
    }
}

@media (max-width: 768px) {
    .hero-section {
        padding: 4rem 0 3rem;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .stats-section {
        padding: 2rem 0;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .profile-image-container {
        height: 160px;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 1.75rem;
    }
    
    .search-input {
        padding: 1rem 1rem 1rem 3rem;
    }
    
    .business-stats {
        gap: 1rem;
    }
}
</style>
@endsection

@section('content')
<!-- Hero Section - Matching Home Page Design -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="hero-title">Discover & Connect with Verified Businesses</h1>
                <p class="hero-subtitle">Find professional partners, suppliers, and services in your area. Grow your network with trusted professionals.</p>
                
                <!-- Search Form -->
                <form action="{{ route('search') }}" method="GET" class="mb-4">
                    <div class="search-bar-modern d-flex">
                        <div class="search-input-group me-2">
                            <i class="fas fa-search"></i>
                            <input 
                                type="text" 
                                class="search-input" 
                                placeholder="Search businesses, services, or professionals..." 
                                name="keywords" 
                                value="{{ request()->get('keywords') }}"
                            >
                        </div>
                        
                        <div class="search-input-group me-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <input 
                                type="text" 
                                class="search-input" 
                                placeholder="City, State or ZIP" 
                                name="city_name" 
                                value="{{ request()->get('city_name') }}"
                            >
                        </div>
                        
                        <button type="submit" class="search-btn">
                            <i class="fas fa-search"></i>
                            Search
                        </button>
                    </div>
                    
                    <!-- Hidden sort field -->
                    <input type="hidden" name="sort" value="{{ request()->get('sort', 'relevance') }}">
                </form>
                
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">{{ $totalBusinesses ?? '500+' }}</div>
                    <div class="stat-label">Businesses Listed</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">{{ $totalCities ?? '50+' }}</div>
                    <div class="stat-label">Cities Covered</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">{{ $verifiedProfiles ?? '300+' }}</div>
                    <div class="stat-label">Verified Profiles</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">{{ $topIndustries ?? '25+' }}</div>
                    <div class="stat-label">Industries</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Listings -->
<section class="py-5">
    <div class="container">
        @if($userData->count() > 0)
            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-2" style="color: var(--text-primary);">Business Directory</h2>
                    <p class="mb-0" style="color: var(--text-secondary);">
                        Showing {{ $userData->firstItem() }} - {{ $userData->lastItem() }} of {{ $userData->total() }} results
                        @if(request()->get('keywords') || request()->get('city_name'))
                        for "<strong>{{ request()->get('keywords') }}</strong>"
                        @if(request()->get('city_name'))
                        in <strong>{{ request()->get('city_name') }}</strong>
                        @endif
                        @endif
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown sort-dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sort me-2"></i>
                            Sort by: 
                            @php
                                $sortLabels = [
                                    'relevance' => 'Relevance',
                                    'newest' => 'Newest',
                                    'popular' => 'Most Popular',
                                    'name' => 'Name (A-Z)'
                                ];
                            @endphp
                            {{ $sortLabels[request()->get('sort', 'relevance')] }}
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ request()->get('sort') == 'relevance' ? 'active' : '' }}" 
                                   href="{{ route('search', array_merge(request()->query(), ['sort' => 'relevance'])) }}">
                                    <i class="fas fa-star me-2"></i> Relevance
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->get('sort') == 'newest' ? 'active' : '' }}" 
                                   href="{{ route('search', array_merge(request()->query(), ['sort' => 'newest'])) }}">
                                    <i class="fas fa-calendar-plus me-2"></i> Newest First
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->get('sort') == 'popular' ? 'active' : '' }}" 
                                   href="{{ route('search', array_merge(request()->query(), ['sort' => 'popular'])) }}">
                                    <i class="fas fa-fire me-2"></i> Most Popular
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->get('sort') == 'name' ? 'active' : '' }}" 
                                   href="{{ route('search', array_merge(request()->query(), ['sort' => 'name'])) }}">
                                    <i class="fas fa-sort-alpha-down me-2"></i> Name (A-Z)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @foreach($userData as $index => $userDetail)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 fade-in-up" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="business-card">
                        <div class="card-header">
                            <div class="profile-image-container">
                                @if(!empty($userDetail->company_logo))
                                    <img src="{{ url('public/'.$userDetail->company_logo) }}" alt="{{ $userDetail->company_name }}" class="profile-image">
                                @elseif(!empty($userDetail->profile_pic))
                                    <img src="{{ url('public/'.$userDetail->profile_pic) }}" alt="{{ $userDetail->name }}" class="profile-image">
                                @else
                                    <div class="profile-image d-flex align-items-center justify-content-center" style="background: var(--gradient);">
                                        <span class="display-5 text-white fw-bold">
                                            @if (!empty($userDetail->company_name))
                                                {{ substr($userDetail->company_name, 0, 2) }}
                                            @else
                                                {{ substr($userDetail->name, 0, 2) }}
                                            @endif
                                        </span>
                                    </div>
                                @endif
                                
                                <!-- Featured Badge -->
                                @if($index < 3 && request()->get('sort') != 'newest')
                                <div class="featured-badge">
                                    <i class="fas fa-star me-1"></i> Featured
                                </div>
                                @endif
                            </div>
                            
                            <!-- Company Logo Overlay -->
                            @if(!empty($userDetail->company_logo))
                            <div class="logo-overlay">
                                <img src="{{ url('public/'.$userDetail->company_logo) }}" alt="Logo" class="company-logo">
                            </div>
                            @endif
                        </div>
                        
                        <div class="card-body">
                            @if(!empty($userDetail->company_name))
                                <h5 class="company-name">{{ Str::limit($userDetail->company_name, 30) }}</h5>
                                <div class="person-name">{{ $userDetail->name }}</div>
                            @else
                                <h5 class="company-name">{{ $userDetail->name }}</h5>
                            @endif
                            
                            @if(!empty($userDetail->company_profession))
                                <div class="profession-badge">{{ $userDetail->company_profession }}</div>
                            @endif
                            
                            <!-- Business Stats -->
                            <div class="business-stats">
                                <div class="stat-item-small">
                                    <div class="stat-number-small">{{ $userDetail->views ?? '0' }}</div>
                                    <div class="stat-label-small">Views</div>
                                </div>
                                @if($userDetail->package_type ?? false)
                                <div class="stat-item-small">
                                    <div class="stat-number-small">
                                        <i class="fas fa-crown" style="color: var(--warning);"></i>
                                    </div>
                                    <div class="stat-label-small">Premium</div>
                                </div>
                                @endif
                            </div>
                            
                            <ul class="contact-info">
                                @if(!empty($userDetail->company_address))
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{ Str::limit(strip_tags($userDetail->company_address), 40) }}</span>
                                </li>
                                @endif
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <span>{{ $userDetail->country_code }} {{ $userDetail->company_mobile }}</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="card-footer">
                            <a href="{{ url('vc/'.$userDetail->slug) }}" target="_blank" class="visit-btn">
                                <i class="fas fa-external-link-alt me-2"></i>
                                Visit Digital Card
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="pagination-container">
                {!! $userData->appends(request()->query())->links('pagination::bootstrap-4') !!}
            </div>
            
        @else
            <!-- No Results Found -->
            <div class="no-results">
                <div class="no-results-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h4 class="no-results-title">No businesses found</h4>
                <p class="no-results-text">
                    @if(request()->get('keywords') || request()->get('city_name') || request()->get('category'))
                        We couldn't find any businesses matching your search criteria.
                    @else
                        No businesses are currently listed in our directory.
                    @endif
                </p>
                <a href="{{ route('search') }}" class="btn btn-primary">
                    <i class="fas fa-redo me-2"></i>
                    Clear Filters
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-gradient-primary text-white">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 position-relative">
                <h3 class="mb-4 fw-bold">Ready to Grow Your Business?</h3>
                <p class="mb-4" style="opacity: 0.9;">List your business in our directory and connect with potential customers and partners. Join our community of successful businesses today.</p>
                <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5">
                    <i class="fas fa-plus-circle me-2"></i>
                    Add Your Business
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
// Smooth animations and interactions
document.addEventListener('DOMContentLoaded', function() {
    // Add fade-in animation to cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.business-card').forEach(card => {
        observer.observe(card);
    });

    // Sort dropdown functionality
    document.querySelectorAll('.sort-dropdown .dropdown-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const sortValue = this.getAttribute('href').split('sort=')[1];
            document.querySelector('input[name="sort"]').value = sortValue;
            window.location.href = this.getAttribute('href');
        });
    });

    // Add hover effects to stat cards
    document.querySelectorAll('.stat-item').forEach(stat => {
        stat.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        stat.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>
@endsection