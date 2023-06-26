<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEj.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/STYLE2J.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>INICIO SESION</title>
    
</head>

<body style="background: none;">
    <header>
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
                     
                    </ul>
                  </li>
                  <li class="nav-item me-3">
                    <a class="nav-link" href="{{url('/dashboardadmin')}}">administrador</a>
                  </li>
                  <li class="nav-item me-3">
                    <a class="nav-link" href="{{url('/dashboard jefe de produccion')}}">jefe de produccion</a>
                  </li>
                </ul>
                  <div>
                    <a href="{{url('/')}}"><button type="button" class="btn btn-outline-dark">Inicio</button></a>
                  </div>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <section>
        <center><div class="container">
            <div class="wrapper">
              <div class="title"><span style="background: none;">INICIO DE SESION</span></div>
              <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-4 row w-75">
                  <input class="controls" type="text" placeholder="Ingrese su Email" required id="Email" name="email" value="{{ old('email') }}">
        
                </div>
                <div class="mb-4 row w-75">
                  <input class="controls" type="password" placeholder="Ingrese su Contraseña" required id="Contraseña" name="password">
                </div>
                @if ($errors->has('email') || $errors->has('password'))
                <div class="mb-4 row w-75">
                  <span class="error-message">Las credenciales no son válidas.</span>
                </div>
                @endif
                <div class="pass"><a href="{{url('/password/reset')}}">¿Olvidó su contraseña?</a></div>
                <div class="w-75 row button">
                  <input type="submit" value="INGRESAR">
                </div>
                <p class="me-5" style="background: none;"><input type="checkbox" name="remember" id="remember"> RECORDARME</p>
                <div class="signup-link">¿No es usuario? <a href="{{url('register')}}">Regístrese Ahora</a></div>
              </form>
            </div>
          </div></center>     
    </section>
    <script src="{{ asset('JS/validacionJ.js')}}"></script>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>
