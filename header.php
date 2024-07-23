<?php

@include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Work+Sans:ital,wght@0,500;0,700;1,500;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <a href="index.php" class="logo"
        ><img
          src="DATABASEFOTO/LOGO/IMG_20231204_093553-removebg-preview.png"
          alt=""
      /></a>
      <ul class="navmenu">
        <li><a href="index.php" style="text-decoration: none">home</a></li>
        <li>
          <a href="index.php" style="text-decoration: none">homemade</a>
        </li>
        <li><a href="index.php" style="text-decoration: none">sneakers</a></li>
        <li><a href="products.php" style="text-decoration: none">shop</a></li>
      </ul>

      <div class="nav-icon">
        <div class="flex">
          <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

          <a href="cart.php" class="cart"
            >cart <span><?php echo $row_count; ?></span>
          </a>
        </div>
        <a href="logout.php"><i class="bx bx-user">logout</i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <script src="js/java.js"></script>
  </body>
</html>