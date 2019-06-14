<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoIncidentes extends Model
{
    protected $table = 'tipo_incidentes';
    protected $fillable = [
        'nome',
    ];
}
