<?php
include 'conexion.php';
$id_user= $_POST['id_user'];

    $mysqli->query ("DELETE FROM users WHERE (id_user = '$id_user')") or die ($mysqli->error());

