<?php
include "../lookbox/connect.php";
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['id'])) {
header('Location: ../demoPage.html');
}
$i= $_SESSION['id'];
$email=$_POST['name'];
$id=1;
$result3 = mysqli_query($con,"SELECT * FROM user where email='$i'");
$result2= mysqli_query($con,"SELECT * from journey where email='$email'");
$result4= mysqli_query($con,"SELECT * from user where email='$email'");
if(mysqli_num_rows($result2)==0)
{
    $gallery ="";
       $place= "";
}
else {
       $id=1;
while($row2=mysqli_fetch_assoc($result2))
   {
       $gallery[$id] =$row2['gallery'];
       $place[$id]= $row2['place'];
       $id=$id+1;
   }
}

$row3 = mysqli_fetch_assoc($result3);
$fname = $row3['fname'];
$lname = $row3['lname'];
$day = $row3['day'];
$email=$row3['email'];
$month = $row3['month'];
$year = $row3['year'];
$gender = $row3['gender'];
$picture =$row3['picture'];
$text1 =$row3['status'];
$row4= mysqli_fetch_assoc($result4);      
?>
<!doctype html>
<html>
<head>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 <script type="text/javascript">
    $('.thumb a').click(function (e) {
    $('#myModal img').attr('src', $(this).attr('data-img-url'));
});
    </script>

<script type="text/javascript">
function fill(Value)
{
$('#name').val(Value);
$('#display').hide();
}

$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#display").html("");
}
else
{
$.ajax({
type: "POST",
url: "ajax.php",
data: "name="+ name ,
success: function(html){
$("#display").html(html).show();
}
});
}
});
});
</script>

<style>
@import url(http://fonts.googleapis.com/css?family=Laila:400,700);
body  {
  background-image: url("bg.jpg");
   font-family: 'laila',serif;
}
.col-md-7 span {
   font-family: 'laila',serif;
}
.plugin{
position: fixed;
right: 0px;
width: 50px;
height: 250px;
top : 300px;
border: 2px solid black;
background-color: gray;
}




.det .nav {
    left:0%;
    margin-left:-0px;
    top:0px;
    position:absolute;
}
.det .nav>li>a:hover, .nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background:#fff;
}
.det .dropdown {
    background:#fff;
    border:1px solid #ccc;
    border-radius:4px;
    width:330px;    
}
.det .dropdown-menu>li>a {
    color:#428bca;
}
.det .dropdown ul.dropdown-menu {
    border-radius:4px;
    box-shadow:none;
    margin-top:20px;
    width:330px;
}
.det .dropdown ul.dropdown-menu:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    top: -10px;
    right: 16px;
    z-index: 10;
}
.det .dropdown ul.dropdown-menu:after {
    content: "";
    border-bottom: 12px solid #ccc;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    position: absolute;
    top: -12px;
    right: 14px;
    z-index: 9;
}


.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 20;
  margin-top: 20px;
}

.navbar-wrapper .container {
  padding-left: 0;
  padding-right: 0;
}
.navbar-wrapper .navbar {
  padding-left: 15px;
  padding-right: 15px;
}

.navbar-content
{
    width:320px;
    padding: 15px;
    padding-bottom:0px;
}
.navbar-content:before, .navbar-content:after
{
    display: table;
    content: "";
    line-height: 0;
}
.navbar-nav.navbar-right:last-child {
margin-right: 15px !important;
}
.navbar-footer 
{
    background-color:#DDD;
}
.navbar-footer-content { padding:15px 15px 15px 15px; }
.dropdown-menu {
padding: 0px;
overflow: hidden;
}







.profile{
position: absolute;
z-index: -1;
left: 50px;
top: 90px;
width: 1200px;
height: 295px;

border: 2px rgba(237, 232, 232, 0.59) solid;

padding: 0px;

margin: 0px;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

-moz-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
-webkit-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
box-shadow:  0px 0px 0px 0px rgb(128,128,128);
}

.cpic{
position: absolute;
z-index: -1;
float: left;
left: 0px;
top: 0px;
width: 332px;
height: 295px;

border: 2px rgba(237, 232, 232, 0.59) solid;

padding: 0px;

margin: 0px;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

-moz-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
-webkit-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
box-shadow:  0px 0px 0px 0px rgb(128,128,128);
}

.abm{
position: absolute;
z-index: -1;
left: 330px;
width: 1000px;
height: 300px;

border-radius: 0px 5px 5px 0px;
border: 2px rgba(237, 232, 232, 0.59) solid;

padding: 0px;

margin: 0px;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

-moz-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
-webkit-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
box-shadow:  0px 0px 0px 0px rgb(128,128,128);
}

.dp{
z-index: 2;
background-color:white;
width: 130px;
height: 137px;
position: absolute;
top: 70px;
left: 260px;
border: 2px rgba(237, 232, 232, 0.59) solid;

border-radius: 5px 5px 5px 5px;
padding: 3px;

margin: 0px;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

-moz-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
-webkit-box-shadow:  0px 0px 0px 0px rgb(128,128,128);
box-shadow:  0px 0px 0px 0px rgb(128,128,128);
}

.name{
position: absolute;
left: 40px;
top: 20px;
z-index:2;
width: 500px;
height: 100px;

border: 2px rgba(255, 255, 255, 0.96) solid;


margin: 0px;


background: rgb(255,255,255);

color: rgba(25, 25, 25, 0.64);
font-size: 40px;
font-weight: 5;
font-family: 'laila' ,serif;
font-style: normal;
text-decoration: inherit;
text-align: center;

line-height: 1.3em;


}

.info{


width: 700px;
height: 124px;
position :absolute;
top: 80px;
left: 65px;
border: 0px rgba(255, 255, 255, 0.96) solid;

padding: 16px;

margin: 50px;


background: rgb(255,255,255);

color: rgba(25, 25, 25, 0.64);
font-size: 17px;
font-weight: 5;
font-family: 'laila', serif;
font-style: normal;
text-decoration: inherit;

line-height: 1.0em;

}

.det{
position: absolute;
z-index: -1;
left: 50px;
top: 400px;
margin-top:37px;
width: 300px;
height: 50px;


border: 0px white solid;

padding: 2px;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border-radius: 0 5px 5px 0;
background-color:white;

-moz-box-shadow: inset 0px 0px 7px 0px rgb(128,128,128);
-webkit-box-shadow: inset 0px 0px 7px 0px rgb(128,128,128);
}

.det1{
width: 400px;
height: 34px;

border: 0px black solid;

padding: 0px;

margin: 4px;

background: rgba(248, 248, 248, 0.91);
}

#panel, #flip {
    padding: 10px;
    text-align: center;
background: rgb(245, 245, 245);
    border: solid 1px #c3c3c3;
border-radius: 0 5px 5px 0;
	}

#panel {
z-index: 2; 
height: 200px;
background: rgb(245, 245, 245);
    display: none;
border-radius: 0 5px 5px 0;
	}

.status{

background: rgb(245, 245, 245);
 
position:absolute;
left: 450px;
top: 400px;
width: 450px;
height: 90px;

border-radius : 5px;
border: 0px black solid;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;


}

.update{

background: rgb(245, 245, 245);
width: 400px;
height: 25px;

border-radius : 5px;
border: 0px rgb(89,89,89) solid;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

}
	

#options{

width: 400px;
height: 35px;

border-radius : 5px;
border: 0px rgb(89,89,89) solid;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;


background: rgb(245, 245, 245);

}	
	
.head{
width: 330px;
height: 30px;

border: 0px white solid;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border-radius: 0 5px 5px 0;
background: rgb(245, 245, 245);


color: rgb(25,25,25);
font-size: 18px;
font-weight: lighter;
font-family: Impact, Charcoal, sans-serif;
font-style: inherit;
text-decoration: none;
text-align: center;

line-height: 1.3em;
letter-spacing: 0.105em;
text-shadow: 3px 1px 1px rgba(89, 89, 89, 0.14);


}
	
.gallary{
z-index: -3;
position:absolute;
top: 460px;
left: 44px;
width: 330px;
height: 330px;
margin-top: 30px;

border: 0px white solid;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

border-radius: 0 5px 5px 0;
background-color:white;



}	
	
	
.gallary1{
  z-index: -3;
top: 5px;
left: 5px;
width: 330px;
height: 330px;
margin: 0px;
border: 1px white solid;

 background-color: #e5eecc;
    
border-radius: 0 5px 5px 0;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

border-radius: 0 5px 5px 0;
background-color:white;



}

.gallary11{
  z-index: -3;
float:left;
width: 109px;
height: 290px;

border: 1px white solid;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

background-color: white;

}

.thumb{
  z-index: -3;

width: 108px;
height: 73px;

border: 0px rgb(89,89,89) solid;

padding: 1px;

margin: 1px 0px 1px 0px;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

background: rgb(199, 194, 194);

}
	
.flw{
z-index:-1;
position:absolute;
top: 810px;
left: 45px;
width: 330px;
height: 300px;

border: 0px white solid;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

border-radius: 0 5px 5px 0;
background-color:white;

}


.jrny1{
z-index: -1;
position: absolute;
top: 550px;
left: 450px;
width: 450px;
height: 400px;

border: 1px rgba(89, 89, 89, 0.64) solid;
border-radius: 5px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;


background: rgb(245, 245, 245);

box-shadow: inset 0px 0px 19px 4px rgba(237, 232, 232, 0.8);
}



.jrny2{
position: absolute;
top: 970px;
left: 450px;
width: 450px;
height: 400px;

border: 1px rgba(89, 89, 89, 0.64) solid;
border-radius: 5px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;


background: rgb(245, 245, 245);

box-shadow: inset 0px 0px 19px 4px rgba(237, 232, 232, 0.8);
}
	
.post{
width: 425px;
height: 335px;
border-radius: 5px;
border: 1px rgba(89, 89, 89, 0.64) solid;

margin: 10px;

background: rgb(255,255,255);

}
#overlay {
     visibility: hidden;
     position: fixed;
     left: 0px;
     top: 0px;
     width:100%;
     height:100%;
     text-align:center;
     z-index: 1000;
background: rgb(245, 245, 245);
	 -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=77)";
filter: alpha(opacity=77);
-moz-opacity: 0.82;
-khtml-opacity: 0.77;
opacity: 0.82;

	 }
	 
#overlay div {

     width: 900px;
     margin: 50px ;
     background-color: grey;
     border: 3px solid #000;
     padding:15px;
     text-align:center;
	 height: 450px;
	 -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=77)";
filter: alpha(opacity=77);
-moz-opacity: 0.99;
-khtml-opacity: 0.99;
opacity: 0.99;
}	

</style>
<title ><?php echo $fname."'s "."Profile" ?> </title>
</head>
<body     style="background-color:rgba(237, 232, 232, 0.8)">
<!--"background-color:rgba(237, 232, 232, 0.8)"-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle();
    });
});

//function overlay() {
	//el = document.getElementById("overlay");
	//el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
//}

function printImage(image)
{
        var printWindow = window.open('', 'Print Window', 'height=400,width=500');
        printWindow.document.write('<html><head><title>Image</title>');
        printWindow.document.write('</head><body ><img src=\'');
        printWindow.document.write(image.src);
        printWindow.document.write('\' /></body></html>');
        printWindow.document.close();
        printWindow.write();
}

var image = document.getElementById('image');
printImage(image);

</script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="navbar-wrapper">
                <div class="container">
                    <div class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                        class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                                
                            </div>
                            <div class="navbar-collapse collapse">
 
                                <ul class="nav navbar-nav">
                                    <li><a href="../lookbox/index.html">Home</a></li>
									<li><a href="sample.php">Profile</a></li>
                                </ul>
               
								
								
 							  



								
                               <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                             <?php
                                                                   if($row3['picture'] == "")
                                                                        echo "<img width='120' height='120' src='default.jpg' alt='Default Profile Pic'>";
                                                                   else {
                                                                        echo "<img width='120' height='120' src='".$row3['picture']."' alt='Profile Pic'>";
                                                                        }
                                
                                                              ?>
                                                            <p class="text-center small">																	</p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span ><?php echo ucfirst($fname)." ".$lname ?></span>
                                                            <p class="text-muted small">
                                                                <?php echo $email ?></p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="updatewallet.php" class="btn btn-primary btn-sm active">Update wallet</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="changepassword.php" class="btn btn-default btn-sm">Change Passowrd</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="logout1.php" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$val='';
if(isset($_POST['submit']))
{
if(!empty($_POST['name']))
{
$val=$_POST['name'];
}
else
{
$val='';
}
}
?>
<div class="container" style="margin-top:60px;">
  <div class="row">
    
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                              <form method="post" action="profiles.php">
                                <input type="text" name="name" id="name" autocomplete="off" value="<?php echo $val;?>" class="  search-query form-control " placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger bt-xs" type="submit" name="submit" value="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                               </form>
                            </div>
                        </div>
  </div>
</div>
<div id="display" style="display:none;position:absolute;left:85px;z-index:100;background-color:lightblue;width:400px;border: 3px solid darkblue; border-radius:5px;"></div>


<div class="profile"     style="background-color:white; margin-top:30px;">



<div class="cpic">

        
  <?php
              if($row4['picture'] == "")
                  echo "<img width='330' height='290' src='default.jpg' alt='Default Profile Pic'>";
              else {
                  echo "<img width='330' height='290' src='".$row4['picture']."' alt='Profile Pic'>";
                   }
                                
                        
  ?>
</div>
          <div class="abm">
          <div class="name"><p><?php echo ucfirst($row4['fname'])." ".$row4['lname'] ?></p>
          </div>
		  <div class="info">
        <div class="update"><p><b>Status</b></p></div>
		  <p><?php echo $row4['status'] ?></p>
 
		  </div>
          </div>

</div>

<div class="det">

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOOK-BOX ZONE <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
           
            <li class="divider"></li>
            <li><a href="visited.php">Been There <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <li class="divider"></li>
            
            <li class="divider"></li>
            <li><a href="#">Favourites <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">Reviews written<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
</div>

</div>

     <div class="gallary">
          	 
                     <div class="gallary1">
					    <div class="head">Gallery</div>
                             <div class="gallary11"><div class="thumb" ><a data-toggle="modal" href="#myModal" class="btn btn-default btn-xs"><?php if($id>1) echo "<img id='image' width='120' height='70' src='".$gallery[$id-1]."' >";?></a></div><div class="thumb" ><a data-toggle="modal" href="#myModal3" class="btn btn-default btn-xs"><?php if($id>4) echo "<img width='120' height='70' src='".$gallery[$id-4]."' >"; else echo "<img width='120' height='70' src='default.jpg'>";?></a></div><div class="thumb" ><?php  if($id>7) echo "<img width='120' height='70' src='".$gallery[$id-7]."' onclick='printImage(this)' >"; else echo "<img width='120' height='70' src='default.jpg'>";?></div><div class="thumb" ><?php if($id>10) {echo "<img width='120' height='70' src='".$gallery[$id-10]."' onclick='printImage(this)'>";} else echo "<img width='120' height='70' src='default.jpg'>";?></div></div>
                              <div class="gallary11"> <div class="thumb" ><a data-toggle="modal" href="#myModal1" class="btn btn-default btn-xs"><?php if($id>2) echo "<img width='120' height='70' src='".$gallery[$id-2]."'  >";?></a></div><div class="thumb" ><a data-toggle="modal" href="#myModal4" class="btn btn-default btn-xs"><?php if($id>5) { echo "<img width='120' height='70' src='".$gallery[$id-5]."' >"; } else echo "<img width='120' height='70' src='default.jpg'>";?></a> </div><div class="thumb" onclick='overlay()'><?php  if($id>8) echo "<img width='120' height='70' src='".$gallery[$id-8]."' >"; else echo "<img width='120' height='70' src='default.jpg'>";?></div><div class="thumb" onclick='overlay()'><?php  if($id>11) echo "<img width='120' height='70' src='".$gallery[$id-11]."' >"; else echo "<img width='120' height='70' src='default.jpg'>";?></div></div>
                             <div class="gallary11"> <div class="thumb"><a data-toggle="modal" href="#myModal2" class="btn btn-default btn-xs"><?php if($id>3) echo "<img width='120' height='70' src='".$gallery[$id-3]."' >";?></a></div><div class="thumb"><a data-toggle="modal" href="#myModal5" class="btn btn-default btn-xs"><?php if($id>6) { echo "<img width='120' height='70' src='".$gallery[$id-6]."' >";} else echo "<img width='120' height='70' src='default.jpg'>";?></a> </div><div class="thumb" onclick='overlay()'><?php  if($id>9) echo "<img width='120' height='70' src='".$gallery[$id-9]."' >"; else echo "<img width='120' height='70' src='default.jpg'>";?></div><div class="thumb" onclick='overlay()'><?php  if($id>12) echo "<img width='120' height='70' src='".$gallery[$id-12]."' >"; else echo "<img width='120' height='70' src='default.jpg'>";?></div></div>
                            

                             
							 
                     </div>
     </div>

<!--<div class="flw">
<div class="gallary11"> <div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div></div>
                             <div class="gallary11"> <div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div></div>
                             <div class="gallary11"> <div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div><div class="thumb" onclick='overlay()'></div></div>
                             
</div>-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <?php if($id>1) echo "<img id='image' width='570' height='500' src='".$gallery[$id-1]."' >";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <?php if($id>1) echo "<img id='image' width='570' height='500' src='".$gallery[$id-2]."' >";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <?php if($id>3) echo "<img id='image' width='570' height='500' src='".$gallery[$id-3]."' >";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <?php if($id>4) echo "<img id='image' width='570' height='500' src='".$gallery[$id-4]."' >";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <?php if($id>5) echo "<img id='image' width='570' height='500' src='".$gallery[$id-5]."' >";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <?php if($id>6) echo "<img id='image' width='570' height='500' src='".$gallery[$id-6]."' >";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

	 

<div class="jrny1" style="margin-top:0px">
      
<h4 style="float:left; margin-right:15px; margin-left:10px;"><b><?php echo ucfirst($row4['fname']).$row4['lname']." " ?></b></h4>    <h5>    added on his journey. at <?php if($id>1) echo $place[$id-1]; ?></h5>
<div class="post">
              <?php 
                  if($id>1)
                   echo "<img width='425' height='325' src='".$gallery[$id-1]."' >";
              ?>
</div>
</div>

<div class="jrny2" style= "margin-top:10px">
<h4 style="float:left; margin-right: 15px; margin-left:10px;"><b><?php echo ucfirst($row4['fname']).$row4['lname']." " ?></b></h4>    <h5>    added on his journey at <?php if($id>2) echo $place[$id-2] ?></h5>
<div class="post">
              <?php 
                  if($id>2)
                   echo "<img width='425' height='325' src='".$gallery[$id-2]."' >";
              ?>
</div>

</div>
<!--
<div class="plugin">

</div>
-->

</body>
</html>