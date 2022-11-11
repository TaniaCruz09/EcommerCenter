@extends('adminlte::page')
@section('content')
</div>
    <div class="container">

        @if (Session::has('mensaje'))
            <div class="alert alert-success" role="alert" class="text-center">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hiden="true">&times;</span>
                </button>
            </div>

        @endif
        <br>
        <a href="{{ url('categorias-productos/create') }}" class="btn btn-success"> Nueva Categoria</a>
        <br>
        <br>
        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>Categorias</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($categoriasProductos as $categoriaProductos)

                    <tr>
                        <td>{{$categoriaProductos->categoria_productos}}</td>
                        <td><a href="{{ url('/categorias-productos/' . $categoriaProductos->id . '/edit') }}"class="btn btn-info">
                                Editar </a>|
                            <form action="{{ url('/categorias-productos/' . $categoriaProductos->id) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('Estas seguro de eliminar esta categoria')"
                                    class="btn btn-danger" value="eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop