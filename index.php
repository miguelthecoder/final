<?php
$title="Welcome";
include 'header.php';
 ?>
   <main>
      <div class="inner">
         <h1> This Month's Featured Items </h1>
      </div>
      <div class="banner">
      <img onclick="window.location='detailpage.php?id=3'" src="lib/img/img/circuit.jpg" alt="The Circuit Book" >
      <img onclick="window.location='detailpage.php?id=9'"  src="lib/img/img/popo.jpg" alt="Popocatepec" >
      <img onclick="window.location='detailpage.php?id=16'" src="lib/img/img/dog.jpeg" alt="Dog Shirt" >
      <img onclick="window.location='detailpage.php?id=12'" src="lib/img/img/sor-juana.jpg" alt="sor-juana" >
      </div>
   </main>
   <!-- <div class="bottomIndex">
      <p>Please check out the selection.<p><a href="products.php">Continue Shopping!</a>
      <p>Help us Improve</p><a href="contact.php">Comments</a>
      <p>Thank You For visiting us.</p>
   </div> -->
<?php
include 'footer.php';
?>
