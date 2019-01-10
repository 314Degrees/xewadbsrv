<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$editCostume['id'] = $_GET['id'];
	$editCostume['name'] = $_GET['name'];
	$editCostume['stock'] = $_GET['stock'];
	$editCostume['image_link'] = $_GET['image_link'];
	$editCostume['description'] = $_GET['description'];
	$editCostume['gender'] = $_GET['gender'];
	$editCostume['size'] = $_GET['size'];
	$editCostume['price'] = $_GET['price'];

	$query = "UPDATE product SET name = '" . $editCostume['name'] . "', stock = '" . $editCostume['stock'] . "', image_link = '" . $editCostume['image_link'] . "', description = '" . $editCostume['description'] . "', gender = '" . $editCostume['gender'] . "', size = '" . $editCostume['size'] . "', price = '" . $editCostume['price'] . "' WHERE id = '" . $editCostume['id'] . "'";

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