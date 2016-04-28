<?php 
include "connect.php";
session_start();
if(!isset($_SESSION['username']))
{
	 header('Location: window.php');
}
$comp= $_SESSION['username'];

              $name=$_POST['name'];
              $comment=$_POST['review'];
              $rating=$_POST['rating'];
             $query=mysqli_query($con,"INSERT INTO reviews values ('$comp','$name','$comment','$rating'");
              header('Location : review.php');

?>