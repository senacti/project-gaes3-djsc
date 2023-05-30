<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/Style.css')}}">
    <title>Asignar Empleados para una Actividad</title>
</head>
<body>
    <div class="formulario">
    <div class="container">
        <center><h1>Asignar Empleados para una Actividad</h1></center>
        <form action="" class="row g-3 needs-validation" novalidate>
            <div >
                <label for="name">Nombre del Empleado</label>
                <input type="text" class="form-control" id="name" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="act">Actividad Asignada</label>
                <input type="text" class="form-control" id="act" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div >
                <label for="correo">Correo del Empleado</label>
                <input type="email" class="form-control" id="correo" required>
                <div class="valid-feedback">Espacio correcto</div>
                <div class="invalid-feedback">Espacio vacío</div>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Asignar Empleado para una Actividad</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>