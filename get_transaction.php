<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	if (!isset($_GET['id'])) {		
		$query = "SELECT * FROM transaksi WHERE status <> 'Telah Dikembalikan'";
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result) > 0 ){
			$response = array();
			$response["transaction"] = array();
			while($x = mysqli_fetch_assoc($result)){
				$h['trans_id'] = $x["trans_id"];
				$h['from_customer'] = $x["from_customer"];
				$h['product_id'] = $x["product_id"];
				$h['amount'] = $x["amount"];
				$h['status'] = $x["status"];
				$h['track_no'] = $x["track_no"];
				$h['date_created'] = $x["date_created"];
				$h['max_delivery_date'] = $x["max_delivery_date"];
				$h['date_returned'] = $x["date_returned"];
				$h['total_price'] = $x["total_price"];
				$h['returned_track_no'] = $x["returned_track_no"];
				array_push($response["transaction"], $h);
			}
		}else {
			$response["message"] = "transaction empty";
		}
	} else {
		$response["message"] = "dengan id";
	}

	echo json_encode($response);
?>