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

    // Counters
    Route::view('/counters', 'dashboard.counters.index')->name('counters');

    // Services
    Route::view('/services', 'dashboard.services.index')->name('services');
        
    // Messages
    Route::view('/messages', 'dashboard.messages.index')->name('messages');

    // Category
    Route::view('/categories', 'dashboard.category.index')->name('categories');

        // Projects
        Route::view('/projects', 'dashboard.projects.index')->name('projects');
    
    });
    
    //Login
    Route::view('login', 'dashboard.auth.login')->middleware('guest:admin')->name('login');
    
    });
    