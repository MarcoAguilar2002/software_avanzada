@extends('layouts.dashboard')

@section('ruta', 'Reservas')
@section('title', 'Ver reservas')

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
    <hr>

    <div class="container">
        <table id="example1" class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Fecha de reserva</th>
                    <th scope="col">Hora de Reserva </th>
                    <th scope="col">Estado</th>
                    <th scope="col">Pago</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">

                <?php $contador = 1; ?>
                @foreach ($eventos as $evento)
                    @if ($evento->user_id == Auth::user()->id)
                        <tr>
                            <td>{{ $contador++ }}</td>
                            <td>{{ $evento->doctor->user->name }}</td>
                            <td>{{ $evento->doctor->especialidad . '-' . $evento->consultorio->ubicacion }}</td>
                            <td>{{ \Carbon\Carbon::parse($evento->start)->format('Y-m-d') }}</td>
                            <td>{{ \Carbon\Carbon::parse($evento->end)->format('H:i:s') }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button"
                                        class="btn btn-estado @if ($evento->estado == 'En Curso') btn-success @elseif($evento->estado == 'Cancelada') btn-danger @elseif($evento->estado == 'Finalizada') btn-success @endif">
                                        {{ $evento->estado }}
                                    </button>
                                </div>
                            </td>

                            <td>
                                <div class="btn-group" role="group">
                                    @foreach ($pagos as $pago)
                                        @if ($evento->id == $pago->event_id)
                                            <button type="button"
                                                class="btn btn-estado @if ($pago->estado == 'Pagado') btn-success @elseif($pago->estado == 'Pendiente') btn-primary @endif">
                                                {{ $pago->estado }}
                                            </button>
                                        @endif
                                    @endforeach
                                </div>
                            </td>

                            <td>
                                <div class="btn-group" role="group">
                                    <form action="{{ route('admin.reservas.destroy', $evento->id) }}"
                                        id="formulario{{ $evento->id }}" onclick="preguntar{{ $evento->id }}(event)"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="background-color: red;"
                                            @if ($evento->estado == 'Cancelada' || $evento->estado == 'Finalizada') disabled @endif>
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                    </form>

                                    <script>
                                        function preguntar{{ $evento->id }}(event) {
                                            event.preventDefault();
                                            Swal.fire({
                                                title: "¿Seguro que quieres cancelar tu reserva?",
                                                text: "De cancelar tu reserva, otro paciente podrá tomar tu turno",
                                                icon: "question",
                                                showCancelButton: true,
                                                confirmButtonColor: "#d33",
                                                cancelButtonColor: "#3085d6",
                                                confirmButtonText: "Sí, cancelar"
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    var form = $('#formulario{{ $evento->id }}');
                                                    form.submit();
                                                }
                                            });
                                        }
                                    </script>
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
                    "pageLength": 8,
                    "language": {
                        "emptyTable": "No hay información",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ de Citas",
                        "infoEmpty": "Mostrando 0 a 0 de 0 Citas",
                        "infoFiltered": "(Filtrado de _MAX_ total de Citas)",
                        "lengthMenu": "Mostrar _MENU_ Citas",
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
