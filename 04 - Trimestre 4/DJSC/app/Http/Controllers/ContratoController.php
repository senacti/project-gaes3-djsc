<?php

namespace App\Http\Controllers;

use App\Models\Contrato_Sub_Empresa;
use App\Models\Sub_Empresa;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $contratos = Contrato_Sub_Empresa::with('subempresa')->get();

    return view('registroContrato.consultarcontratos', [
        'contratos' => $contratos
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroContrato.RegistroContrato');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' =>  'required|email',
            'detalles' => 'required'
        ]);
        $nombreEmpresa = $request->input('nombre');
        $subempresa = Sub_Empresa::where('nombre', $nombreEmpresa)->first();
        if (!$subempresa) {
        $subempresa = new Sub_Empresa();
        $subempresa->nombre = $request->input('nombre');
        $subempresa->telefono = $request->input('telefono');
        $subempresa->correo = $request->input('correo');
        $subempresa->id_estado = 2;
        $subempresa->save();
        } elseif ($subempresa->id_estado === 2) {
        // La subempresa está ocupada, mostrar mensaje de error
        return redirect()->back()->withErrors(['message' => 'La empresa se encuentra ocupada']);
        }

        $contrato = new Contrato_Sub_Empresa();
        $contrato->detalles = $request->input('detalles');
        $contrato->cantidad = $request->input('cantidad');
        $contrato->id_empresa = $subempresa->id;
        $contrato->id_estado = 1;
        $contrato->save();
        
        return view("registroContrato.RegistroContrato");
    }

    public function mostrarcontratos()
    {
        $contratos = Contrato_Sub_Empresa::with('subempresa')->get();
    
        return view('registroContrato.consultarcontratos', compact('contratos'));
    }
    public function show(Sub_Empresa $sub_Empresa)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sub_Empresa $sub_Empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sub_Empresa $sub_Empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sub_Empresa $sub_Empresa)
    {
        //
    }
}
