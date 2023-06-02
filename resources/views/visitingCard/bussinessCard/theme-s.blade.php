<html lang="en" style="">
   <head>
      <meta http-equiv="Content-Language" content="en">
      <meta charset="utf-8">
      <meta name="robots" content="noydir">
      <meta name="robots" content="NOODP">
      <meta name="robots" content="INDEX, FOLLOW">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">

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

    <meta name="theme-color" content="#E7D7B9">


    <link href="{{asset('public/visitingCard/bussinessCard/s/css/AdminLTE.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/layout.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/mbr-additional.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/s/css/www-player.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

      <script async="" src="https://static.addtoany.com/menu/page.js"></script>
      <script src="https://static.addtoany.com/menu/modules/core.26680508.js" type="module"></script>
   </head>
   <body class="layout-top-nav sidebar-menu-mini sidebar-collapse noselect" style="min-height:120vh;overflow-x: auto;">
      <div id="fb-root" class=" fb_reset">
         <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
         </div>
      </div>
      <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=203576567010598&autoLogAppEvents=1'; fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script> 
      <div class="mobile-app-icon-bar "> <a class="text-shadow " href="sms:+916284409035"><i class="fa fa-comment-o"></i></a> <a class="text-shadow " href="https://wa.me/916284409035"><i class="fa fa-whatsapp"></i></a> <a class="text-shadow hidden" onclick="gotoBottom(this,event);"><img src="/images/profile/511.jpg?p=1635797630" class="fixedbutton1" style="border: 1px #FFF solid;"></a> <a class="text-shadow " href="tel:+916284409035"><i class="fa fa-phone "></i></a> <a class="text-shadow " href="tel:+919350721935"><i class="fa fa-phone "></i></a> <a class="text-shadow hidden" onclick="gotoBottom(this,event);"><i class="fa fa-arrow-down"></i></a> <a id="menu_click" class="text-shadow " onclick=" menu_click(this,event); "><i class="fa fa-bars "></i></a> </div>
      <div id="menu-screen" class=" " style="border-radius: 2px;">
         <!--<div class="outter-x"> --> <!--<div class="x pull-right" onclick="$('#menu-screen').fadeOut('slow');"></div>--> <!--</div>--> 
         <div class=" " style="background-color: rgba(255,255,255,0.7); ">
            <div id="menu_placeholder" class="" style=" ">
               <nav class="navbar navbar-fixed-bottom " role="navigation" style="z-index:2020; background-color:#E7D7B9 ;box-shadow: rgba(0, 0, 0, 0.1) 0px -3px 5px 0px;bottom:20px;height:78px">
                  <center>
                     <div class="wrapper " style="max-height:60px;margin:6px 2px;">
                        <section id="card" class="card text-center hscrollbar ">
                           <a class=" card--content text-navy button1" onclick="openAbout(this,event);"> <i class="fa fa-user-o text-white " style="font-size:1.0em;"></i><br>About Us </a> <a class=" card--content text-navy button1" onclick="openGal(this,event)"> <i class="fa fa-image text-white " style="font-size:1.0em"></i><br>Gallery </a> <a class=" card--content text-navy button1" onclick="openEnquiry(this,event);"> <i class="fa fa-send-o text-white " style="font-size:1.0em"></i><br>Enquiry </a> <a id="but_pay" class=" card--content text-navy button1" onclick="openPay(this,event)"> <i class="fa fa-dollar text-white " style="font-size:1.0em"></i><br>Payment Option </a> <a class=" card--content text-navy button1" href="/dvc/A511A25/get-card"> <i class="fa fa-save text-white " style="font-size:1.0em;"></i><br>Save Contact </a> <!--<a class=" card--content text-navy button1 ">--><!-- <i class="fa fa-braille text-white " style="font-size:1.0em;"></i><br>Add to Screen--><!-- </a>--> <a class=" card--content text-navy button1" onclick="openShare(this,event)"> <i class="fa fa-share-alt text-white " style="font-size:1.0em"></i><br>Share </a> <!-- <a class=" card--content text-navy button1" onclick="WishCopyToClipboard(this)">--> <!--<i class="fa fa-clipboard text-white " style="font-size:1.0em"></i><br><span>Copy Wishes</span>--> <!-- </a>--> 
                        </section>
                     </div>
                  </center>
               </nav>
            </div>
         </div>
      </div>
      <nav class=" " style="z-index:2010; background-color:#42929D ;box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;position: fixed;height:50px; top: 0; width: 100%;">
         <h4 class="text-center attraction-text-adv animated fadeInDown delay head-text1 " style="color:#FFFF00;margin-top:15px;">
           
         </h4>
      </nav>
      <div class="wrapper" style="min-height:100vh; content-visibility:auto">
         <header class="main-header " style="">
            <!-- Logo --> <!-- Header Navbar: style can be found in header.less --> 
            <nav class="navbar navbar-fixed-top hidden" role="navigation" style="z-index: 2010; background-color: rgb(66, 146, 157); box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px; position: fixed;">
               <h4 class="text-center attraction-text-adv animated fadeInDown delay head-text1 " style="color:#FFFF00;margin-top:15px;">
                   @if (!empty($companyInfoData->company_name))
                   {!!$companyInfoData->company_name!!}
                   @else
                   {!! $userObj->name !!}
                   @endif
             </h4>
            </nav>
            <nav class="navbar navbar-fixed-bottom " role="navigation" style="z-index:2020;margin-bottom:36px; background-color:#E7D7B9 ;box-shadow: rgba(0, 0, 0, 0.1) 0px -3px 5px 0px;">
               <center>
                  <div class="wrapper " style="max-height:50px;margin:6px 2px;">
                     <section id="card" class="card text-center hscrollbar ">
                        <a class=" card--content text-navy button1" onclick="openAbout(this,event);"> <i class="fa fa-user-o text-white " style="font-size:1.0em;"></i><br>About Us </a> <a class=" card--content text-navy button1" onclick="openGal(this,event)"> <i class="fa fa-image text-white " style="font-size:1.0em"></i><br>Gallery </a> <a class=" card--content text-navy button1" onclick="openEnquiry(this,event);"> <i class="fa fa-send-o text-white " style="font-size:1.0em"></i><br>Enquiry </a> <a id="but_pay" class=" card--content text-navy button1" onclick="openPay(this,event)"> <i class="fa fa-dollar text-white " style="font-size:1.0em"></i><br>Payment Option </a> <a class=" card--content text-navy button1" href="/dvc/A511A25/get-card"> <i class="fa fa-save text-white " style="font-size:1.0em;"></i><br>Save Contact </a> <!--<a class=" card--content text-navy button1 ">--><!-- <i class="fa fa-braille text-white " style="font-size:1.0em;"></i><br>Add to Screen--><!-- </a>--> <a class=" card--content text-navy button1" onclick="openShare(this,event)"> <i class="fa fa-share-alt text-white " style="font-size:1.0em"></i><br>Share </a> <!-- <a class=" card--content text-navy button1" onclick="WishCopyToClipboard(this)">--> <!--<i class="fa fa-clipboard text-white " style="font-size:1.0em"></i><br><span>Copy Wishes</span>--> <!-- </a>--> 
                     </section>
                  </div>
               </center>
            </nav>
         </header>
         <div class="content-wrapper cw" style="min-height: 403px; background-color: rgb(66, 146, 157);">
            <section id="top_section" class="content content_sec " style="padding: 0 0 0 0;min-width:100vw;">
               <!-- Slider main container -->
               <section class="mbr-section mbr-section--relative" id="msg-box4-c" style=" background-image: linear-gradient(to bottom, #E7D7B9 , #42929D );padding:6px 0px;">
                  <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 10px;">
                     <center> <i class="visible-xs text-sm badge margin bg-black"> Touch Card to Open </i> </center>
                     <div class="row">
                        <center>
                           <div class="mbr-box mbr-box--fixed mbr-box--adapted pad ">
                              <center>
                                 <section style=" margin-bottom: 160px;margin-top: -20px;" class=" ">
                                    <div class="content drop-shadow ">
                                       <section class="bussinesscard ">
                                          <div class="front metal" style="">
                                             <div class="front1 metal " style="">
                                                <h4 class=" gradient-text text2 " style=" font-weight:750;">
                                                 @if (!empty($companyInfoData->company_name))
                                                 {!!$companyInfoData->company_name!!}
                                                 @else
                                                 {!! $userObj->name !!}
                                                 @endif

                                                </h4>
                                             </div>
                                             <div class="top b-lazy  b-loaded" style="background-image: url({{url('public')}}/{{$companyInfoData->company_logo}})">

                                                @if(empty(!$userObj->profile_pic))

                                                <div class="logo drop-shadow b-lazy b-loaded" style="opacity: 1; background-image: url({{url('public')}}/{{$userObj->profile_pic}})"> </div>
                                                @else
                                                <div class="logo drop-shadow b-lazy b-loaded" style="opacity: 1; background-image: url({{url('public')}}/upload/user_profile.jpg);"> </div>
                                                @endif

                                                <div class="hiddenName text-bold text-shadow ">
                                                 @if (!empty($companyInfoData->company_name))
                                                 {!!$companyInfoData->company_name!!}
                                                 @else
                                                 {!! $userObj->name !!}
                                                 @endif

                                                </div>
                                             </div>
                                             <div class="nametroduction ">
                                                <div class="name" style=" ">{!! $userObj->name !!}</div>
                                                <div class="line "></div>
                                                <div class="introduction" style="width:100%;">@if(!empty($companyInfoData->company_profession)) ({{$companyInfoData->company_profession}}) @endif</div>
                                             </div>
                                             <div class="contact ">
                                                <div class="social-btns ">
                                                   <div class="btn-group btn-group-justified "> <a class="btn btn-app text-blue button " style="padding: 2px;height: auto; background-color:#FFFFFF;" href="sms:+916284409035"><span class="fa fa-commenting-o "></span>SMS</a> <a target="_blank" class="btn btn-app text-green button " style="background-color:#FFFFFF;;padding: 2px;height: auto;" href="https://wa.me/916284409035"><span class="fa fa-whatsapp "></span>Whatsapp</a> <a class="btn btn-app text-navy button " style="padding: 2px;height: auto;background-color:#FFFFFF;" href="tel:+916284409035"> <span class="fa fa-phone "></span> <span class="hidden-xs">6284409035</span> <span class="hidden-md hidden-lg">Call</span> </a> <a class="btn btn-app text-navy button " style="padding: 2px;height: auto;background-color:#FFFFFF;" href="tel:+919350721935"> <span class="fa fa-phone "></span> <span class="hidden-xs"> 9350721935</span> <span class="hidden-md hidden-lg">Call</span> </a> </div>
                                                </div>
                                                <div class="address">
                                                   <!-- --> <span class="clearfix"><a style="cursor:pointer;"> <i class="fa fa-map-marker "></i> <span class="st1 text-black"> Chandigarh, </span> <span class="st2 " style="color:#555555">Tricity </span> <span class="citycard text-black">Chandigarh , Chandigarh, India - 160062 </span></a> </span> 
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       <div class=" drop-shadow " style=" position:absolute; height: auto;top: 345px; ">
                                          <section class=" metal hidden" style=" left:0px;max-width:450px; width:320px; height: 60px; padding-top:12px; z-index:-5;border-radius:15px;background-color:#FFFFFF00; ">
                                             <div class="" style=""> <a href="/Localbelcom-in-Chandigarh-Chandigarh" class="text-lg text-navy metal radial pad businesspage-shadow " style="font-size:15px;font-weight:600; margin-top: 10px;border:0px solid #FFFFFF99"> <i class="fa fa-globe margin-r-5"></i> Web Business Page <i class="margin-r-5"></i> <span class="badge margin-r-5 text-black" style="background-color: rgba(255,255,55,0.8)!important; border-radius:5px; margin-top:-3px;font-size:14px;">7 <i class="fa fa-eye"></i> </span> </a></div>
                                          </section>
                                          <section class="social-btns metal radial " style=" left:0px;max-width:375px; margin-top: 0px; z-index:5; border-top: 0;border:0px solid #FFFFFF99">
                                             <!-- <a class="btn1 facebook_1" href="#"><i class="fa fa-facebook"></i></a>--> <!--<a class="btn1 twitter" href="#"><i class="fa fa-twitter"></i></a>--> <!--<a class="btn1 google" href="#"><i class="fa fa-google"></i></a>--> <!--<a class="btn1 dribbble" href="#"><i class="fa fa-dribbble"></i></a>--> <!--<a class="btn1 skype" href="#"><i class="fa fa-skype"></i></a>--> <a href="mailto:localbel@gmail.com" class="metal radial btn1 email-shadow "><i class="fa fa-envelope-o "></i></a> <a target="_blank" href="https://www.facebook.com/localbel.search.local/" class="btn1 metal radial facebook-shadow"><i class="fa fa-facebook "></i></a> <a target="_blank" href="" class="hidden btn1 metal radial linkedin-shadow"><i class="fa fa-linkedin"></i></a> <a target="_blank" href="" class="hidden btn1 metal radial twitter-shadow "><i class="fa fa-twitter"></i></a> <a target="_blank" href="https://www.youtube.com/channel/UCtm6Txssi_puUrH52zwgECg" class=" btn1 metal radial youtube-shadow "><i class="fa fa-youtube-play"></i></a> <a target="_blank" href="Https://www.localbel.com" class=" btn1 metal radial website-shadow "><i class="fa fa-globe"></i></a> <a target="_blank" href="https://instagram.com/localbel4/" class=" btn1 metal radial insta-shadow"><i class="fa fa-instagram"></i></a> <a onclick="openMap(30.7333148,76.7794179);" class="btn1 hidden"><i class="fa fa-map-marker"></i></a> <a target="_blank" href="//maps.google.com/maps?f=d&amp;daddr=30.7333148,76.7794179&amp;hl=en" class="btn1 metal radial map-marker-shadow"><i class="fa fa-map-marker "></i></a> <a class="btn1 metal radial clock-shadow" onclick="openCalSearch(511)"><i class="fa fa-clock-o"></i></a> 
                                          </section>
                                       </div>
                                    </div>
                                 </section>
                                 <script> function payment(e,bb,args1,args2) { e.preventDefault(); copyToClipboard(args2); window.open(args1, '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes'); } function copyToClipboard(text) { if (window.clipboardData && window.clipboardData.setData) { return clipboardData.setData("Text", text); } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) { var textarea = document.createElement("textarea"); textarea.textContent = text; textarea.style.position = "fixed"; document.body.appendChild(textarea); textarea.select(); try { return document.execCommand("copy"); } catch (ex) { console.warn("Copy to clipboard failed.", ex); return false; } finally { document.body.removeChild(textarea); showAlert("success",text); } }
                                    } 
                                 </script> <!-- <section class="col-md-6 col-md-offset-4 text-center" style="max-width:395px;margin-top:-15px;margin-bottom:80px;">--> <!-- <div class="n-container" >--> <!-- <img class="b-lazy " src="" width="80%" style="min-width:80%;margin-top:-10px;" >--> <!--</div> --> <!-- </section>--> <!-----------> <!-----------> 
                              </center>
                              <div class="col-md-8 col-md-offset-3 hidden" style="padding:0px;">
                                 <center><i class="badge bg-black visible-xs text-sm ">Payment Options</i></center>
                                 <div class=" h_wrapper payOption" style="margin-top:10px;"> </div>
                              </div>
                              <section class="col-md-7 col-md-offset-3 pad" style="max-width:595px;height:auto;margin-top:20px;margin-bottom:20px;;">
                                 <div class=" " style="border-radius:10px;background-color:#FFFFFF55;padding-top:4px;padding-bottom:4px;margin-left:-3px;">
                                    <div class="box1 " style="border-radius:5px;background-color:#FFFFFF99;padding-left:9px">
                                       <div style="font-family: Montserrat, sans-serif; font-weight: normal; text-decoration: none; font-variant: normal; text-shadow: #acacac 0px 0px 10px; font-size: 1em; text-align: center;">
                                          <p style="text-align: center; font-size: 1.2em;"><span style="font-family: Georgia, serif; letter-spacing: 2px; word-spacing: 2px; font-weight: normal; font-size: 1.2em; text-decoration: none; font-style: italic; font-variant: normal; text-transform: capitalize; text-shadow: #000000 0px 1px 0px, #c9c9c9 0px 2px 0px, #bbbbbb 0px 3px 0px, #b9b9b9 0px 4px 0px, #aaaaaa 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 6px 1px, rgba(0, 0, 0, 0.1) 0px 0px 5px, rgba(0, 0, 0, 0.3) 0px 1px 3px, rgba(0, 0, 0, 0.2) 0px 3px 5px, rgba(0, 0, 0, 0.25) 0px 5px 10px, rgba(0, 0, 0, 0.2) 0px 10px 10px, rgba(0, 0, 0, 0.15) 0px 20px 20px; color: #339966;"><strong><span style="color: #ff6600;">-</span> <span style="color: #ff9900;">Local</span><span style="color: #ff0000;">Bel</span> <span style="color: #ff0000;">-</span></strong></span><strong><br>Digital Business Card<br>Digital Menu Card<br>Web Business Page</strong></p>
                                          <br><span class="box1" onclick="openAbout(this,event);" style="background-color: #008080; color: #ffffff; cursor: pointer;"><strong>Book Our Service<br></strong></span><br><br><span class="box1" onclick="openPay(this,event);" style="background-color: #008080; color: #ffffff; cursor: pointer;"><strong>Make Payment<br></strong></span><br><br>
                                          <p style="text-align: center; font-size: 1.0em;"><span style="font-family: Georgia, serif; font-size: 11px; letter-spacing: 1px; word-spacing: 2px; color: #444444; font-weight: normal; text-decoration: none; font-style: italic; font-variant: normal; text-transform: capitalize; text-shadow: 1px 1px 5px rgba(255, 255, 172);"><strong>one touch Features &amp; Integrated Festival Wishes</strong></span></p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                           <div class="col-md-6 col-md-offset-4 text-center" style="max-width:395px;">
                              <div class="box-blank" style=" margin-left: 9px;margin-right: 9px;height:40px;">
                                 <span class="text-sm" style="">Share with</span> 
                                 <div class="a2a_kit a2a_kit_size_32 a2a_default_style text-center" style="padding-left: 20%; line-height: 32px;">
                                    <a class="a2a_button_twitter" target="_blank" rel="nofollow noopener" href="/#twitter">
                                       <span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);">
                                          <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                             <path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>
                                          </svg>
                                       </span>
                                       <span class="a2a_label">Twitter</span>
                                    </a>
                                    <a class="a2a_button_linkedin" target="_blank" rel="nofollow noopener" href="/#linkedin">
                                       <span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: rgb(0, 123, 181);">
                                          <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                             <path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF"></path>
                                          </svg>
                                       </span>
                                       <span class="a2a_label">LinkedIn</span>
                                    </a>
                                    <a class="a2a_button_email" target="_blank" rel="nofollow noopener" href="/#email">
                                       <span class="a2a_svg a2a_s__default a2a_s_email" style="background-color: rgb(1, 102, 255);">
                                          <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                             <path fill="#FFF" d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z"></path>
                                          </svg>
                                       </span>
                                       <span class="a2a_label">Email</span>
                                    </a>
                                    <a class="a2a_button_sms" target="_blank" rel="nofollow noopener" href="/#sms">
                                       <span class="a2a_svg a2a_s__default a2a_s_sms" style="background-color: rgb(108, 190, 69);">
                                          <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                             <path fill="#FFF" d="M16 3.543c-7.177 0-13 4.612-13 10.294 0 3.35 2.027 6.33 5.16 8.21 1.71 1.565 1.542 4.08-.827 6.41 2.874 0 7.445-1.698 8.462-4.34H16c7.176 0 13-4.605 13-10.285s-5.824-10.29-13-10.29zM9.045 17.376c-.73 0-1.45-.19-1.81-.388l.294-1.194c.384.2.98.398 1.6.398.66 0 1.01-.275 1.01-.692 0-.398-.302-.625-1.07-.9-1.06-.37-1.753-.957-1.753-1.886 0-1.09.91-1.924 2.415-1.924.72 0 1.25.152 1.63.322l-.322 1.166a3.037 3.037 0 0 0-1.336-.303c-.625 0-.93.284-.93.616 0 .41.36.59 1.186.9 1.127.42 1.658 1.01 1.658 1.91.003 1.07-.822 1.98-2.575 1.98zm9.053-.095-.095-2.44a72.993 72.993 0 0 1-.057-2.626h-.028a35.41 35.41 0 0 1-.71 2.475l-.778 2.49h-1.128l-.682-2.473a29.602 29.602 0 0 1-.578-2.493h-.02c-.037.863-.065 1.85-.112 2.645l-.114 2.425H12.46l.407-6.386h1.924l.63 2.13c.2.74.397 1.536.54 2.285h.027a52.9 52.9 0 0 1 .607-2.293l.683-2.12h1.886l.35 6.386H18.1zm4.09.1c-.73 0-1.45-.19-1.81-.39l.293-1.194c.39.2.99.398 1.605.398.663 0 1.014-.275 1.014-.692 0-.396-.305-.623-1.07-.9-1.064-.37-1.755-.955-1.755-1.884 0-1.09.91-1.924 2.416-1.924.72 0 1.25.153 1.63.323l-.322 1.166a3.038 3.038 0 0 0-1.337-.303c-.625 0-.93.284-.93.616 0 .408.36.588 1.186.9 1.127.42 1.658 1.006 1.658 1.906.002 1.07-.823 1.98-2.576 1.98z"></path>
                                          </svg>
                                       </span>
                                       <span class="a2a_label">SMS</span>
                                    </a>
                                    <a class="a2a_button_telegram" target="_blank" rel="nofollow noopener" href="/#telegram">
                                       <span class="a2a_svg a2a_s__default a2a_s_telegram" style="background-color: rgb(44, 165, 224);">
                                          <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                             <path fill="#FFF" d="M25.515 6.896 6.027 14.41c-1.33.534-1.322 1.276-.243 1.606l5 1.56 1.72 5.66c.226.625.115.873.77.873.506 0 .73-.235 1.012-.51l2.43-2.363 5.056 3.734c.93.514 1.602.25 1.834-.863l3.32-15.638c.338-1.363-.52-1.98-1.41-1.577z"></path>
                                          </svg>
                                       </span>
                                       <span class="a2a_label">Telegram</span>
                                    </a>
                                    <a class="a2a_button_whatsapp " target="_blank" rel="nofollow noopener" href="/#whatsapp">
                                       <span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10);">
                                          <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                             <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 0 0 5.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 0 1-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path>
                                          </svg>
                                       </span>
                                       <span class="a2a_label">WhatsApp</span>
                                    </a>
                                    <div style="clear: both;"></div>
                                 </div>
                              </div>
                           </div>
                        </center>
                     </div>
                  </div>
                  <!-- <div style="margin-bottom:80px;margin-top:-170px;">--><!--<center>--> <!--<img class="box1 img-responsive visible-xs" src="" style="width:100%;max-width:360px;">--><!--<p class="gradient-text text1 visible-xs" style="font-size:30px">Happy Mother's Day </p>--><!--</center>--><!--</div>--> 
               </section>
               <div id="vmapModal" class="modal fade" style="">
                  <div class="modal-dialog ">
                     <div class="modal-content">
                        <div class="modal-header">
                           <a class="close btn btn-flat btn-default text-navy" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></a> 
                           <h4 class="modal-title text-navy">Working Map Location</h4>
                        </div>
                        <div class="modal-body"> </div>
                        <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div>
                     </div>
                  </div>
                  <!-- /.modal-content --> 
               </div>
               <script>
                  var bLazy = new Blazy({ }); function payment(e,bb,args1,args2) { e.preventDefault(); copyToClipboard(args2); window.open(args1, '_blank' ); } function copyToClipboard(text) { if (window.clipboardData && window.clipboardData.setData) { return clipboardData.setData("Text", text); } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) { var textarea = document.createElement("textarea"); textarea.textContent = text; textarea.style.position = "fixed"; document.body.appendChild(textarea); textarea.select(); try { return document.execCommand("copy"); } catch (ex) { console.warn("Copy to clipboard failed.", ex); return false; } finally { document.body.removeChild(textarea); showAlert("success",text+" - Copied.."); } }
                  }
                  function openMap(s1,s2) { $('#vmapModal').find('.modal-body').html( '<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://maps.google.com/maps?q='+s1+','+s2+'&hl=es;z=12&amp;output=embed" allowfullscreen></iframe>' ) ; $('#vmapModal').modal({show:'true'}); }; 
               </script><script>dvc_cancel=false;
                  cat_name="Online Job Work";
                  document.getElementById("HomeLogo").addEventListener("click", function(){ $('.dvc-target').removeClass('hidden'); if($('#navbar-search-input').val()=="" ) { $('#navbar-search-input').val(cat_name) ; searchItem(cat_name); }
                  }); function popupwindow(e,url, title, w, h) { e.preventDefault(); var name= $('#sender_name').val(); name=name.substring(1, name.length).replace('-', ''); if(name!="") { url='https://api.whatsapp.com/send?phone='+name+'&text=LOCALBEL - LocalBel ( Founder and Developer ) Digital Business Card - Localbel '+window.location.href; var left = (screen.width/2)-(w/2); var top = (screen.height/2)-(h/2); return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left); } else { $('#sender_name').focus(); } } ;
                  if($('.payOption .h_internal').length===1)
                  { $('.payOption.h_internal').css("padding-left","30px");
                  } 
               </script> 
            </section>
            <section id="about_section" class="content content_sec" style="padding-bottom:35px;min-height:600px;">
               <!-- BUTTON SHOW/HIDE INSTRUCTION -->
               <div class="c-mobile-view" style="">
                  <!-- MOBILE VIEW CONTAINER --> 
                  <div class="c-mobile-view__inner" style="">
                     <!-- TOPBAR --> 
                     <div class="c-mobile__topbar"> <label for="u-topbar__button " class="c-button c-topbar__button--menu attraction-text-adv">About Us</label> </div>
                     <div class="pad " style="color:#000000;padding-bottom:50px">
                        <div style="font-family: Montserrat, sans-serif; font-weight: normal; text-decoration: none; font-variant: normal; text-shadow: #acacac 0px 0px 10px; font-size: 1em; text-align: center;">
                           <h4 style="text-align: center;"><span style="color: #993300;"><strong><img class="img-circle" src="https://www.localbel.com/Page_images/400/prettyPhotoImages/S4019.jpg?p=1635797707" alt="1" width="120" height="120"></strong></span><br><strong><span style="color: #ff9900;">LOCAL</span><span style="color: #ff0000;">BEL</span></strong></h4>
                           <p style="text-align: justify;"><a title="local" href="http://www.localbel.com"><strong><span style="color: #ff9900;">Local</span><span style="color: #ff0000;">Bel</span></strong></a> Is Business Search Engine - Which Provides Services To The Customers Like</p>
                           <h4><strong>Digital Business Card</strong></h4>
                           <p style="text-align: justify;"><a title="local" href="http://www.localbel.com"><strong><span style="color: #ff9900;">Local</span><span style="color: #ff0000;">Bel</span></strong></a>&nbsp;is one such Platform to create a digital business card using your Smartphone and sharing easily with anyone. It can be used against paper business cards to save paper.</p>
                           <div class="product-info"><a href="https://wa.me/+916284409035?text=Hello *LocalBel*, I Want to Book *Digital Business Card*. Kindly Show me Samples of Digital Business Card, Thanks."><span class="btn box1 pull-center" style="width: 50%; background-color: #008080; color: #ffffff;"><strong>Click For Demo</strong></span></a></div>
                           <br>
                           <hr>
                           <h4 style="text-align: center;"><strong>Digital Menu Card</strong></h4>
                           <p style="text-align: justify;"><strong><a title="local" href="http://www.localbel.com"><span style="color: #ff9900;">Local</span><span style="color: #ff0000;">Bel </span></a></strong>Provides digital version of a menu that customers can view by scanning a code on their smartphone.</p>
                           <p style="text-align: justify;"><strong>QR code menu in a restaurant</strong> is that it reduces the number of things customers have to touch when they are dining in. Often a menu is passed around a table between a group of people as they decide what to eat and drink. Display your QR codes in easy-to-spot places around the restaurant making it as simple as possible for customers to find and scan them.</p>
                           <p style="text-align: justify;"><strong>QR code menu in a Hotel</strong>&nbsp;offer a touch-free menu experience but also ensures minimal &amp; germ-free dining. QR code can be placed/paste in rooms so that guests can scan the QR code and order.</p>
                           <p style="text-align: justify;"><strong>Save money on printing costs -</strong> In many restaurants, the menu changes regularly. Updating a print version of a menu when the chef introduces a new item, or runs out of something, costs money each time. Instead, with a QR code menu the changes can be made digitally as and when the need arises, without any additional expense.</p>
                           <div class="product-info"><a href="https://wa.me/+916284409035?text=Hello *LocalBel*, I Want to Book *Digital Menu Card*. Kindly Show me Samples of Digital Menu Card, Thanks."><span class="btn box1 pull-center" style="width: 50%; background-color: #008080; color: #ffffff;"><strong>Click For Demo</strong></span></a></div>
                           <br>
                           <hr>
                           <h4><strong>Web Business Page</strong></h4>
                           Mini Website
                           <p style="text-align: justify;">One of <a title="local" href="http://www.localbel.com"><strong><span style="color: #ff9900;">Local<span style="color: #ff0000;">B</span></span><span style="color: #ff0000;">el</span></strong></a>&nbsp;big point is Bring Out Only The Best In Your Business. <span style="color: #008080;"><strong>Web Business Page</strong></span> Is The Key To Make Your Business Best. <strong>Website like</strong> <span style="color: #008080;"><strong>Web Business Page</strong></span>&nbsp;give a brief summary of who you are, your company. you can showcase Your Services, Achivments, Photo and Vedio gallery and many more...</p>
                           <div class="product-info"><a href="https://wa.me/+916284409035?text=Hello *LocalBel*, I Want to Book *Web Business Page (Mini Website)*. Kindly Show me Samples of Web Business Page (Mini Website), Thanks."><span class="btn box1 pull-center" style="width: 50%; background-color: #008080; color: #ffffff;"><strong>Click For Demo</strong></span></a></div>
                           <hr>
                           <p style="text-align: justify;"><strong>Features Of Digital Business Card</strong></p>
                           <ul style="text-align: justify;">
                              <li>One Click, Call And Business!</li>
                              <li>One Touch Navigation To Your Office Or Shop Location.</li>
                              <li>Lead Enquiry Form.</li>
                              <li>One Click Whatsapp To Your Customers Without Saving Your Number!</li>
                              <li>One Touch Save Your Contact!</li>
                              <li>One Click To Email</li>
                              <li>One Click To Website</li>
                              <li>People Can Share Or Forward Your Business Card.</li>
                              <li>Different Color Themes</li>
                              <li>Integrated Festival Wishes</li>
                              <li>Payments Details</li>
                              <li>Google Indexing</li>
                           </ul>
                           <p style="text-align: justify;"><strong>Other Services</strong></p>
                           <ul style="text-align: justify;">
                              <li>PDF Broucher</li>
                              <li>Social Business Images</li>
                              <li>Festival Images</li>
                              <li>PDF Digital Invitation Cards</li>
                              <li>Occation invitation Cards</li>
                              <li>Logo Designing 2D/3D</li>
                           </ul>
                           <p><strong>Our Business Video</strong></p>
                           <p style="text-align: center;"><iframe src="https://www.youtube.com/embed/OA4uTBSO9OU?showinfo=0" width="100%" height="210px" data-mce-fragment="1"></iframe></p>
                           <p style="text-align: justify;"><strong>Contact Us or Visit&nbsp;&nbsp;</strong></p>
                           <h3 style="text-align: justify;"><strong><span style="color: #ff9900;">Local</span><span style="color: #ff0000;">Bel</span></strong></h3>
                           <p><a href="http://www.localbel.com"><strong>LocalBel.Com</strong></a></p>
                        </div>
                     </div>
                  </div>
                  <!-- BUTTON + --> <label for="u-mobile__button" class="c-button c-mobile__button"> </label> 
               </div>
            </section>
            <section id="gal_section" class="content content_sec" style="padding-bottom:25px;min-height:700px;min-width:100vw;">
               <!-- BUTTON SHOW/HIDE INSTRUCTION -->
               <div class="c-mobile-view" style="">
                  <!-- MOBILE VIEW CONTAINER --> 
                  <div class="c-mobile-view__inner" style="">
                     <!-- TOPBAR --> 
                     <div class="c-mobile__topbar"> <label for="u-topbar__button " class="c-button c-topbar__button--menu attraction-text-adv"> Gallery </label> </div>
                     <div id="gal_view" class="pad " style="color:#000000;padding-bottom:50px">
                        <div class="backContent-wrap" style="width:100%;">
                           <div class="backContent pad" style="height:65vh;">
                              <div class="mansory-gallery">
                                 <center>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B1352.jpg?p=1599329263" rel="prettyPhoto[gal]" title="3D Logo Design"> <img class="img img-responsive b-lazy b-loaded" title="3D Logo Design - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S1352.jpg?p=1599329263"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B1355.jpg?p=1599329263" rel="prettyPhoto[gal]" title="Maintain Social Distance"> <img class="img img-responsive b-lazy b-loaded" title="Maintain Social Distance - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S1355.jpg?p=1599329263"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B1356.jpg?p=1599329263" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S1356.jpg?p=1599329263"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B1357.jpg?p=1599329263" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S1357.jpg?p=1599329263"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B1451.jpg?p=1603048057" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S1451.jpg?p=1603048057"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B1452.jpg?p=1603048057" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S1452.jpg?p=1603048057"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B2732.jpg?p=1622364725" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S2732.jpg?p=1622364725"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B2738.jpg?p=1622364725" rel="prettyPhoto[gal]" title="LUMINOUS - Inverter &amp; Battery"> <img class="img img-responsive b-lazy b-loaded" title="LUMINOUS - Inverter &amp; Battery - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S2738.jpg?p=1622364725"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B3026.jpg?p=1622364725" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S3026.jpg?p=1622364725"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B4826.jpg?p=1656356036" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S4826.jpg?p=1656356036"> </a> </div>
                                    <div class="gallery-item "> <a href="/Page_images/511/prettyPhotoImages/B4827.jpg?p=1656356036" rel="prettyPhoto[gal]" title=""> <img class="img img-responsive b-lazy b-loaded" title=" - LOCALBEL in Chandigarh, Chandigarh" alt="" src="/Page_images/511/prettyPhotoImages/S4827.jpg?p=1656356036"> </a> </div>
                                 </center>
                              </div>
                           </div>
                        </div>
                        <script> jQuery("a[rel^='prettyPhoto']").prettyPhoto({ animation_speed:'normal',slideshow:6000, autoplay_slideshow: false, social_tools: '',overlay_gallery: false, }); var bLazy = new Blazy({ }); </script> 
                     </div>
                  </div>
                  <!-- BUTTON + --> <label for="u-mobile__button" class="c-button c-mobile__button"> </label> 
               </div>
            </section>
            <section id="enq_section" class="content content_sec" style="padding-bottom:25px;min-height:600px;min-width:100vw;">
               <!-- BUTTON SHOW/HIDE INSTRUCTION -->
               <div class="c-mobile-view" style="">
                  <!-- MOBILE VIEW CONTAINER --> 
                  <div class="c-mobile-view__inner" style="min-height:500px;">
                     <!-- TOPBAR --> 
                     <div class="c-mobile__topbar"> <label for="u-topbar__button " class="c-button c-topbar__button--menu attraction-text-adv">Enquiry</label> </div>
                     <div class="pad " style="color:#000000;padding-bottom:50px">
                        <div class="box-blank" style=" margin: 0px;height:auto">
                           <form id="MsgToBUserForm">
                              <input type="text" class="col-md-6 col-xs-12 form-control box1 " name="name" style="border-radius: 2px;" placeholder="Name "> <input type="hidden" class="hidden" name="EmailTo" value="localbel@gmail.com"> <input type="text" class="col-md-6 col-xs-12 form-control box1" style="border-radius: 2px;" name="Email" placeholder="Phone *" required=""> <input type="text" class="col-md-12 col-xs-12 form-control box1" style="border-radius: 2px;" name="Subject" placeholder="Email"> 
                              <textarea type="text" class="col-md-12 col-xs-12 form-control box1" rows="4" style="margin-bottom:30px;border-radius: 2px;" name="Message" placeholder=" Message"></textarea>
                              <ul class="list-inline margin" style="margin-top:20px;">
                                 <li style="padding:0px;">
                                    <div><button type="reset" class="form-control button2 "><i class="fa fa-times margin-r-5"></i>Clear</button></div>
                                 </li>
                                 <li style="padding:0px;">
                                    <div><button type="submit" class="form-control button3"><i class="fa fa-share margin-r-5"></i>Send Message</button></div>
                                 </li>
                              </ul>
                           </form>
                        </div>
                        <hr>
                        <div id="vc_links" class="btn-group btn-group-justified " style="padding-bottom: 5px;"> <a class="btn btn-app no-border text-blue " style="background-color: rgba(0,0,0,0);padding: 0px;height: auto;" href="sms:+916284409035"><span class="fa fa-commenting-o "></span>SMS</a> <a target="_blank" class="btn btn-app no-border text-green" style="background-color: rgba(0,0,0,0);padding: 0px;height: auto;" href="https://wa.me/916284409035"><span class="fa fa-whatsapp text-green"></span>Whatsapp</a> <a class="btn btn-app no-border text-navy" style="background-color: rgba(0,0,0,0);padding: 0px;height: auto;" href="tel:+916284409035"> <span class="fa fa-phone "></span> <span class="hidden-xs">Call</span> <span class="hidden-md hidden-lg">Call</span> </a> </div>
                     </div>
                  </div>
                  <!-- BUTTON + --> <label for="u-mobile__button" class="c-button c-mobile__button"> </label> 
               </div>
            </section>
            <section id="payment_section" class="content content_sec" style="padding-bottom:25px;min-height:600px;height:auto;min-width:100vw;">
               <!-- BUTTON SHOW/HIDE INSTRUCTION -->
               <div class="c-mobile-view">
                  <!-- MOBILE VIEW CONTAINER --> 
                  <div class="c-mobile-view__inner">
                     <!-- TOPBAR --> 
                     <div class="c-mobile__topbar"> <label for="u-topbar__button " class="c-button c-topbar__button--menu attraction-text-adv">Payment Detail</label> </div>
                     <div class="backContent animated" style="color:#555555;height:auto;">
                        <center>
                           <div class="pad " style="color:#000000;padding-bottom:50px">
                              <div style="font-family: Montserrat, sans-serif; font-weight: normal; text-decoration: none; font-variant: normal; text-shadow: #acacac 0px 0px 10px; font-size: 1em; text-align: center;">
                                 <h4 style="text-align: center;"><span style="color: #993300;"><strong><img class="img-circle" src="https://www.localbel.com/Page_images/400/prettyPhotoImages/S4019.jpg?p=1635797707" alt="1" width="120" height="120"></strong></span><br><strong><span style="color: #ff9900;">LOCAL</span><span style="color: #ff0000;">BEL</span></strong></h4>
                                 <p style="text-align: center;"><strong>Payment</strong></p>
                                 <h4><strong>Digital Business Card / Digital Menu Card / Web Business Page</strong></h4>
                                 <p style="text-align: center;">Thanks For Business With <a title="local" href="http://www.localbel.com"><strong><span style="color: #ff9900;">Local</span><span style="color: #ff0000;">Bel</span></strong></a>&nbsp;</p>
                                 <div class="product-info"><a href="https://pmny.in/XJr1blfrjk4z"><span class="btn box1 pull-center" style="width: 50%; background-color: #008080; color: #ffffff;"><strong>Make Payment</strong></span></a></div>
                                 <br>
                                 <p><strong>Make Payment Through Cards or</strong></p>
                                 <p><strong>Gpay, Phonepe, Paytm, Amazonpay, Bhim UPI</strong></p>
                                 <hr>
                                 <p style="text-align: justify;">&nbsp;</p>
                              </div>
                           </div>
                           <img src="style=&quot;width:90%;height:auto;margin-bottom:60px;margin-top:20px;&quot;"> 
                        </center>
                     </div>
                  </div>
                  <!-- BUTTON + --> <label for="u-mobile__button" class="c-button c-mobile__button"> </label> 
               </div>
            </section>
            <section id="share_section" class="content content_sec" style="padding-bottom:25px;min-height:550px;min-width:100vw;">
               <!-- BUTTON SHOW/HIDE INSTRUCTION -->
               <div class="c-mobile-view" style="">
                  <!-- MOBILE VIEW CONTAINER --> 
                  <div class="c-mobile-view__inner" style="">
                     <!-- TOPBAR --> 
                     <div class="c-mobile__topbar"> <label for="u-topbar__button " class="c-button c-topbar__button--menu attraction-text-adv">Share With</label> </div>
                     <div style="min-height:200px;margin-top:100px;padding-left:15px;">
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style col-md-offset-3 col-xs-offset-2 col-sm-offset-4" style="margin-left: 17%; line-height: 32px;">
                           <a class="a2a_button_linkedin " style="margin-left:10px" target="_blank" rel="nofollow noopener" href="/#linkedin">
                              <span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: rgb(0, 123, 181);">
                                 <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF"></path>
                                 </svg>
                              </span>
                              <span class="a2a_label">LinkedIn</span>
                           </a>
                           <a class="a2a_button_twitter" target="_blank" rel="nofollow noopener" href="/#twitter">
                              <span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);">
                                 <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>
                                 </svg>
                              </span>
                              <span class="a2a_label">Twitter</span>
                           </a>
                           <a class="a2a_button_email" target="_blank" rel="nofollow noopener" href="/#email">
                              <span class="a2a_svg a2a_s__default a2a_s_email" style="background-color: rgb(1, 102, 255);">
                                 <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path fill="#FFF" d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z"></path>
                                 </svg>
                              </span>
                              <span class="a2a_label">Email</span>
                           </a>
                           <a class="a2a_button_sms" target="_blank" rel="nofollow noopener" href="/#sms">
                              <span class="a2a_svg a2a_s__default a2a_s_sms" style="background-color: rgb(108, 190, 69);">
                                 <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path fill="#FFF" d="M16 3.543c-7.177 0-13 4.612-13 10.294 0 3.35 2.027 6.33 5.16 8.21 1.71 1.565 1.542 4.08-.827 6.41 2.874 0 7.445-1.698 8.462-4.34H16c7.176 0 13-4.605 13-10.285s-5.824-10.29-13-10.29zM9.045 17.376c-.73 0-1.45-.19-1.81-.388l.294-1.194c.384.2.98.398 1.6.398.66 0 1.01-.275 1.01-.692 0-.398-.302-.625-1.07-.9-1.06-.37-1.753-.957-1.753-1.886 0-1.09.91-1.924 2.415-1.924.72 0 1.25.152 1.63.322l-.322 1.166a3.037 3.037 0 0 0-1.336-.303c-.625 0-.93.284-.93.616 0 .41.36.59 1.186.9 1.127.42 1.658 1.01 1.658 1.91.003 1.07-.822 1.98-2.575 1.98zm9.053-.095-.095-2.44a72.993 72.993 0 0 1-.057-2.626h-.028a35.41 35.41 0 0 1-.71 2.475l-.778 2.49h-1.128l-.682-2.473a29.602 29.602 0 0 1-.578-2.493h-.02c-.037.863-.065 1.85-.112 2.645l-.114 2.425H12.46l.407-6.386h1.924l.63 2.13c.2.74.397 1.536.54 2.285h.027a52.9 52.9 0 0 1 .607-2.293l.683-2.12h1.886l.35 6.386H18.1zm4.09.1c-.73 0-1.45-.19-1.81-.39l.293-1.194c.39.2.99.398 1.605.398.663 0 1.014-.275 1.014-.692 0-.396-.305-.623-1.07-.9-1.064-.37-1.755-.955-1.755-1.884 0-1.09.91-1.924 2.416-1.924.72 0 1.25.153 1.63.323l-.322 1.166a3.038 3.038 0 0 0-1.337-.303c-.625 0-.93.284-.93.616 0 .408.36.588 1.186.9 1.127.42 1.658 1.006 1.658 1.906.002 1.07-.823 1.98-2.576 1.98z"></path>
                                 </svg>
                              </span>
                              <span class="a2a_label">SMS</span>
                           </a>
                           <a class="a2a_button_telegram" target="_blank" rel="nofollow noopener" href="/#telegram">
                              <span class="a2a_svg a2a_s__default a2a_s_telegram" style="background-color: rgb(44, 165, 224);">
                                 <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path fill="#FFF" d="M25.515 6.896 6.027 14.41c-1.33.534-1.322 1.276-.243 1.606l5 1.56 1.72 5.66c.226.625.115.873.77.873.506 0 .73-.235 1.012-.51l2.43-2.363 5.056 3.734c.93.514 1.602.25 1.834-.863l3.32-15.638c.338-1.363-.52-1.98-1.41-1.577z"></path>
                                 </svg>
                              </span>
                              <span class="a2a_label">Telegram</span>
                           </a>
                           <a class="a2a_button_whatsapp " target="_blank" rel="nofollow noopener" href="/#whatsapp">
                              <span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10);">
                                 <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 0 0 5.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 0 1-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path>
                                 </svg>
                              </span>
                              <span class="a2a_label">WhatsApp</span>
                           </a>
                           <div style="clear: both;"></div>
                        </div>
                        <center>
                           <div id="email-form-gp" class="form-group has-feedback panel-card " style=" padding: 15px;width:300px">
                              <div class="input-group "> <input id="sender_name" name="sender_name" style="padding-left:10px;font-size:1.5em;color:#555555; letter-spacing: 0.1em;" class="form-control no-border input box1" value="+91" placeholder="+91-0000000000" data-inputmask="&quot;mask&quot;:&quot;+99-9999999999&quot;" data-mask="" required="" pattern="[+]{1}[0-9]{2}[-]{1}[0-9]{10}"> <span class="input-group-btn"> <a onclick="popupwindow(event,'', 'newwindow', 500, 300)" class="btn btn-small btn-social-icon text-green " style=" background: linear-gradient(to bottom left, #FFFFFF 40%, #FFC39E 100%);"><i class="fa fa-whatsapp "></i> </a> </span> </div>
                           </div>
                        </center>
                     </div>
                  </div>
                  <!-- BUTTON + --> <label for="u-mobile__button" class="c-button c-mobile__button"> </label> 
               </div>
            </section>
            <section id="button_section" class="content content_sec" style="padding-bottom:25px;min-height:200px;min-width:100vw;">
               <center>
                  <ul class="list-inline margin ">
                     <li style="padding:2px;"> <a id="add-button" class="form-control box1 button1" style="color: rgb(0, 0, 0); display: block;"><i class="fa fa-braille margin-r-5"></i>Add to Screen</a></li>
                     <li style="padding:2px;"> <a style="color:#000000" href="/dvc/A511A25/get-card" class="form-control box1 button1"><i class="fa fa-save margin-r-5"></i>Save Contact</a></li>
                     <li style="padding:2px;"> <a style="color:#000000" class="form-control box1 button1 goto-top-button"><i class="fa fa-arrow-up "></i></a></li>
                  </ul>
               </center>
               <center> <span class="text-sm visible-xs pad tex-shadow" style="margin-top:0px;padding-bottom:50px;color:#42929D"><i class="text-shadow">Powered by</i> - <a href="https://www.localbel.com" style="color:#FFFF00;" class="text-shadow">LocalBel.com</a> </span></center>
            </section>
         </div>
      </div>
      <div id="calSearchModal" class="modal fade">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <a type="button" class="close btn btn-flat btn-default text-navy" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></a> 
                  <h4 class="modal-title text-navy"><i class="fa fa-clock-o "></i> Working Map Location</h4>
               </div>
               <div class="modal-body"> </div>
               <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div>
            </div>
         </div>
         <!-- /.modal-content --> 
      </div>

      <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
      <script src="{{asset('public/visitingCard/bussinessCard/common/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-jvectormap-1.2.2.min.js')}}"></script>

      <script src="/dist/js/app.js?v=1.4"></script>

      <script src=""></script> <!-- fileupload --> <script src="/plugins/input-mask/jquery.inputmask.js"></script><!-- page script --><script src=""></script> <script src="/appLB/Layout/layout.min.js?v=1.24"></script> <script src="/appLB/searchItem/searchItem.min.js?v=1.0"></script> <script src="/plugins/lazy/blazy.min.js"></script><script src="/Page/js/jquery.prettyPhoto.js?v=1.0" type="text/javascript" charset="utf-8"></script> <script> var headHeight=parseInt($('header nav').css('height')); var vHeight= (window.innerHeight - headHeight);
         $.fn.isInViewport = function() { var elementTop = $(this).offset().top; var elementBottom = elementTop + $(this).outerHeight(); var viewportTop = $(window).scrollTop(); var viewportBottom = viewportTop + $(window).height()+30; return elementBottom > viewportTop && elementTop < viewportBottom;
         }; try{ FB.XFBML.parse(); }catch(ex){} window.setTimeout(function () { $(".alert").alert('close'); }, 5000);
         var bLazy1 = new Blazy({ });
         var bLazy = new Blazy({ container:'.backContent',
         }); jQuery("a[rel^='prettyPhoto']").prettyPhoto({ animation_speed:'normal',slideshow:6000, autoplay_slideshow: false, social_tools: '',overlay_gallery: false,deeplinking:false,allow_expand: true, }); 
      </script><script>if('serviceWorker' in navigator) { navigator.serviceWorker .register('/service-worker.js') .then(function() { console.log('Service Worker Registered'); });
         }
         let deferredPrompt;
         const addBtn = document.querySelector('#add-button');
         addBtn.style.display = 'none';
         window.addEventListener('beforeinstallprompt', (e) => { e.preventDefault(); deferredPrompt = e; addBtn.style.display = 'block'; addBtn.addEventListener('click', (e) => { addBtn.style.display = 'none'; deferredPrompt.prompt(); deferredPrompt.userChoice.then((choiceResult) => { if (choiceResult.outcome === 'accepted') { console.log('User accepted the A2HS prompt'); } else { console.log('User dismissed the A2HS prompt'); } deferredPrompt = null; }); });
         });
         $("#MsgToBUserForm").submit(function(e) { e.preventDefault(); formData = new FormData($(this)[0]); $.ajax({ url: baseURL+"search/sendCardVistMsgToBUser", type: "POST", data: formData, beforeSend : function() { $("#MsgToBUserForm button[type=submit]").html('<i class="fa fa-spinner fa-spin " > </i> Processing') ; }, contentType: false, cache: false, processData: false, success: function(data) { $("#MsgToBUserForm")[0].reset(); }, error: function(data) { /** alert("danger","Some Error! ");**/ }, complete: function(data) { $("#MsgToBUserForm button[type=submit]").html('<i class="fa fa-share"></i>Send Message') ; } }); });
         $('.c-mobile__button, .goto-top-button').click(function(){ $('html, body').animate({ scrollTop: $("#top_section").offset().top-50 }, 1500);
         });
         function openGal(bb,e){ e.preventDefault(); $('html, body').animate({ scrollTop: $("#gal_section").offset().top-50 }, 1500);
         }
         function openPay(bb,e){ e.preventDefault(); $('html, body').animate({ scrollTop: $("#payment_section").offset().top-50 }, 1500);
         }
         function openAbout(bb,e){ e.preventDefault(); $('html, body').animate({ scrollTop: $("#about_section").offset().top-50 }, 1500);
         }
         function openService(bb,e){ e.preventDefault(); $('html, body').animate({ scrollTop: $("#service_section").offset().top-50 }, 1500);
         }
         function openClients(bb,e){ e.preventDefault(); $('html, body').animate({ scrollTop: $("#clients_section").offset().top-50 }, 1500);
         }
         function openShare(bb,e){ e.preventDefault(); $('html, body').animate({ scrollTop: $("#share_section").offset().top-50 }, 1500);
         }
         function openEnquiry(bb,e){
         e.preventDefault(); $('html, body').animate({ scrollTop: $("#enq_section").offset().top-50 }, 1500);
         }
         function gotoBottom(bb,e){
         e.preventDefault(); $('html, body').animate({ scrollTop: document.body.scrollHeight }, 1500);
         }
         function menu_click(bb,e){
         e.preventDefault(); if ($('#menu-screen').css('display') != 'none') { $('#menu-screen').fadeOut(100); }else{ $('#menu-screen').fadeIn('slow'); }
         } $(window).scroll(function(){ if ($('#menu-screen').css('display') != 'none') { $('#menu-screen').fadeOut(100); } }); function WishCopyToClipboard(bb) { var $str = "May *Lord Kuber!* is always there to bless you with success and wealth in the coming year. \n *Wishing you a blessed and Happy Dhanteras.* \n\n 👇 *Click to See Festival Wishes* 👇 \n *LOCALBEL*\n (Digital Business Card) \n https://www.localbel.com/dvc/Localbel-Digital-Business-Card"; var $str = "On this auspicious occasion of Holi, I Hope the canvas of your life gets painted with the cutest colors of happiness.\n *Happy Holi!* \n\n 👇 *To Know Us More Click Here* 👇 \n *LOCALBEL*\n (Digital Card) \n https://www.localbel.com/dvc/Localbel-Digital-Business-Card"; var $str = "May the divine grace of Lord Rama always be with you. Wish you a very happy and prosperous Rama Navami!\n *Happy-Ram-Navami* \n\n 👇 *To Know Us More Click Here* 👇 \n *LOCALBEL*\n (Digital Card) \n https://www.localbel.com/dvc/Localbel-Digital-Business-Card"; var $temp = $("<textarea>"); var brRegex = /<br\s*[\/]?>/gi; $("body").append($temp); $temp.val($str.replace(brRegex, "\r\n")).select(); document.execCommand("copy"); $(bb).css('background-image','linear-gradient(45deg, #00ff00,#00ff00)'); $(bb).find("span").text("Copied.."); window.setTimeout(function () { $(bb).css('background-image','linear-gradient(45deg, #ffffff87,#42929D55)'); $(bb).find("span").text("Copy Wishes"); }, 1500); $temp.remove();
         }
         $('.table_container td'). on('click', function() { var bb = this ; CopyToClipboard(bb)
         })
         function CopyToClipboard(bb) { var $str = $(bb).text(); var $html_str = $(bb).html(); var $temp = $("<textarea>"); var brRegex = /<br\s*[\/]?>/gi; $("body").append($temp); $temp.val($str.replace(brRegex, "\r\n")).select(); document.execCommand("copy"); $(bb).css('background-image','linear-gradient(45deg, #00ff00,#00ff00)'); $(bb).html("Copied.. "); window.setTimeout(function () { $(bb).css('background-image','linear-gradient(45deg, #ffffff87,#42929D55)'); $(bb).html($html_str); }, 500); $temp.remove();
         } 
      </script>
      <div style="position: static;">
         <div class="a2a_overlay" id="a2a_overlay"></div>
         <div id="a2a_modal" class="a2a_modal a2a_hide" role="dialog" tabindex="-1" aria-label="">
            <div class="a2a_modal_body a2a_menu a2a_hide" id="a2a_copy_link">
               <span id="a2a_copy_link_icon" class="a2a_svg a2a_s_link a2a_logo_color">
                  <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                     <path fill="#FFF" d="M24.4 21.18c0-.36-.1-.67-.36-.92l-2.8-2.8a1.24 1.24 0 0 0-.92-.38c-.38 0-.7.14-.97.43.02.04.1.12.25.26l.3.3.2.24c.08.12.14.24.17.35.03.1.05.23.05.37 0 .36-.13.66-.38.92a1.25 1.25 0 0 1-.92.37 1.4 1.4 0 0 1-.37-.03 1.06 1.06 0 0 1-.35-.18 2.27 2.27 0 0 1-.25-.2 6.82 6.82 0 0 1-.3-.3l-.24-.25c-.3.28-.44.6-.44.98 0 .36.13.66.38.92l2.78 2.8c.24.23.54.35.9.35.37 0 .68-.12.93-.35l1.98-1.97c.26-.25.38-.55.38-.9zm-9.46-9.5c0-.37-.13-.67-.38-.92l-2.78-2.8a1.24 1.24 0 0 0-.9-.37c-.36 0-.67.1-.93.35L7.97 9.92c-.26.25-.38.55-.38.9 0 .36.1.67.37.92l2.8 2.8c.24.25.55.37.92.37.36 0 .7-.13.96-.4-.03-.04-.1-.12-.26-.26s-.24-.23-.3-.3a2.67 2.67 0 0 1-.2-.24 1.05 1.05 0 0 1-.17-.35 1.4 1.4 0 0 1-.04-.37c0-.36.1-.66.36-.9.26-.26.56-.4.92-.4.14 0 .26.03.37.06.12.03.23.1.35.17.1.1.2.16.25.2l.3.3.24.26c.3-.28.44-.6.44-.98zM27 21.17c0 1.07-.38 2-1.15 2.73l-1.98 1.98c-.74.75-1.66 1.12-2.73 1.12-1.1 0-2-.38-2.75-1.14l-2.8-2.8c-.74-.74-1.1-1.65-1.1-2.73 0-1.1.38-2.04 1.17-2.82l-1.18-1.17c-.8.8-1.72 1.18-2.82 1.18-1.08 0-2-.36-2.75-1.12l-2.8-2.8C5.38 12.8 5 11.9 5 10.82c0-1.08.38-2 1.15-2.74L8.13 6.1C8.87 5.37 9.78 5 10.86 5c1.1 0 2 .38 2.75 1.15l2.8 2.8c.74.73 1.1 1.65 1.1 2.72 0 1.1-.38 2.05-1.17 2.82l1.18 1.18c.8-.8 1.72-1.2 2.82-1.2 1.08 0 2 .4 2.75 1.14l2.8 2.8c.76.76 1.13 1.68 1.13 2.76z"></path>
                  </svg>
               </span>
               <input id="a2a_copy_link_text" type="text" title="Copy link" readonly="">
               <div id="a2a_copy_link_copied">✓</div>
            </div>
            <div class="a2a_modal_body a2a_menu a2a_thanks a2a_hide" id="a2a_thanks">
               <div class="a2a_localize" data-a2a-localize="inner,ThanksForSharing">Thanks for sharing!</div>
            </div>
         </div>
         <div class="a2a_menu a2a_full a2a_localize" id="a2apage_full" role="dialog" tabindex="-1" aria-label="Share" data-a2a-localize="title,Share">
            <div class="a2a_full_header">
               <div id="a2apage_find_container" class="a2a_menu_find_container">
                  <input id="a2apage_find" class="a2a_menu_find a2a_localize" type="text" autocomplete="off" title="Find any service" data-a2a-localize="title,FindAnyServiceToAddTo">
                  <span id="a2apage_find_icon" class="a2a_svg a2a_s_find">
                     <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#CCC" d="M19.7 18.2l-4.5-4.5c.7-1.1 1.2-2.3 1.2-3.6 0-3.5-2.8-6.3-6.3-6.3s-6.3 2.8-6.3 6.3 2.8 6.3 6.3 6.3c1.4 0 2.6-.4 3.6-1.2l4.5 4.5c.6.6 1.3.7 1.7.2.5-.4.4-1.1-.2-1.7zm-9.6-3.6c-2.5 0-4.5-2.1-4.5-4.5 0-2.5 2.1-4.5 4.5-4.5 2.5 0 4.5 2.1 4.5 4.5s-2 4.5-4.5 4.5z"></path>
                     </svg>
                  </span>
               </div>
            </div>
            <div class="a2a_full_services" id="a2apage_full_services" role="presentation"></div>
            <div class="a2a_full_footer">
               <a href="https://www.addtoany.com" title="Share Buttons" rel="noopener" target="_blank">
                  <span class="a2a_svg a2a_s__default a2a_s_a2a a2a_logo_color">
                     <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <g fill="#FFF">
                           <path d="M14 7h4v18h-4z"></path>
                           <path d="M7 14h18v4H7z"></path>
                        </g>
                     </svg>
                  </span>
                  AddToAny
               </a>
            </div>
         </div>
         <div id="a2apage_dropdown" class="a2a_menu a2a_mini a2a_localize a2a_hide" tabindex="-1" aria-label="Share" data-a2a-localize="label,Share">
            <div class="a2a_mini_services" id="a2apage_mini_services"></div>
            <div id="a2apage_cols_container" class="a2a_cols_container">
               <div class="a2a_col1" id="a2apage_col1"></div>
               <div id="a2apage_2_col1" class="a2a_hide"></div>
               <div class="a2a_clear"></div>
            </div>
            <div class="a2apage_wide a2a_wide">
               <a href="#addtoany" id="a2apage_show_more_less" class="a2a_more a2a_localize" title="Show all" data-a2a-localize="title,ShowAll">
                  <span class="a2a_svg a2a_s__default a2a_s_a2a a2a_logo_color">
                     <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <g fill="#FFF">
                           <path d="M14 7h4v18h-4z"></path>
                           <path d="M7 14h18v4H7z"></path>
                        </g>
                     </svg>
                  </span>
                  <span class="a2a_localize" data-a2a-localize="inner,More">More…</span>
               </a>
            </div>
         </div>
         <div style="height: 1px; width: 1px; position: absolute; z-index: 100000; top: 0px; visibility: hidden;"><iframe id="a2a_sm_ifr" title="AddToAny Utility Frame" transparency="true" allowtransparency="true" frameborder="0" src="https://static.addtoany.com/menu/sm.24.html#type=core&amp;event=load" style="height: 1px; width: 1px; border: 0px; left: 0px; top: 0px; position: absolute; z-index: 100000; display: none;"></iframe></div>
      </div>
   </body>
</html>