@extends('adminlte::page')
@section('content')
<div>
    @foreach ($categoriasTiendas as $categoriaTienda)
        <td>
            <h1>{{$categoriaTienda->categoria}}</h1>
        </td>
    @endforeach
</div>
@stop