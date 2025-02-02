<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
/////////////////////////////

// // عرض صفحة إشعار التحقق
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// // معالجة عملية التحقق
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return redirect('/home'); // أو أي صفحة تريد إعادة التوجيه إليها بعد التحقق
// })->middleware(['auth', 'signed'])->name('verification.verify');





// Route::post('/email/verification-notification', function () {
//     $user = Auth::user();

//     if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail()) { // استخدم الاسم المبسط
//         $user->sendEmailVerificationNotification();
//         return back()->with('message', 'تم إرسال رابط التحقق بنجاح!');
//     }

//     return back()->withErrors('المستخدم غير مسموح له بإعادة إرسال التحقق.');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//////////////////////////
// Route::get('/home', function () {
//     return view('welcome');
// });


Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('t', [\App\Http\Controllers\Admin\CategoryController::class, 'test']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('index_page');
});

Auth::routes();
// Auth::routes(['verify' => true]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'visit']
    ],
    function () {


        Route::group([
            'middleware' => ['is_admin', 'auth'],
            'prefix' => 'admin',
        ], function () {


            Route::get('d', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dash');
            Route::get('ca', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('ca');
            Route::get('product', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product');
            Route::resource('/categories', \App\Http\Controllers\Admin\CategoryController::class);
            Route::resource('/products', \App\Http\Controllers\Admin\ProductController::class);

            Route::get('/sales', [\App\Http\Controllers\Admin\ProductController::class, 'getSales'])->name('sales');
        });
        // تعريف الراوت لاستقبال البيانات من الفورم
Route::post('/submit', [\App\Http\Controllers\WebsiteController::class, 'submit'])->name('contact.submit');

        Route::get('/home', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('index_page');
        Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('index_page');
        Route::get('/categories', [\App\Http\Controllers\WebsiteController::class, 'getCategories'])->name('get_categories');
        Route::get('/category/{slug}', [\App\Http\Controllers\WebsiteController::class, 'getCategoryBySlug'])->name('get_category_slug');
        Route::get('/category/{category_slug}/{product_slug}', [\App\Http\Controllers\WebsiteController::class, 'getProductBySlug'])->name('get_product_slug');
        Route::post('/product/add_to_cart', [\App\Http\Controllers\AddToCartController::class, 'addToCart'])->name('product.addToCart');
        Route::get('/contact', [\App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact');

        Route::group([
            'middleware' => ['auth']
        ], function () {
            Route::get('cart', [\App\Http\Controllers\AddToCartController::class, 'index'])->name('cart.index');
            Route::delete('cart/destroy/{id}', [\App\Http\Controllers\AddToCartController::class, 'destroy'])->name('cart.destroy');
            Route::post('cart/update', [\App\Http\Controllers\AddToCartController::class, 'update'])->name('cart.update');
            Route::get('checkout/', [\App\Http\Controllers\CheckOutController::class, 'index'])->name('checkout.index');
            Route::post('checkoutdone/', [\App\Http\Controllers\CheckOutController::class, 'checkout'])->name('checkout.checkout');
        });
    }
);
