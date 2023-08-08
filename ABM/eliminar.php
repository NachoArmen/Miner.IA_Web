<?php
require_once('ORM/orm.php');
$orm= new Orm ();

if(isset($_GET['id']) and isset($_GET['nombre'])){
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $orm->eliminar($id,$nombre);
}else print'No recibe nada';
    
?>

<button id="volver" class="cali">Back</button>

<script>
    var bt = document.getElementById('volver');
    bt.onclick = function(){
	window.location = "index.php";
        }   
    </script>
    