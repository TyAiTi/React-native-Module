<?php

// define('DB_USER', "root"); // tk DB
// define('DB_PASSWORD', ""); // mat khau
// define('DB_DATABASE', "demojwt"); //ten DB
// define('DB_SERVER', "localhost"); //localhost

// $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
// mysqli_query($conn, "SET NAMES 'utf8'");

$con=mysqli_connect("localhost","root","","DemoJWT");

mysqli_select_db($con,'DemoJWT');
mysqli_query($con,"SET NAMES 'utf8'"); 
?>