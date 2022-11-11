@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Registrar Nuva Categoria de Tienda</h1>
    <form action="{{ url('/categorias') }}" method="post" enctype="multipart/form-data">
    @csrf

    @include('categoriaTiendas.form')

</form>
</div>
@endsection