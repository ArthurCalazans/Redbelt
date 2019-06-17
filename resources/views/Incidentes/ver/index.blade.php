@extends('template')
@section('content')

@push("scripts")
<script>
    $(document).ready(function () {
        $('table').DataTable({
            "responsive": true,
        });
        $('table').css('width', '100%');
        $('.dataTables_scrollHeadInner').css('width', '100%');
        $('th').css('width', 'width: 160px;');
    });

</script>
 <script type="text/javascript">
    $("button").click(function (e) {
        switch(e.currentTarget.id){
            case 'ver':
                mostrar_detalhes($(this).val())
                break;
            case 'excluir':
            swal({
                title: "Deseja excluir?",
                icon: 'warning',
                dangerMode: true,
                buttons: {
                cancel: 'Não',
                delete: 'Sim'
                }
            }).then(function (willDelete) {
                if (willDelete) {
                    excluir_incidente($(this).val())
                }
            });
                break;
        }
    });

    function mostrar_detalhes(detalhe){
        $('.modal-content p').remove();
        $('.modal-content').append('<p>'+detalhe+'</p>');
        $('.modal').modal();
    }
    function excluir_incidente(id){
        var dados = [];

        dados[0] = {name:"id_incidente", value: id};
        dados[1] = {name:"_token", value:$("input[name=_token]").val()};

        $.post("/excluir", dados, function (data) {
            swal({
                title: data['mensagem'],
                icon: data['tipo'],
                dangerMode: true
            }).then(function () {
                location.reload();
            });
        }).fail(function (data) {
            swal({
                title: 'Erro',
                message: data.statusText,
                icon: 'error'
            })
        });
    }
    
</script>
@endpush
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="header center orange-text">{{$title}} Incidentes</h1>
    </div>
</div>
<div class="section no-pad-bot" id="index-table">
    <div class="container">
        <div class="row">
            <div class="col s12" style="display:table; border-collapse: collapse; height: 400px">
                <table>
                    <thead>
                        <th class=" sorting_asc">Título</th>
                        <th>Criticidade</th>
                        <th>Tipo</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>
                        @foreach($incidentes as $incidente)
                        <tr>
                            <td>{{$incidente->titulo}}</td>

                            @switch($incidente->criticidade)
                                @case(1)
                                <td>Baixa</td>
                                @break;
                                @case(2)
                                <td>Média</td>
                                @break;
                                @case(3)
                                <td>Alta,</td>
                                @break;
                            @endswitch

                                <td>{{$incidente->nome}}</td>

                            @switch($incidente->status)
                                @case(1)
                                <td>Aberto</td>
                                @break;
                                @case(0)
                                <td>Fechado</td>
                                @break;
                            @endswitch

                            <td>                                
                                <button type="button" id="ver" data-target="modal1" value="{{$incidente->descricao}}"
                                    class="btn-floating btn-large waves-effect waves-light blue modal-trigger" title="VER DESCRIÇÃO">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="/editar/{{$incidente->id_incidente}}" title="EDITAR INCIDENTE">
                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <button type="button" id="excluir" value="{{$incidente->id_incidente}}"
                                    class="btn-floating btn-large waves-effect waves-light red" title="EXCLUIR INCIDENTE">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@csrf
@include('Incidentes.ver.modal')
@endsection