<?php
include "connect.php";
$user=$_GET['id'];
$query= mysqli_query($con,"SELECT * from seller where username='$user'");
$row=mysqli_fetch_assoc($query);
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

    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet" type="text/css" />

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body background="img/bg.jpg">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_IN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <div class="brand"><?php echo strtoupper($row['username']) ?></div>
    <div class="address-bar"><?php echo $row['address1'] ."|" . $row['address2']."|"."Since ".$row['address3']; ?></div>

    
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo strtoupper($row['username']) ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                	<li>
                        <a href="fpage.php" ><p class="text-danger">Home</p></a>
                    </li>
                    <li>
                        <a href='comp.php?id=<?php echo $user ?>' ><p class="text-danger">Window</p></a>
                    </li>
                    <li>
                        <a href='service1.php?id=<?php echo $user; ?>'><p class="text-danger">Services</p></a>
                    </li>
                    <li>
                        <a href='review1.php?id=<?php echo $user; ?>'><p class="text-danger">Reviews</p></a>
                    </li>
                    <li>
                        <a href='contact1.php?id=<?php echo $user; ?>'><p class="text-danger">Contact Us</p></a>
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
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src='<?php echo $row['pic1']; ?>' alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src='<?php echo $row['pic2']; ?>' alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src='<?php echo $row['pic3']; ?>' alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    
                    <h3 class="brand-name"><h4 class="text-danger"><?php echo $row['tag_line'] ?></h4></h3>
                    <hr class="tagline-divider">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <div class="container" id="container">
            <div class="gallery">
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
				
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
                <a tabindex="1"><img src="img/c1.jpg"></a>
				
                <span class="close"></span>
            </div>
        </div>
 
				   </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="row">
  <div class="col-sm-6">
           <h4 class="text-danger">ABOUT US</h4>
            <div class="box"><p class="text-danger"><?php echo $row['about'] ?></p></div>	
	</div>
  <div class="col-sm-6">
         <h4 class="text-danger">FACEBOOK FEEDS</h4>
		  <div class="box"><div class="fb-page" data-href="https://www.facebook.com/burgerking/?fref=ts" data-width="400" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/burgerking/?fref=ts"><a href="https://www.facebook.com/burgerking/?fref=ts"><?php echo $row['username'] ?></a></blockquote></div></div></div>
   </div>
</div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-danger" >LOOK-BOX<img src="img/logo.png" style="width:60px; height:60px;"></h1>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>