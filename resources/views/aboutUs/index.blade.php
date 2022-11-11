<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div>
        <div>
            <img src="./assets/fondo1.jpg" class="img-fluid" alt="banner" style="width: 100%; height: 100%;">
        </div>

        <div style="width: 50%; margin-left: 25%">
            <h1 class="text-center" style="color: #d8860b; margin-top:20px;">¿Qué hacemos?</h1>
            <p class="text-center" style="margin-top:10px; margin-lef">Ofrecemos servicios en ventas online más realistas,
                 donde todos los negocios del país tengan la oportunidad de crear su propio
                  ecommerse con facilidad y rapidez, potencializando con ello su marca.</p>
                 
        </div>

        <div style="flex-direction: row; width:90%;">
          <img src="./assets/mision.jpg" class="rounded float-end " alt="imagen misión"  style="width:20%; height:40%; margin-top: -2%;">
        
            
            <div class="col-md-8" style="width: 40%; margin-left: 15%">
                <h5 class="card-title" style="margin-top: 20%; margin-left: -20%">Misión</h5>
                <p class="card-text" style="margin-left: -20%">Somos un grupo de desarrolladores dispuestos a facilitar el comercio de los pequeños, 
                medianos y grandes negocios   brindando herramientas tecnológicas para potenciar el crecimiento de estos y
                brindar así soluciones a las personas.</p>
              </div>

            </div>
            
         <img src="./assets/fondo2.jpg" class="img-fluid" alt="imagen central" style="width: 100%; margin-top: 50px;">
    </div>
    
    <div style="flex-direction: row; width:90%; display:inline-block">
        <img src="./assets/vision.jpg" class="rounded float-start" alt="imagen visión"  style="width:20%; height:50%; margin-top: 2%; margin-left: 7%; ">

        <div class="col-md-8" style="width: 40%; margin-left: 63%;">
            <h5 class="card-title" style="margin-top: 12%; margin-left: -20%">Visión</h5>
            <p class="card-text" style="margin-left: -20%">Ser líderes en la comercialización y creación de e-commerse para la 
                potencialización de las tiendas a nivel nacional.</p>
          </div>
          </div>

          @include('components.footer')
</body>
</html>