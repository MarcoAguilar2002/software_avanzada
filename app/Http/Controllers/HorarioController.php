<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Consultorio;
use Illuminate\Http\Request;

class HorarioController extends Controller
{

    public function index()
    {
        //
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor','consultorio')->get();
        return view('admin.horarios.index',compact('horarios','consultorios'));
    }

    public function cargar_consultorio($id){
        try {
            $horarios = Horario::with('doctor','consultorio')->where('consultorio_id', $id)->get();
            $consultorio = Consultorio::find($id);  // Asegúrate de obtener el consultorio
            return view('admin.horarios.cargar_consultorio', compact('horarios', 'consultorio'));
        } catch (\Exception $exception) {
            return response()->json(['mensaje' => 'Error']);
        }
    }
    

    public function create(){
        //
        $horarios = Horario::with('doctor','consultorio')->get();
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        return view('admin.horarios.create',compact('doctores','consultorios','horarios'));
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

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    // Validar el request
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'consultorio_id' => 'required|exists:consultorios,id'
        ]);

        
        
        $horarioExistente = Horario::where('dia',$request->dia)
            ->where('consultorio_id',$request->consultorio_id)
            ->where(function ($query) use ($request){
                $query -> where(function($query) use ($request){
                    $query->where('hora_inicio','>=',$request->hora_inicio)
                        ->where('hora_inicio','<',$request->hora_fin);
                })
                    ->orWhere(function ($query) use ($request){
                        $query->where('hora_fin','>',$request->hora_inicio)
                        ->where('hora_fin','<=',$request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request){
                        $query->where('hora_inicio','<',$request->hora_inicio)
                        ->where('hora_fin','>',$request->hora_fin);
                    });
            })->exists();

        if($horarioExistente){
            return redirect()->back()
                ->withInput()
                ->with('mensaje','Ya existe un horario que se superpone con el horario existente')
                ->with('icono','error')
                ->with('titulo','Registro Fallido');
        }
        Horario::create($request->all());
        
        return redirect()->route('admin.horarios.index')
            ->with('mensaje','Se registró el horario correctamente')
            ->with('icono','success')
            ->with('titulo','Registro Exitoso'); 
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $horario = Horario::find($id);
        return view('admin.horarios.show',compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id){
        //
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        $horario = Horario::with('doctor','consultorio')->findOrFail($id);
        return view('admin.horarios.edit',compact('horario','consultorios','doctores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id){
        //
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required|after:hora_inicio',
            'consultorio_id' => 'required|exists:consultorios,id'
        ]);

        
        
        $horarioExistente = Horario::where('dia',$request->dia)
            ->where('consultorio_id',$request->consultorio_id)
            ->where(function ($query) use ($request){
                $query -> where(function($query) use ($request){
                    $query->where('hora_inicio','>=',$request->hora_inicio)
                        ->where('hora_inicio','<',$request->hora_fin);
                })
                    ->orWhere(function ($query) use ($request){
                        $query->where('hora_fin','>',$request->hora_inicio)
                        ->where('hora_fin','<=',$request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request){
                        $query->where('hora_inicio','<',$request->hora_inicio)
                        ->where('hora_fin','>',$request->hora_fin);
                    });
            })->exists();

        if($horarioExistente){
            return redirect()->back()
                ->withInput()
                ->with('mensaje','Ya existe un horario que se superpone con el horario existente')
                ->with('icono','error')
                ->with('titulo','Registro Fallido');
        }
        $horario = Horario::with('doctor', 'consultorio')->findOrFail($id);
        $horario->update($request->all()); 
        
        return redirect()->route('admin.horarios.index')
            ->with('mensaje','Se editó el horario correctamente')
            ->with('icono','success')
            ->with('titulo','Edición Exitosa'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Horario::destroy($id);
        return redirect()->route('admin.horarios.index')
        ->with('mensaje','Se eliminó al horario correctamente')
        ->with('icono','error')
        ->with('titulo','Eliminación Exitosa');
    }
}
