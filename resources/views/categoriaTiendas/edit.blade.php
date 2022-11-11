@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar Categoria Tienda</h1>
        <form action="{{ url('categorias/' . $datos->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('categoriaTiendas.form')
        </form>
    </div>
@endsection