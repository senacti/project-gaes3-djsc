<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>consultar ordenes de servicio</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"></a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="nombre del cliente " aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
        </form>
      </nav>
    <table class="table">
      @if ($solicitudes->isEmpty())
      <p>no hay solicitudes</p>
          @else
        <thead>
          <tr>
            
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">numero de identificacion</th>
            <th scope="col">numero de contacto </th>
            
          </tr>
        </thead>
    
        <tbody>
          
          
          @foreach ($solicitudes as $solicitud)

                  
             
          
          <tr>
            
            <th scope="row">{{$solicitud->id}}</th>
            <td>{{$solicitud->usuario->name}}</td>
            <td>{{$solicitud->usuario->numeroidentificacion}}</td>
            <td>{{$solicitud->usuario->telefono}}</td>
            
            <th>  
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$solicitud->id}}">
                abrir
             </button>
             
             
             <!-- The Modal -->
             <div class="modal " id="myModal{{$solicitud->id}}">
               <div class="modal-dialog modal-lg">
                 <div class="modal-content">
             
                   <!-- Modal Header -->
                   <div class="modal-header">
                     
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   </div>
             
                   <!-- Modal body -->
                   <div class="modal-body">
                     <div style="display: flex;">
                     <div class="card" style="width: 30rem;height: 100%;">
                         <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" alt="...">
                         
                       </div>
                       <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">usuario:</p>
                      <p style="margin-left: 5%;">{{$solicitud->usuario->name}}</p>
                    </div>
                      <p style="color: red;">numero de contacto:</p>
                      <p style="margin-left: 5%;">{{$solicitud->usuario->telefono}}</p>
                      <p style="color: red;">correo de contacto:</p>
                      <p style="margin-left: 5%;">{{$solicitud->usuario->email}}</p>
                     <p style="color: red;">cantidad</p>
                     <p style="margin-left: 5%;">{{$solicitud->cantidad}}</p>                  
                       <p style="color: red;">Detalles: </p>
                       <p>{{$solicitud->descripcion}}</p>
                       <p style="color: red;">estado</p>
                       <p style="margin-left: 5%;">{{$solicitud->estadosolicitud->estadoSolicitud}}</p>
                     </div>
                     </div>
                   </div>
             
                   <!-- Modal footer -->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">modificar estado</button>
                     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                   </div>
             
                 </div>
               </div>
             </div></th>
          </tr>

          @endforeach
          @endif
      </table>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>