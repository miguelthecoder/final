<?php
$title="Search Page";
include 'header.php';
$searchTerm =!empty($_GET['searchTerm']) ? $_GET['searchTerm'] : '';
?>  <div class="produContain2">
    <h1>Welcome to the search Page</h1>
    <div class="search">
      <?php
        try{
        // connect to the DB
        // $conn = new PDO('mysql:dbname=MRosas_SQLchalleng;host=localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP');
        $conn = new PDO('mysql:dbname=MRosasFinal;host=localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $searchTerm = '%' . $_GET['search'] . '%' ;//put the percents here..
        if(isset($_GET['search'])) {
        $products = "SELECT * FROM products WHERE name LIKE :searchTerm1 OR description LIKE  :searchTerm2 OR category LIKE  :searchTerm3 OR price LIKE  :searchTerm4 ";

        // prepare preps a statement and returns an object.
        $prepared = $conn->prepare($products);

        $prepared->bindParam(':searchTerm1', $searchTerm);
        $prepared->bindParam(':searchTerm2', $searchTerm);
        $prepared->bindParam(':searchTerm3', $searchTerm);
        $prepared->bindParam(':searchTerm4', $searchTerm);

        $prepared->execute();

        foreach($prepared->fetchALL() as $userSearch) {

          echo " <div class=\"products\">
          <div class=\"image\">
          <a href=\"detailpage.php?id={$userSearch['id']}\">
          <img class=\"picture\" src=\"{$userSearch[picture]}\" alt=\"{$userSearch['name']}\">
          </a>
          </div>
          <p class=\"product\">{$userSearch['name']}</p>
          <p>{$userSearch['price']}</p>
          <p>{$userSearch['category']}</p>
          </div>
          ";
        }
      }
      }catch (Exception $e) {
        echo $e->getMessage();
        exit;
      }

      ?>
    </div>
    </div>

<?php include 'footer.php'; ?>
