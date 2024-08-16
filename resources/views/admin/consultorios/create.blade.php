@extends('layouts.dashboard')

@section('title', 'Crear Consultorio')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body col-md-12">
                    <form action="{{ route('admin.consultorios.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <div class="form-group">
                                        <label for="especialidad">Especialidad</label>
                                        <select name="especialidad" id="genero" class="form-control">
                                            <option value="Medicina General">Medicina General</option>
                                            <option value="Pediatría">Pediatría</option>
                                            <option value="Ginecología">Ginecología</option>
                                            <option value="Dermatología">Dermatología</option>
                                            <option value="Cardiología">Cardiología</option>
                                            <option value="Oftalmología">Oftalmología</option>
                                            <option value="Odontología">Odontología</option>
                                            <option value="Fisioterapia">Fisioterapia </option>
                                            <option value="Nutrición">Nutrición</option>
                                            <option value="Psicología">Psicología</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">Ubicación</label>
                                    <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación"
                                        value="{{ old('ubicacion') }}">

                                    @error('ubicacion')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="Capacidad">Capacidad</label>
                                    <input type="text" name="capacidad" class="form-control" placeholder="Capacidad"
                                        value="{{ old('capacidad') }}">
                                    @error('capacidad')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            


                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">Teléfono</label>
                                    <input type="text" name="telefono" class="form-control" placeholder="Teléfono"
                                        value="{{ old('telefono') }}">
                                    @error('telefono')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="Estado">Estado</label>
                                    <select name="estado" id="" class="form-control">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>

                                    @error('genero')
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
