<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/paintings.css" type="text/css">

  <title>Document</title>
</head>
<body>
  <header>
    <div class="logo">
      <h1>Kalā</h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">HOME</a> </li>
        <li><a href="#">ABOUT US</a> </li>
        <li><a href="#">CONTACT US</a> </li>
        <li><a href="profile.php">PROFILE</a> </li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="product-container">
        
      <div class="paint-container1">
        <div class="paint"> 
        </div> 
        <a href="checkout.php" class="button">
          <h1>ADD TO CART</h1>
        </a>
      </div>

      <div class="paint-container2">
        <div class="paint1"> 
        </div>
        <a href="checkout.php" class="button">  
          <h1>ADD TO CART</h1>
        </a>
      </div>

      <div class="paint-container3">
        <div class="paint2">
        </div>
        <a href="checkout.php" class="button">
          <h1>ADD TO CART</h1>
        </a>
      </div>
  </div>
  </main>
  <footer>
      
    <div class="copyright">
      <h1>  © All rights reserved 2021</h1>
    </div>
    
  </footer>
  </body>
  </html>