<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Guest Route
Route::group(['middleware'=>'guest'],function(){
    Route::get('/',function() {
        return view('welcome');
    });

    Route::post('/post-login',[AuthController::class,'login']);
})->middleware('guest');

// admin Route
Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

    Route::get('/admin-logout',[AuthController::class,'admin_logout'])->name('admin.logout');
})->middleware('admin');

// User Route
Route::group(['middleware'=>'web'],function(){
    Route::get('/user',[UserController::class,'index'])->name('user.dashboard');
    
    Route::get('/user-logout',[AuthController::class,'user_logout'])->name('user.logout');
})->middleware('web');