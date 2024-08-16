<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Consultorio; 
use Illuminate\Support\Facades\Auth; 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //
        $consultorio = Consultorio::findOrFail($request->consultorio_id);
        $evento = new Event;
        $evento->title = $request->hora." ".$consultorio->especialidad;
        $evento->start = $request->start;
        $evento->end = $request->end;
        $evento->color = $request->color;
        $evento->user_id = Auth()->user()->id; 
        $evento->doctor_id = $request->doctor_id;
        $evento->consultorio_id = $request->consultorio_id;
        $evento->estado =  "En Curso";
        $evento->save();

        return redirect()->route('admin.pagos.metodo',$evento->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $cita = Event::find($id);
        if ($cita) {
            $cita->delete();
            return redirect()->route('admin.reservas')
                ->with('mensaje', 'Se canceló la cita correctamente')
                ->with('icono', 'error')
                ->with('titulo', 'Eliminación Exitosa');
        } else {
            return redirect()->route('admin.reservas')
                ->with('mensaje', 'No se encontró la cita')
                ->with('icono', 'error')
                ->with('titulo', 'Error de eliminación');
        }
    }

}
