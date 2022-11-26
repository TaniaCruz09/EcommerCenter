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
            <div class="row">
                <form method="POST" action="{{ route('crearTienda') }}" style="margin-top: 40px">
                    @csrf
                    <div class="row mb-3">
                        <label for="direccion" class="col-md-4 col-form-label text-md-end">{{ __('Direccion de tu tienda') }}</label>

                        <div class="col-md-6">
                            <input id="direccion" type="direccion" class="form-control @error('categoria_tiendas_id') is-invalid @enderror" name="direccion" required autocomplete="current-direccionhora_apertura">

                            @error('categoria_tiendas_id')dias_disponibles
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="hora_apertura" class="col-md-4 col-form-label text-md-end">{{ __('Hora de atencion') }}</label>

                        <div class="col-md-6">
                            <input id="hora_apertura" type="hora_apertura" class="form-control @error('hora_apertura') is-invalid @enderror" name="hora_apertura" required autocomplete="current-hor_apertura">

                            @error('hora_apertura')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dias_disponibles" class="col-md-4 col-form-label text-md-end">{{ __('Dias disponibles') }}</label>

                        <div class="col-md-6">
                            <input id="dias_disponibles" type="dias_disponibles" class="form-control @error('dias_disponibles') is-invalid @enderror" name="dias_disponibles" required autocomplete="current-dias_disponibles">

                            @error('dias_disponibles')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary">
                                <a href="{{route('tienda')}}" style="text-decoration: none; color:#fff">Crear</a>
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