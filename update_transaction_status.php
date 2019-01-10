<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$editTransactionStatus['id'] = $_GET['id'];
	$editTransactionStatus['status'] = $_GET['status'];
	$editTransactionStatus['track_no'] = $_GET['track_no'];

	$query = "UPDATE transaksi SET status = '" . $editTransactionStatus['status'] . "', track_no = '" . $editTransactionStatus['track_no'] . "' WHERE trans_id = '" . $editTransactionStatus['id'] . "'";

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