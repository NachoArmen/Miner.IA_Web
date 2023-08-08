<?php
include('config.php');

echo'<link rel="stylesheet" href="../../estilo/estilo.css">   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous"/> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEbT8E13Mv9O5wXwYjW3O+" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&family=Wallpoet&display=swap" rel="stylesheet">';
class Orm 
{
  
  function __construct(){

  }

function insertarDB(Mineral $mineral)
{   
    $conn = openCon();
    $nombre = $mineral->get_nombre();
    $descripcion = $mineral->get_descripcion();
    $imagen = $mineral->get_imagen();
    $precio= $mineral->get_precio();

  
        $sql= "INSERT INTO minerales (Nombre, Descripcion, Precio, img) VALUES ('$nombre', '$descripcion','$precio','img/$imagen')";
        //print_r($sql);
        //ahora $conn toma la query que hicimos en $sql, y la lleva a la base de datos en donde va a hacerse el insert.
        //en caso de haber un error, lo atraparemos y cerraremos la conexión con "die()"
        $conn->query($sql) or die(print_r($conn->error));
}

function mostrar(){
    $conn = openCon();

    $sql="SELECT * FROM `minerales` ";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Generar la tabla HTML con los datos obtenidos
        echo "<table class='tbl'>";
        echo "  <tr class='cali'>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Modify</th>
                <th>Delete</th>
                </tr>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td >" . $fila["id"] . "</td>";
            echo "<td >" . $fila["Nombre"] . "</td>";
            echo "<td>" . $fila["Descripcion"] . "</td>";
            echo "<td>" . $fila["Precio"] . "</td>";
            print "<td><a href='modificar.php?id=$fila[id]'> Mod</a></td>";
            print "<td><a href='eliminar.php?id=$fila[id]&&nombre=$fila[Nombre]'> Del </a></td>";       
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
    print "</table>";



}

function mostrarCard(){
    $conn = openCon();

    $sql="SELECT Nombre,Descripcion,Precio,img FROM `minerales` ";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Generar la tabla HTML con los datos obtenidos
       /* echo "<table class='tbl'>";
        echo "  <tr class='cali'>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                </tr>";*/

        while ($fila = $resultado->fetch_assoc()) {

      echo   ' <div class="col">
            <div class="card" style="width: 25rem;">
                <img src="'.$fila["img"].'" class="card-img-top" alt="IMAGEN NO ENCONTRADA" width="398" height="265">
             <div class="card-body">
                <h5 class="card-title">'. $fila["Nombre"] .'</h5>
                <p class="card-text">'.$fila["Descripcion"].'</p>
                <p class="card-text">'.$fila["Precio"].'</p>
                <a href="cart.php" class="btn btn-primary">Cart</a>
             </div>
            </div>
        </div>';

          /*  echo "<tr>";
            echo "<td >" . $fila["Nombre"] . "</td>";
            echo "<td>" . $fila["Descripcion"] . "</td>";
            echo "<td>" . $fila["Precio"] . "</td>";
            print "<td><a href='../../cart.php'> ADD</a></td>";
              //print "<td><a href='../../cart.php?id=$fila[id]&&nombre=$fila[Nombre]'> Del </a></td>";    
            echo "</tr>";
            //agregar el id del producto y pasarlo por get a cart.php
            */
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
    print "</table>";



}

function modificar($id){
    $conn = openCon();

    $sql = "SELECT * FROM `minerales` WHERE id='$id'";
    
    if($resultado = $conn->query($sql))
    {   
        print "<form action='modificar2.php' method='post'>";
            while($fila = $resultado->fetch_assoc() ){
                //divide el resultado
                print "<input  type='hidden' name='id' value=$fila[id] />";
                
                print "<label for='nombre'>Name: </label><input type='text' name='nombre' value='$fila[Nombre]'/><br><br>";
                print "<label for='descripcion'>Description: </label><input type='text' name='descripcion' value='$fila[Descripcion]'/><br><br>";
                print "<label for='precio'>Price: </label><input type='text' name='precio' value='$fila[Precio]'/><br><br>";

                
                print "<input type='submit' value='Modificar'/>";
                
            }
            
            print "</form>";
            }else print'Error';

}

function actualizar($id,$nombre,$descripcion,$precio){
    $conn = openCon();

    $sql = "UPDATE `minerales`SET Nombre='$nombre', Descripcion='$descripcion', Precio='$precio' WHERE id='$id'";
   if( $resultado = $conn->query($sql)){
    print "<h1>The mineral <strong>$nombre</strong>has been succesfully modified!!!</h1>";
    print "Description: $descripcion <br> Price: $precio";



   }else print'Error';



}

function eliminar($id,$nombre){
    $conn = openCon();
    $sql = "DELETE FROM `minerales` WHERE id='$id'";
    if( $resultado = $conn->query($sql)){
        print "<h1 class='title-idx'>The product $nombre has been eliminated!!!</h1>";
        
    //buscar como verificar que quiere eliminar
    
    
       }else print'Error';
    



                                }

                            }