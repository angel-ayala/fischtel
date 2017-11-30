@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3 class="pull-left">OPERADORES</h3>
         <ul class="pull-right nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link success active" href="{{ route('operadores.create') }}">Crear</a>
          </li>
        </ul>
	</div>
  	<div class="card-body">

        @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
         @endif
        <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Representante Legal</th>
            <th>Estado</th>
            <th colspan="2">Accion</th>
          </tr>
        </thead>
        <tbody>
          @foreach($operadores as $operador)
          <tr>
            <td>{{$operador['id']}}</td>
            <td>{{$operador['nombre']}}</td>
            <td>{{$operador['representante_legal']}}</td>
            <td>{{$operador['estado'] == 1 ? 'ACTIVO' : 'INACTIVO'}}</td>
            <td><a href="{{ route('operadores.edit', $operador['id']) }}" class="btn btn-warning">Editar</a></td>
            <td>
              <form action="{{ route('operadores.destroy', $operador['id']) }}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Quitar</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      <a href="{{ route('operadores.create') }}" class="btn btn-success">Crear</a>

    </div>

</div>

@endsection