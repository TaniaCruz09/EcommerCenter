@extends('adminlte::page')
@section('content')
<div  class="container">
  <table class="table table-dark"> 
    <thead class="thead-light">
      <tr>
        <th  scope="col">#</th>
        <th  scope="col">Nombre</th>
        <th  scope="col">Direccion</th>
        <th  scope="col">correo</th>
        <th  scope="col">conraseña</th>
      </tr>
    </thead>
        <tbody>
          @foreach ($users as $users)
          <tr>
            <th scope="row">{{$users->id}}</th>
            <td >{{$users->name}}</td>
            <td >{{$users->adress}}</td>
            <td >{{$users->email}}</td>
            <td >{{$users->password}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@stop