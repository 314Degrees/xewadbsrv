<?php
include 'connection.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$username = $_GET['username'];
$password = $_GET['password'];

$query = "SELECT * FROM customer WHERE username='" . $username ."' AND password='" . $password . "'";

$result = mysqli_query($conn, $query);

$response = array();
$response["login_result"] = array();

if(mysqli_num_rows($result) > 0 ){
	$h['isSuccess'] = "true";
}else {
	$h['isSuccess'] = "false";
}

array_push($response["login_result"], $h);
echo json_encode($response);
?>