<?php

//Con esta funciòn, iniciaremos la conexión con la Base de Datos
function OpenCon()
 {
    //Aca necesitaremos proporcionarle algunos datos a la función. Esto es MUY importante, y lo detallaré ahora:
    //1-Host de la base de datos ($dbhost). En este caso es "mysql"
    //2-El usuario de la base de datos ($dbuser). En este caso, es "root"
    //3-La contraseña de la base de datos ($dbpass). En caso de no tener contraseña, se dejan las comillas vacías.
    //4-La base de datos a la que vamos a conectar($db)
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "productos";
 $port="3306";
 //Una vez hecho esto, hacemos una variable para la conexión ($conn) y la igualamos a lo que recibirá con la función mysqli_connect()
 //mysqli_connect() pedirá host, usuario, contraseña y el nombre de la db.
 //piensenlo como un constructor. Deben respetar el orden que pide.
 //con estos datos, mysqli_connect hará la conexión.

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db, $port);
 
 //Finalmente, OpenCon() devolverá la conexión hecha.
 return $conn;
 }
 
 //Esta función cierra la conexión.
 //como pueden ver, es una función simple a la que le pasamos la variable con la conexión, y la hacemos usarla función "close()".
function CloseCon($conn)
 {
 $conn -> close();
 }
?>