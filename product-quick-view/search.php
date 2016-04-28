<?php
include "../lookbox/connect.php";
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysqli_query($con,"SELECT * from user where fname like '%$q%' or email like '%$q%' LIMIT 5");
while($row=mysqli_fetch_array($sql_res))
{
$username=$row['fname'];
$email=$row['email'];
$picture=$row['picture'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<img src=<?php echo "'".$picture."'";?> style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
</div>
<?php
}
}
?>