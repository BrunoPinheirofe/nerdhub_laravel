<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LtdController;
use App\Http\Controllers\PodPinkController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ltd', [LtdController::class, 'index'])->name('ltd');
Route::get('/podpink', [PodPinkController::class, 'index'])->name('podpink');

