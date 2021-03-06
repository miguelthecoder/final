<?php
$title="Product Page";
include 'header.php';
?>
<!-- ////select for filter. -->
<div class="produContain">
<h1>Products Available</h1>
  <div class="category">
    <form class="selectCategory" action="products.php" method="get">
    <label id="category"for="category"></label>
    <select name="category">
      <option value="">Filter</option>
      <option value="Architecture">Architecture</option>
      <option value="Art">Art</option>
      <option value="Books">Books</option>
      <option value="Shirts">Shirts</option>
    </select>
    <button id="cat" type="submit" name="submit">Go</button>
    </form>
  </div>
  <div class="prod">
    <?php
      try{
      // connect to the DB
      $conn = new PDO('mysql:dbname=MRosasFinal;host=localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $products = "SELECT * FROM products";

      if (!empty($_GET['category'])) {
        $products = $products . ' WHERE category= :category ';
      }
      // prepare preps a statement and returns an object.
      $prepared = $conn->prepare($products);

      if (!empty($_GET['category'])) {
        $prepared->bindParam(':category', $_GET['category']);
      }
      $prepared->execute();

      foreach($prepared->fetchALL() as $category) {

        echo " <div class=\"products\">
        <div class=\"image\">
        <a href=\"detailpage.php?id={$category['id']}\">
        <img class=\"picture\" src=\"{$category[picture]}\" alt=\"{$category['name']}\">
        </a>
        </div>
        <p class=\"product\">{$category['name']}</p>
        <p>{$category['price']}</p>
        <p>{$category['category']}</p>
        </div>
        ";
      }
    }catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }

    ?>
  </div>
  </div>

<?php include 'footer.php'; ?>
