<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Horario;
use App\Models\Doctor;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WebController extends Controller
{
    //
     public function index(){
        
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        return view('index',compact('consultorios','doctores'));
     }
    
     public function cargarDoctoresPorConsultorio($consultorio_id) {
        try {
            // Obtener el consultorio y su especialidad
            $consultorio = Consultorio::find($consultorio_id);
            $especialidad = $consultorio->especialidad;
    
            // Filtrar doctores por la especialidad del consultorio
            $doctores = Doctor::with('user')->where('especialidad', $especialidad)->get();
    
            return response()->json($doctores);
        } catch (\Exception $exception) {
            return response()->json(['mensaje' => 'Error al cargar los doctores'], 500);
        }
    }

    public function getHorarios($consultorio_id, $doctor_id, $fecha){
        Carbon::setLocale('es');
        $diaSemana = Carbon::parse($fecha)->isoFormat('dddd'); // Ejemplo: 'lunes', 'martes', etc.
    
        $horarios = Horario::where('consultorio_id', $consultorio_id)
                        ->where('doctor_id', $doctor_id)
                        ->where('dia', $diaSemana)
                        ->get();
    
        $horariosParticionados = [];
    
        foreach ($horarios as $horario) {
            $horaInicio = Carbon::parse($horario->hora_inicio);
            $horaFin = Carbon::parse($horario->hora_fin);
    
            while ($horaInicio->lt($horaFin)) {
                $horariosParticionados[] = [
                    'hora' => $horaInicio->format('H:i'),
                ];
                $horaInicio->addMinutes(20); // Incremento de 20 minutos
            }
    
            // Añadir la hora final para asegurar que se incluya el último intervalo
            if ($horaInicio->eq($horaFin)) {
                $horariosParticionados[] = [
                    'hora' => $horaInicio->format('H:i'),
                ];
            }
        }
        return response()->json($horariosParticionados);
    }
    

    
}
