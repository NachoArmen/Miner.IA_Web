<?php
include('config.php');


function insertarDB(Usuarios $objUsuarios)
{   
        //$conn es una variable que armamos para guardar nuestra conexión con la base de datos
        //openCon();; es un metodo que inicia esta conexión.
    $conn = openCon();;

    //A continuación vamos a pasar nuestros objetos a entradas en la base de datos.
    //Nuestros objetos tienen como atributos "nombre", "descripción" e "imagen"
    //Por otro lado, nuestra tabla en la base de datos tiene como columnas "titulo", "texto" e "imagen"
    //Equiparamos "titulo" y "nombre", ya que cumplen la misma idea, y "texto" con "descripcion". "Imagen" es el unico nombre que comparten.
    //Entonces tomamos estos valores con los getters de nuestro objeto, y los guardamos en unas variables nuevas
    $nombre = $objUsuarios->get_nombre();
    $numero =  $objUsuarios->get_tlf();
    $email =  $objUsuarios->get_mail();

    //Luego, con $sql, una variable que usamos para hacer querys de MySQL, hacemos una query para hacer un insert en nuestra base de datos, con estos valores que guardamos.
    //La query debe ir entre comillas. Es importante que, si estamos pasandole valores como acá, usen comillas dobles (") para iniciar y cerrar la query, y comillas simples (')
    //a la hora de ingresar las variables en la query.
        $sql= "INSERT INTO usuario (nombre, numero, email) VALUES ('$nombre', '$numero','$email')";
        print_r($sql);
        //ahora $conn toma la query que hicimos en $sql, y la lleva a la base de datos en donde va a hacerse el insert.
        //en caso de haber un error, lo atraparemos y cerraremos la conexión con "die()"
        $conn->query($sql) or die(print_r($conn->error));
}
?>