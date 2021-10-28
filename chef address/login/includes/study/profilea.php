<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }
        .mainDiv
        {
            display: flex;
            border: 1px solid saddlebrown;

        }

        .information
        {
            color: #3498db;
            margin: 20px 0px 20px 20px;
            padding: 20px 0px 20px 20px;
        }
        .information1
        {
            color: #242526;
            margin: 20px 0px 20px 20px;
            padding: 20px 0px 20px 20px;
        }


    </style>
</head>
<body>

<h2 style="text-align:center">User Profile</h2>
<?php
$x = $_REQUEST['id'];
function conectionStart()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cheif_information";
    $connection = mysqli_connect($servername, $username, $password,
        $dbname);
    return $connection;
}

function conectionEnd($value)
{
    mysqli_close($value);
}


$connection = conectionStart();
$sql = "SELECT id, name, image,experienceYear,specalist,expectedSalary FROM chefs WHERE id=$x";;

$result = mysqli_query($connection, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='uploads/" . $row['image'] . "' alt='John' style='width:100%'>";
        echo "<div class='mainDiv' >
         <h3 class='information'>name:</h3> 
         <h3 class='information1'>" . $row['name'] . "</h3>
         </div>";
        echo "<div class='mainDiv'>
         <h3 class='information'>Experience Year:</h3> 
         <h3 class='information1'>" . $row['experienceYear'] . "</h3>
         </div>";
        echo "<div class='mainDiv'>
         <h3 class='information'>Expected Salary:</h3> 
         <h3 class='information1'>" . $row['expectedSalary'] . "</h3>
         </div>";
        echo "<div class='mainDiv' >
         <h3 class='information'>Specialist:</h3> 
         <h3 class='information1'>" . $row['specalist'] . "</h3>
         </div>";

    }
} else {
    echo "0 results";
}
conectionEnd($connection);


?>


</body>
</html>

