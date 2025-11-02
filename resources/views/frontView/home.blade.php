@extends('frontView.layouts.app')

@section('custom_style')
<link href="{{ asset('public/frontView/minify/css/custom.min.css') }}?v={{date('YmdHis')}}" rel="stylesheet">
<style>
    /* Hero Section */
    .hero {
        padding: 6rem 0 4rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        top: -300px;
        right: -200px;
        animation: float 20s infinite ease-in-out;
    }

    @keyframes float {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        50% { transform: translate(50px, 50px) rotate(180deg); }
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .hero-content h5 {
        font-size: 1.25rem;
        color: rgba(255,255,255,0.9);
        margin-bottom: 2rem;
    }

    .btn-get-started {
        background: white;
        color: var(--primary);
        padding: 1rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        display: inline-block;
    }

    .btn-get-started:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(255,255,255,0.3);
        color: var(--primary);
    }

    .card-mockup {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        animation: cardFloat 6s infinite ease-in-out;
        text-align: center;
    }

    @keyframes cardFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }

    .card-profile {
        width: 120px;
        height: 120px;
        background: var(--gradient);
        border-radius: 50%;
        margin: 0 auto 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: white;
    }

    .card-details {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 2px solid #f1f5f9;
    }

    .card-detail-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        margin-bottom: 0.5rem;
        background: #f8fafc;
        border-radius: 10px;
        font-size: 0.875rem;
        color: var(--gray);
    }

    /* About Section */
    #about {
        padding: 6rem 0;
        background: var(--light);
    }

    .section-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-header h3 {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
        color: var(--dark);
    }

    .section-header p {
        font-size: 1.125rem;
        color: var(--gray);
        max-width: 700px;
        margin: 0 auto;
    }

    .about-content p {
        margin-bottom: 2rem;
        line-height: 1.8;
        color: var(--gray);
    }

    .icon-box {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding: 1.5rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        transition: all 0.3s;
    }

    .icon-box:hover {
        transform: translateX(10px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }

    .icon-box .icon {
        width: 50px;
        height: 50px;
        background: var(--gradient);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .icon-box .title {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 0;
    }

    .icon-box .title a {
        color: var(--dark);
        text-decoration: none;
    }

    .about-img img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    }

    /* Services/Products Section */
    #services {
        padding: 6rem 0;
        background: white;
    }

    .pricing-card {
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 20px;
        padding: 2.5rem;
        transition: all 0.3s;
        height: 100%;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        border-color: var(--primary);
    }

    .pricing-card h4 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: var(--dark);
        text-align: center;
    }

    .pricing-card select {
        width: 100%;
        padding: 0.75rem;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
    }

    .pricing-card .description {
        color: var(--gray);
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .create_custom_card {
        width: 100%;
        padding: 1rem;
        background: var(--gradient);
        color: white;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        text-align: center;
        text-decoration: none;
        display: block;
        transition: all 0.3s;
    }

    .create_custom_card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102, 102, 255, 0.3);
        color: white;
    }

    /* Why Us Section */
    #why-us {
        padding: 6rem 0;
        background: var(--light);
    }

    .feature-card {
        background: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        transition: all 0.3s;
        text-align: center;
        height: 100%;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .feature-card i {
        font-size: 3rem;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
    }

    .feature-card h5 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--dark);
    }

    .feature-card p {
        color: var(--gray);
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    .readmore {
        color: var(--primary);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s;
    }

    .readmore:hover {
        color: var(--primary-dark);
    }

    /* Counters */
    .counter-box {
        text-align: center;
        padding: 2rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }

    .counter-box span {
        font-size: 3rem;
        font-weight: 800;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: block;
        margin-bottom: 0.5rem;
    }

    .counter-box p {
        color: var(--gray);
        font-weight: 600;
        margin-bottom: 0;
    }

    /* Contact Section */
    #contact {
        padding: 6rem 0;
        background: var(--dark);
        color: white;
    }

    #contact .section-header h3 {
        color: white;
    }

    .map {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        height: 100%;
        min-height: 450px;
    }

    .map iframe {
        width: 100%;
        height: 100%;
        min-height: 450px;
        border: none;
    }

    .info-box {
        background: var(--dark-light);
        padding: 1.5rem;
        border-radius: 15px;
        text-align: center;
        height: 100%;
    }

    .info-box i {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 0.5rem;
    }

    .info-box p {
        color: rgba(255,255,255,0.8);
        font-size: 0.9rem;
        margin-bottom: 0;
    }

    .contact-form {
        background: var(--dark-light);
        padding: 2.5rem;
        border-radius: 20px;
    }

    .contact-form .form-control,
    .contact-form .form-select {
        padding: 1rem;
        border: 2px solid rgba(255,255,255,0.1);
        background: rgba(255,255,255,0.05);
        border-radius: 10px;
        color: white;
        transition: all 0.3s;
    }

    .contact-form .form-control:focus,
    .contact-form .form-select:focus {
        border-color: var(--primary);
        background: rgba(255,255,255,0.1);
        box-shadow: none;
        color: white;
    }

    .contact-form .form-control::placeholder {
        color: rgba(255,255,255,0.5);
    }

    .contact-form textarea {
        resize: vertical;
        min-height: 120px;
    }

    .captcha-img {
        display: inline-block;
        margin-right: 1rem;
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s;
    }

    .btn-warning:hover {
        background: #d97706;
    }

    .contact-form .btn-submit {
        width: 100%;
        padding: 1rem;
        background: var(--gradient);
        border: none;
        border-radius: 50px;
        color: white;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .contact-form .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102, 102, 241, 0.3);
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .hero {
            padding: 4rem 0 3rem;
        }

        .hero-content h1 {
            font-size: 2.5rem;
        }

        .section-header h3 {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .hero-content h1 {
            font-size: 2rem;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero" id="intro">
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1>AI-Powered <strong>Digital Business Cards</strong> for Modern Brands</h1>
                    <h5>Build, share, and grow your identity — smarter & faster.</h5>
                    <a href="#about" class="btn-get-started">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-mockup">
                    <div class="card-profile">👤</div>
                    <h3 class="mb-2 text-dark">Digital Business Card</h3>
                    <p class="text-muted">Professional & Modern</p>
                    <div class="card-details">
                        <div class="card-detail-item">📧 Email Address</div>
                        <div class="card-detail-item">📱 Phone Number</div>
                        <div class="card-detail-item">🌐 Website URL</div>
                        <div class="card-detail-item">📍 Location</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <header class="section-header">
            <h2>About DigitalCards</h2>
            <p>Our platform turns traditional business cards into interactive digital experiences — hosted online and shareable in seconds.</p>
        </header>

        <h2 class="text-center mb-3 fs-2 text-dark">Digital Business Card</h2>
        <h3 class="text-center mb-5 text-muted fs-4">Why Digital Cards?</h3>

        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-content">
                    <p>With DigitalCards, your business card becomes a <strong>smart microsite</strong> — accessible on any device, no app needed. Add contact info, portfolios, links, or QR/NFC support — all under your brand identity.</p>
                    
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-shopping-bag"></i></div>
                        <div>
                            <h4 class="title"><a href="">Your Digital Visiting Card</a></h4>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-image"></i></div>
                        <div>
                            <h4 class="title"><a href="">Mini Website for Start-Up</a></h4>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-chart-bar"></i></div>
                        <div>
                            <h4 class="title"><a href="">Fast Growth of your business</a></h4>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-cogs"></i></div>
                        <div>
                            <h4 class="title"><a href="">Business with Technology</a></h4>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-share-alt"></i></div>
                        <div>
                            <h4 class="title"><a href="">Easy to Share</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('public/frontView/assets/img/about-img.svg') }}" class="img-fluid" alt="about img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services/Products Section -->
<section id="services">
    <div class="container">
        <header class="section-header">
            <h3>Our Products</h3>
            <p>We Believe In Success, Your Success Is Our Success</p>
            <div class="row justify-content-center mt-4">
                <div class="col-md-4">
                    <select id="product-select-list" class="form-select">
                        @foreach($productData AS $key => $productDetail)
                        <option @if($key == 0) selected @endif value="{{$productDetail['product_id']}}">{{$productDetail['product_name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </header>

        @if(!empty($skuCustomPackage))
            @foreach($skuCustomPackage AS $productId => $skuCustomDetail)
            <div class="row g-4 sku-package-row" id="sku-package-row-{{$productId}}">
                @foreach($skuCustomDetail AS $detail)
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <h4>{{$detail['package_type_name']}}</h4>
                        <select class="form-select custom-duration">
                            <option value="">Select Duration</option>
                            @foreach($detail['duration'] AS $key => $duration)
                            <option value="{{$key}}" data-price="{{$detail['special_price']}}">{{$duration}}</option>
                            @endforeach
                        </select>
                        <div class="description">{!!$detail['description']!!}</div>
                        
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
                        <a class="create_custom_card" href="{{url('/register')}}">Create Your Card</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        @endif
    </div>
</section>

<!-- Why Us Section -->
<section id="why-us">
    <div class="container">
        <header class="section-header">
            <h3>Why choose us?</h3>
            <p>Marketing Is Key of Success, Create Your Brand Worldwide</p>
        </header>
        
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="fas fa-gem"></i>
                    <h5>Awesome Support</h5>
                    <p>We have an outstanding support team, and we will help you free of charge. Your website will be up and running in just 10 minutes.</p>
                    <a href="#" class="readmore">Read more →</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="fas fa-language"></i>
                    <h5>In-built Enquiry Form</h5>
                    <p>Digicards provide enquiry form and all the Enquiry submitted by your target audience will be notified on your registered email with digicards.</p>
                    <a href="#" class="readmore">Read more →</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="fas fa-cubes"></i>
                    <h5>Unlimited Service & Products</h5>
                    <p>You can add unlimited products and services in your Digicards which can be viewed in a professional format by your target audience.</p>
                    <a href="#" class="readmore">Read more →</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="fas fa-paint-brush"></i>
                    <h5>Multiple Themes</h5>
                    <p>You can customize and change your Digital Business Card design with us. We provide amazing templates which will suit your branding needs.</p>
                    <a href="#" class="readmore">Read more →</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="fas fa-share-alt"></i>
                    <h5>Easy to Share</h5>
                    <p>Share your cards by using your favorite messaging apps. Send your card as a vCard and xdgc.</p>
                    <a href="#" class="readmore">Read more →</a>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-6">
                <div class="counter-box">
                    <span data-toggle="counter-up">274</span>
                    <p>Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="counter-box">
                    <span data-toggle="counter-up">421</span>
                    <p>Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="counter-box">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Hours Of Support</p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="counter-box">
                    <span data-toggle="counter-up">18</span>
                    <p>Hard Workers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="section-header">
            <h3>Contact Us</h3>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="info-box">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>A108 Adam Street, NY 535022</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-box">
                            <i class="fas fa-envelope"></i>
                            <p>info@digitalcards.tech</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-box">
                            <i class="fas fa-phone"></i>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="{{route('saveContact')}}" method="post" id="contactFrm">
                        {{csrf_field()}}
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                            </div>
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col-md-4">
                                <select class="form-select" required name="country_code">
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
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone number"/>
                            </div>
                        </div>
                        <div class="mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                        </div>
                        <div class="mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="mt-3 d-flex align-items-center flex-wrap gap-2">
                            <div class="captcha-img"></div>
                            <a class="btn btn-warning" href="javascript:void(0)" onclick="refreshCaptcha()">Regenerate Captcha</a>
                        </div>
                        <div class="mt-3">
                            <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Enter captcha code" />
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn-submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('custom_script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
   $("#contactFrm").validate({
      rules: {
         name: {
            required:true,
            minlength:4,
            maxlength:100
         },
         email:{
            required:true,
            email:true,
         },
         subject:{
            required:true,
            minlength:4,
            maxlength:100
         },
         phone_number:{
            required:true,
            minlength:8
         },
         message:{
            required:true,
            minlength:4,
            maxlength:500
         },
         captcha:{
            required:true,
         }
      },
      messages: {
         name: {
            required:"Please enter name",
            minlength:"Please enter at least 4 Char",
            maxlength:"Please enter maximum 100 Char",
         },
         email:{
            required:"Please enter email",
         },
         subject:{
            required:"Please enter subject",
            minlength:"Please enter at least 4 Char",
            maxlength:"Please enter maximum 100 Char",
         },
         phone_number:{
            required:"Please enter phone number",
         },
         message:{
            required:"Please enter message",
            minlength:"Please enter at least 4 Char",
            maxlength:"Please enter maximum 500 Char",

         },
         captcha:{
            required:"Please enter captcha",
         }
      },
      errorPlacement: function (error, element) {
          // error.insertAfter(element.attr("name"));
          if (element.attr("name") == "captcha") {
              error.insertAfter(element.parent());
          }else{
              error.insertAfter(element);
          }
      },
      submitHandler: function(form) {
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                beforeSend : function() {
                },
                success: function(data) {
                    if(data.code == '0'){
                        toastr.success(data.msg)
                    }else{
                        toastr.error(data.msg)
                    }
                }
             })
      }
    }    );
</script>

<script>
refreshCaptcha()
function refreshCaptcha(){
$.ajax({
url: "{{route('generate-captcha')}}",
type: 'get',
  dataType: 'html',        
  success: function(json) {
    $('.captcha-img').html(json);
  },
  error: function(data) {
   toastr.error('Try Again.')
  }
});
}
</script>

@endsection
