@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3>CREAR OPERADOR</h3>
	</div>
  	<div class="card-body">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <form class="register-form" method="POST" action="{{ url('operadores') }}">

                {{ csrf_field() }}
                <div class="form-group">  
                    <label for="descripcion">Nombre</label>
    
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" aria-describedby="nameHelpText" required autofocus>
    
                    @if ($errors->has('nombre'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">  
                    <label for="descripcion">Representante Legal</label>
    
                    <input id="representante_legal" type="text" class="form-control" name="representante_legal" value="{{ old('representante_legal') }}" aria-describedby="nameHelpText" required autofocus>
    
                    @if ($errors->has('representante_legal'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('representante_legal') }}</strong>
                        </span>
                    @endif
                </div>
                
                  @if (\Session::has('success'))
                  <div class="alert alert-success">
                      <p>{{ \Session::get('success') }}</p>
                  </div><br />
                  @endif

                <div class="register_button">
                    <button type="submit" class="button">
                        Crear
                    </button>
                </div>


            </form>

        </div>

    </div>
    </div>

</div>

@endsection
