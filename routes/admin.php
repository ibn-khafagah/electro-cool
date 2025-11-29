<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\HomePageController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TeamController;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::controller(BannerController::class)->prefix('banner')->name('banner_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(ServiceController::class)->prefix('service')->name('service_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(FeatureController::class)->prefix('feature')->name('feature_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(FeedbackController::class)->prefix('feedback')->name('feedback_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(TeamController::class)->prefix('team')->name('team_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(BlogController::class)->prefix('blog')->name('blog_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(PartnerController::class)->prefix('partner')->name('partner_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(FaqController::class)->prefix('faq')->name('faq_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(CategoryController::class)->prefix('category')->name('category_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(ProductController::class)->prefix('product')->name('product_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
        Route::get('destroyImage/{id}', 'destroyImage')->name('destroyImage');
    });
    Route::controller(AlbumController::class)->prefix('album')->name('album_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('images/{id}', 'images')->name('images');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('uploadImages/{id}', 'uploadImages')->name('uploadImages');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
        Route::get('destroyImage/{id}', 'destroyImage')->name('destroyImage');
    });
    Route::controller(SettingController::class)->prefix('setting')->name('setting_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::post('update/{id}', 'update')->name('update');
    });
    Route::controller(ContactController::class)->prefix('contact')->name('contact_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::controller(HomePageController::class)->prefix('home')->name('home_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::post('update/{id}', 'update')->name('update');
    });
    Route::controller(AboutController::class)->prefix('about')->name('about_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::post('update/{id}', 'update')->name('update');
    });

    Route::get('/administrator/generate-sitemap', function(){
        Artisan::call('sitemap:generate');
        ToastMagic::success('message', 'Sitemap generated successfully!');
        return redirect()->back();
    })->name('generate_sitemap');

});
require __DIR__.'/auth.php';
