<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatorioRelacao extends Model
{
    use HasFactory;

    protected $fillable = ['perfil_id', 'relatorio_id'];

    protected $table = 'perfil_relatorio';

}
