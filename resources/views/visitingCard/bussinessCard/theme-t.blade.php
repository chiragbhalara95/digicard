<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif | Professional Digital Card</title>
    
    <meta property="og:title" content="@if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif">
    <meta content="{{$companyInfoData->seo_description}}" name="description">
    <meta content="{{$companyInfoData->seo_keyword}}" name="keywords">
    <meta property="og:url" content="{{url('vc')}}/{{$userObj->slug}}">
    
    @if(!empty($companyInfoData->company_logo))
    <meta property="og:image" content="{{url('public')}}/{{$companyInfoData->company_logo}}">
    <link rel="icon" href="{{url('public')}}/{{$companyInfoData->company_logo}}" type="image/png">
    @elseif(!empty($userObj->profile_pic))
    <meta property="og:image" content="{{url('public')}}/{{$userObj->profile_pic}}">
    <link rel="icon" href="{{url('public')}}/{{$userObj->profile_pic}}" type="image/png">
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/g/css/intlTelInput.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/visitingCard/bussinessCard/a/css/jquery-confirm.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin/plugins/toastr/toastr.min.css')}}">

    <script>
        document.documentElement.style.setProperty('--theme-color', "{{$userObj->theme_color ?? '#2563eb'}}");
    </script>

    <style>
:root{
    --theme-color: {{$userObj->theme_color ?? '#11BFA3'}};
    --bg:#f4f7f8;
    --surface:#ffffff;
    --surface-soft:#f8fafb;
    --text:#17212b;
    --muted:#71808c;
    --muted-2:#9aa7b0;
    --border:#e8edf0;
    --success:#16a34a;
    --danger:#ef4444;
    --shadow:0 12px 35px rgba(20,35,45,.08);
    --shadow-soft:0 4px 18px rgba(20,35,45,.06);
    --radius:18px;
    --radius-sm:12px;
}

*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{
    font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif;
    background:#343638;
    color:var(--text);
    line-height:1.5;
    overflow-x:hidden;
}
body:before{
    content:"";
    position:fixed;inset:0;pointer-events:none;z-index:-1;
    background:
      radial-gradient(circle at 10% 10%, color-mix(in srgb,var(--theme-color) 14%,transparent),transparent 28%),
      radial-gradient(circle at 90% 70%, color-mix(in srgb,var(--theme-color) 10%,transparent),transparent 30%);
}

a{color:inherit}
button,input,textarea{font:inherit}

.container{
    width:100%;max-width:520px;min-height:100vh;margin:0 auto;
    background:var(--bg);position:relative;overflow:hidden;
    box-shadow:0 0 60px rgba(0,0,0,.22);
}
.content-wrapper{padding-bottom:92px}

/* ========================= HERO ========================= */
.professional-header{
    position:relative;overflow:hidden;padding:28px 22px 34px;
    min-height:320px;color:#fff;
    background:
      radial-gradient(circle at 88% 15%,rgba(255,255,255,.28),transparent 24%),
      radial-gradient(circle at 10% 100%,rgba(255,255,255,.10),transparent 32%),
      linear-gradient(145deg,
        color-mix(in srgb,var(--theme-color) 82%,#081d22),
        color-mix(in srgb,var(--theme-color) 55%,#063c3b) 55%,
        color-mix(in srgb,var(--theme-color) 35%,#061b25));
    border-radius:0 0 34px 34px;
}
.professional-header:before{
    content:"";position:absolute;width:360px;height:360px;right:-150px;top:-180px;
    border:1px solid rgba(255,255,255,.13);border-radius:50%;
    box-shadow:0 0 0 50px rgba(255,255,255,.025),0 0 0 100px rgba(255,255,255,.018);
}
.professional-header:after{
    content:"";position:absolute;inset:0;opacity:.08;pointer-events:none;
    background-image:linear-gradient(rgba(255,255,255,.45) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.45) 1px,transparent 1px);
    background-size:38px 38px;
    mask-image:linear-gradient(to bottom,black,transparent 90%);
}
.header-content{position:relative;z-index:2}
.views-badge{
    position:absolute;right:0;top:0;z-index:4;
    display:inline-flex;align-items:center;gap:6px;padding:7px 11px;
    border-radius:999px;background:rgba(0,0,0,.18);border:1px solid rgba(255,255,255,.16);
    backdrop-filter:blur(12px);font-size:10px;font-weight:700;letter-spacing:.2px;color:#fff;
}
.profile-container{display:flex;flex-direction:column;align-items:center;text-align:center;padding-top:24px}
.profile-pic-wrapper{position:relative;margin-bottom:16px}
.profile-pic{
    width:96px;height:96px;border-radius:28px;object-fit:cover;background:#fff;
    border:4px solid rgba(255,255,255,.78);box-shadow:0 14px 35px rgba(0,0,0,.18);
}
.verified-badge{
    position:absolute;right:-5px;bottom:-5px;width:27px;height:27px;border-radius:50%;
    display:flex;align-items:center;justify-content:center;background:#fff;color:var(--theme-color);
    border:3px solid color-mix(in srgb,var(--theme-color) 80%,#fff);font-size:11px;box-shadow:0 5px 12px rgba(0,0,0,.18)
}
.profile-info{width:100%}
.company-name{font-size:27px;line-height:1.1;font-weight:800;letter-spacing:-.8px;color:#fff;margin:0 0 6px}
.user-name{font-size:13px;font-weight:600;color:rgba(255,255,255,.78);margin-bottom:10px}
.profession{
    display:inline-flex;align-items:center;justify-content:center;padding:7px 13px;
    border:1px solid rgba(255,255,255,.16);border-radius:999px;
    background:rgba(255,255,255,.11);backdrop-filter:blur(12px);
    color:#fff;font-size:11px;font-weight:700;letter-spacing:.2px
}

/* ========================= ACTIONS ========================= */
.quick-actions{
    display:grid;grid-template-columns:repeat(4,1fr);gap:8px;
    margin:-27px 18px 16px;position:relative;z-index:20;
}
.action-btn{
    min-width:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:7px;
    min-height:72px;padding:10px 5px;text-decoration:none;background:#fff;color:var(--text);
    border:1px solid rgba(225,232,235,.95);border-radius:16px;box-shadow:var(--shadow);
    transition:.22s ease;position:relative;overflow:hidden
}
.action-btn:before{content:"";position:absolute;inset:0;background:linear-gradient(135deg,color-mix(in srgb,var(--theme-color) 8%,transparent),transparent);opacity:0;transition:.2s}
.action-btn:hover{transform:translateY(-3px);border-color:color-mix(in srgb,var(--theme-color) 35%,#fff);box-shadow:0 14px 30px rgba(20,35,45,.12)}
.action-btn:hover:before{opacity:1}
.action-btn i{position:relative;color:var(--theme-color);font-size:16px}
.action-btn span{position:relative;font-size:9px;font-weight:800;letter-spacing:.55px;text-transform:uppercase;color:#63717c}

/* ========================= SECTIONS ========================= */
.card,.share-section{
    margin:0 16px 14px;padding:19px;background:var(--surface);
    border:1px solid var(--border);border-radius:20px;box-shadow:var(--shadow-soft)
}
.card-header{display:flex;align-items:center;gap:11px;margin-bottom:15px;padding:0;border:0}
.card-header:before{
    content:"";width:4px;height:22px;border-radius:8px;background:var(--theme-color);box-shadow:0 0 14px color-mix(in srgb,var(--theme-color) 35%,transparent)
}
.card-title{font-family:'Inter',sans-serif;font-size:14px;font-weight:800;letter-spacing:-.15px;color:var(--text);display:flex;align-items:center;gap:8px}
.card-title i{color:var(--theme-color);font-size:13px}
.fade-in{animation:fadeUp .45s ease both}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:none}}

/* ========================= CONTACT ========================= */
.contact-list{display:flex;flex-direction:column;gap:8px}
.contact-item{
    display:flex;align-items:center;gap:12px;padding:11px 12px;text-decoration:none;
    background:var(--surface-soft);border:1px solid transparent;border-radius:13px;transition:.2s ease
}
.contact-item:hover{background:#fff;border-color:color-mix(in srgb,var(--theme-color) 25%,#e8edf0);transform:translateX(2px)}
.contact-icon{
    width:38px;height:38px;flex:0 0 38px;border-radius:11px;display:flex;align-items:center;justify-content:center;
    color:var(--theme-color);background:color-mix(in srgb,var(--theme-color) 9%,#fff);border:1px solid color-mix(in srgb,var(--theme-color) 15%,#e8edf0);font-size:13px
}
.contact-details{min-width:0;flex:1}
.contact-label{font-size:8px;font-weight:800;letter-spacing:.7px;text-transform:uppercase;color:#9aa5ad;margin-bottom:2px}
.contact-value{font-size:11px;font-weight:700;color:#34414b;overflow-wrap:anywhere}

/* ========================= SHARE ========================= */
.share-section{
    background:linear-gradient(145deg,#fff,color-mix(in srgb,var(--theme-color) 4%,#fff));
    border-color:color-mix(in srgb,var(--theme-color) 12%,#e8edf0)
}
.share-header{text-align:center;margin-bottom:14px}
.share-title{font-size:16px;font-weight:800;color:var(--text);margin-bottom:3px}
.share-subtitle{font-size:10px;color:var(--muted)}
.whatsapp-input-group{display:flex;gap:8px;margin:0 0 10px}
.whatsapp-input-group input{min-width:0;flex:1}
.whatsapp-input-group button{
    border:0;border-radius:12px;padding:0 16px;background:#16a34a;color:#fff;font-size:11px;font-weight:800;cursor:pointer;box-shadow:0 7px 16px rgba(22,163,74,.18)
}
.share-actions{display:grid;grid-template-columns:1fr 1fr;gap:8px}
.share-btn,.qr-btn{
    display:flex;align-items:center;justify-content:center;gap:7px;min-height:43px;padding:10px 12px;
    border-radius:12px;text-decoration:none;font-size:10px;font-weight:800;cursor:pointer;transition:.2s ease
}
.share-btn-primary,.btn-primary{background:var(--theme-color);color:#fff;border:1px solid var(--theme-color)}
.share-btn-outline,.btn-secondary{background:#fff;color:var(--theme-color);border:1px solid color-mix(in srgb,var(--theme-color) 35%,#dce5e8)}
.share-btn:hover,.qr-btn:hover{transform:translateY(-2px);box-shadow:0 10px 20px rgba(20,35,45,.08)}

/* ========================= SOCIAL ========================= */
.social-links{display:flex;justify-content:flex-start;gap:9px;flex-wrap:wrap}
.social-link{
    width:42px;height:42px;border-radius:13px!important;display:flex;align-items:center;justify-content:center;
    color:#fff;text-decoration:none;font-size:15px;box-shadow:0 5px 12px rgba(0,0,0,.08);transition:.2s ease
}
.social-link:hover{transform:translateY(-3px);box-shadow:0 10px 20px rgba(0,0,0,.14)}

/* ========================= QR ========================= */
.qr-wrapper{display:flex;align-items:center;justify-content:center;background:#fff;border:1px solid var(--border);border-radius:17px;padding:18px;margin:0 auto 13px;width:max-content;box-shadow:var(--shadow-soft)}
.qr-code{width:180px;height:180px}
.qr-actions{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-top:10px}
.form-input,.form-textarea{
    width:100%;border:1px solid #dfe6e9;background:#fbfcfc;color:var(--text);
    padding:11px 12px;border-radius:12px;outline:none;font-size:11px;transition:.2s
}
.form-input:focus,.form-textarea:focus{border-color:var(--theme-color);box-shadow:0 0 0 3px color-mix(in srgb,var(--theme-color) 10%,transparent);background:#fff}

/* ========================= ABOUT ========================= */
.about-content{font-size:11px;color:#687681;line-height:1.75;margin:0}
.about-content p{margin-bottom:8px}

/* ========================= PRODUCTS ========================= */
.gallery-filters{display:flex;gap:7px;overflow-x:auto;padding-bottom:3px;margin-bottom:13px;scrollbar-width:none}
.gallery-filters::-webkit-scrollbar{display:none}
.filter-btn{white-space:nowrap;padding:7px 11px;border:1px solid #e2e8eb;background:#fff;color:#78858e;border-radius:999px;font-size:9px;font-weight:800;cursor:pointer}
.filter-btn.active,.filter-btn:hover{background:var(--theme-color);border-color:var(--theme-color);color:#fff}
.gallery-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:10px}
.gallery-item{background:#fff;border:1px solid #e7ecef;border-radius:15px;overflow:hidden;transition:.22s ease}
.gallery-item:hover{transform:translateY(-3px);box-shadow:0 12px 25px rgba(20,35,45,.09)}
.gallery-img{width:100%;height:145px;display:block;object-fit:cover;cursor:pointer;background:#eef2f3}
.gallery-info{padding:10px}
.gallery-title{font-size:10px;font-weight:800;color:#34414b;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;margin-bottom:5px}
.gallery-price{font-size:11px;font-weight:900;color:var(--theme-color);margin-bottom:8px}
.gallery-price del{font-size:9px;font-weight:600;color:#a1abb1;margin-right:4px}
.product-actions{display:flex;gap:5px}
.product-btn{flex:1;border:0;border-radius:9px;padding:8px 5px;font-size:8px;font-weight:900;text-decoration:none;text-align:center;color:#fff;cursor:pointer;transition:.2s}
.buy-btn{background:var(--theme-color)}
.cart-btn{background:#1e293b}
.enquiry-btn{background:var(--theme-color);display:block;width:100%}
.product-btn:hover{opacity:.88;transform:translateY(-1px)}

/* ========================= VIDEO ========================= */
.video-item{overflow:hidden;border:1px solid var(--border);border-radius:14px;margin-bottom:12px;background:#fff}
.video-item iframe{display:block;width:100%;height:210px;border:0}
.video-title{padding:10px 12px;background:#fafbfb;font-size:10px;font-weight:800;text-align:center;color:#47545d}

/* ========================= PAYMENT ========================= */
.payment-item{background:var(--surface-soft);border:1px solid var(--border);border-radius:14px;padding:13px;margin-bottom:9px}
.payment-header{font-size:11px;color:var(--theme-color);font-weight:900;margin-bottom:8px}
.payment-detail{display:flex;justify-content:space-between;gap:10px;padding:7px 0;border-bottom:1px solid #e7ecee}
.payment-detail:last-child{border-bottom:0}
.payment-label{font-size:9px;color:#8a969e}.payment-value{font-size:9px;font-weight:800;color:#36434d;text-align:right;overflow-wrap:anywhere}
.qr-image{width:170px;height:170px;object-fit:contain;display:block;margin:10px auto;border-radius:13px;background:#fff;border:1px solid var(--border);padding:8px}

/* ========================= FEEDBACK / FORM ========================= */
.rating-stars{display:flex;justify-content:center;gap:7px;font-size:23px;cursor:pointer}
.star{color:#d4dce0;transition:.15s}.star:hover,.star.active{color:#f4b740}
.feedback-form{display:flex;flex-direction:column;gap:9px}
.form-textarea{min-height:105px;resize:vertical}
.submit-btn{width:100%;border:0;background:var(--theme-color);color:#fff;padding:12px;border-radius:12px;font-size:11px;font-weight:900;cursor:pointer;transition:.2s}
.submit-btn:hover{filter:brightness(.95);transform:translateY(-1px)}
.map-container{height:220px;overflow:hidden;border-radius:14px;border:1px solid var(--border);margin-bottom:13px}.map-container iframe{width:100%;height:100%;border:0}

/* ========================= FOOTER ========================= */
.footer-nav{
    position:fixed;left:50%;bottom:12px;transform:translateX(-50%);width:min(490px,calc(100% - 20px));
    padding:7px;background:rgba(255,255,255,.94);backdrop-filter:blur(18px);
    border:1px solid rgba(222,230,233,.95);border-radius:19px;box-shadow:0 15px 40px rgba(0,0,0,.14);z-index:1000
}
.footer-menu{display:flex;justify-content:space-around;align-items:center;list-style:none;margin:0;padding:0;overflow-x:auto;scrollbar-width:none}
.footer-menu::-webkit-scrollbar{display:none}
.footer-item{min-width:54px;display:flex;flex-direction:column;align-items:center;gap:3px;padding:6px 7px;border-radius:12px;color:#8b969e;text-decoration:none;font-size:7px;font-weight:800;letter-spacing:.35px;white-space:nowrap;transition:.2s}
.footer-item i{font-size:13px}.footer-item:hover,.footer-item.active{color:var(--theme-color);background:color-mix(in srgb,var(--theme-color) 9%,#fff)}

/* ========================= MODALS ========================= */
.modal{display:none;position:fixed;inset:0;background:rgba(12,18,22,.72);backdrop-filter:blur(8px);align-items:center;justify-content:center;z-index:9999;padding:16px}
.modal.active{display:flex;animation:modalIn .2s ease}
.modal-content{width:100%;max-width:430px;max-height:90vh;overflow-y:auto;background:#fff;border-radius:22px;padding:20px;box-shadow:0 25px 70px rgba(0,0,0,.25)}
.modal-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:15px}.modal-title{font-size:16px;font-weight:900}.modal-close{width:32px;height:32px;border:0;border-radius:50%;background:#f3f5f6;color:#66737c;font-size:20px;cursor:pointer}
@keyframes modalIn{from{opacity:0;transform:scale(.97)}to{opacity:1;transform:scale(1)}}

/* ========================= RESPONSIVE ========================= */
@media(max-width:520px){
    body{background:var(--bg)}
    .container{box-shadow:none}
}
@media(max-width:390px){
    .professional-header{padding-left:17px;padding-right:17px;min-height:305px}
    .company-name{font-size:24px}.quick-actions{margin-left:12px;margin-right:12px}.card,.share-section{margin-left:11px;margin-right:11px}
    .gallery-img{height:125px}.action-btn{min-height:68px}
}
</style>
<style>

/* =========================================================
   PREMIUM LUXURY THEME — BLACK / CHAMPAGNE GOLD
   ========================================================= */
:root {
    --primary-color: #c9a45c !important;
    --primary-dark: #a8843f !important;
    --primary-light: #e2c477 !important;
    --secondary-color: #8f897f !important;
    --accent-color: #d8bd7a !important;
    --background: #090909 !important;
    --surface: #11110f !important;
    --text-primary: #eee7db !important;
    --text-secondary: #9b958b !important;
    --text-light: #68635c !important;
    --border-color: #2d291f !important;
    --success-color: #25d366 !important;
    --warning-color: #d9aa52 !important;
    --error-color: #e35d5d !important;
    --shadow-sm: 0 4px 18px rgba(0,0,0,.18) !important;
    --shadow-md: 0 10px 35px rgba(0,0,0,.28) !important;
    --shadow-lg: 0 20px 55px rgba(0,0,0,.38) !important;
    --shadow-xl: 0 28px 80px rgba(0,0,0,.48) !important;
    --radius-sm: 8px !important;
    --radius-md: 12px !important;
    --radius-lg: 18px !important;
    --radius-xl: 24px !important;
}

html { background:#090909; scroll-behavior:smooth; }
body {
    font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif !important;
    background:
        radial-gradient(circle at 88% 8%, rgba(201,164,92,.10), transparent 25%),
        radial-gradient(circle at 8% 55%, rgba(201,164,92,.045), transparent 24%),
        linear-gradient(rgba(255,255,255,.018) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.018) 1px, transparent 1px),
        #090909 !important;
    background-size:auto,auto,68px 68px,68px 68px,auto !important;
    color:var(--text-primary) !important;
}

.container {
    max-width:620px !important;
    background:transparent !important;
    min-height:100vh;
    box-shadow:none !important;
}

.content-wrapper { padding-bottom:105px !important; }

/* HERO */
.professional-header {
    min-height:430px;
    padding:42px 28px 44px !important;
    background:
        radial-gradient(circle at 88% 8%, rgba(226,196,119,.13), transparent 30%),
        linear-gradient(145deg,#0b0b0a 0%,#12110e 52%,#0a0a09 100%) !important;
    border-bottom:1px solid rgba(201,164,92,.20);
    overflow:hidden;
}
.professional-header::before {
    background:linear-gradient(90deg,transparent,rgba(226,196,119,.055),transparent) !important;
    animation:premiumShimmer 8s ease-in-out infinite !important;
}
.professional-header::after {
    content:'';
    position:absolute;
    width:380px;
    height:380px;
    right:-180px;
    top:-210px;
    border:1px solid rgba(201,164,92,.16);
    border-radius:50%;
    box-shadow:0 0 0 45px rgba(201,164,92,.025),0 0 0 90px rgba(201,164,92,.018);
}
@keyframes premiumShimmer { 0%,100%{transform:translateX(-110%)} 50%{transform:translateX(110%)} }

.header-content { z-index:3 !important; }
.profile-container {
    display:block !important;
    margin-bottom:0 !important;
}
.profile-pic-wrapper {
    display:inline-block;
    margin-bottom:24px;
}
.profile-pic {
    width:94px !important;
    height:94px !important;
    border-radius:22px !important;
    border:1px solid rgba(226,196,119,.48) !important;
    padding:3px;
    background:#151512 !important;
    box-shadow:0 18px 50px rgba(0,0,0,.5),0 0 0 8px rgba(201,164,92,.045) !important;
}
.verified-badge {
    width:25px !important;
    height:25px !important;
    bottom:-7px !important;
    right:-7px !important;
    background:#25d366 !important;
    border:3px solid #11110f !important;
    box-shadow:0 4px 12px rgba(0,0,0,.4);
}
.profile-info { width:100%; }
.company-name {
    font-family:'Poppins',sans-serif !important;
    font-size:clamp(2.25rem,7vw,3.5rem) !important;
    line-height:1.02 !important;
    letter-spacing:-.055em !important;
    color:#eee7db !important;
    max-width:560px;
    margin-bottom:10px !important;
}
.user-name {
    font-size:1.02rem !important;
    color:#b1aaa0 !important;
    letter-spacing:.01em;
    margin-bottom:14px !important;
}
.profession {
    background:rgba(201,164,92,.08) !important;
    border:1px solid rgba(201,164,92,.30) !important;
    color:#d8bd7a !important;
    backdrop-filter:blur(12px);
    padding:8px 14px !important;
    font-size:.76rem !important;
    letter-spacing:.08em;
    text-transform:uppercase;
}
.views-badge {
    top:24px !important;
    right:24px !important;
    background:rgba(255,255,255,.035) !important;
    border:1px solid rgba(201,164,92,.18);
    color:#aaa39a !important;
    backdrop-filter:blur(12px);
}

/* QUICK ACTIONS */
.quick-actions {
    grid-template-columns:repeat(4,1fr) !important;
    gap:10px !important;
    padding:14px !important;
    margin:-28px 14px 24px !important;
    background:rgba(17,17,15,.90);
    border:1px solid rgba(201,164,92,.18);
    border-radius:20px;
    box-shadow:0 20px 55px rgba(0,0,0,.42);
    backdrop-filter:blur(20px);
}
.action-btn {
    min-height:76px;
    padding:12px 6px !important;
    background:#151512 !important;
    border:1px solid #29261f !important;
    border-radius:14px !important;
    color:#a9a299 !important;
    box-shadow:none !important;
}
.action-btn:hover {
    transform:translateY(-2px) !important;
    background:#1a1915 !important;
    border-color:rgba(201,164,92,.55) !important;
    color:#e2c477 !important;
}
.action-btn i { color:#c9a45c !important; font-size:1.1rem !important; }
.action-btn span { font-size:.67rem !important; letter-spacing:.08em !important; }

/* ALL CONTENT CARDS */
.card,
.share-section {
    background:linear-gradient(145deg,rgba(20,20,18,.98),rgba(14,14,13,.98)) !important;
    border:1px solid #2b281f !important;
    border-radius:22px !important;
    box-shadow:0 16px 45px rgba(0,0,0,.22) !important;
    margin:0 14px 18px !important;
    padding:22px !important;
}
.card:hover { border-color:rgba(201,164,92,.22) !important; }
.card-header {
    margin-bottom:18px !important;
    padding-bottom:14px !important;
    border-bottom:1px solid #29261f !important;
}
.card-title {
    font-size:1rem !important;
    letter-spacing:.01em;
    color:#e8e0d3 !important;
}
.card-title i { color:#c9a45c !important; }

/* CONTACT */
.contact-list { gap:9px !important; }
.contact-item {
    background:#151512 !important;
    border:1px solid #27241e !important;
    border-radius:15px !important;
    padding:13px !important;
    color:#e5ded2 !important;
}
.contact-item:hover {
    background:#191814 !important;
    border-color:rgba(201,164,92,.48) !important;
    transform:translateX(2px) !important;
}
.contact-icon {
    width:44px !important;
    height:44px !important;
    border-radius:12px !important;
    background:rgba(201,164,92,.09) !important;
    border:1px solid rgba(201,164,92,.22);
    color:#d8bd7a !important;
}
.contact-label { color:#716c64 !important; font-size:.72rem !important; text-transform:uppercase; letter-spacing:.08em; }
.contact-value { color:#ddd5c8 !important; font-size:.9rem; word-break:break-word; }

/* SHARE */
.share-section {
    background:
        radial-gradient(circle at 100% 0,rgba(201,164,92,.12),transparent 38%),
        linear-gradient(145deg,#151512,#0f0f0d) !important;
}
.share-title { font-size:1.35rem !important; color:#eee7db !important; }
.share-subtitle { color:#817b73 !important; }
.whatsapp-input-group { gap:8px !important; }
.whatsapp-input-group input,
.form-input,
.form-textarea {
    background:#0d0d0c !important;
    color:#eee7db !important;
    border:1px solid #312d24 !important;
    border-radius:13px !important;
}
.whatsapp-input-group input::placeholder,
.form-input::placeholder,
.form-textarea::placeholder { color:#625e57 !important; }
.whatsapp-input-group input:focus,
.form-input:focus,
.form-textarea:focus {
    border-color:#c9a45c !important;
    box-shadow:0 0 0 3px rgba(201,164,92,.10) !important;
}
.whatsapp-input-group button { border-radius:13px !important; }
.share-actions,.qr-actions { gap:9px !important; }
.share-btn,.qr-btn,.submit-btn {
    border-radius:13px !important;
    min-height:46px;
}
.share-btn-primary,.btn-primary,.submit-btn {
    background:linear-gradient(135deg,#d9b66d,#b58c45) !important;
    color:#11100e !important;
    border:1px solid #e1c27d !important;
    box-shadow:0 8px 25px rgba(201,164,92,.16) !important;
}
.share-btn-outline,.btn-secondary {
    background:transparent !important;
    color:#d7bd7b !important;
    border:1px solid #5c4a29 !important;
}
.share-btn:hover,.qr-btn:hover,.submit-btn:hover { transform:translateY(-2px); }

/* SOCIAL */
.social-links { gap:10px !important; }
.social-link {
    width:44px !important;
    height:44px !important;
    border-radius:13px !important;
    border:1px solid rgba(255,255,255,.08);
    box-shadow:none !important;
    filter:saturate(.82);
}
.social-link:hover { transform:translateY(-3px) !important; filter:saturate(1); }

/* QR */
.qr-wrapper {
    background:#f5f0e7 !important;
    border:5px solid #c9a45c !important;
    border-radius:18px !important;
    padding:14px !important;
    box-shadow:0 20px 45px rgba(0,0,0,.35) !important;
}
.qr-code { width:180px;height:180px; }

/* GALLERY / PRODUCTS */
.gallery-filters { gap:7px !important; }
.filter-btn {
    padding:7px 13px !important;
    background:transparent !important;
    color:#8f897f !important;
    border:1px solid #302c24 !important;
    border-radius:999px !important;
}
.filter-btn.active,.filter-btn:hover {
    background:#c9a45c !important;
    border-color:#c9a45c !important;
    color:#11100e !important;
}
.gallery-grid { gap:10px !important; }
.gallery-item {
    background:#151512 !important;
    border:1px solid #2b281f !important;
    border-radius:17px !important;
}
.gallery-img { height:165px !important; }
.gallery-info { padding:12px !important; }
.gallery-title { color:#e5ddd0 !important; }
.gallery-price { color:#d8bd7a !important; }
.gallery-price del { color:#625e57 !important; }
.product-btn { border-radius:10px !important; }
.buy-btn,.enquiry-btn { background:linear-gradient(135deg,#c9a45c,#a98240) !important; color:#11100e !important; }
.cart-btn { background:#1c8c50 !important; }

/* PAYMENT */
.payment-item {
    background:#151512 !important;
    border:1px solid #2b281f !important;
    border-radius:16px !important;
}
.payment-header { color:#d8bd7a !important; }
.payment-detail { border-color:#29261f !important; }
.payment-label { color:#777168 !important; }
.payment-value { color:#ddd5c8 !important; text-align:right; word-break:break-word; }
.qr-image { background:#f5f0e7 !important; border-color:#c9a45c !important; }

/* VIDEO / MAP */
.video-item,.map-container { border-color:#2d291f !important; border-radius:16px !important; }
.video-title { background:#151512 !important; color:#dcd4c8; }

/* FEEDBACK */
.rating-stars { color:#c9a45c; }
.star-empty { color:#39352f !important; }
.star-filled,.star.active,.star:hover { color:#d9b55f !important; }

/* ENQUIRY */
.form-textarea { min-height:130px; }
.submit-btn { font-size:.9rem !important; letter-spacing:.03em; }

/* FOOTER */
.footer-nav {
    left:50% !important;
    right:auto !important;
    bottom:12px !important;
    transform:translateX(-50%);
    width:calc(100% - 24px);
    max-width:590px;
    padding:7px !important;
    background:rgba(17,17,15,.92) !important;
    border:1px solid rgba(201,164,92,.20) !important;
    border-radius:20px !important;
    box-shadow:0 18px 55px rgba(0,0,0,.55) !important;
    backdrop-filter:blur(22px) !important;
}
.footer-menu { max-width:none !important; gap:2px; }
.footer-item {
    min-width:58px;
    padding:8px 6px !important;
    color:#68635c !important;
    border-radius:14px !important;
    font-size:.58rem !important;
    letter-spacing:.04em;
}
.footer-item i { font-size:1rem !important; margin-bottom:2px; }
.footer-item.active,.footer-item:hover {
    color:#d8bd7a !important;
    background:rgba(201,164,92,.09) !important;
}

/* MODALS */
.modal { background:rgba(0,0,0,.82) !important; backdrop-filter:blur(15px) !important; }
.modal-content {
    background:#131311 !important;
    border:1px solid #373025 !important;
    border-radius:22px !important;
    box-shadow:0 30px 90px rgba(0,0,0,.7) !important;
}
.modal-title { color:#eee7db !important; }
.modal-close { color:#8f897f !important; }
.modal-close:hover { background:#211f1a !important; color:#e2c477 !important; }

/* MOBILE */
@media (max-width:480px) {
    .professional-header { min-height:405px; padding:32px 20px 38px !important; }
    .company-name { font-size:2.35rem !important; }
    .quick-actions { margin:-25px 10px 18px !important; padding:10px !important; }
    .action-btn { min-height:68px; }
    .card,.share-section { margin:0 10px 14px !important; padding:18px !important; border-radius:19px !important; }
    .gallery-grid { grid-template-columns:repeat(2,1fr) !important; }
    .gallery-img { height:130px !important; }
    .footer-nav { width:calc(100% - 18px); bottom:8px !important; }
    .footer-item { min-width:48px; }
    .footer-item span { max-width:58px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
}

@media (min-width:481px) {
    .container { padding:0 8px; }
}

/* Remove generic blue focus/hover remnants */
button:focus,a:focus,input:focus,textarea:focus { outline:none; }
::selection { background:#c9a45c; color:#11100e; }

</style>
\n<style>\n/* =========================================================\n   SIGNATURE NAVY + GOLD — PREMIUM CARD UPGRADE\n   Inspired by the supplied navy / champagne-gold reference.\n   Accent remains dynamic from $userObj->theme_color.\n   ========================================================= */\n:root{\n  --theme-color: {{$userObj->theme_color ?? '#D1A85A'}};\n  --gold: var(--theme-color);\n  --gold-soft: color-mix(in srgb,var(--gold) 22%,transparent);\n  --gold-border: color-mix(in srgb,var(--gold) 48%,#17212a);\n  --navy:#06111a;\n  --navy-2:#081923;\n  --navy-3:#0d202c;\n  --ink:#e9e2d5;\n  --ink-muted:#9ca6aa;\n}\n\nhtml,body{background:#050b10!important}\nbody{\n  font-family:'Inter',sans-serif!important;\n  background:\n    radial-gradient(circle at 50% -5%,color-mix(in srgb,var(--gold) 9%,transparent),transparent 32%),\n    linear-gradient(180deg,#050b10 0%,#071018 100%)!important;\n}\nbody:before{display:none!important}\n.container{\n  max-width:560px!important;\n  background:var(--navy)!important;\n  box-shadow:0 0 70px rgba(0,0,0,.55)!important;\n}\n.content-wrapper{padding-bottom:104px!important}\n\n/* ---------- HERO ---------- */\n.professional-header{\n  min-height:455px!important;\n  padding:30px 24px 48px!important;\n  border-radius:0!important;\n  border:0!important;\n  border-bottom:1px solid rgba(255,255,255,.04)!important;\n  background:\n    radial-gradient(circle at 50% 18%,color-mix(in srgb,var(--gold) 12%,transparent),transparent 30%),\n    radial-gradient(circle at 100% 0,color-mix(in srgb,var(--gold) 7%,transparent),transparent 25%),\n    linear-gradient(155deg,#050e16 0%,#071721 52%,#061019 100%)!important;\n}\n.professional-header:before{\n  width:500px!important;height:500px!important;right:-255px!important;top:-315px!important;\n  border:1px solid color-mix(in srgb,var(--gold) 28%,transparent)!important;\n  box-shadow:\n    0 0 0 28px color-mix(in srgb,var(--gold) 4%,transparent),\n    0 0 0 62px color-mix(in srgb,var(--gold) 3%,transparent),\n    0 0 0 96px color-mix(in srgb,var(--gold) 2%,transparent)!important;\n}\n.professional-header:after{\n  inset:0!important;width:auto!important;height:auto!important;right:auto!important;top:auto!important;\n  border:0!important;border-radius:0!important;opacity:.34!important;\n  background-image:\n    linear-gradient(rgba(255,255,255,.028) 1px,transparent 1px),\n    linear-gradient(90deg,rgba(255,255,255,.028) 1px,transparent 1px)!important;\n  background-size:48px 48px!important;\n  mask-image:linear-gradient(to bottom,black 0%,transparent 85%)!important;\n}\n.header-content{z-index:5!important}\n.views-badge{\n  top:4px!important;right:2px!important;\n  background:rgba(255,255,255,.035)!important;\n  border:1px solid color-mix(in srgb,var(--gold) 28%,transparent)!important;\n  color:#c7bda9!important;\n}\n.profile-container{padding-top:38px!important}\n.profile-pic-wrapper{margin-bottom:20px!important}\n.profile-pic{\n  width:112px!important;height:112px!important;border-radius:50%!important;\n  border:2px solid var(--gold)!important;padding:5px!important;\n  background:#0b1821!important;\n  box-shadow:\n    0 0 0 7px rgba(255,255,255,.025),\n    0 0 0 9px color-mix(in srgb,var(--gold) 18%,transparent),\n    0 18px 50px rgba(0,0,0,.55)!important;\n}\n.verified-badge{\n  background:#071018!important;color:#fff!important;\n  border:2px solid var(--gold)!important;width:25px!important;height:25px!important;\n}\n.company-name{\n  font-family:'Playfair Display',Georgia,serif!important;\n  font-size:clamp(2.25rem,8vw,3.45rem)!important;\n  line-height:.98!important;letter-spacing:-.045em!important;\n  text-transform:uppercase!important;color:#f0e8d9!important;\n  text-shadow:0 2px 20px rgba(0,0,0,.35);\n}\n.user-name{\n  color:#b9b4ab!important;font-size:1rem!important;\n  letter-spacing:.08em!important;text-transform:uppercase!important;\n}\n.profession{\n  color:var(--gold)!important;background:transparent!important;\n  border:0!important;border-top:1px solid color-mix(in srgb,var(--gold) 55%,transparent)!important;\n  border-bottom:1px solid color-mix(in srgb,var(--gold) 55%,transparent)!important;\n  border-radius:0!important;padding:9px 14px!important;\n  letter-spacing:.1em!important;font-size:.69rem!important;\n}\n\n/* ---------- ACTION BAR ---------- */\n.quick-actions{\n  margin:-32px 14px 22px!important;padding:8px!important;gap:5px!important;\n  background:#08141d!important;border:1px solid color-mix(in srgb,var(--gold) 40%,#17212a)!important;\n  border-radius:14px!important;box-shadow:0 18px 45px rgba(0,0,0,.48)!important;\n}\n.action-btn{\n  min-height:68px!important;background:transparent!important;border:1px solid transparent!important;\n  border-radius:9px!important;box-shadow:none!important;color:#b8b6b0!important;\n}\n.action-btn i{color:var(--gold)!important;font-size:15px!important}\n.action-btn span{font-size:8px!important;color:#a9aaa6!important;letter-spacing:.07em!important}\n.action-btn:hover{\n  background:color-mix(in srgb,var(--gold) 8%,transparent)!important;\n  border-color:color-mix(in srgb,var(--gold) 35%,transparent)!important;\n  color:#eee5d5!important;transform:none!important;\n}\n\n/* ---------- SECTIONS ---------- */\n.card,.share-section{\n  margin:0 13px 15px!important;padding:20px!important;\n  background:linear-gradient(145deg,#0b1a24,#07131c)!important;\n  border:1px solid #1b303b!important;border-radius:18px!important;\n  box-shadow:0 14px 38px rgba(0,0,0,.26)!important;\n}\n.card:hover{border-color:color-mix(in srgb,var(--gold) 25%,#1b303b)!important}\n.card-header{\n  margin-bottom:15px!important;padding-bottom:12px!important;\n  border-bottom:1px solid #1b303b!important;\n}\n.card-header:before{\n  width:3px!important;height:18px!important;background:var(--gold)!important;\n  box-shadow:0 0 12px color-mix(in srgb,var(--gold) 35%,transparent)!important;\n}\n.card-title{\n  font-size:13px!important;text-transform:uppercase!important;\n  letter-spacing:.09em!important;color:#e8e0d2!important;\n}\n.card-title i{color:var(--gold)!important}\n\n/* ---------- CONTACT LIST ---------- */\n.contact-list{gap:7px!important}\n.contact-item{\n  background:rgba(255,255,255,.018)!important;border:1px solid #172b36!important;\n  border-radius:12px!important;padding:11px!important;\n}\n.contact-item:hover{\n  background:color-mix(in srgb,var(--gold) 5%,transparent)!important;\n  border-color:color-mix(in srgb,var(--gold) 35%,#172b36)!important;\n  transform:none!important;\n}\n.contact-icon{\n  width:39px!important;height:39px!important;flex-basis:39px!important;\n  background:transparent!important;border:1px solid color-mix(in srgb,var(--gold) 45%,#1c303a)!important;\n  border-radius:9px!important;color:var(--gold)!important;\n}\n.contact-label{color:#69777e!important;font-size:7px!important;letter-spacing:.13em!important}\n.contact-value{color:#e2ddd3!important;font-size:11px!important}\n\n/* ---------- SHARE ---------- */\n.share-section{\n  background:\n    radial-gradient(circle at 100% 0,color-mix(in srgb,var(--gold) 10%,transparent),transparent 40%),\n    linear-gradient(145deg,#0c1b24,#07131b)!important;\n}\n.share-title{font-family:'Playfair Display',Georgia,serif!important;color:#eee5d5!important;font-size:22px!important}\n.share-subtitle{color:#7d898e!important}\n.whatsapp-input-group input,.form-input,.form-textarea{\n  background:#06111a!important;color:#e8e1d5!important;border:1px solid #1c313c!important;\n}\n.whatsapp-input-group button{background:#25d366!important;color:#fff!important}\n.share-btn-primary,.btn-primary,.submit-btn{\n  background:var(--gold)!important;color:#061018!important;border-color:var(--gold)!important;\n}\n.share-btn-outline,.btn-secondary{\n  background:transparent!important;color:var(--gold)!important;\n  border-color:color-mix(in srgb,var(--gold) 45%,#1c313c)!important;\n}\n\n/* ---------- ABOUT / TEXT ---------- */\n.about-content{color:#9da7aa!important;font-size:11px!important;line-height:1.8!important}\n.about-content strong,.about-content b{color:#ddd5c8!important}\n\n/* ---------- PRODUCTS ---------- */\n.gallery-filters{margin-bottom:12px!important}\n.filter-btn{\n  background:transparent!important;color:#8d989c!important;border-color:#1b303a!important;\n}\n.filter-btn.active,.filter-btn:hover{background:var(--gold)!important;color:#061018!important;border-color:var(--gold)!important}\n.gallery-grid{gap:10px!important}\n.gallery-item{background:#091821!important;border:1px solid #1b303b!important;border-radius:14px!important}\n.gallery-item:hover{border-color:color-mix(in srgb,var(--gold) 32%,#1b303b)!important;transform:translateY(-2px)!important}\n.gallery-img{background:#06111a!important}\n.gallery-info{background:#091821!important}\n.gallery-title{color:#ded8ce!important}\n.gallery-price{color:var(--gold)!important}\n.gallery-price del{color:#68747a!important}\n.buy-btn,.enquiry-btn{background:var(--gold)!important;color:#061018!important}\n.cart-btn{background:#152632!important;color:#d8d0c2!important}\n\n/* ---------- QR ---------- */\n.qr-wrapper{\n  background:#f7f7f4!important;border:2px solid var(--gold)!important;\n  border-radius:14px!important;padding:13px!important;\n  box-shadow:0 0 0 5px color-mix(in srgb,var(--gold) 7%,transparent),0 18px 40px rgba(0,0,0,.35)!important;\n}\n.qr-code{width:180px!important;height:180px!important}\n\n/* ---------- VIDEO / PAYMENT / MAP ---------- */\n.video-item,.payment-item{background:#091821!important;border-color:#1b303b!important}\n.video-title{background:#0d202c!important;color:#d7d0c5!important}\n.payment-header{color:var(--gold)!important}\n.payment-detail{border-color:#1b303b!important}\n.payment-label{color:#68767d!important}.payment-value{color:#d8d1c6!important}\n.map-container{border-color:#1b303b!important}\n\n/* ---------- SOCIAL ---------- */\n.social-link{\n  border:1px solid rgba(255,255,255,.08)!important;\n  box-shadow:0 6px 18px rgba(0,0,0,.28)!important;\n}\n\n/* ---------- FOOTER ---------- */\n.footer-nav{\n  width:min(520px,calc(100% - 18px))!important;\n  bottom:10px!important;padding:6px!important;\n  background:rgba(7,18,26,.94)!important;\n  border:1px solid color-mix(in srgb,var(--gold) 28%,#18303c)!important;\n  box-shadow:0 18px 50px rgba(0,0,0,.5)!important;\n}\n.footer-item{color:#748187!important}\n.footer-item:hover,.footer-item.active{\n  color:var(--gold)!important;background:color-mix(in srgb,var(--gold) 8%,transparent)!important;\n}\n\n/* ---------- MODALS ---------- */\n.modal{background:rgba(0,7,12,.82)!important}\n.modal-content{\n  background:#0a1821!important;border:1px solid #203844!important;color:#eee5d5!important;\n}\n.modal-close{background:#142630!important;color:#c9c1b4!important}\n\n@media(max-width:390px){\n  .professional-header{min-height:420px!important;padding-left:18px!important;padding-right:18px!important}\n  .company-name{font-size:2.15rem!important}\n  .card,.share-section{margin-left:9px!important;margin-right:9px!important;padding:17px!important}\n  .quick-actions{margin-left:9px!important;margin-right:9px!important}\n}\n</style>\n
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <!-- Professional Header -->
            <div class="professional-header">
                @if($userConfigObj->isShowNoOfVisit == '1')
                <div class="views-badge">
                    <i class="fas fa-eye"></i> {{$userObj->no_visit}} Views
                </div>
                @endif

                <div class="header-content">
                    <div class="profile-container">
                        <div class="profile-pic-wrapper">
                            @if(!empty($companyInfoData->company_logo))
                            <img src="{{url('public')}}/{{$companyInfoData->company_logo}}" class="profile-pic" alt="Logo">
                            @elseif(!empty($userObj->profile_pic))
                            <img src="{{url('public')}}/{{$userObj->profile_pic}}" class="profile-pic" alt="Logo">
                            @endif
                            <div class="verified-badge">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="profile-info">
                            @if (!empty($companyInfoData->company_name))
                            <h1 class="company-name">{!! $companyInfoData->company_name !!}</h1>
                            @if (!empty($companyInfoData->gst_number))
                            <div style="font-size: 0.75rem; color: rgba(255,255,255,0.8); margin-bottom: 0.5rem;">
                                GST No: {!! $companyInfoData->gst_number !!}
                            </div>
                            @endif
                            <div class="user-name">{!! $userObj->name !!}</div>
                            @else
                            <h1 class="company-name">{!! $userObj->name !!}</h1>
                            @endif

                            @if(!empty($companyInfoData->company_profession))
                            <div class="profession">{!! $companyInfoData->company_profession !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="action-btn">
                    <i class="fas fa-phone"></i>
                    <span>Call</span>
                </a>
                <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{urlencode($userConfigObj->whatsappMsg)}}" target="_blank" class="action-btn">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
                <a href="mailto:{{$userObj->email}}" class="action-btn">
                    <i class="fas fa-envelope"></i>
                    <span>Email</span>
                </a>
                @if (!empty($companyInfoData->company_address))
                <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}" target="_blank" class="action-btn">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Location</span>
                </a>
                @endif
            </div>

            <!-- Contact Information -->
            <div class="card fade-in" id="home-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-address-card"></i>
                        Contact Information
                    </h2>
                </div>

                <div class="contact-list">
                    <a href="tel:{{$companyInfoData->country_code}}{{$companyInfoData->company_mobile}}" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Mobile</div>
                            <div class="contact-value">{{$companyInfoData->country_code}} {{$companyInfoData->company_mobile}}</div>
                            @if(!empty($companyInfoData->country_landline))
                            <div class="contact-value">{{$companyInfoData->country_landline}}</div>
                            @endif
                        </div>
                    </a>

                    @if(!empty($companyInfoData->company_website))
                    <a href="{{$companyInfoData->company_website}}" target="_blank" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Website</div>
                            <div class="contact-value">{{$companyInfoData->company_website}}</div>
                        </div>
                    </a>
                    @endif

                    <a href="mailto:{{$userObj->email}}" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Email</div>
                            <div class="contact-value">{{$userObj->email}}</div>
                        </div>
                    </a>

                    @if (!empty($companyInfoData->company_address))
                    <a href="https://maps.google.com?q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}" target="_blank" class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <div class="contact-label">Address</div>
                            <div class="contact-value">{!! $companyInfoData->company_address !!}</div>
                        </div>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Share My Card Section -->
            <div class="share-section fade-in">
                <div class="share-header">
                    <h3 class="share-title">Share My Card</h3>
                    <p class="share-subtitle">Enter a WhatsApp number to share your digital card</p>
                </div>

                <input type="hidden" id="whatsapp-msg" value="{{ url('vc') }}/{{ $userObj->slug }}">

                <div class="whatsapp-input-group">
                    <input 
                        type="tel"
                        id="whatsapp-input"
                        class="form-input"
                        placeholder="Enter WhatsApp number"
                        maxlength="10"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                    >
                    <button type="button" onclick="handleWhatsappShare()">
                        <i class="fab fa-whatsapp"></i> Send
                    </button>
                </div>

                <div class="share-actions">
                    <a href="{{ url('saveViewCard') }}/{{ $userObj->slug }}" 
                       download="contact.vcf" 
                       class="share-btn share-btn-primary">
                        <i class="fas fa-download"></i>
                        Save Contact
                    </a>
                    <button onclick="openShareModal()" class="share-btn share-btn-outline">
                        <i class="fas fa-share-alt"></i>
                        Share Card
                    </button>
                </div>
            </div>

            @if (count($socialMediaData) > 0)
            <!-- Social Media -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-share-alt"></i>
                        Connect With Me
                    </h2>
                </div>
                <div class="social-links">
                    @foreach($socialMediaData as $socialMediaDetail)
                        @if ($socialMediaDetail->type == 'fb')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #1877f2;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'in')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                            <i class="fab fa-instagram"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'li')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #0077b5;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'tw')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #1da1f2;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'pi')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #bd081c;">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'yt')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #ff0000;">
                            <i class="fab fa-youtube"></i>
                        </a>
                        @elseif($socialMediaDetail->type == 'tg')
                        <a href="{{$socialMediaDetail->url}}" target="_blank" class="social-link" style="background: #0088cc;">
                            <i class="fab fa-telegram"></i>
                        </a>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif

            <!-- QR Code -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-qrcode"></i>
                        Scan QR Code
                    </h2>
                </div>
                <p style="color: var(--text-secondary); text-align: center; margin-bottom: 1rem;">
                    Share your digital card instantly
                </p>
                <div class="qr-wrapper">
                    {!! QrCode::size(180)->generate($vistingUrl) !!}
                </div>
                <input type="text" readonly id="visitingUrlText" value="{{$vistingUrl}}" class="form-input mb-3" style="margin-top: 1rem;">
                <div class="qr-actions">
                    <button class="qr-btn btn-primary" onclick="copyUrlSecond()">
                        <i class="fas fa-copy"></i>
                        Copy URL
                    </button>
                    <a href="{{url('downloadQrCode')}}/{{$userObj->slug}}" class="qr-btn btn-secondary">
                        <i class="fas fa-download"></i>
                        Download QR
                    </a>
                </div>
            </div>

            <!-- About -->
            <div class="card fade-in" id="about-us-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-building"></i>
                        {{$userConfigObj->aboutLabel}}
                    </h2>
                </div>
                <div class="about-content">
                    {!! $companyInfoData->company_info !!}
                </div>
                @if(!empty($companyInfoData->broucher_file))
                <a href="{{url('public')}}/{{$companyInfoData->broucher_file}}" download class="share-btn share-btn-primary" style="width: 100%; margin-top: 1rem;">
                    <i class="fas fa-file-pdf"></i>
                    Download Brochure - @if(!empty($companyInfoData->company_name)){!! $companyInfoData->company_name !!}@else{!! $userObj->name !!}@endif
                </a>
                @endif
            </div>

            @if($galleryData->count() > 0)
            <!-- Products/Gallery -->
            <div class="card fade-in" id="products-services-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-box-open"></i>
                        {{$userConfigObj->galleryLabel}}
                    </h2>
                </div>

                @if (!empty($galleryCatInfo))
                <div class="gallery-filters">
                    <button class="filter-btn active all-filter-btn" data-filter="all">All</button>
                    @foreach($galleryCatInfo as $catlbl => $catName)
                    <button class="filter-btn" data-filter="{{$catlbl}}">{{$catName}}</button>
                    @endforeach
                </div>
                @endif

                <div class="gallery-grid">
                    @foreach($galleryData as $galleryDetail)
                    <div class="gallery-item filter {{$galleryDetail->category_name}}">
                        <img onclick="openImageModal(this)" 
                             alt="{{$galleryDetail->title}}" 
                             src="{{URL::asset('public/upload/product/'.$galleryDetail->head_image)}}" 
                             description="{{$galleryDetail->description}}"
                             class="gallery-img">
                        <div class="gallery-info">
                            <div class="gallery-title">{{$galleryDetail->title}}</div>
                            @if ($galleryDetail->special_price > 0 && $galleryDetail->mrp_price > $galleryDetail->special_price)
                            <div class="gallery-price">
                                <del>₹{{$galleryDetail->mrp_price}}</del> ₹{{$galleryDetail->special_price}}
                            </div>
                            @elseif($galleryDetail->mrp_price > 0)
                            <div class="gallery-price">₹{{$galleryDetail->mrp_price}}</div>
                            @endif

                            <div class="product-actions">
                                @php
                                    $link="https://api.whatsapp.com/send?phone=".str_replace('+','',$companyInfoData->country_code).$companyInfoData->company_mobile."&text=Enquiry for product:".urlencode($galleryDetail->title);
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

                                @if($userConfigObj->isEcommerceEnable == '1')
                                <button class="product-btn buy-btn buyNowBtn" 
                                        data-id="{{$galleryDetail->id}}" 
                                        data-product="{{$galleryDetail->title}}" 
                                        data-price="{{$price}}">
                                    Buy Now
                                </button>
                                <button class="product-btn cart-btn add" 
                                        data-id="{{$galleryDetail->id}}" 
                                        data-product="{{$galleryDetail->title}}" 
                                        data-price="{{$price}}">
                                    Add to Cart
                                </button>
                                @else
                                <a href="{{$link}}" target="_blank" class="product-btn enquiry-btn">
                                    {{$userConfigObj->enquiryLabel}}
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            @if(count($videosData) > 0)
            <!-- Videos -->
            <div class="card fade-in" id="video-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-video"></i>
                        Videos
                    </h2>
                </div>
                @foreach($videosData as $videosDetail)
                <div class="video-item">
                    <iframe src="{{$videosDetail->video_path}}" 
                            title="{{$videosDetail->title}}" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <div class="video-title">{{$videosDetail->title}}</div>
                </div>
                @endforeach
            </div>
            @endif

            @if(count($paymentMasterData) > 0)
            <!-- Payment Options -->
            <div class="card fade-in" id="payment-options-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-credit-card"></i>
                        Payment Options
                    </h2>
                </div>
                
                @foreach($paymentMasterData as $paymentMasterDetail)
                    @if ($paymentMasterDetail->type == 'bank')
                    <div class="payment-item">
                        <h3 class="payment-header">Bank Details</h3>
                        <div class="payment-detail">
                            <span class="payment-label">Bank Name:</span>
                            <span class="payment-value">{{$paymentMasterDetail->bank_name}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Account Holder:</span>
                            <span class="payment-value">{{$paymentMasterDetail->account_holder_name}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Account Number:</span>
                            <span class="payment-value">{{$paymentMasterDetail->account_no}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Account Type:</span>
                            <span class="payment-value">{{ucwords($paymentMasterDetail->account_type)}} Account</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">IFSC Code:</span>
                            <span class="payment-value">{{$paymentMasterDetail->ifsc_code}}</span>
                        </div>
                        <div class="payment-detail">
                            <span class="payment-label">Branch Name:</span>
                            <span class="payment-value">{{$paymentMasterDetail->branch_name}}</span>
                        </div>
                    </div>
                    @else
                    <div class="payment-item">
                        <h3 class="payment-header">UPI Details</h3>
                        <div class="payment-detail">
                            <span class="payment-label">{{ucwords($paymentMasterDetail->type)}} Number:</span>
                            <span class="payment-value">{{$paymentMasterDetail->account_no}}</span>
                        </div>
                        @if(!empty($paymentMasterDetail->qr_img))
                        <img src="{{url('public/upload/payment/')}}/{{$paymentMasterDetail->qr_img}}" 
                             class="qr-image" 
                             alt="Payment QR Code">
                        @endif
                    </div>
                    @endif
                @endforeach
            </div>
            @endif

            <!-- Feedback -->
            <div class="card fade-in" id="feedback-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-star"></i>
                        Feedbacks
                    </h2>
                </div>
                @include('visitingCard.bussinessCard.include.feedbackV2')
            </div>

            @if($userConfigObj->isShowEnquiry == '1')
            <!-- Enquiry Form -->
            <div class="card fade-in" id="enquiry-section">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-comment-alt"></i>
                        Enquiry Form
                    </h2>
                </div>

                @if (!empty($companyInfoData->company_address) && !empty($companyInfoData->latitude))
                <div class="map-container">
                    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{$companyInfoData->latitude}},{{$companyInfoData->longitude}}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                @endif

                <form data-parsley-validate method="post" class="feedback-form" id="enquiry-form" novalidate>
                    <meta name="csrf_token" content="{{ csrf_token() }}" />
                    <input type="hidden" name="slug" id="slug" value="{{$userObj->slug}}">
                    <input type="hidden" id="companyEmail" value="{{$userObj->email}}">

                    <input type="text" 
                           name="enquiryName" 
                           id="enquiryName" 
                           placeholder="Enter Full Name" 
                           pattern="[a-zA-Z ]*$" 
                           required 
                           class="form-input">

                    <input type="email" 
                           name="email" 
                           id="email" 
                           placeholder="Enter Email" 
                           class="form-input">

                    <input type="text" 
                           name="phoneNumber" 
                           id="phoneNumber" 
                           required 
                           placeholder="Enter Phone Number" 
                           class="form-input">

                    <textarea name="message" 
                              id="message" 
                              required 
                              placeholder="Enter Message" 
                              class="form-textarea"></textarea>

                    <button type="submit" id="inquiry-send" class="submit-btn">
                        Send Enquiry
                    </button>
                </form>
            </div>
            @endif

        </div>

        <!-- Footer Navigation -->
        <div class="footer-nav">
            <ul class="footer-menu">
                <li>
                    <a class="footer-item" href="#home-section">
                        <i class="fas fa-home"></i>
                        <span>HOME</span>
                    </a>
                </li>
                <li>
                    <a class="footer-item" href="#about-us-section">
                        <i class="fas fa-briefcase"></i>
                        <span>{{$userConfigObj->aboutLabel}}</span>
                    </a>
                </li>
                @if($galleryData->count() > 0)
                <li>
                    <a class="footer-item" href="#products-services-section">
                        <i class="fas fa-box-open"></i>
                        <span>{{$userConfigObj->galleryLabel}}</span>
                    </a>
                </li>
                @endif
                @if(count($paymentMasterData) > 0)
                <li>
                    <a class="footer-item" href="#payment-options-section">
                        <i class="fas fa-money-bill-alt"></i>
                        <span>PAYMENT</span>
                    </a>
                </li>
                @endif
                @if(count($videosData) > 0)
                <li>
                    <a class="footer-item" href="#video-section">
                        <i class="fas fa-video"></i>
                        <span>VIDEOS</span>
                    </a>
                </li>
                @endif
                @if($userConfigObj->isShowEnquiry == '1')
                <li>
                    <a class="footer-item" href="#enquiry-section">
                        <i class="fas fa-comment-alt"></i>
                        <span>ENQUIRY</span>
                    </a>
                </li>
                @endif
                <li>
                    <a class="footer-item" href="#feedback-section">
                        <i class="fas fa-star"></i>
                        <span>FEEDBACK</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Product Image</h3>
                <button class="modal-close" onclick="closeImageModal()">&times;</button>
            </div>
            <img id="img01" alt="Product Image" style="width: 100%; border-radius: var(--radius-lg);">
            <div id="caption" style="text-align: center; margin: 1rem 0; font-weight: 600;"></div>
            <div id="description" style="text-align: center; color: var(--text-secondary);"></div>
        </div>
    </div>

    <!-- Share Modal -->
    <div id="shareModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Share Profile</h3>
                <button class="modal-close" onclick="closeShareModal()">&times;</button>
            </div>
            <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">Share my Digital Card in your network.</p>
            
            <div class="social-links" style="margin-top: 1rem;">
                <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',$companyInfoData->country_code)}}{{$companyInfoData->company_mobile}}&text={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #25d366;">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="sms:?body={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #00b2ff;">
                    <i class="fas fa-comment-dots"></i>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #1877f2;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?text={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #1da1f2;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://pinterest.com/pin/create/link/?url={{url('vc')}}/{{$userObj->slug}}" 
                   target="_blank" 
                   class="social-link" 
                   style="background: #bd081c;">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                <a href="mailto:?subject=Digital Card&body=Check out this digital card {{url('vc')}}/{{$userObj->slug}}" 
                   class="social-link" 
                   style="background: #ea4335;">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </div>

    <input type="hidden" id="send_enquiry_url" value="{{route('sendEnquiry')}}">

    <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery-3.6.4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/parsley.min.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/form-action.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/jquery-confirm.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/common/js/jquery.star-rating.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/common/js/feedbackSub.js')}}"></script>
    <script src="{{asset('public/js/prevent.js')}}"></script>
    <script src="{{asset('public/visitingCard/bussinessCard/a/js/script.js')}}?v={{date('YmdHis')}}"></script>

    @if($userConfigObj->isEcommerceEnable == '1')
    <script src="{{asset('public/visitingCard/bussinessCard/common/js/add2Cart.js')}}"></script>
    @endif

    <script>
        // Gallery Filter
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                document.querySelectorAll('.gallery-item').forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });

        // Image Modal
        function openImageModal(img) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('img01');
            const caption = document.getElementById('caption');
            const description = document.getElementById('description');
            
            modal.classList.add('active');
            modalImg.src = img.src;
            caption.innerHTML = img.alt;
            description.innerHTML = img.getAttribute('description');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.remove('active');
        }

        // Share Modal
        function openShareModal() {
            document.getElementById('shareModal').classList.add('active');
        }

        function closeShareModal() {
            document.getElementById('shareModal').classList.remove('active');
        }

        // Copy URL
        function copyUrlSecond() {
            const copyText = document.getElementById('visitingUrlText');
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand('copy');
            
            toastr.success('URL copied to clipboard!');
        }

        // WhatsApp Share
        function handleWhatsappShare() {
            const phoneNumber = document.getElementById('whatsapp-input').value;
            const message = document.getElementById('whatsapp-msg').value;
            
            if (phoneNumber && phoneNumber.length === 10) {
                const url = `https://api.whatsapp.com/send?phone=91${phoneNumber}&text=${encodeURIComponent(message)}`;
                window.open(url, '_blank');
            } else {
                toastr.error('Please enter a valid 10-digit phone number');
            }
        }

        // Close modals on outside click
        window.onclick = function(event) {
            const imageModal = document.getElementById('imageModal');
            const shareModal = document.getElementById('shareModal');
            
            if (event.target === imageModal) {
                closeImageModal();
            }
            if (event.target === shareModal) {
                closeShareModal();
            }
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.card').forEach(card => {
                observer.observe(card);
            });
        });

        // Star Rating
        $(document).ready(function() {
            // initialize the star rating plugin
            $('#ratingStars').starRating({
                stars: 5,
                starsSize: 1.8,
                titles: ["Very Bad", "Bad", "Okay", "Good", "Excellent"],
                showInfo: true,
                inputName: 'rating_count'
            });

            // sync selected value to hidden field
            $('#ratingStars').on('change', function (e, value) {
                $('#ratingVal').val(value);
            });
        });
    </script>

</body>
</html>