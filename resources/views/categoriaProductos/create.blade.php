@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Registrar Nuva Categoria de productos</h1>
    <form action="{{ url('/categorias-productos') }}" method="post" enctype="multipart/form-data">
    @csrf

    @include('categoriaProductos.form')

</form>
</div>
@endsection