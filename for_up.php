<?php
	include_once 'conex.php';
	global $resultado;

	if(isset($_GET['id_user'])){
		$id = (int) $_GET['id_user'];

		$sql = $con->prepare('SELECT * FROM users WHERE id_user=:id');
		$sql->execute(array(
			':id'=>$id
		));
		$resultado = $sql->fetch();
	}else{
		header('Location: index.php');
	}
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
		<form action="load_db.php" method="post" name="formulario">

			<div class="form-group">
				<input type="hidden" name="id_alumno"  value="<?php if($resultado) echo $resultado['id_user']; ?>" class="input__text" required>
            </div>

			<div class="form-group">
				<input type="text" name="nombre" id="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text" required>
            </div>

            <div class="form-group">
        	    <input type="text" name="app" id="app" value="<?php if($resultado) echo $resultado['app']; ?>" class="input__text" required>
			</div>

			<div class="form-group">
                <input type="text" name="apm" id="apm" value="<?php if($resultado) echo $resultado['apm']; ?>" class="input__text" required>
			</div>

			<div class="form-group">
				<input type="text" name="edad" id="fecha_n" value="<?php if($resultado) echo $resultado['edad']; ?>" class="input__text" required>
            </div>
            <div class="form-group">
				<input type="text" name="direccion" id="direccion" value="<?php if($resultado) echo $resultado['direccion']; ?>" class="input__text" required>
			</div>

			<div class="btn__group">
				<a href="consulta_alumnos.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Actualizar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>