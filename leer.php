<?php

    //Recuperar valores
    if (isset($_POST["id"])){
        $id = $_POST["id"];
    
       
        $mysqli = new mysqli("localhost", "root", "", "usuarios");
        
        if (!$mysqli->connect_errno){
            
            $query = 'SELECT *  FROM usuarios where ID = '.$id;

            if ($resultado = $mysqli->query($query)) {
                while ($fila = $resultado->fetch_row()){
                    echo $fila[0].",".$fila[1].",".$fila[2].",".$fila[3];
                }
                $resultado->close();        
            }
        }else{
            echo "error de conexion";
        }
    }else{
        echo "Sin parametros";
    }
?>