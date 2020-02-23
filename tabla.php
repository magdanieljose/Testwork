<?php
require_once "conexion.php";
              $mysqli = new mysqli('localhost','root','','worktest')or die(mysqli_error($mysqli));

?>

<div class="row">
	<div class="col-sm-12">
		<h2> Tabla Usuarios</h2>
		<table class="table table-hover table-condensed table-bordered">
			<caption>
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar Usuario
					<i class="fas fa-plus"></i>
				</button>

			</caption>
			<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Fecha</td>
			<td>Editar</td>
			<td>Eliminar</td>
			</tr>
			<?php
    $result = $mysqli->query("SELECT * FROM  users")or die($mysqli->error);
    while($row = $result->fetch_assoc()){

             
      $datos=
             $row['id_user']."||".
             $row['Name']."||".
             $row['Lastname']."||".
             $row['Fecha'];

    ?>

           <tr>
			<td><?php echo $row['Name']?></td>
			<td><?php echo $row['Lastname']?></td>
			<td><?php echo $row['Fecha']?></td>
			<td><button class="btn btn-warning">
<i class="fas fa-edit" data-toggle="modal" data-target="#modalEdit" onclick="agregaform('<?php echo $datos ?>')"></i> 
			</button>
			</td>
			<td><button class="btn btn-danger" onclick="preguntarSioNo('<?php echo $row['id_user']?>')">
			<i class="fas fa-trash-alt"></i>	
			</button></td>
			</tr>
			<?php
		} ?>
		</table>
	</div>