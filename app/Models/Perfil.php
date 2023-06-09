<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sobrenome', 'dbo', 'genero'];

    public function perfis()
    {
        return $this->belongsToMany(Perfil::class, 'perfil_relatorio');
    }
}
