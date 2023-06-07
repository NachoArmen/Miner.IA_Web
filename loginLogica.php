<?php
require_once('ORM/usuario.php');
session_start();

if(isset($_POST['email']) &&
isset($_POST['contrasena'])){

  $orm = new orm();

  $email=$_POST['email'];
	
  $contrasena=$_POST['contrasena'];

  $orm->login($email, $contrasena);



}

/*<?php
    $loginInicial = new Usuario($nombre, $apellido, $email, $contrasena);
    $resultado = $orm->login($loginInicial);

    if($resultado){ // inicio de sesión exitoso
        
		$_SESSION["registro"] = [
            "email"=>$email,
            "contrasena"=>$contrasena
        ];

        print("Inicio de sesión exitoso");

    } else { // inicio de sesión fallido
        
		print("Inicio de sesión fallido. Verifica tus credenciales");

    }

} else {
    print("Falta información requerida para iniciar sesión");
}
*/
?>
