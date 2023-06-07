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
function login($email, $clave){


  $cnx = OpenCon();
  $consulta = "SELECT email, contrasena FROM registro WHERE email='$email' AND contrasena=MD5('$clave') LIMIT 1";
  
  $f = mysqli_query($cnx, $consulta);
  $a = mysqli_fetch_assoc($f);

  if (!isset($a)){
    print("no entro");
    //header("Location: indexLogin.php?login=error");
} else{
    $_SESSION= $a;
    print("Se logueo");

    var_dump($_SESSION);
    //header("Location: index.php");
}

  /*if( $a == NULL ){
    print("no entro");
    //header("Location: indexLogin.php?login=error");
  }else{

    $_SESSION= $a;
    print("Se logueo");
    //header("Location: index.php");

  }*/

}

  } //llave de cierre de la class





?>