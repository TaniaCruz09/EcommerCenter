<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tienda</title>
    {{-- <link rel="stylesheet" href="{{ asset('../css/storeDeatil.css') }}"/> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('components.header')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-4 col-md-4">
                    <form class="d-flex">
                        <label for="logo">Agrega logo de tu tienda</label>
                        <input type="image" id="image"src="./asset/imagenInput.png" style="width: 10%; height:10%; margin-left:10px">
                    </form>
                </div>
                <div class="col-xs-4 col-md-4">
                    <form class="d-flex">
                        <label for="banner">Agrega banner de tu tienda</label>
                        <input type="image" id="image" src="./asset/imagenInput.png" style="width: 10%; height:10%; margin-left:10px" > 
                    </form>
                </div> 
            </div>
    </div>
        <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('crearTienda') }}" style="margin-top: 40px">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 text-md-end">{{ __('Nombre de la tienda') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="categorias" class="col-md-4 col-form-label text-md-end">Categorias:</label>
                        <br>
                        <div class="col-md-6">
                        <select class="form-control @error('categoria_tiendas_id') is-invalid @enderror"
                        name='categoria_tiendas_id'
                        id ='categorias_tiendas'
                        />
                        <option value="" selected disabled>--seleccione--</option>
                        
                        @foreach ($categorias as $categoriaTienda)
                        <option value="{{$categoriaTienda->id}}">{{$categoriaTienda->categoria}}</option>
                        @endforeach 
                        </div>  
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico de tienda') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="current-email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                        <div class="col-md-6">
                            <input id="descripcion" type="descripcion" class="form-control @error('descripcion') is-invalid @enderror" name="password" required autocomplete="current-descripcion">

                            @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {{-- <button type="submit" class="btn btn-primary">
                                {{ __('Siguiente') }}
                            </button> --}}
                            <button class="btn btn-primary">
                                <a href="{{route('crearTiendaParteII')}}" style="text-decoration: none; color:#fff">Entrar</a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    @include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>