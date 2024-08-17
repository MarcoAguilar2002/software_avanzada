@extends('layouts.dashboard')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <h4 class="page-title">Mi Perfil</h4>
                </div>
                <div class="col-sm-3 col-6 text-right m-b-30">
                    <a href="{{ route('admin.perfil.edit') }}" class="btn btn-primary btn-rounded"><i
                            class="fa-solid fa-pen"></i>
                        Editar Perfil</a>
                </div>
            </div>

            <div class="card mt-3 p-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">

                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <div class="profile-img">
                                        <a href="#">
                                            @if ($perfil)
                                                <img class="avatar" src="/storage/{{ $perfil->foto }}"
                                                    alt="Perfil de {{ $perfil->apellidos }}">
                                            @else
                                                <p>No se ha encontrado el perfil del usuario.</p>
                                            @endif

                                        </a>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">{{ $perfil->nombres . ' ' . $perfil->apellidos }}
                                        </h3>
                                        @if (Auth::user()->roles->pluck('name')->first() == 'doctor')
                                            <small class="text-muted"><b>Especialidad:</b> {{Auth::user()->doctor->especialidad}}</small>
                                            <div class="staff-id"><b>N° Colegiado:</b>{{Auth::user()->doctor->codigo_colegiado}}</div>
                                        @endif

                                        <div class="staff-id"><b>DNI:</b> {{ $perfil->dni }}</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col personal-info-column">
                            <ul class="personal-info">
                                <li>
                                    <span class="title"><i class="bi bi-phone-fill"></i> Celular:</span>
                                    <span class="text"><a href="#">
                                            <p>{{ $perfil->celular }}</p>
                                        </a></span>
                                </li>
                                <li>
                                    <span class="title"><i class="bi bi-envelope-fill"></i> Correo:</span>
                                    <span class="text"><a href="#">
                                            <p>{{ $perfil->user->email }}</p>
                                        </a></span>
                                </li>
                                <li>
                                    <span class="title"><i class="bi bi-cake-fill"></i> Fecha de Nacimiento:</span>
                                    <span class="text">
                                        <p>{{ \Carbon\Carbon::parse($perfil->fecha_nacimiento)->format('d-m-Y') }}</p>
                                    </span>

                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Información
                                    Básica</a></li>
                            
                            @if (Auth::user()->roles->pluck('name')->first() == 'doctor')
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Educación
                                    Formativa</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">

                                <p><strong><i class="fa-solid fa-venus-mars fa-beat"></i> Género:</strong></p>
                                <p>{{ $perfil->genero }}</p>

                                <p><strong><i class="fa-solid fa-id-card-clip fa-beat"></i> Estado civil:</strong></p>
                                <p>{{ $perfil->estado_civil }}</p>

                                <p><strong><i class="fa-solid fa-house fa-beat"></i> Dirección:</strong></p>
                                <p>{{ $perfil->direccion }}</p>

                                <p><strong><i class="fa-solid fa-globe fa-beat"></i> Región:</strong></p>
                                <p>{{ $perfil->region }}</p>

                                <p><strong><i class="fa-solid fa-map fa-beat"></i> Provincia:</strong></p>
                                <p>{{ $perfil->provincia }}</p>

                                <p><strong><i class="fa-solid fa-street-view fa-beat"></i></i> Distrito:</strong></p>
                                <p>{{ $perfil->distrito }}</p>
                            </div>

                            <div class="tab-pane" id="timeline">
                                @include('admin.certificado.index')
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
