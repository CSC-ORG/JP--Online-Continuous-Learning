<?php 
include "connect.php";


	  $name= $_POST['name'];
	  $category=$_POST['category'];
	  $add1=$_POST['add1'];
	  $add2=$_POST['add2'];
	  $add3=$_POST['add3'];
	  $tag=$_POST['tag'];
	  $fb=$_POST['fb_link'];
	  $about=$_POST['about'];
	  $password=$_POST['confirm_password'];
	  $phone_no=$_POST['phone'];
	  $email=$_POST['email'];

	    
        mysqli_query($con,"INSERT INTO seller(username,password,address1,address2,address3,fb_link,about,tag_line,category,phone,email) values('$name','$password','$add1','$add2','$add3','$fb','$about','$tag','$category','$phone_no','$email');");
         move_uploaded_file($_FILES['file1']['tmp_name'],"".$_FILES['file1']['name']);
                $q = mysqli_query($con,"UPDATE seller SET pic1 = '".$_FILES['file1']['name']."' WHERE username='$name'");  
         move_uploaded_file($_FILES['file2']['tmp_name'],"".$_FILES['file2']['name']);
                $q = mysqli_query($con,"UPDATE seller SET pic2 = '".$_FILES['file2']['name']."' WHERE username='$name'"); 
                move_uploaded_file($_FILES['file3']['tmp_name'],"".$_FILES['file3']['name']);
                $q = mysqli_query($con,"UPDATE seller SET pic3= '".$_FILES['file3']['name']."' WHERE username = '$name'");  
                header('Location: window.php');  
          session_start();
          $_SESSION['username']=$name;
        

?>

