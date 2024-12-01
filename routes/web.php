<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::prefix('/dashboard/')->name('dashboard.')->group(function(){

    // index
    Route::view('index', 'dashboard.index')->name('dashboard.index');
  
});

Route::prefix('/')->name('front.')->group(function(){

    // index
    Route::view('', 'front.index')->name('index');
    
    // About
    Route::view('/about', 'front.about')->name('about');
    
    // Contact
    Route::view('/contact', 'front.contact')->name('contact');

    // Service
    Route::view('/service', 'front.service')->name('service');

    
    // Project
    Route::view('/project', 'front.project')->name('project');

        // Team
        Route::view('/team', 'front.team')->name('team');

        //Testimonial
        Route::view('/testimonial', 'front.testimonial')->name('testimonial');

});

// require __DIR__.'/auth.php';
