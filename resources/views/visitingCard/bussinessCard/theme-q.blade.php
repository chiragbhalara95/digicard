<html lang="en">
   <head>
   <title>@if(!empty($companyInfoData->company_name)){{$companyInfoData->company_name}}@else{!! $userObj->name !!}@endif</title>

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

      <!-- Bootstrap CSS -->
      <link href="{{asset('public/visitingCard/bussinessCard/q/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/q/css/vcard8.css')}}">
      <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/q/css/custom-vcard.css')}}">
      <!-- <link href="{{asset('public/visitingCard/bussinessCard/q/css/vendor.css')}}" rel="stylesheet" type="text/css"> -->
      <!-- <link href="{{asset('public/visitingCard/bussinessCard/q/css/3rd-party.css')}}" rel="stylesheet" type="text/css"> -->
      <!-- <link href="{{asset('public/visitingCard/bussinessCard/q/css/3rd-party-custom.css')}}" rel="stylesheet" type="text/css"> -->
      <!-- <link href="{{asset('public/visitingCard/bussinessCard/q/css/all.min.css')}}" rel="stylesheet"> -->
      <!-- <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/q/css/slick.css')}}"> -->
      <!-- <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/q/css/slick-theme.css')}}"> -->
      <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
      <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&amp;family=Roboto&amp;display=swap" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <style>
        .parsley-required{
            color:red;
        }
        .parsley-length{
            color:red;
        }
        .vcard-eight .vcard-eight-heading {
          line-height: 24px;
        }
    </style>
  </head>

   <body>
    <input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

      <div class="container">

        <div class="vcard-eight main-content w-100 mx-auto overflow-hidden">
              <div class="vcard-eight__banner w-100 position-relative">
                  @if(!empty($companyInfoData->company_logo))
                  <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="img-fluid banner-image position-relative" alt="Company Logo">
                  @endif
                  <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 custom-language">
                 </div>
              </div>
              <div class="vcard-eight__profile d-flex align-items-center px-4 flex-column position-relative">
                 <div class="vcard-eight__avatar">
                  @if(!empty($userObj->profile_pic))  
                  <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="rounded-circle">
                  @else
                  <img src="{{url('public')}}/upload/user_profile.jpg" class="rounded-circle">
                  @endif   
                </div>

                 <div class="vcard-eight__position d-flex flex-column mx-4 position-relative">
                    <div class="d-flex flex-column">
                    @if (!empty($companyInfoData->company_name))
                       <h4 class="vcard-eight-heading fw-bold text-sm-start text-center">{!!$companyInfoData->company_name!!}</h4>
                       <h6 class="vcard-eight-heading fw-bold text-sm-start text-center">{!! $userObj->name !!}</h6>
                  @else
                     <h4 class="vcard-eight-heading fw-bold text-sm-start text-center">{!! $userObj->name !!}</h4>
                  @endif
                  <hr/>
                  <span class="avatar-designation text-white text-start text-center">@if(!empty($companyInfoData->company_profession)) ({{$companyInfoData->company_profession}}) @endif</span>

                  @if($userConfigObj->isShowNoOfVisit == '1')
                      <span class="avatar-designation text-white text-start text-center"><i class="fa fa-eye"></i> <span class="count"> View: {{$userObj->no_visit}}</span></span>
                  @endif

                      </div>
                 </div>
              </div>


              <div class="vcard-eight__social py-3 px-sm-3 px-2 position-relative">
                 <div class="social-icons d-flex justify-content-center pt-4 flex-wrap">

                 <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                  <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" target="_blank">
                      <i class="fa fa-phone icon fa-2x" title="Call"></i>
                      </a>
                  </span>

                  <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                      <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" target="_blank">
                          <i class="fa fa-whatsapp icon fa-2x" title="Whatsapp"></i>
                      </a>
                  </span>

                 @if (!empty($companyInfoData->company_address))
                     <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                    <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank">
                    <i class="fa fa-map-marker icon fa-2x" title="Map"></i>
                    </a>
                    </span>
                  @endif

                  <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                      <a href="mailto:{{$userObj->email}}" target="_blank"><i class="fa fa-envelope icon fa-2x" title="Mail"></i> </a>
                  </span>

                  @if(!empty($companyInfoData->company_website))
                  <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                      <a href="{{$companyInfoData->company_website}}" target="_blank"><i class="fa fa-globe icon fa-2x" title="Website"></i></a>
                  </span>
                  @endif

              @if (count($socialMediaData) > 0)
                  @foreach($socialMediaData as $socialMediaDetail)
                      @if ($socialMediaDetail->type == 'fb')
                          <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                          <a href="{{$socialMediaDetail->url}}" target="_blank">
                          <i class="fa fa-facebook facebook-icon icon fa-2x" title="Facebook"></i>
                          </a>
                          </span>
                      @elseif($socialMediaDetail->type == 'in')
                          <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                          <a href="{{$socialMediaDetail->url}}" target="_blank">
                          <i class="fa fa-instagram instagram-icon icon fa-2x" title="Instagram"></i>
                          </a>
                          </span>

                      @elseif($socialMediaDetail->type == 'li')
                          <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-linkedin icon fa-2x"></i></a> 
                          </span>
                      @elseif($socialMediaDetail->type == 'tw')
                          <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-twitter fa fa-twitter icon fa-2x"></i></a> 
                          </span>
                      @elseif($socialMediaDetail->type == 'pi')
                          <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-pinterest icon fa-2x"></i></a> 
                          </span>
                      @elseif($socialMediaDetail->type == 'yt')
                          <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-youtube icon fa-2x"></i></a> 
                          </span>
                      @endif
                  @endforeach
              @endif



                  </div>
                 <div class="vcard-eight__contact">
                    <div class="d-sm-flex justify-content-center mt-5 pb-5">
                    <a class="vcard-eight-btn mt-4 d-block btn text-white" href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf"><i class="fa fa-download me-2"></i>Save to Contacts</a>

                     @if (!empty($companyInfoData->company_name))
                     <a class="vcard-eight-btn mt-4 d-block btn text-white mr-5" style="margin-left: 1vw;" onclick="openShareModal(this, '{!! $companyInfoData->company_name !!}')"><i class="fa fa-share-alt shadow-button-icon"></i>&nbsp;Share</a>
                     @else
                     <a class="vcard-eight-btn mt-4 d-block btn text-white mr-5 " style="margin-left: 1vw;" onclick="openShareModal(this, '{!! $userObj->name !!}')"><i class="fa fa-share-alt shadow-button-icon"></i>&nbsp;Share</a>
                     @endif
               </div>

                 </div>
              </div>
              <div class="vcard-eight__event py-3 px-sm-4 px-3 mt-2 position-relative">
                 <div class="row">
                    <div class="col-12">
                       <div class="card event-card p-4">
                          <div class="row g-4">
                             <div class="col-sm-6 col-12">
                                <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                                  <a href="mailto:{{$userObj->email}}" class="text-white">
                                    <i class="fa fa-envelope icon fa-2x" title="Mail"></i>
                                  </a>
                                </div>
                                <div class="event-details">
                                   <span class="text-white text-center d-block mb-1">E-mail address</span>
                                   <h5 class="text-center mb-0 text-white"><a href="mailto:{{$userObj->email}}" class="text-white">{{$userObj->email}}</a>
                                   </h5>
                                </div>
                                      @if (!empty($userObj->alternative_email))
                                <div class="event-details">
                                   <h5 class="text-center mb-0 text-white"><a href="mailto:{{$userObj->alternative_email}}" class="text-white">{{$userObj->alternative_email}}</a>
                                   </h5>
                                </div>
                                          @endif


                             </div>
                             <div class="col-sm-6 col-12">

                                  <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                                      <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="text-white">
                                          <i class="fa fa-phone icon fa-2x" title="Call"></i>
                                      </a>
                                  </div>

                                  <div class="event-details">
                                      <span class="text-white text-center d-block mb-1">Mobile Number</span>
                                      <h5 class="text-center mb-0 text-white"><a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="text-white">{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}</a>
                                      </h5>
                                  </div>
                             </div>

                             @if(!empty($companyInfoData->country_landline))
                             <div class="col-sm-6 col-12">
                                  <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                                      <a href="tel:{{$companyInfoData->country_landline}}" class="text-white">
                                          <i class="fa fa-phone icon fa-2x" title="Call"></i>
                                      </a>
                                  </div>

                                  <div class="event-details">
                                      <span class="text-white text-center d-block mb-1">Mobile Number</span>
                                      <h5 class="text-center mb-0 text-white"><a href="tel:{{$companyInfoData->country_landline}}" class="text-white">{{$companyInfoData->country_landline}}</a>
                                      </h5>
                                  </div>
                              </div>
                              @endif

                             

                  @if (!empty($companyInfoData->company_address))
                      <div class="col-sm-6 col-12">
                          <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                              <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank">
                                  <i class="fa fa-map-marker icon fa-2x" title="Map"></i>
                              </a>
                          </div>
                          <div class="event-details">
                              <span class="text-white text-center d-block mb-1">Location</span>
                              <h5 class="text-center mb-0 text-white">{!! $companyInfoData->company_address !!}</h5>
                          </div>
                      </div>
                      @endif

                          </div>
                       </div>
                    </div>
                 </div>
              </div>

  <div class="vcard-eight__service py-4 position-relative px-sm-4 px-3 vcard-eight__contact">
   <div class="container">
      <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">Scan QR Code for share your digital cards</h3>
        <div class="full-divider"></div>
          <div class="text text-center" style="margin-top:1%;text-align: center;">
          {!! QrCode::size(250)->generate($vistingUrl) !!}
            <p>{{$vistingUrl}}</p>
            <a class="vcard-eight-btn mt-4 d-block btn text-white" href="{{url('downloadQrCode')}}/{{$userObj->slug}}" >Download QR Code &nbsp;<i class="fa fa-download"></i></a>  

      </div>
    </div>
  </div>

              <div class="vcard-eight__service py-4 position-relative px-sm-4 px-3">
                 <div class="container">
                     <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">{{$userConfigObj->aboutLabel}}</h4>
                     <div class="row mt-3 service-bg bg-white d-flex justify-content-center">
                          <div class="col-sm-6 col-12 p-3">
                                <div style="text-align: justify;">{!!$companyInfoData->company_info!!}</div>
                                  @if(!empty($companyInfoData->broucher_file))
                                  <div class="vcard-eight__contact">
                                      <div class="d-sm-flex justify-content-center mt-5 pb-5">
                                      <a class="vcard-eight-btn mt-4 d-block btn text-white" href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download=""><i class="fa fa-download me-2"></i>Download PDF</a>

                                      </div>
                                  </div>
                                  @endif

                          </div>

                      </div>
                  </div>

              </div>

              @if($galleryData->count() > 0)
              <div class="vcard-eight__service py-4 position-relative px-sm-4 px-3">
                 <div class="container">
                    <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">Gallery</h4>

                    <div class="row mt-3 service-bg bg-white d-flex justify-content-center">

                    @foreach($galleryData as $galleryDetail)
                    <div class="col-sm-6 col-12 p-3">
                          <div class="card service-card px-3 py-0 h-100 border-0">

                             <div class="service-image d-flex justify-content-center align-items-center rounded-circle mx-auto">
                                <img alt="{{$galleryDetail->title}}" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" class="rounded-circle" description="{{$galleryDetail->description}}"
>
                             </div>

                             <div class="service-details mt-3">
                                <h4 class="service-title text-center">{{$galleryDetail->title}}</h4>
                                <!-- <p class="service-paragraph mb-0 text-center">
                                   WE ARE PROVIDE ALL FINANCIAL PRODUCT OF CLIENT'S NEED FOR CREATING WEALTH
                                </p> -->

                                @if ($galleryDetail->special_price > 0 && $galleryDetail->mrp_price > $galleryDetail->special_price)
                                      <span class="purchase-form__price purchase-form__price--before-after-price t-heading -size-xs h-pull-right">
                                              <span class="js-renewal__price t-currency purchase-form__renewal-price purchase-form__renewal-price--strikethrough">₹{{$galleryDetail->mrp_price}}</span>
                                          <b class="t-currency">
                                              <span class="js-support__price">₹{{$galleryDetail->special_price}}</span>
                                          </b>
                                          </span>
                                  @elseif ($galleryDetail->mrp_price > 0)
                                      <span class="purchase-form__price purchase-form__price--before-after-price t-heading -size-xs h-pull-right">
                                          <b class="t-currency">
                                              <span class="js-support__price">₹{{$galleryDetail->mrp_price}}</span>
                                          </b>
                                          </span>

                                  @endif

                                  @if(!empty($galleryDetail->links))
                                      <a href="{{$galleryDetail->links}}" target="_blank" class="btn btn-sm btn-warning"><i class="fa fa-link"></i></a> 
                                      @endif
                                      @if(!empty($galleryDetail->doc_url))
                                      <a href="{{url('public/upload/product-doc')}}/{{$galleryDetail->doc_url}}" target="_blank" class="btn btn-sm  btn-primary" download><i class="fa fa-download"></i></a> 
                                      @endif
                                      <div class="dis_flex">
                                      <a class="addphonebook" href='https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text=Enquery for product: {{urlencode($galleryDetail->title)}} Image:{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}' target='_blank'>
                                      <div class="big_btns">Enquiry Now</i></div>
                                      </a>
                                                  </div>


                              </div>

                          </div>
                      </div>
                      @endforeach

                  </div>
                 </div>
              </div>
              @endif

              <!-- <div class="vcard-eight__service py-4 position-relative px-sm-4 px-3">
                 <div class="container">
                    <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">Our Service</h4>
                    <div class="row mt-3 service-bg bg-white d-flex justify-content-center">
                       <div class="col-sm-6 col-12 p-3">
                          <div class="card service-card px-3 py-0 h-100 border-0">
                             <div class="service-image d-flex justify-content-center align-items-center rounded-circle mx-auto">
                                <img src="logo.png" class="rounded-circle" alt="ALL FINANCIAL SERVICE">
                             </div>
                             <div class="service-details mt-3">
                                <h4 class="service-title text-center">ALL FINANCIAL SERVICE</h4>
                                <p class="service-paragraph mb-0 text-center">
                                   WE ARE PROVIDE ALL FINANCIAL PRODUCT OF CLIENT'S NEED FOR CREATING WEALTH
                                </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>

              <div class="vcard-eight__product py-4 position-relative px-sm-4 px-3">
                 <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">
                    Products
                 </h4>
                 <div class="row g-3 product-slider mt-2 slick-initialized slick-slider slick-dotted">
                    <div class="slick-list draggable">
                       <div class="slick-track" style="opacity: 1; width: 3920px; transform: translate3d(-1120px, 0px, 0px);">
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Currency.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Currency</h4>
                                   <p class="mb-2 text-white">
                                      - Trading in Currency Market
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Others.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Other Products</h4>
                                   <p class="mb-2 text-white">
                                      - Bonds
                                      - NCDs
                                      - Corporate FDs
                                      - IPOs
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Stock-market.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">EQUITY</h4>
                                   <p class="mb-2 text-white">
                                      - PMS
                                      - MODEL PORTFOLIO
                                      - FREE PORTFOLIO RESTRUCTRING
                                      - STOCKS
                                      - MUTUAL FUNDS / SIP
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Insurance-01.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">INSURANCE</h4>
                                   <p class="mb-2 text-white">
                                      - CAR INSURANCE
                                      - LIFE INSURANCE
                                      - TERM PLAN
                                      - PROPERTY INSURANCE
                                      - HEALTH INSURANCE
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Real-Estate-01.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">REAL ESTATE</h4>
                                   <p class="mb-2 text-white">
                                      We are doing exclusive deals in bank siege properties at affordable prices.
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="/Commodity.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Commodity</h4>
                                   <p class="mb-2 text-white">
                                      - Gold
                                      - Silver
                                      - Base Metal
                                      - Agricommodity
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Currency.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Currency</h4>
                                   <p class="mb-2 text-white">
                                      - Trading in Currency Market
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Others.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Other Products</h4>
                                   <p class="mb-2 text-white">
                                      - Bonds
                                      - NCDs
                                      - Corporate FDs
                                      - IPOs
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Stock-market.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">EQUITY</h4>
                                   <p class="mb-2 text-white">
                                      - PMS
                                      - MODEL PORTFOLIO
                                      - FREE PORTFOLIO RESTRUCTRING
                                      - STOCKS
                                      - MUTUAL FUNDS / SIP
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Insurance-01.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">INSURANCE</h4>
                                   <p class="mb-2 text-white">
                                      - CAR INSURANCE
                                      - LIFE INSURANCE
                                      - TERM PLAN
                                      - PROPERTY INSURANCE
                                      - HEALTH INSURANCE
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Real-Estate-01.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">REAL ESTATE</h4>
                                   <p class="mb-2 text-white">
                                      We are doing exclusive deals in bank siege properties at affordable prices.
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Commodity.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Commodity</h4>
                                   <p class="mb-2 text-white">
                                      - Gold
                                      - Silver
                                      - Base Metal
                                      - Agricommodity
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Currency.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Currency</h4>
                                   <p class="mb-2 text-white">
                                      - Trading in Currency Market
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                          <div class="col-6 slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" tabindex="-1" style="width: 268px;">
                             <div class="card product-card p-3 border-0 w-100">
                                <div class="product-profile">
                                   <img src="Others.jpg" alt="profile" class="w-100" height="208px">
                                </div>
                                <div class="product-details mt-3">
                                   <h4 class="text-white">Other Products</h4>
                                   <p class="mb-2 text-white">
                                      - Bonds
                                      - NCDs
                                      - Corporate FDs
                                      - IPOs
                                   </p>
                                   <span class="text-white">N/A</span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <ul class="slick-dots" style="" role="tablist">
                       <li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="-1">1</button></li>
                       <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button></li>
                       <li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="0" aria-selected="true">3</button></li>
                       <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 3" tabindex="-1">4</button></li>
                       <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 3" tabindex="-1">5</button></li>
                       <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 3" tabindex="-1">6</button></li>
                    </ul>
                 </div>
              </div> -->

              @if(count($paymentMasterData) > 0)

              @foreach($paymentMasterData as $paymentMasterDetail)
                  @if ($paymentMasterDetail->type == 'bank')
                  <div class="vcard-eight__qr-code py-4 position-relative px-sm-8 px-6">
                      <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">Bank Account Details:</h4>
                      <table class="about-tbl text text-white" style="margin-left:15%">
                      <tbody>
                      <tr>
                          <td width="50%" class="td-label">Bank Name</td>
                          <td >: </td>
                          <td > {{$paymentMasterDetail->bank_name}} </td>
                      </tr>
                      <tr>
                          <td width="50%" class="td-label">Account Holder Name</td>
                          <td>: </td>
                          <td> {{$paymentMasterDetail->account_holder_name}} </td>
                      </tr>
                      <tr>
                          <td width="50%" class="td-label">Account Number</td>
                          <td >: </td>
                          <td > {{$paymentMasterDetail->account_no}} </td>
                      </tr>
                      <tr>
                          <td width="50%" class="td-label">Account Type</td>
                          <td>: </td>
                          <td> {{ucwords($paymentMasterDetail->account_type)}} Account </td>
                      </tr>
                      <tr>
                          <td width="50%" class="td-label">IFSC code</td>
                          <td>: </td>
                          <td> {{$paymentMasterDetail->ifsc_code}} </td>
                      </tr>
              <tr>
                <td width="50%" class="td-label">Branch Name</td>
                <td >: </td>
                <td > {{$paymentMasterDetail->branch_name}} </td>
              </tr>

                      </tbody>
                  </table>

                  </div>
                  @else
                  <div class="vcard-eight__qr-code py-4 position-relative px-sm-4 px-3">
                      <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">QR Code</h4>
                      <p class="text text-white text-center">
                      <b>{{ucwords($paymentMasterDetail->type)}} Number</b>
                      </p>
                      <p class="text text-white text-center">
                      {{$paymentMasterDetail->account_no}}</p>
                      <div class="card qr-code-card justify-content-center align-items-center px-sm-3 px-4 pt-15 pb-10 position-relative w-100 mx-auto">
                          <!-- <div class="qr-profile mb-3 d-flex justify-content-center position-absolute top-0">
                              
                              <img src="Picsart_22-12-26_10-45-54-610.png" alt="qr profile" class="rounded-circle">
                          </div> -->
                          <div class="mt-3 qr-code-scanner mx-md-4 mx-2 pb-8 bg-white">
                              @if(!empty($paymentMasterDetail->qr_img))
                                  <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" class="qr-image">
                              @endif
                          </div>
                      </div>
                  </div>
                  @endif

              <!-- <div class="vcard-eight__timing py-4 position-relative px-sm-4 px-3">
                 <div class="container">
                    <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">
                       Business Hours
                    </h4>
                    <div class="row mt-3 d-flex justify-content-center">
                       <div class="col-sm-8 time-section px-3 py-1">
                          <div class="d-flex justify-content-center time-zone">
                             <span class="text-center me-2">MON :</span>
                             <span>09:00 AM - 08:00 PM</span>
                          </div>
                          <div class="d-flex justify-content-center time-zone">
                             <span class="text-center me-2">TUE :</span>
                             <span>09:00 AM - 08:00 PM</span>
                          </div>
                          <div class="d-flex justify-content-center time-zone">
                             <span class="text-center me-2">WED :</span>
                             <span>09:00 AM - 08:00 PM</span>
                          </div>
                          <div class="d-flex justify-content-center time-zone">
                             <span class="text-center me-2">THU :</span>
                             <span>09:00 AM - 08:00 PM</span>
                          </div>
                          <div class="d-flex justify-content-center time-zone">
                             <span class="text-center me-2">FRI :</span>
                             <span>09:00 AM - 08:00 PM</span>
                          </div>
                          <div class="d-flex justify-content-center time-zone">
                             <span class="text-center me-2">SAT :</span>
                             <span>09:00 AM - 08:00 PM</span>
                          </div>
                       </div>
                    </div>
                 </div>
              </div> -->
              @endforeach
              @endif

              <div class="vcard-eight__contact py-4 position-relative px-sm-4 px-3">
                 <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pb-3">Enquiries</h4>
                 <div class="container">
                    <div class="row mt-12">
                       <div class="col-md-12 px-0">
                       <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
                          <meta name="csrf_token" content="{{ csrf_token() }}" />
                          @csrf
                          <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
                          <div class="contact-form px-sm-3">
                              <div class="mb-12">
                                  <label class="form-label">Your Name</label>
                                  <div class="input-group mb-12">
                                      <input type="text" name="enquiryName" class="form-control border-start-0" data-parsley-trigger="change" id="enquiryName" placeholder="Enter Full Name" pattern="[a-zA-Z ]*$" required=""><br>
                                  </div>
                              </div>

                              <div class="mb-12">
                                  <label class="form-label">Your Phone Number</label>
                                  <div class="input-group mb-12">
                                      <input type="text" class="form-control border-start-0" data-parsley-length-message="Contact should have (4-10) digits." data-parsley-type-message="Contact should have only digits." data-parsley-type="number" data-parsley-length="[4, 10]" name="phoneNumber" id="phoneNumber" required="" placeholder="Enter Phone Number">
                                  </div>
                              </div>

                              <div class="mb-12">
                                  <label class="form-label">Your Email</label>
                                  <div class="input-group mb-12">
                                      <input type="email" class="form-control border-start-0" name="email" id="email" data-parsley-trigger="change" placeholder="Enter Email" Required><br>
                                  </div>
                              </div>

                              <div class="mb-12">
                                  <label class="form-label">Message</label>
                                      <div class="input-group mb-12">
                                          <textarea name="message" id="message" class="form-control border-start-0" required="" placeholder="Enter Message"></textarea>
                                      </div>
                              </div>

                              <input type="hidden" id="companyEmail" value="admin.admin@gmail.com">
                              <input type="submit" id="inquiry-send" value="Send" class="contact-btn text-white mt-4 d-block ms-auto">
                          </div>

                          </form>

                      </div>
                    </div>
                 </div>
              </div>
              <!-- <div class="text-center">
                 <small class="text-white">Made By Juzztap Vcards</small>
              </div> -->
           </div>
           <div id="vcard8-shareModel" class="modal fade" role="dialog">
              <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title">Share My VCard</h5>
                       <button type="button" aria-label="Close" class="btn btn-sm btn-icon btn-active-color-danger" data-bs-dismiss="modal">
                          <span class="svg-icon svg-icon-1">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                   <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                   <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                                </g>
                             </svg>
                          </span>
                       </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                          <div class="col-sm-12 d-flex justify-content-between">
                             <a href="http://www.facebook.com/sharer.php?u=#" target="_blank" class="mx-2 share8" title="Facebook">
                             <i class="fab fa-facebook fa-3x" style="color: #1B95E0"></i>
                             </a>
                             <a href="http://twitter.com/share?url=url&amp;text=&amp;hashtags=sharebuttons" target="_blank" class="mx-2 share8" title="Twitter">
                             <i class="fab fa-twitter fa-3x" style="color: #1DA1F3"></i>
                             </a>
                             <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=url" target="_blank" class="mx-2 share8" title="Linkedin">
                             <i class="fab fa-linkedin fa-3x" style="color: #1B95E0"></i>
                             </a>
                             <a href="mailto:?Subject=&amp;Body=url" target="_blank" class="mx-2 share8" title="Email">
                             <i class="fas fa-envelope fa-3x" style="color: #191a19  "></i>
                             </a>
                             <a href="http://pinterest.com/pin/create/link/?url=url" target="_blank" class="mx-2 share8">
                             <i class="fab fa-pinterest fa-3x" style="color: #bd081c" title="Pinterest"></i>
                             </a>
                             <a href="http://reddit.com/submit?url=url&amp;title=" target="_blank" class="mx-2 share8" title="Reddit">
                             <i class="fab fa-reddit fa-3x" style="color: #ff4500"></i>
                             </a>
                             <a href="https://wa.me/?text=url" target="_blank" class="mx-2 share8" title="Whatsapp">
                             <i class="fab fa-whatsapp fa-3x" style="color: limegreen"></i>
                             </a>
                          </div>
                       </div>
                       <div class="text-center">
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

<!-- The image Modal Popup-->
<div id="imageModal" class="modal" style="display:none"> 

<span class="close" id="imageModalClose">×</span>
<img class="modal-content fadeIn" id="img01" alt="">
  <div id="caption"></div>
<div id="gallery_description"></div>
</div>

   </body>

<script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{asset('public/visitingCard/bussinessCard/q/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/q/js/slick.min.js')}}" type="text/javascript"></script>


<script src="{{asset('public/visitingCard/bussinessCard/q/js/helpers.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/q/js/vendor.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/q/js/custom.js')}}"></script>
<!-- <script src="{{asset('public/visitingCard/bussinessCard/q/js/vcard-view.js')}}"></script> -->


<script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
<script src="{{asset('public/js/prevent.js')}}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CJZJHWL0WG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CJZJHWL0WG');
</script>


</html>