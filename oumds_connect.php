<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oumds";

$db = mysqli_connect("localhost","root","","oumds");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($connect->connect_error) 
{
  echo "Connection failed: ";
}
else
echo "Connected successfully";
?>

