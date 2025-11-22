<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::name('web_')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::post('storeContact', [HomeController::class, 'storeContact'])->name('storeContact');
    });
});


require __DIR__.'/auth.php';
