@extends('layouts.dashboard')

@section('title', 'Validar Pago')

@section('content')

    <div class="container">
        <div class="col-md-9">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detalles del pago</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.pagos.update',$pago->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <p><b>Tipo:</b> {{ $pago->tipo }}</p>
                            </div>
                        </div>
                        @if ($pago->tipo != 'Efectivo')
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <img src="/storage/{{ $pago->comprobante }}" alt="Foto del comprobante"
                                        style="height: auto; width:200px ;">
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Fecha de pago:</b> {{ $pago->fecha_pago }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Descripción:</b></p>
                                <ul>
                                    <li> <b>Doctor:</b> {{ $pago->event->doctor->user->name }} </li>
                                    <li> <b>Paciente:</b> {{ $pago->event->user->name }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Monto:</b> S/ {{ $pago->monto }}</p>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-md-12">
                                <a href="{{ route('admin.pagos.index') }}" class="btn btn-secondary">Volver</a>
                                <button type="submit" class="btn btn-success">Validar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
