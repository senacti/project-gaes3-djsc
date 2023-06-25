<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>consultar contratos sub empresas</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"></a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="nombre sub empresa " aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
        </form>
      </nav>
    <table class="table">
      
        <thead>
          <tr>
            
            <th scope="col">id contrato</th>
            <th scope="col">nombre sub-empresa</th>
            <th scope="col">id empresa</th>
            <th scope="col">numero de contacto </th>
            
          </tr>
        </thead>
        
        <tbody>
          @foreach ($contratos as $contrato)
          <tr>
            <tr>
              <td>{{ $contrato->id }}</td>
              <td>{{ $contrato->subempresa->nombre }}</td>
              <td>{{ $contrato->subempresa->id }}</td>
              <td>{{ $contrato->subempresa->telefono }}</td>
              <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{ $contrato->id }}">
                abrir
             </button>
            </td>
          </tr>
           
             
             
             <!-- The Modal -->
             <div class="modal " id="myModal{{ $contrato->id }}">
               <div class="modal-dialog modal-lg">
                 <div class="modal-content">
             
                   <!-- Modal Header -->
                   <div class="modal-header">
                     
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   </div>
             
                   <!-- Modal body -->
                   <div class="modal-body">
                     <div style="display: flex;">

                       <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">nombre sub empresa:</p>
                      <p style="margin-left: 5%;">{{ $contrato->subempresa->nombre }}</p>
                    </div>
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">numero de contacto:</p>
                      <p style="margin-left: 5%;">{{ $contrato->subempresa->telefono }}</p>
                    </div>
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">correo de contacto:</p>
                      <p style="margin-left: 5%;">{{ $contrato->subempresa->correo }}</p>
                    </div>
                    
                   
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">cantidad:</p>
                      <p>{{ $contrato->cantidad }}</p>
                    </div>
                    
                       <p style="color: red;">Detalles contrato: </p>
                       <p>{{ $contrato->detalles }}</p>
                      
                     </div>
                     </div>
                   </div>
             
                   <!-- Modal footer -->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-primary" disabled>modificar estado</button>
                     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cerrar</button>
                   </div>
             
                 </div>
               </div>
             </div></th>
          </tr>
          @endforeach
        </tbody>
       
      </table>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>