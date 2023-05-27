<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'sobrenome', 'dbo', 'genero'];

    protected $rules = [
        'nome' => 'required',
        'sobrenome' => 'required',
        'dbo' => 'required|date',
        'genero' => 'required',
    ];
}
