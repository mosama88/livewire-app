<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SettingController;




Route::prefix('/dashboard/')->name('dashboard.')->group(function(){
    Route::middleware(['admin'])->group(function () {
    // index
    Route::view('index', 'dashboard.index')->name('index');

        // Settings
    Route::view('/settings/edit', 'dashboard.settings.edit')->name('settings.edit');

    Route::get('/settings',[SettingController::class,'index'])->name('settings');


        
    });
    
    //Login
    Route::view('login', 'dashboard.auth.login')->middleware('guest:admin')->name('login');
    
    });
    