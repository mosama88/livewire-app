<?php

use Illuminate\Support\Facades\Route;




Route::prefix('/dashboard/')->name('dashboard.')->group(function(){
    Route::middleware(['admin'])->group(function () {
    // index
    Route::view('index', 'dashboard.index')->name('index');

        // Settings
    Route::view('/settings', 'dashboard.settings.edit')->name('settings');



        
    });
    
    //Login
    Route::view('login', 'dashboard.auth.login')->middleware('guest:admin')->name('login');
    
    });
    