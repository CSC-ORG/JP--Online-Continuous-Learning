<?php
header('Access-Control-Allow-Origin: *');	
session_start();




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lookbox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$request = $_GET['req'];



$id=$_GET['id'];
//$ans=$_GET['ans'];

$nn=$_GET['nn'];


$sql="INSERT INTO draft (id,user_id) VALUES('$id','$nn')";





if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;

$conn->close();
}


?>