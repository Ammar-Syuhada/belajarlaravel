<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});
Route::get('/login',function(){
    return view('akun.login');
});
