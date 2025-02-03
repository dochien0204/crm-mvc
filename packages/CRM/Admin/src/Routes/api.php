<?php

use CRM\Admin\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use CRM\Admin\Http\Controllers\TestController;

Route::group(['prefix' => 'api/admin'], function() {
    Route::controller(TestController::class)->prefix('test')->group(function () {
        Route::get('', 'test');
    });

    Route::controller(AuthController::class)->prefix('auth')->group(function () {
        Route::post('register', 'register');
        Route::post('login', 'login');
    });
});