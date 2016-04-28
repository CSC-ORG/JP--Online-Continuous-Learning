<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="doit()">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">OCL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Draft</a>
                    </li>
                    
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
					 <li>
                        <a href="../product-quick-view/sample.php" id="name"></a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
				<br><br><br>
                <h1>OCL Post </h1>

                <!-- Author -->
                <p class="lead">
                     <a href="#">Title</a>
                </p>

                <hr>

                <!-- Date/Time -->
                
             

				<script>
function doit(){

//alert("dd");

	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
              // alert("enter"); 
        xmlhttp.onreadystatechange = function() {
      
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			//alert(xmlhttp.responseText);
			
document.getElementById("main").innerHTML=xmlhttp.responseText;
		//ff();	
			
			

            }
        }
        xmlhttp.open("GET","./api.php?req=5&id="+localStorage.getItem("idh"),true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

		ff();
	
	
}
function ff(){
////alert("aa");
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
              // alert("enter"); 
        xmlhttp.onreadystatechange = function() {
      
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			//alert(xmlhttp.responseText);
			
document.getElementById("name").innerHTML=xmlhttp.responseText;
			
		localStorage.setItem("nam",xmlhttp.responseText)	;
			dd();

            }
        }
        xmlhttp.open("GET","./aa.php?req=3",true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

	



}


function dd(){
//alert("aa");
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
              // alert("enter"); 
        xmlhttp.onreadystatechange = function() {
      
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			//alert(xmlhttp.responseText);
			
//document.getElementById("name").innerHTML=xmlhttp.responseText;
			
		localStorage.setItem("idh",xmlhttp.responseText)	;
			

            }
        }
        xmlhttp.open("GET","./bb.php?req=3",true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

	



}

function add(id){
//alert(document.getElementById('ans').value);
alert(id);

if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
              // alert("enter"); 
        xmlhttp.onreadystatechange = function() {
      
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			alert(xmlhttp.responseText);
			
//document.getElementById("name").innerHTML=xmlhttp.responseText;
			
			
			

            }
        }
        xmlhttp.open("GET","./ansa.php?req=3&id="+id+"&ans="+document.getElementById(id).value+"&nn="+localStorage.getItem("nam"),true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

	



}
function draft(id){
//alert(document.getElementById('ans').value);
alert("loaded");

if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
              // alert("enter"); 
        xmlhttp.onreadystatechange = function() {
      
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			//alert(xmlhttp.responseText);
			
//document.getElementById("name").innerHTML=xmlhttp.responseText;
			
			
			

            }
        }
        xmlhttp.open("GET","./drafta.php?req=3&id="+id+"&nn="+localStorage.getItem("idh"),true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

	



}


function show(cat){

//alert(cat);

if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			//alert("rr1");
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
               //alert("enter"); 
        xmlhttp.onreadystatechange = function() {
      
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//alert(document.getElementById(h).value);
	//alert(xmlhttp.responseText);
		document.getElementById("main").innerHTML=xmlhttp.responseText;	
//document.getElementById(h).innerHTML=xmlhttp.responseText;
			
	
			

            }
        }
        xmlhttp.open("GET","./api.php?req=1101100&cat="+cat+"&id="+localStorage.getItem("idh"),true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 



}


function lik(k){

//alert(k);


if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
              // alert("enter"); 
        xmlhttp.onreadystatechange = function() {
      
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			//alert(xmlhttp.responseText);
			
document.getElementById(k).innerHTML=xmlhttp.responseText;
			
			
			

            }
        }
        xmlhttp.open("GET","./lik.php?req=3&id="+k,true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

	
}


</script>

				
				
				
				
				
				 
				
				
				
				
				
				
               
			   <div id="main">
			   </div>
			   
			

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    
                    <div class="media-body">
                   
				   </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    
                    <div class="media-body">
                        
                       
                        <div class="media">
                            
                            <div class="media-body">
                                
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
<br><br><br><br>
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>OCL Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
               <div class="well">
                    <h4>OCL Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a onclick="show('science')">Science</a>
                                </li>
                                <li><a onclick="show('nation')">Nation</a>
                                </li>
                                <li><a onclick="show('research')">research</a>
                                </li>
                                <li><a onclick="show('company')">Company</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a onclick="show('entertainment')">Entertainment</a>
                                </li>
                                <li><a onclick="show('politics')">Politics</a>
                                </li>
                                <li><a onclick="show('health')">Health</a>
                                </li>
                                <li><a onclick="show('sports')">Sports</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>OCL</h4>
                    <p>OCl is a question-and-answer website where questions are asked, answered, edited and organized by its community of users. The company was founded in March 2016, and the website was made available to the public on </p>
                </div>

				
				<div class="well">
                    <a onclick="window.open('dash.html')"><h4>Dashboard</h4></a>
                    <p>OCl  provides you facility to see the status of all provided OCL categories. </p>
                </div>
				
				
				
            </div>

        </div>
        <!-- /.row -->

     

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
