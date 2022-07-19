@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Dashboard')

@section('content_header')
    <div class="card-body">
        <h1>e-Click</h1>
    </div>
@section('content')

    <div class="card-body">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>EMPRESA</th>
                    <th>CATEGORIA</th>
                    <th>DESCRIÇÃO</th>
                    <th>OPÇÕES</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($cliques as $clique)
                    <tr>
                        <td>{{ $clique->id_empresa }}</td>
                        <td>{{ $clique->id_categoria }}</td>
                        <td>{{ $clique->descricao }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>EMPRESA</th>
                    <th>CATEGORIA</th>
                    <th>DESCRIÇÃO</th>
                    <th>OPÇÕES</th>

                </tr>
            </tfoot>
        </table>
    </div>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@section('js')
    <script>
        //  console.log('Hi!');
    </script>
    <script>
        $('#example tfoot th').each(function() {

            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Digite ' + title + '" />');
        });

        // DataTable
        var table = $('#example').DataTable({

            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            },

            initComplete: function() {
                // Apply the search
                this.api()
                    .columns()
                    .every(function() {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
            },
        });
    </script>
    <style>
        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }
    </style>

@stop
