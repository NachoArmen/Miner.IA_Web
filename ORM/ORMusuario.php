<?php 
include_once('conexionDB.php');

class orm {

    function __construct(){

    }

function insertarDB(Usuario $objusuario){

$cnx = OpenCon();

$nombre= $objusuario->get_nombre();
$apellido = $objusuario->get_apellido();
$email = $objusuario->get_email();
$usuario = $objusuario->get_usuario();
$contrasena= $objusuario->get_contrasena();

$sql="INSERT INTO registro (nombre, apellido, email, usuario, contrasena) VALUES ('$nombre','$apellido','$email','usuario', MD5('$contrasena'))";

$cnx->query($sql) or die(print_r($cnx->error));

}

//Metodo login
function login($email, $contrasena){

  $cnx = OpenCon();
  $sql= "SELECT email, contrasena FROM registro WHERE email='$email' AND contrasena=MD5('$contrasena') LIMIT 1";
  $a = $cnx->query($sql);
  
// Hasta aca esta bien , pero luego no cumple la condicion del if. PREGUNTAR




 if (mysqli_num_rows($a) > 0){ 
  $row = $a->fetch_assoc();
  $_SESSION['email'] = $row['email'];
  $_SESSION['contrasena'] = $row['contrasena'];
  header("Location: index.php");
 }else{
  
    print("no entro");
    //header("Location: indexLogin.php?login=error");
 } 
}

  } //llave de cierre de la class





?>