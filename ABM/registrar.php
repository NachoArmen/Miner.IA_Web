<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ABM</title>
</head>
<body>

<!--No esta cargando imagenes--->
    <H1>Agregar</H1>
    <form action="registrarLogica.php" method="post" enctype="multipart/form-data">
        <label for="nombre" >Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="descripcion" >Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion">

        <label for="precio" >Precio:</label>
        <input type="text" id="precio" name="precio">

        <label for="file">Imagen: </label>
          <input type="file" id="file" name="file">

        <input type="submit" value="Enviar">
        <input type="button" name="vovler" id="volver" value="Volver">

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