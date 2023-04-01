<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/dove-siamo', [PageController::class, 'dovesiamo'])->name('dovesiamo');

Route::get('/struttura', [PageController::class, 'struttura'])->name('struttura');

Route::get('/elenco-corsi', [PageController::class, 'corsi'])->name('corsi');

Route::get('/dettaglio-corso/{id}', [PageController::class, 'dettaglicorso'])->name('dettaglicorso');

Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');