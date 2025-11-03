<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');

include 'connection.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->id)){
	$id = $data->id;
 
 	$sql = "delete from user where id=$id";
	
if ($conn->query($sql) === TRUE) {
	echo json_encode(array("message" => "user deleted successfully"));
	} else {
		echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
	}
} else {
		echo json_encode(array("message" => "Invalid input"));
}

$conn->close();
	
?>