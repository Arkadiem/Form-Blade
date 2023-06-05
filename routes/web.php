<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/jugadorform', [JugadorController::class, 'index'])->name('jugadorform.index');
Route::post('/jugadorform', [JugadorController::class, 'store'])->name('jugadorform.store');
Route::get('/', [JugadorController::class, 'show'])->name('jugadores.show');
