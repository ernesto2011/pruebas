<?php
	include_once 'conex.php';

    $id = $_GET['id_user'];

    $sentencia = $con->prepare("SELECT * FROM users WHERE id_user= ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Alumnos</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="contenedor">
		<h2>ACTUALIZACIÓN DE DATOS</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="hidden" name="id_user" value="<?php echo $persona->id_user; ?> " class="input__text" placeholder="Numero de lista" required>
            </div>
			<div class="form-group">
				<input type="text" name="nombre" value="<?php echo $persona->nombre; ?>" class="input__text" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <input type="text" name="app" value="<?php echo $persona->app; ?>" class="input__text" placeholder="Apellido paterno" required>  
			</div>
			<div class="form-group">
                <input type="text" name="apm" value="<?php echo $persona->apm; ?>" class="input__text" placeholder="Apellido materno" required>  
			</div>
			<div class="form-group">
				<input type="text" name="edad" value="<?php echo $persona->edad; ?>" class="input__text" required>
			</div>
			<div class="form-group">
				<input type="text" name="direccion" value="<?php echo $persona->direccion; ?>" class="input__text" required>
			</div>
			
			<div class="btn__group">
				<a href="consulta_alumnos.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Actualizar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>