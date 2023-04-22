<!DOCTYPE html>
<html style="--theme-color:#2196f3; --theme-color-light:#2196f326; --theme-color-medium:#2196f375; --theme-color-dark-lighter:#2196f3bf; --theme-color-dark1:#1a78c2; --theme-color-dark2:#145a92; --theme-color-dark3:#0d3c61;">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link href="{{asset('public/visitingCard/bussinessCard/a/css/1.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/a/css/2.css')}}" media="all" id="shr-font-shadows-into light">
    <link rel="stylesheet" id="hestia-google-font-raleway-css" href="{{asset('public/visitingCard/bussinessCard/a/css/3.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="hestia-google-font-barlow-css" href="{{asset('public/visitingCard/bussinessCard/a/css/4.css')}}" type="text/css" media="all">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/star-rating.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/visitingCard/bussinessCard/a/css/intlTelInput.min.css')}}">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/parsely.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/model-css.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/custom.css')}}" rel="stylesheet">


    @if(!empty($companyInfoData->company_logo))
    <link rel="icon" href="{{url('public')}}/{{$companyInfoData->company_logo}}" type="image/png" sizes="16x16">
    @elseif(!empty($userObj->profile_pic))
    <link rel="icon" href="{{url('public')}}/{{$userObj->profile_pic}}" type="image/png" sizes="16x16">
    @else
    <link rel="icon" href="{{url('public')}}/upload/user_profile.jpg" type="image/png" sizes="16x16">
    @endif

    <script id="skype_bootstrap" src="{{asset('public/visitingCard/bussinessCard/a/js/SkypeBootstrap.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/sdk.js')}}" async="" crossorigin="anonymous"></script>
    <script id="skype_web_sdk" src="{{asset('public/visitingCard/bussinessCard/a/js/skypewebsdk.js')}}"></script>
    <script async="" defer="" crossorigin="anonymous" src="{{asset('public/visitingCard/bussinessCard/a/js/sdk2.js')}}"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


     <title>{!! $companyInfoData->company_name !!}</title>

    <meta content="{{$companyInfoData->seo_description}}" name="description">
    <meta content="{{$companyInfoData->seo_keyword}}" name="keywords">

    <meta property="og:title" content="{!! $companyInfoData->company_name !!}">
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
    <link rel="canonical" href="{{url('vc')}}/{{$userObj->slug}}">
    <link rel="alternate" hreflang="en-IN" href="{{url('vc')}}/{{$userObj->slug}}">
    <link rel="alternate" hreflang="en-IN" href="{{url('vc')}}/{{$userObj->slug}}">
    <link rel="alternate" hreflang="en-US" href="{{url('vc')}}/{{$userObj->slug}}">
    <link rel="alternate" hreflang="en-GB" href="{{url('vc')}}/{{$userObj->slug}}">

<style type="text/css">
    .purchase-form__renewal-price--strikethrough {
        text-decoration: line-through;
        color: red;
    }
</style>

        <style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
      .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
      }

      .fb_reposition {
        overflow: hidden;
        position: relative
      }

      .fb_invisible {
        display: none
      }

      .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
      }

      .fb_reset>div {
        overflow: hidden
      }

      @keyframes fb_transform {
        from {
          opacity: 0;
          transform: scale(.95)
        }

        to {
          opacity: 1;
          transform: scale(1)
        }
      }

      .fb_animate {
        animation: fb_transform .3s forwards
      }

      .fb_dialog {
        background: rgba(82, 82, 82, .7);
        position: absolute;
        top: -10000px;
        z-index: 10001
      }

      .fb_dialog_advanced {
        border-radius: 8px;
        padding: 10px
      }

      .fb_dialog_content {
        background: #fff;
        color: #373737
      }

      .fb_dialog_close_icon {
        background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        display: block;
        height: 15px;
        position: absolute;
        right: 18px;
        top: 17px;
        width: 15px
      }

      .fb_dialog_mobile .fb_dialog_close_icon {
        left: 5px;
        right: auto;
        top: 5px
      }

      .fb_dialog_padding {
        background-color: transparent;
        position: absolute;
        width: 1px;
        z-index: -1
      }

      .fb_dialog_close_icon:hover {
        background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
      }

      .fb_dialog_close_icon:active {
        background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
      }

      .fb_dialog_iframe {
        line-height: 0
      }

      .fb_dialog_content .dialog_title {
        background: #6d84b4;
        border: 1px solid #365899;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin: 0
      }

      .fb_dialog_content .dialog_title>span {
        background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float: left;
        padding: 5px 0 7px 26px
      }

      body.fb_hidden {
        height: 100%;
        left: 0;
        margin: 0;
        overflow: visible;
        position: absolute;
        top: -10000px;
        transform: none;
        width: 100%
      }

      .fb_dialog.fb_dialog_mobile.loading {
        background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 10001
      }

      .fb_dialog.fb_dialog_mobile.loading.centered {
        background: none;
        height: auto;
        min-height: initial;
        min-width: initial;
        width: auto
      }

      .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
        width: 100%
      }

      .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
        background: none
      }

      .loading.centered #fb_dialog_loader_close {
        clear: both;
        color: #fff;
        display: block;
        font-size: 18px;
        padding-top: 20px
      }

      #fb-root #fb_dialog_ipad_overlay {
        background: rgba(0, 0, 0, .4);
        bottom: 0;
        left: 0;
        min-height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 10000
      }

      #fb-root #fb_dialog_ipad_overlay.hidden {
        display: none
      }

      .fb_dialog.fb_dialog_mobile.loading iframe {
        visibility: hidden
      }

      .fb_dialog_mobile .fb_dialog_iframe {
        position: sticky;
        top: 0
      }

      .fb_dialog_content .dialog_header {
        background: linear-gradient(from(#738aba), to(#2c4987));
        border-bottom: 1px solid;
        border-color: #043b87;
        box-shadow: white 0 1px 1px -1px inset;
        color: #fff;
        font: bold 14px Helvetica, sans-serif;
        text-overflow: ellipsis;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align: middle;
        white-space: nowrap
      }

      .fb_dialog_content .dialog_header table {
        height: 43px;
        width: 100%
      }

      .fb_dialog_content .dialog_header td.header_left {
        font-size: 12px;
        padding-left: 5px;
        vertical-align: middle;
        width: 60px
      }

      .fb_dialog_content .dialog_header td.header_right {
        font-size: 12px;
        padding-right: 5px;
        vertical-align: middle;
        width: 60px
      }

      .fb_dialog_content .touchable_button {
        background: linear-gradient(from(#4267B2), to(#2a4887));
        background-clip: padding-box;
        border: 1px solid #29487d;
        border-radius: 3px;
        display: inline-block;
        line-height: 18px;
        margin-top: 3px;
        max-width: 85px;
        padding: 4px 12px;
        position: relative
      }

      .fb_dialog_content .dialog_header .touchable_button input {
        background: none;
        border: none;
        color: #fff;
        font: bold 12px Helvetica, sans-serif;
        margin: 2px -12px;
        padding: 2px 6px 3px 6px;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
      }

      .fb_dialog_content .dialog_header .header_center {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        text-align: center;
        vertical-align: middle
      }

      .fb_dialog_content .dialog_content {
        background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
        border: 1px solid #4a4a4a;
        border-bottom: 0;
        border-top: 0;
        height: 150px
      }

      .fb_dialog_content .dialog_footer {
        background: #f5f6f7;
        border: 1px solid #4a4a4a;
        border-top-color: #ccc;
        height: 40px
      }

      #fb_dialog_loader_close {
        float: left
      }

      .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
        visibility: hidden
      }

      #fb_dialog_loader_spinner {
        animation: rotateSpinner 1.2s linear infinite;
        background-color: transparent;
        background-image: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        height: 24px;
        width: 24px
      }

      @keyframes rotateSpinner {
        0% {
          transform: rotate(0deg)
        }

        100% {
          transform: rotate(360deg)
        }
      }

      .fb_iframe_widget {
        display: inline-block;
        position: relative
      }

      .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify
      }

      .fb_iframe_widget iframe {
        position: absolute
      }

      .fb_iframe_widget_fluid_desktop,
      .fb_iframe_widget_fluid_desktop span,
      .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100%
      }

      .fb_iframe_widget_fluid_desktop iframe {
        min-width: 220px;
        position: relative
      }

      .fb_iframe_widget_lift {
        z-index: 1
      }

      .fb_iframe_widget_fluid {
        display: inline
      }

      .fb_iframe_widget_fluid span {
        width: 100%
      }

      .fb_mpn_mobile_landing_page_slide_out {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_landing_page_slide_out_from_left {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out_from_left;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_landing_page_slide_up {
        animation-duration: 500ms;
        animation-name: fb_mpn_landing_page_slide_up;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_bounce_in {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_in;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_bounce_out {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_out;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_mpn_fade_out;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_in_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_v2;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_in_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_from_left;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_v2;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_out_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_from_left;
        transition-timing-function: ease-in
      }

      .fb_invisible_flow {
        display: inherit;
        height: 0;
        overflow-x: hidden;
        width: 0
      }

      @keyframes fb_mpn_landing_page_slide_out {
        0% {
          margin: 0 12px;
          width: 100% - 24px
        }

        60% {
          border-radius: 18px
        }

        100% {
          border-radius: 50%;
          margin: 0 24px;
          width: 60px
        }
      }

      @keyframes fb_mpn_landing_page_slide_out_from_left {
        0% {
          left: 12px;
          width: 100% - 24px
        }

        60% {
          border-radius: 18px
        }

        100% {
          border-radius: 50%;
          left: 12px;
          width: 60px
        }
      }

      @keyframes fb_mpn_landing_page_slide_up {
        0% {
          bottom: 0;
          opacity: 0
        }

        100% {
          bottom: 24px;
          opacity: 1
        }
      }

      @keyframes fb_mpn_bounce_in {
        0% {
          opacity: .5;
          top: 100%
        }

        100% {
          opacity: 1;
          top: 0
        }
      }

      @keyframes fb_mpn_fade_out {
        0% {
          bottom: 30px;
          opacity: 1
        }

        100% {
          bottom: 0;
          opacity: 0
        }
      }

      @keyframes fb_mpn_bounce_out {
        0% {
          opacity: 1;
          top: 0
        }

        100% {
          opacity: .5;
          top: 100%
        }
      }

      @keyframes fb_bounce_in_v2 {
        0% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom right
        }

        50% {
          transform: scale(1.03, 1.03);
          transform-origin: bottom right
        }

        100% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom right
        }
      }

      @keyframes fb_bounce_in_from_left {
        0% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom left
        }

        50% {
          transform: scale(1.03, 1.03);
          transform-origin: bottom left
        }

        100% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom left
        }
      }

      @keyframes fb_bounce_out_v2 {
        0% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom right
        }

        100% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom right
        }
      }

      @keyframes fb_bounce_out_from_left {
        0% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom left
        }

        100% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom left
        }
      }

      @keyframes slideInFromBottom {
        0% {
          opacity: .1;
          transform: translateY(100%)
        }

        100% {
          opacity: 1;
          transform: translateY(0)
        }
      }

      @keyframes slideInFromBottomDelay {
        0% {
          opacity: 0;
          transform: translateY(100%)
        }

        97% {
          opacity: 0;
          transform: translateY(100%)
        }

        100% {
          opacity: 1;
          transform: translateY(0)
        }
      }
    </style>
  </head>
  <body style="zoom: 1;" oncontextmenu="return false">
    <div class="page-wrapper" id="home-section">
      <div class="page-details">
        <div>
          @if($userConfigObj->isShowNoOfVisit == '1')
          <div class="p-10"></div>
          <div class="views-label"><i class="fas fa-eye" aria-hidden="true"></i> Views: <b>{{$userObj->no_visit}}</b>
          </div>
          @endif
          <!-- User Profile Pic -->
          <div class="profile-pic">
            <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="profile-pic-img">
          </div>
          <!-- User Company Name -->
          <h1 class="firmname">
            <b>{!! $companyInfoData->company_name !!}</b>
          </h1>
          <div class="divider"></div>
          <br>
          <!-- User First Name and Last Name -->
          <h1 class="name"> {!! $userObj->name !!}
            <br>
            <span class="designation">{!! $companyInfoData->company_profession !!} </span>
          </h1>
          <!-- Cover Photo, Photo, Name and Profession section completed -->
        </div>
        <div>
          <!-- FRONT CONTACT ACTIONS START-->
          <div class="p-10"></div>
          <div class="contact-buttons">
            <a class="contact-button" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}">
              <i class="fas fa-phone" aria-hidden="true"></i> Call </a>
            <a class="contact-button" href="sms:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}">
              <i class="fas fa-sms" aria-hidden="true"></i> SMS </a>

              <a class="contact-button" target="_blank" href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}">
              <i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp 
            </a>

        </div>
          <table class="contact-action-table" style="max-width:89%;">
            <tbody>
              @if (!empty($companyInfoData->company_address))
              <tr>
                <td>
                  <a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw">
                    <i class="fas fa-map-marker-alt contact-action-container-icon" aria-hidden="true"></i>
                  </a>
                </td>
                <td>
                  <a target="_blank" href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&z=12&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwiWyNX76N3qAhWrzTgGHQuCBicQ_AUoAXoECCMQAw" class="contact-action-container-text"> {!!rtrim(preg_replace('#<p(.*?)>(.*?)</p>#is', '$2<br/>', $companyInfoData->company_address), "<br/>");!!}</a>
                </td>
              </tr>
              @endif
              <tr>
                <td>
                  <a href="mailto:{{$userObj->email}}">
                    <i class="fas fa-envelope contact-action-container-icon" aria-hidden="true"></i>
                  </a>
                </td>
                <td>
                  <a href="mailto:{{$userObj->email}}" class="contact-action-container-text">
                    {{$userObj->email}} </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a target="_blank" href="{{$companyInfoData->company_website}}">
                    <i class="fas fa-globe contact-action-container-icon" aria-hidden="true"></i>
                  </a>
                </td>
                <td>
                  <a target="_blank" href="{{$companyInfoData->company_website}}" class="contact-action-container-text">
                    {{$companyInfoData->company_website}} </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}   ">
                    <i class="fas fa-phone contact-action-container-icon" aria-hidden="true"></i>
                  </a>
                </td>
                <td>
                  <a target="_blank" href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="contact-action-container-text"> {{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}} </a>
                  @if(!empty($companyInfoData->country_landline))
                  <br/>
                  <a target="_blank" href="tel:{{$companyInfoData->country_landline}}" class="contact-action-container-text">
                    {{$companyInfoData->country_landline}} </a>
                  @endif
                </td>
              </tr>
            </tbody>
          </table>
          <div class="p-30"></div>
 <!--
          <div class="whatsapp-input">
            <div class="input-wrapper">
              <input type="tel" id="whatsapp-input" class="input" placeholder="Enter whatsapp number" oninput="this.value=this.value.replace(/[^0-9]/g,&#39;&#39;);" autocomplete="off" data-intl-tel-input-id="0">
            </div>
            <a class="whatsapp-button" target="_blank" href="javascript:;" onclick="handleWhatsappShare(this)">
              <i class="fab fa-whatsapp" aria-hidden="true"></i>Share on Whatsapp </a>
          </div>
    -->
    <?php
                            $countryData = file_get_contents(url('public/country-tel-code.json'));
                            $countryData = json_decode($countryData, true);
                          ?>
<div class="form-group">

<div class="input-group input-group-lg col-md-12">
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
                              <input type="tel" class="form-control" name="company_mobile" id="company_mobile" placeholder="Enter whatsapp number" value="" pattern="[789][0-9]{9}" title="Please enter valid phone number">
                            </div>
                            <span id="spnPhoneStatus"></span>


                    </div>
                    <div class="row" style="margin-top:10px">
                      <div class="col-md-12">
                              <a class="whatsapp-button" target="_blank" href="javascript:;" onclick="handleWhatsappShare(this)">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>Share on Whatsapp 
                              </a>
                            </div>
    </div>

                  </div>
        <div class="p-30">
        <div class="col-md-12 text-center btn btn-primary">
                        <a href="{{url('saveViewCard')}}/{{$userObj->slug}}" download="contact.vcf">
                            <div class="icon-i whitegreenicon rounded-circle text-white">
                                <i class="fa fa-vcard" aria-hidden="true"></i>&nbsp;Save Contact
                            </div>
                        </a>
                    </div>

        </div>
        <div class="p-30"></div>
        @if (count($socialMediaData) > 0)
        <ul class="inprofile share-buttons">
        @foreach($socialMediaData as $socialMediaDetail)
          @if ($socialMediaDetail->type == 'fb')
          <li class="share-button">
          <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-facebook fab fa-facebook" aria-hidden="true"></i></a>
                      </li>
                      @elseif($socialMediaDetail->type == 'in')
                      <li class="share-button">
                      <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-instagram fab fa-instagram" aria-hidden="true"></i></a>
                </li>
                @elseif($socialMediaDetail->type == 'tw')
                <li class="share-button">
                <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-twitter fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        @elseif($socialMediaDetail->type == 'li')
                        <li class="share-button">
                        <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-linkedin fab fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        @elseif($socialMediaDetail->type == 'yt')
                        <li class="share-button">
                        <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-youtube fab fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        @elseif($socialMediaDetail->type == 'pi')

                        <li class="share-button">
                        <a href="{{$socialMediaDetail->url}}" target="_blank"><i class="share-button-pinterest fab fa-pinterest" aria-hidden="true"></i></a>
                        </li>
                      @endif
                    @endforeach
                    </ul>
                @endif
        <div class="p-20"></div>
      </div>
    </div>
    </div>
    <div class="section-container" id="about-us-section">
      <h2 class="section-header">ABOUT US</h2>
      <div class="full-divider"></div>
      <div class="about-us-text">
        <div style="text-align: justify;">{!!$companyInfoData->company_info!!}</div>
      </div>

      @if(!empty($companyInfoData->broucher_file))
      <div>
            <div style="clear:both">&nbsp;</div>
                <h4>Documents</h4>
                <a class="document-wrapper" href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download="">
                <div class="pdf-icon"><i class="fa fa-file-pdf" aria-hidden="true"></i></div>
                <div class="pdf-number text text-dark">@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif</div>
                <div class="download-icon"><i class="fa fa-download" aria-hidden="true"></i></div>
            </a>
      </div>
      @endif

    </div>

@if(count($paymentMasterData) > 0)
<div class="section-container" id="payment">
  <h2 class="section-header">Payment</h2>
  <div class="full-divider"></div>
  <div>
    <table class="about-tbl">
      <tbody>

      @foreach($paymentMasterData as $paymentMasterDetail)
        @if ($paymentMasterDetail->type == 'bank')
        <tr>
          <td align="center" colspan="2"><h4>Account Details:</h4></td>
        </tr>
        <tr>
          <td colspan="2">
          <table class="about-tbl">
            <tbody>
              <tr>
                <td width="50%" bgcolor="#f5f5f5" class="td-label"><h6>Bank Name</h6></td>
                <td bgcolor="#f5f5f5">: </td>
                <td bgcolor="#f5f5f5"> {{$paymentMasterDetail->bank_name}} </td>
              </tr>
              <tr>
                <td width="50%" class="td-label"><h6>Account Holder Name</h6></td>
                <td>: </td>
                <td> {{$paymentMasterDetail->account_holder_name}} </td>
              </tr>
              <tr>
                <td width="50%" bgcolor="#f5f5f5" class="td-label"><h6>Account Number</h6></td>
                <td bgcolor="#f5f5f5">: </td>
                <td bgcolor="#f5f5f5"> {{$paymentMasterDetail->account_no}} </td>
              </tr>
              <tr>
                <td width="50%" class="td-label"><h6>Account Type</h6></td>
                <td>: </td>
                <td> {{ucwords($paymentMasterDetail->account_type)}} Account </td>
              </tr>
              <tr>
                <td width="50%" bgcolor="#f5f5f5" class="td-label"><h6>IFSC code</h6></td>
                <td bgcolor="#f5f5f5">: </td>
                <td bgcolor="#f5f5f5"> {{$paymentMasterDetail->ifsc_code}} </td>
              </tr>
              <tr>
                <td width="50%" bgcolor="#f5f5f5" class="td-label"><h6>Branch Name</h6></td>
                <td bgcolor="#f5f5f5">: </td>
                <td bgcolor="#f5f5f5"> {{$paymentMasterDetail->branch_name}} </td>
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



    <div class="section-container container" id="gallery-section">
      <div class="row">

        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="section-header">GALLERY</h2>
        </div>

        <div class="full-divider"></div>

        @if (!empty($galleryCatInfo))
        <div align="center">
            <button class="btn btn-default filter-button active all-filter-btn" data-filter="all">All</button>
            @foreach($galleryCatInfo as $catlbl => $catName)
            <button class="btn btn-default filter-button" data-filter="{{$catlbl}}">{{$catName}}</button>
            @endforeach
        </div>
        @endif

        <br/>

        <div class="images-container row">
          @foreach($galleryData as $galleryDetail)
          <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{$galleryDetail->category_name}}">
            <h5 class="text text-center" style="text-align:center;">{{$galleryDetail->title}}</h5>

              <img onclick="openImageModal(this)" alt="Demo Company" src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" style="width:100%">
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
                <a class="whatsapp-button" href='https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text=Enquery for product: {{urlencode($galleryDetail->title)}}' target='_blank'>
                      Enquiry Now
                </a>

            </div>
          @endforeach
          </div>
    </div>
    @endif
 


  </div>
    </div>

    @if($userConfigObj->isShowEnquiry == '1')
    <div class="section-container" id="enquiry-section">
        <h2 class="section-header">ENQUIRY</h2>
        <div class="full-divider"></div>
            <form data-parsley-validate="" method="post" class="enquiry-form" id="enquiry-form" novalidate="">
                <meta name="csrf_token" content="{{ csrf_token() }}" />
                <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
                <!-- Full Name:<br/> -->
                <input type="text" name="enquiryName" data-parsley-trigger="change" id="enquiryName" placeholder="Enter Full Name" pattern="[a-zA-Z ]*$" required=""><br>
                <!-- <div class="flex"> -->
                    <div class="enquiry-phoneNumber">
                        <!-- Phone Number:<br/> -->
                        <input type="text" data-parsley-length-message="Contact should have (4-10) digits." data-parsley-type-message="Contact should have only digits." data-parsley-type="number" data-parsley-length="[4, 10]" name="phoneNumber" id="phoneNumber" required="" placeholder="Enter Phone Number"><br>
                    </div>
                    <div class="enquiry-email">
                        <!-- Email:<br/> -->
                        <input type="email" name="email" id="email" data-parsley-trigger="change" placeholder="Enter Email"><br>
                    </div>
                <!-- </div> -->
                <!-- Message:<br/> -->
                <textarea name="message" id="message" required="" placeholder="Enter Message"></textarea><br>
                <input type="hidden" id="companyEmail" value="admin.admin@gmail.com">
                <input type="submit" id="inquiry-send" value="Send">
            </form>
    </div>
    @endif


    <input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">
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
        <li>
          <a class="footer-menu-link" href="#home-section">
            <i class="footer-menu-icon fas fa-home" aria-hidden="true"></i>
            <div class="footer-menu-text">HOME</div>
          </a>
        </li>
        <li>
          <a class="footer-menu-link" href="#about-us-section">
            <i class="footer-menu-icon fas fa-users" aria-hidden="true"></i>
            <div class="footer-menu-text">ABOUT US</div>
          </a>
        </li>
        @if(count($paymentMasterData) > 0)
      <li> <a class="footer-menu-link" href="#payment"> <i class="footer-menu-icon fa fa-inr"></i>

      <div class="footer-menu-text">PAYMENT</div>

      </a> </li>
      @endif

        @if($galleryData->count() > 0)
        <li>
          <a class="footer-menu-link" href="#gallery-section">
            <i class="footer-menu-icon fas fa-images" aria-hidden="true"></i>
            <div class="footer-menu-text">GALLERY</div>
          </a>
        </li>
        @endif
        @if($userConfigObj->isShowEnquiry == '1')
        <li>
            <a class="footer-menu-link" href="#enquiry-section">
                    <i class="footer-menu-icon fas fa-comment-alt" aria-hidden="true"></i>
                    <div class="footer-menu-text">ENQUIRY</div>
                </a>
            </li>
          @endif
          <li>
            <a class="footer-menu-link" href="{{url('register?packageId=3')}}">
                    <i class="footer-menu-icon fas fa-id-card" aria-hidden="true"></i>
                    <div class="footer-menu-text">MAkE My CARD</div>
                </a>
          </li>
        </ul>
    </div>
    <script>
      // Place this code in the head section of your HTML file 
      (function(r, d, s) {
        r.loadSkypeWebSdkAsync = r.loadSkypeWebSdkAsync || function(p) {
          var js, sjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(p.id)) {
            return;
          }
          js = d.createElement(s);
          js.id = p.id;
          js.src = p.scriptToLoad;
          js.onload = p.callback
          sjs.parentNode.insertBefore(js, sjs);
        };
        var p = {
          scriptToLoad: 'https://swx.cdn.skype.com/shared/v/latest/skypewebsdk.js',
          id: 'skype_web_sdk'
        };
        r.loadSkypeWebSdkAsync(p);
      })(window, document, 'script');



$('#company_mobile').blur(function(e) {
   if (validatePhone('company_mobile')) {
      $('#company_mobile').css('border-color', 'black');
       $('#spnPhoneStatus').html('');
       $('#spnPhoneStatus').css('color', 'green');
       $(".whatsapp-button").css('display', 'inline');
   }
   else {
      $('#company_mobile').css('border-color', 'red');
      $('#spnPhoneStatus').html('Invalid Phone Number');
      $('#spnPhoneStatus').css('color', 'red');
       $(".whatsapp-button").css('display', 'none');
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

  <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>

    <script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/utils.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>
    <script src="{{asset('public/js/prevent.js')}}"></script>

    <link href="{{asset('public/visitingCard/bussinessCard/common/css/gallery-category.css')}}" rel="stylesheet">
    <script id="skype_bootstrap" src="{{asset('public/visitingCard/bussinessCard/common/js/gallery-category.js')}}"></script>

  <style media="all" id="fa-v4-shims">
      <div id="fb-root"class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div></body></html>