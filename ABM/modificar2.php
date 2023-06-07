<?php
require_once('ORM/orm.php');
$orm= new Orm ();

    if(isset($_POST['id'])&&
    isset($_POST['nombre'])&&
    isset($_POST['descripcion'])&&
    isset($_POST['precio'])){

		$id = $_POST['id'];	
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        $orm->actualizar($id,$nombre,$descripcion,$precio);


	}else{
        print'no recibe info';
    }

?>
    <button id="volver">Volver</button>

 <script>
    var bt = document.getElementById('volver');
    bt.onclick = function(){
	window.location = "index.php";
        }   
        </script>