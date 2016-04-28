<?php
include "connect.php"; 
 session_start();
 if(!isset($_SESSION['username']))
 {
      header('Location: fpage.php');
 }
 $id=1;
$name= $_SESSION['username'];
$query= mysqli_query($con,"SELECT * from seller where username='$name'");
$row=mysqli_fetch_assoc($query);
$query2=mysqli_query($con,"SELECT * from reviews where compname='$name'");
if(mysqli_num_rows($query2)==0){
     $uname[$id]="";
      $comment[$id]= "";
      $rating[$id]=""; 
}
while($row2=mysqli_fetch_assoc($query2))
{
      $uname1[$id]=$row2['uname'];
      $comment1[$id]= $row2['comment'];
      $rating1[$id]=$row2['ratings'];
      $id=$id+1;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company Profile-LOOKBOX</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
</style>
</head>

<body>

    <div class="brand"><?php echo strtoupper($row['username']);?></div>
    <div class="address-bar"><?php echo $row['address1']."| ". $row['address2']."| "."Since ".$row['address3'];?></div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html"><?php echo strtoupper($row['username']);?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="window.php"><p class="text-danger">Window</p></a>
                    </li>
                    <li>
                        <a href="service.php"><p class="text-danger">Services</p></a>
                    </li>
                    <li>
                        <a href="review.php"><p class="text-danger">Reviews</p></a>
                    </li>
                    <li>
                        <a href="contact.php"><p class="text-danger">Contact Us</p></a>
                    </li>
                    <li>
                        <a href="../logout.php"><p class="text-danger">Logout</p></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">CUSTOMER
                        <strong>REVIEWS</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <h2><?php if($id>1) echo strtoupper($uname1[$id-1]);?>
                        <br>
                        <fieldset class="rating">
                           
                             <?php  if($id>1) { for ($i=0;$i<$rating1[$id-1];$i++) { echo "<img width='70' height='50' src='star.png' alt='Default Profile Pic'>";  }} ?>
                         
                        </fieldset>
  
                    </h2>
                    <p><?php if($id>1) echo $comment1[$id-1];?></p>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <h2><?php if($id>2) echo strtoupper($uname1[$id-2]);?>
                        <br>
                        <fieldset class="rating">
    
                        <?php  if($id>2) { for ($i=0;$i<$rating1[$id-2];$i++) { echo "<img width='70' height='50' src='star.png' alt='Default Profile Pic'>";  }} ?>
                        </fieldset>
                    </h2>
                    <p><?php if($id>2) echo ($comment1[$id-2]);?></p>
                    <hr>
                </div> 
                <div class="col-lg-12 text-center">
                    <h2><?php if($id>3)  echo strtoupper($uname1[$id-3]);?>
                        <br>
                        <fieldset class="rating">
                          <?php  if($id>3) { for ($i=0;$i<$rating1[$id-3];$i++) { echo "<img width='70' height='50' src='star.png' alt='Default Profile Pic'>";  }} ?> 
                         
                        </fieldset>
                    </h2>
                    <p><?php if($id>3) echo ($comment1[$id-3]);?></p>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <h2><?php if($id>4) echo strtoupper($uname1[$id-4]);?>
                        <br>
                        <fieldset class="rating">
                      <?php  if($id>4) { for ($i=0;$i<$rating1[$id-4];$i++) { echo "<img width='70' height='50' src='star.png' alt='Default Profile Pic'>";  }} ?>
                        </fieldset>
                    </h2>
                    <p><?php if($id>4) echo $comment1[$id-4];?></p>
                    <hr>
                </div>                
                
        
			</div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        
            <div class="box1">
                <div class="col-lg-12 text-center">
                    <h1 class="text-danger" >LOOK-BOX<img src="img/logo.png" style="width:60px; height:60px;"></h1>
                </div>
            </div>
        
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
