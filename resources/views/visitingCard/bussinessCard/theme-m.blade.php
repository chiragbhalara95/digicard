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

    <link href="{{asset('public/visitingCard/bussinessCard/m/css/css.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/m/css/mobile_css.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/m/css/card_css14.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/g/css/intlTelInput.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/m/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/common/css/gallery-category.css')}}" rel="stylesheet">

    <link href="{{ asset('public/frontView/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style type="text/css">
  .btn_buy {
      background: #283b53 !important;
  }
  .filter-button {
    border:1px solid #283b53 !important;
    color: #283b53 !important;
  }

  .filter-button.active {
    border:1px solid #283b53 !important;
    background: #283b53 !important;
    color: #fff !important;
  }
  .filter-button:hover{
        border:1px solid #283b53 !important;
    background: #283b53 !important;
    color: #fff !important;

  }

/* The Modal CSS (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #ffffff !important;
    font-size: 80px;
    font-weight: bold;
    /*transition: 0.3s;*/
}

.close:hover,
.close:focus {
    color: #bbb !important;
    text-decoration: none;
    cursor: pointer;
}
/* Modal CSS Completed */


</style>

</head>
<body>
  <div class="card" id="home">
    @if($userConfigObj->isShowNoOfVisit == '1')
    <div class="view_counter"><i class="fa fa-eye"></i> <br>{{$userObj->no_visit}}</div>
    @endif

    <div class="card_content">
            @if(!empty($companyInfoData->company_logo))
              <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="profile-pic-img" alt="Logo">
            @elseif(!empty($userObj->profile_pic))
              <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="profile-pic-img" alt="Logo">
            @endif

      </div>
      <div class="card_content2">
          @if (!empty($companyInfoData->company_name))
          <h3>{!! $companyInfoData->company_name !!} </h3>
          <p>{!! $userObj->name !!}</p>
          <p>{!! $companyInfoData->company_profession !!}</p>
          @else
          <p>{!! $userObj->name !!}</p>
          <p>{!! $companyInfoData->company_profession !!}</p>

          @endif
      </div>

      <div class="dis_flex">
        <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" target="_blank">
          <div class="link_btn"><i class="fa fa-phone"></i> Call</div>
        </a>
        <a href=https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" target="_blank">
          <div class="link_btn"><i class="fab fa-whatsapp"></i> WhatsApp</div>
        </a>
            @if (!empty($companyInfoData->company_address))
        <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank">
          <div class="link_btn"><i class="fa fa-map-marker"></i> Direction</div>
        </a>
        @endif

        <a href="mailto:{{$userObj->email}}" target="_blank">
          <div class="link_btn"><i class="fa fa-envelope"></i> Mail</div>
        </a>
        @if(!empty($companyInfoData->company_website))
        <a href="{{$companyInfoData->company_website}}" target="_blank">
          <div class="link_btn"><i class="fa fa-globe"></i> Website</div>
        </a>
        @endif

      </div>

      <div class="contact_details">

          <a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}">
        <div class="contact_d">
          <i class="fa fa-phone"></i>
          <p>{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}</p>
        </div>
          </a>

          @if(!empty($companyInfoData->country_landline))
          <a target="_blank" href="tel:{{$companyInfoData->country_landline}}" class="contact-action-container-text">
          <div class="contact_d">
            <i class="fa fa-phone"></i>
            <p>{{$companyInfoData->country_landline}}</p>
          </div>
        </a>
        @endif

       <a class="contact-piller-button" target="_blank" href="mailto:{{$userObj->email}}">
        <div class="contact_d">
          <i class="fa fa-envelope"></i>
          <p>{{$userObj->email}}</p>
        </div>
        </a>

        @if (!empty($companyInfoData->company_address))
        <a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw">
          <div class="contact_d">
            <i class="fa fa-map-marker"></i>
            <p>{!!$companyInfoData->company_address!!} </p>
          </div>
        </a>
        @endif


      </div>



      <div class="dis_flex">
        <div class="share_wtsp">
          <form action="https://api.whatsapp.com/send" id="wtsp_form" target="_blank">
            <input type="text" name="phone" id="company_mobile" placeholder="WhatsApp Number with Country code" value="{{$userConfigObj->defaultCountry}}">
            <input type="hidden" name="text" id="whatsapp-input" value="{{url('vc')}}/{{$userObj->slug}}">

            <a class="wtsp_share_btn whatsapp-button" target="_blank" href="javascript:void(0);" onclick="handleWhatsappShare(this)">
              <i class="fab fa-whatsapp"></i>&nbsp;Share on Whatsapp
            </a>

          </form>


        </div>
      </div>

<div class="dis_flex">
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
              </ul>
              @endif

           </div>
  </div>

<div class="card2 mb-5">
  
  <h3>Scan QR Code to download the contact details</h3>
    <div class="text-center"> 
          {!! QrCode::size(250)->generate($vistingUrl) !!}
            <p>{{$vistingUrl}}</p>
            <div class="dis_flex">
                <a class="text-center
                " href="{{url('downloadQrCode')}}/{{$userObj->slug}}" >
                  <div class="big_btns">
                    Download QR Code &nbsp;<i class="fa fa-download"></i>
                      </div>
                  </a>  
            </div>
    </div>

  </div>

<!--------------about us --------------------------->
<div class="card2" id="about_us">
    <h3>{{$userConfigObj->aboutLabel}}</h3>
    <p class="text-dark">{!!$companyInfoData->company_info!!}</p>
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

<!----------product and services ----------------------->   
  
  <div class="card2" id="product_services">
    <h3>{{$userConfigObj->galleryLabel}}</h3>

        @if (!empty($galleryCatInfo))
        <div align="center">
            <button class="btn btn-default filter-button active all-filter-btn" data-filter="all">All</button>
            @foreach($galleryCatInfo as $catlbl => $catName)
            <button class="btn btn-default filter-button" data-filter="{{$catlbl}}">{{$catName}}</button>
            @endforeach
        </div>
        @endif

        <div class="gallery_section">
          @foreach($galleryData as $galleryDetail)

        <div class="order_box filter {{$galleryDetail->category_name}}">
          <img onclick="openImageModal(this)" alt="{{$galleryDetail->title}}" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" class="profile-pic-img" description="{{$galleryDetail->description}}">
            <h5 class="text text-center" style="text-align:center;">{{$galleryDetail->title}}</h5>

            <p>
            @if ($galleryDetail->special_price > 0 && $galleryDetail->mrp_price > $galleryDetail->special_price)
          <del>₹{{$galleryDetail->special_price}} <i class="fa fa-rupee"></i></del>
          @endif

          @if ($galleryDetail->mrp_price > 0)
          <h4>₹{{$galleryDetail->mrp_price}} <i class="fa fa-rupee"></i></h4>
          @endif
          </p>
          <a href='https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text=Enquery for product: {{urlencode($galleryDetail->title)}} Image:{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}' target='_blank'><div class="btn_buy">Inquire Now</div></a>
        </div>


          @endforeach
        </div>

    </div>


  <!--------------youtube videos--------------------------->
  @if(count($videosData) > 0)
  <div class="card2" id="youtube_video">
    <h3>Youtube Videos</h3>
      @foreach($videosData as $videosDetail)

        <iframe class="embed-responsive-item " src="{{$videosDetail->video_path}}" title="{{$videosDetail->title}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" ></iframe>
         <h4 class="section-header text-center">{{$videosDetail->title}}</h4>
    @endforeach
    
  </div>
  @endif

<!----------product and services ----------------------->



  <!----------payment info----------------------->
@if(count($paymentMasterData) > 0)

  <div class="card2" id="payment">
    <h3>Payment Info</h3>
      @foreach($paymentMasterData as $paymentMasterDetail)

        @if ($paymentMasterDetail->type == 'bank')
        <h3>Bank Account Details</h3>
        <div class="section-header-underline"></div>

        <h2>Bank Name:</h2><p>{{$paymentMasterDetail->bank_name}}</p>
        <h2>Account Holder Name:</h2><p>{{$paymentMasterDetail->account_holder_name}}</p>
        <h2>Account Number:</h2><p>{{$paymentMasterDetail->account_no}}</p>
        <h2>Account Type:</h2><p>{{$paymentMasterDetail->account_type}} Account</p>
        <h2>IFSC code:</h2><p>{{$paymentMasterDetail->ifsc_code}}</p>
        <h2>Branch Name:</h2><p>{{$paymentMasterDetail->branch_name}}</p>


        @else
        <h3>UPI Detail</h3>
        <h2>UPI ID:</h2><p>{{$paymentMasterDetail->account_no}}</p>
        @if(!empty($paymentMasterDetail->qr_img))
            <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" class="img-thumbnail" style="width: 100%;">

        @endif

      @endif

      @endforeach

  </div>
@endif


  <!----------email to  info----------------------->
  @if($userConfigObj->isShowEnquiry == '1')

  <div class="card2" id="enquery">
    <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
      <h3>Contact Us</h3>
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
    
  
    





        <br>
    <br>
    <br>
    <div id="create_card_btn">
        
     <a href="https://api.whatsapp.com/send?phone=919537178057&amp;text=I%20am%20Interested%20For%20Digital%20Visiting%20Card.%20Please%20Share%20Me%20Demo&amp;source=&amp;data=&amp;app_absent=" class="btn btn-warning">  try digital visiting card like Your Friends <br> Try Free Demo Now  </a>
          <br>
    <!--<a href="/panel/login/registration.php">mycard.zensoft.tech || Create Your Card Now || 2023</a>-->
    </div>

  @endif

  <style>
  .create_card_btn {
             background: linear-gradient(45deg, black, black);
    color: white;
    width: auto;
    padding: 20px;
    border-radius: 2px;
    line-height: 0.8;
    margin: 11px auto;
    font-size: 9px;
    text-align: center;
  }
  
  
  
#svg_down{position: fixed;
    bottom: 0;
    z-index: -1;
    left: 0;}

  
  </style>
  
  
  
  <br>
  <br>
  <br>
  <br>
  <div class="menu_bottom">
    <div class="menu_container">
      <div class="menu_item" onclick="location.href='#home'"><i class="fa fa-home"></i> Home</div>
      <div class="menu_item" onclick="location.href='#about_us'"><i class="fa fa-briefcase"></i>{{$userConfigObj->aboutLabel}}</div>
      @if($galleryData->count() > 0)
      <div class="menu_item" onclick="location.href='#product_services'"><i class="fa fa-image"></i>{{$userConfigObj->galleryLabel}}</div>
      @endif

      @if(count($videosData) > 0)
      <div class="menu_item" onclick="location.href='#youtube_video'"><i class="fa fa-video-camera"></i>Youtube Videos</div>
      @endif

      @if(count($paymentMasterData) > 0)
      <div class="menu_item" onclick="location.href='#payment'"><i class="fa fa-money"></i>Payment</div>
      @endif

      @if($userConfigObj->isShowEnquiry == '1')
        <div class="menu_item" onclick="location.href='#enquery'"><i class="fa fa-comment"></i>Enquiry</div>
      @endif

    </div>
  </div>


</div>


   <!-- The image Modal -->
   <div id="imageModal" class="modal">
      <span class="close" id="imageModalClose">×</span>
      <img class="modal-content fadeIn" id="img01">
      <div id="caption"></div>
      <div id="gallery_description"></div>
   </div>

</body>

<input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

<script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

<script id="skype_bootstrap" src="{{asset('public/visitingCard/bussinessCard/common/js/gallery-category.js')}}"></script>
