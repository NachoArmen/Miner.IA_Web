<?php
include_once "header.php";
?>
<br>


<?php


echo '<h1 class="title-idx">¿Ready to check out?</h1>';
require_once('ABM/ORM/configCarrito.php');
$db_handle = new DBController();


if(!empty($_GET["accion"])) {


    switch($_GET["accion"]) {


       case "meter":
            if(!empty($_POST["cantidad"])) {
                $codigoProducto = $db_handle->runQuery("SELECT * FROM minerales WHERE id='" . $_GET["id"] . "'");
                $itemArray = array($codigoProducto[0]["id"]=>array('Nombre'=>$codigoProducto[0]["Nombre"], 'id'=>$codigoProducto[0]["id"], 'cantidad'=>$_POST["cantidad"], 'Precio'=>$codigoProducto[0]["Precio"], 'img'=>$codigoProducto[0]["img"]));


if(!empty($_SESSION["item_carrito"])) {

    $exists = false;

    foreach($_SESSION["item_carrito"] as $k => $v) {
      if($codigoProducto[0]["id"] == $k) {
        $_SESSION["item_carrito"][$k]["cantidad"] += $_POST["cantidad"];
        $exists = true;
      }
    }

    if(!$exists) {
      $_SESSION["item_carrito"] = array_merge($_SESSION["item_carrito"], $itemArray);
    }

  } else {
    $_SESSION["item_carrito"] = $itemArray;
  }
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
        case "quitar":
            if(!empty($_SESSION["item_carrito"])) {
                /*foreach($_SESSION["item_carrito"] as $k => $v) {
                        if($_GET["id"] == $k)
                            unset($_SESSION["item_carrito"][$k]);	
//Si el carrito quedaría vacío, quitamos el carrito directamente. 			
                        if(empty($_SESSION["item_carrito"]))
                            unset($_SESSION["item_carrito"]);
                }*/
                $updatedCart = [];
                foreach($_SESSION["item_carrito"] as $item) {
                if ($item['id'] != $_GET['id']) {
                        $updatedCart[] = $item; 
                    }
                }
                $_SESSION["item_carrito"] = $updatedCart;
            }


        break;


        case "vaciar":
            unset($_SESSION["item_carrito"]);
        break;	
    }
    }
    ?>


<div id="shopping-cart">
    
    <a id="botonVaciar" href="cart.php?accion=vaciar" class="cali">Empty Cart</a>


    <?php
if(isset($_SESSION["item_carrito"])){
    $cantidad_total = 0;
    $precio_total = 0;
?>	
<table class="tabla-carrito" cellpadding="10" cellspacing="1">
<tbody>
<tr>

<th style="text-align:left;">Product</th>
<th style="text-align:left;">Id</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:right;" width="10%">Total Amount</th>
<th style="text-align:center;" width="5%">Empty</th>
</tr>	

<?php		
    foreach ($_SESSION["item_carrito"] as $item){
        $item_precio = $item["cantidad"]*$item["Precio"];
		?>
				<tr>
				<td><img width="200" height="150" src="<?php echo $item["img"]; ?>" class="imagen-item-carrito" /><?php echo $item["Nombre"]; ?></td>
				<td>
                    <?php echo $item["id"]; ?>
                </td>
				<td style="text-align:right;">
                    <?php echo $item["cantidad"]; ?>
                </td>
				<td  style="text-align:right;">
                    <?php echo "$ ".$item["Precio"]; ?>
                </td>
				<td  style="text-align:right;">
                    <?php echo "$ ". number_format($item_precio,2); ?>
                </td>
				<td style="text-align:center;">
                    <a href="cart.php?accion=quitar&id=<?php echo $item["id"]; ?>" class="botonQuitarAccion"><img src="img/icon-delete.png" alt="Quitar item" /></a>
                </td>
				</tr>
                <a href="purchase.php">Complete Purchase</a>
				<?php
                
				$cantidad_total += $item["cantidad"];
                
				$precio_total += ($item["Precio"]*$item["cantidad"]);
		}
		?>
<
<tr>
<td colspan="2" align="right">Total:</td>
<td align="right">
    <?php echo $cantidad_total; ?>
</td>
<td align="right" colspan="2">
    <strong><?php echo "$ ".number_format($precio_total, 2); ?></strong>
</td>

</tr>
</tbody>
</table>	



  <?php
}else {

    echo '<div class="no-hay-nada">There are no selected products</div>';
 
    }
?>
</div>


<div id="grilla-productos">
	<div class="txt-heading">Products</div>
	<?php
	$array_productos = $db_handle->runQuery("SELECT * FROM minerales ORDER BY id ASC");
	if (!empty($array_productos)) { 
		foreach($array_productos as $clave=>$valor){
	?>
		<div class="item-producto">
			<form method="post" action="cart.php?accion=meter&id=<?php echo $array_productos[$clave]["id"]; ?>">
			<div class="product-image">
                <img width="300" height="200" src="<?php echo $array_productos[$clave]["img"]; ?>">
            </div>
			<div class="product-tile-footer">
			<div class="product-title">
                <?php echo $array_productos[$clave]["Nombre"]; ?>
            </div>
			<div class="product-price">
                <?php echo "$".$array_productos[$clave]["Precio"]; ?>
            </div>
			<div class="cart-action">
                <input type="text" class="cantidad-producto" name="cantidad" value="1" size="2" />
                <input type="submit" value="Add to Cart" class="botonAgregarAccion" />
            </div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>




<br>
<?php
include_once "footer.php";
?>  