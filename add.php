<?php
 include 'conexion.php';

{

    $idpersona = $_POST['id_user'];
    $Name = $_POST['Name'];
    $Lastname = $_POST['Lastname'];
    $Fecha =  $_POST['Fecha'];
    
    
   $mysqli->query("INSERT INTO users (id_user,Name,Lastname,Fecha)  VALUES('$idpersona','$Name','$Lastname','$Fecha')") or die($mysqli->error);
    }