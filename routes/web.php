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



Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Front Website
Route::namespace('App\Http\Controllers')->group(function() {
    // front desk
    Route::get('/', [App\Http\Controllers\FrontWebsiteController::class, 'index'])->name('home');
    Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'saveContact'])->name('saveContact');
    Route::get('/vc/{slug}', [App\Http\Controllers\FrontWebsiteController::class, 'userVisitCard'])->name('userVisitCard');
});

Route::middleware(['auth', 'verified', 'check_payment_status'])->namespace('App\Http\Controllers')->group(function() {
    // front desk
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/about', [App\Http\Controllers\AboutUsController::class, 'aboutView'])->name('edit-about-view');
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

});

Route::middleware(['auth', 'verified', 'check_payment_required'])->namespace('App\Http\Controllers')->group(function() {
    // front desk
    Route::get('payment', [App\Http\Controllers\PaymentController::class, 'index']);
    Route::get('razorpay-payment', [App\Http\Controllers\RazorpayPaymentController::class, 'index']);
    Route::post('razorpay-payment', [App\Http\Controllers\RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
});


Route::middleware(['auth', 'verified', 'is_admin'])->namespace('App\Http\Controllers')->group(function() {
    // Admin route
    Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
});
