<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>pagina principal</title>
</head>
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
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">inicio</a>
              </li>
              <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sobre nosotros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">mision</a></li>
                  <li><a class="dropdown-item" href="#">vision</a></li>
             
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
              <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-dark" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-dark" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle me-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <a href="{{ route('login') }}"><i class="fas fa-home"></i></a>
            </form>
          </div>
        </div>
      </nav>
      <div style="display: flex;">
      <div class="slide p-2 ">
        <div style="width: 800px; height:552px" class="slide-inner">
            <input class="slide-open" type="radio" id="slide-1" 
                  name="slide" aria-hidden="true" hidden="" checked="checked">
            <div class="slide-item">
                <img src="img/Pantalones.png">
            </div>
            <input class="slide-open" type="radio" id="slide-2" 
                  name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
              <img src="img/Gorras.png">
            </div>
            <input class="slide-open" type="radio" id="slide-3" 
                  name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
              <img src="img/Pocillo.png">
            </div>
            <label for="slide-3" class="slide-control prev control-1">‹</label>
            <label for="slide-2" class="slide-control next control-1">›</label>
            <label for="slide-1" class="slide-control prev control-2">‹</label>
            <label for="slide-3" class="slide-control next control-2">›</label>
            <label for="slide-2" class="slide-control prev control-3">‹</label>
            <label for="slide-1" class="slide-control next control-3">›</label>
            <ol class="slide-indicador">
                <li>
                    <label for="slide-1" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-2" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-3" class="slide-circulo">•</label>
                </li>
            </ol>
        </div>
    </div>
    <a href="#" style="text-decoration: none;color: black;">
    <div style="display: inline-block;">
      <div class="card mb-2 mt-2" style="max-width: 100%;margin-right: 5%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="https://colormake.com/wp-content/uploads/2017/02/c0ce51a4e8c213066239948e9e41774c-300x279.jpg" class="img-fluid rounded-start w-100 h-75" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Sublimacion de Camisas</h5>
              <p class="card-text">Aqui te mostramos unos ejemplos de como podrias modificar tus camisas deacuerdo a lo que te guste </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      </a>
      <a href="#" style="text-decoration: none;color: black;">
      <div class="card mb-2 mt-4" style="max-width: 100%;margin-right: 5%;">
        <div class="row g-0">
          <div class="col-md-3 ">
            <img src="https://image.made-in-china.com/202f0j00FhLGjJMcQekB/Custom-Baseball-Pants-for-Men-Sublimation-Sports-Baseball-Pants.webp" class="img-fluid rounded-start w-100 h-75" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Pantalones</h5>
              <p class="card-text">Aqui te mostramos unos ejemplos de como podrias modificar tus pantalones deacuerdo a lo que te guste</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <a href="#" style="text-decoration: none;color: black;">
      <div class="card mb-5 mt-4" style="max-width: 100%;margin-right: 5%;">
        <div class="row g-0">
          <div class="col-md-3 ">
            <img src="data:image/jpeg;base64,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" class="img-fluid rounded-start w-100 h-75" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Pocillos</h5>
              <p class="card-text">Aqui te mostramos unos ejemplos de como podrias modificar tus pocillos deacuerdo a lo que te guste</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </a>
  
    </div>
     </div>
    <div class="anun p-5">
    <div class="card " style="width: 18rem; margin-left: 10%;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaboDMoOVmyRkfkpcAV_Tx_UeF7fAQfVdMYg&usqp=CAU" class="card-img-top " alt="...">
      <div class="card-body">
        <h5 class="card-title">Camisas</h5>
        <p class="card-text">Modifica a tu gusto las camisas con las instrucciones y diseños que nos quieras proporcionar</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
 
  

    <div class="card" style="width: 18rem;margin-left: 5%;">
      <img src="https://previews.123rf.com/images/esperanzacarlos/esperanzacarlos2005/esperanzacarlos200500013/147978434-collage-de-diferentes-shorts-para-ni%C3%B1os-de-diferentes-colores.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pantalonetas</h5>
        <p class="card-text">Modifica a tu gusto las pantalonetas con las instrucciones y diseños que nos quieras proporcionar</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  

    <div class="card" style="width: 18rem;margin-left: 5%;">
      <img src="https://img.freepik.com/fotos-premium/gorros-estilo-diferentes-colores-brillantes-aislan-fondo-blanco-vista-superior_513327-272.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gorros</h5>
        <p class="card-text">Modifica a tu gusto los gorros con las instrucciones y diseños que nos quieras proporcionar</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
 

    <div class="card" style="width: 18rem;margin-left: 5%;">
      <img src="https://www.kojakgraphic.com.co/wp-content/uploads/2017/02/Colores_Mugs.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pocillos</h5>
        <p class="card-text">Modifica a tu gusto los pocillos con las instrucciones y diseños que nos quieras proporcionar</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  
</div>

<div class="circulo mt-4">
<img style="margin-left: 10%;" src="https://img.freepik.com/foto-gratis/gorra-blanca-aislada_125540-1024.jpg" class="img-fluid rounded-circle p-4" alt="...">
<img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/camiseta-apc-1620301648.jpg?crop=0.762xw:0.429xh;0.105xw,0.307xh&resize=480:*" class="img-fluid rounded-circle p-4 " alt="...">
<img src="https://www.gef.co/dx/api/dam/custom/2020/GEF/ES-CO/Imagenes/Ninas/PANTALONES/Lehia_Kd/566x715/Pantalon-Nina-Lehia-Kd-Blanco-908-Frente-Gef.jpg" class="img-fluid rounded-circle p-4 " alt="...">
<img src="https://cdnx.jumpseller.com/ace-santa-marta/image/12621206/087-810030.jpg?1604436516" class="img-fluid rounded-circle p-4 " alt="...">
<img src="https://http2.mlstatic.com/D_NQ_NP_729039-MCO53212049037_012023-O.webp" class="img-fluid rounded-circle p-4 " alt="...">
</div>


</div>
</div>
<footer class="footer">
  <footer class="bg-rgb2 text-white text-center text-lg-start">
   
    <div class="container p-4">
    
      <div class="row">
   
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Descripcion de nuestra pagina principal</h5>
  
          <p>
            En este apartado de nuestra pagina te mostramos un poco de nuestros servicios 
            y ejemplos de diseños que nuestra empresa ya ha desarrollado con anterioridad
          </p>
        </div>
       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>

      </div>
   
    </div>
   
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
   
  </footer>

</footer>
</body>
<script src="{{ asset('JS/bootstrap.min.js')}}"></script>
<script src="{{ asset('JS/bootstrap.bundle.min.js')}}"></script>
</html>