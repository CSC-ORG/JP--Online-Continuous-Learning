
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



$data = "SELECT * FROM post where domain='politics' ";

$result = $conn->query($data);
$po= 0;
$row=$result->fetch_assoc();
$id=$row['id'];

$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$poo= $row['jj'];



$data = "SELECT * FROM post where domain='science' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$id=$row['id'];
$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po0= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po00= $row['jj'];


$data = "SELECT * FROM post where domain='nation' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$id=$row['id'];
$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po1= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po11= $row['jj'];



$data = "SELECT * FROM post where domain='research' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$id=$row['id'];
$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po2= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po22= $row['jj'];




$data = "SELECT * FROM post where domain='company' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$id=$row['id'];
$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po3= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po33= $row['jj'];



$data = "SELECT * FROM post where domain='entertainment' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$id=$row['id'];
$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po4= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po44= $row['jj'];



$data = "SELECT * FROM post where domain='health' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$id=$row['id'];
$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po5= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po55= $row['jj'];



$data = "SELECT * FROM post where domain='sports' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$id=$row['id'];
$data = "SELECT count(*) jj FROM comm where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po6= $row['jj'];
$data = "SELECT lik jj FROM ans where id='".$id."' ";
$result = $conn->query($data);
$row=$result->fetch_assoc();
$po66= $row['jj'];



$outp = "[";
$outp .= '{"a":"'  . $po . '",';
$outp .= '"b":"'   . $po0        . '",';
	$outp .= '"c":"'   . $po1       . '",';
	$outp .= '"d":"'   . $po2       . '",';
	$outp .= '"e":"'   . $po3        . '",';
    $outp .= '"f":"'   . $po4        . '",';
	$outp .= '"g":"'   . $po5        . '",';
	$outp .= '"h":"'   . $po6        . '",';
	$outp .= '"i":"'   . $poo        . '",';
	$outp .= '"j":"'   . $po00        . '",';
	$outp .= '"k":"'   . $po11        . '",';
	$outp .= '"l":"'   . $po22        . '",';
	$outp .= '"m":"'   . $po33        . '",';
	$outp .= '"n":"'   . $po44        . '",';
	$outp .= '"o":"'   . $po55        . '",';
		
    $outp .= '"p":"'. $po66     . '"}'; 

	
	$outp .="]";
echo($outp);








?>


