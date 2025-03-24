<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
// Servizi
Route::get('/servizi', [PublicController::class, 'service'])->name('pippo');
// Contatti
Route::get('/contattaci', [PublicController::class, 'contact'])->name('contatti');
Route::post('/contattaci/submit', [PublicController::class, 'contact'])->name('contatti.mail');
