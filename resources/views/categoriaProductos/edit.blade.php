
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar Categoria productos</h1>
        <form action="{{ url('categorias-productos/' . $datos->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('categoriaProductos.form')
        </form>
    </div>
@endsection