<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/STYLEj.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/STYLE2J.CSS')}}">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <title>RECUPERAR CONTRASEÑA</title>
    
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
        <center><div style="width:70% " class="container">
            <div class="wrapper">
              <div class="title"><span style="background: none;">RECUPERAR CONTRASEÑA</span></div>
              <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="row w-75">
                    <a>Ingrese Email que uso en el Registro</a>
                    <input id="email" type="email" name="email" placeholder="Ingrese su Email" required id="Email">
                    <span class="col-1" id="emailOK"></span>
                </div>
                <div class=" row w-75">
                </div>
                <div class=" w-75 row button">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
                <div class="signup-link">¿Talvez no tiene cuenta? <a href="{{url('/registrarse')}}">Registrese Ahora</a></div>
              </form>
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
                      
                        <div style=" background: white;display: inline-block; margin-left: 5%;">
                        <center> <img class="check" src="img/check.png" alt=""></center>
                        <p style="background: none;">CONFIRMADO </p>
                        <p style="background: none;">Su contraseña actual se ha enviado a su correo electronico</p>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div></center>     
    </section>
    <script src="{{ asset('JS/validacionJ.js')}}"></script>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection