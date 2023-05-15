@extends('frontView.layouts.app')
@section('custom_style')
<link href="{{ asset('public/frontView/assets/css/search-page.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

@endsection


@section('content')

</head>
<body>

<section id="intro" class="clearfix">

<div class="container">
<div class="row">
<div class="col-lg-10 mx-auto mb-4">
<div class="section-title text-center ">
<h3 class="top-c-sep">Grow your business with us</h3>
<!-- <p>Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit. Aenean socada commodo ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p> -->
</div>
</div>
</div>
<div class="row">
<div class="col-lg-10 mx-auto">
<div class="career-search mb-60">
<form action="{{route('search')}}" method="GET" class="career-form mb-60">
<div class="row">
<div class="col-md-6 col-lg-3 my-3">
<div class="input-group position-relative">
<input type="text" class="form-control" placeholder="Enter Your Keywords" id="keywords" name="keywords" value="{{request()->get('keywords')}}">
</div>
</div>
<div class="col-md-6 col-lg-3 my-3">

<div class="input-group position-relative">
<input type="text" class="form-control" placeholder="Enter City Name" id="city" name="city_name" value="{{request()->get('city_name')}}">
</div>

<!-- <div class="select-container">
<select class="custom-select">
<option selected>All City</option>
<option value="1">Surat</option>
<option value="2">Pune</option>
<option value="3">Bangalore</option>
</select>
</div>
 --></div>
<div class="col-md-6 col-lg-3 my-3">
<input type="submit" class="btn btn-lg btn-block btn-light btn-custom" value="Search">
</div>
</div>
</form>

<div class="filter-result">
    <!-- <p class="mb-30 ff-montserrat">Total Job Openings : 89</p> -->

    @foreach($userData as $userDetail)
    <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-12 mx-auto mb-4">
                @if(!empty($userDetail->company_logo) || !empty($userDetail->profile_pic))
                <div class="card_content2 mb-md-0 mb-4 mx-auto">
                    <div class="profile card_content">
                      <div class=" personface profilepic">
                        @if(!empty($userDetail->company_logo))
                          <img src="{{url('public')}}/{{$userDetail->company_logo}}" class="img-responsive" alt="logo">
                        @else
                          <img src="{{url('public')}}/{{$userDetail->profile_pic}}" class="img-responsive" alt="logo">
                        @endif
                        </div>
                      </div>
                </div>
                @else
                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                    @if (!empty($userDetail->company_name))
                    @php echo initials($userDetail->company_name) @endphp
                    @else
                    @php echo initials($userDetail->name) @endphp
                    @endif
                </div>
                @endif
        </div>
        <div class="col-lg-8 mx-auto mb-4">
                    @if (!empty($userDetail->company_name))
                    <h5 class="text-center text-md-left">{!! $userDetail->company_name !!}</h5>
                    <h4 class="text-center text-md-left">{!! $userDetail->name !!}</h4>
                    @else
                    <h4 class="text-center text-md-left">{!! $userDetail->name !!}</h4>
                    @endif
                    @if(!empty($userDetail->company_profession))<span>{!! $userDetail->company_profession!!}</span>@endif

                    @if (!empty($userDetail->company_address))
                    <!-- <p class="mb-30 ff-montserrat">Address: <br/>{!! $userDetail->company_address !!}</p> -->
                    @endif
        </div>
        <div class="col-lg-2 mx-auto">
            <a href="{{url('vc')}}/{{$userDetail->slug}}" class="btn d-block w-100 d-sm-inline-block btn-primary">Visit Digital Card</a>
        </div>
    </div>

    @endforeach

    {!! $userData->appends(request()->query())->links('pagination::bootstrap-4') !!}
    
    @if ($userData->total() == 0)
    <p class="mb-30 ff-montserrat">No Records Found</p>
    @endif


</div>

</div>
</div>
</div>
</section>

@endsection
