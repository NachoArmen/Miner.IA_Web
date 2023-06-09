
<?php
include('ORM/orm.php');
//mostrar debe ser el index
 $orm= new Orm ();

 $orm->mostrar();
 
?>
    <button id="agregar">Agregar</button>

    <button id="volver">Volver</button>

    <script>
    var bt = document.getElementById('agregar');
    bt.onclick = function(){
	window.location = "registrar.php";
        }   

        var bt = document.getElementById('volver');
    bt.onclick = function(){
	    window.location = "../index.php";
        }   



    </script>

