<?php
require_once('ORM/orm.php');
$orm= new Orm ();

    if(isset($_GET['id'])){
		$id = $_GET['id'];

        $orm->modificar($id);


	}else{
        print'error';
    }

?>    <button id="volver">Volver</button>

 <script>
    var bt = document.getElementById('volver');
    bt.onclick = function(){
	window.location = "index.php";
        }   
        </script>