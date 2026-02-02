<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;
use App\Http\Controllers\SobreNos;
use App\Http\Controllers\ContatoController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('site.principal');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNos::class, 'index'])->name('site.sobre-nos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'store'])->name('site.contato');