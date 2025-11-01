<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//database connection
include 'connection.php';

//access data from $_post insted of json_decode
if (isset($_POST['name']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$sql = "insert into user (name, email) values ('$name' , '$email' )";
	$result = mysqli_query($conn,$sql);
	
	if ($result) {
		echo json_encode(array("status"=>200,"message" => "user added successfully"));
	} else {
		echo json_encode(array("message" => "erroe inserting data"));
	}
} else {
	echo json_encode(array("message" => "Invalid input"));
	}
	
mysqli_close($conn);
?>
