<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">

    <title>Editar Orden de Producción</title>
</head>
<body>
    <div class="container">
        <center><h1>Registrar Orden de Producción</h1></center>
        <div class="formulario">
            <form action="{{url('ordenProduccion/'.$produccion->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
            @method("PUT")
            @csrf
            <div >
                <div>
                    <label for="fechaproduccion">Fecha de Producción</label>
                    <input type="date" class="form-control" id="fechaproduccion" name="fechaproduccion" value="{{ $produccion->fechaproduccion }}" required>
                    <div class="valid-feedback">Espacio correcto</div>
                    <div class="invalid-feedback">Espacio vacío</div>
                </div>
            </div>
            <div>
                <label for="tipoProduccion">Tipo de Producción</label>
                <select name="tipoProduccion" id="tipoProduccion" class="form-select" required>
                    <option value="">Seleccionar tipo de producción</option>
                    @foreach ($tipoProducciones as $tipo)
                    <option value="{{ $tipo->id }}" {{ $produccion->id_tipo == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->tipoProduccion }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="estadoProduccion">Estado de Producción</label>
                <select name="estadoProduccion" id="estadoProduccion" class="form-select" required>
                    <option value="">Seleccionar estado de producción</option>
                    @foreach ($estadoProducciones as $estado)
                    <option value="{{ $estado->id }}" {{ $produccion->id_estado == $estado->id ? 'selected' : '' }}>
                        {{ $estado->estadoProduccion }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="novedadProduccion">Novedad de Producción</label>
                <select name="novedadProduccion" id="novedadProduccion" class="form-select" required>
                    <option value="">Seleccionar novedad de producción</option>
                    @foreach ($novedadProducciones as $novedad)
                    <option value="{{ $novedad->id }}" {{ $produccion->id_novedad == $novedad->id ? 'selected' : '' }}>
                        {{ $novedad->novedadProduccion }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success">Editar Orden de Producción</button>
            </div>
        </form>
    </div>
    </div>
</body>
<script src="{{ asset('JS/validacion.js')}}"></script>
</html>