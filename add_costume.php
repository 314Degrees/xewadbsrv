<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$newCostume['name'] = $_GET['name'];
	$newCostume['stock'] = $_GET['stock'];
	$newCostume['image_link'] = $_GET['image_link'];
	$newCostume['description'] = $_GET['description'];
	$newCostume['gender'] = $_GET['gender'];
	$newCostume['size'] = $_GET['size'];
	$newCostume['price'] = $_GET['price'];

	$query = "INSERT INTO product (name, stock, available, image_link, description, gender, size, price, rating) VALUES ('" . $newCostume['name'] . "', '" . $newCostume['stock'] . "', '" . $newCostume['stock'] . "', '" . $newCostume['image_link'] . "', '" . $newCostume['description'] . "', '" . $newCostume['gender'] . "', '" . $newCostume['size'] . "', '" . $newCostume['price'] . "', '0')";
	$result = mysqli_query($conn, $query);

	$response = array();
	$response["query_result"] = array();

	if ($result) {
		$h['isSuccess'] = "true";
	} else {
		$h['isSuccess'] = "false";
	}

	array_push($response["query_result"], $h);

	echo json_encode($response);
?>