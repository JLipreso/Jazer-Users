<?php

use Illuminate\Support\Facades\Route;
use Jazer\Users\Http\Controllers\SignIn\EmailPassword;
use Jazer\Users\Http\Controllers\SignOut\SignOut;
use Jazer\Users\Http\Controllers\Fetch\Paginate;
use Jazer\Users\Http\Controllers\Fetch\Single;
use Jazer\Users\Http\Controllers\Delete\Delete;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('signinEmailPass', [EmailPassword::class, 'signin']);
        Route::get('signout/{token}', [SignOut::class, 'signout']);
        Route::get('paginate', [Paginate::class, 'paginate']);
        Route::get('single/{people_refid}', [Single::class, 'single']);
        Route::get('delete/{people_refid}', [Delete::class, 'delete']);
    });
});

