<?php

namespace App\Http\Controllers;

use App\Models\Estado_Solicitud;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;



class SolicitudController extends Controller
{
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
            'cantidad' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'descripcion' => 'required',
    ],
    [
        'cantidad.required' => 'La cantidad es obligatoria.',
        'cantidad.numeric' => 'La cantidad debe ser numérica.',
        'cantidad.regex' => 'La cantidad debe tener un máximo de 2 decimales.',
        'descripcion.required' => 'La descripción es obligatoria.',
        ]);

        $solicitud = new solicitud();
        $solicitud->cantidad = $request->input('cantidad');
        $solicitud->descripcion = $request->input('descripcion');
        $solicitud->id_estado = 1;
        $solicitud->id_usuario = Auth::id();
        $solicitud->save();

        return redirect()->route('abonos');
    }
    public function listaSolicitudes(Request $request)
    {
        $usuario = $request->input('usuario');

    $query = Solicitud::with('usuario', 'estadosolicitud');

    if ($usuario) {
        $query->whereHas('usuario', function ($query) use ($usuario) {
            $query->where('name', 'like', '%' . $usuario . '%');
        });
    }

    $solicitudes = $query->get();

    return view('ordenServicio.consultarordenesservicio', [
        'solicitudes' => $solicitudes,
        'usuario' => $usuario,
    ]);
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
    public function edit($id)
    {
        $solicitud = solicitud::find($id);
        $estados = Estado_Solicitud::all();
        return view('ordenServicio.estadoedit', compact('solicitud', 'estados'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'estadoSolicitud' => 'required',
        ]);

        $solicitud = Solicitud::find($id);
        $solicitud->id_estado = $request->input('estadoSolicitud');
        $solicitud->save();

        return redirect()->route('ordenServicio.consultarordenservicio')->with('success', 'Estado actualizado exitosamente.');
    }

    public function generarReportePDF(Request $request)
{
    $usuario = $request->input('usuario');

    $query = Solicitud::with('usuario', 'estadosolicitud');

    if ($usuario) {
        $query->whereHas('usuario', function ($query) use ($usuario) {
            $query->where('name', 'like', '%' . $usuario . '%');
        });
    }

    $solicitudes = $query->get();

    $reporteView = view('ordenServicio.reporteS', ['solicitudes' => $solicitudes]);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($reporteView->render());

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $output = $dompdf->output();

    $filePath = public_path('Reportes/reporteSolicitudes.pdf');

    file_put_contents($filePath, $output);

    return response()->download($filePath);
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::find($id);

        if ($solicitud) {
            $solicitud->delete();

            return redirect()->route('ordenServicio.consultarordenservicio')->with('success', 'La orden de producción ha sido eliminada correctamente.');
        }

        return redirect()->route('ordenServicio.consultarordenservicio')->with('error', 'No se encontró la orden de producción.');
    }
}
