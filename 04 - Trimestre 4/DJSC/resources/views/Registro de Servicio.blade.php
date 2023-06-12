<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEj3.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>Registro de Servicios</title>
</head>
<body>
    <section class="form-register">
      <form action="#">
        <center style="background: black;"><h4 style="color: white; background: none;" >REGISTRO DE SERVICIOS</h4></center>
        <center style="background: none;"><img src="" alt=""></center>
        <center style="background: black;"><div style="color: white;margin: 20px; background: none;">
            INFORMACION PRINCIPAL
        </div></center>
        <input class="controls1" type="text" placeholder="Ingrese Nombre del Servicio" required id="NombredelServicio">
        <span style="background: none;" class="col-1" id="NombredelServicioOK"></span>
        <input class="controls2" type="text" placeholder="Ingrese Descripcion del Servicio" required id="DescripciondelServicio">
        <span style="background: none;" class="col-1" id="DescripciondelServicioOK"></span>
        <input class="controls3" type="number" placeholder="Ingrese Cantidad de Productos" required id="CantidaddeProductos">
        <span style="background: none;" class="col-1" id="CantidaddeProductosOK"></span>
        <input class="controls4" type="text" placeholder="Ingrese el Tipo de Servicio" required id="TipodeServicio">
        <span style="background: none;" class="col-1" id="TipodeServicioOK"></span>
        <div style="background: none;">
        <input class="botons1"data-bs-toggle="modal" data-bs-target="#myModal" type="submit" value="Registrar Servicio">
    </div>
      <div class="modal " id="myModal">
       <div style="background: white;" class="modal-dialog modal-lg">
         <div style="background: white;" class="modal-content">
     
           <!-- Modal Header -->
           <div style="background: white;"class="modal-header">
             
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
           </div>
     
           <!-- Modal body -->
           <div style="background: white;" class="modal-body">
             <div style="background: white;"style="display: flex;">
             
               <div style=" background: white;display: inline-block; margin-left: 5%;">
               <center> <img class="check" src="img/check.png" alt=""></center>
               <p style="background: none;">CONFIRMADO </p>
               <p style="background: none;">Su servicio se registro y se guardo en los servicios disponibles del sistema de informacion</p>
             </div>
             </div>
           </div>
         </div>
       </div>
     </div>

      </section>
    </form>
    <script src="{{ asset('JS/validacionJ.js')}}"></script>
  </body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>