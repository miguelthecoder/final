<?php
$title="Product Page";
include 'header.php';
?>

<h1>Products Available</h1>
  <div class="category">
    <form class="selectCategory" action="products.php" method="get">
    <select name="category">
      <option value="">All</option>
      <option value="Architecture">Architecture</option>
      <option value="Art">Art</option>
      <option value="Books">Books</option>
      <option value="Shirts">Shirts</option>
    </select>
    <button id="cat" type="submit" name="submit">Go</button>
    </form>
  </div>
  <div class="search">
    <?php
      try{
      // connect to the DB
      // $conn = new PDO('mysql:dbname=MRosas_SQLchalleng;host=localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP');
      $conn = new PDO('mysql:dbname=Final;host=localhost', 'root', 'root');
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

<?php include 'footer.php'; ?>
