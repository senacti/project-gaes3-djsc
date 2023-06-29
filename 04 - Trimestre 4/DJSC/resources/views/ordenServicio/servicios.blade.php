<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>pedidos</title>
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>
    <div class="anun p-5 ms-5">
        <div class="card " style="width: 18rem;">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaboDMoOVmyRkfkpcAV_Tx_UeF7fAQfVdMYg&usqp=CAU" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camisas</h5>
            <p class="card-text">Modifica a tu gusto las camisas con las instrucciones y diseños que nos quieras proporcionar</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
              abrir
            </button>
            
            <!-- The Modal -->
            <div  class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                 <div class="modal-header">
                    <h4 class="modal-titl e">Camisas</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div style="display: flex;">
                      <div class="card" style="width: 50rem;height: 100%;">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaboDMoOVmyRkfkpcAV_Tx_UeF7fAQfVdMYg&usqp=CAU" alt="...">
                          
                        </div>
                        <div style="display: inline-block; margin-left: 5%;">
                          <div style="display: flex;">
                        
                      </div>
                     
                        <p style="color: red;">Descripcion: </p>
                        <p>Modifica a tu gusto las camisas con las instrucciones y diseños que nos quieras proporcionar para esto te proporcionaremos un formulario en el cual podras darnos los detalles del servicio</p>
                     
                      </div>
                      </div>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <a href="{{ route('ordenservicio') }}"><button   type="button" class="btn btn-primary" >
                      crear orden de servicio
                    </button></a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
 
    
</body>
<script src="{{ asset('JS/jquery-3.6.4.min.js')}}"></script>

<script>
$( "#orden" ).click(function() {
  $('#myModal').modal('toggle');
});
</script>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>
