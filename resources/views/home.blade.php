<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('../css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('components.header')
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-md-8">
            <h1 style="font-weight: 300px">Estas listo para formar parte de</h1>
            <p style="font-size: 50px; margin:10px 0; color: darkorange; font-weight:300px" class="big-text">ecommercenter</p>
            <p>compra o crea tu tienda ya!!!</p>
            <a class="btn btn-first" href="{{route('login')}}" style="margin: 30px 10px; width:150px; padding:10px; border-radius:10px; background-color: darkblue; color:#fff; text-decoration:none">Acceder</a>
            <a class="btn btn-second" href="{{route('crearTienda')}}" style="margin: 30px 10px; width:150px; padding:10px; border-radius:10px; background-color: darkorange; color:#fff; text-decoration:none">Crear Tienda</a>
        </div>
        <div class="col-xs-3 col-md-3">
            <img src="./asset/imagen.png">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>categorias</h2>
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <img class="img-publicidad" src="./asset/general.png" alt="">
                        <h5 class="d-flex justify-content-center">General</h5>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <a href="/storeDetail" style="text-decoration: none; color:black">
                            <img class="img-publicidad" src="./asset/ropa.png" alt="">
                            <h5 class="d-flex justify-content-center">Ropa</h5>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <img class="img-publicidad" src="./asset/zapatos.png" alt="">
                        <h5 class="d-flex justify-content-center">Zapaterias</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <img class="img-publicidad" src="./asset/fereteria.png" alt="">
                        <h5 class="d-flex justify-content-center">Ferreteria</h5>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <img class="img-publicidad" src="./asset/panaderia.png" alt="">
                        <h5 class="d-flex justify-content-center">Panaderia</h5>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <img class="img-publicidad" src="./asset/pasteleria.png" alt="">
                        <h5 class="d-flex justify-content-center">Pasteleria</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-4">
                        <img class="img-publicidad" src="./asset/comidarapida.png" alt="">
                        <h5>Comida rapida</h5>
                    </div>
                    <div class="col-xs-2 col-md-4">
                        <img class="img-publicidad" src="./asset/laptops.png" alt="">
                        <h5 class="d-flex justify-content-center">Computadoras</h5>
                    </div>
                    <div class="col-xs-2 col-md-4">
                        <img class="img-publicidad" src="./asset/vestidos.png" alt="">
                        <h5 class="d-flex justify-content-center">Vestidos especiales</h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <h3 class="d-flex justify-content-center">Publicidad</h3>
                <img class="img-publicidad " src="./asset/publicidad1.jpg" alt="" />
                <img class="img-publicidad " src="./asset/publicidad2.png" alt="" />
                <img class="img-publicidad " src="./asset/publicidad3.png" alt="" />
            </div>
        </div>
    </div>
</div>
@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
