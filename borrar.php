<?php

    //Recuperar valores
    if (isset($_POST["id"])){
        $id = $_POST["id"];
    
       
        $mysqli = new mysqli("localhost", "root", "", "usuarios");
        
        if (!$mysqli->connect_errno){
            
            $query = 'DELETE FROM usuarios where ID = '.$id;


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