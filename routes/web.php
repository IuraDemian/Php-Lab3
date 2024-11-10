<?php

use App\Http\Controllers\TournamentController;

Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments.index');
Route::get('/tournaments/filter', [TournamentController::class, 'filter'])->name('tournaments.filter');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');
Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
Route::put('/tournaments/{tournament}', [TournamentController::class, 'update'])->name('tournaments.update');


Route::get('/', function ()
{
    return redirect()->route('tournaments.index');
});
