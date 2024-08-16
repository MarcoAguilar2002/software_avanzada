@extends('layouts.dashboard')

@section('ruta', 'Inicio')

@section('content')
    <style>
        .btn-group-toggle .btn {
            margin-bottom: 5px;
        }

        .horarios-container {
            display: flex;
            flex-wrap: wrap;
        }

        .horarios-container label {
            flex: 1 0 48%;
            /* Ajusta esto según tus necesidades */
            margin: 5px;
        }
    </style>

    <style>
        .estado-curso {
            color: blue;
        }

        .estado-cancelada {
            color: red;
        }

        .estado-finalizada {
            color: green;
        }

        .estado-punto {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .estado-curso .estado-punto {
            background-color: blue;
        }

        .estado-cancelada .estado-punto {
            background-color: red;
        }

        .estado-finalizada .estado-punto {
            background-color: green;
        }
    </style>


    <div class="row container">
        <h5><b>Bienvenido: </b>{{ Auth::user()->name }} / <b>Rol:</b> {{ Auth::user()->roles->pluck('name')->first() }}</h5>
    </div>
    <hr>

    <div class="row">
        @can('admin.usuarios.index')
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $total_usuarios }}</h3>
                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-file-person"></i>
                    </div>
                    <a href="{{ route('admin.usuarios.index') }}" class="small-box-footer">Más información <i
                            class="fas bi bi-file-person"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.secretarias.index')
            <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{ $total_secretarias }}</h3>
                        <p>Secretarias</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas fa-solid fa-user-nurse"></i>
                    </div>
                    <a href="{{ route('admin.secretarias.index') }}" class="small-box-footer">Más información <i
                            class="fas fa-solid fa-user-nurse"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.pacientes.index')
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $total_pacientes }}</h3>
                        <p>Pacientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas fa-solid fa-hospital-user"></i>
                    </div>
                    <a href="{{ route('admin.pacientes.index') }}" class="small-box-footer">Más información <i
                            class="fas fa-solid fa-hospital-user"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.consultorios.index')
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $total_consultorios }}</h3>
                        <p>Consultorios</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas fa-solid fa-house-medical"></i>
                    </div>
                    <a href="{{ route('admin.consultorios.index') }}" class="small-box-footer">Más información <i
                            class="fas fa-solid fa-house-medical"></i></a>
                </div>
            </div>
        @endcan


        @can('admin.doctores.index')
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $total_doctores }}</h3>
                        <p>Doctores</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas fa-solid fa-user-doctor"></i>
                    </div>
                    <a href="{{ route('admin.doctores.index') }}" class="small-box-footer">Más información <i
                            class="fas fa-solid fa-user-doctor"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.horarios.index')
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $total_horarios }}</h3>
                        <p>Horarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-calendar-event"></i>
                    </div>
                    <a href="{{ route('admin.horarios.index') }}" class="small-box-footer">Más información <i
                            class="fas bi bi-calendar-event"></i></a>
                </div>
            </div>
        @endcan

    </div>
    <!--Paciente-->
    @can('admin.eventos.store')
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card card-outline card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Calendario de reserva de citas médicas</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <div class="row">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Reservar cita médica
                            </button>
                            <a href="{{ route('admin.reservas') }}" class="btn btn-success ml-3"> <i
                                    class="bi bi-calendar-event-fill"></i> Ver Reservas</a>
                        </div>

                        <!-- Modal -->
                        <form action="{{ route('admin.eventos.store') }}" method="POST" onsubmit="prepararDatos()">
                            @csrf
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Registro de cita médica</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="">Consultorio</label>
                                                        <select name="consultorio_id" id="consultorio_select"
                                                            class="form-control">
                                                            <option value="">Seleciona un consultorio..</option>
                                                            @foreach ($consultorios as $consultorio)
                                                                <option value="{{ $consultorio->id }}">
                                                                    {{ $consultorio->especialidad . '-' . $consultorio->ubicacion }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                        @error('consultorio_id')
                                                            <small style="color:red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="">Doctor</label>
                                                        <select name="doctor_id" id="doctor_select" class="form-control">
                                                            <!-- Aquí se cargarán los doctores -->
                                                        </select>


                                                        @error('doctor_id')
                                                            <small style="color:red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fecha_reserva">Fecha de reserva</label>
                                                        <input type="date" id="fecha_reserva" class="form-control"
                                                            min="{{ date('Y-m-d') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Seleccione una hora</label>
                                                        <div class="btn-group btn-group-toggle horarios-container"
                                                            data-toggle="buttons" id="horarios-container">
                                                            <!-- Los horarios se cargarán aquí mediante JavaScript -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="color" id="color">
                                                <input type="hidden" name="start" id="start">
                                                <input type="hidden" name="end" id="end">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'es',
                events: [
                    @foreach ($eventos as $evento)

                        @if ($evento->user_id == Auth::user()->id)
                            {

                                title: '{{ $evento->title }}',
                                start: '{{ \Carbon\Carbon::parse($evento->start)->format('Y-m-d') }}',
                                end: '{{ \Carbon\Carbon::parse($evento->end)->format('Y-m-d') }}',
                                color: '{{ $evento->color }}'
                            }
                        @endif
                    @endforeach
                ]
            });
            calendar.render();
        });
    </script>

    <script>
        // Función para generar un color hexadecimal al azar
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        $('#consultorio_select').on('change', function() {
            var consultorio_id = $(this).val();
            console.log('Consultorio seleccionado:', consultorio_id);
            if (consultorio_id) {
                $.ajax({
                    url: "{{ url('/admin/horarios/doctores') }}" + '/' + consultorio_id,
                    type: 'GET',
                    success: function(data) {
                        console.log('Doctores recibidos:', data);
                        $('#doctor_select').empty(); // Limpiar las opciones existentes
                        $.each(data, function(index, doctor) {
                            $('#doctor_select').append('<option value="' + doctor.id + '">' +
                                doctor.user.name + '</option>');
                        });
                    },
                    error: function() {
                        console.error('Error al obtener los doctores');
                    }
                });
            } else {
                $('#doctor_select').empty();
            }
        });

        // Cargar horarios según la fecha seleccionada y el doctor
        $('#fecha_reserva, #doctor_select').on('change', function() {
            var consultorio_id = $('#consultorio_select').val();
            var doctor_id = $('#doctor_select').val();
            var fecha = $('#fecha_reserva').val();

            console.log('Fecha seleccionada:', fecha);
            console.log('Doctor seleccionado:', doctor_id);

            if (consultorio_id && doctor_id && fecha) {
                $.ajax({
                    url: "{{ url('/admin/horarios') }}" + '/' + consultorio_id + '/' + doctor_id + '/' +
                        fecha,
                    type: 'GET',
                    success: function(data) {
                        console.log('Horarios recibidos:', data);
                        $('#horarios-container').empty();

                        for (var i = 0; i < data.length - 1; i++) {
                            var horarioInicio = data[i].hora;
                            var horarioFin = data[i + 1].hora;
                            var rangoHorario = horarioInicio + '-' + horarioFin;
                            var color = getRandomColor(); // Obtener un color al azar

                            $('#horarios-container').append(
                                '<label class="btn btn-outline-primary">' +
                                '<input type="radio" name="hora" value="' + rangoHorario +
                                '" data-color="' + color + '">' +
                                rangoHorario +
                                '</label>'
                            );
                        }

                        // Incluir el último horario
                        var ultimoHorarioInicio = data[data.length - 1].hora;
                        var ultimoHorarioFin = moment(ultimoHorarioInicio, 'HH:mm').add(20, 'minutes')
                            .format('HH:mm');
                        var ultimoRangoHorario = ultimoHorarioInicio + '-' + ultimoHorarioFin;
                        var ultimoColor = getRandomColor(); // Obtener un color al azar

                        $('#horarios-container').append(
                            '<label class="btn btn-outline-primary">' +
                            '<input type="radio" name="hora" value="' + ultimoRangoHorario +
                            '" data-color="' + ultimoColor + '">' +
                            ultimoRangoHorario +
                            '</label>'
                        );
                    },
                    error: function() {
                        console.error('Error al obtener los horarios');
                    }
                });
            } else {
                $('#horarios-container').empty();
            }
        });

        // Preparar los datos antes de enviar el formulario
        function prepararDatos() {
            var horaSeleccionada = $('input[name="hora"]:checked');
            if (horaSeleccionada.length) {
                $('#color').val(horaSeleccionada.data('color')); // Asignar el color al campo oculto
                $('#start').val($('#fecha_reserva').val() + 'T' + horaSeleccionada.val().split('-')[0] + ':00');
                $('#end').val($('#fecha_reserva').val() + 'T' + horaSeleccionada.val().split('-')[1] + ':00');
            }
        }

        // Asignar la función de preparación de datos al evento submit del formulario
        $('form').on('submit', prepararDatos);
    </script>




    <!--Doctor-->
    @can('admin.doctor.cita')
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header row">
                    <div class="col-md-6 d-flex align-items-center">
                        <h3 class="card-title mb-0">Calendario de atención</h3>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                    </div>
                </div>

                <div class="card-body ">
                    <div class="col-md-12">
                        <table id="example2" class="table table-hover ">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">N°</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Fecha y hora de Reserva</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <?php $contador = 1; ?>
                                @foreach ($eventos as $evento)
                                    @if (Auth::user()->doctor->id == $evento->doctor_id)
                                        <tr class="text-center">
                                            <td>{{ $contador++ }}</td>
                                            <td>{{ $evento->user->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($evento->start)->format('Y-m-d') . ' ' . \Carbon\Carbon::parse($evento->end)->format('H:i:s') }}
                                            </td>
                                            <td
                                                class="@if ($evento->estado == 'En Curso') estado-curso @elseif($evento->estado == 'Cancelada') estado-cancelada @elseif($evento->estado == 'Finalizada') estado-finalizada @endif">
                                                <span class="estado-punto"></span>{{ $evento->estado }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(function() {
                            $("#example2").DataTable({
                                "pageLength": 4,
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
                            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
            </div>
        </div>
    @endcan

@endsection
