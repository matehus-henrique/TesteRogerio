<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;

Route::resource('perfis', PerfilController::class);

Route::get('/', function () {
    return view('welcome');
});
