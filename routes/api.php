<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('signinEmailPassBasic', function () {});
        Route::get('signinEmailPassOTP', function () {});
        Route::get('signout', function () {});
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('signinEmailPass', [Jazer\Users\Http\Controllers\SignIn\EmailPassword::class, 'signin']);
        Route::get('signout/{token}', [Jazer\Users\Http\Controllers\SignOut\SignOut::class, 'signout']);
        Route::get('paginate', [Jazer\Users\Http\Controllers\Fetch\Paginate::class, 'paginate']);
        Route::get('single/{people_refid}', [Jazer\Users\Http\Controllers\Fetch\Single::class, 'single']);
        Route::get('delete/{people_refid}', [Jazer\Users\Http\Controllers\Delete\Delete::class, 'delete']);
        Route::get('registerBasic', [Jazer\Users\Http\Controllers\Register\Register::class, 'basic']);
    });
});

