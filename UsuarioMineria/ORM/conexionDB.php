<?php 

//Metodo que llama la conexion a la base de Datos//
function OpenCon(){
    
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "usuariosmineria";
    $port = "3306";

    $cnx = mysqli_connect($dbhost, $dbuser, $dbpass, $db, $port);

    return $cnx;

}

function CloseCon($cnx)
 {
 $cnx -> close();
 }

?>