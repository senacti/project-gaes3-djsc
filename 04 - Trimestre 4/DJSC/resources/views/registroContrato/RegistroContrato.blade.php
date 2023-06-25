<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEJF.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>RegistroContrato</title>
</head>
<body>
    <section class="form-register2">
        <form action="{{route('guardarcontrato')}}" method="POST">
          @csrf
        <center style="background: black;"><h4 style="color: white; background: none;" >Registro de Contrato Sub Empresa</h4></center>

         <center style="margin: 10px;"><div style="color:white; background: black;">
            INFORMACION REQUERIDA
        </div></center>
        @if ($errors->has('message'))
          <div class="alert alert-danger">
        {{ $errors->first('message') }}
          </div>
       @endif
        <input class="controlsh1" type="text" placeholder="Ingrese Nombre de sub empresa" required id="Nombredeusuario" name="nombre">
        <span style="background: none;" class="col-1" id="NombredeusuarioOK"></span>
        <input class="controlsh2" type="tel" placeholder="Ingrese el teléfono de contacto" required id="numerodecontacto" name="telefono">
        <span style="background: none;" class="col-1" id="numerodecontactoOK"></span>
        <input class="controlsh3" type="email" placeholder="Ingrese su Email corporativo" required id="Email" name="correo">
        <input class="controlsh2" type="text" placeholder="Ingrese la cantidad de producto" required id="cantidad" name="cantidad">
        <span style="background: none;" class="col-1" id="emailOK"></span>
        <input class="controlsh5" type="text" placeholder="Ingrese detalles del producto" required id="detallesdelServicio" name="detalles">
        <span style="background: none;" class="col-1" id="detallesdelServicioOK"></span>
        <div style="background: none;">
            <button class="botons2" type="submit" >Confirmar</button>
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
             
               <center><div style=" background: white;display: inline-block; margin-left: 5%;">
               <center> <img class="check" src="img/check.png" alt=""></center>
               <center><p style="background: none;">CONFIRMADO </p>
               <p style="background: none;">el contrato se ha registrado con éxito y se enviara un correo a la empresa</p></center>
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