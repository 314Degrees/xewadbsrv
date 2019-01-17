<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	if ($_GET['type'] == 'customer') {		
		$query = "SELECT * FROM customer WHERE username = '" . $_GET['username'] ."'";
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result) > 0 ){
			$response = array();
			$response["profile"] = array();
			while($x = mysqli_fetch_assoc($result)){
				$h['name'] = $x["name"];
				$h['username'] = $x["username"];
				$h['password'] = $x["password"];
				$h['email'] = $x["email"];
				$h['phone'] = $x["phone"];
				$h['address'] = $x["address"];
				array_push($response["profile"], $h);
			}
		}else {
			$response["message"] = "profile empty";
		}
	} else if ($_GET['type'] == 'provider') {
		$query = "SELECT * FROM provider WHERE username = '" . $_GET['username'] ."'";
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result) > 0 ){
			$response = array();
			$response["profile"] = array();
			while($x = mysqli_fetch_assoc($result)){
				$h['name'] = $x["name"];
				$h['username'] = $x["username"];
				$h['password'] = $x["password"];
				$h['email'] = $x["email"];
				$h['phone'] = $x["phone"];
				array_push($response["profile"], $h);
			}
		}else {
			$response["message"] = "profile empty";
		}
	}

	echo json_encode($response);
?>