<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index'])->name('site.principal');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'index'])->name('site.sobre-nos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'store'])->name('site.contato');