<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});


Route::resource('portfolios', PortfolioController::class);

Route::get('/lore', function () {
    return view('lore');
})->name('lore');

