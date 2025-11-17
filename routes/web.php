<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::name('web_')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
    });
});


require __DIR__.'/auth.php';
