@extends('layouts.dashboard')

@section('title', 'Lista de Pagos')

@section('content')

<style>
    .btn-estado {
        font-size: 12px;
        /* Ajusta el tamaño de la fuente */
        padding: 2px 8px;
        /* Ajusta el padding para reducir el tamaño del botón */
        cursor: none;
    }
</style>

    <div class="container">
        <table id="example1" class="table table-hover ">
            <thead>
                <tr class="text-center">
                    <th scope="col">N°</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fecha de pago</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php $contador = 1; ?>
                @foreach ($pagos as $pago)
                        @if(($pago->event->consultorio->especialidad == Auth::user()->secretaria->area_responsable))
                        <tr>
                            <td>{{ $contador++ }}</td>
                            <td>{{ $pago->event->doctor->user->name}}</td>
                            <td>{{ $pago->tipo}}</td>
                            <td>{{ $pago->fecha_pago}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button"
                                        class="btn btn-estado @if ($pago->estado == 'Pagado') btn-success @elseif($pago->estado == 'Pendiente') btn-primary @endif">
                                        {{ $pago->estado }}
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{route('admin.pagos.edit',$pago->id)}}" class="btn btn-warning @if ($pago->estado == 'Pagado') disabled @endif"><i class="fa-solid fa-clipboard-check"></i> Validar</a>
                                </div>
                            </td>
                        </tr>
                        @endif
                @endforeach
            </tbody>
        </table>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "pageLength": 5,
                    "language": {
                        "emptyTable": "No hay información",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ de Pagos",
                        "infoEmpty": "Mostrando 0 a 0 de 0 Pagos",
                        "infoFiltered": "(Filtrado de _MAX_ total de Pagos)",
                        "lengthMenu": "Mostrar _MENU_ Pagos",
                        "infoPostFix": "",
                        "thousands": ",",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscador:",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }
                    },
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": false,
                    buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'Copiar',
                            extend: 'copy',
                        }, {
                            extend: 'pdf'
                        }, {
                            extend: 'csv'
                        }, {
                            extend: 'excel'
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }]
                    }, {
                        extend: 'colvis',
                        text: 'Visor de columnas',
                        collectionLayout: 'fixed three-column'
                    }],
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script>
    </div>

@endsection
