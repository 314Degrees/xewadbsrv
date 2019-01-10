<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$query = "DELETE FROM product WHERE id = " . $_GET['id'];
	$result = mysqli_query($conn, $query);

	$response = array();
	$response["delete_result"] = array();

	if($result){
		$h['isSuccess'] = "true";
	}else {
		$h['isSuccess'] = "false";
	}

	array_push($response["delete_result"], $h);
	echo json_encode($response);
?>