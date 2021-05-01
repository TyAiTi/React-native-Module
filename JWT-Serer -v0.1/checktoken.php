<?php
	$token = $_GET["token"];
	require("jwt.php");

	$json = JWT::decode($token,"dung_cho_ai_biet_nha",true);
	$chuoi = json_encode($json);
	echo json_encode($json);
	//echo $json->id;
	
?>