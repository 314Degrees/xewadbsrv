<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$newCustomer['fullname'] = $_GET['fullname'];
	$newCustomer['username'] = $_GET['username'];
	$newCustomer['password'] = $_GET['password'];
	$newCustomer['email'] = $_GET['email'];
	$newCustomer['phone'] = $_GET['phone'];
	$newCustomer['address'] = $_GET['address'];

	$query = "INSERT INTO customer (name, username, password, email, phone, address) VALUES ('" . $newCustomer['fullname'] . "', '" . $newCustomer['username'] . "', '" . $newCustomer['password'] . "', '" . $newCustomer['email'] . "', '" . $newCustomer['phone'] . "', '" . $newCustomer['address'] . "')";
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