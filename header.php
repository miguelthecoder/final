<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  	<link rel="stylesheet" media="screen and (min-width: 0px)" href="lib/css/small.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" href="lib/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
  </head>
  <body>

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
        <ul>
      </nav>
    </div>

    <div id="content-container">
