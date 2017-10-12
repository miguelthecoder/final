<?php
// start session to keep track of the cart
  session_start();
  // we want to check if the cart is empty if so make an array
  if(empty($SESSION['cart'])) {
// You want to able to store you items, we're storing them in an array
  $_SESSION['cart'] = array();
}
 array_push($SESSION['cart'], $_GET['id']);

?>
<p>
  product was successfully added to your cart.
  <a href="shoping-cart.php">View Shoping Cart</a>
</p>
