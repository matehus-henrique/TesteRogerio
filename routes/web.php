<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RelatorioController;
use Barryvdh\DomPDF\Facade\Pdf;




Route::get('/perfis', [PerfilController::class, 'index']);
Route::get('/perfis/create', [PerfilController::class, 'create'])->name('perfis.create');
Route::post('/perfis', [PerfilController::class, 'store']);
Route::get('/perfis/{perfil}', [PerfilController::class, 'show']);
Route::get('/perfis/{perfil}/edit', [PerfilController::class, 'edit'])->name('perfis.edit');
Route::put('/perfis/{perfil}', [PerfilController::class, 'update'])->name('perfis.update');
Route::delete('/perfis/{perfil}', [PerfilController::class, 'destroy'])->name('perfis.destroy');
Route::get('/perfis/{perfil}', [PerfilController::class, 'show'])->name('perfis.show');




Route::get('/relatorios', [RelatorioController::class, 'index']);
Route::get('/relatorios/create', [RelatorioController::class, 'create'])->name('relatorios.create');
Route::post('/relatorios', [RelatorioController::class, 'store'])->name('relatorios.store');
Route::get('/relatorios/{relatorio}', [RelatorioController::class, 'show']);
Route::get('/relatorios/{relatorio}/edit', [RelatorioController::class, 'edit']);
Route::put('/relatorios/{relatorio}', [RelatorioController::class, 'update']);
Route::delete('/relatorios/{relatorio}', [RelatorioController::class, 'destroy']);
Route::get('/pdf/{id}', [RelatorioController::class, 'pdf']);
Route::get('/', function () {
    $pdf = Pdf::loadView('welcome');
    return $pdf->stream('invoice.pdf');
});