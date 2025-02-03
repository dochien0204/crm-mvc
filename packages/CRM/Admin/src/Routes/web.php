<?php

use Illuminate\Support\Facades\Route;
use CRM\Admin\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('admin.admin.index');
});
