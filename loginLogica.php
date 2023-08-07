<?php
require_once('ORM/ORMusuario.php');
session_start();

if(isset($_POST['email']) && isset($_POST['contrasena'])){
  $orm = new orm();

  $email=$_POST['email'];
  $contrasena=($_POST['contrasena']);
  $hash = md5($contrasena);



  $orm->login($email, $contrasena);
}


?>
