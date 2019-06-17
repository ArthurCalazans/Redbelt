<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidentes;

class SiteController extends Controller
{
    public function abrir_pagina_ver()
    {
        $title = "Vizualizar";
        $incidente = new Incidentes();
        $incidentes = $incidente->selectRaw('id_incidente, titulo, descricao, criticidade, status, nome')
        ->join('tipo_incidentes', 'tipo_incidentes.id_tipo_incidente', 'incidentes.id_tipo_incidente')->get();
        return view('Incidentes.ver.index', compact('title', 'incidentes'));
    }
    public function abrir_pagina_cadastrar()
    { }
    public function abrir_pagina_editar()
    { }

    public function cadastrar_incidente(Request $request)
    { }
    public function editar_incidente(Request $request)
    { }
    public function excluir_incidente(Request $request)
    { }
}
