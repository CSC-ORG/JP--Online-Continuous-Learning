<?php

// Inialize session


// Include database connection settings
include "connect.php";


if(!empty($_POST['username']) && !empty($_POST['password'])) {

        $username =$_POST['username'];
        $password =$_POST['password'];
        $query="SELECT * from seller where username ='$username' and password = '$password';";
        $result=mysqli_query($con,$query);
        $r=mysqli_fetch_assoc($result); 
       

if (mysqli_num_rows($result)==1) {
// Set username session variable
	session_start();
$_SESSION['username'] = $r['username'];

// Jump to secured page
header('Location: window.php');
}
else {
// Jump to login page
header('Location: csin.php?feedback= Incorrect password');
}
}
else 
  header('Location: csin.php?feedback= All fields are required ');

?>