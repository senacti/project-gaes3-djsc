<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">

    <title>Registrar Orden de Producción</title>
</head>
<body>
    <div class="container">
        <center><h1>Registrar Orden de Producción</h1></center>
        <div class="formulario">
            <form action="{{ route('ordenproduccion.almacenarOrdenProduccion')}}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            <div >
                <div>
                    <label for="fechaproduccion">Fecha de Producción</label>
                    <input type="date" class="form-control" id="fechaproduccion" name="fechaproduccion" required>
                    <div class="valid-feedback">Espacio correcto</div>
                    <div class="invalid-feedback">Espacio vacío</div>
                </div>
            </div>
            <div >
                <label for="tipoProduccion">Tipo de Producción</label>
                    <select name="tipoProduccion" id="tipoProduccion" class="form-select" required>
                        <option value="">Seleccionar tipo de producción</option>
                        @foreach ($tipoProducciones as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->tipoProduccion }}</option>
                        @endforeach
                </select>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success">Registrar Orden de Producción</button>
            </div>
        </form>
    </div>
    </div>
</body>
<script src="{{ asset('JS/validacion.js')}}"></script>
</html>