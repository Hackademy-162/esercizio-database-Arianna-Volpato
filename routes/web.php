<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
// Servizi
Route::get('/servizi', [PublicController::class, 'service'])->name('pippo');
// Contatti
Route::get('/contattaci', [PublicController::class, 'contact'])->name('contatti');

// rotta parametrica
Route::get('/pagina.dettaglio/{id}', [PublicController::class, 'detail'])->name('pagina.dettaglio');
Route::post('/contattaci/submit',[PublicController::class,'contactMail'])->name('contatti.mail');