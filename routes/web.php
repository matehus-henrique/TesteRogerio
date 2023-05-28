<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RelatorioController;



Route::get('/perfis', [PerfilController::class, 'index']);
Route::get('/perfis/create', [PerfilController::class, 'create']);
Route::post('/perfis', [PerfilController::class, 'store']);
Route::get('/perfis/{perfil}', [PerfilController::class, 'show']);
Route::get('/perfis/{perfil}/edit', [PerfilController::class, 'edit']);
Route::put('/perfis/{perfil}', [PerfilController::class, 'update']);
Route::delete('/perfis/{perfil}', [PerfilController::class, 'destroy']);
Route::get('relatorios', [RelatorioController::class, 'index']);
Route::get('relatorios/create', [RelatorioController::class, 'create']);
Route::post('relatorios', [RelatorioController::class, 'store'])->name('relatorios.store');

Route::get('relatorios/create/{perfilId}', [RelatorioController::class, 'create'])->name('relatorios.create');
Route::get('relatorios/create/{perfilId}', [RelatorioController::class, 'create'])->name('relatorios.create');





Route::get('/', function () {
    return view('welcome');
});