<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::resource('portfolios', PortfolioController::class);

Route::get('/lore', function () {
    return view('lore');
})->name('lore');

