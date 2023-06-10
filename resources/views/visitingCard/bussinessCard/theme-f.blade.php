<!DOCTYPE html>
<html lang="en">
    <head>
    <title>@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif</title>

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

    <!-- Twitter Meta Tags -->
    <meta name="twitter:image" content="{{url('public')}}/{{$companyInfoData->company_logo}}">
    <meta property="twitter:url" content="{{url('vc')}}/{{$userObj->slug}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif">
    <meta name="twitter:description" content="{{$companyInfoData->company_info}}">

  <!-- Required meta tags -->
    <link href="{{asset('public/visitingCard/bussinessCard/f/css/card_css20.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/f/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/f/css/awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/f/css/cart.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/f/css/feedback.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/f/css/css2.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/f/css/mobile_css.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/f/css/slider.css')}}">
    <script src="{{asset('public/visitingCard/bussinessCard/f/js/master_js.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/f/js/flickity-docs.min.js')}}"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    
    <style>
      .btn2 {
          background: chartreuse;
          border-radius: 20px;
          border-color: #ff0082;
          padding-top: 13px;
          padding-bottom: 14px;
          padding-left: 4px;
      }
    </style>
    <style>
        /* Gallery  Starts */
    .images-container {
        column-count: 3; 
        -webkit-column-count: 3;
        column-gap: 0;
        -webkit-column-gap: 0;
    }

    .images-container .image-wrapper {
        break-inside: avoid;
        -webkit-column-break-inside: avoid;
        /* padding: 3px; */
    }

    .images-container .image-wrapper img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s; border:1px solid #f5f5f5;
    }

    .images-container .image-wrapper img:hover {
        opacity: 0.7;
    }
    /* Gallery Completed */
    </style>
    <style>
        .font-white {
            color:white;
        }
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
      <style type="text/css">
          .purchase-form__renewal-price--strikethrough {
              text-decoration: line-through;
              color: red;
          }
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

      </style>

      <!-- CSS -->
      <!-- JavaScript -->


      <style type="text/css">
      .carousel-cell {
        width: 100%; /* full width */
        height: 200px;
        background: #fdf1d900;
        border-radius: 5px;
        
        counter-increment: gallelry-cel;
        /* center images in cells with flexbox */
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .carousel.is-fullscreen .carousel-cell {
        height: 100%;
      }

      .carousel-cell img {
      display: block;
          height: 100%;
          width: 100%;
      }
    
    </style>
    <style>
.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 50px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.9); 
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
}

.close {
    position: absolute;
    top: 0px;
    right: 15px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight:600;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
  </style>

      <script>
        function closeLoader(){
            console.log('yes');
            $('.card_loader_back').hide();
        }

        setTimeout(closeLoader,3000);
      </script>
    </head>

    <body oncontextmenu="return false">
        <div class="card_loader_back" style="display: block;">
        	<div class="loader2">
            <div class="loader_box">
              <div class="load1"></div>
              <div class="load2"></div>
              <div class="load3"></div>
              <div class="load4"></div>
              <div class="load5"></div>
            </div>
	          <h2>Loading...</h2>
          </div>
        </div>
<!----------------------copy from here ------------------------->
<!-- The image Modal Popup-->
<div id="imageModal" class="modal" style="display:none"> 

<span class="close" id="imageModalClose">×</span>
<img class="modal-content fadeIn" id="img01" alt="">
  <div id="caption"></div>
<div id="gallery_description"></div>
</div>

        <div class="card" id="home">
            @if($userConfigObj->isShowNoOfVisit == '1')
            <div class="view_counter"><i class="fa fa-eye"></i> <br>{{$userObj->no_visit}}</div>
            @endif
						
      			<div class="card_content">
            @if(!empty($companyInfoData->company_logo))
              <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="img-responsive" alt="Logo">
            @endif
        </div>
			  
        <div class="card_content2">
          @if (!empty($companyInfoData->company_name))
            <h2>{!! $companyInfoData->company_name !!}</h2>
            <p>{!! $userObj->name !!}</p>
          @else
            <h2>{!! $userObj->name !!}</h2>
          @endif
          <hr/>
          <p>@if(!empty($companyInfoData->company_profession)) ({!! $companyInfoData->company_profession !!}) @endif</p>
			</div>

			<div class="dis_flex">
				<a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" target="_blank">
            <div class="link_btn"><i class="fa fa-phone"></i> Call</div>
        </a>
        <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" target="_blank"><div class="link_btn"><i class="fa fa-whatsapp"></i> WhatsApp</div></a>				
				
        @if (!empty($companyInfoData->company_address))
				<a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank"><div class="link_btn"><i class="fa fa-map-marker"></i> Direction</div></a>
        @endif
        <a href="mailto:{{$userObj->email}}" target="_blank"><div class="link_btn"><i class="fa fa-envelope"></i> Mail</div></a>

        @if(!empty($companyInfoData->company_website))
        <a href="{{$companyInfoData->company_website}}" target="_blank"><div class="link_btn"><i class="fa fa-globe"></i> Website</div></a>
        @endif
      </div>
	
			<div class="contact_details">
				 <div class="contact_d" onclick="location.href=&#39;tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}&#39;"><i class="fa fa-phone"></i>
          <p>{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}} </p>
      </div>
      @if(!empty($companyInfoData->country_landline))
				 <div class="contact_d" onclick="location.href=&#39;tel:{{$companyInfoData->country_landline}}&#39;"><i class="fa fa-phone"></i><p>{{$companyInfoData->country_landline}}</p>
        </div>
      @endif
      <div class="contact_d" onclick="location.href=&#39;Mailto:{{$userObj->email}}&#39;"><i class="fa fa-envelope"></i><p>{{$userObj->email}}</p></div>

        @if (!empty($userObj->alternative_email))
      <div class="contact_d" onclick="location.href=&#39;Mailto:{{$userObj->alternative_email}}&#39;"><i class="fa fa-envelope"></i><p>{{$userObj->alternative_email}}</p></div>
      @endif

      @if (!empty($companyInfoData->company_address))				
      <div class="contact_d" onclick="location.href=&#39;https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw&#39;"><i class="fa fa-map-marker"></i><p>{!!$companyInfoData->company_address!!}</p></div>
      @endif				
      </div>
	
      <div class="dis_flex">
				<div class="share_wtsp">
					<form action="https://api.whatsapp.com/send" id="wtsp_form" target="_blank">
            <input type="text" name="phone" placeholder="WhatsApp Number with Country code" value="{{$userConfigObj->defaultCountry}}">
            <input type="hidden" name="text" value="{{url('vc')}}/{{$userObj->slug}}">
            <div class="wtsp_share_btn" onclick="subForm()"><i class="fa fa-whatsapp"></i> Share</div></form>					
				</div>
			</div>
			
		<div class="dis_flex">
        <a href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf" class="addphonebook">
        <div class="big_btns">Save to Contacts <i class="fa fa-download"></i></div></a>	
			           @if (!empty($companyInfoData->company_name))
           <a class="big_btns" onclick="openShareModal(this, '{!! $companyInfoData->company_name !!}')"><i class="fa fa-share-alt shadow-button-icon"></i>&nbsp;Share</a>
           @else
           <a class="big_btns" onclick="openShareModal(this, '{!! $userObj->name !!}')"><i class="fa fa-share-alt shadow-button-icon"></i>&nbsp;Share</a>
           @endif

			</div> 
			<div class="dis_flex"></div>
	</div>
	
    <div class="card2 dis_flex">
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
	<p>{!!$companyInfoData->company_info!!}</p>
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
	</div>

@endif

	</div>
	
<!------------shopping online-------------------------->


	
		
	
	
<!--------------youtube videos--------------------------->	

	
	
		
<!----------product and services ----------------------->		
<!--
	<div class="card2" id="product_services">
		<h3>Products &amp; Services</h3>
		
	
	</div>
-->	


		
<!----------image gallery----------------------->		

@if($galleryData->count() > 0)


<div class="card2" id="photogallery">


  <h3 class="section-heading">GALLERY</h3>


  <div class="p-10"></div>
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
            <h4 class="text text-center" style="text-align:center;">{{$galleryDetail->title}}</h4>

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
                <div class="dis_flex">
                  <a class="addphonebook" href='https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text=Enquery for product: {{urlencode($galleryDetail->title)}}' target='_blank'>
                  <div class="big_btns">Enquiry Now</i></div>
                  </a>
			    			</div>

              </div>
            @endforeach
 

  </div>

</div>
@endif
		
<!----------payment info----------------------->	

@if(count($paymentMasterData) > 0)

	<div class="card2" id="payment">
		<h3>Payment Info</h3>
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
          </td>
        </tr>
        @else
        <tr>
        <td colspan="2">
            <table class="about-tbl">
            <tbody>
                <tr>
                <td width="50%"><b>{{ucwords($paymentMasterDetail->type)}} Number</b></td>
                <td>: </td>
                <td>{{$paymentMasterDetail->account_no}} </td>
                </tr>
                <tr>
                    <td>
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
	
<!----------Feedback----------------------->

<!---div class="card2" id="feedback">

<h3>Feedback</h3>
<script>

$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>
<form id="feedback_form"  method="post">
<p class="select_star"> Select Star</p>
	<div class="rating">
	
	  <label>
		<input type="radio" name="r_star" value="1" required>
		<span class="icon">★</span>
	  </label>
	  <label>
		<input type="radio" name="r_star" value="2" required>
		<span class="icon">★</span>
		<span class="icon">★</span>
	  </label>
	  <label>
		<input type="radio" name="r_star" value="3" required>
		<span class="icon">★</span>
		<span class="icon">★</span>
		<span class="icon">★</span>   
	  </label>
	  <label>
		<input type="radio" name="r_star" value="4" required>
		<span class="icon">★</span>
		<span class="icon">★</span>
		<span class="icon">★</span>
		<span class="icon">★</span>
	  </label>
	  <label>
		<input type="radio" name="r_star"  value="5" required>
		<span class="icon">★</span>
		<span class="icon">★</span>
		<span class="icon">★</span>
		<span class="icon">★</span>
		<span class="icon">★</span>
	  </label>

	</div>
	
	<input type="name" name="r_name" placeholder="Your name" required>
	<input type="email" name="r_email" placeholder="Your email id" >
	
	<input type="number" max="999999999999" min="5555555555" name="r_contact" placeholder="Your contact ">
	<textarea name="r_msg" placeholder="Your feedback "></textarea>
	<input type="submit" name="submit_feedback" value="Submit Feedback"> 

</form>


</div--->

<!--<div class="card2" id="feedback">-->

<!--<h3>Feedback</h3>-->
<!--<script>-->

<!--$(':radio').change(function() {-->
<!--  console.log('New star rating: ' + this.value);-->
<!--});-->
<!--</script>-->
<!--<form id="feedback_form"  method="post">-->
<!--<p class="select_star"> Select Star</p>-->
<!--	<div class="rating">-->
	
<!--	  <label>-->
<!--		<input type="radio" name="r_star" value="1" required>-->
<!--		<span class="icon">★</span>-->
<!--	  </label>-->
<!--	  <label>-->
<!--		<input type="radio" name="r_star" value="2" required>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--	  </label>-->
<!--	  <label>-->
<!--		<input type="radio" name="r_star" value="3" required>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>   -->
<!--	  </label>-->
<!--	  <label>-->
<!--		<input type="radio" name="r_star" value="4" required>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--	  </label>-->
<!--	  <label>-->
<!--		<input type="radio" name="r_star"  value="5" required>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--		<span class="icon">★</span>-->
<!--	  </label>-->

<!--	</div>-->
	
<!--	<input type="name" name="r_name" placeholder="Your name" required>-->
<!--	<input type="email" name="r_email" placeholder="Your email id" >-->
	
<!--	<input type="number" max="999999999999" min="5555555555" name="r_contact" placeholder="Your contact ">-->
<!--	<textarea name="r_msg" placeholder="Your feedback "></textarea>-->
<!--	<input type="submit" name="submit_feedback" value="Submit Feedback"> -->

<!--	<p class="note">Note: for privecy and security reasons we do not show your contact details. For more info you can contact admin or your franchisee.</p>-->
<!--</form>-->


<!--</div>-->
<!----------Feedback end ----------------------->
	
	

	



<!----------email to  info----------------------->	
@if($userConfigObj->isShowEnquiry == '1')

<div class="card2 page-container" id="enquery">

  <h3 class="section-heading">ENQUIRY FORM</h3>

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

		
<div class="create_card_btn">
    <a class="font-white" href="{{url('register?packageId=3')}}" target="_blank">Create Your Card <b> </b></a><b>
    <a class="font-white" href="{{url('/')}}" target="_blank"> © {{date('Y')}}</a><br></b></div><b>
		
    </b></div><b>

	
	
	
	<br>
	<br>
	<br>
	<br>
	<div class="menu_bottom">
		<div class="menu_container">
			<div class="menu_item" onclick="location.href=&#39;#home&#39;"><i class="fa fa-home"></i> Home</div>
			<div class="menu_item" onclick="location.href=&#39;#about_us&#39;"><i class="fa fa-briefcase"></i>{{$userConfigObj->aboutLabel}}</div>
			<!-- <div class="menu_item" onclick="location.href=&#39;#product_services&#39;"><i class="fa fa-ticket"></i>Product &amp; Services</div> -->
			<!-- <div class="menu_item" onclick="location.href=&#39;#shop_online&#39;"><i class="fa fa-archive"></i>Shop</div> -->
            @if($galleryData->count() > 0)
			<div class="menu_item" onclick="location.href=&#39;#photogallery&#39;"><i class="fa fa-image"></i>Gallery</div>
			@endif
            <!-- <div class="menu_item" onclick="location.href=&#39;#youtube_video&#39;"><i class="fa fa-video-camera"></i>Youtube Videos</div> -->
            @if(count($paymentMasterData) > 0)
            <div class="menu_item" onclick="location.href=&#39;#payment&#39;"><i class="fa fa-money"></i>Payment</div>
            @endif
			<div class="menu_item" onclick="location.href=&#39;#enquery&#39;"><i class="fa fa-comment"></i>Enquery</div>
		</div>
	</div>
    <input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">


</b>


</body>

  <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
<script src="{{asset('public/js/prevent.js')}}"></script>

<link href="{{asset('public/visitingCard/bussinessCard/common/css/gallery-category.css')}}" rel="stylesheet">
<script id="skype_bootstrap" src="{{asset('public/visitingCard/bussinessCard/common/js/gallery-category.js')}}"></script>

<script>
document.getElementById('imageModal').style.display = 'none';
</script>
<script>
$(document).ready(function(){
	$('.mobile_home').on('click',function(){
		$('#header').toggleClass('add_height');
		
	})
})
</script>
<script>
$(document).ready(function(){
  $('.wtsp_share_btn').on('click',function(){
    $('#wtsp_form').submit();
  })
  
})
</script>
		
<script>
  $(document).ready(function(){
    $('#close_sharer,#share_box_pop').on('click',function(){
      $('.share_box').slideToggle();
    });
  })

$(document).on("click", "#imageModalClose", function(e) {
  e.preventDefault();
  $("#imageModal").hide()
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