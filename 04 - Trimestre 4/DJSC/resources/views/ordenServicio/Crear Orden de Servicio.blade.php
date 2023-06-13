<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEJF.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>CREACION DE ORDEN DE SERVICIO</title>
</head>
<body>
    <section class="form-register">
        <center style="background: black;"><h4 style="color: white; background: none;" >CREACION DE ORDEN DE SERVICIO</h4></center>
         <div style="color:black; background: none;">
            INFORMACION REQUERIDA
        </div>
        <form action="{{route('almacenarordenservicio')}}" method="post">
          @csrf
        <input class="controlsj4" type="number" placeholder="Ingrese Cantidad" required id="CantidaddeProductos" name="cantidad" id="cantidad" required>
        <span style="background: none;" class="col-1" id="CantidaddeProductosOK"></span>
        <input class="controlsj5" type="text" placeholder="Ingrese detalles" required id="detallesdelServicio" name="descripcion" id="descripcion" value="{{ old ('descripcion')}}" required>
        <span style="background: none;" class="col-1" id="detallesdelServicioOK"></span>
        <div style="background: none;">
        <input class="botons1"data-bs-toggle="modal" data-bs-target="#myModal" type="submit" value="Guardar Orden">
    </div>
  </form>
      <div class="modal " id="myModal">
       <div style="background: white;" class="modal-dialog modal-lg">
         <div style="background: white;" class="modal-content">
     
           <!-- Modal Header -->
           <div style="background: white;"class="modal-header">
             
             <a href="{{url('/servicios')}}"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></a>
           </div>
     
           <!-- Modal body -->
           <div style="background: white;" class="modal-body">
             <div style="background: white;"style="display: flex;">
             
               <center><div style=" background: white;display: inline-block; margin-left: 5%;">
               <center> <img class="check" src="img/check.png" alt=""></center>
               <center><p style="background: none;">CONFIRMADO </p>
               <p style="background: none;">Su solicitud se guardo en el sistema de informacion con exito</p></center>
             </div></center>
             </div>
           </div>
         </div>
       </div>
     </div>

      </section>
      <script src="{{ asset('JS/validacionJ.js')}}"></script>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>