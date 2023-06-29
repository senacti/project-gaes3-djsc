<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>Consultar Órdenes de Servicio</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"></a>
        <form method="GET" action="{{ route('ordenServicio.consultarordenservicio') }}">
            <div class="form-group">
                <label for="usuario">Buscar por usuario:</label>
                <input type="text" name="usuario" id="usuario" value="{{ $usuario ?? '' }}" placeholder="Nombre de usuario">
                <button type="submit">Buscar</button>
            </div>
        </form>
        <form class="form-inline" action="{{ route('generar-reporteS-pdf') }}" method="GET">
            <label for="usuario">Filtrar por Usuario:</label>            
            <input class="form-control mr-sm-2" type="search" name="usuario" placeholder="Nombre del cliente" aria-label="Search">
            <button class="btn btn-primary ml-auto">Generar Reporte</button>
        </form>
    </nav>
    <table class="table">
        @if ($solicitudes->isEmpty())
            <div class="centered-message">
              <div class="my-5">
                <center><h1 style="font-size: 3rem;">No hay solicitudes</h1></center>
              </div>
            </div>
        @else
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Número de Identificación</th>
                    <th scope="col">Número de Contacto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudes as $solicitud)
                    <tr>
                        <th scope="row">{{ $solicitud->id }}</th>
                        <td>{{ $solicitud->usuario->name }}</td>
                        <td>{{ $solicitud->usuario->numeroidentificacion }}</td>
                        <td>{{ $solicitud->usuario->telefono }}</td>
                        <th>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{ $solicitud->id }}">
                                Abrir
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal{{ $solicitud->id }}">
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
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaboDMoOVmyRkfkpcAV_Tx_UeF7fAQfVdMYg&usqp=CAU" alt="...">
                                                </div>
                                                <div style="display: inline-block; margin-left: 5%;">
                                                    <div style="display: flex;">
                                                        <p style="color: red;">Usuario:</p>
                                                        <p style="margin-left: 5%;">{{ $solicitud->usuario->name }}</p>
                                                    </div>
                                                    <p style="color: red;">Número de contacto:</p>
                                                    <p style="margin-left: 5%;">{{ $solicitud->usuario->telefono }}</p>
                                                    <p style="color: red;">Correo de contacto:</p>
                                                    <p style="margin-left: 5%;">{{ $solicitud->usuario->email }}</p>
                                                    <p style="color: red;">Cantidad:</p>
                                                    <p style="margin-left: 5%;">{{ $solicitud->cantidad }}</p>
                                                    <p style="color: red;">Detalles:</p>
                                                    <p>{{ $solicitud->descripcion }}</p>
                                                    <p style="color: red;">Estado:</p>
                                                    <p style="margin-left: 5%;">{{ $solicitud->estadosolicitud->estadoSolicitud }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a class="btn btn-primary" href="{{url('ordenServicio/'.$solicitud->id.'/estadoedit')}}">Modificar estado</a>
                                            @if ($solicitud->estadosolicitud->estadoSolicitud === 'finalizada' || $solicitud->estadosolicitud->estadoSolicitud === 'cancelada')
                                            <form action="{{ route('ordenServicio.destroy', $solicitud->id) }}" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        @endif
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        @endif
    </table>
</body>
<script src="{{ asset('JS/bootstrap.min.js') }}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js') }}"></script>
</html>
