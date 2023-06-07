<?php
include('ORM/mineral.php');
$orm= new Orm ();

if(isset($_POST['nombre']) ||
isset($_POST['descripcion']) ||
isset($_POST['precio'])){

    move_uploaded_file($_FILES['file']
    ['tmp_name'],"../img/".$_FILES['file']['name']);


    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen= $_FILES['file']['name'];

    $mineralInicial= new Mineral($nombre,$descripcion,$precio,$imagen);
   $orm->insertarDB($mineralInicial);
    print'Se agrego a la bdd';

}else{
    print'No se guardaron los datos';
}

?>
<button id="bt">Volver</button>

<script type="text/javascript">

var bt = document.getElementById('bt');
bt.onclick = function(){
	window.location = "index.php";
}
</script>


  


