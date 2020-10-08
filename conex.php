<?php
    $database = "bd_pruebas";
    $user = "root";
    $password = "";

    try {

        $con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
        $con->exec("SET CHARACTER SET utf8");

    } catch (PDOException $e) {
	    echo "Error".$e->getMessage();
    }

?>