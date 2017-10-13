<?php
error_reporting(0);
session_start();
$_SESSION['quantity'] = $_SESSION['quantity'] + $_GET['quantity'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  	<link rel="stylesheet" media="screen and (min-width: 0px)" href="lib/css/small.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" href="lib/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/javascript" href="slick-1.8.0/slick/slick.css">
  <script type="text/javascript" src="slick-1.8.0/slick/slick.min.js"></script>
  </head>
  <body>
    <div class="Shoppingcart">
    <p id="cart"><a href="products.php">🛒</a>
      <?php
          echo $_SESSION['quantity']
       ?>
    </p><a href="clearCart.php">Clear Cart</a>
  </div>
    <div class="toggle-btn" onclick="toggleSidebar()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div id="sidebar">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>

    <div id="content-container">
