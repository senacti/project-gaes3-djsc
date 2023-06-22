<?php

namespace App\Http\Controllers;

use App\Models\Produccion;
use App\Models\tipo_Produccion;
use App\Models\novedad_Produccion;
use App\Models\estado_Produccion;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ordenProduccion.pedidosjp');
    }
    public function consultarOrdenProduccion()
    {
        $producciones = Produccion::all();
        return view('ordenProduccion.consultarOrdenProduccion', compact('producciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipoProducciones = tipo_Produccion::all();
        return view('ordenProduccion.registrarOrdenProduccion', compact('tipoProducciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function almacenarOrdenProduccion(Request $request)
    {

        $request->validate([
            'fechaproduccion' => 'required',
            'tipoProduccion' => 'required',
        ]);

        $produccion = new Produccion();
        $produccion->fechaproduccion = $request->input('fechaproduccion');
        $produccion->id_tipo = $request->input('tipoProduccion');
        $produccion->id_estado = 1;
        $produccion->id_novedad = 5;
        $produccion->save();

        return redirect()->route('consultarordenproduccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produccion $produccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produccion = Produccion::find($id);
        $tipoProducciones = tipo_Produccion::all();
        $estadoProducciones = estado_Produccion::all();
        $novedadProducciones = novedad_Produccion::all();
        return view('ordenProduccion.edit', compact('produccion', 'tipoProducciones', 'estadoProducciones', 'novedadProducciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'fechaproduccion' => 'required',
            'tipoProduccion' => 'required',
            'estadoProduccion' => 'required',
            'novedadProduccion' => 'required',
        ]);

        $produccion = Produccion::find($id);
        $produccion->fechaproduccion = $request->input('fechaproduccion');
        $produccion->id_tipo = $request->input('tipoProduccion');
        $produccion->id_estado = $request->input('estadoProduccion');
        $produccion->id_novedad = $request->input('novedadProduccion');
        $produccion->save();

        return redirect()->route('consultarordenproduccion')->with('success', 'Orden de producción actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produccion = Produccion::find($id);

        if ($produccion) {
            $produccion->delete();

            return redirect()->route('consultarordenproduccion')->with('success', 'La orden de producción ha sido eliminada correctamente.');
        }

        return redirect()->route('consultarordenproduccion')->with('error', 'No se encontró la orden de producción.');
    }

    public function generarReportePDF()
    {
        $producciones = Produccion::with('tipoProduccion', 'estadoProduccion', 'novedadProduccion')->get();

        $reporteView = view('ordenProduccion.reporteP', ['producciones' => $producciones]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($reporteView->render());

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $output = $dompdf->output();

        $filePath = public_path('Reportes/reporteProducciones.pdf');

        file_put_contents($filePath, $output);

        return response()->download($filePath);
    }
}
