<?php

use App\Http\Controllers\ItemsController; // Change to ItemsController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Update the route to use ItemsController
Route::get('/ItemList', [ItemsController::class, 'index']);