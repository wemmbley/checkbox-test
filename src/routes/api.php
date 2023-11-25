<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('author')->group(function() {
    Route::post('/', [\App\Http\Controllers\AuthorController::class, 'create']);
    Route::get('/', [\App\Http\Controllers\AuthorController::class, 'show']);
});

Route::prefix('book')->group(function() {
    Route::post('/', [\App\Http\Controllers\BookController::class, 'create']);
    Route::get('/', [\App\Http\Controllers\BookController::class, 'show']);
    Route::put('/edit', [\App\Http\Controllers\BookController::class, 'edit']);
    Route::get('/{id}', [\App\Http\Controllers\BookController::class, 'single']);
    Route::get('/search/{author}', [\App\Http\Controllers\BookController::class, 'search']);
});
