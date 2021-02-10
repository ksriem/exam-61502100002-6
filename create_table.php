<?php 
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "exam";


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn -> connect_error){
	die ("Connection failed: " . $conn -> connect_error);
}

//sql to create table
$sql = "CREATE TABLE theater (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name_movie VARCHAR(30) NOT NULL,
date_movie VARCHAR(30) NOT NULL,
username VARCHAR(50),
passwords VARCHAR(50))";

if ($conn -> query ($sql) === TRUE) {
	echo "Table theater created successsfully";
} else {
	echo "Error creating table: " . $conn -> error;
}

$conn -> close();
?>