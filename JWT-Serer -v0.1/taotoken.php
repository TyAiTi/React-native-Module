<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$json = file_get_contents('php://input');
	$obj = json_decode($json, TRUE);

	$un = $obj['USERNAME'];
	$pas = md5($obj['PASSWORD']); //nho bao mat khoang trang tranh bi Injection

	require("jwt.php");
	require("dbCon.php");	

	$qr = "	SELECT * 
			FROM 	Users 
			WHERE 	Username =	'$un'
			AND 	Password = 	'$pas' ";
	$users = mysqli_query($con,$qr);

	if (mysqli_num_rows($users)==1) {
		//login True  ---  count  rows from result
		$u = mysqli_fetch_array($users);
		$token = array();
		$token["Id"] = $u['id']; // id similar id in table users
		$token["Username"] = $u['Username']; //difference lower case, upper case
		$token["Hoten"] = $u['Hoten'];
		$token["Email"] = $u['Email'];
		$jsonwebtoken = JWT::encode($token, "dung_cho_ai_biet_nha");
		echo JsonHelper::getJson("token", $jsonwebtoken);

	}else{
		//login False   --- Nothing
		//echo "{'token': 'ERROR'}";
		echo '{"token":"ERROR"}';
	}

?>