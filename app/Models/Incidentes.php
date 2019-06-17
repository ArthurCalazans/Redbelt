<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incidentes extends Model
{
    protected $table = 'incidentes';
    protected $fillable = [
        'titulo',
        'descricao',
        'criticidade',
        'status',
    ];
}
