@extends('layouts.dashboard')

@section('title', 'Editar Consultorio')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body col-md-12">
                    <form action="{{ route('admin.consultorios.update',$consultorio->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">Ubicación</label>
                                    <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación"
                                        value="{{ $consultorio->ubicacion }}">
                                    
                                    @error('ubicacion')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">Capacidad</label>
                                    <input type="text" name="capacidad" class="form-control" placeholder="Capacidad"
                                        value="{{ $consultorio->capacidad }}">

                                    
                                    @error('capacidad')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="T">Teléfono</label>
                                    <input type="text" name="telefono" class="form-control" placeholder="Celular"
                                        value="{{ $consultorio->telefono }}">

                                    
                                    @error('telefono')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="Especialidad">Especialidad</label>
                                    <select name="especialidad" id="especialidad" class="form-control">
                                        <option value="Medicina General" @selected($consultorio->estado == 'Medicina General')>Medicina General</option>
                                        <option value="Pediatría" @selected($consultorio->estado == 'Pediatría')>Pediatría</option>
                                        <option value="Ginecología" @selected($consultorio->estado == 'Ginecología')>Ginecología</option>
                                        <option value="Dermatología" @selected($consultorio->estado == 'Dermatología')>Dermatología</option>
                                        <option value="Cardiología" @selected($consultorio->estado == 'Cardiología')>Cardiología</option>
                                        <option value="Oftalmología" @selected($consultorio->estado == 'Oftalmología')>Oftalmología</option>
                                        <option value="Odontología" @selected($consultorio->estado == 'Odontología')>Odontología</option>
                                        <option value="Fisioterapia" @selected($consultorio->estado == 'Fisioterapia')>Fisioterapia </option>
                                        <option value="Nutrición" @selected($consultorio->estado == 'Nutrición')>Nutrición</option>
                                        <option value="Psicología" @selected($consultorio->estado == 'Psicología')>Psicología</option>
                                    </select>

                                    @error('especialidad')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">Estado</label>
                                    <select name="estado" id="" class="form-control">
                                        <option value="Activo" @selected($consultorio->estado == 'Activo')>Activo</option>
                                        <option value="Inactivo" @selected($consultorio->estado == 'Inactivo')>Inactivo</option>
                                    </select>
                                    

                                    @error('genero')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-md-12">
                                <a href="{{ route('admin.consultorios.index') }}" class="btn btn-secondary ">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection
