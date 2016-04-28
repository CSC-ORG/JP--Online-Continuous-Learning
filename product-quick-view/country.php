<?php 
include "../lookbox/connect.php";

if (isset($_REQUEST['query'])) {

	$query = $_REQUEST['query'];
	
	$sql = mysqli_query ($con,"SELECT * FROM user WHERE email LIKE '%{$query}%'");
	$array = array();
	
	while ($row = mysql_fetch_assoc($sql)) {
		$array[] = $row['fname'];
	}
	
	echo json_encode ($array); //Return the JSON Array

}
?>