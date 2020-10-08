<?php 

	include_once 'conex.php';
    
    if(isset($_GET['id'])){
		$id = (int) $_GET['id'];
		$delete = $con->prepare('DELETE FROM ventas WHERE id_ventas=:id');
		$delete->execute(array(':id'=>$id));
		
		header('Location: index.php');
	}else{
		header('Location: index.php');
	}
 ?>