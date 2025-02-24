<?php

use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('items-list');
});

Route::get('/item-list', [ItemsController::class, 'index']);
