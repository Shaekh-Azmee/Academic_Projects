<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
      body
        {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: #34495e;
     }
      a
      {
        color:#fff;
        text-decoration: none;
      }
    </style>
  </head>
  <body>

<header>
 
  <div class="header-login">
    <?php
    if(isset($_SESSION['userId']))
    {
      echo '  <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>

        </form>';


    }
    else {
      echo '  <form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/E-mail...">
          <input type="password" name="pwd" placeholder="Password...">
          <button type="submit" name="login-submit">Login</button>
          <a href="signup.php">Signup</a>


        </form>';
    }


     ?>

<h3><a href="../index.php">Back to homepage</a></h3>

  </div>
</header>


 </body>
</html>
