<?php

use Illuminate\Support\Facades\Route;
use CRM\Admin\Http\Controllers\TestController;

Route::group(['prefix' => 'api/admin'], function() {
    Route::controller(TestController::class)->prefix('test')->group(function () {
        Route::get('', 'test');
    });
});