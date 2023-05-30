<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEabonos.CSS')}}">
    <title>REALIZAR ABONO</title>
</head>

<body>
    <div>
        <section class="form-registerh">
            <form action="#">
                <center>
                    <div style=" margin-bottom:20px; background: black;">
                        <h4 style="color:white;background: none;">REALIZAR ABONO</h4>
                    </div>
                </center>
                <input class="controls" type="text" placeholder="Ingrese su Nombre" required id="Nombre de usuario">
                <span class="col-1" id="Nombre de usuarioOK"></span>
                <input class="controls" type="number" placeholder="Ingrese su DNI" required id="DNI">
                <span class="col-1" id="DNIOK"></span>
                <input class="controls" type="tel" placeholder="Ingrese numero de contacto" required id="contacto">
                <span class="col-1" id="contactoOK"></span>
                <input class="controls" type="number" placeholder="Ingrese cantidad de abono" required id="cantidad">
                <span class="col-1" id="cantidadOK"></span>
                <div>
                    <select>
                        <option value="">-Seleccione Metodo de Pago-</option>
                        <option value="1">NEQUI</option>
                        <option value="2">TARJETA DE CREDITO</option>
                        <option value="3">TARJETA DE DEBITO</option>
                    </select>
                </div>
                <input class="botons" type="submit" value="Confirmar Abono">
            </form>
        </section>
        <script src="{{ asset('JS/validacionJ2.js')}}"></script>
    </div>
    
</body>

</html>