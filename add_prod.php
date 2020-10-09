<?php
include_once 'conex.php';
$nombre=$_POST['nombre'];
$N_serie=$_POST['N_serie'];
$desc=$_POST['desc'];

$sql="insert into productos(id_productos, nombre, no_de_serie, descripcion)
values(NULL, :nombre, :N_serie, :desc)";

$sql = $con->prepare($sql);

$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
$sql->bindParam(':N_serie',$N_serie,PDO::PARAM_STR, 25);
$sql->bindParam(':desc',$desc,PDO::PARAM_STR, 25);
$sql->execute();


echo"<script> alert('El producto fue registrado correctamente');</script>";
header('Location: productos.php');

?>