@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3 class="pull-left">TIPOS DE SOLICITUD</h3>
         <ul class="pull-right nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link success active" href="{{ action('ElementosController@create') }}">Crear</a>
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
            <th>Descripci&oacute;n</th>
            <th colspan="2">Accion</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tipos as $tipo)
          <tr>
            <td>{{$tipo['id']}}</td>
            <td>{{$tipo['descripcion']}}</td>
            <td><a href="{{action('ElementosController@edit', $elemento['id'])}}" class="btn btn-warning">Editar</a></td>
            <td>
              <form action="{{action('ElementosController@destroy', $elemento['id'])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Quitar</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      <a href="{{ action('ElementosController@create') }}" class="btn btn-success">Crear</a>

    </div>

</div>

@endsection