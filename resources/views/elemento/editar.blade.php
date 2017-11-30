@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3>EDITAR ELEMENTO DE RED</h3>
	</div>
  	<div class="card-body">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <form class="register-form" method="POST" action="{{ route('elementos.update', $id) }}">

                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                <div class="form-group">  
                    <label for="nombre">Nombre</label>
    
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $elemento['nombre'] }}" aria-describedby="nameHelpText" required autofocus>
    
                    @if ($errors->has('nombre'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">  
                    <label for="numero_serie">Nro Serie</label>
    
                    <input id="numero_serie" type="text" class="form-control" name="numero_serie" value="{{ $elemento['numero_serie'] }}" aria-describedby="nameHelpText" required autofocus>
    
                    @if ($errors->has('numero_serie'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('numero_serie') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">              
                    <label for="id_tipo">Tipo</label>
                    <select id="id_tipo" class="form-control" name="id_tipo" aria-describedby="tipoHelpText" required>
                        <option value="">-- Seleccione --</option>
                        @foreach ($tipos as $tipo)
                            @php
                            $check = "";
                            if($elemento['id_tipo'] == $tipo['id']){
                                $check = " selected";
                            }
                            @endphp
                            <option value="{{ $tipo['id'] }}" {{ $check }}>{{ $tipo['descripcion'] }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('id_tipo'))
                        <span class="help-text" id="tipoHelpText">
                            <strong>{{ $errors->first('id_tipo') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">              
                    <label for="id_operador">Operador</label>
                    <select id="id_operador" class="form-control" name="id_operador" aria-describedby="tipoHelpText" required>
                        <option value="">-- Seleccione --</option>
                        @foreach ($operadores as $operador)
                            @php
                            $check = "";
                            if($elemento['id_operador'] == $operador['id']){
                                $check = " selected";
                            }
                            @endphp
                            <option value="{{ $operador['id'] }}" {{ $check }}>{{ $operador['nombre'] }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('id_operador'))
                        <span class="help-text" id="tipoHelpText">
                            <strong>{{ $errors->first('id_operador') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">  
                	<label for="descripcion">Descripción</label>
                    <textarea id="descripcion" class="form-control" name="descripcion" aria-describedby="nameHelpText" required autofocus>{{ $elemento['descripcion'] }}</textarea>

                    @if ($errors->has('descripcion'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">              
                    <label for="elementoA">Elemento A</label>
                    <select id="elementoA" class="form-control" name="elementoA" aria-describedby="tipoHelpText">
                        <option value="">-- Seleccione --</option>
                        @foreach ($elementosa as $elm)
                            @php
                            $check = "";
                            if(isset($elemento['nodo_a']) && $elemento['nodo_a']['id'] == $elm['id']){
                                $check = " selected";
                            }
                            @endphp
                            <option value="{{ $elm['id'] }}" {{ $check }}>{{ $elm['nombre'] }} [{{ $elm['numero_serie'] }}]</option>
                        @endforeach
                    </select>
                    @if ($errors->has('elementoA'))
                        <span class="help-text" id="tipoHelpText">
                            <strong>{{ $errors->first('elementoA') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">              
                    <label for="elementoB">Elemento B</label>
                    <select id="elementoB" class="form-control" name="elementoB" aria-describedby="tipoHelpText">
                        <option value="">-- Seleccione --</option>
                        @foreach ($elementosb as $elm)
                            @php
                            $check = "";
                            if($elemento['elementoB'] == $elm['id']){
                                $check = " selected";
                            }
                            @endphp
                            <option value="{{ $elm['id'] }}" {{ $check }}>{{ $elm['nombre'] }} [{{ $elm['numero_serie'] }}]</option>
                        @endforeach
                    </select>
                    @if ($errors->has('elementoB'))
                        <span class="help-text" id="tipoHelpText">
                            <strong>{{ $errors->first('elementoB') }}</strong>
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