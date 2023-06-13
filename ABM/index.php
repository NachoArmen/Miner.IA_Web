<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/estilo.css">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous"/> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEbT8E13Mv9O5wXwYjW3O+" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Wallpoet&display=swap" rel="stylesheet">
    <title>Miner.IA</title>
</head>
<body>
   <header>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand cali" href="../index.php" target="">Miner.IA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto cali">
            <li class="nav-item">
                <a class="nav-link" href="../products.php">Products</a>
            </li>               
             <li class="nav-item">
             <a  id="ad" class="nav-link" href="index.php">Admin</a>
             </li>
          </ul>
    </div>
</nav>
</header> 
<br>

<div class="d-flex container-fluid justify-content-center">
<?php
include('ORM/orm.php');
//mostrar debe ser el index
 $orm= new Orm ();

 $orm->mostrar();
 
?>
<br>
    <div class="row">  
        <div class="col">
        <button class="cali" id="agregar">Add</button>
        <button class="cali" id="volver">Back</button>
        </div>     
    </div>
    

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
</div>

 


