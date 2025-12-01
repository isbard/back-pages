<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('/', [TeamController::class, 'list'])->name('home');
Route::get('/teams', [TeamController::class, 'list'])->name('teams');
Route::get('/teams/{teamId}', [TeamController::class, 'getTeam'])->name('team');
Route::get('/players', [PlayerController::class, 'list'])->name('players');
Route::get('/players/{playerId}', [PlayerController::class, 'getPlayer'])->name('player');
