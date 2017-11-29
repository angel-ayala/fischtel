@extends('layouts')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Nodo</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="formUsuario">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="operador" class="col-md-4 control-label">Operador</label>

                            <div class="col-md-6">
                                <input id="operador" type="text" class="form-control" name="operador" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipo" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                <input id="tipo" type="tipo" class="form-control" name="tipo" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="elemento" class="col-md-4 control-label">Elemento</label>

                            <div class="col-md-6">
                                <input id="elemento" type="elemento" class="form-control" name="elemento" required>
                            </div>
                        </div>

                        
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-primary" id="BtnUsuario">
                                    Crear Usuario
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection