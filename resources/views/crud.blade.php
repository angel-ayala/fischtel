@extends('plantilla')

@section('content')

                        <div class="panel-body">
							<div class="pull-right">
								<a href="crearNodo.blade.php" class="btn btn-sm btn-primary">Registrar nuevo Nodo</a>
							</div><br>
							<hr>
                                    <table id="lookup" class="table table-bordered table-hover">  
	                                   <thead bgcolor="#eeeeee" align="center">
                                        <tr>
	  
                                        <th>ID</th>
	                                    <th>Operador </th>
                                        <th>Tipo </th>
                                        <th>Elemento</th>
                                        <th class="text-center"> Acciones </th> 
	  
                                       </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
                            
                        </div>
                        <!--/.content-->
           
            
@endsection