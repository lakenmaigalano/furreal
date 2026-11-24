<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
// Public pages
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');

// Guest-only pages
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Authenticated pages
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/pets/{pet}/adopt', [AdoptionController::class, 'store'])
        ->name('adoptions.store');
});

// Admin pages
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/pets', PetController::class)
        ->except(['index', 'show'])
        ->names('admin.pets');

    Route::resource('admin/shelters', ShelterController::class)
        ->names('admin.shelters');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->name('admin.dashboard');    
});