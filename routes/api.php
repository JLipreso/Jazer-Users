<?php

use Illuminate\Support\Facades\Route;
use Jazer\Users\Http\Controllers\SignIn\EmailPassword;
use Jazer\Users\Http\Controllers\SignOut\SignOut;


Route::group(['prefix' => 'users'], function () {
    Route::get('signinEmailPass', [EmailPassword::class, 'signin']);
    Route::get('signout/{token}', [SignOut::class, 'signout']);
});

