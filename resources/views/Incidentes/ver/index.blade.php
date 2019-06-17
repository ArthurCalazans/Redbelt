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
@endpush
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="header center orange-text">Cadastro de Incidentes</h1>
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
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Um título</td>
                            <td>Criticidade</td>
                            <td>Tipo</td>
                            <td>Status</td>
                            <td>
                                <button type="button" id="ver" value="id"
                                    class="btn-floating btn-large waves-effect waves-light blue"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <a class="btn-floating btn-large waves-effect waves-light yellow darken-3"
                                    href="editar/id"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <button type="button" id="excluir" value="id"
                                    class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection