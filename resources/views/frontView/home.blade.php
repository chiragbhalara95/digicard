@extends('frontView.layouts.app')
@section('custom_style')
   <link href="{{ asset('public/frontView/minify/css/custom.min.css') }}?v={{date('YmdHis')}}" rel="stylesheet">

@endsection

@section('content')
<!-- ======= Intro Section ======= -->
<section id="intro" class="clearfix">
   <div class="container" data-aos="fade-up">
      <div class="intro-img" data-aos="zoom-out" data-aos-delay="200">
         <img src="{{ asset('public/frontView/assets/img/intro-img.svg') }}" alt="intro" class="img-fluid">
      </div>
      <div class="intro-info" data-aos="zoom-in" data-aos-delay="100">
         <h1 class="text-white">We offer Below Services:</h1>
         @foreach($productData AS $productDetail)
         <h5 class="text-white">{{$productDetail['product_name']}}</h5>
         @endforeach
         <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="#services" class="btn-services scrollto">Our Services</a>
         </div>
      </div>
   </div>
</section>
<!-- End Intro Section -->
<!-- ======= About Section ======= -->
<section id="about">
   <div class="container" data-aos="fade-up">
      <header class="section-header">
         <h3>About Us</h3>
         <p>A digital card is an online hosted, digital virtual representation of any plastic card. A digital card, unlike a plastic card, doesn't require any physical representation.</p>
      </header>

      <h2>Digital Business Card</h2>

      <h3>Why Digital Cards ?</h3>
      <div class="row about-container">
         <div class="col-lg-6 content order-lg-1 order-2">
            <p>
               Digital Card is the standard for digital business cards that works on Smartphones, Tablets and computers with NO APP required. Digital Card creates a digital hub where your customers can pick and choose how they connect with you. For example, you can list your standard contact information, a bio telling a little more about yourself, all of your social networks in one place and an info center, which allows you to create a digital brochure.
            </p>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
               <div class="icon"><i class="fa fa-shopping-bag"></i></div>
               <h4 class="title"><a href="">Your Digital Visiting Card</a></h4>
               <p class="description">&nbsp;</p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
               <div class="icon"><i class="fa fa-photo"></i></div>
               <h4 class="title"><a href="">Mini Website for Start-Up</a></h4>
               <p class="description">&nbsp;</p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
               <div class="icon"><i class="fa fa-bar-chart"></i></div>
               <h4 class="title"><a href="">Fast Growth of your business</a></h4>
               <p class="description">&nbsp;</p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
               <div class="icon"><i class="fa fa-bar-chart"></i></div>
               <h4 class="title"><a href="">Business with Technology</a></h4>
               <p class="description">&nbsp;</p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
               <div class="icon"><i class="fa fa-bar-chart"></i></div>
               <h4 class="title"><a href="">Easy to Share</a></h4>
               <p class="description">&nbsp;</p>
            </div>
         </div>
         <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="{{ asset('public/frontView/assets/img/about-img.svg') }}" class="img-fluid" alt="about img">
         </div>
      </div>
   </div>
</section>
<!-- End About Section -->
<!-- ======= Services Section ======= -->
<section id="services" class="section-bg">
   <div class="" data-aos="fade-up">
      <header class="section-header">
         <h3>Our Products</h3>
         <p>We Believe In Success, Your Success Is Our Success</p>
         <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-3">
               <select id="product-select-list" data-live-search="true" class="form-control selectpicker">
               @foreach($productData AS $key => $productDetail)
               <option class="text-center" @if($key == 0) selected @endif value="{{$productDetail['product_id']}}">{{$productDetail['product_name']}}</option>
               @endforeach
               </select>
            </div>
         </div>
      </header>
      <hr>
      @if(!empty($skuCustomPackage))
      @foreach($skuCustomPackage AS $productId => $skuCustomDetail)
      <div class="row col-md-12 sku-package-row" id="sku-package-row-{{$productId}}" style="display: none;">
         @foreach($skuCustomDetail AS $detail)
         <div class="col-lg-3 col-md-3 box">
            <div class="card-header">
               <h4 class="text-center my-0 font-weight-normal">{{$detail['package_type_name']}}</h4>
               <select class="form-control selectpicker custom-duration" data-live-search="true">
                  <option value="" class="text-center">Select Duration</option>
                  @foreach($detail['duration'] AS $key => $duration)
                  <option value="{{$key}}" class="text-center" data-price="{{$detail['special_price']}}">{{$duration}}</option>
                  @endforeach
               </select>
               <p>{!!$detail['description']!!}</p>
            </div>
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
            <a type="button" class="btn btn-lg btn-block btn-primary create_custom_card" href="{{url('/register')}}">Create Your Card</a>
            @endif

    

         </div>
         @endforeach
      </div>
      @endforeach
      @endif
   </div>
</section>
<!-- End Services Section -->
<!-- ======= Why Us Section ======= -->
<section id="why-us">
   <div class="container" data-aos="fade-up">
      <header class="section-header">
         <h3>Why choose us?</h3>
         <p>Marketing Is Key of Success, Create Your Brand Worldwide</p>
      </header>
      <div class="row row-eq-height justify-content-center">
         <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
               <i class="fa fa-diamond"></i>
               <div class="card-body">
                  <h5 class="card-title">Awesome Support</h5>
                  <p class="card-text">We have an outstanding support team, and we will help you free of charge. Your website will be up and running in just 10 minutes.</p>
                  <a href="#" class="readmore">Read more </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
               <i class="fa fa-language"></i>
               <div class="card-body">
                  <h5 class="card-title">In-built Enquiry Form</h5>
                  <p class="card-text">Digicards provide enquiry form and all the Enquiry submitted by your target audience will be notified on your registered email with digicards.</p>
                  <a href="#" class="readmore">Read more </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
               <i class="fa fa-object-group"></i>
               <div class="card-body">
                  <h5 class="card-title">Unlimited Service & Products</h5>
                  <p class="card-text">You can add unlimited products and services in your Digicards which can be viewed in a professional format by your target audience. </p>
                  <a href="#" class="readmore">Read more </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
               <i class="fa fa-object-group"></i>
               <div class="card-body">
                  <h5 class="card-title">Multiple Themes</h5>
                  <p class="card-text">You can customize and change your Digital Business Card design with us. We provide amazing templates which will suit your branding needs. </p>
                  <a href="#" class="readmore">Read more </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
               <i class="fa fa-object-group"></i>
               <div class="card-body">
                  <h5 class="card-title">Easy to Share</h5>
                  <p class="card-text">Share your cards by using your favorite messaging apps.Send your card as a vCard and xdgc. </p>
                  <a href="#" class="readmore">Read more </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row counters" data-aos="fade-up" data-aos-delay="100">
         <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
         </div>
         <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
         </div>
         <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">
               1,364</span>
            <p>Hours Of Support</p>
         </div>
         <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
         </div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->
<!-- ======= Contact Section ======= -->
<section id="contact">
   <div class="container-fluid" data-aos="fade-up">
      <div class="section-header">
         <h3>Contact Us</h3>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="row">
               <div class="col-md-5 info">
                  <i class="ion-ios-location-outline"></i>
                  <p>A108 Adam Street, NY 535022</p>
               </div>
               <div class="col-md-4 info">
                  <i class="ion-ios-email-outline"></i>
                  <p>info@digitalcards.tech</p>
               </div>
               <div class="col-md-3 info">
                  <i class="ion-ios-telephone-outline"></i>
                  <p>+1 5589 55488 55</p>
               </div>
            </div>
            <div class="form">
               <form action="{{route('saveContact')}}" method="post" role="form" class="php-email-form">
                   {{csrf_field()}}
                  <div class="form-row">
                     <div class="form-group col-lg-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                     </div>
                     <div class="form-group col-lg-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-4">
                            <select class="selectpicker" required name="country_code" data-live-search="true" data-rule="minlen:1" data-msg="Please select country code">
                                <option class="text-center" value="">Select Country Code</option>
                                @if (!empty($countryData))
                                    @foreach($countryData AS $countryDetail)
                                    <option class="text-center" value="{{$countryDetail['dial_code']}}" 
                                        @if($countryDetail['dial_code'] === $selectedCode) selected @endif>
                                        {{$countryDetail['name']}} ({{$countryDetail['dial_code']}})
                                    </option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="validate"></div>
                        </div>
                        
                        <div class="col-md-8">
                           <input type="number" class="form-control" name="phone_number" id="subject" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter at least 10 digit of phone number" />
                           <div class="validate"></div>
                        </div>
                     </div>

                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                     <div class="validate"></div>
                  </div>
                  <div class="form-group">
                     <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                     <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                     <div class="loading">Loading</div>
                     <div class="error-message"></div>
                     <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Contact Section -->
@endsection

@section('custom_script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="
sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
