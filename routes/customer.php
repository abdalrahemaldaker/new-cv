<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
        Route::get('/signup', [AuthController::class, 'getSignupForm'])->name('customer.register');
        Route::post('/doSignup', [AuthController::class, 'doSignup'])->name('customer.signup');
        Route::get('/login', [AuthController::class, 'getLoginForm'])->name('customer.login');
        Route::post('/doLogin', [AuthController::class, 'doLogin'])->name('customer.doLogin');
        Route::get('/temp', [CustomerController::class, 'abdtemp'])->name('customer.dashbourd');

});
