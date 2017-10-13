<?php
$title="Welcome";
include 'header.php';
 ?>
   <main>
      <h1>Latino Herritage Store</h1>
      <div class="inner">
         <h2>Welcome to your shop!</h2>
         <p>Welcome to our site!</p>
         <p>We have great Books, Art and Shirts.</p>
      </div>
      <div class="banner cycle-slideshow">
         <img onclick="window.location='detailpage.php?id=3'" src="lib/img/img/circuit.jpg" alt="The Circuit Book" />
         <img onclick="window.location='detailpage.php?id=9'"  src="lib/img/img/popo.jpg" alt="Popocatepec" />
         <img onclick="window.location='detailpage.php?id=16'" src="lib/img/img/dog.jpeg" alt="Dog Shirt" />
         <img onclick="window.location='detailpage.php?id=12'" src="lib/img/img/sor-juana.jpg" alt="sor-juana" />
      </div>
   </main>
   <div class="bottomIndex">
      <p>Please check out the selection.<p><a href="products.php">Continue Shopping!</a>
      <p>Help us Improve</p><a href="contact.php">Comments</a>
      <p>Thank You For visiting us.</p>
   </div>
<?php
include 'footer.php';
?>
