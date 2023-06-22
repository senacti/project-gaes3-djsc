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
        <div class="slide-inner">
            <input class="slide-open" type="radio" id="slide-1" 
                  name="slide" aria-hidden="true" hidden="" checked="checked">
            <div class="slide-item">
                <img src="https://i.ytimg.com/vi/JIrquo9gD9c/maxresdefault.jpg">
            </div>
            <input class="slide-open" type="radio" id="slide-2" 
                  name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="https://i.ytimg.com/vi/JIrquo9gD9c/maxresdefault.jpg">
            </div>
            <input class="slide-open" type="radio" id="slide-3" 
                  name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="https://i.ytimg.com/vi/JIrquo9gD9c/maxresdefault.jpg">
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
            <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-start w-100 h-75" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
            <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-start w-100 h-75" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
            <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-start w-100 h-75" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
      <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="card-img-top " alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
 
  

    <div class="card" style="width: 18rem;margin-left: 5%;">
      <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  

    <div class="card" style="width: 18rem;margin-left: 5%;">
      <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
 

    <div class="card" style="width: 18rem;margin-left: 5%;">
      <img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  
</div>

<div class="circulo mt-4">
<img style="margin-left: 10%;" src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-circle p-4" alt="...">
<img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-circle p-4 " alt="...">
<img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-circle p-4 " alt="...">
<img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-circle p-4 " alt="...">
<img src="https://img.freepik.com/foto-gratis/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" class="img-fluid rounded-circle p-4 " alt="...">
</div>


</div>
</div>
<footer class="footer">
  <footer class="bg-rgb2 text-white text-center text-lg-start">
   
    <div class="container p-4">
    
      <div class="row">
   
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>
  
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
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