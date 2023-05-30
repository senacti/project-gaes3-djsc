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
          <input class="form-control mr-sm-2" type="search" placeholder="nombre sub empresa " aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
        </form>
      </nav>
    <table class="table">
       
        <thead>
          <tr>
            
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">numero de identificacion</th>
            <th scope="col">numero de contacto </th>
            
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>jhoan</td>
            <td>pinilla</td>
            <td>1028780508</td>
            <td>1234123412</td>
            <th>  
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                abrir
             </button>
             
             
             <!-- The Modal -->
             <div class="modal " id="myModal">
               <div class="modal-dialog modal-lg">
                 <div class="modal-content">
             
                   <!-- Modal Header -->
                   <div class="modal-header">
                     
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   </div>
             
                   <!-- Modal body -->
                   <div class="modal-body">
                     <div style="display: flex;">
                     <div class="card" style="width: 50rem;height: 100%;">
                         <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" alt="...">
                         
                       </div>
                       <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">usuario:</p>
                      <p style="margin-left: 5%;">jhoan pinilla</p>
                    </div>
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">numero de contacto:</p>
                      <p style="margin-left: 5%;">3222605400</p>
                    </div>
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">correo de contacto:</p>
                      <p style="margin-left: 5%;">ejemplo@gmail.com</p>
                    </div>
                    
                   
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                     <p style="color: red;">cantidad</p>
                     <p style="margin-left: 5%;">15</p>
                    </div>
                    
                       <p style="color: red;">Detalles: </p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                      
                     </div>
                     </div>
                   </div>
             
                   <!-- Modal footer -->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">denegar pedido</button>
                     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">aceptar pedido</button>
                     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                   </div>
             
                 </div>
               </div>
             </div></th>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>joan</td>
            <td>peña</td>
            <td>1028976389</td>
            <td>1123123123</td>
            <th><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                abrir
             </button>
             
             
             <!-- The Modal -->
             <div class="modal " id="myModal1">
               <div class="modal-dialog modal-lg">
                 <div class="modal-content">
             
                   <!-- Modal Header -->
                   <div class="modal-header">
                     
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   </div>
             
                   <!-- Modal body -->
                   <div class="modal-body">
                     <div style="display: flex;">
                     <div class="card" style="width: 50rem;height: 100%;">
                         <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" alt="...">
                         
                       </div>
                       <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">usuario:</p>
                      <p style="margin-left: 5%;">joan peña</p>
                    </div>
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">numero de contacto:</p>
                      <p style="margin-left: 5%;">1123123123</p>
                    </div>
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">correo de contacto:</p>
                      <p style="margin-left: 5%;">ejemplo@gmail.com</p>
                    </div>
                    
                   
                    <div style="display: inline-block; margin-left: 5%;">
                        <div style="display: flex;">
                      <p style="color: red;">cantidad:</p>
                      <p style="margin-left: 5%;">5</p>
                      
                    </div>
                    
                       <p style="color: red;">Detalles: </p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                      
                     </div>
                     </div>
                   </div>
             
                   <!-- Modal footer -->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">denegar pedido</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">aceptar pedido</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                   </div>
             
                 </div>
               </div>
             </div></th>
             
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>jesus </td>
            <td>castellanos</td>
            <td>2317236878</td>
            <td>1212312312</td>
            <th><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                abrir
             </button>
             
             
             <!-- The Modal -->
             <div class="modal " id="myModal2">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div style="display: flex;">
                    <div class="card" style="width: 50rem;height: 100%;">
                        <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" alt="...">
                        
                      </div>
                      <div style="display: inline-block; margin-left: 5%;">
                       <div style="display: flex;">
                     <p style="color: red;">usuario:</p>
                     <p style="margin-left: 5%;">jesus castellanos</p>
                   </div>
                   <div style="display: inline-block; margin-left: 5%;">
                       <div style="display: flex;">
                     <p style="color: red;">numero de contacto:</p>
                     <p style="margin-left: 5%;">112123123</p>
                   </div>
                   <div style="display: inline-block; margin-left: 5%;">
                       <div style="display: flex;">
                     <p style="color: red;">correo de contacto:</p>
                     <p style="margin-left: 5%;">ejemplo2@gmail.com</p>
                   </div>
                   
                  
                   <div style="display: inline-block; margin-left: 5%;">
                       <div style="display: flex;">
                     <p style="color: red;">cantidad:</p>
                     <p style="margin-left: 5%;">8</p>
                     
                   </div>
                   
                      <p style="color: red;">Detalles: </p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deleniti eligendi illum? Sit non cupiditate consectetur error dolorem facilis, quas voluptate reiciendis dolore unde aut laborum, labore mollitia iste saepe!</p>
                     
                    </div>
                    </div>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                   <button type="button" class="btn btn-primary" data-bs-dismiss="modal">denegar pedido</button>
                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">aceptar pedido</button>
                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  </div>
            
                </div>
              </div>
            </div></th>
          </tr>
        </tbody>
      </table>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>