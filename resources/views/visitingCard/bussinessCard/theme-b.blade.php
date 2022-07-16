<!DOCTYPE html>
<html style="--theme-color:#034054; --theme-color-light:#03405460;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{{$companyInfoData->company_name}}</title>

<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
<meta property="og:title" content="{{$companyInfoData->company_name}}">
<meta name="description" content="{{$companyInfoData->company_info}}">
<meta property="og:description" content="{{$companyInfoData->company_info}}">
<meta name="keywords" content="{{$companyInfoData->company_name}}">
<meta property="og:url" content="{{url('vc')}}/{{$userObj->slug}}">
<meta property="og:image" itemprop="image" content="{{url('public')}}/{{$companyInfoData->company_logo}}">
<meta property="og:type" content="website">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="800">

<link rel="canonical" href="{{url('vc')}}/{{$userObj->slug}}">
<link rel="alternate" hreflang="en-IN" href="{{url('vc')}}/{{$userObj->slug}}">
<link rel="alternate" hreflang="en-IN" href="{{url('vc')}}/{{$userObj->slug}}">
<link rel="alternate" hreflang="en-US" href="{{url('vc')}}/{{$userObj->slug}}">
<link rel="alternate" hreflang="en-GB" href="{{url('vc')}}/{{$userObj->slug}}">
<link rel="icon" href="{{url('public')}}/{{$companyInfoData->company_logo}}" type="image/png" sizes="16x16">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="{{asset('public/visitingCard/bussinessCard/b/css/template5.css')}}?date={{date('YmdHis')}}" rel="stylesheet">
<!--<link href="{{asset('public/visitingCard/bussinessCard/b/css/font-awesome.min.css')}}" rel="stylesheet">-->
<link href="{{asset('public/visitingCard/bussinessCard/b/css/fonts.css')}}" rel="stylesheet">
<link href="{{asset('public/visitingCard/bussinessCard/a/css/parsely.css')}}" rel="stylesheet">
<link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/a/css/intlTelInput.min.css')}}">

<style type="text/css">
    .purchase-form__renewal-price--strikethrough {
        text-decoration: line-through;
        color: red;
    }
</style>

<script>

            document.documentElement.style.setProperty('--theme-color', '#034054');

            document.documentElement.style.setProperty('--theme-color-light', '#03405460');

        </script>

</head>

<body>

<div class="main-wrapper" id="home">

  <div class="firstpagetop">

    @if($userConfigObj->isShowNoOfVisit == '1')

    <div class="views text-white"><i class="fa fa-eye"></i> Views: <b>{{$userObj->no_visit}}</b></div>
    @endif

    <!-- Card Holder Profile Pic -->

    <div class="companylogo">
      <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="img-responsive" alt="">
    </div>

    <div class="companyname bottomborder text-white">{{$companyInfoData->company_name}}</div>

    <div class="profile">

      <div class="profilepic">
      @if(!empty($userObj->profile_pic))
        <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="img-responsive" alt="">
      @else
        <img src="{{url('public')}}/upload/user_profile.jpg" class="img-responsive" alt="">
      @endif

      </div>

      <div class="name text-white">{{$userObj->name}} <br>
        <span class="text-white" style="color: white;">@if(!empty($companyInfoData->company_profession)) ({{$companyInfoData->company_profession}}) @endif</span>
      </div>
    </div>


    <div class="actionbtn"> <a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}"> <i class="fa fa-phone iconbtn"></i> </a> 
    <a class="" target="_blank" href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}">
    <i class="fa fa-whatsapp iconbtn"></i> </a>

      @if (!empty($companyInfoData->company_address))
      <a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw"> <i class="fa fa-map-marker iconbtn"></i> </a> 
      @endif
      <a target="_blank" href="mailto:{{$userObj->email}}"> <i class="fa fa-envelope fa-flip-horizontal iconbtn"></i> </a> 

  </div>

  <div class="firstpagebottom">

  @if (count($socialMediaData) > 0)
    <ul class="firstpage share-btn">
      @foreach($socialMediaData as $socialMediaDetail)
        @if ($socialMediaDetail->type == 'fb')
          <li> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-facebook"></i></a> </li>
        @elseif($socialMediaDetail->type == 'in')
          <li> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-linkedin fa fa-instagram"></i></a> </li>
          @elseif($socialMediaDetail->type == 'li')
          <li> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-linkedin"></i></a> </li>
          @elseif($socialMediaDetail->type == 'tw')
          <li> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-twitter fa fa-twitter"></i></a> </li>
          @elseif($socialMediaDetail->type == 'pi')
          <li> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-pinterest"></i></a> </li>
          @elseif($socialMediaDetail->type == 'yt')
          <li> <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-youtube"></i></a> </li>
        @endif
      @endforeach
    </ul>
    @endif

    <div class="shadow-btn"> <a href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf" class="addphonebook"><i class="fa fa-download shadow-button-icon"></i>Add to Phone Book</a> </div>


    <?php
          $countryData = file_get_contents(url('public/country-tel-code.json'));
          $countryData = json_decode($countryData, true);
    ?>

<div class="enquiry-form input-group input-group-lg col-md-12">
  <div class="input-group-prepend  col-md-12 row">
  <div class="col-md-4">

      <select class="form-control" id="country_code" name="country_code" >
                                <option value="" class="">Select Country Code</option>
                                @if (!empty($countryData))
                                    @foreach($countryData AS $countryDetail)
                                    <option class="" value="{{$countryDetail['dial_code']}}" 
                                    @if($countryDetail['dial_code'] == $userConfigObj->defaultCountry) selected @endif
                                        placeholder = "{{$countryDetail['name']}}">
                                        {{$countryDetail['name']}} ({{$countryDetail['dial_code']}})
                                    </option>
                                    @endforeach
                                @endif
                            </select>
    </div>
                            <div class="col-md-8">
                              <input type="text" class="form-control" name="company_mobile" id="company_mobile" value="" placeholder="Enter Whatsapp number">
                            </div>
                            <span id="spnPhoneStatus"></span>

                    </div>
                    <div class="row" style="margin-top:10px">                    
                      <div class="col-md-12">
                              <a class="whatsapp-btn" target="_blank" href="javascript:;" onclick="handleWhatsappShare(this)">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>Share on Whatsapp 
                              </a>
                            </div>
    </div>




</div>





    <table class="contact-table">

      <tbody>

        <tr>

          <td><a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}"> <i class="fa fa-phone contact-icon"></i> </a></td>

          <td><a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="contact-text"> {{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}</a>
        @if(!empty($companyInfoData->country_landline))
        <br/>
        <a target="_blank" href="tel:{{$companyInfoData->country_landline}}" class="contact-text">
          {{$companyInfoData->country_landline}} </a>
        @endif

          </td>

        </tr>

        <tr>

          <td><a href="mailto:{{$userObj->email}}"> <i class="fa fa-envelope contact-icon"></i> </a></td>

          <td><a href="mailto:{{$userObj->email}}" class="contact-text"> {{$userObj->email}}</a></td>

        </tr>

        <tr>

          <td><a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw"> <i class="fa fa-map-marker contact-icon"></i> </a></td>

          <td>
            <a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" class="contact-text contact-action-container-text"> {!!rtrim(preg_replace('#<p(.*?)>(.*?)</p>#is', '$2<br/>', $companyInfoData->company_address), "<br/>");!!}</a>

          </td>

        </tr>

        <tr>

          <td><a target="_blank" href="{{$companyInfoData->company_website}}"> <i class="fa fa-globe contact-icon"></i> </a></td>

          <td><a target="_blank" href="{{$companyInfoData->company_website}}" class="contact-text"> {{$companyInfoData->company_website}}</a></td>

        </tr>

      </tbody>

    </table>


    <div class="p-20"></div>

  </div>

</div>

<div class="page-container" id="aboutus">

  <h2 class="section-heading">{{$userConfigObj->aboutLabel}}</h2>


  <p class="about-txt">{!!$companyInfoData->company_info!!}</p>

@if(!empty($companyInfoData->broucher_file))
<h3>Documents</h3>

  <a class="download" href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download="">

  <div class="pdf-icon"><i class="fa fa-file-pdf-o"></i></div>

  <div class="pdf-number">{{$companyInfoData->company_name}}</div>

  <div class="download-icon"><i class="fa fa-download"></i></div>

  </a>
@endif

</div>

@if(count($paymentMasterData) > 0)
<div class="page-container" id="payment">

  <h2 class="section-heading">Payment</h2>

  <div>

    <table class="about-tbl">

      <tbody>

      @foreach($paymentMasterData as $paymentMasterDetail)
        @if ($paymentMasterDetail->type == 'bank')
        <tr>
          <td align="center" colspan="2">Account Details:</td>
        </tr>
        <tr>
          <td colspan="2">
          <table class="about-tbl">
            <tbody>
              <tr>
                <td width="50%" bgcolor="#f5f5f5" class="td-label"><h3>Bank Name</h3></td>
                <td bgcolor="#f5f5f5">: </td>
                <td bgcolor="#f5f5f5"> {{$paymentMasterDetail->bank_name}} </td>
              </tr>
              <tr>
                <td width="50%" class="td-label"><h3>Account Holder Name</h3></td>
                <td>: </td>
                <td> {{$paymentMasterDetail->account_holder_name}} </td>
              </tr>
              <tr>
                <td width="50%" bgcolor="#f5f5f5" class="td-label"><h3>Account Number</h3></td>
                <td bgcolor="#f5f5f5">: </td>
                <td bgcolor="#f5f5f5"> {{$paymentMasterDetail->account_no}} </td>
              </tr>
              <tr>
                <td width="50%" class="td-label"><h3>Account Type</h3></td>
                <td>: </td>
                <td> {{ucwords($paymentMasterDetail->account_type)}} Account </td>
              </tr>
              <tr>
                <td width="50%" bgcolor="#f5f5f5" class="td-label"><h3>IFSC code</h3></td>
                <td bgcolor="#f5f5f5">: </td>
                <td bgcolor="#f5f5f5"> {{$paymentMasterDetail->ifsc_code}} </td>
              </tr>
            </tbody>
          </table>
          </td>
        </tr>
        @else
        <tr>
        <td width="50%" class="td-label"><h6>{{ucwords($paymentMasterDetail->type)}} Number:</h6></td>
            <td> {{$paymentMasterDetail->account_no}} </td>
          </tr>
          <tr>
            <td>
                @if(!empty($paymentMasterDetail->qr_img))
                    <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" class="qr-image">
                @endif

            </td>
          </tr>
        @endif
      @endforeach


      </tbody>

    </table>



  </div>

</div>
@endif

  @if($galleryData->count() > 0)

<div class="page-container" id="photogallery">

  <h2 class="section-heading">GALLERY</h2>

  <div class="p-10"></div>

  <div class="images-container">
    @foreach($galleryData as $galleryDetail)

    <div class="image-wrapper">
    <h3 class="text text-center" style="text-align:center;">{{$galleryDetail->title}}</h3>
    <img onclick="openImageModal(this)" alt="" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" style="width:100%"> 
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

    </div>

    @endforeach

  </div>

</div>
@endif

@if($userConfigObj->isShowEnquiry == '1')

<div class="page-container" id="enquiry">

  <h2 class="section-heading">ENQUIRY FORM</h2>

  <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">

    <input type="text" name="enquiryName" data-parsley-trigger="change" id="enquiryName" placeholder="Enter Full Name" pattern="[a-zA-Z ]*$" required=""><br>

    <br>

    <div class="flex">

      <div class="enquiry-phoneNumber">

        <input type="text" data-parsley-length-message="Contact should have (4-10) digits." data-parsley-type-message="Contact should have only digits." data-parsley-type="number" data-parsley-length="[4, 10]" name="phoneNumber" id="phoneNumber" required="" placeholder="Enter Phone Number">
        <br>

      </div>

      <div class="enquiry-email">

        <input type="email" name="email" id="email" data-parsley-trigger="change" placeholder="Enter Email">
        <br>

      </div>

    </div>

      <textarea name="message" id="message" required="" placeholder="Enter Message"></textarea> 
    <br>

                <input type="hidden" id="companyEmail" value="admin.admin@gmail.com">
                <input type="submit" id="inquiry-send" value="Send">

  </form>

</div>
@endif

<!-- Footer Menu -->

<div class="footer">

  <ul class="footer-menu">

    <li> <a class="footer-menu-link" href="#home"> <i class="footer-menu-icon fa fa-home"></i>
      <div class="footer-menu-text">HOME</div>
      </a> </li>

    <li> <a class="footer-menu-link" href="#aboutus"> <i class="footer-menu-icon fa fa-user"></i>
      <div class="footer-menu-text">{{$userConfigObj->aboutLabel}}</div>
      </a> </li>

      @if(count($paymentMasterData) > 0)
      <li> <a class="footer-menu-link" href="#payment"> <i class="footer-menu-icon fa fa-inr"></i>

      <div class="footer-menu-text">PAYMENT</div>

      </a> </li>
      @endif

        @if($galleryData->count() > 0)

    <li> <a class="footer-menu-link" href="#photogallery"> <i class="footer-menu-icon fa fa-picture-o"></i>

      <div class="footer-menu-text">GALLERY</div>

      </a> </li>
      @endif


        @if($userConfigObj->isShowEnquiry == '1')

    <li> <a class="footer-menu-link" href="#enquiry"> <i class="footer-menu-icon fa fa-comments"></i>

      <div class="footer-menu-text">ENQUIRY</div>

      </a> </li>
          @endif

  </ul>

</div>

<!-- The image Modal Popup-->

<div id="imageModal" class="modal">  
<span class="close">&times;</span>

 <img class="modal-content fadeIn" id="img01" alt="">

  <div id="caption"></div>

</div>

<!-- The image Modal Popup END-->

    <input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/utils.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/star-rating.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>

<script type="text/javascript">
  $(".close").click(function() {
    document.getElementById('imageModal').style.display = 'none'
  })


$('#company_mobile').blur(function(e) {
   if (validatePhone('company_mobile')) {
      $('#company_mobile').css('border-color', 'black');
       $('#spnPhoneStatus').html('');
       $('#spnPhoneStatus').css('color', 'green');
       $(".whatsapp-btn").css('display', 'inline');
   }
   else {
      $('#company_mobile').css('border-color', 'red');
      $('#spnPhoneStatus').html('Invalid Phone Number');
      $('#spnPhoneStatus').css('color', 'red');
       $(".whatsapp-btn").css('display', 'none');
   }
});

  function validatePhone(txtPhone) {
    var a = document.getElementById(txtPhone).value;
    var filter = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
  }
</script>
</body></html>