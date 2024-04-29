<?php

use App\Http\Controllers\PlaceholderAPIController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PlaceholderAPIController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
