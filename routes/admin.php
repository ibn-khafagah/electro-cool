<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TeamController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::controller(SettingController::class)->prefix('setting')->name('setting_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::post('update/{id}', 'update')->name('update');
    });
    Route::controller(BannerController::class)->prefix('banner')->name('banner_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(ServiceController::class)->prefix('service')->name('service_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(FeatureController::class)->prefix('feature')->name('feature_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(FeedbackController::class)->prefix('feedback')->name('feedback_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(TeamController::class)->prefix('team')->name('team_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(BlogController::class)->prefix('blog')->name('blog_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(PartnerController::class)->prefix('partner')->name('partner_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(FaqController::class)->prefix('faq')->name('faq_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(CategoryController::class)->prefix('category')->name('category_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(ProductController::class)->prefix('product')->name('product_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
        Route::delete('destroyImage/{id}', 'destroyImage')->name('destroyImage');
    });

});
require __DIR__.'/auth.php';
