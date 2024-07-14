<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;

Route::get('deneme', function () {
    return view('welcome');
});

Route::get('/blog/{slug}', [BlogController::class, 'show']);
Route::get('/doctors/{slug}', [DoctorController::class, 'show']);
