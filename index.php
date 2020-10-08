
<?php

	include_once 'conex.php';

	$sql = $con->prepare('SELECT * FROM ventas');
	$sql->execute();
	$resultado = $sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ventas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
      <nav>
            <div class="container">

            <h4>Bienvenido</h4>
            </div>
            <div>
            <a href="users.php">Usuarios</a>
            <a href="productos.php">Productos</a>
            </div>
      </nav>
</header>
    <div class="contenedor">
    <table>
			<tr class="head">
				<td>Id venta</td>
                <td>id usuario</td>
                <td>Nombre Usuario</td>
                <td>id producto</td>
                <td>producto</td>
				<td>fecha</td>
				<td>hora</td>
			
				<td colspan="2">Acción</td>
            </tr>
            <?php foreach($resultado as $fila):?>
				<tr>
					<td><?php echo $fila['id_ventas']; ?></td>

                    <td><?php echo $fila['1']; ?></td>
                    <td>
                    <?php

                        include_once 'conex.php';
                        $user=$fila['1'];
                        $sql = "SELECT * FROM users where id_user=$user";
                        $query = $con -> prepare($sql);
                        $query -> execute();
                        $results = $query -> fetchAll(PDO::FETCH_OBJ);

                        if($query -> rowCount() > 0)   {
                            foreach($results as $result) {
                                echo $result -> nombre;
                            }
                        }
                        ?>
                    
                    </td>
                    <td><?php echo $fila['2']; ?></td>
                    <td>
                    <?php

                        include_once 'conex.php';
                        $user=$fila['2'];
                        $sql = "SELECT * FROM productos where id_productos=$user";
                        $query = $con -> prepare($sql);
                        $query -> execute();
                        $results = $query -> fetchAll(PDO::FETCH_OBJ);

                        if($query -> rowCount() > 0)   {
                            foreach($results as $result) {
                                echo $result -> nombre;
                            }
                        }
                        ?>
                    
                    </td>
					<td><?php echo $fila['3']; ?></td>
					<td><?php echo $fila['4']; ?></td>
				
					<td><a href="actualizar_registro.php?id=<?php echo $fila['id_vtas']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete_reg.php?id=<?php echo $fila['id_ventas']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>


		</table>

    </div>
    
</body>
</html>