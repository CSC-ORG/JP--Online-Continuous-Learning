

<?php
header('Access-Control-Allow-Origin: *');	
session_start();




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lookbox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$request = $_GET['req'];

//$request=3;
if($request==1){
$fname=$_GET['fname'];
$lname=$_GET['lname'];

$email=$_GET['email'];
$password=$_GET['password'];
$gender=$_GET['gender'];
//$sql="INSERT INTO details VALUES('".$fname."','".$lname."','".$gender"','".md5($password)."','".$email."')";

$sql="INSERT INTO user (fname,lname,gender,password,email) VALUES('$fname','$lname','$gender','$password','$email')";





if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;

$conn->close();
}


}else if($request==2){ //for logins

$emailid=$_GET['emailid'];
$password=$_GET['password'];
//echo 'alert("'.$emailid.'")';
//echo 'alert("'.$password.'")';


$data = "SELECT * FROM details WHERE details.email_id ='". $emailid. "' AND details.password='".$password."'";


$result = $conn->query($data);

$outp = "[";

if ($result->num_rows > 0 ) {

//echo 'YES USER EXISTS';



while ($row1 = $result->fetch_assoc()) {

//echo $row1['id'];


if ($outp != "[") {$outp .= ",";}
    $outp .= '{"id":"'  . $row1["id"] . '",';
    $outp .= '"f_name":"'   . $row1["f_name"]        . '",';
	$outp .= '"img":"'   . $row1["img"]        . '",';
    $outp .= '"email_id":"'. $row1["email_id"]     . '"}'; 


$_SESSION['id1']=$row1['id'];




}
$outp .="]";
echo($outp);




}
else
{
//echo 'NO USER DOES NOT EXIST';

echo "False"; //user doesnt exist


}


$conn->close();

}else if($request==10){ //checking if email id exists
	
	$mail=$_GET['email'];
	
	$data = "SELECT * FROM details WHERE details.email_id ='".$mail."'";


$result = $conn->query($data);





if ($result->num_rows > 0 ) {

//echo 'YES USER EXISTS';


	//echo "1";
	
	
}else{
	
	//echo "0";
}
	
	
	$conn->close();
	
	
}else if($request==3){ //for logins


$data = "SELECT * FROM post ";

$result = $conn->query($data);

if ($result->num_rows > 0 ) {


while ($row1 = $result->fetch_assoc()) {

$data1="SELECT * FROM ans WHERE id='".$row1['id']."'";

$result1 = $conn->query($data1);
//$link="../product-quick-view/"+$row1['img'];
//echo $link;

echo "<p class ='lead'><h2> ".$row1['qwe']."
              </h2> </p>
			   <p><span ><img src=".$row1['img']." style='height:2%;width:4%;margin-top:1%;'></img>".$row1['name']."</span>&nbsp;<span class='glyphicon glyphicon-time'></span> Posted on  ".$row1['dat_e']." </p>

			 <hr>


";



$ddd=$row1['id']*1000;
$dddd=$row1['id']*10000;
$ddddd=$row1['id']*100000;

while ($row2 = $result1->fetch_assoc()) {
$dd=$row2['idd']*100;

echo " <p><h5><b> ".$row2['name']."</b></h5></p><p> <h6> ".$row2['result']."</h6></p>

  <a style='margin-left:90%;margin-top:-15%;' onclick='lik(".$row2['idd'].")'>Voteup <a id='".$row2['idd']."'>".$row2['lik']."</a></a>      </ul>
<div id='".$dd."'></div>
<hr>
";




}




echo "
 <a onclick='con(".$ddd.")' >comment</a> <a style='margin-left:40%;' onclick='draft(".$row1['id'].")'>Draft</a> 
 
</div>
<div id=".$ddd.">    </div>
<textarea id=".$dddd." rows='4' style='width:90%;' ></textarea><button onclick='comm(".$dddd.")'>Click</button>


 <div class='well'>
                    <h4>Leave an Answer:</h4>
                    <form role='form'>
                        <div class='form-group'>
                            <textarea class='form-control' rows='2' id=".$ddddd."></textarea>
                        </div>
						
						
                        <button type='submit' class='btn btn-primary' onclick='add(".$row1['id'].")' >Submit</button>
                    </form>
                </div>



<hr>";





}
}
else
{

echo "False"; //user doesnt exist

}


$conn->close();

}else if($request==5){ //for logins

$rr=$_GET['id'];

$data = "SELECT * FROM draft  where user_id = '".$rr."' ";

$result = $conn->query($data);

if ($result->num_rows > 0) {


while ($row1 = $result->fetch_assoc()) {

$data1="SELECT * FROM post WHERE id='".$row1['id']."'";

$result1 = $conn->query($data1);



$row2 = $result1->fetch_assoc();





echo "<p class ='lead'><h2> ".$row2['qwe']."
              </h2> </p>
			   <p><span ><img src=".$row2['img']." style='height:2%;width:4%;margin-top:1%;'></img>".$row2['name']."</span>&nbsp;<span class='glyphicon glyphicon-time'></span> Posted on  ".$row2['dat_e']." </p>

			 <hr>
			 


";

$ddd=$row2['id']*1000;
$dddd=$row2['id']*10000;
$ddddd=$row2['id']*100000;


$data2="SELECT * FROM ans WHERE id='".$row1['id']."'";

$result2 = $conn->query($data2);



while ($row3 = $result2->fetch_assoc()) {
$dd=$row3['idd']*100;
echo " <p><h5><b> ".$row3['name']."</b></h5></p><p> <h6> ".$row3['result']."</h6></p>

  
<hr>
";
//<a style='margin-left:90%;margin-top:-15%;' onclick='lik(".$row3['idd'].")'>Voteup <a id='".$row3['idd']."'>".$row3['lik']."</a></a>      </ul>
//<div id='".$dd."'></div>


}











}



}

else
{

echo "Sorry! No draft is here"; //user doesnt exist

}


$conn->close();

//echo "hh";
}else if($request==330){

$name=$_GET['nn'];
$coon=$_GET['con'];
$g=$_GET['id'];
//$sql="INSERT INTO details VALUES('".$fname."','".$lname."','".$gender"','".md5($password)."','".$email."')";

$sql="INSERT INTO comm (id,content,name,date) VALUES('$g','$coon','$name',NOW())";


$conn->query($sql);




}else if($request==331){


$g=$_GET['id'];
//$sql="INSERT INTO details VALUES('".$fname."','".$lname."','".$gender"','".md5($password)."','".$email."')";

$sql="select * from comm where id='".$g."'";

$result2 = $conn->query($sql);



while ($row3 = $result2->fetch_assoc()) {


echo " <p><h4> ".$row3['name']." ".$row3['date']." </h4></p><p>  ".$row3['content']."</p><hr>";


}



}else if($request==11011){

$a=$_GET['cat'];
$b=$_GET['q'];
$c=$_GET['nam'];
$d=$_GET['id'];

$sql="select picture from user where email='".$d."'";
$result2 =$conn->query($sql);
$row3 = $result2->fetch_assoc();
$rr='http://localhost/product-quick-view/'.$row3['picture'];
//echo $d;
//echo $rr;



$sql="insert into post (name,dat_e,qwe,domain,img) values ('$c',NOW(),'$b','$a','$rr') ";





if ($conn->query($sql) === TRUE) {
   // echo "Record inserted successfully";
} else {
   // echo "Error creating table: " . $conn->error;

$conn->close();
}





}else if($request==110110){ //for logins
$d=$_GET['cat'];

$data = "SELECT * FROM post where domain='".$d."' ";

$result = $conn->query($data);

if ($result->num_rows > 0 ) {


while ($row1 = $result->fetch_assoc()) {

$data1="SELECT * FROM ans WHERE id='".$row1['id']."'";

$result1 = $conn->query($data1);


echo "<p class ='lead'> ".$row1['qwe']."
               </p>
			   <p><span ><img src=".$row1['img']." style='height:2%;width:4%;margin-top:1%;'></img>".$row1['name']."</span>&nbsp;<span class='glyphicon glyphicon-time'></span> Posted on August ".$row1['dat_e']." </p>

			 


";



$ddd=$row1['id']*1000;
$dddd=$row1['id']*10000;
$ddddd=$row1['id']*100000;

while ($row2 = $result1->fetch_assoc()) {
$dd=$row2['idd']*100;

echo " <p><h4> ".$row2['name']."</h4></p><p>  ".$row2['result']."</p>

  <a style='margin-left:30%;' onclick='lik(".$row2['idd'].")'>Voteup <a id='".$row2['idd']."'>".$row2['lik']."</a></a>      </ul>
<div id='".$dd."'></div>
<hr>
";




}




echo "
 <a onclick='con(".$ddd.")' >comment</a> <a style='margin-left:40%;' onclick='draft(".$row1['id'].")'>Draft</a> 
 
</div>
<div id=".$ddd.">    </div>
<textarea id=".$dddd." rows='4' style='width:90%;' ></textarea><button onclick='comm(".$dddd.")'>Click</button>


 <div class='well'>
                    <h4>Leave an Answer:</h4>
                    <form role='form'>
                        <div class='form-group'>
                            <textarea class='form-control' rows='2' id=".$ddddd."></textarea>
                        </div>
						
						
                        <button type='submit' class='btn btn-primary' onclick='add(".$row1['id'].")' >Submit</button>
                    </form>
                </div>



<hr>";





}
}
else
{

echo "No Post"; //user doesnt exist

}


$conn->close();

}else if($request==1101100){ //for logins
$d=$_GET['cat'];

$id=$_GET['id'];
$data8 = "SELECT * FROM draft where user_id='".$id."' ";
$result = $conn->query($data8);
while ($row9 = $result->fetch_assoc()) {



$data = "SELECT * FROM post where domain='".$d."' and id= '".$row9['id']."'";

$result = $conn->query($data);

if ($result->num_rows > 0 ) {


while ($row1 = $result->fetch_assoc()) {

$data1="SELECT * FROM ans WHERE id='".$row1['id']."'";

$result1 = $conn->query($data1);


echo "<p class ='lead'> ".$row1['qwe']."
               </p>
			   <p><span ><img src=".$row1['img']." style='height:2%;width:4%;margin-top:1%;'></img>".$row1['name']."</span>&nbsp;<span class='glyphicon glyphicon-time'></span> Posted on August ".$row1['dat_e']." </p>

			 


";



$ddd=$row1['id']*1000;
$dddd=$row1['id']*10000;
$ddddd=$row1['id']*100000;

while ($row2 = $result1->fetch_assoc()) {
$dd=$row2['idd']*100;

echo " <p><h4> ".$row2['name']."</h4></p><p>  ".$row2['result']."</p>

  <a style='margin-left:30%;' onclick='lik(".$row2['idd'].")'>Voteup <a id='".$row2['idd']."'>".$row2['lik']."</a></a>      </ul>
<div id='".$dd."'></div>
<hr>
";




}




echo "
 <a onclick='con(".$ddd.")' >comment</a> <a style='margin-left:40%;' onclick='draft(".$row1['id'].")'>Draft</a> 
 
</div>
<div id=".$ddd.">    </div>
<textarea id=".$dddd." rows='4' style='width:90%;' ></textarea><button onclick='comm(".$dddd.")'>Click</button>


 <div class='well'>
                    <h4>Leave an Answer:</h4>
                    <form role='form'>
                        <div class='form-group'>
                            <textarea class='form-control' rows='2' id=".$ddddd."></textarea>
                        </div>
						
						
                        <button type='submit' class='btn btn-primary' onclick='add(".$row1['id'].")' >Submit</button>
                    </form>
                </div>



<hr>";





}
}
else
{

echo "No Post"; //user doesnt exist

}


$conn->close();

}
}














?>


