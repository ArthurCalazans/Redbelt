@extends('template')
@section('content')

@push("scripts")
<script type="text/javascript">

    $("form").submit(function (e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        console.log(dados);
        $.post("/editar", dados, function (data) {
            swal({
                title: data['mensagem'],
                icon: data['tipo'],
                dangerMode: true
            }).then(function () {
                location.href = "{{ URL::previous() }}";
            });
        }).fail(function (data) {
            swal({
                title: 'Erro',
                message: data.statusText,
                icon: 'error'
            })
        });
    });
</script>
@endpush
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="header center orange-text">{{$title}} Incidentes</h1>
    </div>
</div>
<div class="section no-pad-bot" id="index-formulario">
    <div class="container">
        <div class="row">
            <form>
                @csrf
                <input type="hidden" name="id_incidente" id="id_incidente" value="{{$incidentes[0]->id_incidente}}" required>

                <div class="row">
                    <div class="input-field col l12 s12">
                        <input type="text" name="titulo" id="titulo" class="validate" value="{{$incidentes[0]->titulo}}" required>
                        <label for="titulo">Título do Incidente</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l4 s12">
                        <select name="criticidade" id="criticidade" required>
                            <option value="" disabled selected>Escolha sua opção</option>
                            @if($incidentes[0]->criticidade === 1)
                                <option value="1" selected>Baixa</option>
                                <option value="2">Média</option>
                                <option value="3">Alta</option>
                            @elseif($incidentes[0]->criticidade === 2)
                                <option value="1" selected>Baixa</option>
                                <option value="2">Média</option>
                                <option value="3">Alta</option>
                            @elseif($incidentes[0]->criticidade === 3)
                                <option value="1" selected>Baixa</option>
                                <option value="2">Média</option>
                                <option value="3">Alta</option>
                            @endif
                        </select>
                        <label>Criticidade do Incidente</label>
                    </div>
                    <div class="input-field col l4 s12">
                        <select name="id_tipo_incidente" id="id_tipo_incidente" required>
                            <option value="" disabled selected>Escolha sua opção</option>
                            @foreach($tipos as $tipo)
                            <option value="{{$tipo->id_tipo_incidente}}" 
                                @if($incidentes[0]->id_tipo_incidente === $tipo->id_tipo_incidente)
                                selected
                                @endif
                            >{{$tipo->nome}}</option>
                            @endforeach
                        </select>
                        <label>Tipo de Incidente</label>
                    </div>
                    <div class="input-field col l4 s12">
                        @if($incidentes[0]->status === 1)
                        <div class="input-field col l6 s16">
                            <label>
                                <input name="status" type="radio" value="1" checked/>
                                <span>Abrir</span>
                            </label>
                        </div>
                        <div class="input-field col l6 s16">
                            <label>
                                <input name="status" type="radio" value="0"/>
                                <span>Fechado</span>
                            </label>
                        </div>
                        @else
                        <div class="input-field col l6 s16">
                            <label>
                                <input name="status" type="radio" value="1" />
                                <span>Abrir</span>
                            </label>
                        </div>
                        <div class="input-field col l6 s16">
                            <label>
                                <input name="status" type="radio"  value="0" checked/>
                                <span>Fechado</span>
                            </label>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l12 s12">
                        <textarea name="descricao" id="descricao" class="materialize-textarea">{{$incidentes[0]->descricao}}</textarea>
                        <label for="descricao">Descreva o Incidente</label>
                    </div>
                </div>
                <div class="row center">
                    <div class="input-field col l6 s12">
                        <a class="btn waves-effect waves-light red" href="{{ URL::previous() }}">
                            <i class="fa fa-chevron-left"></i>
                            Voltar
                        </a>
                    </div>
                    <div class="input-field col l6 s12">
                        <button class="btn waves-effect waves-light green" type="submit" name="action">Enviar
                            <i class="fa fa-share-square" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection