@extends('adminlte::page')
@section('content')
<div>
    @foreach ($categoriasProductos as $categoriaProductos)
        <td>
            <h1>{{$categoriaProductos->categoria_productos}}</h1>
        </td>
    @endforeach
</div>
@stop