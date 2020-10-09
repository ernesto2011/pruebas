<?php

	include_once 'conex.php';

	$sql = $con->prepare('SELECT * FROM productos');
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

            <h4>Panel de administración de productos</h4>
            </div>
            <div>
            <a href="form_prod.html">Agregar Producto</a>
            <a href="index.php">Regresar</a>
            </div>
      </nav>
</header>
<div class="contenedor">
    <table>
			<tr class="head">
				<td>Id </td>
                <td>Nombre</td>
                <td>No de serie</td>
                <td>Descripcion</td>
				
            </tr>
            <?php foreach($resultado as $fila):?>
				<tr>
					<td><?php echo $fila['id_productos']; ?></td>

                    <td><?php echo $fila['1']; ?></td>
                    <td><?php echo $fila['2']; ?></td>
					<td><?php echo $fila['3']; ?></td>
                    
				
				</tr>
			<?php endforeach ?>


		</table>

    </div>
    
</body>
</html>