<?php

use App\Http\Controllers\CampaignAdminController;
use App\Http\Controllers\CharactersAdminController;
use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// PERSONAGGI
Route::get('/characters', [CharactersAdminController::class, 'index'])->name('characters.index');
Route::get('/character/{character}', [CharactersAdminController::class, 'view'])->name('character.view');

// CAMPAGNE
Route::get('/campaigns', [CampaignAdminController::class, 'index'])->name('campaigns.index');
Route::get('/campaign/{campaign}', [CampaignAdminController::class, 'view'])->name('campaign.view');