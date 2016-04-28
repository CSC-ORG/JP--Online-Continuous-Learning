<?php
include "connect.php";
$id=1;
$rows=0;
$search="";
if(isset($_POST['submit'])){

            $id=1;
            $category=$_POST['category'];
            $place= $_POST['place'];
            $search=$_POST['search'];
        if(!empty($category) && empty($place))
          {	
              $query= "SELECT * from seller where category like %$category% ;";
          }
        if(empty($category) && !empty($place) )
          {
              $query="SELECT * from seller where address1 like %$place%';";
          }
        if(!empty($category) && !empty($place))
           {
           	  $query="SELECT * from seller where category like %$category% and address1 like  %$place%;";
           }
        if(empty($category)  && empty($place) && !empty($search))
           {
           	  $query= "SELECT * from selller where username like %$search% ;";
           } 
            $result=mysqli_query($con,$query);
            $rows=mysqli_num_rows($result);
            if($rows!==0)
               {
               	    while($row2==mysqli_fetch_assoc($result))
               	    	 {
               	    	 	     $phone[$id]=$row2['phone'];
               	    	 	     $username[$id]=$row2['username'];
               	    	 	     $email[$id]=$row2['email'];
               	    	 	     $tag[$id]=$row2['tag_line'];
               	    	 	     $add1[$id]=$row2['address1'];
               	    	 	     $add2[$id]=$row2['address2'];
               	    	 	     $pic1[$id]=$row2['pic1'];
               	    	 	     $id++;
               	    	 	      
                                 
               	    	 }
          

                }
 
        

    }
        



?>
<!doctype html>
<html>
<head>
	 <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Driver Registration - Bootsnipp.com</title>
       
</head>
<body>

<form action="" method="POST">
<label class="col-md-4 control-label" for="stack_id">Category</label>
                     <div class="col-md-5">
                          <select id="stack_id" name="category" class="form-control">
                          	<option value=""><option>
                            <option value="restro">Restaurant</option>
                            <option value="doctor">Doctor</option>
                            <option value="property">Property</option>
                            <option value="cars">Car showroom</option>
                           </select>
                        </div>
<label class="col-md-4 control-label" for="stack_id">Place</label>
                         <div class="col-md-5">
                          <select id="stack_id" name="place" class="form-control">
                          	<option value=""></option>
                            <option value="sector-61">Sector-61</option>
                            <option value="sector-62">Sector-62</option>
                            <option value="sector-17">Sector-17</option>
                            <option value="sector-45">Sector-45</option>
                            <option value="sector-37">Sector-37</option>
                            <option value="sector-18">Sector-18</option>
                          </select>
<input type="text" class="form-control" name="search" placeholder="Search term...">
<input  name="submit" type="submit">
</form>

<p><?php if($id>1) echo $username[$id-1];?></p>
</body>
</html>