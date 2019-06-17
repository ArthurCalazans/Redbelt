<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidentes;
use App\Models\TipoIncidentes;

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
    {
        $title = "Cadastrar";
        $tipo = new TipoIncidentes();
        $tipos = $tipo->all();
        return view('Incidentes.cadastrar.index', compact('title', 'tipos'));
    }
    public function abrir_pagina_editar()
    { }

    public function cadastrar_incidente(Request $request)
    {
        $dados = $request->all();
        $incidente = new Incidentes();

        try {
            $incidente->create([
                'titulo' => $dados['titulo'],
                'descricao' => $dados['descricao'],
                'criticidade' => $dados['criticidade'],
                'id_tipo_incidente' => $dados['id_tipo_incidente']
            ]);
            return response()->json(['tipo' => 'success', 'mensagem' => 'Incidente cadastrado com sucesso']);
        } catch (\Exception $e) {
            $erro = $e->getMessage();
        }
        return response()->json(['tipo' => 'error', 'mensagem' => $erro]);
    }
    public function editar_incidente(Request $request)
    { }
    public function excluir_incidente(Request $request)
    { }
}
