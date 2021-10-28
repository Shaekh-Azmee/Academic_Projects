<?php
require "header.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <style type="text/css">
     body
     {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: #34495e;
     }
     
   </style>
 </head>
 <body>
  <main>
   <div class="wrapper-main">
     <section class = "section-default">
       <?php
       if(isset($_SESSION['userId']))
       {
         echo '<p class = "login-status">You are looged in!</p>';


       }
       else {
         echo '<p class = "login-status">You are logged out!</p>';
       }


        ?>

     </section>

   </div>
 </main>
 </body>
 </html>

 <?php

require "footer.php";
  ?>
