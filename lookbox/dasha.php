
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

//$request = $_GET['req'];
$data = "SELECT * FROM post where domain='politics' ";

$result = $conn->query($data);
$r=0;
$po= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po= $r;

}


$data = "SELECT * FROM post where domain='science' ";

$result = $conn->query($data);
$r=0;
$po0= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po0= $r;
}



$data = "SELECT * FROM post where domain='nation' ";

$result = $conn->query($data);
$r=0;
$po1= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po1= $r;
}


$data = "SELECT * FROM post where domain='research' ";

$result = $conn->query($data);
$r=0;
$po2= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po2= $r;
}

$data = "SELECT * FROM post where domain='company' ";

$result = $conn->query($data);
$r=0;
$po3= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po3= $r;
}


$data = "SELECT * FROM post where domain='entertainment' ";

$result = $conn->query($data);
$r=0;
$po4= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po4= $r;
}

$data = "SELECT * FROM post where domain='health' ";

$result = $conn->query($data);
$r=0;
$po5= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po5= $r;
}


$data = "SELECT * FROM post where domain='sports' ";

$result = $conn->query($data);
$r=0;
$po6= 0;
if ($result->num_rows > 0 ) {
$r=0;

while($result->fetch_assoc()){
$r=$r+1;	
}
$po6= $r;
}
$outp = "[";
$outp .= '{"a":"'  . $po . '",';
$outp .= '"b":"'   . $po0        . '",';
	$outp .= '"c":"'   . $po1       . '",';
	$outp .= '"d":"'   . $po2       . '",';
	$outp .= '"e":"'   . $po3        . '",';
    $outp .= '"f":"'   . $po4        . '",';
	$outp .= '"g":"'   . $po5        . '",';
	
	
    $outp .= '"h":"'. $po6     . '"}'; 

	
	$outp .="]";
echo($outp);




//echo $po;




?>


