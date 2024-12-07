<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SettingController;




Route::prefix('dashboard/')->name('dashboard.')->group(function(){
    Route::middleware(['admin'])->group(function () {
        
    // index
    Route::view('index', 'dashboard.index')->name('index');

        // Settings
    Route::get('/settings',[SettingController::class,'index'])->name('settings');
    Route::view('/settings/edit', 'dashboard.settings.edit')->name('settings.edit');
        // Skills
    Route::view('/skills', 'dashboard.skills.index')->name('skills');

    // Subscribers
    Route::view('/subscribers', 'dashboard.subscribers.index')->name('subscribers');

        
    });
    
    //Login
    Route::view('login', 'dashboard.auth.login')->middleware('guest:admin')->name('login');
    
    });
    