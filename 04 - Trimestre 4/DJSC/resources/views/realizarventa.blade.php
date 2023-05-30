<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">
    <title>Registrar Venta</title>
</head>
<body>
    <div class="formulario">
    <div class="container">
        <center><h1>Registrar Venta</h1></center>
        <form action="" class="row g-3 needs-validation" novalidate>
            <div >
                <label for="name">Nombre del Cliente</label>
                <input type="text" class="form-control" id="name" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="num">Número de Contacto</label>
                <input type="number" class="form-control" id="num" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="cant">Cantidad</label>
                <input type="number" class="form-control" id="cant" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="pago">Pago Inicial</label>
                <input type="number" class="form-control" id="pago" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="tipo">Método de Pago</label>
                <select name="tipo" class="form-control" id="tipo" required>
                    <option value="#"></option>
                    <option value="nequi">Nequi</option>
                    <option value="cred">Tarjeta de Crédito</option>
                    <option value="deb">Tarjeta de Débito</option>
                </select>
            </div>
            <div class="col-6"></div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Registrar Venta</button>
            </div>
        </form>
    </div>
    </div>
    <script src="{{ asset('JS/validacion.js')}}"></script>
</body>
</html>