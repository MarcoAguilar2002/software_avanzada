<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

class ProfileController extends Controller{
    public function index(){
        $user = Auth::user();
        if (is_null($user->profile)) {
            return redirect()->route('admin.perfil.edit')
            ->with('mensaje', 'Debe completar su perfil antes de continuar.')
            ->with('icono', 'warning')
            ->with('titulo', 'Perfil Incompleto');
        }

        $perfil = $user->profile;
        return view('admin.profile.index', compact('perfil'));
    }

    public function create(){
        //
    }


    public function store(Request $request){
        //
    }


    public function show(Profile $profile){
        //
    }


    public function edit(Profile $profile){
        //
        $perfil = Auth::user()->profile;
        return view('admin.profile.edit',compact('perfil'));
    }


    public function update(Request $request){
        //
        $profile = Auth::user()->profile;
        $request -> validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|unique:profiles,dni,'.$profile->id,
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required'
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $request->nombres." ".$request->apellidos;
        $user->save();


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
        $profile->foto = $request->file('foto')->store('images');
        $profile->save();

        return redirect()->route('admin.perfil.index')
        ->with('mensaje','Se acutalizaron sus datos correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    public function updateUsuario(Request $request){
        //
        $request -> validate([
            'email' => 'required|unique:users,email,'.Auth::user()->id,
            'password' => 'confirmed'
        ]);
        
        $usuario = User::find(Auth::user()->id);
        $usuario->email = $request->email;
        if($request ->filled('password')){
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();

        return redirect()->route('admin.perfil.index')
        ->with('mensaje','Se acutalizaron sus datos correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    public function destroy(Profile $profile){
        //
    }
}
