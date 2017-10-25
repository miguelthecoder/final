<?php
$title="Welcome";
include 'header.php';
 ?>
   <main>
      <h1>Latino Heritage Store</h1>
      <div class="inner">
         <h2>Welcome to our shop!</h2>
         <p>We have great <a href="products.php?category=Books&submit=">Books </a> , <a href="products.php?category=Art&submit="> Art</a> and <a href="products.php?category=Shirts&submit="> Shirts.</a></p>
      </div>
      <div class="intro">
      <h2>This Month's featured items</h2>
      <p>"The Circuit" - Book by Francisco Jimenez <a href="detailpage.php?id=3">Buy Here!</a></p>
      <p>Popocatepec and Itztazihualtl - Painting <a href="detailpage.php?id=9">Buy Here!</a></p>
      <p>Lucha Libre Puppy Shirt <a href="detailpage.php?id=16">Buy Here!</a></p>
      <p>Sor Juana Inez DeLaCruz Painting <a href="detailpage.php?id=12">Buy Here!</a></p>
      </div>
      <div class="banner cycle-slideshow">
         <img onclick="window.location='detailpage.php?id=3'" src="lib/img/img/circuit.jpg" alt="The Circuit Book" />
         <img onclick="window.location='detailpage.php?id=9'"  src="lib/img/img/popo.jpg" alt="Popocatepec" />
         <img onclick="window.location='detailpage.php?id=16'" src="lib/img/img/dog.jpeg" alt="Dog Shirt" />
         <img onclick="window.location='detailpage.php?id=12'" src="lib/img/img/sor-juana.jpg" alt="sor-juana" />
      </div>
   </main>
   <div class="bottomIndex">
      <p>Please check out the selection.<p><a href="products.php">Continue Shopping Here!</a>
      <p>Help us Improve</p><a href="contact.php">Comment Here!</a>
      <p>Thank You For visiting us.</p>
   </div>
<?php
include 'footer.php';
?>
