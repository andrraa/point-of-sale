<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('masuk', 'index')->name('login');
    Route::post('masuk', 'login');
});