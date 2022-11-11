@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="categoria_productos"><h5>Nombre de la categoria:</h5></label><br>
    <input type="text" class="form-control" id="categoria_productos" name="categoria_productos"
        value="{{ isset($datos->categoria_productos) ? $datos->categoria_productos : old('categoria_productos') }}"><br>
</div>


<input type="submit" value="Guardar" class="btn btn-success">
<a  type="button" class="btn btn-primary" href="{{ url('categorias-productos/') }}"> Regresar </a>