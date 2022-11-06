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
    <label for="categoria"><h5>Nombre de la categoria:</h5></label><br>
    <input type="text" class="form-control" id="categoria" name="categoria"
        value="{{ isset($datos->categoria) ? $datos->categoria : old('categoria') }}"><br>
</div>


<input type="submit" value="Guardar" class="btn btn-success">
<a  type="button" class="btn btn-primary" href="{{ url('categorias/') }}"> Regresar </a>