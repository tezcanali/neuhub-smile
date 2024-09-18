<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\BeforeAfterController;

Route::get('deneme', function () {
    return view('welcome');
});

Route::get('/blog/{slug}', [BlogController::class, 'show']);
Route::get('/blog-category/{slug}', [BlogController::class, 'category']);
Route::get('/doctors/{slug}', [DoctorController::class, 'show']);
Route::prefix('before-after')->group(function () {
    Route::get('/category/{slug}', [BeforeAfterController::class, 'categoryIndex']);
    Route::get('/{slug}', [BeforeAfterController::class, 'show']);
});
Route::get('/sitemap', [\App\Http\Controllers\SitemapController::class, 'index']);
