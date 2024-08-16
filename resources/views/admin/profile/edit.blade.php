@extends('layouts.dashboard')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <h4 class="page-title">Editar perfil</h4>
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
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <form action="{{route('admin.perfil.update')}}" method="POST" enctype="multipart/form-data" >
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
                                                    placeholder="Nombres" value="{{ $perfil->nombres }}">
                                                @error('nombres')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Apellidos">Apellidos</label>
                                                <input type="text" name="apellidos" id="apellidos" class="form-control"
                                                    value="{{ $perfil->apellidos }}" placeholder="Apellidos">
                                                @error('apellidos')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dni">DNI</label>
                                                <input type="text" placeholder="DNI" name="dni" id="dni"
                                                    class="form-control" value="{{ $perfil->dni }}">
                                                @error('dni')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dni">Celular</label>
                                                <input type="text" name="celular" id="celular" class="form-control"
                                                    value="{{ $perfil->celular }}" placeholder="Celular">
                                                @error('celular')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                                                    class="form-control" value="{{ $perfil->fecha_nacimiento }}">
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
                                                        {{ $perfil->genero == 'Masculino' ? 'selected' : '' }}>Masculino
                                                    </option>
                                                    <option value="Femenino"
                                                        {{ $perfil->genero == 'Femenino' ? 'selected' : '' }}>Femenino
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
                                                        {{ $perfil->estado_civil == 'Soltero' ? 'selected' : '' }}>Soltero
                                                    </option>
                                                    <option value="Casado"
                                                        {{ $perfil->estado_civil == 'Casado' ? 'selected' : '' }}>Casado
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
                                                <input type="text" name="direccion" id="direccion" class="form-control"
                                                    value="{{ $perfil->direccion }}" placeholder="Dirección">
                                                @error('direccion')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="region">Región</label>
                                                <input type="text" name="region" id="region" class="form-control"
                                                    value="{{ $perfil->region }}" placeholder="Región">
                                                @error('region')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="provincia">Provincia</label>
                                                <input type="text" name="provincia" id="provincia"
                                                    class="form-control" value="{{ $perfil->provincia }}"
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
                                                    class="form-control" value="{{ $perfil->distrito }}"
                                                    placeholder="Distrito">
                                                @error('distrito')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Foto de Perfil</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="file" name="foto" class="custom-file-input" id="customFile" accept="image/*">
                                                <label for="customFile" class="custom-file-label">Seleccionar foto</label>
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

                            </div>

                            <div class="tab-pane" id="timeline">
                                <form action="{{route('admin.perfil.updateUsuario')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="provincia">Correo</label>
                                                <input type="email" class="form-control" name="email" value="{{$perfil->user->email}}"
                                                    placeholder="Correo">
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
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
