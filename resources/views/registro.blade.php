<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <?php include("head.php");?>
    </head>
    <body>
       <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="http://obedalvarado.pw/" target="_blank">Sistemas Web</a>
                   
                   
                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            
            
            <blockquote>
            Agregar Nodo
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registro.blade.php" method="POST" >
										<div class="control-group">
											<label class="control-label" for="nombres">Operador</label>
											<div class="controls">
												<input type="text" name="nombres" id="nombres" placeholder="Nombres del cliente" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="telefono">Tipo</label>
											<div class="controls">
												<input type="text" name="telefono" id="telefono" placeholder="Teléfono del cliente" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="email">Elemento</label>
											<div class="controls">
												<input name="email" id="email" class="form-control span8 tip" type="email" placeholder="Correo electrónico"  required />
											</div>
										</div>

									                                      
                                      

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="plantilla.blade.php" class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"> FISCHTEL </a> </center>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      
    </body>
