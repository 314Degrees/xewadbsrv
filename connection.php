<?php
// b32_23257332

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xewadbsrv";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>