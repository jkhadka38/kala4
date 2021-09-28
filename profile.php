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
  <link rel="stylesheet" href="css/utils.css" type="text/css">\
  <link rel="stylesheet" href="css/profile.css" type="text/css">

  
  <title>Document</title>
</head>
<body>
  <header>
    <div class="logo">
      <h1>Kalā</h1>
    </div>
    <nav>
      <ul>
        <li><a href="#">HOME</a> </li>
        <li><a href="#">ABOUT US</a> </li>
        <li><a href="#">CONTACT US</a> </li>
        <li><a href="#">PROFILE</a> </li>
      </ul>
    </nav>
  </header>

  <main>
      <div class="profile-container">
          <h1>PROFILE</h1>
          <form action="" method="post" enctype="multipart/form-data"> 
            <h2>Full Name</h2>
                  <input type="text" id="full_name" name="full_name" placeholder="Full Name" value="" > <br>
              

              <h2>Email</h2>
                  <input type="email" id="email" name="email" placeholder="Email Address" value=""> <br> 
              

              <h2>Password</h2>
                  <input type="password" id="password" name="password" placeholder="........" value="" > 
              

              <h2>Confirm Password</h2>
                  <input type="password" id="cpassword" name="cpassword" placeholder="........" value="" > 
              
                  
          </form>
      </div>  
</main>

<footer>
    
  <div class="copyright">
    <h1>  © All rights reserved 2021</h1>
  </div>
  
</footer>
</html>