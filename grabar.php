<?php

    //Recuperar valores
    if (isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $msg = $_POST["mensaje"];
        $usrid = $_POST["usrid"];
       
        $mysqli = new mysqli("localhost", "root", "", "usuarios");
        //Ver si existe, de ser asi, actualizar
        if (!$mysqli->connect_errno){
            if ($usrid == 0){
                //Insertar
                $query = 'INSERT INTO usuarios (Nombre, Email, Mensaje) VALUES ("'.$nombre.'","'.$email.'","'.$msg.'")';
            }else{
                //actualizar
                $query = 'UPDATE usuarios set Nombre="'.$nombre.'" , Email="'.$email.'", Mensaje="'.$msg.'" where ID='.$usrid;
            }
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