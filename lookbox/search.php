<?php
include "connect.php";
$id=1;
$rows=0;
$search="";
if(isset($_POST['submit'])){

            $id=1;
            $category=$_POST['category'];
            $place= $_POST['place'];
            $search1=$_POST['search'];

        if(!empty($category) && empty($place))
          {	
              $query= "SELECT * from seller where category like '%$category%' ;";

          }
        elseif(empty($category) && !empty($place) )
          {
              $query="SELECT * from seller where address1 like '%$place%';";
          }
        elseif(!empty($category) && !empty($place))
           {
           	  $query="SELECT * from seller where category like '%$category%' and address1 like  '%$place%';";
           }
        elseif(empty($category)  && empty($place) && !empty($search1))
           {
           	  $query= "SELECT * from seller where username like '%$search1%' ;";
           } 
        elseif(!empty($category) && !empty($search1) && empty($place))
         {

              $query= "SELECT * from seller where category='%$category%' and username='%$search1%';"; 
 
          } 
        elseif(empty($category) && !empty($search1) && !empty($place))
         {
            $query= "SELECT * from seller where address1='%$place%' and username='%$search1%';";      
         }       
         elseif(!empty($category) && !empty($search1) && !empty($place))
         {
            $query= "SELECT * from seller where address1='%$place%' and username='%$search1%' and category='%$category%';";
         }

           
            $result=mysqli_query($con,$query);
            $rows=mysqli_num_rows($result);
            if($rows!=0)
               {
               	    while($row2=mysqli_fetch_assoc($result))
               	    	 {
               	    	 	     $phone[$id]=$row2['phone'];
               	    	 	     $username[$id]=$row2['username'];
               	    	 	     $email[$id]=$row2['email'];
               	    	 	     $tag[$id]=$row2['tag_line'];
               	    	 	     $add1[$id]=$row2['address1'];
               	    	 	     $add2[$id]=$row2['address2'];
               	    	 	     $pic1[$id]=$row2['pic1'];
               	    	 	     $about[$id]=$row2['about'];
               	    	 	     $id++;
               	    	 	      
                                 
               	    	 }
          

                }
 
        

    }




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Search Results - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

.container { margin-top: 20px; }
.mb20 { margin-bottom: 20px; } 
body{ background-image:url("bg.jpg"); }
hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

.search-result .thumbnail { border-radius: 0 !important; }
.search-result:first-child { margin-top: 0 !important; }
.search-result { margin-top: 20px; }
.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
.search-result ul { padding-left: 0 !important; list-style: none;  }
.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
.search-result ul li i { padding-right: 5px; }
.search-result .col-md-7 { position: relative; }
.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
.search-result h3 > a, .search-result i { color: #248dc1 !important; }
.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 
.search-result span.plus { position: absolute; right: 0; top: 126px; }
.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
.search-result span.plus a:hover { background-color: #414141; }
.search-result span.plus a i { color: #fff !important; }
.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body >
<form action="" method="post">
<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
		    <div class="input-group">
                <div class="form-group">
                	
                    <label class="col-md-4 control-label" for="stack_id" style="background-color:lightblue;border: 2px solid darkblue; border-radius:5px;">Category</label>
                     <div class="col-md-5">
                          <select id="stack_id" name="category" class="form-control" style="background-color:lightblue;border: 2px solid darkblue; border-radius:5px;">
                          	<option value=""><option>
                            <option value="restro">Restaurant</option>
                            <option value="doctor">Doctor</option>
                            <option value="property">Property</option>
                            <option value="cars">Car showroom</option>
                           </select>
                        </div>

                 </div>
                <div class="form-group">
                       <label class="col-md-4 control-label" for="stack_id" style="background-color:lightblue;border: 2px solid darkblue; border-radius:5px;">Place</label>
                         <div class="col-md-5">
                          <select id="stack_id" name="place" class="form-control" style="background-color:lightblue;border: 2px solid darkblue; border-radius:5px;">
                          	<option value=""></option>
                            <option value="sector-61">Sector-61</option>
                            <option value="sector-62">Sector-62</option>
                            <option value="sector-17">Sector-17</option>
                            <option value="sector-37">Sector-37</option>
                           
                          </select>
                        </div>
                </div>
				         
                <input type="text" class="form-control" name="search" style="background-color:lightblue;border: 2px solid darkblue; border-radius:5px;" placeholder="Search name...">
                <span class="input-group-btn ">
                   <a href="fpage.php" class="btn btn-info">Gohome</a>
                    <input class="btn btn-info" type="submit" name="submit" value="Search">
                </span>
            </div>
        </div>
	</div>
</div>
</form>





<div class="container">

    <hgroup class="mb20">
		<h1 style="background-color:lightgrey;border: 2px solid darkblue; border-radius:5px;">Search Results</h1>
		<h2 class="lead" style="background-color:lightgrey;border: 2px solid darkblue; border-radius:5px;"><strong class="text-danger"><?php echo $rows ?></strong> results were found for the search for <strong class="text-danger"><?php echo $search ?></strong></h2>								
	</hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">
		<article class="search-result row" style="background-color:white;border: 2px solid grey; border-radius:5px;">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href='comp.php?id=<?php if ($id>1) echo $username[$id-1]; ?>' title="Lorem ipsum" class="thumbnail"><?php if($id>1) echo "<img width='300' height='300' src='".$pic1[$id-1]."' alt='Default Profile Pic'>";?></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span><?php if($id>1) echo $add1[$id-1]." ".$add2[$id-1] ;?></span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span><?php if($id>1) echo $phone[$id-1];?></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span><?php if($id>1) echo $email[$id-1] ?></span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="#" title=""><?php if($id>1) echo $username[$id-1]." "."<small>".$tag[$id-1]."</small>";?></a></h3>
				<p><?php if($id>1) echo $about[$id-1]; ?></p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>
		<article class="search-result row " style="background-color:white;border: 2px solid grey; border-radius:5px;">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href='comp.php?id=<?php if ($id>2) echo $username[$id-2]; ?>' title="Lorem ipsum" class="thumbnail"><?php if($id>2) echo "<img width='300' height='300' src='".$pic1[$id-2]."' alt='Default Profile Pic'>";?></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span><?php if($id>2) echo $add1[$id-2]." ".$add2[$id-2] ;?></span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span><?php if($id>2) echo $phone[$id-2] ?></span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span><?php if($id>2) echo $email[$id-2] ?></span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="#" title=""><?php if($id>2) echo $username[$id-2]." "."<small>".$tag[$id-2]."</small>";?></a></h3>
				<p><?php if($id>2) echo $about[$id-2]?></p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

        <article class="search-result row" style="background-color:white;border: 2px solid grey; border-radius:5px;">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href='comp.php?id=<?php if ($id>3) echo $username[$id-3]; ?>' title="Lorem ipsum" class="thumbnail"><?php if($id>3) echo "<img width='300' height='300' src='".$pic1[$id-3]."' alt='Default Profile Pic'>";?></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span><?php if($id>3) echo $add1[$id-3]." ".$add2[$id-3] ;?></span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span><?php if($id>3) echo $phone[$id-3] ?></span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span><?php if($id>3) echo $email[$id-3] ?></span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title=""><?php if($id>3) echo $username[$id-3]." "."<small>".$tag[$id-3]."</small>";?></a></h3>
				<p><?php if($id>3) echo $about[$id-3]?></p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

		<article class="search-result row" style="background-color:white;border: 2px solid grey; border-radius:5px;">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href='comp.php?id=<?php if ($id>4) echo $username[$id-4]; ?>' title="Lorem ipsum" class="thumbnail"><?php if($id>4) echo "<img width='300' height='300' src='".$pic1[$id-4]."' alt='Default Profile Pic'>";?></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span><?php if($id>4) echo $add1[$id-4]." ".$add2[$id-4] ;?></span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span><?php if($id>4) echo $phone[$id-4]; ?></span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span><?php if($id>4) echo $email[$id-4] ;?></span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title=""><?php if($id>4) echo $username[$id-4]." "."<small>".$tag[$id-4]."</small>";?></a></h3>
				<p><?php if($id>4) echo $about[$id-4];?></p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>			
     <article class="search-result row" style="background-color:white;border: 2px solid grey; border-radius:5px;">
      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href='comp.php?id=<?php if ($id>5) echo $username[$id-5]; ?>' title="Lorem ipsum" class="thumbnail"><?php if($id>5) echo "<img width='300' height='300' src='".$pic1[$id-5]."' alt='Default Profile Pic'>";?></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
          <li><i class="glyphicon glyphicon-calendar"></i> <span><?php if($id>5) echo $add1[$id-5]." ".$add2[$id-5] ;?></span></li>
          <li><i class="glyphicon glyphicon-time"></i> <span><?php if($id>5) echo $phone[$id-5]; ?></span></li>
          <li><i class="glyphicon glyphicon-tags"></i> <span><?php if($id>5) echo $email[$id-5] ;?></span></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-7">
        <h3><a href="#" title=""><?php if($id>5) echo $username[$id-5]." "."<small>".$tag[$id-5]."</small>";?></a></h3>
        <p><?php if($id>5) echo $about[$id-5];?></p>            
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
      </div>
      <span class="clearfix border"></span>
    </article>

     <article class="search-result row" style="background-color:white;border: 2px solid grey; border-radius:5px;"> 
      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href='comp.php?id=<?php if ($id>6) echo $username[$id-6]; ?>' title="Lorem ipsum" class="thumbnail"><?php if($id>6) echo "<img width='300' height='300' src='".$pic1[$id-6]."' alt='Default Profile Pic'>";?></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
          <li><i class="glyphicon glyphicon-calendar"></i> <span><?php if($id>6) echo $add1[$id-6]." ".$add2[$id-4] ;?></span></li>
          <li><i class="glyphicon glyphicon-time"></i> <span><?php if($id>6) echo $phone[$id-6]; ?></span></li>
          <li><i class="glyphicon glyphicon-tags"></i> <span><?php if($id>6) echo $email[$id-6] ;?></span></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-7">
        <h3><a href="#" title=""><?php if($id>6) echo $username[$id-6]." "."<small>".$tag[$id-6]."</small>";?></a></h3>
        <p><?php if($id>6) echo $about[$id-6];?></p>            
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
      </div>
      <span class="clearfix border"></span>
    </article>      
      

	</section>
</div>
<script type="text/javascript">

</script>
</body>
</html>
