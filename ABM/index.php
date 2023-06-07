<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
	    //window.location = "../index.php";
        }   



    </script>

    
</body>
</html>