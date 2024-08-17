<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;

class CertificadoController extends Controller
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
    public function store(Request $request)
    {
        //
        $certificado = new Certificado();
        $certificado->doctor_id = $request->doctor_id;
        $certificado->nombre_certificado = $request->nombre_certificado;
        $certificado->institucion = $request->institucion;
        $certificado->fecha_obtencion = $request->fecha_obtencion;
        $certificado->archivo_certificado = $request->file('archivo_certificado')->store('images');
        $certificado->save();

        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se acutalizó al doctor correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificado $certificado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificado $certificado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {


        $certificado = Certificado::find($id);
        $certificado->nombre_certificado = $request->nombre_certificado;
        $certificado->institucion = $request->institucion;
        $certificado->fecha_obtencion = $request->fecha_obtencion;
        $certificado->archivo_certificado = $request->file('archivo_certificado')->store('images');
        $certificado->save();

        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se acutalizó al doctor correctamente')
        ->with('icono','success')
        ->with('titulo','Edición Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificado $certificado)
    {
        //
    }
}
