<?php
include "../connect.php";

if(isset($_POST['name']))
{
$name=trim($_POST['name']);
$query2=mysqli_query($con,"SELECT * FROM user WHERE fname LIKE '%$name%' limit 5");
echo "<ul>";
while($query3=mysqli_fetch_array($query2))
{

?>

<li onclick='fill("<?php echo $query3['email']; ?>")'><?php echo "<div style='z-index:5000; background-color:gray; width:70px;'><img id='image' width='70' height='70' src='".$query3['picture']."'></div>". "<strong style='background-color:red;'>Name:</strong>".$query3['fname']."<br/><strong>Email:</strong> ".$query3['email']; ?></li>
<?php
}
}
?>
</ul>