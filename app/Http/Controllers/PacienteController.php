<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::with('user')->get();
        return view('admin.pacientes.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|unique:profiles',
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'nro_seguro' => 'required|unique:pacientes',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            
        ]);
        
        $usuario = new User();
        $usuario->name = $request->nombres." ".$request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        $paciente = new Paciente();
        $paciente->user_id = $usuario->id;
        $paciente->nro_seguro = $request->nro_seguro;
        $paciente->grupo_sanguineo = $request->grupo_sanguineo;
        $paciente->alergias = $request->alergias;
        $paciente->vacunas_recibidas = $request->vacunas_recibidas;
        $paciente->save();


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

        $usuario->assignRole('paciente');

        return redirect()->route('admin.pacientes.index')
        ->with('mensaje','Se registró al paciente correctamente')
        ->with('icono','success')
        ->with('titulo','Registro Exitoso'); 

    }

    public function show($id){
        //
        $paciente = paciente::with('user')->findOrFail($id);
        $profile = $paciente->user->profile;
        return view('admin.pacientes.show',compact('paciente','profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $paciente = Paciente::with('user')->findOrFail($id);
        $profile = $paciente->user->profile;
        return view('admin.pacientes.edit',compact('paciente','profile'));
    }

    public function update(Request $request, $id){
        //
        $paciente = Paciente::with('user')->findOrFail($id);
        $profile = $paciente->user->profile;
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|unique:profiles,dni,'.$profile->id,
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'nro_seguro' => 'required|unique:pacientes,nro_seguro,'.$paciente->id
        ]);

        $user = $paciente->user;
        $user->name = $request->nombres." ".$request->apellidos;
        $user->save();

        $paciente->nro_seguro  = $request->nro_seguro ;
        $paciente->grupo_sanguineo = $request->grupo_sanguineo;
        $paciente->alergias = $request->alergias;
        $paciente->vacunas_recibidas = $request->vacunas_recibidas;
        $paciente->save();

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

        return redirect()->route('admin.pacientes.index')
        ->with('mensaje','Se actualizó al paciente correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa'); 
    }

    public function updateUsuario(Request $request, $id){
        //

        $paciente = Paciente::with('user')->findOrFail($id);
        $request -> validate([
            'email' => 'required|unique:users,email,'.$paciente->user->id,
            'password' => 'confirmed'
            
        ]);
        
        $usuario = User::find($paciente->user->id);
        $usuario->email = $request->email;
        if($request ->filled('password')){
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();

        return redirect()->route('admin.pacientes.index')
        ->with('mensaje','Se acutalizó al paciente correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Paciente::destroy($id);
        return redirect()->route('admin.pacientes.index')
        ->with('mensaje','Se eliminó al usuario correctamente')
        ->with('icono','error')
        ->with('titulo','Eliminación Exitosa');
    }
}
