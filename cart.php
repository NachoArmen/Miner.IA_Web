<?php
include_once "header.php";
?>
<br>

<h1 class="cali">¿Ready to check out?</h1>
<?php
//Iniciamos una sesión, para poder guardar lo que vamos a ir agregando y quitando de nuestro carrito


//Conectamos con nuestra base de datos. Esta vez estamos haciendo MySQLi pero con objetos.
require_once('ABM/ORM/configCarrito.php');
$db_handle = new DBController();

//Acá empezamos a manejar la lógica de nuestro carrito. Como pueden ver, vamos a chequear que nos esté llegando una "acción". Si nos llega (lo verificamos con !empty($_GET["accion])), entonces pasamos al
//siguiente paso.
if(!empty($_GET["accion"])) {

//Abrimos un switch, con un $_GET que esta recibiendo la acción de la que hablabamos antes. Este Switch va a tener 3 casos: "Meter", "Quitar" y "Vaciar.
    switch($_GET["accion"]) {

//El primer caso es "Meter". Para esto, revisamos que la cantidad que recibamos con $_POST en nuestro carrito no sea 0.
//Si no lo esta, entonces pasamos el primer "if", y recibimos el código de nuestro producto (una variable para identificarlo), y hacemos la query para traer el producto que coincida con ese código.
//Luego, creamos un array con nuestros productos.
       case "meter":
            if(!empty($_POST["cantidad"])) {
                $codigoProducto = $db_handle->runQuery("SELECT * FROM minerales WHERE id='" . $_GET["id"] . "'");
                $itemArray = array($codigoProducto[0]["id"]=>array('Nombre'=>$codigoProducto[0]["Nombre"], 'id'=>$codigoProducto[0]["id"], 'cantidad'=>$_POST["cantidad"], 'Precio'=>$codigoProducto[0]["Precio"], 'img'=>$codigoProducto[0]["img"]));
                
//Ahora, vamos a otros dos "if". El primero chequea que el carrito de nuestra sesión no esté vacio. Si no lo está, pasamos al segundo "if", en donde revisamos si los productos en el array comparten
//el mismo código. En caso de que si, entonces sabemos que son el mismo producto, y el carrito entonces sabrá la cantidad que tiene de ese producto en específico.

            }
        break;


/*
if(!empty($_SESSION["item_carrito"])) {
     if(in_array($codigoProducto[0]["id"],array_keys($_SESSION["item_carrito"]))) {
         // Product already exists, increment quantity
         foreach($_SESSION["item_carrito"] as $k => $v) {
             if($codigoProducto[0]["id"] == $k) {
                 $_SESSION["item_carrito"][$k]["cantidad"] += $_POST["cantidad"];
             }
         }
     } else {
         // New product, add to cart  
         $_SESSION["item_carrito"] = array_merge($_SESSION["item_carrito"],$itemArray);
     }
  }

*/





//En el caso "quitar", revisamos que el carrito no esté vacío. Si no lo esta, revisa qué código que recibió de un producto (Lo recibe con un botón que veremos más abajo) y quita al producto con ese
//código del carrito.
        case "quitar":
            if(!empty($_SESSION["item_carrito"])) {
                foreach($_SESSION["item_carrito"] as $k => $v) {
                        if($_GET["id"] == $k)
                            unset($_SESSION["item_carrito"][$k]);	
//Si el carrito quedaría vacío, quitamos el carrito directamente. 			
                        if(empty($_SESSION["item_carrito"]))
                            unset($_SESSION["item_carrito"]);
                }
            }
        break;

//El ultimo caso es Vaciar. Quita el carrito enteramente.
        case "vaciar":
            unset($_SESSION["item_carrito"]);
        break;	
    }
    }
    ?>

<!--Ahora pasamos al HTML. Como siempre, ponemos nuestra hoja de estilos y lo que necesitemos en el head -->
<html>
<head>
    <title>Carrito</title>
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>

<!--Acá empieza el body, en donde veremos a nuestro carrito-->
<body>
<!--Nuestro carrito. Tiene un botón de vaciar, que hace referencia a la acción vaciar, que armamos arriba. Al clickearlo, entonces ejecutará esa acción-->
<div id="shopping-cart">
    <div><h1>Carrito</h1></div>
    <a id="botonVaciar" href="cart.php?accion=vaciar">Vaciar Carrito</a>

<!--Ahora vamos a chequear que el carrito exista. Si existe, por defecto va a poner todos los valores en 0.
Luego, haremos una tabla en donde se mostrarán los productos que hay actualmente en el carro. -->
    <?php
if(isset($_SESSION["item_carrito"])){
    $cantidad_total = 0;
    $precio_total = 0;
?>	
<table class="tabla-carrito" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<!--los titulos de cada columna de nuestra tabla-->
<th style="text-align:left;">Nombre</th>
<th style="text-align:left;">Código</th>
<th style="text-align:right;" width="5%">Cantidad</th>
<th style="text-align:right;" width="10%">Precio</th>
<th style="text-align:right;" width="10%">Precio total</th>
<th style="text-align:center;" width="5%">Quitar</th>
</tr>	
<!--Acá armamos un foreach con todos los items del carrito. Revisa los items del array de items que vimos arriba, y por cada uno hará una fila dentro de nuestro carrito, mostrando entonces
los contenidos de este. Recibe los nombres, cantidades y precios del array para mostrarlos con un echo
 También, cada producto que metamos en el carrito incluye un botón para quitar ese producto del carrito.
Como pueden ver, hace href a la acción "quitar" que armamos arriba, y le pasa también el código del producto-->
<?php		
    foreach ($_SESSION["item_carrito"] as $item){
        $item_precio = $item["cantidad"]*$item["Precio"];
		?>
				<tr>
				<td><img width="150" height="150" src="<?php echo $item["img"]; ?>" class="imagen-item-carrito" /><?php echo $item["Nombre"]; ?></td>
				<td><?php echo $item["id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["cantidad"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["Precio"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_precio,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?accion=quitar&id=<?php echo $item["id"]; ?>" class="botonQuitarAccion"><img src="img/icon-delete.png" alt="Quitar item" /></a></td>
				</tr>
				<?php
                //$cantidad_total suma las cantidades entre los distintos productos. Si tenemos 2 manzanas y 1 naranja, entonces haría 2+1
				$cantidad_total += $item["cantidad"];
                //$precio_total hace lo mismo, pero sumando sus precios.
				$precio_total += ($item["Precio"]*$item["cantidad"]);
		}
		?>
<!--Finalmente, en una última fila, mostramos el precio y la cantidad total de lo que hay en nuestro carrito-->
<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $cantidad_total; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($precio_total, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>	
<!--Para terminar, si no hay nada en el carrito, simplemente mostraremos un cartel que dice "El carrito esta vacío"-->	
  <?php
}else {
?>
    <div class="no-hay-nada">El carrito esta vacío</div>
<?php 
    }
?>
</div>

<!--Y finalmente, necesitaremos una grilla con los productos que podemos agregar a nuestro carrito. Los productos los recibimos de nuestra base de datos
 Primero, creamos un array con los productos, que se llenará con lo que reciba de una query. Esta query le devolverá todas las entradas de la tabla con nuestros productos.
Luego, revisa que nuestro array no este vacío. Si no lo está, hará un foreach, que creará un cuadro por cada entrada en nuestra base de datos.
Como pueden ver, esto lo manejamos con un form, con un method="post" cuyas acción es "meter", y de paso también pasa el código del producto.
Finalmente, hay un botón con un "submit" que toma la cantidad del producto, y la lleva a la acción "meter", para que haga su trabajo tal y como vimos antes.-->
<div id="grilla-productos">
	<div class="txt-heading">Productos</div>
	<?php
	$array_productos = $db_handle->runQuery("SELECT * FROM minerales ORDER BY id ASC");
	if (!empty($array_productos)) { 
		foreach($array_productos as $clave=>$valor){
	?>
		<div class="item-producto">
			<form method="post" action="cart.php?accion=meter&id=<?php echo $array_productos[$clave]["id"]; ?>">
			<div class="product-image"><img width="400" height="200" src="<?php echo $array_productos[$clave]["img"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $array_productos[$clave]["Nombre"]; ?></div>
			<div class="product-price"><?php echo "$".$array_productos[$clave]["Precio"]; ?></div>
			<div class="cart-action"><input type="text" class="cantidad-producto" name="cantidad" value="1" size="2" /><input type="submit" value="Agregar al Carrito" class="botonAgregarAccion" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>

</body>
</html>

<br>
<?php
include_once "footer.php";
?>  