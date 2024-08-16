@extends('layouts.dashboard')


@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Detalles del Doctor</h4>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Datos
                                Registrados</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Información Personal</h5>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nombres">Nombres</label>
                                        <p>{{ $profile->nombres }}</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Apellidos">Apellidos</label>
                                        <p>{{ $profile->apellidos }}</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="dni">DNI</label>
                                        <p>{{ $profile->dni }}</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="dni">Celular</label>
                                        <p>{{ $profile->celular }}</p>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                        <p>{{ $profile->fecha_nacimiento }}</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="genero">Género</label>
                                        <p>{{ $profile->genero }}</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="genero">Estado Civil</label>
                                        <p>{{ $profile->estado_civil }}</p>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Información de Contacto</h5>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="direccion">Dirección:</label>
                                        <p>{{ $profile->direccion }}</p>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="region">Región</label>
                                        <p>{{ $profile->region }}</p>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="provincia">Provincia</label>
                                        <p>{{ $profile->provincia }}</p>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="distrito">Distrito</label>
                                        <p>{{ $profile->distrito }}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Información Formativa</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="direccion">Código Colegiado:</label>
                                        <p>{{ $doctor->codigo_colegiado }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="direccion">Especialidad:</label>
                                        <p>{{ $doctor->especialidad }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="direccion">Años de Experiencia:</label>
                                        <p>{{ $doctor->anos_experiencia }} años</p>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Información de la cuenta</h5>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="direccion">Correo:</label>
                                        <p>{{ $doctor->user->email }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection
