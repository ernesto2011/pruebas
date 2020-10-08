<?php

include 'conex.php';

$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];

$sentencia = $bd->prepare("UPDATE users SET id_user = NULL, nombre = ?, app = ?, apm = ?, edad = ?, direccion = ?");
$resultado = $sentencia->execute([$nombre,$app,$apm,$edad, $direccion]);

if ($resultado === TRUE) {
    header('Location: users.php');
}else{
    echo "Error";
}

?>