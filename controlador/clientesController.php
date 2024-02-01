<?php
    $opc = $_GET['opc'];
    switch($opc){
        case 1: // Registrar comentarios de los clientes    
            $nombre = $_POST['txtNombre'];
            $email  = $_POST['txtEmail'];
            $tel    = $_POST['txtTelefono'];
            $coment = $_POST['txtComentarios'];
            // Registrar los valores en la Base de Datos
            break;
        case 2:
            $mysqli = new mysqli("127.0.0.1","unicuc","1234","cursocuc");
            if($mysqli->connect_errno){
                echo "Fallo al conectar a MySQL";
            }

            $getComments = $mysqli->query("select * from tblComentarios");
            if($getComments){
                while ( $fila = $getComments->fetch_assoc() ) {
                    echo $fila["nombre"].'<br>';
                    echo $fila["email"].'<br>';
                    echo $fila["telefono"].'<br>';
                    echo $fila["comentario"].'<br>';
                }
            }

            //http://192.168.100.232:8080/curso/
            //echo $mysqli->host_info . "\n";
    }

    

?>