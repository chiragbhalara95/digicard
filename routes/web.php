<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes(['verify' => true]);
Auth::routes();
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('account/verify/{token}', [App\Http\Controllers\Auth\VerificationController::class, 'verifyAccount'])->name('user.verify'); 


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index']);
Route::get('robots.txt', [App\Http\Controllers\SitemapController::class, 'robots']);



Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "All cleared";
});

/*
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
*/

// Front Website
Route::namespace('App\Http\Controllers')->group(function() {
    // front desk
    Route::get('/', [App\Http\Controllers\FrontWebsiteController::class, 'index'])->name('frontpage');
    Route::get('/search', [App\Http\Controllers\FrontWebsiteController::class, 'search'])->name('search');

    Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'saveContact'])->name('saveContact');
    Route::get('generate-captcha', [App\Http\Controllers\ContactController::class, 'generateCaptcha'])->name('generate-captcha');

    Route::get('/vc/{slug}', [App\Http\Controllers\FrontWebsiteController::class, 'userVisitCard'])->name('userVisitCard');
    Route::any('saveViewCard/{visitor_id}',[App\Http\Controllers\FrontWebsiteController::class, 'SavePrevCard']);
    Route::post('/companies/sendEnquiry', [App\Http\Controllers\FrontWebsiteController::class, 'sendEnquiry'])->name('sendEnquiry');
    Route::any('downloadQrCode/{visitor_id}',[App\Http\Controllers\FrontWebsiteController::class, 'downloadQrCode']);
    Route::post('/create-lead-order', [App\Http\Controllers\FrontWebsiteController::class, 'createLeadOrder'])->name('createLeadOrder');
    Route::post('/companies/sendRating', [App\Http\Controllers\FrontWebsiteController::class, 'sendRating'])->name('sendRating');

});

Route::middleware(['auth', 'verified', 'check_payment_status'])->namespace('App\Http\Controllers')->group(function() {
    // front desk
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/social-link', [App\Http\Controllers\SocialLinkController::class, 'socialLinkListView'])->name('social-list-view');
  
    Route::get('user/occasion', [App\Http\Controllers\SaveTheCard\OccasionController::class, 'occasionView'])->name('edit-occasion-view');
    Route::post('user/occasion', [App\Http\Controllers\SaveTheCard\OccasionController::class, 'saveOccasion'])->name('save-occasion');
 
    Route::get('/card-theme-selection', [App\Http\Controllers\SaveTheCard\ThemeController::class, 'cardThemeSelectView'])->name('card-theme-selection');
    Route::post('user/saveTheme', [App\Http\Controllers\SaveTheCard\ThemeController::class, 'saveUserTheme'])->name('save-user-theme');
 
    Route::get('/user/occasion/events', [App\Http\Controllers\SaveTheCard\EventController::class, 'index'])->name('user-occasion-event');
    Route::get('/user/occasion/event/add', [App\Http\Controllers\SaveTheCard\EventController::class, 'addEvent'])->name('add-user-occasion-event');
    Route::get('/user/occasion/event/edit/{id}', [App\Http\Controllers\SaveTheCard\EventController::class, 'editEvent'])->name('edit-user-occasion-event');
    Route::post('/user/occasion/event/save', [App\Http\Controllers\SaveTheCard\EventController::class, 'saveEvent'])->name('save-user-occasion-event');
    Route::get('/user/occasion/event/delete/{id}', [App\Http\Controllers\SaveTheCard\EventController::class, 'deleteEvent'])->name('delete-user-occasion-event');

    // Business Card
    Route::get('/company-info', [App\Http\Controllers\BussinessCard\CompanyInfoController::class, 'index'])->name('edit-about-view');
    Route::post('/company-info', [App\Http\Controllers\BussinessCard\CompanyInfoController::class, 'storeCompanyInfo'])->name('store-about-view');

     Route::any('product', [App\Http\Controllers\BussinessCard\GalleryController::class, 'productPage']);
     Route::any('addProduct', [App\Http\Controllers\BussinessCard\GalleryController::class, 'addProductPage']);
     Route::post('productSave', [App\Http\Controllers\BussinessCard\GalleryController::class, 'productStore']);
     Route::get('product/edit/{product_id}', [App\Http\Controllers\BussinessCard\GalleryController::class, 'productUpdatePage'])->name('productUpdatePage');
     Route::get('productDelete/{product_id}', [App\Http\Controllers\BussinessCard\GalleryController::class, 'productDeleteFormat']);
     Route::post('productEditSave', [App\Http\Controllers\BussinessCard\GalleryController::class, 'productEditStoer']);

     Route::get('profile', [App\Http\Controllers\AboutUsController::class, 'profile'])->name('profile');
     Route::post('profile', [App\Http\Controllers\AboutUsController::class, 'storeProfile'])->name('storeProfile');

     Route::get('user/configure', [App\Http\Controllers\BussinessCard\UserConfigureController::class, 'getUserConfigure'])->name('getUserConfigure');
     Route::post('user/configure', [App\Http\Controllers\BussinessCard\UserConfigureController::class, 'storeUserConfigure'])->name('storeUserConfigure');

     Route::any('enquiry/list', [App\Http\Controllers\BussinessCard\EnquiryController::class, 'enquiryList']);

     Route::any('visitor-log/list', [App\Http\Controllers\BussinessCard\VisitorLogController::class, 'getList'])->name('business.get-visitor-log');

    Route::get('business/card-theme-selection', [App\Http\Controllers\BussinessCard\ThemeController::class, 'cardThemeSelectView'])->name('business.card-theme-selection');
    Route::post('business/saveTheme', [App\Http\Controllers\BussinessCard\ThemeController::class, 'saveUserTheme'])->name('business.save-user-theme');

    Route::middleware(['auth', 'verified'])->namespace('App\Http\Controllers\BussinessCard')->prefix('payment-master')->group(function() {
        Route::get('list', [App\Http\Controllers\BussinessCard\PaymentController::class, 'index'])->name('business.payment-master-list');
        Route::get('add', [App\Http\Controllers\BussinessCard\PaymentController::class, 'addPaymentMaster'])->name('business.payment-master-add-view'); 
        Route::post('save', [App\Http\Controllers\BussinessCard\PaymentController::class, 'savePaymentMaster'])->name('business.payment-master-save'); 
        Route::get('edit/{id}', [App\Http\Controllers\BussinessCard\PaymentController::class, 'editPaymentMaster'])->name('business.payment-master-edit-view'); 
        Route::get('delete/{id}', [App\Http\Controllers\BussinessCard\PaymentController::class, 'deletePaymentMaster'])->name('business.payment-master-delete');
    });
    Route::middleware(['auth', 'verified'])->namespace('App\Http\Controllers\BussinessCard')->prefix('order')->group(function() {
        Route::get('lead/list', [App\Http\Controllers\BussinessCard\OrderController::class, 'index'])->name('business.lead-order-list');
        Route::post('order/convert', [App\Http\Controllers\BussinessCard\OrderController::class, 'convertOrder'])->name('business.convert-order');
        Route::get('list', [App\Http\Controllers\BussinessCard\OrderController::class, 'orderList'])->name('business.order-list');
        Route::get('invoice/{id}', [App\Http\Controllers\BussinessCard\OrderController::class, 'doInvoiceSave'])->name('business.order.invoice-print');

    });

    Route::middleware(['auth', 'verified'])->namespace('App\Http\Controllers\BussinessCard')->prefix('social-link')->group(function() {
        Route::get('list', [App\Http\Controllers\BussinessCard\SocialLinkController::class, 'index'])->name('business.social-media-master-list');
        Route::get('add', [App\Http\Controllers\BussinessCard\SocialLinkController::class, 'addLinkView'])->name('business.social-media-master-add');
        Route::post('save', [App\Http\Controllers\BussinessCard\SocialLinkController::class, 'saveSocialLink'])->name('business.social-media-master-save');
        Route::get('edit/{id}', [App\Http\Controllers\BussinessCard\SocialLinkController::class, 'editLinkView'])->name('business.social-media-master-edit');
        Route::get('delete/{id}', [App\Http\Controllers\BussinessCard\SocialLinkController::class, 'deleteLinkView'])->name('business.social-media-master-delete');
    });

    Route::middleware(['auth', 'verified'])->namespace('App\Http\Controllers\BussinessCard')->prefix('videos')->group(function() {
        Route::get('list', [App\Http\Controllers\BussinessCard\VideosController::class, 'index'])->name('business.videos.list');
        Route::get('add', [App\Http\Controllers\BussinessCard\VideosController::class, 'add'])->name('business.videos.add');
        Route::post('save', [App\Http\Controllers\BussinessCard\VideosController::class, 'save'])->name('business.videos.save');
        Route::get('edit/{id}', [App\Http\Controllers\BussinessCard\VideosController::class, 'edit'])->name('business.videos.edit');
        Route::get('delete/{id}', [App\Http\Controllers\BussinessCard\VideosController::class, 'deleteVideo'])->name('business.videos.delete');
    });

});

Route::middleware(['auth', 'verified', 'check_payment_required'])->namespace('App\Http\Controllers')->group(function() {
    // front desk
    Route::get('payment', [App\Http\Controllers\PaymentController::class, 'index']);
    Route::get('razorpay-payment', [App\Http\Controllers\RazorpayPaymentController::class, 'index']);
    Route::post('razorpay-payment', [App\Http\Controllers\RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

    Route::get('paypal/payment', [App\Http\Controllers\PayPalController::class, 'index'])->name('createTransaction');
    Route::post('process-transaction', [App\Http\Controllers\PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('success-transaction', [App\Http\Controllers\PayPalController::class, 'successTransaction'])->name('successTransaction');
    Route::get('cancel-transaction', [App\Http\Controllers\PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

});


Route::middleware(['auth', 'verified', 'is_admin'])->namespace('App\Http\Controllers')->group(function() {
    // Admin route
    Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('admin/digital-card/create', [App\Http\Controllers\Admin\DigitalcardController::class, 'createDigitalCard'])->name('admin.digital-card.create');
    Route::post('admin/digital-card/save', [App\Http\Controllers\Admin\DigitalcardController::class, 'saveDigitalCard'])->name('admin.digital-card.save');
});
