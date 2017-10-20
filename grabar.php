<?php

    //Recuperar valores
    if (isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $msg = $_POST["mensaje"];
    
       
        $mysqli = new mysqli("localhost", "root", "", "usuarios");
        
        if (!$mysqli->connect_errno){
            
            $query = 'INSERT INTO usuarios (Nombre, Email, Mensaje) VALUES ("'.$nombre.'","'.$email.'","'.$msg.'")';


            if (!$mysqli->query($query)) {
            echo "Falló: (" . $mysqli->errno . ") " . $mysqli->error;
            }else {
                echo "ok";
            }
        }else{
            echo "error de conexion";
        }
    }else{
        echo "Sin parametros";
    }
?>