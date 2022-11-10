<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('../css/storeDeatil.css') }}"/>
</head>
<body>
    <div class="container">
      <div class="containerB">
        <h2>Tiendas disponibles</h2>
        <div class="ubication">
          <h3>Nueva Guinea</h3>
        </div>
        <div class="containerStore">
          <div class="store">
            <div class="contenedorLogoYnombreDeTienda">
              <img src="image/image-removebg-preview.png" alt="" class="logo" />
              <h3>Tienda mi Rinconsito Nica</h3>
            </div>
            <p>
              somos una tienda que promueve la cultura nicaraguense, tenemos
              desde ropa <br />
              zapatos, sandalias y muchas artesanias increiblemente interesantes
              todo elaborado <br />
              por artesanos nicaraguense.
            </p>
            <hr />
            <div class="direcionTienda">
              <img
                class="marcadorDeDireccion"
                src="image/marcador-de-posicion.png"
                alt=""
              />
              <p>Frente al parque central, Nueva Guinea</p>
            </div>
            <p class="horario">
              abierto . Cierra a las 6:30 de lunes a domingo
            </p>
            <div>
              <button class="btn-tienda">
                <a href="tienda.html">Entrar</a>
              </button>
            </div>
          </div>
          <div class="masVendido">
            <h3>Lo mas vendido</h3>
            <div class="imgLoMasVendido">
              <img class="img-producto" src="image/Imagen 4.png" alt="" />
              <img class="img-producto" src="image/Imagen 5.png" alt="" />
            </div>
          </div>
        </div>


        <div class="containerStore">
          <div class="store">
            <div class="contenedorLogoYnombreDeTienda">
              <img src="image/image-removebg-preview.png" alt="" class="logo" />
              <h3>Tienda mi Rinconsito Nica</h3>
            </div>
            <p>
              somos una tienda que promueve la cultura nicaraguense, tenemos
              desde ropa <br />
              zapatos, sandalias y muchas artesanias increiblemente interesantes
              todo elaborado <br />
              por artesanos nicaraguense.
            </p>
            <hr />
            <div class="direcionTienda">
              <img
                class="marcadorDeDireccion"
                src="image/marcador-de-posicion.png"
                alt=""
              />
              <p>Frente al parque central, Nueva Guinea</p>
            </div>
            <p class="horario">
              abierto . Cierra a las 6:30 de lunes a domingo
            </p>
            <div>
              <button class="btn-tienda">
                <a href="tienda.html">Entrar</a>
              </button>
            </div>
          </div>
          <div class="masVendido">
            <h3>Lo mas vendido</h3>
            <div class="imgLoMasVendido">
              <img class="img-producto" src="image/Imagen 4.png" alt="" />
              <img class="img-producto" src="image/Imagen 5.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="publicidad">
        <h2>publicidad</h2>
      </div>
    </div>
    @include('layouts.footer')
</body>
</html>

    
