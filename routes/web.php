<?php

use App\Http\Controllers\CharactersAdminController;
use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/characters', [CharactersAdminController::class, 'index'])->name('characters.index');
Route::get('/character/{character}', [CharactersAdminController::class, 'view'])->name('character.view');
