<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Script-Type" content="text/jscript"  media =all/>
    
   
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<meta name="generator" content="DocPad v6.78.1" media =all/>



<meta name="keywords" content="html5, ui, library, framework, javascript" media=all/>

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A dropdown allows a user to select a value from a series of options" media=all/>
    <meta name="author" content="">



<meta name="keywords" content="responsive, grid, system, web design, rwd">

  

<link rel="stylesheet" type="text/css" class="ui" href="dist/semantic.min.css">
     
  
    <meta http-equiv="Content-Script-Type" content="text/jscript"  media =all/>
    <meta name="generator" content="DocPad v6.78.1" media =all/>


	
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>OCL</title>

	
    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
 <script src="js/freelancer.js"></script>
    <!-- Custom Fonts -->
  
    <link href="fontt.css" rel="stylesheet" type="text/css">
    <link href="" rel="stylesheet" type="text/css">

   <!--  slider-->
  <script src="js/jqBootstrapValidation.js"></script>
 <script src="js/cbpAnimatedHeader.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	
   
	
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom CSS -->
  
 <link href="css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts -->
  
   
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

   <style>
   
   .colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
   


#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}


.ui.button{
background-color:#707070;
color:#000033;
width:13.8%;
height:10%;
padding-left:10%;
padding-right:10%;
padding-bottom:10%;
padding-top:10%;
}

 
   
   </style>

</head>

<body>

    

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="height:15%">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="#page-top"> 
				
    <div class="text" style="float:left;margin-left:40%;margin-top:-15%;width:120%">OCL</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" ">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll" >
                        <a href="#services" >Features</a>
                    </li>
					
					 
                    <li class="page-scroll" >
                        <a href="#about">About</a>
                    </li>
					
                    <li class="page-scroll">
                        <a href="contact.php">Contact</a>
                    </li>
					<li>
					
					
					
					
					
					
 <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="userlogin.php" ><b>Login</b> </a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

					
					
					</li>
					
					
					
					<li>
					

					
					<a href="#" data-toggle="modal" onclick="qwe()" data-target="#myModal" style="background-color:transparent;border:0px solid black">SIGN UP</a>
					
					
					
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>ONLINE CONTINUOUS LEARNING</h1>
                        <h3>Best Answer To Any Question</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                      <!-----      <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>  --->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                  <a class="ui right pointing basic teal red ribbon label">   <h2 class="section-heading"> Online Continuous Learning</h2></a>
                    <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">OCL</a>which is creating a platform where the users can share their work like research papers, algorithms, their findings, doubts which will encourage continuous learning..</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                   <a class="ui right pointing basic teal red ribbon label">   <h2 class="section-heading"> BU information</h2></a>
                    <p class="lead">	
The intended users of this application are the people who want to get some more information of upcoming technologies, current issues and collaboration of free knowledge. 
 </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">More About:</h2>
                    <p class="lead">This is the plateform which  will make data analysis easy through dynamic creation of visualisations that are shareable to other users.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
	
    <!-- /.content-section-a -->

	
	
	
	
	 
	
	
	
	
	 <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Team</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                  
                </div>
                <div class="col-lg-4">
                 
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                   
				   
				   <img src="ash.png" class="img-circle" style="height:35%; width:35%;margin-top:5%;margin-left:-60%;margin-right:45%;"> 
					
					</img>
					
					
                </div>
				<div class="col-lg-8 col-lg-offset-5  ">
                    
					<img src="rohit.jpg" class="img-circle" style="height:35%; width:35%;margin-top:-50%;margin-left:-5%;margin-right:50%"> 
					
					</img>
					
                </div>
				<div class="col-lg-8 col-lg-offset-9 ">
                    
					<img src="kri.jpg" class="img-circle" style="height:35%; width:35%;margin-top:-50%;margin-left:-2%;"> 
					
					</img>			   
                </div>
				
				
				
				
				
				
            </div>
        </div>
		<div class="col-lg-8 col-lg-offset-2 ">
                   
				   
				  Atul Agarwal<br>
				  <a>atulcoolagarawal@gmail.com</a>
					
					
                </div>
				<div class="col-lg-8 col-lg-offset-5  ">
                  Rohit Pandey<br>
				   <a>rohit.sryrsm@gmail.com</a>
					
					
                </div>
				<div class="col-lg-8 col-lg-offset-9 ">
                    
					Krishan Gupta<br>
<a>krishangupta30@yahoo.com</a>					
                </div>
		
				
				<p class="lead"><img src="logo.png" style="height:5%; width:5%;margin-left:20%;"> </img> A global leader in providing technology enabled business solutions and services</p>
				
    </section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect To The World:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	
	
	
	
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="margin-left:45%">SIGN UP</h4>
        </div>
        <div class="modal-body" >

<div class="container" style="margin-left:-53%">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="width:50%;text-transform:capitalize">

			<h2 style="text-transform:capitalize">Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="lname" id="lname" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			<div class="row">
<div class="col-xs-12 col-sm-6 col-md-2">
<div class="form-group">
                        <input type="text" name="gender" id="gender" class="form-control input-lg" placeholder="M/F" tabindex="1">
					</div>
</div>

			<div class="form-group">
				<input type="email" name="email2" id="email2" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="pascon" id="pascon" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button"  class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" id="ch" name="t_and_c" id="t_and_c" class="hidden">
					</span>
				</div>
				
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
			
                    

            </div>
			    </div>
			<hr class="colorgraph">
			<div class="row">
			
			
				<div class="col-xs-12 col-md-6" style="margin-left:25%;"><button type="button" class="btn btn-primary" onclick="submitform( document.getElementById('fname').value  , document.getElementById('lname').value,document.getElementById('gender').value  , document.getElementById('email2').value,document.getElementById('password').value,document.getElementById('ch').checked ,document.getElementById('pascon').value   )">SUBMIT</button></div>
				<script>
				

				</script>
				<!--- submitform( document.getElementById('fname').value  , document.getElementById('lname').value,document.getElementById('gender').value  , document.getElementById('email2').value,document.getElementById('password').value,document.getElementById('ch').checked ,document.getElementById('pascon').value   )-->
			</div>

	</div>
</div>
<!-- Modal -->











</div>
</div>
</div>
</div>
</div>

<?php
session_start();

?>

<script>
function mm()
{
	
	alert("hoo");
}

	
	
	function qwe(){
	
	
	
//var session = eval('(<?php echo json_encode($_SESSION)?>)');
 
 //console.log(session);
//alert(session.dig2);
//document.getElementById("varun").src=session.dig2;
	
}
	
	
function emailavailable(email){
	
	
	
	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
                    //alert("enter");
        xmlhttp.onreadystatechange = function() {
                           
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
          //window.open("finalphp.php",_self);
		 //	 window.location = "finalphp.php"
		 alert(xmlhttp.responseText);
		 if(xmlhttp.responseText=="not"){
			 return "not";
		 }else if(xmlhttp.responseText=="taken"){
			 return "taken";
		 }

	//alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET","./api.php?req=10&email="+email,true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

	
	
	
	
}



	function vEmail(email) {
	

	
	//alert("hello");
	//alert(email);
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	//alert(re.test(email));
    return re.test(email);
}

	function submitform(fname,lname,gender,email,password,chek,pascon){
		

		//alert("hi");
		//alert(email);
//alert(gender);



//you may access session variable "x" as follows


//if(!vEmail(email)){
	//alert("Invalid email entered");return;
//}

/*if(emailavailable(email)=="taken"){
	alert("Sorry, this email is already taken. Try some other!");
	return;
}
*/



	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
                    //alert("enter");
        xmlhttp.onreadystatechange = function() {
                           
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
          //window.open("finalphp.php",_self);
		 //	 window.location = "finalphp.php"
		 //alert(xmlhttp.responseText);
		 //var xx=String(xmlhttp.responseText);
		 var xx=0;
		 //alert(xx);
		 //if(xx==1)alert("yes");
		 if(xx==1){
			 alert("Sorry this email is already registered!!");return;
		 }
		 if(xx==0){
			 //return "not";
			 
			 
			 
			 
			 
			 
			 
			 
			 


if(fname==""){
	alert("First name not entered");return;
}
if(lname==""){
	alert("Last name not entered");return;
}
if(chek==false)
{
	alert('I am not a robot  Should Be Checked');
	return;
	
}
if(password=="" || pascon=="")
{
	alert("Password Is Null");
	return;
}
if(gender=="")
{
	alert("Unspecified Gender");
	return;
}
if(gender!="M" && gender!="F" && gender!='m' && gender!='f'){
	alert("Invalid gender entered");
	return;
}
	
if(pascon!=password)
{
	alert('Passwords Do Not Match or Are Not Entered');
	return;
	
}
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
                    //alert("enter");
        xmlhttp.onreadystatechange = function() {
                           
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
          //window.open("finalphp.php",_self);
		  window.location = "csc.php"

	//alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET","./api.php?req=1&fname="+fname+"&lname="+lname+"&gender="+gender+"&email="+email+"&password="+password,true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 


//alert('end');


			 
			 
			 
			 
		 
			 
			 
		 }else if(xmlhttp.responseText=="taken"){
			 //return "taken";
			 alert("This email is already registered!");return;
		 }

	//alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET","./api.php?req=10&email="+email,true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

}

	
	
	
	function login(email,password){
//alert("ggg");
//alert("enternerd in function");
//alert(email); //correct
//alert(password);//correct
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
                    //alert("enter");
        xmlhttp.onreadystatechange = function() {
       // alert("ready state changed");
                            //alert("enter1");
                            //alert(xmlhttp.status);
                            //alert(xmlhttp.responseText);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

           var arr=JSON.parse(xmlhttp.responseText);
//alert(xmlhttp.responseText);
localStorage.setItem("id",arr[0].id);
localStorage.setItem("f_name",arr[0].f_name);
localStorage.setItem("email_id",arr[0].email_id);
localStorage.setItem("img",arr[0].img);

//alert(arr[0].id);
//alert(arr[0].f_name);
//alert(arr[0].email_id);

//alert("localStorage");
//alert(localStorage.getItem("email_id"));

//alert('success....redirecting you to your account');

//alert(xmlhttp.responseText);
//alert(localStorage.getItem("fname"));








    window.location.assign("./post.php");




            }
        }
        xmlhttp.open("GET","./api.php?req=2&emailid="+email+"&password="+password,true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 


//alert('end');


}









	
	</script>
	
	
	
	
</body>

<script>
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});

$('.ui.dropdown')
  .dropdown()
;

$('#select')
  .dropdown()
;


   

   

</script>



</html>
