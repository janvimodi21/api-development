<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'api';

// connect to mysql database
$conn= mysqli_connect ($host, $user, $password, $database) or die('database not connected');
?>