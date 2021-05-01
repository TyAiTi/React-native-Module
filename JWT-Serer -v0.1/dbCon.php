<?php
$server = "192.168.1.178";
$username = "ty";
$password = "ty171197";
$conn=mysqli_connect($server,$username,$password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }else{
  echo "Connected successfully";
  }

mysqli_select_db($con,'jwt');
mysqli_query($con,"SET NAMES 'utf8'");
?>
