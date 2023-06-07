<?php
//conectar bien los issets con la base de datos
include_once('ORM/usuario.php');


if(isset($_POST['nombre']) || 
isset($_POST['apellido']) ||
isset($_POST['email']) ||
isset($_POST['contrasena'])
){
    $orm = new orm(); 

	$nombre=$_POST['nombre'];
	 
    $apellido=$_POST['apellido'];
	 
    $email=$_POST['email'];
	
    $contrasena=$_POST['contrasena'];
	
	$usuarioInicial = new Usuario($nombre, $apellido, $email, $contrasena);
	$orm->insertarDB($usuarioInicial);
    
	print("Se registró con éxito");
}

?>

<button id="volver">Volver</button>

<script>
var boton = document.getElementById('volver');
boton.onclick = function(){
	window.location="login.php";
}

</script>

