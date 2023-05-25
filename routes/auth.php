<?php

use App\Http\Controllers\Auth\TokenController;
use Illuminate\Support\Facades\Route;

Route::post('/token', TokenController::class)
    ->middleware('guest')
    ->name('token');
