<?php

include_once 'conex.php';
		$nombre=$_POST['nombre'];
        $app=$_POST['app'];
        $apm=$_POST['apm'];
		$edad=$_POST['edad'];
        $direccion=$_POST['direccion'];


$sql="insert into users(id_user, nombre, app, apm, edad, direccion)
        values(NULL, :nombre, :app, :apm, :edad, :direccion)";
        
        $sql = $con->prepare($sql);

        $sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
        $sql->bindParam(':app',$app,PDO::PARAM_STR, 25);
        $sql->bindParam(':apm',$apm,PDO::PARAM_STR, 25);
        $sql->bindParam(':edad',$edad,PDO::PARAM_INT);
        $sql->bindParam(':direccion',$direccion,PDO::PARAM_STR,100);
        $sql->execute();
        
        
        echo"<script> alert('El USUARIO fue registrado correctamente');</script>";
        header('Location: form.html');
?>