@extends('adminlte::page')

@section('title', 'Cadastro de Fornecedores')

@section('content_header')
<h1>Cadastro de Fornecedores</h1>
@stop

@section('content')

<div class="card">
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
                    <h2 class="panel-title">Listar Fornecedores</h2>
                </header>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                <a href="/funcionarios/new" class="btn btn-success btn-sm" title="Novo"><i
                                        class="fa fa-plus"></i></a>&nbsp;
                                <a href="/funcionarios/ibans" class="btn btn-info btn-sm" title="Contas Bancárias"><i
                                        class="fa fa-file-excel-o"></i></a>&nbsp;
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div>
                        <div class="col-md-12">
                            <table id="list" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>TIPO/PIX</th>
                                        <th>CPF</th>
                                        <th>Empresa</th>
                                        <th>Cargo</th>
                                        <th>Admissão<br>Demissão</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="actions-hover actions-fade">
                                            <a href="#" title="Visualizar"><i
                                                    class="fa fa-eye fa-1x"></i></a>&nbsp;
                                            <a href="#" title="Editar"><i
                                                    class="fa fa-pencil fa-1x"></i></a>&nbsp;

                                            <a href="#" title="Documentos"><i
                                                    class="fa fa-briefcase fa-1x"></i></a>&nbsp;
                                            <a href="#" title="Usuário"><i
                                                    class="fa fa-lock fa-1x"></i></a>&nbsp;
                                            <a href="#" title="Situação"><i
                                                    class="fa fa-power-off fa-1x" aria-hidden="true"></i></a>&nbsp;
                                        </td>
                                    </tr>
                                   </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Olá!');
</script>

<script>
$(function() {
    $("#list").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>

@stop