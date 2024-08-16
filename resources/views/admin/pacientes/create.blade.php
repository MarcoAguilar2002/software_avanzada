@extends('layouts.dashboard')

@section('title', 'Crear Paciente')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body col-md-12">
                    <form action="{{ route('admin.pacientes.store') }}" method="POST">
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
                                    @error('genero')
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
                                <h5>Datos Clínicos</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="distrito">N° Seguro</label>
                                    <input type="text" name="nro_seguro" id="nro_seguro" class="form-control"
                                        value="{{ old('nro_seguro') }}" placeholder="N° Seguro">
                                    @error('nro_seguro')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="area_responsable">Grupo Sanguíneo</label>
                                    <select name="grupo_sanguineo" id="grupo_sanguineo" class="form-control">
                                        <option value="A+">A+</option>
                                        <option value="A-">A- </option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+ ">O+ </option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="detalle">Alergias:</label>
                                    <textarea name="alergias" id="editor" value="{{ old('alergias') }}" class="form-control" rows="4"
                                        style="width: 100%;
                                        box-sizing: border-box;
                                        resize: none; "></textarea>
        
                                    <script type="importmap">
                                        {
                                            "imports": {
                                                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
                                                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
                                            }
                                        }
                                    </script>
        
                                    <script type="module">
                                        import {
                                            ClassicEditor,
                                            Essentials,
                                            Bold,
                                            Italic,
                                            Font,
                                            Paragraph
                                        } from 'ckeditor5';
        
                                        ClassicEditor
                                            .create(document.querySelector('#editor'), {
                                                plugins: [Essentials, Bold, Italic, Font, Paragraph],
                                                toolbar: {
                                                    items: [
                                                        'undo', 'redo', '|', 'bold', 'italic', '|',
                                                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                                                    ]
                                                }
                                            })
                                            .then( /* ... */ )
                                            .catch( /* ... */ );
                                    </script>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="detalle">Vacunas Recibidas:</label>
                                    <textarea name="vacunas_recibidas" id="editor2" value="{{ old('vacunas_recibidas') }}" class="form-control" rows="4"
                                        style="width: 100%;
                                        box-sizing: border-box;
                                        resize: none; "></textarea>
        
                                    <script type="importmap">
                                        {
                                            "imports": {
                                                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
                                                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
                                            }
                                        }
                                    </script>
        
                                    <script type="module">
                                        import {
                                            ClassicEditor,
                                            Essentials,
                                            Bold,
                                            Italic,
                                            Font,
                                            Paragraph
                                        } from 'ckeditor5';
        
                                        ClassicEditor
                                            .create(document.querySelector('#editor2'), {
                                                plugins: [Essentials, Bold, Italic, Font, Paragraph],
                                                toolbar: {
                                                    items: [
                                                        'undo', 'redo', '|', 'bold', 'italic', '|',
                                                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                                                    ]
                                                }
                                            })
                                            .then( /* ... */ )
                                            .catch( /* ... */ );
                                    </script>
        
        
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
