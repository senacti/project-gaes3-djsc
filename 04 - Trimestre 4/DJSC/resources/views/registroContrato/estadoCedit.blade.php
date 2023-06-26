<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">

    <title>Editar Estado</title>
</head>
<body>
    <div class="container">
        <center><h1>Editar Estado</h1></center>
        <div class="formulario">
            <form action="{{ route('registroContrato.update', $contrato->id) }}" method="POST" class="row g-3 needs-validation" novalidate>
                @method("PUT")
            @csrf
            <div>
                <label for="estadoContrato">ESTADO</label>
                <select name="estadoContrato" id="estadoContrato" class="form-select" required>
                    <option value="">Seleccionar Estado</option>
                    @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" {{ $contrato->id_estado == $estado->id ? 'selected' : '' }}>
                        {{ $estado->estadoContrato }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success">Editar Estado</button>
            </div>
        </form>
    </div>
    </div>
</body>
<script src="{{ asset('JS/validacion.js')}}"></script>
</html>