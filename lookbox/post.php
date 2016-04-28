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
<style>
.card {
  /***** Make height equal to width (http://stackoverflow.com/a/6615994) ****/
  display: inline-block;
  position: relative;
  width: 100%;
  /**************************************************************************/
  border-radius: 2px;
  color: rgba(0, 0, 0, 0.84);
  background: #fff;
  -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card .card-height-indicator {
  margin-top: 100%;
}
.card .card-content {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.card .card-image {
  height: 60%;
  position: relative;
  overflow: hidden;
}
.card .card-image img {
  width: 100%;
  height: 100%;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
  pointer-events: none;
}
.card .card-image .card-image-headline {
  position: absolute;
  bottom: 16px;
  left: 18px;
  color: #fff;
  font-size: 2em;
}
.card .card-body {
  height: 30%;
  padding: 18px;
}
.card .card-footer {
  height: 10%;
  padding: 18px;
}
.card .card-footer button {
  margin: 0 !important;
  position: relative;
  bottom: 25px;
  width: auto;
}
.card .card-footer button:first-child {
  left: -15px;
}

.btn-group {width: 7%}
.dropdown-menu {width: 7%;}


.btn {
    cursor: default;
    background-color: #FFF;
    border-radius: 4px;
    text-align: left;
}

.caret {
    position: absolute;
    right: 16px;
    top: 16px;
}

.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
    background-color: #FFF;    
}

.btn-group.open .dropdown-toggle {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6)
}
#ss:active {
	background-color:green;
	
}
</style>
</head>
<script>
function doit(){
	var x=localStorage.getItem('f_name');
	document.getElementById("nna").innerHTML=x;
	var x=localStorage.getItem('img');
	document.getElementById("nn").src=x;
	
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
			
			
			

            }
        }
        xmlhttp.open("GET","http://localhost/csce/api.php?req=3",true); //sending username and password to a php file to verify credentials
        xmlhttp.send();//true in above statement means data is sent asynchronously obvious as AJAX ki full form 

	
	
}




</script>





<body onload="doit()">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="height:10%">
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
				
    <div class="text" style="float:right;margin-left:40%;margin-top:-15%;">OCL</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left" style="margin-left:30%;margin-top:-8%;">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll" >
                       
					   <input placeholder="search..." style="height:5%;width:30%;margin-top:-8%;"   ></input>
					   <button type="submit">submit</button>
					   <img id="nn" src="ash.png" style="height:2%;width:5%;"> </img><h4 id="nna"  style="margin-right:50%;float:right;margin-top:-5%;">Atul</h4>
					  
					   
                    </li>
					<li class="page-scroll">
					 
					</li>
					 
                   
					
					
					
					
					
					 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

					

<section id="main" style="margin-top:10%;margin-left:30%;">







</section>


































	
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