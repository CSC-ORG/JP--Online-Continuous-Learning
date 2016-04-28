<?php
include "../lookbox/connect.php";

session_start();
$sender=$_SESSION['id'];
$rec= $_POST['recipient'];
$message=nl2br($_POST['message']);
$error="User Not Available";
$query=mysqli_query($con,"SELECT * from user where email='$rec'");
if($row5= mysqli_fetch_row($query)!=0)
{
if ($sender!=$rec)
{               //echo "hello";
               $result1= mysqli_query($con,"INSERT INTO message (sender,rec,message,time)values ('$sender','$rec','$message',NOW())");
               echo "
          window.location.href='sample.php';</script>";
 }
}
else
    echo "<script type='text/javascript'>alert('$error');
          window.location.href='sample.php';</script>";
?>