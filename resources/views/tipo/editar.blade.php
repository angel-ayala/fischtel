@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3>EDITAR TIPO DE ELEMENTO</h3>
	</div>
  	<div class="card-body">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <form class="register-form" method="POST" action="{{ route('tipos.update', $id) }}">

                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                
                <div class="form-group">  
                    <label for="descripcion">Descripcion</label>
    
                    <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{ $tipo['descripcion'] }}" aria-describedby="nameHelpText" required autofocus>
    
                    @if ($errors->has('descripcion'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">  
                    <label for="descripcion">Cantidad de atributos</label>
    
                    <input id="descripcion" type="text" class="form-control" name="cantidad_atributos" value="{{ $tipo['cantidad_atributos'] }}" aria-describedby="nameHelpText" required>
    
                    @if ($errors->has('cantidad_atributos'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('cantidad_atributos') }}</strong>
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