<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Landing Page (Single Page)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('pages.home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Contact Page
|--------------------------------------------------------------------------
*/
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
