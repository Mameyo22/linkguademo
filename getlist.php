<?php



    //Obtener el campo por el cual ordenar
    if (!isset($_POST["orderby"])){
        //por defecto, ordenar por nombre
        $orderby = "NOMBRE";
    }else {
        $orderby = $_POST["orderby"];
    }
    
    //Ver si esta seteada la variable de sesion que indica si el orden es ascendente o descendente
    if (!isset($_POST["order"])){
        //Por defecto orden ascendente
        $order = "asc";
    }else{
        $order = $_POST["order"];
    }


    $mysqli = new mysqli("localhost", "root", "", "usuarios");

    if (!$mysqli->connect_errno){
        $query = "SELECT * FROM `usuarios`"; //ORDER BY ".$orderby." ".$_SESSION["order"];
        
        if ($resultado = $mysqli->query($query)) {
            while ($fila = $resultado->fetch_row()){
                echo "<p>".$fila[0]."[".$fila[1]."]</p>";
            }
            echo "filas ".$resultado->num_rows;
            $resultado->close();        
            }
    }else{
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $mysqli->close();

?>