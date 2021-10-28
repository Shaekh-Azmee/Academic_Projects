<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		*

{
  margin: 0;
  padding:0;
  box-sizing: border-box;
  text-decoration: none;
  background: rgb(26,37,50);
}
h2
{
	
	text-decoration: none;
	line-height: 70px;
	text-align: center;
}

h2 a
{
	color: #fff;
}
h2 a:hover
{
	color:#C69963;
}
.logout 
{
	text-align: center;
	

}
.logout button
{
	color: white;
}
.logout button:hover
{
	color: #C69963;
}


	</style>
</head>
<body>
<h2><a href="study/form.php">Create your own profile</a></h2>
<h2><a href="study/chef.php">Visit Profile page</a></h2>
<h2><a href="../../index.php">back to homepage</a></h2>
<?php

      echo '  <form class="logout" action="../logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>

        </form>';


   
    ?>
</body>
</html>