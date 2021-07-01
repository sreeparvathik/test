<?php
//$con=mysqli_connect("sql6.freesqldatabase.com","sql6422177","dKNFHXkf6Z","sql6422177");
$servername = "sql6.freesqldatabase.com";
$username = "sql6422177";
$password = "dKNFHXkf6Z";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
?>

