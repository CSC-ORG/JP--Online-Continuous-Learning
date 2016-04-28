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


$i=$_GET['id'];
$ii=$_GET['ms'];
$sql="update  ans set lik=lik+1 where idd='".$i."'";





if ($conn->query($sql) === TRUE) {
  
   
} else {
    echo "Error creating table: " . $conn->error;

$conn->close();
}


?>