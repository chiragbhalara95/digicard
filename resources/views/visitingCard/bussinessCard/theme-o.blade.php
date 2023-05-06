<!DOCTYPE html>
<html>
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

        <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/o/css/ncss.css')}}" >
        <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/o/css/feedback.css')}}" >
        <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/o/css/cart.css')}}" >
        <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/o/css/card_css41.css')}}" >
        <script src="{{asset('public/visitingCard/bussinessCard/o/js/master_js.js')}}"></script>
		<link href="{{asset('public/visitingCard/bussinessCard/o/css/awesome.min.css')}}" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

		<meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Digital Visiting Card">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="apple-touch-icon" sizes="192x192" href="images/logo192.png" type="image/png">
        <link rel="apple-touch-icon" sizes="512x512" href="images/logo512.png" type="image/png">
        <link rel="mask-icon" href="images/logo192.png" color="#5bbad5">

        <link rel="manifest" id="manifest-placeholder">
    </head>
    <style>
        body {    background: url({{asset('public/visitingCard/bussinessCard/o/img/bg36.png')}}) !important;
        background-position: center !important;
        background-attachment: fixed !important;
        background-repeat: repeat !important;
        }
        .card_content2 h2 {
        margin: 1px 3px 10px;
        }
    </style>
    <script>
        function closeLoader(){
            console.log('yes');
            $('.card_loader_back').hide();
        }
        
        setTimeout(closeLoader,5000);
        
    </script>
    <div class="card_loader_back">
        <div class="loader2">
            <div class="circle_loader2"></div>
            <br/><br/><br/><br/>
            <div class="loader_box">
                <span class="spanhead">						@if (!empty($companyInfoData->company_name))
						{!! $companyInfoData->company_name !!}
						@else
						{!! $userObj->name !!}
						@endif
</span> Loading ...
            </div>
        </div>
    </div>
    <body onload="closeLoader()" oncontextmenu="return false">
        <script>
            $(document).ready(function(){
                $('.mobile_home').on('click',function(){
                    $('#header').toggleClass('add_height');
                    
                })
            })
            
        </script>
        <style>
            .full_page_alert {position: fixed;
            width: -webkit-fill-available;
            height: -webkit-fill-available;
            background: white;
            top: 0;
            z-index: 9999999;
            padding: 63px;
            text-align: center;}
            html,input,select,textarea {
            font-family:Poppins !important}
            .btn2 {    margin: 20px auto;
            background: #4caf50;
            color: white;
            padding: 14px 20px;
            width: fit-content;
            border-radius: 5px;}
            .premium_member {           background: #2196f3;
            width: fit-content;
            text-align: center;
            color: white;
            position: absolute;
            right: 0px;
            top: -22px;
            padding: 6px 4px;
            font-size: 12px;
            border-radius: 51px;
            font-family: sans-serif;
            border: 2px solid;}
            .premium_member i{}
            .free_member {        font-size: 11px;
            background: #ff5722;
            width: fit-content;
            padding: 6px 7px;
            position: absolute;
            top: -26px;
            right: -10px;
            border-radius: 24px;
            color: white;
            letter-spacing: 0;
            font-family: sans-serif;}
        </style>
        <!----------------------copy from here ------------------------->
        <link rel="stylesheet" href="panel/ads.css" >
        <div class="card" id="home">
			@if($userConfigObj->isShowNoOfVisit == '1')
            <div class="view_counter"><i class="fa fa-eye"></i> <span class="count"> View: {{$userObj->no_visit}}</span></div>
			@endif
            <div class="card_content">
            @if(!empty($companyInfoData->company_logo))
              <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="img-responsive" alt="Logo">
            @endif
        </div>
            <div class="card_content2" >
                <h2>
				@if (!empty($companyInfoData->company_name))
					<h2>{!! $companyInfoData->company_name !!}</h2>
					<p>{!! $userObj->name !!}</p>
				@else
					<h2>{!! $userObj->name !!}</h2>
				@endif
                </h2>
				<p>@if(!empty($companyInfoData->company_profession)) ({{$companyInfoData->company_profession}}) @endif</p>
            </div>
            <div class="dis_flex" id="top_contact_btn">
				<a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" target="_blank">
                   <div class="link_btn"><i class="fa fa-phone"></i> Call</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" target="_blank">
					<div class="link_btn"><i class="fa fa-whatsapp"></i> WhatsApp</div>
                </a>
                @if (!empty($companyInfoData->company_address))
                        <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" target="_blank"><div class="link_btn"><i class="fa fa-map-marker"></i> Direction</div></a>
                @endif

                <a href="mailto:{{$userObj->email}}" target="_blank"><div class="link_btn"><i class="fa fa-envelope"></i> Mail</div></a>
                @if(!empty($companyInfoData->company_website))
                <a href="{{$companyInfoData->company_website}}" target="_blank"><div class="link_btn"><i class="fa fa-globe"></i> Website</div></a>
                @endif
            </div>
            <div class="contact_details" id="top_contact_btn2">
                <div class="contact_d" onclick="location.href='tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}'">
                    <i class="fa fa-phone"></i>
                    <p>{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}} </p>
                </div>
				@if(!empty($companyInfoData->country_landline))
                <div class="contact_d" onclick="location.href='tel:{{$companyInfoData->country_landline}}'">
                    <i class="fa fa-phone"></i>
                    <p>{{$companyInfoData->country_landline}} </p>
                </div>
				@endif
                <div class="contact_d" onclick="location.href='Mailto:{{$userObj->email}}'">
                    <i class="fa fa-envelope"></i>
                    <p>{{$userObj->email}}</p>
                </div>
      @if (!empty($userObj->alternative_email))
                <div class="contact_d" onclick="location.href='Mailto:{{$userObj->alternative_email}}'">
                    <i class="fa fa-envelope"></i>
                    <p>{{$userObj->alternative_email}}</p>
                </div>
      @endif


                <div class="contact_d" onclick="location.href='#address'">
                    <i class="fa fa-map-marker"></i>
                    <p>
						@if (!empty($companyInfoData->company_name))
						{!! $companyInfoData->company_name !!}
						@else
						{!! $userObj->name !!}
						@endif
					</p>
                </div>
            </div>
            <div class="dis_flex" id="share_on_whatsapp">
                <div class="share_wtsp">
				<form action="https://api.whatsapp.com/send" id="wtsp_form" target="_blank">
            <input type="text" name="phone" placeholder="WhatsApp Number with Country code" value="{{$userConfigObj->defaultCountry}}">
            <input type="hidden" name="text" value="{{url('vc')}}/{{$userObj->slug}}">
            <div class="wtsp_share_btn" onclick="subForm()"><i class="fa fa-whatsapp"></i> Share</div></form>                   
                    <script>
                        $(document).ready(function(){
                            $('.wtsp_share_btn').on('click',function(){
                                $('#wtsp_form').submit();
                            })
                            
                        })
                    </script>
                </div>
            </div>
            <div class="dis_flex" id="popup_share_box">
				<a href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf" class="addphonebook">
					<div class="big_btns">Save to Contacts <i class="fa fa-download"></i></div>
                </a>
                <!-- <div class="big_btns" id="share_box_pop">Share <i class="fa fa-share-alt"></i></div>
	                <div class="big_btns save-card-button" id="buttonInstall">Save Card <i class="fa fa-cloud-download"></i></div> -->
                <!-- <a href="pdf_download.php?n=sn-global-services">
                    <div class="big_btns" id="">Save PDF <i class="fa fa-file"></i></div>
                </a> -->
            </div>
			@if (count($socialMediaData) > 0)

			<div class="dis_flex" id="social_media_icons">
			@foreach($socialMediaData as $socialMediaDetail)
				@if ($socialMediaDetail->type == 'fb')
				<a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-btn-facebook fa fa-facebook"></i></div></a>
				@elseif($socialMediaDetail->type == 'in')
				<a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-btn-linkedin fa fa-instagram"></i></div></a>
				@elseif($socialMediaDetail->type == 'li')
				<a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-btn-facebook fa fa-linkedin"></i></div></a>
				@elseif($socialMediaDetail->type == 'tw')
				<a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-btn-twitter fa fa-twitter"></i></div></a>
				@elseif($socialMediaDetail->type == 'pi')
				<a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-btn-facebook fa fa-pinterest"></i></div></a>
				@elseif($socialMediaDetail->type == 'yt')
				<a href="{{$socialMediaDetail->url}}" target="_blank"><div class="social_med"><i class="share-btn-facebook fa fa-youtube"></i></div></a>
				@endif
			@endforeach
			</div>
			@endif
            <!-- <div class="change_lang" onclick="changeLang()">Change Language <i class="fa fa-language"></i></div> -->
        </div>
        <!--language change---->
        <div class="lang_pop">
        <style>
            body {
            font-family: 'Poppins';font-size: 22px;
            position: relative;
            min-height: auto !important;
            top: 0 !important;
            padding: 0px !important;
            margin: 0px !important;
            }
            .goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon * {
            font-family: 'Poppins' !important;
            }
            .goog-te-gadget .goog-te-combo option {        display: none;
            color: black;
            padding: 5px;
            background: white;
            font-size: 13px;}
            .goog-te-gadget .goog-te-combo option:hover {
            background: #2196f3;
            color: white;
            }
            .goog-te-gadget .goog-te-combo option[value="en"],
            .goog-te-gadget .goog-te-combo option[value="ta"],
            .goog-te-gadget .goog-te-combo option[value="hi"],
            .goog-te-gadget .goog-te-combo option[value="kn"],
            .goog-te-gadget .goog-te-combo option[value="ml"],
            .goog-te-gadget .goog-te-combo option[value="bn"],
            .goog-te-gadget .goog-te-combo option[value="zh-CN"],
            .goog-te-gadget .goog-te-combo option[value="zh-TW"],
            .goog-te-gadget .goog-te-combo option[value="ja"],
            .goog-te-gadget .goog-te-combo option[value="ar"],
            .goog-te-gadget .goog-te-combo option[value="ru"],
            .goog-te-gadget .goog-te-combo option[value="ne"],
            .goog-te-gadget .goog-te-combo option[value="sa"],
            .goog-te-gadget .goog-te-combo option[value="sv"],
            .goog-te-gadget .goog-te-combo option[value="ko"],
            .goog-te-gadget .goog-te-combo option[value="or"],
            .goog-te-gadget .goog-te-combo option[value="gu"],
            .goog-te-gadget .goog-te-combo option[value="pa"],
            .goog-te-gadget .goog-te-combo option[value="ur"]   {
            display:block;
            }
            select option[value="en"]{
            font-weight:700;
            }
            .goog-te-banner-frame {display:none;}
            div#goog-gt-tt {
            padding: 10px 14px;
            display: none !important;
            }
        </style>
        </head>
        <body>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</div>

<script>
                    
                        function changeLang(){
                            $('.lang_pop').slideToggle();
                        }
                
                
                
</script>

<!--language change---->
            
    <!-- <div class="share_box">
                
                
                <div class="close" id="close_sharer">&times;</div>
                <p>Share My Digital Card </p>
                        <a href="https://api.whatsapp.com/send?text=#" target="_blank"><div class="shar_btns"><i class="fa fa-whatsapp" id="whatsapp2"  target="_blank"></i><p>WhatsApp</p></div></a>
                    <a href="sms:?body=#" target="_blank"><div class="shar_btns"><i class="fa fa-comment" ></i><p>SMS</p></div></a>
                    
                    <a href="https://www.facebook.com/sharer/sharer.php?u=#" target="_blank"><div class="shar_btns"><i class="fa fa-facebook" ></i><p>Facebook</p></div></a>
                    <a href="https://twitter.com/intent/tweet?text=#" target="_blank"><div class="shar_btns"><i class="fa fa-twitter"></i><p>Twitter</p></div></a>
                    <a href="" target="_blank"><div class="shar_btns"><i class="fa fa-instagram"></i><p>Instagram</p></div></a>
                    <a href="https://www.linkedin.com/cws/share?url=#" target="_blank"><div class="shar_btns"><i class="fa fa-linkedin"></i><p>Linkedin</p></div></a>
                    
                    <a href="https://telegram.me/share/url?url=#&text=Digital Visiting Card" target="_blank"><div class="shar_btns"><i class="fa fa-telegram"></i><p>Telegram</p></div></a>
                </div>
            
                <script>
                    $(document).ready(function(){
                        $('#close_sharer,#share_box_pop').on('click',function(){
                            $('.share_box').slideToggle();
                        });
                    })
                
                
                </script>
                
            
     -->
    <!-- <div class="card2" >
    
    <h3>Scan QR Code to go to Mini Website</h3>
    <img style="display:none" src="https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=#" id="qr_code_d">
    
        <div class="url_copy" style="display:none">
        <input type="" value="#" id="myInputurl">
        <div class="buttonCopy" onclick="copyUrlFirst()">Copy Link <i class="fa fa-copy"></i></div>

            <script>
            function copyUrlFirst() {
              // Get the text field
              var copyText = document.getElementById("myInputurl");

              // Select the text field
              copyText.select();
              copyText.setSelectionRange(0, 99999); // For mobile devices

              // Copy the text inside the text field
              navigator.clipboard.writeText(copyText.value);
              
              // Alert the copied text
              alert("Url Copied: ");
            }
            </script>
        </div>
    
    
        
    
            <img src="https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=#" id="qr_code_d">
                <h2 class="qr_h2">sn global services</h2>
                <div class="url_copy"><span class="url_copy_tag">New URL </span>
                <input type="" value="#" id="myInputurl2"><div class="buttonCopy" onclick="copyUrlSecond()">Copy URL <i class="fa fa-copy"></i></div>

                    <script>
                    function copyUrlSecond() {
                      // Get the text field
                      var copyText = document.getElementById("myInputurl2");

                      // Select the text field
                      copyText.select();
                      copyText.setSelectionRange(0, 99999); // For mobile devices

                      // Copy the text inside the text field
                      navigator.clipboard.writeText(copyText.value);
                      
                      // Alert the copied text
                      alert("Url Copied: ");
                    }
                    </script>
                
                </div>
        
        
    </div>
    
     -->
<!--------------Ads us ---------------------------> 

<!--------------Ads us ---------------------------> 
    <style> #advertising {display:none !important ;} </style>       <div class="ads_class_pc" id="advertising" >
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6553893939414590"
     crossorigin="anonymous"></script>
<!-- bestvcardn.php -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6553893939414590"
     data-ad-slot="5472595944"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>




    <div class="ads_class" id="advertising" >
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6553893939414590"
     crossorigin="anonymous"></script>
<!-- bestvcardn.php2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6553893939414590"
     data-ad-slot="3114041828"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    
    </div>

    <div class="card2">
      <h3 style="margin-top: 1%">Scan QR Code for share your digital cards</h3>
        <div class="full-divider"></div>
          <div class="text text-center" style="margin-top:1%;text-align: center;">
          {!! QrCode::size(250)->generate($vistingUrl) !!}
      </div>
    </div>

<!--------------about us --------------------------->   
    
    <div class="card2" id="about_us">
        <h3>{{$userConfigObj->aboutLabel}}</h3>
        <div style="text-align: justify;">{!!$companyInfoData->company_info!!}</div>
		@if(!empty($companyInfoData->broucher_file))
		<center>
		<a class="download" href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download="">
		<div class="pdf_download">Download PDF  <i class="fa fa-file"></i></div></a>
		 </center>
		@endif
    <style>
    .pdf_download {    padding: 10px 18px;
    width: fit-content;
    margin: 0 auto 9px;
    background: #2196f3;
    color: white;
    border-radius: 5px;
    display: inline-block;
    font-size: 13px;}
    </style>
    
    </div>
    
<!------------shopping online-------------------------->



    <!-- <div class="card2" id="shop_online">    
		<h3>Our Offers</h3>
		<div class="order_box" >
		</div>      
        
	</div>
	<div class="added_to_cart"></div>
		<div class="cart_refresh">
    		<div class="cart_show"><span class="close" onclick="hideCart()"><i class="fa fa-close"></i></span>
	        <h2>Cart is empty!</h2>     
    	</div>
	</div> -->
    


<script>
function showCart(){
    $('.cart_show').show();
}
function hideCart(){
    $('.cart_show').hide();
}

function reloadCartShow(){
    $(".cart_refresh").load(location.href + " .cart_show");
}

function refreshCart(){
    
        $.ajax({
            url:'add_to_cart.php',
            method:'POST',
            data:{refresh_cart:"yes"},
            dataType:'text',
            success:function(data){
                $('#cart_item_count').html(data);
                
                }
            });
    
}
function removeItem(rid){
    
    $('.added_to_cart').html('<div class="cart_success_alert"><i class="fa fa-refresh fa-spin"></i></div>');
        $.ajax({
            url:'add_to_cart.php',
            method:'POST',
            data:{remove_item:"yes",rid:rid},
            dataType:'text',
            success:function(data){
                reloadCartShow();
                refreshCart();
                $('.added_to_cart').html('');
                }
            });
    
}
refreshCart();
function addToCart(cid,pid){
    let qty=$('#qty'+pid).val();
    let pro=$('#pro'+pid).val();
    let pro_price=$('#pro_price'+pid).val();
    
    if(qty>0){
        $('.added_to_cart').html('<div class="cart_success_alert"><i class="fa fa-refresh fa-spin"></i></div>');
        $.ajax({
            url:'add_to_cart.php',
            method:'POST',
            data:{cid:cid,pid:pid,qty:qty,pro:pro,add_cart:"Yes",pro_price:pro_price},
            dataType:'text',
            success:function(data){
                $('.added_to_cart').html(data);
                refreshCart();
                reloadCartShow();
                }
            });
        
    }else {
        alert("Please select quantity.");
    }
    
}
    
</script>

    
        
<!----------product and services ----------------------->       
<!--     
    <div class="card2" id="product_services" >
        <h3>Products & Services</h3>
                
        <div class="product_s">
			<p>DIGITAL VISITING CARD/Mini Website</p>
				<div class="d_dis">Create wedding card online </div>
				<br><br>
					<a href='https://api.whatsapp.com/send?phone=919953647762&text=Enquery for product: Digital Wedding Card' target='_blank'>
						<div class='btn_buy'>Enquiry Now</div>
					</a>
				</div>
				<div class="product_s"><p>Social Media Poster Maker</p>
					<div class="d_dis"></div><br><br>
					<a href='https://api.whatsapp.com/send?phone=919953647762&text=Enquery for product: Free Business Card | SN Global Services' target='_blank'><div class='btn_buy'>Enquiry Now</div></a>
				</div>      
    
    	</div>
     -->


        
<!----------image gallery----------------------->       
    
@if($galleryData->count() > 0)
	<div class="card2" id="gallery" >
        <h3>Gallery</h3>
        <div class="image_container">

			<div class="containerimgback">
				<div class="containerimg">
				@foreach($galleryData as $galleryDetail)
					<div class="mySlides" >
					<img alt="{{$galleryDetail->title}}" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" style="width:100%">
                    <h4 class="text text-center" style="text-align:center;">{{$galleryDetail->title}}</h4>
                    <div class="dis_flex">
                        <a class="addphonebook" href='https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text=Enquery for product: {{urlencode($galleryDetail->title)}}' target='_blank'>
                        <div class="big_btns">Enquiry Now</i></div>
                        </a>
                    </div>

					</div>

                    @endforeach

					<a class="prev" onclick="plusSlides(-1)">❮</a>
					<a class="next" onclick="plusSlides(1)">❯</a>
					<div class="row">
						<div class="column" ></div>    
					</div>
				</div>
			</div>
	    </div>
    </div>
@endif

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "grid";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

    
<!--------------youtube videos--------------------------->  

    <!-- <div class="card2" id="youtube_video">
        <h3>Youtube Videos</h3>
        
        
        
    </div>
     -->



        
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
<!-- <div class="card2" id="feedback">

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

    <p class="note">Note: for privecy and security reasons we do not show your contact details. For more info you can contact admin or your franchisee.</p>
</form>

<p class="tag_feed">Latest feedback</p><div class="feedback_row"><div class="feedback_block"><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star_rate">5/5 Rating</div><p class="feed_back">👍🏻 great service </p><div class="feed_by">By: <i>Vivek ar</i></div><div class="feed_date">Date: 09/Dec/2022 07:10AM</div></div><div class="feedback_block"><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star_rate">5/5 Rating</div><p class="feed_back">menu button is very good and desktop view also looks good. </p><div class="feed_by">By: <i>aman</i></div><div class="feed_date">Date: 03/Oct/2022 07:32AM</div></div><div class="feedback_block"><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star_rate">5/5 Rating</div><p class="feed_back">Good job bro
thanks for helping me</p><div class="feed_by">By: <i>Prakash kumar</i></div><div class="feed_date">Date: 18/Apr/2022 05:37PM</div></div><div class="feedback_block"><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star_rate">5/5 Rating</div><p class="feed_back">Great work 👍🏻 </p><div class="feed_by">By: <i>MANOJ</i></div><div class="feed_date">Date: 15/Apr/2022 08:45PM</div></div><div class="feedback_block"><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star">★</div><div class="star_rate">5/5 Rating</div><p class="feed_back">testing</p><div class="feed_by">By: <i>naveen</i></div><div class="feed_date">Date: 17/Mar/2022 12:28AM</div></div></div>
</div> -->
<!----------Feedback end ----------------------->   



<style>
.card2 iframe {
    margin: 8px auto;
    position: relative;
    border-radius: 5px;
    width: -webkit-fill-available;
    min-height: 256px;
    background: white;
}

</style>
<div class="card2" id="address">
<h3>Location Address</h3>
<span style="    font-size: 13px;
    text-align: center;
    color: #3f51b5;">
Showing result: 

<a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw&#39;" target="_blank">{!! $companyInfoData->company_name !!} <i class="fa fa-external-link"></i></a>
</span>
<br>
<iframe width="100%" height="auto" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw&output=embed"></iframe>

</div>


<!--------------Ads us ---------------------------> 
    <!--------------Ads us ---------------------------> 
    
    <!-- <div class="ads_class" id="advertising" >
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6553893939414590"
             crossorigin="anonymous"></script>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6553893939414590"
             data-ad-slot="7403790568"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
</div>
     -->
<!----------email to  info----------------------->  
    <!-- <div class="card2" id="enquery">
        
        <form action="https://api.whatsapp.com/send?" target="_blank">
        <h3>Contact Us</h3>
            <input type="" name="phone" placeholder="" value="919953647762" hidden required>
            
            <textarea name="text" placeholder="Enter your query" required></textarea>
            <input type="submit" value="Send" >
        
        
        </form>
        
    <br>
        
        
        <a href="#"><div class="create_card_btn"> Create Your Card  / Become Franchisee <br><br> <div class="btn_s43">Click here </div><br> SN Global Services</div></a>
        
        </div>
         -->
        <br>
        <br>
    <style>
    .create_card_btn {
                     background: black;
    color: white;
    padding: 20px;
    border-radius: 0px;
    line-height: 0.8;
    margin: 11px auto;
    font-size: 13px;
    width: -webkit-fill-available;
    text-align: center;
    }
    
    
    .btn_s43 {    background: #4caf50;
    color: white;
    padding: 10px;
    width: fit-content;
    margin: 0 auto;
    border-radius: 4px;}
    
    
#svg_down{position: fixed;
    bottom: 0;
    z-index: -1;
    left: 0;}


    
    </style>
    
    
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

    
    <div class="menu_bottom">
        <div class="m_menu_head" id="mmhead" ><span onclick="openMenu()"><i class="fa fa-bars"></i></span></div>
            
        <div class="menu_container" onclick="closeMenu()">
            <div class="menu_item" onclick="location.href='#home'"><i class="fa fa-home"></i> Home</div>
            <div class="menu_item" onclick="location.href='#about_us'"><i class="fa fa-briefcase"></i>{{$userConfigObj->aboutLabel}}</div>
            <!-- <div class="menu_item" onclick="location.href='#product_services'"><i class="fa fa-ticket"></i>Product & Services</div> -->
            <!-- <div class="menu_item" onclick="location.href='#shop_online'"><i class="fa fa-archive"></i>Shop</div> -->
            @if($galleryData->count() > 0)
			<div class="menu_item" onclick="location.href='#gallery'"><i class="fa fa-image"></i>Gallery</div>
            @endif
			<!-- <div class="menu_item" onclick="location.href='#youtube_video'"><i class="fa fa-video-camera"></i>Youtube Videos</div> -->
            @if(count($paymentMasterData) > 0)
			<div class="menu_item" onclick="location.href='#payment'"><i class="fa fa-money"></i>Payment</div>
			@endif
			<!-- <div class="menu_item" onclick="location.href='#feedback'"><i class="fa fa-star"></i>Feedback</div>
            <div class="menu_item" onclick="location.href='#enquery'"><i class="fa fa-comment"></i>Enquiry</div> -->
        </div>
    </div>
    
    <script>
    
    const windowwidth=$('body').outerWidth();
    
    if(windowwidth <= 683 ){
        
        console.log('menu ok'+windowwidth);
        function openMenu(){
            $('#mmhead').html('<span onclick="closeMenu()"><i class="fa fa-close"></i></span>');
            $('.menu_bottom').css({'left':'0px','transition':'0.3s'});
        }
        function closeMenu(){
                $('#mmhead').html('<span onclick="openMenu()"><i class="fa fa-bars"></i></span>');
            $('.menu_bottom').css({'left':'-100%','transition':'0.3s'});
            $('#mmhead').show();
            
        }
    }else {
        console.log('menu not ok'+windowwidth);
        $('#mmhead').hide();
    }
    
    

    
    </script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
<script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
<script src="{{asset('public/js/prevent.js')}}"></script>


</body>
