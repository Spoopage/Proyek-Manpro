<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/donation', [DonationController::class, 'showDonationPage']);
