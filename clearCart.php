<?php
$title="Product Detail";
include 'header.php';
?>
<?php
session_destroy();

?>
<h1>You cleared the Cart</h1>
<div class="redirect">
<p>Shop More</p><a href="products.php">Continue Shopping!</a>
<p>Help us Improve</p><a href="contact.php">Comments</a>
</div>
<?php
include 'footer.php';
?>
