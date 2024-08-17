@extends('layouts.dashboard')

@section('title', 'Crear Doctor')

@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.doctores.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Datos Personales</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>
                                    <input type="text" name="nombres" id="nombres" class="form-control"
                                        placeholder="Nombres" value="{{ old('nombres') }}">
                                    @error('nombres')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Apellidos">Apellidos</label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control"
                                        value="{{ old('apellidos') }}" placeholder="Apellidos">
                                    @error('apellidos')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="dni">DNI</label>
                                    <input type="text" placeholder="DNI" name="dni" id="dni"
                                        class="form-control" value="{{ old('dni') }}">
                                    @error('dni')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="dni">Celular</label>
                                    <input type="text" name="celular" id="celular" class="form-control"
                                        value="{{ old('celular') }}" placeholder="Celular">
                                    @error('celular')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                                        value="{{ old('fecha_nacimiento') }}">
                                    @error('fecha_nacimiento')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="genero">Género</label>
                                    <select name="genero" id="genero" class="form-control">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
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
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
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
                                <h5>Datos de Contacto</h5>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" name="direccion" id="direccion" class="form-control"
                                        value="{{ old('direccion') }}" placeholder="Dirección">
                                    @error('direccion')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="region">Región</label>
                                    <input type="text" name="region" id="region" class="form-control"
                                        value="{{ old('region') }}" placeholder="Región">
                                    @error('region')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="provincia">Provincia</label>
                                    <input type="text" name="provincia" id="provincia" class="form-control"
                                        value="{{ old('provincia') }}" placeholder="Provincia">
                                    @error('provincia')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="distrito">Distrito</label>
                                    <input type="text" name="distrito" id="distrito" class="form-control"
                                        value="{{ old('distrito') }}" placeholder="Distrito">
                                    @error('distrito')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Datos Formativos</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="distrito">Código Colegiado</label>
                                    <input type="text" name="codigo_colegiado" id="codigo_colegiado "
                                        class="form-control" value="{{ old('codigo_colegiado') }}"
                                        placeholder="Código Colegiado ">
                                    @error('codigo_colegiado ')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="especialidad">Especialidad</label>
                                    <select name="especialidad" id="especialidad" class="form-control">
                                        <option value="Medicina General">Medicina General</option>
                                        <option value="Pediatría">Pediatría</option>
                                        <option value="Ginecología">Ginecología</option>
                                        <option value="Dermatología">Dermatología</option>
                                        <option value="Cardiología">Cardiología</option>
                                        <option value="Oftalmología">Oftalmología</option>
                                        <option value="Odontología">Odontología</option>
                                        <option value="Fisioterapia ">Fisioterapia </option>
                                        <option value="Nutrición">Nutrición</option>
                                        <option value="Psicología">Psicología</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="distrito">Años de Experiencia</label>
                                    <input type="text" name="anos_experiencia" id="anos_experiencia"
                                        class="form-control" value="{{ old('anos_experiencia') }}"
                                        placeholder="Código Colegiado ">
                                    @error('anos_experiencia')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Datos de la Cuenta</h5>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="provincia">Correo</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" placeholder="Correo">
                                    @error('email')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provincia">Contraseña</label>
                                    <input type="password" class="form-control" name="password"
                                        value="{{ old('password') }}" placeholder="Contraseña" aria-autocomplete="list">
                                    @error('password')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provincia">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        value="{{ old('password_confirmation') }}" placeholder="Repetir contraseña">
                                    @error('password_confirmation')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Grado de Instruccion</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provincia">Grado Obtenido</label>
                                    <input type="text" class="form-control" name="nombre_certificado"
                                        value="{{ old('nombre_certificado') }}" placeholder="Grado Obtenido">
                                    @error('nombre_certificado')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provincia">Institución</label>
                                    <input type="text" class="form-control" name="institucion"
                                        value="{{ old('institucion') }}" placeholder="Institución">
                                    @error('nombre_certificado')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provincia">Fecha de Obtención</label>
                                    <input type="date" class="form-control" name="fecha_obtencion"
                                        value="{{ old('fecha_obtencion') }}">
                                    @error('fecha_obtencion')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <input type="file" name="archivo_certificado" class="custom-file-input" id="customFile"
                                        accept="image/*">
                                    <label for="customFile" class="custom-file-label">Seleccionar foto del certificado</label>
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
                                    label.textContent = 'Seleccionar foto del certificado';
                                });
                            </script>

                        </div>


                        <div class="row text-center">
                            <div class="col-md-12">
                                <a href="" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection
