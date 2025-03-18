<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserRegController; // Ensure this line is present
use App\Http\Middleware\PreventBackHistory;

// Redirect the root URL to the Students page
Route::get('/', function () {
    return redirect()->route('students.index');
});

// Routes that require authentication and prevent back history
Route::middleware(['auth', PreventBackHistory::class])->group(function () {
    Route::get('/students', [StudentsController::class, 'index']);
    Route::resource('students', StudentsController::class);

    // Logout route
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

// Define routes for user registration
Route::middleware(['guest', PreventBackHistory::class])->group(function () {
    Route::get('register', [UserRegController::class, 'showRegistrationForm'])->name('register.form');
    Route::post('register', [UserRegController::class, 'register'])->name('register');

    // Login routes
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});