<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teams', [TeamController::class, 'index'])->name('teams');
Route::get('/teams/create', [TeamController::class, 'create']);
Route::post('/teams', [TeamController::class, 'store']);
Route::get('/teams/{id}', [TeamController::class, 'edit']);
Route::get('/team/{id}', [TeamController::class, 'show']);
Route::put('/teams/{id}', [TeamController::class, 'update']);
Route::delete('/teams/{id}', [TeamController::class, 'delete']);


Route::get('/players', [PlayerController::class, 'index'])->name('players');
Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players', [PlayerController::class, 'store']);
Route::get('/players/{id}', [PlayerController::class, 'edit']);
Route::get('/player/{id}', [PlayerController::class, 'show']);
Route::put('/players/{id}', [PlayerController::class, 'update']);
Route::delete('/players/{id}', [PlayerController::class, 'delete']);


Route::get('/teams/{id}/players', [TeamController::class, 'teamPlayers']);
