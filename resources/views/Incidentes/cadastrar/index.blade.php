@extends('template')
@section('content')

@push("scripts")
<script type="text/javascript">
    $(document).ready(function () {
        $('.main').css('height', $(document).height() - 70 + 'px');
    });

    $("form").submit(function (e) {
        e.preventDefault();
        var dados = $(this).serializeArray();

        $.post("/cadastrar", dados, function (data) {
            swal({
                title: data['mensagem'],
                icon: data['tipo'],
                dangerMode: true
            }).then(function () {
                $("form")[0].reset();
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
                <div class="row">
                    <div class="input-field col l12 s12">
                        <input type="text" name="titulo" id="titulo" class="validate" required>
                        <label for="titulo">Título do Incidente</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l6 s12">
                        <select name="criticidade" id="criticidade" required>
                            <option value="" disabled selected>Escolha sua opção</option>
                            <option value="1">Baixa</option>
                            <option value="2">Média</option>
                            <option value="3">Alta</option>
                        </select>
                        <label>Criticidade do Incidente</label>
                    </div>
                    <div class="input-field col l6 s12">
                        <select name="id_tipo_incidente" id="id_tipo_incidente" required>
                            <option value="" disabled selected>Escolha sua opção</option>
                            @foreach($tipos as $tipo)
                            <option value="{{$tipo->id_tipo_incidente}}">{{$tipo->nome}}</option>
                            @endforeach
                        </select>
                        <label>Tipo de Incidente</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l12 s12">
                        <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
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