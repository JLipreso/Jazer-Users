<?php

use Illuminate\Support\Facades\Route;
use Jazer\Users\Http\Controllers\SignIn\EmailPassword;


Route::group(['prefix' => 'users'], function () {
    Route::get('signin', [EmailPassword::class, 'signin']);
});

