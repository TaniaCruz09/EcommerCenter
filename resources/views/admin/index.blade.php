@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>EcommerCenter</h1>
@stop

@section('content')
    <p>Bienvendidos a este ecommerce virtual.</p>
    <div class="card">
        <div class="card-header bg-orange">
            <h1 class="card-title">Hola Bienvenidos a esta pagina web</h1>
        </div>
        <div class="card-body">
            Lorem ipsum dolor sit amet consectetur,
             adipisicing elit. In debitis modi,
              quas eius officiis doloremque quaerat laboriosam ab laudantium.
              Recusandae fugiat, iure totam accusantium mollitia tempore animi? In, saepe odio!
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
