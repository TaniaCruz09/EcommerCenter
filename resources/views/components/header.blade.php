<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="misestilos.css">
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white  border-4 border-bottom form-control-md "  id="navbarResponsive" >
      
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img class="me-2" src="./assets/logo.png" width="150" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-3" aria-current="page" href="/"><b>Inicio</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="#"><b>Nosotros</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="{{ route('login')}}"><b>Acceder</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="{{ route('register')}}"><b>Registarse</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <b> Tiendas</b>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/index">Ropa</a></li>
            <li><a class="dropdown-item" href="#">Zapaterias</a></li>
            <li><a class="dropdown-item" href="#">Farmacia</a></li>
            <li><a class="dropdown-item" href="#">Pasteleria</a></li>
            <li><a class="dropdown-item" href="#">Tecnologia</a></li>
            <li><a class="dropdown-item" href="#">Ferreteria</a></li>
            <li><a class="dropdown-item" href="#">Vestidos de boda</a></li>
          </ul>
        </li>
        
      </ul>
      <style>
        .form-control-lg{
          border: solid 2px blueviolet;
        }
        .form-control-lg:focus{
          border: solid 2px rgb(255, 222, 75);
          outline: none;
        }
      </style>
      <form class="d-flex" role="search">
      <input class=" me-5 form-control-lg" type="search" placeholder="Busca en Ecommercenter" aria-label="Search" style="width:350px; height:50px;" input-borde>
        <a class="navbar-brand" href="#">
            <img class="justify-content-end" src="./assets/carrito.png" width="40" height="40" alt="" >
        </a>
      </form>
    </div>
  </div>
</nav>
</body>
<script src="./js/bootstrap.bundle.min.js"></script>
</html>