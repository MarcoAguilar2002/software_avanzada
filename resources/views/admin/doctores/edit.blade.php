@extends('layouts.dashboard')


@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <h4 class="page-title">Editar Doctor</h4>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Datos
                                    Personales</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Datos de la
                                    cuenta</a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="#certificados" data-toggle="tab">Certificados</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <form action="{{ route('admin.doctores.update', $doctor->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Información Personal</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nombres">Nombres</label>
                                                <input type="text" name="nombres" id="nombres" class="form-control"
                                                    placeholder="Nombres" value="{{ $profile->nombres }}">
                                                @error('nombres')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Apellidos">Apellidos</label>
                                                <input type="text" name="apellidos" id="apellidos" class="form-control"
                                                    value="{{ $profile->apellidos }}" placeholder="Apellidos">
                                                @error('apellidos')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dni">DNI</label>
                                                <input type="text" placeholder="DNI" name="dni" id="dni"
                                                    class="form-control" value="{{ $profile->dni }}">
                                                @error('dni')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dni">Celular</label>
                                                <input type="text" name="celular" id="celular" class="form-control"
                                                    value="{{ $profile->celular }}" placeholder="Celular">
                                                @error('celular')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                                                    class="form-control" value="{{ $profile->fecha_nacimiento }}">
                                                @error('fecha_nacimiento')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="genero">Género</label>
                                                <select name="genero" id="genero" class="form-control">
                                                    <option value="Masculino"
                                                        {{ $profile->genero == 'Masculino' ? 'selected' : '' }}>Masculino
                                                    </option>
                                                    <option value="Femenino"
                                                        {{ $profile->genero == 'Femenino' ? 'selected' : '' }}>Femenino
                                                    </option>
                                                </select>
                                                @error('apellidos')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="estado_civil">Estado Civil</label>
                                                <select name="estado_civil" id="estado_civil" class="form-control">
                                                    <option value="Soltero"
                                                        {{ $profile->estado_civil == 'Soltero' ? 'selected' : '' }}>Soltero
                                                    </option>
                                                    <option value="Casado"
                                                        {{ $profile->estado_civil == 'Casado' ? 'selected' : '' }}>Casado
                                                    </option>
                                                </select>
                                                @error('estado_civil')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
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
                                                <input type="text" name="direccion" id="direccion"
                                                    class="form-control" value="{{ $profile->direccion }}"
                                                    placeholder="Dirección">
                                                @error('direccion')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="region">Región</label>
                                                <input type="text" name="region" id="region" class="form-control"
                                                    value="{{ $profile->region }}" placeholder="Región">
                                                @error('region')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="provincia">Provincia</label>
                                                <input type="text" name="provincia" id="provincia"
                                                    class="form-control" value="{{ $profile->provincia }}"
                                                    placeholder="Provincia">
                                                @error('provincia')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="distrito">Distrito</label>
                                                <input type="text" name="distrito" id="distrito"
                                                    class="form-control" value="{{ $profile->distrito }}"
                                                    placeholder="Distrito">
                                                @error('distrito')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Información Formativa</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="direccion">Código Colegiado:</label>
                                                <input type="text" name="codigo_colegiado" id="codigo_colegiado"
                                                    class="form-control" value="{{ $doctor->codigo_colegiado }}"
                                                    placeholder="Código Colegiado">
                                                @error('codigo_colegiado')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="region">Especialidad</label>
                                                <input type="text" name="especialidad" id="especialidad"
                                                    class="form-control" value="{{ $doctor->especialidad }}"
                                                    placeholder="Especialidad">
                                                @error('especialidad')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="provincia">Años de Experiencia:</label>
                                                <input type="text" name="anos_experiencia" id="anos_experiencia"
                                                    class="form-control" value="{{ $doctor->anos_experiencia }}"
                                                    placeholder="Años de Experiencia">
                                                @error('anos_experiencia')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="tab-pane" id="timeline">
                                <form action="{{ route('admin.doctores.updateUsuario', $doctor->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="provincia">Correo</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ $doctor->user->email }}" placeholder="Correo">
                                                @error('email')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="provincia">Contraseña</label>
                                                <input type="password" class="form-control" name="password"
                                                    value="{{ old('password') }}" placeholder="Contraseña"
                                                    aria-autocomplete="list">
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="provincia">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    value="{{ old('password_confirmation') }}"
                                                    placeholder="Repetir contraseña">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="certificados">
                                <div class="text-center">
                                    <!-- Botón que abre el modal -->
                                    <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                        data-bs-target="#agregarCertificadoModal">
                                        <i class="bi bi-plus"></i> Agregar Certificado
                                    </a>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="agregarCertificadoModal" tabindex="-1"
                                    aria-labelledby="agregarCertificadoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="agregarCertificadoModalLabel">Agregar
                                                    Certificado</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Contenido del formulario o cualquier otra información que desees mostrar -->
                                                <form action="{{ route('admin.certificados.store') }}"
                                                    enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
                                                    <div class="mb-3">
                                                        <label for="nombreCertificado" class="form-label">Grado Obtenido</label>
                                                        <input type="text" class="form-control" id="nombreCertificado" name="nombre_certificado"
                                                            placeholder="Ingresa el nombre">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="institucion" class="form-label">Institución</label>
                                                        <input type="text" class="form-control" id="institucion" name="institucion"
                                                            placeholder="Ingresa la institución">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="fechaObtencion" class="form-label">Fecha de
                                                            Obtención</label>
                                                        <input type="date" class="form-control" id="fechaObtencion" name="fecha_obtencion"> 
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="archivoCertificado" class="form-label">Archivo del
                                                            Certificado</label>
                                                        <input type="file" class="form-control"
                                                            id="archivoCertificado" name="archivo_certificado">
                                                    </div>
                                                    <!-- Agrega más campos según sea necesario -->
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                @foreach ($certificados as $certificado)
                                <hr>
                                    <form action="{{ route('admin.certificados.update', $certificado->id) }}"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="provincia">Grado Obtenido</label>
                                                    <input type="text" class="form-control" name="nombre_certificado"
                                                        value="{{ $certificado->nombre_certificado }}"
                                                        placeholder="Certificado">
                                                    @error('nombre_certificado')
                                                        <small style="color:red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="provincia">Institución</label>
                                                    <input type="text" class="form-control" name="institucion"
                                                        value="{{ $certificado->institucion }}"
                                                        placeholder="Institución">
                                                    @error('institucion')
                                                        <small style="color:red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="provincia">Fecha Obtenida</label>
                                                    <input type="date" class="form-control" name="fecha_obtencion"
                                                        value="{{ $certificado->fecha_obtencion }}"
                                                        placeholder="Institución">
                                                    @error('fecha_obtencion')
                                                        <small style="color:red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="file" name="archivo_certificado"
                                                        class="custom-file-input" id="customFile" accept="image/*">
                                                    <label for="customFile" class="custom-file-label">Seleccionar
                                                        foto</label>
                                                </div>
                                            </div>


                                            <script>
                                                document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                                                    var fileName = e.target.files[0].name;
                                                    var label = e.target.nextElementSibling;
                                                    label.textContent = fileName;
                                                });

                                                // Cambiar el texto del botón al cargar la página
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var label = document.querySelector('.custom-file-label');
                                                    label.textContent = 'Seleccionar foto';
                                                });
                                            </script>




                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <a href="" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
