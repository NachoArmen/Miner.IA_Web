<?php
include('config.php');
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

  
        $sql= "INSERT INTO minerales (Nombre, Descripcion, Precio, img) VALUES ('$nombre', '$descripcion','$precio','$imagen')";
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
        echo "<table>";
        echo "  <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Modificar</th>
                <th>Borrar</th>
                </tr>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["Nombre"] . "</td>";
            echo "<td>" . $fila["Descripcion"] . "</td>";
            echo "<td>" . $fila["Precio"] . "</td>";
            print "<td><a href='modificar.php?id=$fila[id]'> Mod</a></td>";
            print "<td><a href='eliminar.php?id=$fila[id]&&nombre=$fila[Nombre]'> Bor </a></td>";
            
            echo "</tr>";
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
                
                print "<label for='nombre'>Nombre: </label><input type='text' name='nombre' value='$fila[Nombre]'/><br><br>";
                print "<label for='descripcion'>Descripcion: </label><input type='text' name='descripcion' value='$fila[Descripcion]'/><br><br>";
                print "<label for='precio'>Precio: </label><input type='text' name='precio' value='$fila[Precio]'/><br><br>";

                
                print "<input type='submit' value='Modificar'/>";
                
            }
            
            print "</form>";
            }else print'Error';

}

function actualizar($id,$nombre,$descripcion,$precio){
    $conn = openCon();

    $sql = "UPDATE `minerales`SET Nombre='$nombre', Descripcion='$descripcion', Precio='$precio' WHERE id='$id'";
   if( $resultado = $conn->query($sql)){
    print "<h1>El Mineral $nombre fue Modificado con los siguientes datos!!!</h1>";
    print "Descripcion: $descripcion <br> Precio: $precio";



   }else print'Error';



}

function eliminar($id,$nombre){
    $conn = openCon();
    $sql = "DELETE FROM `minerales` WHERE id='$id'";
    if( $resultado = $conn->query($sql)){
        print "<h1>El Mineral $nombre fue eliminado !!!</h1>";
        
    //buscar como verificar que quiere eliminar
    
    
       }else print'Error';
    



                                }

                            }