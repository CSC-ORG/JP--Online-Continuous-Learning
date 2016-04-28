<?php

// Inialize session


// Include database connection settings
include "/connect.php";


if(!empty($_POST['email']) && !empty($_POST ['password'])) {

        $email =$_POST['email'];
        $password =$_POST['password'];
        //echo $address;
        $query="SELECT * from user where email= '$email' and password = '$password';";
        $result=mysqli_query($con,$query);
        $r=mysqli_fetch_assoc($result); 
       

if (mysqli_num_rows($result)==1) {
// Set username session variable
	session_start();
$_SESSION['id'] = $r['email'];
$_SESSION['name'] = $r['fname'];
// Jump to secured page
header('Location: index.html');
}
else {
// Jump to login page
header('Location: userlogin.php?feedback= Incorrect password');
}
}
else 
  header('Location: userlogin.php?feedback= All fields are required ');     
?>