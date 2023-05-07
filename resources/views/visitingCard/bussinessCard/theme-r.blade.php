<html lang="en">
   <head>
   <title>@if(!empty($companyInfoData->company_name)){{$companyInfoData->company_name}}@else{!! $userObj->name !!}@endif</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
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

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <link href="{{asset('public/visitingCard/bussinessCard/common/css/gallery-category.css')}}" rel="stylesheet">

    <link href="{{asset('public/visitingCard/bussinessCard/r/css/awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/r/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/r/css/css.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/r/css/mobile_css.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/r/css/card_css6.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">


      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&amp;family=Roboto&amp;display=swap" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <style>
        .parsley-required{
            color:red;
        }
        .parsley-type {
            color: red;
        }
        .parsley-length{
            color:red;
        }
        .vcard-eight .vcard-eight-heading {
          line-height: 24px;
        }
.personface {
    width: 90px;
    margin: 10px;
    border: 1px solid #e5e5e5;
    height: 91px;
    border-radius: 50%;
    overflow: hidden;
    text-align: center;
    align-items: center;
    padding-right: 0%;
}
.profile{display:flex; justify-content: center;
    align-items: center;}
.img-responsive{max-width:100%;height:auto;width:auto;}

    </style>


<style>
.full_page_alert {position: fixed;
    width: -webkit-fill-available;
    height: -webkit-fill-available;
    background: white;
    top: 0;
    z-index: 9999999;
    padding: 63px;
    text-align: center;}


.filter-button {
    border-color: #2e2c41 !important;
    color: #2e2c41 !important;
}
.filter-button.active {
    border-color: #2e2c41 !important;
    background-color: #2e2c41 !important;
    color: #FFF !important
}
.filter-button:hover {
    border-color: #2e2c41 !important;
    background-color: #2e2c41 !important;
    color: #FFF !important
}
</style>


<script>


</script>
<!----------------------copy from here ------------------------->


</head>

<body>
<div class="card" id="home">

    @if($userConfigObj->isShowNoOfVisit == '1')
    <div class="view_counter"><i class="fa fa-eye"></i> <br>{{$userObj->no_visit}}</div>
    @endif

    <div class="card_content">
          @if(!empty($companyInfoData->company_logo))
          <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="img-fluid banner-image position-relative" alt="Company Logo">
          @elseif(!empty($userObj->profile_pic))
          <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="img-fluid banner-image position-relative" alt="Company Logo">
          @endif
    </div>
    <div class="card_content2">

    @if (!empty($companyInfoData->company_name))
    <h2>{!!$companyInfoData->company_name!!}</h2>

    <div class="profile card_content">
          <div class="personface">
            @if(!empty($userObj->profile_pic))
                <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="img-responsive" alt="">
            @else
                <img src="{{url('public')}}/upload/user_profile.jpg" class="img-responsive" alt="">
            @endif

          </div>
      </div>

    <h4>{!! $userObj->name !!}</h4>
    <p>@if(!empty($companyInfoData->company_profession)) ({{$companyInfoData->company_profession}}) @endif</p>

    @else
    <h2>{!! $userObj->name !!}</h2>
    <p>@if(!empty($companyInfoData->company_profession)) ({{$companyInfoData->company_profession}}) @endif</p>

    <div class="profile card_content">
      <div class="personface">
        @if(!empty($userObj->profile_pic))
            <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="img-responsive" alt="">
        @else
            <img src="{{url('public')}}/upload/user_profile.jpg" class="img-responsive" alt="">
        @endif
        </div>
      </div>

    @endif


</div>

<div class="dis_flex">
    <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" target="_blank"><div class="link_btn"><i class="fa fa-phone"></i> Call</div></a>
    <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" target="_blank"><div class="link_btn"><i class="fa fa-whatsapp"></i> WhatsApp</div></a>

     @if (!empty($companyInfoData->company_address))
        <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank"><div class="link_btn"><i class="fa fa-map-marker icon" title="Map"></i> Location</div>
        </a>
      @endif



    <a href="mailto:{{$userObj->email}}" target="_blank"><div class="link_btn"><i class="fa fa-envelope"></i> Mail</div></a>
</div>

<div class="contact_details">
    <div class="contact_d"><i class="fa fa-phone"></i>
    <p>
        <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="text-white">
        {{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}
        </a>
    </p>
    </div>

    @if(!empty($companyInfoData->country_landline))
    <div class="contact_d"><i class="fa fa-phone"></i>
    <p>
        <a href="tel:{{$companyInfoData->country_landline}}" class="text-white">
        {{$companyInfoData->country_landline}}
        </a>
    </p>
    </div>
    @endif

    <div class="contact_d"><i class="fa fa-envelope"></i>
        <p><a href="mailto:{{$userObj->email}}" target="_blank">{{$userObj->email}}</a></p>
    </div>
     @if (!empty($userObj->alternative_email))
    <div class="contact_d"><i class="fa fa-envelope"></i>
        <p><a href="mailto:{{$userObj->alternative_email}}" target="_blank">{{$userObj->alternative_email}}</a></p>
    </div>
      @endif

     @if (!empty($companyInfoData->company_address))
    <div class="contact_d"><i class="fa fa-map-marker"></i><p>{!! $companyInfoData->company_address !!}</p></div>
    @endif

    @if(!empty($companyInfoData->company_website))
    <div class="contact_d"><i class="fa fa-globe"></i>
        <p><a href="{{$companyInfoData->company_website}}" target="_blank">{{$companyInfoData->company_website}}</a></p>
    </div>

    @endif

</div>

<div class="dis_flex" id="share_on_whatsapp">
    <div class="share_wtsp">
        <form action="https://api.whatsapp.com/send" id="wtsp_form" target="_blank">
            <input type="text" name="phone" placeholder="WhatsApp Number with Country code" value="{{$userConfigObj->defaultCountry}}">
            <input type="hidden" name="text" value="{{url('vc')}}/{{$userObj->slug}}">
            <div class="wtsp_share_btn" ><i class="fa fa-whatsapp"></i> Share On WhatsApp</div>
        </form>
    </div>
</div>


            <div class="dis_flex">

            <a href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="{{$userObj->slug}}.vcf"><div class="big_btns">Save to Contacts <i class="fa fa-download"></i></div></a>

              @if (count($socialMediaData) > 0)
                <div class="dis_flex">
                  @foreach($socialMediaData as $socialMediaDetail)
                      @if ($socialMediaDetail->type == 'fb')
                          <span class="social_med social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                          <a href="{{$socialMediaDetail->url}}" target="_blank">
                          <i class="fa fa-facebook facebook-icon icon fa-2x" title="Facebook"></i>
                          </a>
                          </span>
                      @elseif($socialMediaDetail->type == 'in')
                          <span class="social_med social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                          <a href="{{$socialMediaDetail->url}}" target="_blank">
                          <i class="fa fa-instagram instagram-icon icon fa-2x" title="Instagram"></i>
                          </a>
                          </span>

                      @elseif($socialMediaDetail->type == 'li')
                          <span class="social_med social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-linkedin icon fa-2x"></i></a> 
                          </span>
                      @elseif($socialMediaDetail->type == 'tw')
                          <span class="social_med social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-twitter fa fa-twitter icon fa-2x"></i></a> 
                          </span>
                      @elseif($socialMediaDetail->type == 'pi')
                          <span class="social_med social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-pinterest icon fa-2x"></i></a> 
                          </span>
                      @elseif($socialMediaDetail->type == 'yt')
                          <span class="social_med social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                              <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-btn-facebook fa fa-youtube icon fa-2x"></i></a> 
                          </span>
                      @endif
                  @endforeach
                </div>
              @endif


    </div>

    <div class="card2 dis_flex" style="height: 450px">
      <h3>Scan QR Code for share your digital cards</h3>
        <div class="full-divider"></div>
          <div class="text text-center" style="text-align: center;">
          {!! QrCode::size(250)->generate($vistingUrl) !!}
            <p>{{$vistingUrl}}</p>
            <a class="col-md-12 text-center big_btns text-white" href="{{url('downloadQrCode')}}/{{$userObj->slug}}" >Download QR Code &nbsp;<i class="fa fa-download"></i></a>  

      </div>
    </div>


<!--------------about us --------------------------->

    <div class="card2" id="about_us">
        <h3>{{$userConfigObj->aboutLabel}}</h3>
        <p class="text text-dark">{!!$companyInfoData->company_info!!}</p>
          @if(!empty($companyInfoData->broucher_file))
            <div class="dis_flex">
                <a href="{{url('public')}}/{{$companyInfoData->broucher_file}}"><div class="big_btns">Download PDF<i class="fa fa-download"></i></div></a>
            </div>
          @endif

    </div>

<!------------shopping online-------------------------->






<!--------------youtube videos--------------------------->




<!----------product and services ----------------------->

    @if($galleryData->count() > 0)
    <div class="card2" id="product_services">
        <h3>Products &amp; Services</h3>

      <div class="p-10"></div>

        <div class="full-divider"></div>

        @if (!empty($galleryCatInfo))
        <div align="center ">
            <button class="btn btn-default filter-button active all-filter-btn" data-filter="all">All</button>
            @foreach($galleryCatInfo as $catlbl => $catName)
            <button class="btn btn-default filter-button" data-filter="{{$catlbl}}">{{$catName}}</button>
            @endforeach
        </div>
        @endif

        @foreach($galleryData as $galleryDetail)
        <div class="product_s filter {{$galleryDetail->category_name}}">
            <p>{{$galleryDetail->title}}</p>
            <img alt="{{$galleryDetail->title}}" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" class="rounded-circle" description="{{$galleryDetail->description}}">
            <br/>
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

        @endforeach
        </div>
    @endif


    </div>







<!----------payment info----------------------->

<!----------payment info----------------------->    

@if(count($paymentMasterData) > 0)

    <div class="card2" id="payment">
        <h3>Payment Info</h3>
        <table class="about-tbl table table-responsive table-boardered">
        <tbody>

        @foreach($paymentMasterData as $paymentMasterDetail)
        @if ($paymentMasterDetail->type == 'bank')
        <tr>
          <td align="center" colspan="3"><h3>Bank Account Details:</h3></td>
        </tr>
        <tr>
          <td colspan="3">
          <table class="about-tbl table table-responsive table-boardered">
            <tbody>
              <tr>
                <td width="45%">Bank Name</td>
                <td >: </td>
                <td > {{$paymentMasterDetail->bank_name}} </td>
              </tr>
              <tr>
                <td width="45%">Account Holder Name</td>
                <td>: </td>
                <td> {{$paymentMasterDetail->account_holder_name}} </td>
              </tr>
              <tr>
                <td width="45%">Account Number</td>
                <td >: </td>
                <td > {{$paymentMasterDetail->account_no}} </td>
              </tr>
              <tr>
                <td width="45%">Account Type</td>
                <td>: </td>
                <td> {{ucwords($paymentMasterDetail->account_type)}} Account </td>
              </tr>
              <tr>
                <td class="td-label" width="45%">IFSC code</td>
                <td>: </td>
                <td> {{$paymentMasterDetail->ifsc_code}} </td>
              </tr>
              <tr>
                <td width="45%" class="td-label">Branch Name</td>
                <td >: </td>
                <td > {{$paymentMasterDetail->branch_name}} </td>
              </tr>

            </tbody>
          </table>
          </td>
        </tr>
        @else
        <tr>
        <td colspan="3">
            <table class="about-tbl">
            <tbody>
            <tr>
              <td align="center" colspan="3"><h3>Upi Details:</h3></td>
            </tr>

                <tr>
                <td width="45%"><b>{{ucwords($paymentMasterDetail->type)}} Number</b></td>
                <td>: </td>
                <td>{{$paymentMasterDetail->account_no}} </td>
                </tr>
                <tr colspan="3">
                    <td colspan="3">
                        @if(!empty($paymentMasterDetail->qr_img))
                            <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" class="qr-image">
                        @endif

                    </td>
                </tr>
            </tbody>
            </table>
          </tr>
        @endif
        @endforeach
        </tbody>
    </table>

    </div>
@endif      

<!----------email to  info----------------------->
    <div class="card2" id="enquery">

       <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
            <input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

        <meta name="csrf_token" content="{{ csrf_token() }}" />
        @csrf
        <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">

            <h3>Contact Us</h3>

            <input type="text" name="enquiryName" class="form-control border-start-0" data-parsley-trigger="change" id="enquiryName" placeholder="Enter Your Name" pattern="[a-zA-Z ]*$" required="">
            <input type="text" class="form-control border-start-0" data-parsley-length-message="Contact should have (4-10) digits." data-parsley-type-message="Contact should have only digits." data-parsley-type="number" data-parsley-length="[4, 10]" name="phoneNumber" id="phoneNumber" required="" placeholder="Enter Phone Number">
            <input type="email" class="form-control border-start-0" name="email" id="email" data-parsley-trigger="change" placeholder="Enter Email" Required>
            <textarea name="message" id="message" class="form-control border-start-0" required="" placeholder="Enter Message"></textarea>
            <input type="hidden" id="companyEmail" value="admin.admin@gmail.com">
            <input type="submit" id="inquiry-send" value="Send" class="contact-btn text-white mt-4 d-block ms-auto">

        </form>

    <br>
        <br>
        <br>

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
            <div class="menu_item" onclick="location.href='#home'"><i class="fa fa-home" aria-hidden="true"></i> Home</div>
            <div class="menu_item" onclick="location.href='#about_us'"><i class="fa fa-briefcase" aria-hidden="true"></i>About Us</div>
            @if($galleryData->count() > 0)
            <div class="menu_item" onclick="location.href='#product_services'"><i class="fa fa-ticket"></i>Product & Services</div>
            @endif
            <!-- <div class="menu_item" onclick="location.href='#shop_online'"><i class="fa fa-archive"></i>Shop</div> -->
<!--             @if($galleryData->count() > 0)
            <div class="menu_item" onclick="location.href='#gallery'"><i class="fa fa-image" aria-hidden="true"></i>Gallery</div>
            @endif
 -->            <!-- <div class="menu_item" onclick="location.href='#youtube_video'"><i class="fa fa-video-camera"></i>Youtube Videos</div> -->
            @if(count($paymentMasterData) > 0)
            <div class="menu_item" onclick="location.href='#payment'"><i class="fa fa-money" aria-hidden="true"></i>Payment</div>
            @endif
            <!-- <div class="menu_item" onclick="location.href='#feedback'"><i class="fa fa-star"></i>Feedback</div> -->

            <div class="menu_item" onclick="location.href='#enquery'"><i class="fa fa-comment"></i>Enquiry</div>
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
<script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>

<script id="skype_bootstrap" src="{{asset('public/visitingCard/bussinessCard/common/js/gallery-category.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.wtsp_share_btn').on('click',function(){
            $('#wtsp_form').submit();
        })
    })
    $(document).ready(function(){
        $('.mobile_home').on('click',function(){
            $('#header').toggleClass('add_height');

        })
    })

</script>


</html>