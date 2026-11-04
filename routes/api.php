<?php

use App\Http\Controllers\CharactersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/characters', [CharactersController::class, 'index']);