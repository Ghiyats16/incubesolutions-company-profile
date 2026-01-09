<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ApiServiceController;

/* ===== USER PAGES ===== */
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

/* ===== CONTACT FORM ===== */
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

/* ===== AUTHENTICATION ===== */
Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

/* ===== ADMIN ===== */
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
    
    Route::resource('services', ServiceController::class);
    Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class);
    Route::get('/activity-logs', [App\Http\Controllers\Admin\ActivityLogController::class, 'index'])->name('activity-logs.index');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/services-from-api', [ApiServiceController::class, 'index'])
        ->name('admin.services.api');
});

