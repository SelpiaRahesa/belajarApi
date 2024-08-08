<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\AktorController;
use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// route / endpoint Kategori
// Route::get('kategori', [KategoriController::class, 'index']);
// Route::post('kategori', [KategoriController::class, 'store']);
// Route::get('kategori/{id}', [KategoriController::class, 'show']);
// Route::put('kategori/{id}', [KategoriController::class, 'update']);
// Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);
// Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
Route::resource('kategori', KategoriController::class);
Route::resource('genre', GenreController::class);
Route::resource('aktor', AktorController::class);
Route::resource('film', FilmController::class);

// });
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
