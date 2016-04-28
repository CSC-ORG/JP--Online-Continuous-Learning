<?php
include "connect.php"; 
$name=$_GET['id'];
$query= mysqli_query($con,"SELECT * from seller where username='$name'");
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
        <link href="main.css" rel="stylesheet" type="text/css" />

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body background="bg.jpg">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_IN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <div class="brand"><?php echo strtoupper($row['username']);?></div>
    <div class="address-bar"><?php echo $row['address1']."| ". $row['address2']."| "."Since ".$row['address3'];?></div>

    
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo strtoupper($row['username']);?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="fpage.php" ><p class="text-danger">Home</p></a>
                    </li>
                   <li>
                        <a href='comp.php?id=<?php echo $name ?>' ><p class="text-danger">Window</p></a>
                    </li>
                    <li>
                        <a href='service1.php?id=<?php echo $name; ?>'><p class="text-danger">Services</p></a>
                    </li>
                    <li>
                        <a href='review1.php?id=<?php echo $name; ?>'><p class="text-danger">Reviews</p></a>
                    </li>
                    <li>
                        <a href='contact1.php?id=<?php echo $name; ?>'><p class="text-danger">Contact Us</p></a>
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
                    <h2 class="text-danger">Our
                        <strong class="text-danger">contact location</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe
            width="100%"
            height="400"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAGf1BnokDNZTx9eYWQYNt1A_mKMDaEgPk&q=<?php echo $row['address1']; ?> + <?php echo $row['address2']?>+Uttar Pradesh" allowfullscreen>
        </iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong><?php echo $row['phone'];?></strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com"><?php echo $row['email'];?></a></strong>
                    </p>
                    <p>Address:
                        <strong><?php echo $row['address1']?>
                            <br><?php echo $row['address2']?></strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="text-danger">Contact
                        <strong class="text-danger">form</strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="text-danger">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="text-danger">Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="text-danger">Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label class="text-danger">Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
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
