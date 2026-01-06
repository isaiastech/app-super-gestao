<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('site.principal');
Route::get('/sobrenos', [App\Http\Controllers\SobreNos::class, 'index'])->name('site.sobrenos');
Route::get('/contato', [App\Http\Controllers\Contato::class, 'index'])->name('site.contato');