<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mineral</title>
</head>
<body>

<!--No esta cargando imagenes--->
    <h1 class="cali">Add mineral</h1>
    <form action="registrarLogica.php" method="post" enctype="multipart/form-data">
        <label for="nombre" >Name:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="descripcion" >Description:</label>
        <input type="text" id="descripcion" name="descripcion">

        <label for="precio" >Price(USD):</label>
        <input type="text" id="precio" name="precio">

        <label for="file">Image: </label>
          <input type="file" id="file" name="file">

        <input type="submit" value="Add">
        <input type="button" name="volver" id="volver" value="Back">

    </form>
 

    <script>
    var bt = document.getElementById('volver');
    bt.onclick = function(){
	window.location = "index.php";
	//goto <a href="./index.php"> vovler </a>
        }   
    </script>

</body>
</html>