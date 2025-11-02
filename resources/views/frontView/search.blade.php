@extends('frontView.layouts.app')

@section('custom_style')
<link href="{{ asset('public/frontView/assets/css/search-page.css') }}" rel="stylesheet">
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-BxYpPo1X9f0CwTeWFF8V9vsQJlsPqVZ+j6fsH7bUiz6JeYbXyQ6DAzv5U+eO3FzqJ1ScH1U1tCwV6CsCB8Q+0A=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
/* --- Search Bar Modern Design --- */
.search-bar {
  background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
  border: 1px solid #e4e4e4;
  transition: box-shadow 0.3s ease, border-color 0.3s ease;
}

.search-bar:hover {
  border-color: #d1d1d1;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
}

.search-bar .form-control {
  flex: 1;
  font-size: 1rem;
  color: #333;
  cursor: text;
}

.search-bar .form-control::placeholder {
  color: #888;
  font-weight: 400;
}

.search-bar .form-control:focus {
  outline: none;
  box-shadow: none;
  background: transparent;
}

.search-bar i {
  font-size: 1rem;
}

.btn-search {
  background: linear-gradient(90deg, #6f42c1, #4f8cff);
  color: #fff;
  border: none;
  transition: all 0.3s ease;
  border-radius: 0;
}

.btn-search:hover {
  background: linear-gradient(90deg, #5b35a0, #3a76e2);
  transform: scale(1.03);
}

@media (max-width: 991px) {
  .search-bar {
    flex-direction: column;
    border-radius: 1rem !important;
  }

  .search-bar > div {
    border-right: none !important;
    border-bottom: 1px solid #eee;
  }

  .btn-search {
    width: 100%;
    border-radius: 0 0 1rem 1rem !important;
  }
}

/* Add slight padding for better balance on small devices */
@media (max-width: 576px) {
  .search-bar {
    margin: 0 0.5rem;
  }
}
</style>
@endsection

@section('content')
<section id="intro" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-dark">Grow Your Business with Us 🚀</h3>
            <p class="text-muted">Discover verified businesses and professionals in your city</p>
        </div>

        <div class="career-search mb-5">
          <form action="{{ route('search') }}" method="GET" class="career-form mb-4">
            <div class="row justify-content-center">
              <div class="col-lg-10 col-md-11">
                <div class="search-bar shadow-sm d-flex flex-wrap align-items-stretch rounded-4 overflow-hidden">
                  
                  <!-- Keyword Input -->
                  <div class="flex-grow-1 d-flex align-items-center px-3 border-end bg-transparent">
                    <i class="fa fa-search text-muted me-2"></i>
                    <input 
                      type="text" 
                      class="form-control border-0 shadow-none bg-transparent py-3" 
                      placeholder="Search businesses or professionals..." 
                      name="keywords" 
                      value="{{ request()->get('keywords') }}"
                    >
                  </div>

                  <!-- City Input -->
                  <div class="flex-grow-1 d-flex align-items-center px-3 border-end bg-transparent">
                    <i class="fa fa-map-marker-alt text-muted me-2"></i>
                    <input 
                      type="text" 
                      class="form-control border-0 shadow-none bg-transparent py-3" 
                      placeholder="Enter city name" 
                      name="city_name" 
                      value="{{ request()->get('city_name') }}"
                    >
                  </div>

                  <!-- Submit Button -->
                  <button type="submit" class="btn btn-search d-flex align-items-center justify-content-center px-5 fw-semibold">
                    <i class="fa fa-search me-2"></i> Search
                  </button>
                </div>
              </div>
            </div>
          </form>

            <div class="filter-result">
                @if($userData->count() > 0)
                    <div class="row g-4">
                        @foreach($userData as $userDetail)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100">
                                @if(!empty($userDetail->company_logo))
                                    <img src="{{ url('public/'.$userDetail->company_logo) }}" alt="Logo">
                                @elseif(!empty($userDetail->profile_pic))
                                    <img src="{{ url('public/'.$userDetail->profile_pic) }}" alt="Profile">
                                @else
                                    <div class="img-holder">
                                        @if (!empty($userDetail->company_name))
                                            @php echo initials($userDetail->company_name) @endphp
                                        @else
                                            @php echo initials($userDetail->name) @endphp
                                        @endif
                                    </div>
                                @endif

                                <div class="card-body">
                                    @if(!empty($userDetail->company_name))
                                        <h4>{{ $userDetail->company_name }}</h4>
                                        <h6 class="text-muted">{{ $userDetail->name }}</h6>
                                    @else
                                        <h5>{{ $userDetail->name }}</h5>
                                    @endif

                                    @if(!empty($userDetail->company_profession))
                                        <p class="mt-2">{{ $userDetail->company_profession }}</p>
                                    @endif

                                    <hr>
                                    <ul class="contact-info p-0">
                                        @if(!empty($userDetail->company_address))
                                        <li><i class="fa fa-map-marker-alt me-2"></i>{!! strip_tags($userDetail->company_address) !!}</li>
                                        @endif
                                        <li><i class="fa fa-phone me-2"></i>
                                            <a href="tel:{{$userDetail->country_code}}{{$userDetail->company_mobile}}" class="text-decoration-none text-dark">
                                                {{$userDetail->country_code}} {{$userDetail->company_mobile}}
                                            </a>
                                        </li>
                                        <li><i class="fa fa-envelope me-2"></i>
                                            <a href="mailto:{{$userDetail->email}}" class="text-decoration-none text-dark">
                                                {{$userDetail->email}}
                                            </a>
                                        </li>
                                    </ul>

                                    <a href="{{ url('vc/'.$userDetail->slug) }}" target="_blank" class="btn btn-sm btn-primary w-100 mt-3">Visit Digital Card</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-4">
                        {!! $userData->appends(request()->query())->links('pagination::bootstrap-4') !!}
                    </div>
                @else
                    <p class="text-center text-muted mt-4 fs-5">No records found 😔</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
