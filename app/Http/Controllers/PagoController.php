<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Paciente;
use App\Models\Doctor;
use App\Models\Event;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pagos = Pago::all();
        return view('admin.pagos.index',compact('pagos'));
    }

    public function escogerPago($id){
        $evento = Event::find($id);
        return view('admin.pagos.escogerPago',compact('evento'));
    }

    public function create()
    {
        //
        $pacientes = Paciente::orderBy('nombres','asc')->get();
        $doctors = Doctor::orderBy('nombres','asc')->get();
        return view('admin.pagos.create',compact('pacientes','doctors'));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'comprobante' => 'required'
        ]);

        $pago = new Pago();
        $pago -> comprobante =$request->file('comprobante')->store('images');
        $pago -> monto = $request->monto;
        $pago -> fecha_pago = $request->fecha_pago;
        $pago -> descripcion = $request->descripcion;
        $pago -> tipo = $request->tipo;
        $pago -> estado = 'Pendiente';
        $pago -> event_id = $request->event_id;
        $pago->save();

        return redirect()->route('admin.index')
        ->with('mensaje','Comprobante de pago registrado, esperar su validación')
        ->with('icono','success')
        ->with('titulo','Registro de cita exitosa'); 
    }


    public function yape($id){
        $evento = Event::find($id);
        return view('admin.pagos.yape',compact('evento'));
    }

    public function plin($id){
        $evento = Event::find($id);
        return view('admin.pagos.plin',compact('evento'));
    }

    public function bcp($id){
        $evento = Event::find($id);
        return view('admin.pagos.bcp',compact('evento'));
    }

    public function efectivo($id){
        
    }

    public function show($id){
        $pago = Pago::find($id);
        return view('admin.pagos.show',compact('pago'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pago = Pago::find($id);
        return view('admin.pagos.edit',compact('pago'));
    }

    public function update(Request $request,  $id){
        //
        $pago = Pago::find($id);
        $pago -> estado = 'Pagado';
        $pago->save();

        return redirect()->route('admin.pagos.index')
        ->with('mensaje','Se validó el pago correctamente')
        ->with('icono','success')
        ->with('titulo','Validación Exitosa');

    }

    /**
     * Remove the specified resource from storage.
     */

     public function pdf($id){
        $pago = Pago::find($id);

        $pdf = \PDF::loadview('admin.pago.pdf',compact('pago'));
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        $canvas->page_text(20, 800, "Elaborado por: ". Auth::user()->email, null, 10, array(0, 0, 0));
        $canvas->page_text(270, 800, "Página {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));
        $canvas->page_text(450, 800, "Fecha: " . \Carbon\Carbon::now()->format('d/m/Y')." ".\Carbon\Carbon::now()->format('H:i:s'), null, 10, array(0, 0, 0));
        
        return $pdf->stream();
    }

    public function destroy($id)
    {
        //
        Pago::destroy($id);
        return redirect()->route('admin.pagos.index')
        ->with('mensaje','Se eliminó el pago correctamente')
        ->with('icono','error')
        ->with('titulo','Eliminación Exitosa');
    }
}
