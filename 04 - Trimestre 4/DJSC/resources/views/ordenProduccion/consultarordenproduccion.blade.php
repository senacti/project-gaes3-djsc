<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">

    <title>ordenes de servicio</title>

    <style>
        .card {
            margin: 10px;
        }
    </style>
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>

  @if ($producciones->isEmpty())
  <div class="centered-message">
    <div class="my-5">
      <center><h1 style="font-size: 3rem;">No existen ordenes aún</h1></center>
    </div>
  </div>
  @else
  <div class="row">
    @foreach ($producciones as $produccion)
    <div class= "col-sm-3">
      <div class="anun m-2">
        <div class="card" style="width: 18rem;">
          <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tipo de Produccion</h5>
            <p class="card-text">detalles de la produccion</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{ $produccion->id }}">
               abrir
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div class="modal " id="myModal{{ $produccion->id }}">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div style="display: flex;">
              <div class="card" style="width: 30rem;height: 20%;">
                <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" alt="...">
              </div>
              <div style="display: inline-block; margin-left: 5%;">
                <div style="display: flex;">
                  <p style="color: red;">Estado:</p>
                  <p style="margin-left: 5%;">{{ $produccion->estadoProduccion->estadoProduccion }}</p>
                </div>
                <p style="color: red;">Tipo Produccion: </p>
                <p>{{ $produccion->tipoProduccion->tipoProduccion}}</p>
                <p style="color: red;">Novedad Produccion: </p>
                <p>{{ $produccion->novedadProduccion->novedadProduccion}}</p>
                <p style="color: red;">Fecha Produccion: </p>
                <p>{{ $produccion->fechaproduccion}}</p>
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <a href="{{url('ordenProduccion/'.$produccion->id.'/edit')}}" class="btn btn-warning " >
            Editar</a>
            @if ($produccion->estadoProduccion->estadoProduccion === 'finalizada' || $produccion->estadoProduccion->estadoProduccion === 'cancelada')
    <form action="{{url('ordenProduccion/'.$produccion->id)}}" method="POST" class="d-inline">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
  @endif
            <a href="{{url('/asignarProcesosProduccion')}}">
              <button type="button" class="btn btn-primary">
                asignar proceso de produccion
              </button>
            </a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @endif

<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('JS/validacionJ')}}"></script>
<script src="{{ asset('JS/jquery-3.6.4.min.js')}}"></script>
</body>
</html>
