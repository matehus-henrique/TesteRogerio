<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao'];

    public function relatorios()
    {
        return $this->belongsToMany(Relatorio::class, 'perfil_relatorio');
    }
}
