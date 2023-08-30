<!DOCTYPE html>
<html lang="en">
<head>
    <title>@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif</title>
    <meta name="theme-color" content="#F39C12">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">

    <meta name="author" content="digitalcards.tech">
    <meta name="subject" content="Website">
    <meta name="copyright" content="Digital Card">
    <meta name="classification" content="Digital Card">

    <meta property="og:title" content="@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif">
    <meta content="{{$companyInfoData->seo_description}}" name="description">
    <meta content="{{$companyInfoData->seo_keyword}}" name="keywords">
    <meta property="og:url" content="{{url('vc')}}/{{$userObj->slug}}">

    @if(!empty($companyInfoData->company_logo))
    <meta property="og:image" itemprop="image" content="{{url('public')}}/{{$companyInfoData->company_logo}}">
    @elseif(!empty($userObj->profile_pic))
    <meta property="og:image" itemprop="image" content="{{url('public')}}/{{$userObj->profile_pic}}">
    @else
    <meta property="og:image" itemprop="image" content="{{url('public')}}/upload/user_profile.jpg">
    @endif


    <meta property="og:type" content="website">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">

    @if(!empty($companyInfoData->company_logo))
    <link rel="icon" href="{{url('public')}}/{{$companyInfoData->company_logo}}" type="image/png" sizes="16x16">
    @elseif(!empty($userObj->profile_pic))
    <link rel="icon" href="{{url('public')}}/{{$userObj->profile_pic}}" type="image/png" sizes="16x16">
    @else
    <link rel="icon" href="{{url('public')}}/upload/user_profile.jpg" type="image/png" sizes="16x16">
    @endif

    <!-- Twitter Meta Tags -->
    <meta name="twitter:image" content="{{url('public')}}/{{$companyInfoData->company_logo}}">
    <meta property="twitter:url" content="{{url('vc')}}/{{$userObj->slug}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif">
    <meta name="twitter:description" content="{{$companyInfoData->company_info}}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/frontView/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/card.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/slick-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/third-party.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/custom-vcard.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/p/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <div class="container main-section">


            <div class="row d-flex justify-content-center">


                <div class="main-bg p-0 collapse show allSection">

                    <div class="main-banner position-relative">

          @if($userConfigObj->isShowNoOfVisit == '1')
          <div class="p-1"></div>
          <div class="views-label text-center"><i class="fa fa-eye" aria-hidden="true"></i> Views: <b>{{$userObj->no_visit}}</b>
          </div>
          @endif

                        @if(!empty($companyInfoData->company_logo))
                        <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="banner-img" />
                        @endif

                    </div>

                    <div class="container">
                        <div class="main-profile">
                            <div class="profile-img py-8">
                                <div class="mb-4">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-profile">
                                            @if(!empty($userObj->profile_pic))
                                            <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="img-fluid rounded-circle" />
                                            @else
                                              <img src="{{url('public')}}/upload/user_profile.jpg" class="img-responsive" alt="">
                                            @endif
                                        </div>

                                        <div class="ms-3">
                                              @if (!empty($companyInfoData->company_name))
                                            <h4 class="big-title">{!! $companyInfoData->company_name !!}</h4>
                                            <p class="small-title mb-0">{!! $userObj->name !!}</p>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="pt-2 profile-description">{!! $companyInfoData->company_profession !!}</span>
                                            </div>
                                              @else
                                            <h4 class="big-title">{!! $userObj->name !!}</h4>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="pt-2 profile-description">{!! $companyInfoData->company_profession !!}</span>
                                            </div>
                                            @endif

                                        </div>
                                    </div>
<!--                                     <div class="d-flex align-items-center mb-5">
                                        <span class="pt-2 profile-description">{!! $companyInfoData->company_profession !!}</span>
                                    </div> -->
                                    <div class="social-section mb-4">
                                        <div class="container px-0">
                                            <div class="social-icon d-flex justify-content-center"  >
                                                <div class="pro-icon">

                                                @if (count($socialMediaData) > 0)
                @foreach($socialMediaData as $socialMediaDetail)
                  @if ($socialMediaDetail->type == 'fb')
                      <a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-button-facebook fab fa-facebook"></i></div></a>
                  @elseif($socialMediaDetail->type == 'in')
                  <a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-button-instagram fab fa-instagram"></i></div></a>
                    @elseif($socialMediaDetail->type == 'li')
                     <a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-button-linkedin fab fa-linkedin"></i></div></a>
                    @elseif($socialMediaDetail->type == 'tw')
                     <a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-button-twitter fab fa-twitter"></i></div></a>
                    @elseif($socialMediaDetail->type == 'pi')
                     <a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-button-facebook fab fa-pinterest"></i></div></a>
                    @elseif($socialMediaDetail->type == 'yt')
                     <a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-button-facebook fab fa-youtube"></i></div></a>
                  @endif
                @endforeach
              @endif
                                               </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="card border-0 bg-transparent h-100">
                                            <div class="event-icon text-center h-100">

                                                <a href="mailto:{{$userObj->email}}" target="_blank" class="mb-0 event-text text-decoration-none">
                                                <div>
                                                    <img src="{{asset('public/visitingCard/bussinessCard/p/img/email.png')}}" class="img-fluid mb-2" />
                                                </div>
                                                </a>
                                                <br />

                                                <a href="mailto:{{$userObj->email}}" target="_blank" class="mb-0 event-text text-decoration-none">
                                                <span class="event-title">E-address</span>
                                                <p class="mb-0 event-text">
                                                    {{$userObj->email}}
                                                </p>
                                                </a>
                                                @if (!empty($userObj->alternative_email))
                                                <a href="mailto:{{$userObj->alternative_email}}" target="_blank" class="mb-0 event-text text-decoration-none">
                                                <p class="mb-0 event-text">{{$userObj->alternative_email}}</p>
                                                </a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="card border-0 bg-transparent h-100">
                                            <div class="event-icon text-center h-100">
                                                <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" class="mb-0 event-text text-decoration-none">
                                                <div>
                                                    <img src="{{asset('public/visitingCard/bussinessCard/p/img/WhatsApp-icon.png')}}" class="img-fluid mb-2" />
                                                </div>
                                                </a>
                                                <br />
                                                <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" class="mb-0 event-text text-decoration-none">
                                                <span class="event-title">Whatsapp Number</span>
                                                <p class="mb-0 event-text">{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}
                                                </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="card border-0 bg-transparent h-100">
                                            <div class="event-icon text-center h-100">
                                                <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="mb-0 event-text text-decoration-none">
                                                <div>
                                                    <img src="{{asset('public/visitingCard/bussinessCard/p/img/phone.png')}}" class="img-fluid mb-2" />
                                                </div>
                                                </a>
                                                <br />
                                                <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="mb-0 event-text text-decoration-none">
                                                <span class="event-title">Mobile Number</span>
                                                <p class="mb-0 event-text">{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}
                                                </p>
                                                </a>
                                                @if(!empty($companyInfoData->country_landline))
                                                <a href="tel:{{$companyInfoData->country_landline}}" class="mb-0 event-text text-decoration-none">

                                                    {{$companyInfoData->country_landline}}</a>

                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                  @if (!empty($companyInfoData->company_address))               
                                    <div class="col-sm-6 mb-4">
                                        <div class="card border-0 bg-transparent h-100">
                                            <div class="event-icon text-center h-100">
                                                <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank">
                                                <div>
                                                    <img src="{{asset('public/visitingCard/bussinessCard/p/img/location.png')}}" class="img-fluid mb-2" />
                                                </div>
                                                </a>
                                                <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank" class="mb-0 event-text text-decoration-none">
                                                <span class="event-title">Location</span>
                                                <p class="mb-0 event-text">{!!$companyInfoData->company_address!!}</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-4 mb-13">
                        <div class="main-Qr-section mb-5">
                            <div class="qr-header-title">
                                <h4 class="mb-4 text-center">{{$userConfigObj->aboutLabel}}</h4>
                            </div>
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="text-center mb-4">
                                        {!!$companyInfoData->company_info!!}
                                    </div>
            @if(!empty($companyInfoData->broucher_file))
                <div class="qr-header-title">
                    <h4 class="mb-4 text-center">Documents</h4>
                </div>

                <div class="dis_flex text-center">
                  <a class="download btn btn-primary" href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download="">
                    <div class="big_btns" style="width:300px">
                        <div class="pdf-number">
                          <i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                          @if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-download"></i>
                      </div>
                    </div>
                  </a>  
              </div> 
            <div class="dis_flex"></div>
            @endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-4 mb-13">
                        <div class="main-Qr-section mb-5">
                            <div class="qr-header-title">
                                <h4 class="mb-4 text-center">QR Code</h4>
                            </div>
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="text-center mb-4">
                                      {!! QrCode::size(250)->generate($vistingUrl) !!}

                                    </div>
                                    <div class="text-center">
                                    @if(!empty($companyInfoData->company_logo))
                                        <div class="qr-section">
                                            <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="qr-logo rounded-circle" />

                                        </div>
                                    @endif
                                        <p>{{$vistingUrl}}</p>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="gallery-main-section mb-10 mt-0">
                            <div class="header-gallery">
                                <h2 class="mb-4 text-center">Our Products & Service</h2>
                            </div>



                            <div class="slick-carousel" style="width:100%">
                              @foreach($galleryData as $galleryDetail)
                              <div>
                                <div class="slide-content profile-pic">
                                  <img onclick="openImageModal(this)" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" alt="profile" class="img-responsive profile-pic-img">
                                </div>
                              </div>
                              @endforeach

                            </div>

                        </div>
                    </div>
<!--                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <iframe id="video" src="//www.youtube.com/embed/Q1NKMPhP8PY" class="w-100" height="315"> </iframe>
                                </div>
                            </div>
                        </div>
                    </div>

 -->

@if(count($videosData) > 0)

<div class="container mb-10 mt-10">
    <div class="contactus-section position-relative">

  <div class="separator"></div>
  <div class="section-content-wrapper">
    <div class="header-title">
        <h4 class="text-center mb-4">Videos</h4>
    </div>

     <div class="section-header-underline"></div>

      @foreach($videosData as $videosDetail)
    <div class="order_box slide-content profile-pic">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item " src="{{$videosDetail->video_path}}" title="{{$videosDetail->title}}" allowfullscreen ng-show="showvideo" frameborder="0" ></iframe>
     <h4 class="section-header">{{$videosDetail->title}}</h4>
    </div>

  </div>
    @endforeach
</div>
</div>
</div>
@endif


@if(count($paymentMasterData) > 0)

<div class="container mt-4 mb-13">
    <div class="main-Qr-section mb-5">

    <div class="qr-header-title">
        <h4 class="text-center mb-4">Payment</h4>
    </div>

    <div class="section-header-underline"></div>

      @foreach($paymentMasterData as $paymentMasterDetail)
        @if ($paymentMasterDetail->type == 'bank')

        <div class="big-title">
            <h4 class="text-center mb-4 text-left">Bank Detail</h4><hr/>
        </div>

        <div class="section-header-underline"></div>

        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Bank Name: {{$paymentMasterDetail->bank_name}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Account Holder Name: {{$paymentMasterDetail->account_holder_name}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Account Number: {{$paymentMasterDetail->account_no}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Account Type: {{ucwords($paymentMasterDetail->account_type)}} Account</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; IFSC code: {{$paymentMasterDetail->ifsc_code}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Branch Name: {{$paymentMasterDetail->branch_name}}</h3>

        @else

        <div class="qr-header-title">
            <h5 class="text-center mb-4 tet-bold">UPI Detail</h5><hr/>
        </div>

        <div class="section-header-underline"></div>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; {{ucwords($paymentMasterDetail->type)}} Number : {{$paymentMasterDetail->account_no}}</h3>
        @if(!empty($paymentMasterDetail->qr_img))
            <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" class="img-thumbnail" style="width: 100%;">
        @endif

        @endif
      @endforeach

     <div class="section-close"></div>
</div>
</div>
@endif

                    @if($userConfigObj->isShowEnquiry == '1')
                    <div class="container mb-10 mt-10">
                        <div class="contactus-section position-relative">
                            <div class="header-title">
                                <h4 class="text-center mb-4">Enquiries</h4>
                            </div>
                            <div class="main-contact">
                                <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
                                <meta name="csrf_token" content="{{ csrf_token() }}" />
                                <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
                                <input type="hidden" id="companyEmail" value="admin.admin@gmail.com">
                                    <div class="row">
                                        <label for="basic-url" class="form-label mb-0">Your Name</label>
                                        <input type="text" name="enquiryName" data-parsley-trigger="change" id="enquiryName" placeholder="Enter Full Name" pattern="[a-zA-Z ]*$" class="form-control bg-transparent border-end-0" required="">
                                    </div>

                                    <div class="row">
                                        <label for="basic-url" class="form-label mb-0">Email</label>
                                        <input type="email" name="email" id="email" data-parsley-trigger="change" placeholder="Enter Email" class="form-control bg-transparent border-end-0">
                                    </div>

                                    <div class="row">
                                        <label for="basic-url" class="form-label mb-0">Phone</label>
                                        <input type="text" class="form-control bg-transparent border-end-0" data-parsley-length-message="Contact should have (4-10) digits." data-parsley-type-message="Contact should have only digits." data-parsley-type="number" data-parsley-length="[4, 10]" name="phoneNumber" id="phoneNumber" required="" placeholder="Enter Phone Number">
                                    </div>

                                    <div class="row">
                                        <label for="basic-url" class="form-label mb-0">Your Message</label>
                                        <textarea name="message" id="message" required="" placeholder="Enter Message" class="form-control bg-transparent border-end-0"></textarea>

                                    </div>

                                    <div class="form-group row">
                                        <input type="submit" class="btn btn-primary pt-4" id="inquiry-send" value="Send">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    @endif


                    <div class="w-100 d-flex justify-content-center sticky-vcard-div">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf" class="addphonebook vcard-btn-group vcard7-sticky-btn rounded-0 px-2 ps-5 py-1">
                                <i class="fas fa-download fs-4"></i>
                            </a>
<!--                             <button type="button" class="vcard7-share vcard-btn-group vcard7-sticky-btn rounded-0 px-2 py-1">
                                <i class="fas fa-share-alt fs-4"></i>
                            </button>
                            <button type="button" class="vcard-btn-group vcard7-sticky-btn rounded-0 px-2 py-1 copy-referral-btn" data-id="05OWSXIUJZ">
                                <i class="fa-regular fa-copy fs-4"></i>
                            </button>
 -->                            <a class="vcard-btn-group vcard7-sticky-btn rounded-0 px-2 py-1 copy-referral-btn" href="{{url('downloadQrCode')}}/{{$userObj->slug}}" >
                                <i class="fas fa-qrcode fs-4"></i>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="https://js.stripe.com/v3/"></script>
        <script src="{{asset('public/visitingCard/bussinessCard/p/js/front-third-party.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/visitingCard/bussinessCard/p/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/visitingCard/bussinessCard/p/js/slick.min.js')}}" type="text/javascript"></script>
        <script></script>
        <script>
            let stripe = "";
            $(".testimonial-vcard").slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>',
                responsive: [
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                        },
                    },
                ],
            });
        </script>
        <script>
            $(".slick-carousel").slick({
                dots: true,
                infinite: true,
                arrows: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                slidesToScroll: 1,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>',
                responsive: [
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                        },
                    },
                ],
            });

            $(".blog-slider").slick({
                dots: true,
                infinite: true,
                arrows: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                slidesToScroll: 1,
                prevArrow: '<button class="product-slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="product-slide-arrow next-arrow"></button>',
            });
        </script>
        <script>
            $(".product-vcard").slick({
                dots: true,
                infinite: true,
                arrows: true,
                speed: 300,
                slidesToShow: 2,
                autoplay: true,
                slidesToScroll: 1,
                prevArrow: '<button class="slide-arrow-blog prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow-blog next-arrow"></button>',
                responsive: [
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                        },
                    },
                ],
            });
        </script>
        <script src="{{asset('public/visitingCard/bussinessCard/p/js/messages.js')}}?v=1"></script>
        <script src="{{asset('public/visitingCard/bussinessCard/p/js/helpers.js')}}?v=1"></script>
        <script src="{{asset('public/visitingCard/bussinessCard/p/js/custom.js')}}?v=1"></script>
        <script src="{{asset('public/visitingCard/bussinessCard/p/js/custom-vcard.js')}}?v=1"></script>
        <script src="{{asset('public/visitingCard/bussinessCard/p/js/lightbox.js')}}?v=1"></script>


   <!-- The image Modal -->
   <div id="imageModal" class="modal">
      <span class="close" id="imageModalClose">×</span>
      <img class="modal-content fadeIn" id="img01">
      <div id="caption" style="text-align: center;"></div>
      <div id="gallery_description" style="text-align: center;"></div>
   </div>

    </body>

<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>

<input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

<script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

</html>
