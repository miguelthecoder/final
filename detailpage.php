<?php
$title="Product Detail";
include 'header.php';
?>
<div class="detailCont">
  <div class="detailHeader">
    <h1>Choose your Product</h1>
  </div>
<?php
  try {
    $conn = new PDO('mysql:dbname=MRosasFinal;host=localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP');
   $productdetails = 'SELECT * FROM products WHERE id = :id';

   $prep = $conn->prepare($productdetails);
    $prep->bindParam(':id', strip_tags($_GET['id']));
    $prep->execute();
   foreach($prep as $details) {
      echo "
        <div class=\"product_detail\">
            <p>{$details['name']}</p>
            <figure><a href=\"productdetail.php?id={$details['id']}\"><img src=\"{$details['picture']}\" alt=\"{$details['name']}\"></a></figure>
            <figcaption>{$details['category']}</figcaption>
            <figcaption>{$details['description']}</figcaption>
            <figcaption>\${$details['price']}</figcaption>
            <form class=\"cart\" action=\"products.php\" method=\"GET\">
              <label for=\"quantity\">Quantity:</label>
              <input id=\"quantity\" name=\"quantity\" min=\"1\" max=\"20\" type=\"number\" value=\"\" required>
              <input id=\"add_btn\" type=\"submit\" name=\"submit\" value=\"Add To Cart\">
            </form>
        </div>
      ";
    }
  } catch (Exception $e) {
    echo "its broke";
  }
?>
</div>
<?php include 'footer.php'; ?>
