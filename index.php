<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Test Work</title>
	 <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
     <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link href="style.css" rel="stylesheet">
	 <script src="https://kit.fontawesome.com/85759e61e4.js" crossorigin="anonymous"></script>
	 <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	 <script src="funciones.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script> 
     <script type="text/javascript" src="alertifyjs/alertify.js"></script>
     <script type="text/javascript">
			function showHideDiv(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>


    
</head>

<body>
	
	<div class="container">
      <div id="tabla">
	
      </div>
      </div>
      <!-- Button register -->
				  
        <input style="background-color: #006969; color: #ffffff; 
	position: relative; top: -60px;
    position: relative;bottom: 10px;
    position: relative;right: 80px;
    position: relative;left: 400px; " type="button"value="Show/Hide" onClick="showHideDiv('tabla')"/><br>      

<!-- Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Usuario</h4>
      </div>
      <div class="modal-body">
      	<label>Nombre</label>
      	<input type="text" name="Name" id="Name" class="form-control input-sm">
      	<label>Apellido</label>
      	<input type="text" name="Lastname" id="Lastname" class="form-control input-sm">
      	<label>Fecha</label>
      	<input type="text" name="Fecha" id="Fecha" class="form-control input-sm">
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="Agregar">Agregar</button>
      </div>
    </div>
  </div>
</div>


<!-- Button edition -->


<!-- Modal para editar -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>
      </div>
      <div class="modal-body">
      	<div style="visibility:hidden">
      	<input type="text"  id="idpersona" name="">
      	</div>
      	<label>Nombre</label>
      	<input type="text" name="Name" id="Name2" class="form-control input-sm">
      	<label>Apellido</label>
      	<input type="text" name="Lastname" id="Lastname2" class="form-control input-sm">
      	<label>Fecha</label>
      	<input type="text" name="Fecha" id="Fecha2" class="form-control input-sm">
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="Actualizar">Actualizar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
    $('#tabla').load('tabla.php');
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
      $('#Agregar').click(function(){
      	Name =$('#Name').val();
      	Lastname =$('#Lastname').val();
      	Fecha =$('#Fecha').val();
      agregardatos(Name,Lastname,Fecha);
      });

      $('#Actualizar').click(function(){
      	actualizadatos();
      });
	});
</script>


