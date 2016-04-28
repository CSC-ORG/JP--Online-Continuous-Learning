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



$fname=$_GET['n'];
$lname=$_GET['no'];

$email=$_GET['e'];
$password=$_GET['m'];

$sql="INSERT INTO contact (name,email,no,msg) VALUES('$fname','$email','$lname','$password')";





if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;

$conn->close();
}


?>