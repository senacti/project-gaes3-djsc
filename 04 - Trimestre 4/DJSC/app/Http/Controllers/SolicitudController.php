<?php

namespace App\Http\Controllers;

use App\Models\Estado_Solicitud;
use Illuminate\Support\Facades\Auth;
use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function obtenerEstadoSolicitud($id)
    {
        $estado = Estado_Solicitud::findOrFail($id);

        $estadoSolicitud = $estado->estadoSolicitud;

        // Acceder a los atributos del estado de la solicitud
        $estado = $estadoSolicitud->estadoSolicitud;
    }
    public function index()
    {

        return view('ordenServicio.servicios');
    }
    public function misSolicitudes()
    {
        // Obtenemos el usuario actualmente autenticado
        $user = Auth::user();

        // Obtenemos todas las solicitudes del usuario actual
        $solicitudes = Solicitud::where('id_usuario', $user->id)->orderBy('id')->get();

        // Retornamos la vista con las solicitudes
        return view('ordenServicio.abonos', ['solicitudes' => $solicitudes]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordenServicio.Crear Orden de Servicio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cantidad' => 'required',
            'descripcion' => 'required',
        ]);

        $solicitud = new solicitud();
        $solicitud->cantidad = $request->input('cantidad');
        $solicitud->descripcion = $request->input('descripcion');
        $solicitud->id_estado  = 1;
        $solicitud->id_usuario = Auth::id();
        $solicitud->save();

        return redirect()->route('abonos');
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
