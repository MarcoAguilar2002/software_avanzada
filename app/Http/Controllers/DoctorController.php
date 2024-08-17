<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Event;
use App\Models\Profile;
use App\Models\Certificado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctores = Doctor::with('user')->get();
        return view('admin.doctores.index',compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.doctores.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function citas(){
        $eventos = Event::all();
        return view('admin.cancelarCita',compact("eventos"));
    }

    public function editarCita($id){
        $evento = Event::find($id);
        $evento->estado = "Finalizada";
        $evento->save();
        return redirect()->route('admin.reservas')
        ->with('mensaje','Se finalizó la cita correctamente')
        ->with('icono','success')
        ->with('titulo','Cita Finalizada');
    }

    public function store(Request $request){
        
        $request -> validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|unique:profiles',
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'codigo_colegiado' => 'required',
            'anos_experiencia' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $usuario = new User();
        $usuario->name = $request->nombres." ".$request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        $doctor = new Doctor();
        $doctor->user_id = $usuario->id;
        $doctor->codigo_colegiado = $request->codigo_colegiado;
        $doctor->especialidad = $request->especialidad;
        $doctor->anos_experiencia = $request->anos_experiencia;
        $doctor->save();

        $certificado = new Certificado();
        $certificado->doctor_id = $doctor->id;
        $certificado->nombre_certificado = $request->nombre_certificado;
        $certificado->institucion = $request->institucion;
        $certificado->fecha_obtencion = $request->fecha_obtencion;
        $certificado->archivo_certificado = $request->file('archivo_certificado')->store('images');
        $certificado->save();

        $profile = new Profile();
        $profile->user_id = $usuario->id;
        $profile->nombres = $request->nombres;
        $profile->apellidos = $request->apellidos;
        $profile->dni = $request->dni;
        $profile->celular = $request->celular;
        $profile->fecha_nacimiento = $request->fecha_nacimiento;
        $profile->genero = $request->genero;
        $profile->estado_civil = $request->estado_civil;
        $profile->direccion = $request->direccion;
        $profile->region = $request->region;
        $profile->provincia = $request->provincia;
        $profile->distrito = $request->distrito;
        $profile->save();

        $usuario->assignRole('doctor');
        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se registró al doctor correctamente')
        ->with('icono','success')
        ->with('titulo','Registro Exitoso'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id){
        //
        $doctor = Doctor::with('user')->findOrFail($id);
        $profile = $doctor->user->profile;
        return view('admin.doctores.show',compact('doctor','profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        
        $doctor = Doctor::with('user')->findOrFail($id);
        $certificados = $doctor->certificados;
        $profile = $doctor->user->profile;
        return view('admin.doctores.edit',compact('doctor','profile','certificados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $doctor = Doctor::with('user')->findOrFail($id);
        $profile = $doctor->user->profile;

        $request -> validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|unique:profiles,dni,'.$profile->id,
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'codigo_colegiado' => 'required',
            'anos_experiencia' => 'required',
        ]);

        $user = $doctor->user;
        $user->name = $request->nombres." ".$request->apellidos;
        $user->save();

        $doctor->codigo_colegiado = $request->codigo_colegiado;
        $doctor->especialidad = $request->especialidad;
        $doctor->anos_experiencia = $request->anos_experiencia;
        $doctor->save();

        $profile->nombres = $request->nombres;
        $profile->apellidos = $request->apellidos;
        $profile->dni = $request->dni;
        $profile->celular = $request->celular;
        $profile->fecha_nacimiento = $request->fecha_nacimiento;
        $profile->genero = $request->genero;
        $profile->estado_civil = $request->estado_civil;
        $profile->direccion = $request->direccion;
        $profile->region = $request->region;
        $profile->provincia = $request->provincia;
        $profile->distrito = $request->distrito;
        $profile->save();

        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se acutalizó al doctor correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    public function updateUsuario(Request $request, $id){
        //

        $doctor = Doctor::with('user')->findOrFail($id);
        $request -> validate([
            'email' => 'required|unique:users,email,'.$doctor->user->id,
            'password' => 'confirmed'
            
        ]);
        
        $usuario = User::find($doctor->user->id);
        $usuario->email = $request->email;
        if($request ->filled('password')){
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();

        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se acutalizó al doctor correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $doctor = Doctor::find($id);
        $user = $doctor->user;
        $user->delete();
        $doctor->delete();
        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se eliminó al doctor correctamente')
        ->with('icono','error')
        ->with('titulo','Eliminación Exitosa');
    }
}
