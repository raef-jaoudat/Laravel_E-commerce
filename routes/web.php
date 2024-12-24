<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('t', [\App\Http\Controllers\Admin\CategoryController::class, 'test']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {


        Route::group([
            'middleware' => ['is_admin','auth'],
            'prefix' => 'admin',
        ], function () {


            Route::get('d', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dash');
            Route::get('ca', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('ca');
            Route::get('product', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product');
            Route::resource('/categories', \App\Http\Controllers\Admin\CategoryController::class);
            Route::resource('/products', \App\Http\Controllers\Admin\ProductController::class);
        });
        Route::get('/', [\App\Http\Controllers\websiteController::class, 'index']);
    Route::get('/categories', [\App\Http\Controllers\websiteController::class, 'getCategories'])->name('get_categories');
    Route::get('/category/{slug}', [\App\Http\Controllers\websiteController::class, 'getCategoryBySlug'])->name('get_category_slug');
    Route::get('/category/{category_slug}/{product_slug}', [\App\Http\Controllers\websiteController::class, 'getProductBySlug'])->name('get_product_slug');
    Route::post('/product/add_to_cart', [\App\Http\Controllers\AddToCartController::class, 'addToCart'])->name('product.addToCart');


    Route::group([
        'middleware' => ['auth']
    ], function () {
        Route::get('cart',[\App\Http\Controllers\AddToCartController::class,'index'])->name('cart.index');
        Route::delete('cart/destroy/{id}',[\App\Http\Controllers\AddToCartController::class,'destroy'])->name('cart.destroy');
        Route::post('cart/update',[\App\Http\Controllers\AddToCartController::class,'update'])->name('cart.update');
        Route::get('checkout/',[\App\Http\Controllers\CheckOutController::class,'index'])->name('checkout.index');
    });

    }
);
