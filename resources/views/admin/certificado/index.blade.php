@if (Auth::user()->roles->pluck('name')->first() == 'doctor')
<div class="resume-box col-md-12">
    <h3 class="card-title pb-3">Educación Formativa</h3>
    @foreach($certificados as $certificado)
    <ul>
        <li>

        </li>
        <li>
            <div class="icon">
                <i class="fa-solid fa-user-graduate fa-beat-fade"></i>
            </div>
            <span class="time">{{ \Carbon\Carbon::parse($certificado->fecha_obtencion)->format('d-m-Y') }}</span>

            <h5>{{$certificado->institucion}}</h5>
            <p>{{$certificado->nombre_certificado}}</p>
            <div >
                <img src="/storage/{{$certificado->archivo_certificado}}" alt="Imagen del certificado" style="height: 100px; width: auto; max-width: 100%;">
            </div>
        </li>
    </ul>

    

     @endforeach

    
</div>

@endif