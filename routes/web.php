<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('clients', ClientController::class);
Route::resource('agencies', AgencyController::class);
