<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalle de tiendas</title>
    <link rel="stylesheet" href="{{ asset('../css/storeDeatil.css') }}"/>
  </head>
  <body>
    @include('components.header')
    <div class="container-fluid">
      <div class="row">
        <div class="col-9 col-md-9">
          <h4>Tiendas disponibles</h4>
            <h4 class="p-1 mb-2 bg-secondary text-white d-flex justify-content-center">Nueva Guinea</h4>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <img src="./asset/logonicaraguita.png" alt="" class="logo" />
                  <h6>Tienda mi Rinconsito Nica</h6>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-8 col-md-8">
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
                            src="./asset/posicion.png"
                            alt=""
                          />
                          <p>Frente al parque central, Nueva Guinea</p>
                        </div>
                        <p class="horario">
                          abierto . Cierra a las 6:30 de lunes a domingo
                        </p>
                        <div class="d-flex justify-content-center">
                          <button class="btn btn-primary">
                            <a class="btn-tienda" href="#">Entrar</a>
                          </button>
                        </div>
                      </div>
                      <div class="col-3 col-md-3">
                        <h4>Lo mas vendido</h4>
                        <div class="imgLoMasVendido">
                          <img class="img-producto" src="./asset/Imagen 4.png" alt="" />
                          <img class="img-producto" src="./asset/Imagen 5.png" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <img src="./asset/logofashion.png" alt="" class="logo" />
                  <h6>Tienda EKO-MODA</h6>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12 col-md-8">
                        <p>
                          Somos una tienda que promueve la cultura nicaragüense, tenemos
                          desde ropa <br/>
                          zapatos, sandalias y muchas artesanias increiblemente interesantes
                          todo elaborado <br />
                          por artesanos nicaragüense.
                        </p>
                        <hr />
                        <div class="direcionTienda">
                          <img
                            class="marcadorDeDireccion img-fluid"
                            src="./asset/posicion.png"
                            alt=""
                          />
                          <p>Frente al parque central, Nueva Guinea</p>
                        </div>
                        <p class="horario">
                          Abierto . Cierra a las 6:30 de lunes a domingo
                        </p>
                        <div class="d-flex justify-content-center">
                          <button class="btn btn-primary">
                            <a class="btn-tienda" href="{{route('tienda')}}">Entrar</a>
                          </button>
                        </div>
                      </div>
                      <div class="col-3 col-md-3">
                        <h4>Lo mas vendido</h4>
                        <div class="imgLoMasVendido">
                          <img class="img-producto img-fluid" src="./assets/vestido.png" alt="mas vendido" />
                          <img class="img-producto img-fluid" src="./assets/carteraRosada.jpg" alt="mas vendido" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <img src="image/image-removebg-preview.png" alt="" class="./assets/logogato.jpg" />
                  <h6>Tienda el gato</h6>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12 col-md-8">
                        <p>
                          Somos una tienda que promueve la cultura nicaragüense, tenemos
                          desde ropa <br />
                          zapatos, sandalias y muchas artesanias increiblemente interesantes
                          todo elaborado <br />
                          por artesanos nicaragüense.
                        </p>
                        <hr />
                        <div class="direcionTienda">
                          <img
                            class="marcadorDeDireccion"
                            src="./asset/posicion.png"
                            alt=""
                          />
                          <p>Frente al parque central, Nueva Guinea</p>
                        </div>
                        <p class="horario">
                          Abierto . Cierra a las 6:30 de lunes a domingo
                        </p>
                        <div class="d-flex justify-content-center">
                          <button class="btn btn-primary">
                            <a class="btn-tienda" href="#">Entrar</a>
                          </button>
                        </div>
                      </div>
                      <div class="col-3 col-md-3">
                        <h3>Lo mas vendido</h3>
                        <div class="imgLoMasVendido">
                          <img class="img-producto" src="./asset/publicidad1.png" alt="" />
                          <img class="img-producto" src="./asset/publicidad2.png" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 col-md-3">
          <h3 class="d-flex justify-content-center">Publicidad</h3>
            <img class="img-publicidad img-fluid" src="./asset/publicidad1.jpg" alt="" />
            <img class="img-publicidad img-fluid" src="./asset/publicidad2.png" alt="" />
            <img class="img-publicidad img-fluid" src="./asset/publicidad3.png" alt="" />
        </div>
      </div>
    </div>
    @include('components.footer')
  </body>
</html>

    
