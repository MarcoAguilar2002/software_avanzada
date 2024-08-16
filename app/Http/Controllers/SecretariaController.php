<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use App\Models\User; 
use App\Models\Profile; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $secretarias = Secretaria::with('user')->get();
        return view('admin.secretaria.index',compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.secretaria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //
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
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $usuario = new User();
        $usuario->name = $request->nombres." ".$request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        $secretaria = new Secretaria();
        $secretaria->user_id = $usuario->id;
        $secretaria->area_responsable = $request->area_responsable;
        $secretaria->save();

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

        $usuario->assignRole('secretaria');
        return redirect()->route('admin.secretarias.index')
        ->with('mensaje','Se registro a la secretaria correctamente')
        ->with('icono','success')
        ->with('titulo','Registro Exitoso'); 
    }

    public function show($id){
        //
        $secretaria = Secretaria::with('user')->findOrFail($id);
        $profile = $secretaria->user->profile;
        return view('admin.secretaria.show',compact('secretaria','profile'));
    }

    public function edit($id){
        //
        $secretaria = Secretaria::with('user')->findOrFail($id);
        $profile = $secretaria->user->profile;
        return view('admin.secretaria.edit',compact('secretaria','profile'));
    }


    public function update(Request $request, $id){
        //
        $secretaria = Secretaria::with('user')->findOrFail($id);
        $profile = $secretaria->user->profile;
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
        ]);
        $user = $secretaria->user;
        $user->name = $request->nombres." ".$request->apellidos;
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
        $user->save();

        return redirect()->route('admin.secretarias.index')
        ->with('mensaje','Se acutalizó a la secretaria correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    public function updateUsuario(Request $request, $id){
        //

        $secretaria = Secretaria::with('user')->findOrFail($id);
        $request -> validate([
            'email' => 'required|unique:users,email,'.$secretaria->user->id,
            'password' => 'confirmed'
            
        ]);
        
        $usuario = User::find($secretaria->user->id);
        $usuario->email = $request->email;
        if($request ->filled('password')){
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();

        return redirect()->route('admin.secretarias.index')
        ->with('mensaje','Se acutalizó a la secretaria correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    public function destroy($id){
        //
        $secretaria = Secretaria::find($id);
        $user = $secretaria->user;
        $user->delete();
        $secretaria->delete();
        return redirect()->route('admin.secretarias.index')
        ->with('mensaje','Se eliminó a la secretaria correctamente')
        ->with('icono','error')
        ->with('titulo','Eliminación Exitosa');
    }
}
