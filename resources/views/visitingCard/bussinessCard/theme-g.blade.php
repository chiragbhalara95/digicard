<!DOCTYPE html>
<html lang="en">
<head>
    <title>@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif</title>

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

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link href="{{asset('public/visitingCard/bussinessCard/g/css/t6-style.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/g/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/g/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/g/css/intlTelInput.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/admin/plugins/toastr/toastr.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">

        <script>
         function ColorLuminance(hex, lum) {
             // validate hex string
             hex = String(hex).replace(/[^0-9a-f]/gi, '');
             if (hex.length < 6) {
                 hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
             }
             lum = lum || 0;
         
             // convert to decimal and change luminosity
             var rgb = "#", c, i;
             for (i = 0; i < 3; i++) {
                 c = parseInt(hex.substr(i*2,2), 16);
                 c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
                 rgb += ("00"+c).substr(c.length);
             }
         
             return rgb;
         }
         document.documentElement.style.setProperty('--theme-color', '#F5B343');
         document.documentElement.style.setProperty('--theme-color-light', '#F5B34326');
         document.documentElement.style.setProperty('--theme-color-100', '#F5B343');
         document.documentElement.style.setProperty('--theme-color-75', '#F5B34390');
         document.documentElement.style.setProperty('--theme-color-50', '#F5B34380');
         document.documentElement.style.setProperty('--theme-color-25', '#F5B34370');
      </script>

<style>
  main {
  padding: 100px 0;
  width: 600px;
  margin: 0 auto;
}

header {
  height: 100px;
  margin-bottom: 50px;
}

h1 {
  float: left;
  margin: 0;
}

h2 {
  margin: 0 0 50px;
}

#cart-container {
  float: right;
  width: 40px;
  position: relative;
  margin-top: -12%
}

#itemCount {
  position: absolute;
  display: none;
  top: -10px;
  left: -10px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: red;
  color: white;
  text-align: center;
}

img {
  width: 100%;
}

.item {
  width: 31%;
  float: left;
  margin: 1%;
}

i:hover {
  cursor: pointer;
}

#shoppingCart {
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  display: none;
  position: absolute;
  z-index: 9999;
  background: rgba(0, 0, 0, 0.6);
}

#cartItems {
  position: relative;
  width: 600px;
  left: 50%;
  top: 150px;
  margin-left: -300px;
  padding: 40px;
  box-shadow: 0 0 10px black;
  background: #e9e9e9;
  overflow: auto;
  color: #111
}

#cartItems i {
  position: absolute;
  top: 20px;
  right: 20px;
}

#cartItems .itemDetails {
  overflow: auto;
  width: 100%;
  margin-bottom: 40px;
}

#cartItems .itemImage {
  float: left;
  width: 260px;
  padding: 0 40px;
}

#cartItems .itemText {
  float: right;
  width: 260px;
  padding: 0 40px;
}

.removeItem {
  margin-left: 40px;
}

#checkoutModal, #customerModal {
  color: #000
}
.error {
  color: #DC3545
}
</style>
</head>

<body>
   <div class="page-wrapper" id="home-section">
      <div class="separator"></div>
        @if($userConfigObj->isShowNoOfVisit == '1')
        <div class="views-label"><i class="fas fa-eye"></i> Views: <b>{{$userObj->no_visit}}</b></div>
        @endif

      <div class="upper">
            @if(!empty($companyInfoData->company_logo))
              <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="profile-pic-img" alt="Logo">
            @elseif(!empty($userObj->profile_pic))
              <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="profile-pic-img" alt="Logo">
            @endif

          @if (!empty($companyInfoData->company_name))
            <div class="firmname">{!! $companyInfoData->company_name !!}</div>
            <div class="firmname-underline"></div>
            <div class="name"><span style="margin-top: 5px;display: block;font-size: 16px;">{!! $userObj->name !!}</div>
          @else
            <div class="firmname">{!! $userObj->name !!}</div>
            <div class="firmname-underline"></div>
          @endif

         @if(!empty($companyInfoData->company_profession))
         <div class="name"><span style="margin-top: 5px;display: block"><i style="font-size: 12px;">{!! $companyInfoData->company_profession !!}</i></span>
         </div>
        @endif

         <div class="contact-buttons">
            <a class="contact-button" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}">
            <i class="fas fa-phone fa-flip-horizontal"></i>
            </a>
            <a class="contact-button" target="_blank" href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}">
            <i class="fab fa-whatsapp"></i>
            </a>
            @if (!empty($companyInfoData->company_address))
            <a class="contact-button" target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw">
            <i class="fas fa-map-marker-alt fa-flip-horizontal"></i>
            </a>
            @endif

            <a class="contact-button" target="_blank" href="mailto:{{$userObj->email}}">
            <i class="fas fa-envelope fa-flip-horizontal"></i>
            </a>
         </div>
      </div>
      <div class="lower">
         <div class="contact-info-container">
            <div class="contact-info-wrapper">
               <a class="contact-piller-button call" target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}">
               <i class="fas fa-phone fa-flip-horizontal"></i>
               </a>

               <div class="contact-info">
                  <div>
                     <a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}">{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}</a>
                    @if(!empty($companyInfoData->country_landline))
                     <br><a target="_blank" href="tel:{{$companyInfoData->country_landline}}" class="contact-action-container-text">
                     {{$companyInfoData->country_landline}}</a>
                     @endif
                  </div>
               </div>
            </div>
            @if(!empty($companyInfoData->company_website))
            <div class="contact-info-wrapper">
               <a class="contact-piller-button" target="_blank" href="{{$companyInfoData->company_website}}">
               <i class="fas fa-globe"></i>
               </a>
               <div class="contact-info">
                  <a target="_blank" href="{{$companyInfoData->company_website}}">{{$companyInfoData->company_website}}</a>
               </div>
            </div>
            @endif

            <div class="contact-info-wrapper">
               <a class="contact-piller-button" target="_blank" href="mailto:{{$userObj->email}}">
               <i class="fas fa-envelope"></i>
               </a>
               <div class="contact-info">
                  <a target="_blank" href="mailto:{{$userObj->email}}">{{$userObj->email}}</a>
               </div>
            </div>

          @if (!empty($companyInfoData->company_address))               
            <div class="contact-info-wrapper">
               <a class="contact-piller-button" target="_blank" href="https://maps.app.goo.gl/zeZUirLcgUwHdJbj6">
               <i class="fas fa-map-marker-alt"></i>
               </a>
               <div class="contact-info">
                  <a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw">{!!$companyInfoData->company_address!!}</a>
               </div>
            </div>
            @endif

         </div>


         <div style="padding: 15px;">
            <div class="p-30"></div>

            <div class="whatsapp-input">
               <div class="input-wrapper">
                  <input type="hidden" id="whatsapp-msg" value="{{url('vc')}}/{{$userObj->slug}}">  
                  <div class="iti iti--allow-dropdown">
                     <div class="iti__flag-container">
                        <div class="iti__selected-flag" role="combobox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="India (भारत): +91" aria-activedescendant="iti-0__item-in"><div class="iti__flag iti__ind"></div></div>                     </div>
                     <input type="tel" id="whatsapp-input" class="input" placeholder="Enter whatsapp number" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,&#39;&#39;);" autocomplete="off" data-intl-tel-input-id="0">
                  </div>

               </div>
                  <a class="whatsapp-button" target="_blank" href="javascript:;" onclick="handleWhatsappShare(this)">
                  <i class="fab fa-whatsapp"></i>Share on Whatsapp
                  </a>
            </div>

            <div class="p-20"></div>
            <div class="shadow-buttons">
               <a class="shadow-button" href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf"><i class="fas fa-download shadow-button-icon"></i>Save to Contacts</a>

               @if (!empty($companyInfoData->company_name))
               <a class="shadow-button" onclick="openShareModal(this, '{!! $companyInfoData->company_name !!}')"><i class="fas fa-share-alt shadow-button-icon"></i>Share</a>
               @else
               <a class="shadow-button" onclick="openShareModal(this, '{!! $userObj->name !!}')"><i class="fas fa-share-alt shadow-button-icon"></i>Share</a>
               @endif

            </div>
            <div>
               <a class="shadow-button save-card-button" style="display: none;"><i class="fas fa-cloud-download-alt shadow-button-icon"></i>Save Card</a>
            </div>
            <div class="p-30"></div>

            @if (count($socialMediaData) > 0)
              <ul class="inprofile share-buttons" style="height:70px;margin-left: 3px;">
                @foreach($socialMediaData as $socialMediaDetail)
                  @if ($socialMediaDetail->type == 'fb')
                  <li class="share-button">
                      <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-facebook fab fa-facebook"></i></a> </li>
                  @elseif($socialMediaDetail->type == 'in')
                  <li class="share-button"> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-instagram fab fa-instagram"></i></a> </li>
                    @elseif($socialMediaDetail->type == 'li')
                    <li class="share-button"> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-linkedin fab fa-linkedin"></i></a> </li>
                    @elseif($socialMediaDetail->type == 'tw')
                    <li class="share-button"> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-twitter fab fa-twitter"></i></a> </li>
                    @elseif($socialMediaDetail->type == 'pi')
                    <li class="share-button"> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-facebook fab fa-pinterest"></i></a> </li>
                    @elseif($socialMediaDetail->type == 'yt')
                    <li class="share-button"> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-facebook fab fa-youtube"></i></a> </li>
                  @endif
                @endforeach
              </ul>
              @endif

            <div class="p-20"></div>
         </div>
         <div class="bottom-separator"></div>
      </div>
   </div>

    <div class="section-container">
      <div class="separator"></div>
      <div class="section-content-wrapper">
         <h2 class="section-header">Scan QR Code for share your digital cards</h2>
         <div class="section-header-underline"></div>
          <div class="text text-center" style="text-align: center;">
          {!! QrCode::size(250)->generate($vistingUrl) !!}
            <p>{{$vistingUrl}}</p>
            <a class="col-md-12 text-center big_btns text-white" href="{{url('downloadQrCode')}}/{{$userObj->slug}}" >Download QR Code &nbsp;<i class="fa fa-download"></i></a>  

      </div>

     </div>
    </div>

   <div class="section-container" id="about-us-section">
      <div class="separator"></div>
      <div class="section-content-wrapper">
         <h2 class="section-header">{{$userConfigObj->aboutLabel}}</h2>
         <div class="section-header-underline"></div>
            <p class="text-white">{!!$companyInfoData->company_info!!}</p>
            @if(!empty($companyInfoData->broucher_file))
                <h3>Documents</h3>
                <div class="dis_flex">
                  <a class="download" href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download="">
                  
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
      <div class="bottom-separator"></div>
   </div>


@if($galleryData->count() > 0)
   <div class="section-container pt-10" id="products-services-section">
      <div class="separator"></div>


      <div class="section-content-wrapper">
         <h2 class="section-header">
            Gallery
         </h2>

         <div class="section-header-underline"></div>
         <div>

        <div class="p-10"></div>

        @if($userConfigObj->isEcommerceEnable == '1')
        <div id="cart-container">
          <div id="cart">
            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
            <!-- <button class="clear">Empty Cart</button> -->
          </div>
          <span id="itemCount"></span>
        </div>

        <div id="shoppingCart">
          <div id="cartItems">
            <h2>Items in your cart</h2>
            <i class="fa fa-times-circle-o fa-3x" aria-hidden="true"></i>
          </div>
        </div>
        @endif

          @if (!empty($galleryCatInfo))
          <div align="center">
              <button class="btn btn-default filter-button active all-filter-btn" data-filter="all">All</button>
              @foreach($galleryCatInfo as $catlbl => $catName)
              <button class="btn btn-default filter-button" data-filter="{{$catlbl}}">{{$catName}}</button>
              @endforeach
          </div>
          @endif

        @foreach($galleryData as $galleryDetail)
          <div class="card filter {{$galleryDetail->category_name}}">
            <div class="itemDetails ">
               <div class="text-center">
                  <img onclick="openImageModal(this)" alt="{{$galleryDetail->title}}" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" style="width:100%;margin-bottom: 9px;" description="{{$galleryDetail->description}}">
                        <h4 class="section-header">{{$galleryDetail->title}}
                        &nbsp;<br/>
                        @if ($galleryDetail->special_price > 0 && $galleryDetail->mrp_price > $galleryDetail->special_price)
                        <del>₹{{$galleryDetail->mrp_price}} <i class="fa fa-rupee"></i></del>
                        ₹{{$galleryDetail->special_price}} <i class="fa fa-rupee"></i>
                        @elseif($galleryDetail->mrp_price > 0)
                         ₹{{$galleryDetail->mrp_price}} <i class="fa fa-rupee"></i>
                      @endif

                  </h4>
                </div>

                <div class="product-enquiry-section text-center">
                    @php
                        $link="https://api.whatsapp.com/send?phone=".str_replace('+','',$companyInfoData->country_code).$companyInfoData->company_mobile."&text=Enquery for product:".urlencode($galleryDetail->title);
                        $price=0;
                        if ($galleryDetail->mrp_price > 0) {
                            if ($galleryDetail->special_price > 0 && $galleryDetail->mrp_price > $galleryDetail->special_price){
                                $link .= " Price=₹".$galleryDetail->special_price;
                                $price = $galleryDetail->special_price;
                            } else{
                                $link .= " Price=₹".$galleryDetail->mrp_price;
                                $price = $galleryDetail->mrp_price;
                            }
                        }    
                    @endphp

                </div>
            </div>
            <a href="{{$link}}" target='_blank' class="product-enquiry-btn text-center"><div class="btn_buy">Inquire Now</div></a>
            @if($userConfigObj->isEcommerceEnable == '1')
            <button class="add product-enquiry-btn text-center" data-id="{{$galleryDetail->id}}" data-product="{{$galleryDetail->title}}" data-price="{{$price}}">Add to cart</button>
            @endif
        </div>

        @endforeach

         </div>
      </div>
      <div class="bottom-separator"></div>
   </div>
@endif

@if(count($videosData) > 0)

<div class="section-container" id="video-section">
  <div class="separator"></div>
  <div class="section-content-wrapper">
     <h2 class="section-header">Videos</h2>
     <div class="section-header-underline"></div>

      @foreach($videosData as $videosDetail)
    <div class="order_box">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item " src="{{$videosDetail->video_path}}" title="{{$videosDetail->title}}" allowfullscreen ng-show="showvideo" frameborder="0" ></iframe>
     <h4 class="section-header">{{$videosDetail->title}}</h4>
    </div>

  </div>
    @endforeach
</div>
</div>
@endif

@if(count($paymentMasterData) > 0)

<div class="section-container" id="payment-options-section">
    <h2 class="section-header">Payment</h2>
    <div class="section-header-underline"></div>

      @foreach($paymentMasterData as $paymentMasterDetail)
        @if ($paymentMasterDetail->type == 'bank')

        <h4 class="section-header">Bank Detail</h4>
        <div class="section-header-underline"></div>

        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Bank Name: {{$paymentMasterDetail->bank_name}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Account Holder Name: {{$paymentMasterDetail->account_holder_name}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Account Number: {{$paymentMasterDetail->account_no}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Account Type: {{ucwords($paymentMasterDetail->account_type)}} Account</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; IFSC code: {{$paymentMasterDetail->ifsc_code}}</h3>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; Branch Name: {{$paymentMasterDetail->branch_name}}</h3>

        @else
        <h4 class="section-header">UPI Detail</h4>
        <div class="section-header-underline"></div>
        <h3 class="section-item-title-2"><i class="fa fa-chevron-circle-right"></i>&nbsp; {{ucwords($paymentMasterDetail->type)}} Number : {{$paymentMasterDetail->account_no}}</h3>
        @if(!empty($paymentMasterDetail->qr_img))
            <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" class="img-thumbnail" style="width: 100%;">
        @endif

        @endif
      @endforeach

     <div class="section-close"></div>
</div>
@endif

    @if($userConfigObj->isShowEnquiry == '1')
   <div class="section-container" id="enquiry-section">
      <div class="separator"></div>
      <div class="section-content-wrapper">
         <h2 class="section-header">Enquiry Form</h2>
         <div class="section-header-underline"></div>
        <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
        <meta name="csrf_token" content="{{ csrf_token() }}" />
        <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
        <input type="hidden" id="companyEmail" value="admin.admin@gmail.com">

            <div class="form-group">
                <input type="text" name="enquiryName" data-parsley-trigger="change" id="enquiryName" placeholder="Enter Full Name" pattern="[a-zA-Z ]*$" required="">

            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" data-parsley-trigger="change" placeholder="Enter Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" data-parsley-length-message="Contact should have (4-10) digits." data-parsley-type-message="Contact should have only digits." data-parsley-type="number" data-parsley-length="[4, 10]" name="phoneNumber" id="phoneNumber" required="" placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <textarea name="message" id="message" required="" placeholder="Enter Message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" id="inquiry-send" value="Send">
            </div>
         </form>
      </div>
      <div class="bottom-separator"></div>
   </div>
   @endif

   <!-- Footer Menu -->
   <div class="footer">
      <ul class="footer-menu">
         <li>
            <a class="footer-menu-link"  href="#home-section">
               <i class="footer-menu-icon fas fa-home"></i>
               <div class="footer-menu-text">HOME</div>
            </a>
         </li>
         <li>
            <a class="footer-menu-link" href="#about-us-section">
               <i class="footer-menu-icon fas fa-briefcase"></i>
               <div class="footer-menu-text">{{$userConfigObj->aboutLabel}}</div>
            </a>
         </li>
         @if($galleryData->count() > 0)

         <li>
            <a class="footer-menu-link" href="#products-services-section">
               <i class="footer-menu-icon fas fa-box-open"></i>
               <div class="footer-menu-text">
                GALLERY
               </div>
            </a>
         </li>
         @endif

         @if(count($paymentMasterData) > 0)
         <li>
            <a class="footer-menu-link" href="#payment-options-section">
               <i class="footer-menu-icon fas fa-money-bill-alt"></i>
               <div class="footer-menu-text">PAYMENT</div>
            </a>
         </li>
         @endif
         @if(count($videosData) > 0)
         <li>
            <a class="footer-menu-link" href="#video-section">
               <i class="footer-menu-icon fas fa-video"></i>
               <div class="footer-menu-text">VIDEOS</div>
            </a>
         </li>
         @endif
         @if($userConfigObj->isShowEnquiry == '1')
         <li>
            <a class="footer-menu-link" href="#enquiry-section">
               <i class="footer-menu-icon fas fa-comment-alt"></i>
               <div class="footer-menu-text">ENQUIRY</div>
            </a>
         </li>
         @endif
      </ul>
   </div>
   <!-- The image Modal -->
   <div id="imageModal" class="modal">
      <span class="close" id="imageModalClose">×</span>
      <img class="modal-content fadeIn" id="img01">
      <div id="caption"></div>
      <div id="description"></div>
   </div>

   <!-- The share Modal -->
   <div id="shareModal" class="modal share-modal">
      <div class="share-form fadeInUpBig">
         <div class="share-form-header">
            <h3 class="share-form-header-text">Share Profile</h3>
            <span class="close" id="shareModalClose">×</span>
         </div>
         <div class="share-form-buttons-container">
            <p>Share my Digital Card in your network.</p>
            <div class="share-buttons-heading">
               <img src="{{asset('public/visitingCard/bussinessCard/g/img/tild-arrow.svg')}}" class="share-buttons-arrow">
               <div class="share-buttons-heading-text">Share my Digital Card</div>
            </div>
            <ul class="share-buttons">
               <li class="share-button">
                  <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&amp;text={{url('vc')}}/{{$userObj->slug}}" target="_blank">
                  <i class="share-button-whatsapp fab fa-whatsapp"></i>
                  </a>
               </li>
               <li class="share-button">
                  <a target="_blank" href="sms:?body={{url('vc')}}/{{$userObj->slug}}">
                  <i class="share-button-sms fas fa-comment-dots"></i>
                  </a>
               </li>
               <li class="share-button">
                  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('vc')}}/{{$userObj->slug}}" class="fb-xfbml-parse-ignore">
                  <i class="share-button-facebook fab fa-facebook-f"></i>
                  </a>
               </li>
               <li class="share-button">
                  <a target="_blank" href="https://twitter.com/intent/tweet?text={{url('vc')}}/{{$userObj->slug}}" data-size="large">
                  <i class="share-button-twitter fab fa-twitter"></i>
                  </a>
               </li>
               <li class="share-button">
                  <a target="_blank" href="https://pinterest.com/pin/create/link/?url={{url('vc')}}/{{$userObj->slug}}">
                  <i class="share-button-pinterest fab fa-pinterest-p"></i>
                  </a>
               </li>
               <li class="share-button">
                  <a target="_blank" href="mailto:?subject=Digital%20Card&amp;body=Check%20out%20this%20digital%20card%20{{url('vc')}}/{{$userObj->slug}}">
                  <i class="share-button-mail fas fa-envelope"></i>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>

@if($userConfigObj->isEcommerceEnable == '1')
<div class="modal" id="checkoutModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary checkoutBtn">Checkout</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="customerModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-user"></span>Customer Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="createOrderFrm" action="{{route('createLeadOrder')}}" method="POST">
       @csrf
      <input type="hidden" name="array_product" id="array_product">
      <div class="modal-body">
          <div class="md-form mb-5">
            <input type="text" id="customer_first_name" name="customer_first_name" class="form-control" placeholder="Enter First Name">
          </div>
          <div class="md-form mb-5">
            <input type="text" id="customer_last_name" name="customer_last_name" class="form-control" placeholder="Enter Last Name">
          </div>

          <div class="md-form mb-5">
            <input type="email" id="customer_email" name="customer_email" class="form-control" placeholder="Enter email">
          </div>

          <div class="md-form mb-5">
            <input type="text" id="customer_contactNo" name="customer_contactNo" class="form-control" placeholder="Enter Contact Number">
          </div>

          <div class="md-form mb-5">
            <textarea id="address" name="address" class="form-control" placeholder="Enter address"></textarea>
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Order Now</button>
      </div>
      </form>

    </div>
  </div>

</div>
@endif

</body>

<input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

<script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>


<script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/g/js/script.js')}}?v={{date('YmdHis')}}"></script>

<link href="{{asset('public/visitingCard/bussinessCard/g/css/gallery-category.css')}}" rel="stylesheet">
<script id="skype_bootstrap" src="{{asset('public/visitingCard/bussinessCard/common/js/gallery-category.js')}}"></script>

<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>

<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>


<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

@if($userConfigObj->isEcommerceEnable == '1')
<script src="{{asset('public/visitingCard/bussinessCard/common/js/add2Cart.js')}}"></script>
@endif

<script src="{{asset('public/visitingCard/bussinessCard/common/js/bootstrap.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">


</script>

<script type="text/javascript">
    intlTelInput(input, {
        initialCountry:'in',
        separateDialCode:true,
    })
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CJZJHWL0WG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CJZJHWL0WG');
</script>

</html>