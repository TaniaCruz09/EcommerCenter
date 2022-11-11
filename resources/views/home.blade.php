<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <h1>...........Aqui ira el header..........</h1>
    </header>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8" style="margin-top: 50px">
            <h1 style="font-weight: 300px">Estas listo para formar parte de</h1>
            <p style="font-size: 50px; margin:10px 0; color: darkorange; font-weight:300px" class="big-text">ecommercenter</p>
            <p>compra o crea tu tienda ya!!!</p>
            <a class="btn btn-first" href="/login" style="margin: 30px 10px; width:150px; padding:10px; border-radius:10px; background-color: darkblue; color:#fff; text-decoration:none">Acceder</a>
            <a class="btn btn-second" href="#" style="margin: 30px 10px; width:150px; padding:10px; border-radius:10px; background-color: darkorange; color:#fff; text-decoration:none">Crear Tienda</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <img src="./asset/imagen.png">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h2>categorias</h2>
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <img src="./asset/general.png" alt="">
                        <h4>holi 1</h4>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <a href="/storeDetail" style="text-decoration: none; color:black">
                            <img src="./asset/zapatos.png" alt="">
                            <h4>fdshds</h4>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <img src="./asset/ropa.png" alt="">
                        <h4>fdshds</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <img src="./asset/zapatos.png" alt="">
                        <h4>holi 1</h4>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <img src="./asset/zapatos.png" alt="">
                        <h4>fdshds</h4>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <img src="./asset/zapatos.png" alt="">
                        <h4>fdshds</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-4">
                        <img src="./asset/zapatos.png" alt="">
                        <h4>holi 1</h4>
                    </div>
                    <div class="col-xs-2 col-md-4">
                        <img src="./asset/zapatos.png" alt="">
                        <h4>fdshds</h4>
                    </div>
                    <div class="col-xs-2 col-md-4">
                        <img src="./asset/zapatos.png" alt="">
                        <h4>fdshds</h4>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <h2>publicidad</h2>
            </div>
        </div>
    </div>
</div>
    @include('layouts.footer')
    
</body>
</html>
