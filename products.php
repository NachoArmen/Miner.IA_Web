<?php
include_once "header.php";
include('ABM/ORM/orm.php');
session_start();

$orm = new ORM();
?>

<h1 class="title-idx">Browse...Like...Buy</h1>
<br>
<div class="container-fluid">
    <div class="row">
                 
                <?php 
                $orm->mostrarCard();
                ?>                    
    </div>
    <br>
    <!--<div class="row">
        <div class="col">
            <div class="card" style="width: 25rem;">
                <img src="img/esme.jpg" class="card-img-top" alt="esmeralda" width="398" height="265">
             <div class="card-body">
                <h5 class="card-title">Emerald</h5>
                <p class="card-text">INFO: PUREZA... PRECIO IDEAL...</p>
                <a href="ACA IRIA PARA EL CARRITO" class="btn btn-primary">ADD</a>
             </div>
            </div>          
        </div>
        <div class="col">
            <div class="card" style="width: 25rem;">
                <img src="img/hierro.jpg" class="card-img-top" alt="hierro" width="398" height="265">
             <div class="card-body">
                <h5 class="card-title">Hierro (Fe)</h5>
                <p class="card-text">INFO: PUREZA... PRECIO IDEAL...</p>
                <a href="ACA IRIA PARA EL CARRITO" class="btn btn-primary">ADD</a>
             </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 25rem;">
                <img src="img/plata.jpg" class="card-img-top" alt="plata" width="398" height="265">
             <div class="card-body">
                <h5 class="card-title">Silver (Ag)</h5>
                <p class="card-text">INFO: PUREZA... PRECIO IDEAL...</p>
                <a href="ACA IRIA PARA EL CARRITO" class="btn btn-primary">ADD</a>
             </div>
            </div>          
        </div>
        <div class="col">
            <div class="card" style="width: 25rem;">
                <img src="img/oro.jpg" class="card-img-top" alt="oro" width="398" height="265">
             <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">INFO: PUREZA... PRECIO IDEAL...</p>
                <a href="ACA IRIA PARA EL CARRITO" class="btn btn-primary">ADD</a>
             </div>
            </div>
        </div>
    </div>-->   
</div>

<br>

<?php
include_once "footer.php";
?>  