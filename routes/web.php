<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;


Route::get('perfis', [PerfilController::class, 'index']);
Route::get('perfis/create', [PerfilController::class, 'create']);
Route::post('perfis', [PerfilController::class, 'store'])->name('perfis.store');
Route::get('perfis/{perfil}', [PerfilController::class, 'show'])->name('perfis.show');
Route::get('perfis/{perfil}/edit', [PerfilController::class, 'edit'])->name('perfis.edit');
Route::put('perfis/{perfil}', [PerfilController::class, 'update'])->name('perfis.update');
Route::delete('perfis/{perfil}', [PerfilController::class, 'destroy'])->name('perfis.destroy');

Route::get('/', function () {
    return view('welcome');
});