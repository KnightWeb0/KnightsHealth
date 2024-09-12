<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/doctor', [DoctorController::class, 'index']);

