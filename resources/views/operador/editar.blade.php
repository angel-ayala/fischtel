@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3>EDITAR TIPO DE ELEMENTO</h3>
	</div>
  	<div class="card-body">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <form class="register-form" method="POST" action="{{ route('operadores.update', $id) }}">

                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                
                <div class="form-group">  
                    <label for="nombre">Nombre</label>
    
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $operador['nombre'] }}" aria-describedby="nameHelpText" required autofocus>
    
                    @if ($errors->has('nombre'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">  
                    <label for="representante_legal">Representante Legal</label>
    
                    <input id="representante_legal" type="text" class="form-control" name="representante_legal" value="{{ $operador['representante_legal'] }}" aria-describedby="nameHelpText" required autofocus>
    
                    @if ($errors->has('representante_legal'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('representante_legal') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">  
                    <label for="estado">Estado</label>
                    
                    <select name="estado" id="estado" required>
                    	<option value="1" {{$operador['estado'] == 1 ? "selected" : ""}} >Activo</option>
                    	<option value="0" {{$operador['estado'] == 0 ? "selected" : ""}} >Inactivo</option>
                    </select>
    
                    @if ($errors->has('estado'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('estado') }}</strong>
                        </span>
                    @endif
                </div>
               
                
                  @if (\Session::has('success'))
                  <div class="alert alert-success">
                      <p>{{ \Session::get('success') }}</p>
                  </div><br />
                  @endif

                <div class="update_button">
                    <button type="submit" class="button">
                        Actualizar
                    </button>
                </div>


            </form>

        </div>

    </div>
    </div>

</div>

@endsection