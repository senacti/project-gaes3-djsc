<?php

namespace App\Http\Controllers;

use App\Models\Contrato_Sub_Empresa;
use App\Models\Sub_Empresa;
use App\Models\Estado_Contrato;
use App\Models\Estado_Sub_Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;
use Dompdf\Options;

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
        }elseif ($subempresa->id_estado === 1) {
            $subempresa->id_estado = 2;
            $subempresa->save();

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
    public function edit($id)
{
    $contrato = Contrato_Sub_Empresa::find($id);
    $estados = Estado_Contrato::all();

    return view('registroContrato.estadoCedit', compact('contrato', 'estados'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'estadoContrato' => 'required',
    ]);

    $contrato = Contrato_Sub_Empresa::find($id);
    $contrato->id_estado = $request->input('estadoContrato');
    $contrato->save();

    if ($contrato->id_estado == 3) {
        $subempresa = $contrato->subempresa;
        $subempresa->id_estado= 1 ;
        $subempresa->save();
    }elseif($contrato->id_estado == 1 ||$contrato->id_estado == 2 ) {
        $subempresa = $contrato->subempresa;
        $subempresa->id_estado= 2 ;
        $subempresa->save();}
    return redirect()->route('consultarcontratos')->with('success', 'Estado actualizado exitosamente.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $contrato = Contrato_Sub_Empresa::find($id);

    if ($contrato) {
        $contrato->delete();

        return redirect()->route('consultarcontratos')->with('success', 'El contrato ha sido eliminado correctamente.');
    }

    return redirect()->route('consultarcontratos')->with('error', 'No se encontró el contrato.');
}
    
public function generarReportePDF(Request $request)
{
    $nombreSubempresa = $request->input('nombre_subempresa');

    $contratos = Contrato_Sub_Empresa::join('sub__empresas', 'contrato__sub__empresas.id_empresa', '=', 'sub__empresas.id')
        ->join('estado__sub__empresas', 'sub__empresas.id_estado', '=', 'estado__sub__empresas.id')
        ->join('estado__contratos', 'contrato__sub__empresas.id_estado', '=', 'estado__contratos.id')
        ->when($nombreSubempresa, function ($query) use ($nombreSubempresa) {
            $query->whereHas('subempresa', function ($subempresaQuery) use ($nombreSubempresa) {
                $subempresaQuery->where('nombre', 'LIKE', '%' . $nombreSubempresa . '%');
            });
        })
        ->select('contrato__sub__empresas.*', 'estado__sub__empresas.estadoSubEmpresa as estado_subempresa', 'estado__contratos.estadoContrato as estado_contrato')
        ->get();

    $reporteView = view('registroContrato.reporteC', ['contratos' => $contratos]);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($reporteView->render());

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $output = $dompdf->output();

    $filePath = public_path('Reportes/reporteContratos.pdf');

    file_put_contents($filePath, $output);

    return response()->download($filePath);
}
}
