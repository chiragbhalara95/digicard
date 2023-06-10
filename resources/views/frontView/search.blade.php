@extends('frontView.layouts.app')
@section('custom_style')
<link href="{{ asset('public/frontView/assets/css/search-page.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

@endsection


@section('content')

</head>
<body>


<!-- /.container -->
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
<div class="col-lg-12 mx-auto">
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

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 job-box">

    @foreach($userData as $userDetail)

  <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-30">
    <div class="card">
        @if(!empty($userDetail->company_logo))
          <img src="{{url('public')}}/{{$userDetail->company_logo}}" class="img-responsive" alt="logo">
        @elseif (!empty($userDetail->profile_pic))
          <img src="{{url('public')}}/{{$userDetail->profile_pic}}" class="img-responsive" alt="logo">
        @else
        <div class=" img-holder">
            @if (!empty($userDetail->company_name))
            @php echo initials($userDetail->company_name) @endphp
            @else
            @php echo initials($userDetail->name) @endphp
            @endif
        </div>
        @endif

      <div class="card-body">
        @if (!empty($userDetail->company_name))
        <h4 class="card-title">{!! $userDetail->company_name !!}</h4>
        <h6 class="card-title">{!! $userDetail->name !!}</h6>
        @else
        <h6 class="card-title">{!! $userDetail->name !!}</h6>
        @endif

        @if(!empty($userDetail->company_profession))
        <p class="card-text">{!! $userDetail->company_profession!!}</p>
        @endif
        <hr/>

        <ul class="contact-info">

            @if (!empty($userDetail->company_address))
            <li><p class="card-text"><i class="fa fa-map-marker"></i>&nbsp;{!! strip_tags($userDetail->company_address) !!}</li></p>
            @endif

            <li><p class="card-text"><a class="numan" href="tel:{{$userDetail->country_code}}{{$userDetail->company_mobile}}"><i class="fa fa-phone"></i>&nbsp;{{$userDetail->country_code}}{{$userDetail->company_mobile}}</a></p></li>

            <li><p class="card-text"><a class="numan" href="mailto:{{$userDetail->email}}"><i class="fa fa-envelope"></i>&nbsp;{{$userDetail->email}}</a></p></li>
        </ul>

        <a href="{{url('vc')}}/{{$userDetail->slug}}" class="btn d-block w-100 d-sm-inline-block btn-primary" target="_tab">Visit Digital Card</a>


      </div>

    </div>
  </div>

<!--     <div class="row job-box">
        <div class="col-lg-2 col-md-6 col-sm-12 mx-auto mb-4 ">
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
                <div class=" img-holder">
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
                    <h5 class="text-center">{!! $userDetail->company_name !!}</h5>
                    <h4 class="text-center">{!! $userDetail->name !!}</h4>
                    @else
                    <h4 class="text-center">{!! $userDetail->name !!}</h4>
                    @endif
                    @if(!empty($userDetail->company_profession))<span class="text-center">{!! $userDetail->company_profession!!}</span>@endif

                    @if (!empty($userDetail->company_address))
                    <br/>
                    <div class="mb-30 ff-montserrat text-center company_address">Address: <br/>{!! $userDetail->company_address !!}</div>
                    @endif
        </div>
        <div class="col-lg-2 mx-auto">
            <a href="{{url('vc')}}/{{$userDetail->slug}}" class="btn d-block w-100 d-sm-inline-block btn-primary" target="_tab">Visit Digital Card</a>
        </div>
    </div>
 -->
    @endforeach
</div>

<br/>
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
