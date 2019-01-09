<?php
	include 'connection.php';
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	if (!isset($_GET['id'])) {		
		$query = "SELECT * FROM product";
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result) > 0 ){
			$response = array();
			$response["product"] = array();
			while($x = mysqli_fetch_assoc($result)){
				$h['id'] = $x["id"];
				$h['name'] = $x["name"];
				$h['stock'] = $x["stock"];
				$h['available'] = $x["available"];
				$h['image_link'] = $x["image_link"];
				$h['description'] = $x["description"];
				$h['gender'] = $x["gender"];
				$h['size'] = $x["size"];
				$h['price'] = $x["price"];
				$h['rating'] = $x["rating"];
				array_push($response["product"], $h);
			}
		}else {
			$response["message"] = "product empty";
		}
	} else {
		$query = "SELECT * FROM product WHERE id = " . $_GET['id'];
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result) > 0 ){
			$response = array();
			$response["product"] = array();
			while($x = mysqli_fetch_assoc($result)){
				$h['id'] = $x["id"];
				$h['name'] = $x["name"];
				$h['stock'] = $x["stock"];
				$h['available'] = $x["available"];
				$h['image_link'] = $x["image_link"];
				$h['description'] = $x["description"];
				$h['gender'] = $x["gender"];
				$h['size'] = $x["size"];
				$h['price'] = $x["price"];
				$h['rating'] = $x["rating"];
				array_push($response["product"], $h);
			}
		}else {
			$response["message"] = "product empty";
		}
	}

	echo json_encode($response);
?>