<?php
$mysqli = new mysqli("sql6.freesqldatabase.com","sql6422177","dKNFHXkf6Z","sql6422177");
console.log("mysqli",$mysqli
            )
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>

