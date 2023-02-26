<html lang="en">
   <head>
   <title>@if(!empty($companyInfoData->company_name)){{$companyInfoData->company_name}}@else{!! $userObj->name !!}@endif</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
    <meta property="og:title" content="@if(!empty($companyInfoData->company_name)){{$companyInfoData->company_name}}@else{!! $userObj->name !!}@endif">
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
                       <h4 class="vcard-eight-heading fw-bold text-sm-start text-center">{!!$companyInfoData->company_info!!}</h4>
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
                    <a class="vcard-eight-btn mt-4 d-block btn text-white" href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf"><i class="fa fa-download me-2"></i>Download VCard</a>

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
                                <img alt="Product Image" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" class="rounded-circle" >
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
                                      <a class="addphonebook" href='https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text=Enquery for product: {{urlencode($galleryDetail->title)}}' target='_blank'>
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
                          <!-- <div class="mx-2">
                              <a class="qr-code-btn text-white mt-4 mx-auto text-decoration-none" id="qr-code-btn" download="qr_code.png" href="data:image/png;base64,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">Download My QR Code</a>
                          </div> -->
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

   </body>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{asset('public/visitingCard/bussinessCard/q/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/visitingCard/bussinessCard/q/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/q/js/slick.min.js')}}" type="text/javascript"></script>


<script src="{{asset('public/visitingCard/bussinessCard/q/js/helpers.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/q/js/vendor.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/q/js/custom.js')}}"></script>
<!-- <script src="{{asset('public/visitingCard/bussinessCard/q/js/vcard-view.js')}}"></script> -->

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- <script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery.min.js')}}"></script> -->
<script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
<script src="{{asset('public/js/prevent.js')}}"></script>


</html>