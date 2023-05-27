<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sobrenome', 'dbo', 'genero'];
    public static function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'dbo' => 'required|date',
            'genero' => 'required|string|max:255',
        ];
    }
}
