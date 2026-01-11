@extends('frontView.layouts.app')

@section('custom_style')
<link href="{{ asset('public/frontView/assets/css/search-page.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* --- Global Styles --- */
:root {
    --primary-color: #2563eb;
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
    --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
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
}

/* --- Hero Section --- */
.hero-section {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    padding: 4rem 0;
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
    background: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.1) 50%, transparent 60%);
    animation: shimmer 3s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

.hero-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.hero-subtitle {
    font-size: 1.125rem;
    opacity: 0.9;
    margin-bottom: 2rem;
}

/* --- Search Bar Modern Design --- */
.search-bar-modern {
    background: white;
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow-xl);
    padding: 0.75rem;
    border: 1px solid var(--border-color);
}

.search-input-group {
    position: relative;
    flex: 1;
}

.search-input-group i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-secondary);
    font-size: 1.125rem;
}

.search-input {
    width: 100%;
    padding: 1rem 1rem 1rem 3rem;
    border: 2px solid var(--border-color);
    border-radius: var(--radius-lg);
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.search-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.search-btn {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: var(--radius-lg);
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.search-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
    background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
}

/* --- Stats Section --- */
.stats-section {
    background: white;
    padding: 2rem 0;
    border-bottom: 1px solid var(--border-color);
}

.stat-item {
    text-align: center;
    padding: 1rem;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.stat-label {
    color: var(--text-secondary);
    font-size: 0.875rem;
}

/* --- Business Cards --- */
.business-card {
    background: var(--surface);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-xl);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: var(--shadow-md);
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
    transition: transform 0.3s ease;
}

.business-card:hover .profile-image {
    transform: scale(1.05);
}

.logo-overlay {
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 80px;
    background: white;
    border: 4px solid white;
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
    background: var(--success-color);
    color: white;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    border: 2px solid white;
}

.card-body {
    padding: 2rem 1.5rem 1.5rem;
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
    margin-bottom: 0.75rem;
}

.profession-badge {
    display: inline-block;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
    color: white;
    padding: 0.375rem 1rem;
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 500;
    margin-bottom: 1rem;
}

.contact-info {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}

.contact-info li {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: var(--text-secondary);
    font-size: 0.875rem;
}

.contact-info li i {
    color: var(--primary-color);
    width: 16px;
}

.card-footer {
    padding: 1rem 1.5rem;
    border-top: 1px solid var(--border-color);
    background: var(--background);
}

.visit-btn {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: var(--radius-lg);
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.visit-btn:hover {
    background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    color: white;
}

/* --- No Results --- */
.no-results {
    padding: 4rem 0;
    text-align: center;
}

.no-results-icon {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 1rem;
}

.no-results-title {
    font-size: 1.5rem;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.no-results-text {
    color: var(--text-secondary);
    margin-bottom: 2rem;
}

/* --- Pagination --- */
.pagination-container {
    margin-top: 3rem;
}

.pagination {
    justify-content: center;
}

.page-link {
    border: 1px solid var(--border-color);
    color: var(--text-secondary);
    margin: 0 0.25rem;
    border-radius: var(--radius-md) !important;
    transition: all 0.3s ease;
}

.page-link:hover {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.page-item.active .page-link {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-color: var(--primary-color);
}

/* --- Categories Filter --- */
.categories-filter {
    background: white;
    padding: 1rem;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    margin-bottom: 2rem;
    border: 1px solid var(--border-color);
}

.category-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.category-tag {
    background: var(--background);
    border: 1px solid var(--border-color);
    color: var(--text-secondary);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-full);
    font-size: 0.875rem;
    transition: all 0.3s ease;
    cursor: pointer;
}

.category-tag:hover,
.category-tag.active {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    border-color: var(--primary-color);
}

/* --- Responsive Design --- */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .search-bar-modern {
        flex-direction: column;
    }
    
    .search-input-group {
        margin-bottom: 1rem;
    }
    
    .search-btn {
        width: 100%;
    }
    
    .profile-image-container {
        height: 150px;
    }
    
    .company-name {
        font-size: 1.125rem;
    }
}

@media (max-width: 576px) {
    .hero-section {
        padding: 2rem 0;
    }
    
    .hero-title {
        font-size: 1.75rem;
    }
    
    .business-card {
        margin-bottom: 1rem;
    }
}

/* --- Loading Animation --- */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in-up {
    animation: fadeInUp 0.6s ease-out;
}

/* --- Featured Badge --- */
.featured-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: linear-gradient(135deg, #f59e0b, #fbbf24);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    z-index: 2;
}

/* --- Business Stats --- */
.business-stats {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 1rem;
}

.stat-item-small {
    text-align: center;
}

.stat-number-small {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary-color);
}

.stat-label-small {
    font-size: 0.75rem;
    color: var(--text-secondary);
}
</style>
@endsection

@section('content')
<!-- Hero Section -->
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
                </form>
                
                <div class="d-flex justify-content-center flex-wrap gap-2">
                    <span class="text-white-50">Popular:</span>
                    <a href="{{ route('search', ['keywords' => 'Consultant']) }}" class="badge bg-light text-dark px-3 py-2">Consultants</a>
                    <a href="{{ route('search', ['keywords' => 'IT Services']) }}" class="badge bg-light text-dark px-3 py-2">IT Services</a>
                    <a href="{{ route('search', ['keywords' => 'Manufacturing']) }}" class="badge bg-light text-dark px-3 py-2">Manufacturing</a>
                    <a href="{{ route('search', ['keywords' => 'Healthcare']) }}" class="badge bg-light text-dark px-3 py-2">Healthcare</a>
                </div>
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
                    <div class="stat-number">{{ $totalIndustries ?? '25+' }}</div>
                    <div class="stat-label">Industries</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Filter -->
<section class="py-4">
    <div class="container">
        <div class="categories-filter">
            <h6 class="mb-3 fw-semibold text-primary"><i class="fas fa-filter me-2"></i>Filter by Category</h6>
            <div class="category-tags">
                <a href="{{ route('search') }}" class="category-tag {{ !request()->get('category') ? 'active' : '' }}">All</a>
                @php
                    $categories = ['Technology', 'Healthcare', 'Manufacturing', 'Consulting', 'Retail', 'Education', 'Finance', 'Real Estate', 'Hospitality', 'Transportation'];
                @endphp
                @foreach($categories as $category)
                <a href="{{ route('search', ['category' => strtolower($category)]) }}" 
                   class="category-tag {{ request()->get('category') == strtolower($category) ? 'active' : '' }}">
                    {{ $category }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Business Listings -->
<section class="py-5">
    <div class="container">
        @if($userData->count() > 0)
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3 class="fw-bold text-dark">Business Directory</h3>
                    <p class="text-muted">Showing {{ $userData->count() }} of {{ $userData->total() }} results</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sort me-2"></i>
                            Sort by: {{ ucfirst(request()->get('sort', 'relevance')) }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('search', array_merge(request()->query(), ['sort' => 'relevance'])) }}">Relevance</a></li>
                            <li><a class="dropdown-item" href="{{ route('search', array_merge(request()->query(), ['sort' => 'newest'])) }}">Newest First</a></li>
                            <li><a class="dropdown-item" href="{{ route('search', array_merge(request()->query(), ['sort' => 'popular'])) }}">Most Popular</a></li>
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
                                    <div class="profile-image bg-gradient-primary d-flex align-items-center justify-content-center">
                                        <span class="display-6 text-white fw-bold">
                                            @if (!empty($userDetail->company_name))
                                                {{ substr($userDetail->company_name, 0, 2) }}
                                            @else
                                                {{ substr($userDetail->name, 0, 2) }}
                                            @endif
                                        </span>
                                    </div>
                                @endif
                                
                                <!-- Featured Badge (Optional) -->
                                @if($index < 3)
                                <div class="featured-badge">
                                    <i class="fas fa-star me-1"></i> Featured
                                </div>
                                @endif
                                
                                <!-- Verified Badge -->
                                @if($userDetail->is_verified ?? false)
                                <div class="verified-badge">
                                    <i class="fas fa-check"></i>
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
                                <div class="stat-item-small">
                                    <div class="stat-number-small">{{ $userDetail->connections ?? '0' }}</div>
                                    <div class="stat-label-small">Connections</div>
                                </div>
                            </div>
                            
                            <hr class="my-3">
                            
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
                    @if(request()->get('keywords') || request()->get('city_name'))
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
            <div class="col-lg-8">
                <h3 class="mb-4">Ready to Grow Your Business?</h3>
                <p class="mb-4">List your business in our directory and connect with potential customers and partners.</p>
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
// Smooth scroll to search results
document.addEventListener('DOMContentLoaded', function() {
    // Add fade-in animation to cards
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

    // Category filter click
    document.querySelectorAll('.category-tag').forEach(tag => {
        tag.addEventListener('click', function(e) {
            if (!this.classList.contains('active')) {
                document.querySelectorAll('.category-tag').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
});
</script>
@endsection