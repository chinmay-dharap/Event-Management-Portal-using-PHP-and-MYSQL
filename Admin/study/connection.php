<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'pubg'; 

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

//check connection 
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
?>