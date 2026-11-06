<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CharactersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Frontend login e logout
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
// Frontend login e logout


Route::get('/characters', [CharactersController::class, 'index']);