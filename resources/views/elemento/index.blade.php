@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3 class="pull-left">ELEMENTOS DE RED</h3>
         <ul class="pull-right nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link success active" href="{{ route('elementos.create') }}">Crear</a>
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
            <th>Serie</th>
            <th>Tipo</th>
            <th>Operador</th>
            <th>Elemento A</th>
            <th>Elemento B</th>
            <th colspan="2">Accion</th>
          </tr>
        </thead>
        <tbody>
          @foreach($elementos as $elemento)
          <tr>
            <td>{{$elemento['id']}}</td>
            <td>{{$elemento['nombre']}}</td>
            <td>{{$elemento['numero_serie']}}</td>
            <td>{{$elemento['tipo']['descripcion']}}</td>
            <td>{{$elemento['operador']['nombre']}}</td>
            <td>
            	@if(isset($elemento['nodo_a']))
            	{{$elemento['nodo_a']['nombre']}} [{{$elemento['nodo_a']['numero_serie']}}]
            	@else 
            	Sin Elemento
				@endif				
			</td>
            <td>
            	@if(isset($elemento['nodo_b']))
            	{{$elemento['nodo_b']['nombre']}} [{{$elemento['nodo_b']['numero_serie']}}]
            	@else 
            	Sin Elemento
				@endif				
			</td>
            <td><a href="{{route('elementos.edit', $elemento['id'])}}" class="btn btn-warning">Editar</a></td>
            <td>
              <form action="{{route('elementos.destroy', $elemento['id'])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Quitar</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      <a href="{{ route('elementos.create') }}" class="btn btn-success">Crear</a>

    </div>

</div>

@endsection