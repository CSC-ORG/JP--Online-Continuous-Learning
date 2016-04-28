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
$e=$_GET['ema'];

$sql="select * from chec_k where ans_id='".$i."' and user_eid='".$e."'";

$result=$conn->query($sql);
 
 if($result->num_rows>0){
	 
	  $sql="select lik from ans where idd='".$i."'";
  $result1 = $conn->query($sql);
  $row2 = $result1->fetch_assoc();
  echo $row2['lik'];
 }else{


//$sql="INSERT INTO details VALUES('".$fname."','".$lname."','".$gender"','".md5($password)."','".$email."')";





$sql="update  ans set lik=lik+1 where idd='".$i."'";





if ($conn->query($sql) === TRUE) {
   $sql="select lik from ans where idd='".$i."'";
  $result1 = $conn->query($sql);
  $row2 = $result1->fetch_assoc();
  echo $row2['lik'];
  $sql="insert into chec_k (user_eid,ans_id,lik) values('$e','$i',1)";
  $result1 = $conn->query($sql);
  
  
  
   
} else {
    echo "Error creating table: " . $conn->error;

$conn->close();
}

 }
 
?>