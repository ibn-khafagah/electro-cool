<?php
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::controller(SettingController::class)->prefix('setting')->name('setting_')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::post('update/{id}', 'update')->name('update');
    });
  
});
require __DIR__.'/auth.php';
