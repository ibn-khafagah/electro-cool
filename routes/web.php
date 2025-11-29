<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::name('web_')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');
        Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
        Route::get('blog/{slug}', [HomeController::class, 'blog'])->name('blog');
        Route::get('services', [HomeController::class, 'services'])->name('services');
        Route::get('service/{slug}', [HomeController::class, 'service'])->name('service');
        Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
        Route::get('products', [HomeController::class, 'products'])->name('products');
        Route::get('product/{slug}', [HomeController::class, 'product'])->name('product');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::post('storeContact', [HomeController::class, 'storeContact'])->name('storeContact');
    });
});


require __DIR__.'/auth.php';
