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
$totalQty = 0;
$totalPrice = 0;

echo '<div class="container">';
echo '<div class="items">';
echo '<div class="items-list row">';
        foreach($cartItems as $item) {
            $totalQty += $item['cantidad'];
            $totalPrice += $item['cantidad'] * $item['Precio'];
            echo '<p class="col" style="margin-left: 10px;">'.'<div style="margin-left: 10px;"><img width="200" height="150" src='.$item['img'].'></div>'.$item['Nombre'].' x '.$item['cantidad'].'</p>';
            
            
        }
echo        '</div>';
echo      '</div>';
echo   '</div>';
// Loop through cart items

echo '<div class="totals cali">';
echo '<p>Total Items: '.$totalQty.'</p>';
echo '<p>Total Price: $'.number_format($totalPrice, 2).'</p>';
echo '</div>';
   

// Destroy cart session
unset($_SESSION['item_carrito']);

?>

<br>
<?php
include_once "footer.php";
?> 