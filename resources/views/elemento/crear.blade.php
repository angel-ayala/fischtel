@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
    	<h3>CREAR ELEMENTO DE SOLICITUD</h3>
	</div>
  	<div class="card-body">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <form class="register-form" method="POST" action="{{ url('elementos') }}">

                {{ csrf_field() }}
                <label for="descripcion">Descripcion</label>

                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" aria-describedby="nameHelpText" required autofocus>

                @if ($errors->has('descripcion'))
                    <span class="help-text" id="nameHelpText">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                @endif
                
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
