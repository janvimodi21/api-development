<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//database connection
include 'connection.php';

$sql = "SELECT * from user";
$result = mysqli_query($conn,$sql);

$user = array();
while($row = $result->fetch_assoc ()) {
	$user[] = $row;
}

//echo "<pre>";
//print_r($user);

echo json_encode($user);

$conn->close();
?>