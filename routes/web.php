<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LtdController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/ltd', [LtdController::class, 'index']);
