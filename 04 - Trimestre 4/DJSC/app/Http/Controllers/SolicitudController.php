<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Crear Orden de Servicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Crear Orden de Servicio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate ([
        'descripcion' => 'required',
        'cantidad' => 'required',
        ]);

        $solicitudes = new solicitud();
        $solicitudes->descripcion = $request->input('descripcion');
        $solicitudes->cantidad = $request->input('cantidad');
        $solicitudes->save();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitud $solicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
