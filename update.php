<?php
 include 'conexion.php';

{

    $id_user = $_POST['id_user'];
    $Name = $_POST['Name'];
    $Lastname = $_POST['Lastname'];
    $Fecha =  $_POST['Fecha'];
    
    
   $mysqli->query ("UPDATE users SET Name = '$Name',
   	                                Lastname ='$Lastname',
   	                                Fecha = '$Fecha'
   	                                WHERE (id_user = '$id_user')") or die($mysqli->error);
    }