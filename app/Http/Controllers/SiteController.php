<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidentes;

class SiteController extends Controller
{
    public function abrir_pagina_ver()
    {
        $title = "Vizualizar";
        return view('Incidentes.ver.index', compact('title'));
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
