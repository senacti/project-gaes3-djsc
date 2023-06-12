
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEJ.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/STYLE2J.CSS')}}">
  
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>REGISTRO</title>
   
</head>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
<body>
    <nav class="navbar navbar-expand-lg bg-rgb">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="img/logo.png" alt="Logo" width="240" height="100">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mt-5 ms-auto ">
              
              <li class="nav-item me-3">
                <a class="nav-link" href="{{url('/catalogo')}}">servicios</a>
              </li>
              <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sobre nosotros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">mision</a></li>
                  <li><a class="dropdown-item" href="#">vision</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
              <div>
                <a href="{{url('/')}}"><button type="button" class="btn btn-outline-dark">Inicio</button></a>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <form action="{{route('register')}}" method="post">
        @csrf
    <section class="form-register">
        <h4 style="background: none;" >Formulario Registro</h4>
        <input class="controls" type="text" placeholder="Ingrese su Nombre" required id="Nombre de usuario" name="name" value="{{ old('name') }}">
        <span class="col-1" id="Nombre de usuarioOK"></span>
        <input class="controls" type="text" placeholder="Ingrese su direccion" required id="direccion">
        <span class="col-1" id="direccionOK"></span>
        <input class="controls" type="tel" placeholder="Ingrese el telefono" required id="numerodetelefono">
        <span style="background: none;" class="col-1" id="numerodetelefonoOK"></span>
        <input class="controls" type="text" placeholder="Ingrese su Email" required id="Email" name="email" value="{{ old('email') }}">
        <span class="col-1" id="emailOK"></span>
        <input class="controls" type="password" placeholder="Ingrese su Contraseña" required id="Contraseña" name="password">
        <span class="col-1" id="contraseñaOK"></span>
        <input id="password-confirm" type="password" class="controls" name="password_confirmation" required autocomplete="new-password" placeholder="repita la contraseña">
        <div>
          <select>
              <option value="">-Seleccione su genero-</option>
              <option value="1">FEMENINO</option>
              <option value="2">MASCULINO</option>
              <option value="3">OTRO</option>
          </select>
      </div>
        <button type="submit" class="botons">registrarse </button>
        <p style="background: none;"><a style="background: none;" href="{{url('login')}}">¿Ya posee una Cuenta?</a></p>
      </section>
    </form>
      
    </body>
    <script src="{{ asset('JS/validacionJ.js')}}"></script>
    <script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>

