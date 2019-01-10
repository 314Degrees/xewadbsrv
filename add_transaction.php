<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$newTransaction['from_customer'] = $_GET["from_customer"];
	$newTransaction['product_id'] = $_GET["product_id"];
	$newTransaction['amount'] = '1';
	$newTransaction['status'] = 'Menunggu Pembayaran';
	$newTransaction['date_created'] = '2019-01-01';
	$newTransaction['total_price'] = '50000';

	$query = "INSERT INTO transaksi (from_customer, product_id, amount, status, date_created, total_price) VALUES ('" . $newTransaction['from_customer'] . "', '" . $newTransaction['product_id'] . "', '" . $newTransaction['amount'] . "', '" . $newTransaction['status'] . "', '" . $newTransaction['date_created'] . "', '" . $newTransaction['total_price'] . "')";

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