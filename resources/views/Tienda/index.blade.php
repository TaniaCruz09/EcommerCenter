<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@include('components.header')
@section('content')
<body>
<h1 class="text-center">Bienvenido a EKO-MODA sera un placer atenderte</h1>
<img class="rounded mx-auto d-block" src="./assets/banner.jpeg" width="80%" height="70%" alt="">
   <div class="row wrap border  border-white cold-auto p-1  justify-content-center" style="margin: 30px;" >

    <div class="rounded col-xs-6 col-md-4 border border-2 border-warning " style= "width:280px;  height:320px; margin: 3px;" >
        <img class="img-fluid" src="./assets/camisa.jpg" width="90%" height="100%"  alt="">
        <p class=""><b>Camiseta<br> C$ 80</b></p>
   </div>
    <div class="rounded col-xs-6 col-md-4 border border-2 border-warning" style= "width:280px;  height:320px; margin: 3px;">
    <img class="" src="./assets/traje.jpg" width="90%" height="80%"  alt="">
        <p class=""> <b>Trage de varon<br> C$ 80</b></p>
   </div>
    <div class="rounded border border-2 border-warning" style= "width:280px;  height:320px; margin: 3px;">
        <img class="" src="./assets/vestido.png" width="90%" height="80%"  alt="">
        <img class="float-left" src="./assets/varon.jpg" width="15px" alt="">
        <p class=""> <b>Vestido para niña<br> C$ 380</b></p>    
   </div>
    <div class="rounded border border-2 border-warning" style= "width:280px;  height:320px; margin: 3px;">
        <img class="" src="./assets/camisetaNegra.jpg" width="90%" height="80%" margin="120px" alt="">
        <p class=""> <b>Camiseta<br> C$ 80</b></p>
   </div>
   </div>
   <div class="row border  border-white cold-auto p-1  justify-content-center" style="margin: 30px;" >
    <div class="rounded col-xs-6 col-md-4 border border-2 border-warning " style= "width:280px;  height:320px; margin: 3px;" >
        <img class="img-fluid" src="./assets/carteraRosada.jpg" width="90%" height="100%"  alt="">
        <p class=""><b>Camiseta<br> C$ 80</b></p>
   </div>
    <div class="rounded col-xs-6 col-md-4 border border-2 border-warning" style= "width:280px;  height:320px; margin: 3px;">
    <img class="" src="./assets/carteraVaron.jpg" width="90%" height="80%"  alt="">
        <p class=""> <b>Trage de varon<br> C$ 80</b></p>
   </div>
    <div class="rounded border border-2 border-warning" style= "width:280px;  height:320px; margin: 3px;">
        <img class="" src="./assets/blusa.jpg" width="90%" height="80%"  alt="">
        <p class=""> <b>Vestido para niña<br> C$ 380</b></p>
   </div>
    <div class="rounded border border-2 border-warning" style= "width:280px;  height:320px; margin: 3px;">
        <img class="" src="./assets/cartera.jpg" width="90%" height="80%"  alt="">
        <p class=""> <b>Camiseta<br> C$ 80</b></p>
   </div>
   </div>
   <div class="col text-center " style="margin: 20px;">
   <button type="button" class="me-5 btn btn-primary btn-lg " >Contactar</button>
   <button type="button" class=" btn btn-warning btn-lg" style="width: 140px;">Salir</button>
   </div>
</body>
</html>
