<!DOCTYPE html>
<html style="--theme-color:#64af35; --theme-color-light:#095da0;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>{!! $companyInfoData->company_name !!}</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
<meta property="og:title" content="{!! $companyInfoData->company_name !!}">
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
<link href="{{asset('public/visitingCard/bussinessCard/e/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('public/visitingCard/bussinessCard/e/css/template2.css')}}" rel="stylesheet">
<link href="{{asset('public/visitingCard/bussinessCard/e/css/fonts.css')}}" rel="stylesheet">
<link href="{{asset('public/visitingCard/bussinessCard/e/css/star-rating.css')}}" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">

<style>
.whatsapp-btn{
  background-color:var(--theme-color) !important;
  color:#FFF !important;
}
</style>
<style type="text/css">
    .purchase-form__renewal-price--strikethrough {
        text-decoration: line-through;
        color: red;
    }
    .iconbtn {
      display: flex !important;
    }
    .contact-icon {
      display: table-cell !important;
    }

</style>

<script>
    document.documentElement.style.setProperty('--theme-color', '#64af35');
    document.documentElement.style.setProperty('--theme-color-light', '#64af35');
</script>

</head>

<body oncontextmenu="return false">

<div class="main-wrapper" id="home">

  <div class="firstpagetop">

  @if($userConfigObj->isShowNoOfVisit == '1')
    <div class="views"><i class="fa fa-eye"></i> 
      Views: <b>{{$userObj->no_visit}}
      </b></div>
  @endif

    <!-- Card Holder Profile Pic -->

    <div class="companylogo">
        @if(!empty($companyInfoData->company_logo))
          <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="img-responsive">
        @endif

    </div>

    

    <!-- Card Holder Company Name -->

    @if (!empty($companyInfoData->company_name))
    <div class="companyname bottomborder">{!! $companyInfoData->company_name !!}</div>
    @endif
    

    <!-- Card Holder First Name and Last Name -->

    <div class="profile">

      <div class="profilepic">
        @if(!empty($userObj->profile_pic))
            <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="img-responsive" alt="">
        @else
            <img src="{{url('public')}}/upload/user_profile.jpg" class="img-responsive" alt="">
        @endif

      </div>

      <div class="name">{!! $userObj->name !!} <br>

        <span>@if(!empty($companyInfoData->company_profession)) ({!! $companyInfoData->company_profession !!}) @endif</span></div>

    </div>

    <!--<div class="name">Ms. Yashvi Dave <span>(Co-Founder)</span></div>-->

    <div class="actionbtn"> 
      <a class="contact-icon" target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}">
       <i class="fa fa-phone iconbtn"></i>
        </a>

      <a class="contact-icon" target="_blank" href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}">
        <i class="fa fa-whatsapp iconbtn"></i>
      </a>

      @if (!empty($companyInfoData->company_address))
      <a class="contact-icon" target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw">
        <i class="fa fa-map-marker iconbtn"></i>
      </a>
      @endif
 
      <a class="contact-icon" target="_blank" href="mailto:{{$userObj->email}}"> <i class="fa fa-envelope fa-flip-horizontal iconbtn"></i>
      </a> 
       </div>

  </div>

  <div class="firstpagebottom">

    <table class="contact-table">

      <tbody>

        @if (!empty($companyInfoData->company_address))
        <tr>
          <td><a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw">
           <i class="fa fa-map-marker contact-icon"></i> </a></td>
          <td><a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" class="contact-text"> {!!$companyInfoData->company_address!!} </a></td>
        </tr>
        @endif

      <tr>
          <td><a href="mailto:{{$userObj->email}}"> <i class="fa fa-envelope contact-icon"></i> </a></td>
          <td><a href="mailto:{{$userObj->email}}" class="contact-text"> {{$userObj->email}} </a></td>
        </tr>
        <tr>

      @if (!empty($userObj->alternative_email))
        <tr>
          <td><a href="mailto:{{$userObj->alternative_email}}"> <i class="fa fa-envelope contact-icon"></i> </a></td>

          <td><a href="mailto:{{$userObj->alternative_email}}" class="contact-text"> {{$userObj->alternative_email}} </a></td>
        </tr>
      @endif

        @if(!empty($companyInfoData->company_website))
        <tr>
          <td><a target="_blank" href="{{$companyInfoData->company_website}}"> <i class="fa fa-globe contact-icon"></i> </a></td>
          <td><a target="_blank" href="{{$companyInfoData->company_website}}" class="contact-text"> {{$companyInfoData->company_website}} </a></td>
        </tr>
        @endif


        <tr>
          <td>
            <a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}   ">
            <i class="fa fa-phone contact-icon"></i>
            </a>
          </td>
          <td>
            <a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="contact-text"> {{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}} </a>
            @if(!empty($companyInfoData->country_landline))
            <br/>
            <a target="_blank" href="tel:{{$companyInfoData->country_landline}}" class="contact-text">
              {{$companyInfoData->country_landline}} </a>
            @endif
          </td>
        </tr>


      </tbody>

    </table>
    <div class="shadow-btn"> 
            <a href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf" class="addphonebook"><i class="fa fa-download shadow-button-icon"></i>Save to Contacts</a>
        </div>

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


</div>


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
    <div class="p-20"></div>

</div>

    <div class="page-container">
      <h2 class="section-heading">Scan QR Code for share your digital cards</h2>
        <div class="full-divider"></div>
          <div class="text text-center" style="text-align: center;">
          {!! QrCode::size(250)->generate($vistingUrl) !!}
            <p>{{$vistingUrl}}</p>
            <a class="col-md-12 text-center whatsapp-btn text-white" href="{{url('downloadQrCode')}}/{{$userObj->slug}}" >Download QR Code &nbsp;<i class="fa fa-download"></i></a>  

      </div>
    </div>

<div class="page-container" id="aboutus">

  <h2 class="section-heading">{{$userConfigObj->aboutLabel}}</h2>

      <div class="about-us-text">
        <div style="text-align: justify;">{!!$companyInfoData->company_info!!}</div>
      </div>

@if(!empty($companyInfoData->broucher_file))
<h3>Documents</h3>

  <a class="download" href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download="">

  <div class="pdf-icon"><i class="fa fa-file-pdf-o"></i></div>

  <div class="pdf-number">@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif</div>

  <div class="download-icon"><i class="fa fa-download"></i></div>

  </a>
@endif

</div>

{{--
<div class="page-container" id="products-services">

  <h2 class="section-heading">Services</h2>

  <div>

    <div class="card">

      <h3 class="card-title">Website Design &amp; Development</h3>

      <p class="product-description"></p>

      <p>Mobile friendly website with eye catchy design built with latest technology that takes your business to the next level!</p>

      <p></p>

      <img onclick="openImageModal(this)" alt="Website Design &amp; Development" src="./Digital Business Card _ Create Your Digital Business Cards Online__files/web-design-and-development.jpg" style="width:100%;margin-bottom: 15px;">

      <div class="product-enquiry-section">

        <div class="product-price"> Price: ₹1250*/Month </div>

        <a href="https://wa.me/919825222824?text=Hi,%20I%20am%20interested%20in%20your%20product/service:%20Web%20Design%20and%20Development.%20Please%20provide%20more%20details." target="blank" class="product-enquiry-btn">Enquiry</a> </div>

    </div>

    <div class="card">

      <h3 class="card-title">Graphic Design</h3>

      <p class="product-description"></p>

      <p>Graphic design is the art of communication, stylizing, and problem-solving through the use of type, space and image.</p>

      <p></p>

      <img onclick="openImageModal(this)" alt="Graphic Design" src="./Digital Business Card _ Create Your Digital Business Cards Online__files/graphic-design.jpg" style="width:100%;margin-bottom: 15px;">

      <div class="product-enquiry-section">

        <div class="product-price"> Price: As Per Requirement </div>

        <a href="https://wa.me/919825222824?text=Hi,%20I%20am%20interested%20in%20your%20product/service:%20Graphic%20Design.%20Please%20provide%20more%20details." target="blank" class="product-enquiry-btn">Enquiry</a> </div>

    </div>

    <div class="card">

      <h3 class="card-title">Logo Design &amp; Branding</h3>

      <p class="product-description"></p>

      <p>A Logo is a design symbolizing ones organization. It is a design that is used by an organization for its branding.</p>

      <p></p>

      <img onclick="openImageModal(this)" alt="Logo Design &amp; Branding" src="./Digital Business Card _ Create Your Digital Business Cards Online__files/logo-design.jpg" style="width:100%;margin-bottom: 15px;">

      <div class="product-enquiry-section">

        <div class="product-price"> Price: ₹4000* </div>

        <a href="https://wa.me/919825222824?text=Hi,%20I%20am%20interested%20in%20your%20product/service:%20Logo%20Design%20and%20Branding.%20Please%20provide%20more%20details." target="blank" class="product-enquiry-btn">Enquiry</a> </div>

    </div>

    <div class="card">

      <h3 class="card-title">Digital Marketing</h3>

      <p class="product-description"></p>

      <p>We provide Digital Marketing services like Search Engine Optimization (SEO), Social Media Marketing (SMM), and Email Marketing.</p>

      <p></p>

      <img onclick="openImageModal(this)" alt="Digital Marketing" src="./Digital Business Card _ Create Your Digital Business Cards Online__files/digital-marketing.jpg" style="width:100%;margin-bottom: 15px;">

      <div class="product-enquiry-section">

        <div class="product-price"> Price: As Per Requirement </div>

        <a href="https://wa.me/919825222824?text=Hi,%20I%20am%20interested%20in%20your%20product/service:%20Digital%20Marketing.%20Please%20provide%20more%20details." target="blank" class="product-enquiry-btn">Enquiry</a> </div>

    </div>

  </div>

</div>
--}}

@if(count($paymentMasterData) > 0)
<div class="page-container" id="payment">

  <h2 class="section-heading">Payment</h2>

  <div>

<!--     <table class="about-tbl">

      <tbody>

        <tr>

          <td width="50%" class="td-label"><h3>Paytm Number</h3></td>

          <td>: </td>

          <td> 9825222824 </td>

        </tr>

        <tr>

          <td width="50%" class="td-label"><h3>Phone Pe Number</h3></td>

          <td>: </td>

          <td> 9825222824 </td>

        </tr>

        <tr>

          <td width="50%" class="td-label"><h3>Google Pay Number</h3></td>

          <td>: </td>

          <td> 9825222824 </td>

        </tr>

      </tbody>

    </table>

 -->    <h3 align="center">Account Details:</h3>

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
              <tr>
                <td width="50%" class="td-label"><h3>Branch Name</h3></td>
                <td >: </td>
                <td > {{$paymentMasterDetail->branch_name}} </td>
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

        <div class="full-divider"></div>

        @if (!empty($galleryCatInfo))
        <div align="center">
            <button class="btn btn-default filter-button active all-filter-btn" data-filter="all">All</button>
            @foreach($galleryCatInfo as $catlbl => $catName)
            <button class="btn btn-default filter-button" data-filter="{{$catlbl}}">{{$catName}}</button>
            @endforeach
        </div>
        @endif

    <div class="images-container row">

  @foreach($galleryData as $galleryDetail)
    <div class="image-wrapper gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{$galleryDetail->category_name}}">
              <h3 class="text text-center" style="text-align:center;">{{$galleryDetail->title}}</h3>
              <img onclick="openImageModal(this)" alt="{{$galleryDetail->title}}" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" style="width:100%" description="{{$galleryDetail->description}}">

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
                <a class="whatsapp-btn" href='https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text=Enquery for product: {{urlencode($galleryDetail->title)}}' target='_blank'>
                      <div class='btn_buy'>Enquiry Now</div>
                  </a>

              </div>
            @endforeach
 

  </div>

</div>
@endif

@if(count($videosData) > 0)
<div class="page-container" id="videogallery">

  <h2 class="section-heading">Videos</h2>

  <div class="p-10"></div>

  <div>

      @foreach($videosData as $videosDetail)
    <div class="card">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item full_video_width" src="{{$videosDetail->video_path}}" title="{{$videosDetail->title}}" allowfullscreen ng-show="showvideo" frameborder="0" ></iframe>
      </div>
      <h3 class="text text-center" style="text-align:center;">{{$videosDetail->title}}</h3>
      </div>
      @endforeach
  </div>

  <div class="section-close"></div>

</div>
@endif

{{--
<div class="page-container" id="feedback">

  <h2 class="section-heading">Feedbacks</h2>

  <div class="feedback-list">

    <div class="feedback-wrapper"> <span class="feedback-name-wrapper"><span class="feedback-name">Jigar Dave</span> on June 6, 2020 </span>

      <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>

      <div>Excellent Web Design &amp; Development Serviecs.</div>

      <hr>

    </div>

    <div class="feedback-wrapper"> <span class="feedback-name-wrapper"><span class="feedback-name">Amrish Patel</span> on June 5, 2020 </span>

      <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>

      <div>Creative Logo Design Services.</div>

      <hr>

    </div>

  </div>

  <form class="feedback-form card" novalidate="">

    <div class="feedback-form-heading">Give Feedback</div>

    <span class="gl-star-rating gl-star-rating-ltr" data-star-rating=""><select class="star-rating" id="rating" name="rating">

      <option value="">Select a rating</option>

      <option value="5">Excellent</option>

      <option value="4">Very Good</option>

      <option value="3">Average</option>

      <option value="2">Poor</option>

      <option value="1">Terrible</option>

    </select><span class="gl-star-rating-stars s0"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span><span class="gl-star-rating-text">Select a Rating</span></span>

    <input type="text" name="feedbackName" id="feedbackName" placeholder="Enter Full Name">

    <textarea name="feedback" id="feedback" placeholder="Enter your feedback"></textarea>

    <input type="submit" value="Give Feedback" onclick="sendFeedback(this, &#39;prashant-dave&#39;)">

  </form>

</div>
--}}

@if($userConfigObj->isShowEnquiry == '1')

<div class="page-container" id="enquiry">

  <h2 class="section-heading">ENQUIRY FORM</h2>

  <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
  <meta name="csrf_token" content="{{ csrf_token() }}" />
  @csrf
  <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">

  <input type="text" name="enquiryName" data-parsley-trigger="change" id="enquiryName" placeholder="Enter Full Name" pattern="[a-zA-Z ]*$" required=""><br>

    <br>

    <div class="flex">

      <div class="enquiry-phoneNumber">

      <input type="text" data-parsley-length-message="Contact should have (4-10) digits." data-parsley-type-message="Contact should have only digits." data-parsley-type="number" data-parsley-length="[4, 10]" name="phoneNumber" id="phoneNumber" required="" placeholder="Enter Phone Number"><br>

        <br>

      </div>

      <div class="enquiry-email">

      <input type="email" name="email" id="email" data-parsley-trigger="change" placeholder="Enter Email"><br>

        <br>

      </div>

    </div>

    <textarea name="message" id="message" required="" placeholder="Enter Message"></textarea><br>
    <input type="hidden" id="companyEmail" value="admin.admin@gmail.com">
                <input type="submit" id="inquiry-send" value="Send">

    <br>


  </form>

</div>

@endif


<div class="copyright-wrapper">
      <div class="copyright-wrapper-inner"> © {{date('Y')}}
        <a href="{{url('/')}}" target="_blank">
          <b>{{url('/')}}</b>
        </a>.
      </div>
    </div>




<!-- Footer Menu -->

<div class="footer">

  <ul class="footer-menu">

    <li> <a class="footer-menu-link" href="#home"> <i class="footer-menu-icon fa fa-home"></i>

      <div class="footer-menu-text">HOME</div>

      </a> </li>

    <li> <a class="footer-menu-link" href="#aboutus"> <i class="footer-menu-icon fa fa-user"></i>

      <div class="footer-menu-text">{{$userConfigObj->aboutLabel}}1

      </div>

      </a> </li>

      {{--
    <li> <a class="footer-menu-link" href="#products-services"> <i class="footer-menu-icon fa fa-shopping-cart"></i>

      <div class="footer-menu-text">PRODUCTS</div>

      </a> </li>
      --}}

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

    @if(count($videosData) > 0)
    <li> <a class="footer-menu-link" href="#videogallery"> <i class="footer-menu-icon fa fa-youtube-square"></i>

      <div class="footer-menu-text">VIDEOS</div>

      </a> </li>

    <li> <a class="footer-menu-link" href="#feedback"> <i class="footer-menu-icon fa fa-star-half-o"></i>

      <div class="footer-menu-text">FEEDBACK</div>

      </a> </li>
    @endif

    <li> <a class="footer-menu-link" href="#enquiry"> <i class="footer-menu-icon fa fa-comments"></i>

      <div class="footer-menu-text">ENQUIRY</div>

      </a> </li>
      <li>
            <a class="footer-menu-link" href="{{url('register?packageId=3')}}">
                    <i class="footer-menu-icon fa fa-id-card" aria-hidden="true"></i>
                    <div class="footer-menu-text">MAkE My CARD</div>
                </a>
          </li>
  </ul>

</div>

<!-- The image Modal Popup-->

<div id="imageModal" class="modal"> <span class="close" id="imageModalClose">×</span> <img class="modal-content fadeIn" id="img01" alt="Gallery Image">

  <div id="caption"></div>
<div id="gallery_description"></div>
</div>

<!-- The share Modal Popup -->

<div id="shareModal" class="modal share-modal">

  <div class="share-form fadeInUpBig">

    <div class="share-form-header">

      <h3 class="share-form-header-text">Share Card</h3>

      <span class="close" id="shareModalClose">×</span> </div>

    <div class="share-form-buttons-container">

      <div class="share-btn-heading"> <img src="./Digital Business Card _ Create Your Digital Business Cards Online__files/tild-arrow.svg" class="share-btn-arrow" alt="">

        <div class="share-btn-heading-text">Share my Virtual Business Card in your network.</div>

      </div>

      <ul class="share-btn">

        <li> <i class="share-btn-whatsapp fa fa-whatsapp"></i>  </li>

        <li> <i class="share-btn-sms fa fa-comments"></i>  </li>

        <li> <i class="share-btn-facebook fa fa-facebook-f"></i> </li>

        <li> <i class="share-btn-twitter fa fa-twitter"></i> </li>

        <li> <i class="share-btn-skype fa fa-skype"></i> </li>

        <li> <i class="share-btn-pinterest fa fa-pinterest"></i> </li>

        <li> <i class="share-btn-linkedin fa fa-linkedin"></i> </li>

        <li> <i class="share-btn-mail fa fa-envelope"></i> </li>

      </ul>

    </div>

  </div>

</div>

<input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

<script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>

<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/utils.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/star-rating.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
<script src="{{asset('public/js/prevent.js')}}"></script>

  <link href="{{asset('public/visitingCard/bussinessCard/common/css/gallery-category.css')}}" rel="stylesheet">
  <script id="skype_bootstrap" src="{{asset('public/visitingCard/bussinessCard/common/js/gallery-category.js')}}"></script>

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