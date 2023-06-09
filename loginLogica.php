<?php
require_once('ORM/usuario.php');
session_start();

if(isset($_POST['email']) && isset($_POST['contrasena'])){
  $orm = new orm();

  $email=$_POST['email'];
	
  $contrasena=$_POST['contrasena'];

  $orm->login($email, $contrasena);
}else{

  echo"<h2>pOR FAVOR RELLENE LOS CAMPOS</h2>";
}

?>
