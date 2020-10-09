<?php

	include_once 'conex.php';

	$sql = $con->prepare('SELECT * FROM users');
	$sql->execute();
	$resultado = $sql->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
      <nav>
            <div class="container">

            <h4>Panel de administración de usuarios</h4>
            </div>
            <div>
            <a href="add_user.php">Agregar Usuario</a>
            <a href="index.php">Regresar</a>
            </div>
      </nav>
</header>
<div class="contenedor">
    <table>
			<tr class="head">
				<td>Id </td>
                <td>Nombre</td>
                <td>Apellido P</td>
                <td>Apellido M</td>
                <td>Edad</td>
				<td>Dirección</td>
				<td>Acción</td>
            </tr>
            <?php foreach($resultado as $fila):?>
				<tr>
					<td><?php echo $fila['id_user']; ?></td>

                    <td><?php echo $fila['1']; ?></td>
                    <td><?php echo $fila['2']; ?></td>
					<td><?php echo $fila['3']; ?></td>
                    <td><?php echo $fila['4']; ?></td>
                    <td><?php echo $fila['5']; ?></td>
				
					<td><a href="for_up.php?id_user=<?php echo $fila['id_user']; ?>"  class="btn__update" >Editar</a></td>
					
				</tr>
			<?php endforeach ?>


		</table>

    </div>
    
</body>
</html>