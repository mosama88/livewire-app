<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/dashboard/')->name('dashboard.')->group(function(){
Route::middleware(['admin'])->group(function () {
// index
Route::view('index', 'dashboard.index')->name('index');
});

//Login
Route::view('login', 'dashboard.auth.login')->middleware('guest:admin')->name('login');

});