<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: Post');
//specify the Allowed header, include Content-Type and other as needed

include 'connection.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->name) && isset($data->email)) {
	$name = $data->name;
	$email = $data->email;
	//$name = $data->name;
 
 	$sql = "insert into user (name, email) values ('$name' , '$email' )";
if ($conn->query($sql) === TRUE) {
	echo json_encode(array("message" => "user added successfully"));
	} else {
		echo json_encode(array("message" => "Error: " .$sql."<br>".$conn->erroe));
	}
} else {
		echo json_encode(array("message" => "Invalid input"));
}

$conn->close();
	
?>