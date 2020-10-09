<?php
  include 'conex.php';
  $id = $_POST['id_user'];
  $nombre = $_POST['nombre'];
  $app = $_POST['app'];
  $apm = $_POST['apm'];
  $edad = $_POST['edad'];
  $direccion = $_POST['direccion'];

    $sentencia = $con->prepare("UPDATE users SET nombre = ?, app = ?, apm = ?, edad = ?, direccion =? WHERE id_user = ?;");
    $resultado = $sentencia->execute([$nombre, $app, $apm, $edad, $direccion, $id]); # Pasar en el mismo orden de los ?
    if($resultado === TRUE){
    echo "Cambios guardados";
    header('Location: users.php');

    }else{ echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
    }
 ?>