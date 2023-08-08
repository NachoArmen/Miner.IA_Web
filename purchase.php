<?php
include_once "header.php";
?>
<br>
<?php

// Get cart items
$cartItems = $_SESSION['item_carrito']; 

// Display purchase confirmation  
echo '<h1 class="title-idx">Purchase Complete!</h1>';
echo '<p class="title-idx">Thank you for your purchase!</p>';

echo '<h2 class="cali" style="margin-left: 5px;">Items Purchased:</h2>';

// Loop through cart items
foreach($cartItems as $item) {

  echo '<p style="margin-left: 10px;">'.'<div style="margin-left: 10px;"><img width="200" height="150" src='.$item['img'].'></div>'.$item['Nombre'].' x '.$item['cantidad'].'</p>';


}

// Destroy cart session
unset($_SESSION['item_carrito']);

?>
<br>
<?php
include_once "footer.php";
?> 