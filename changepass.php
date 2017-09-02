<?php

include 'db.php';
$g=$_POST['email'];
$m=$_POST['oldpass'];
//echo "$m";
$h=$_POST['newpass'];
$sql="select password from adpassword where email_id='$g'";
$result=mysqli_query($conn,$sql);
while($test = mysqli_fetch_array($result))
{
	
	$id = $test['0'];
echo "$id";		
	}
	//echo "$id";
//echo "$m";
//echo "$id";		

if(strcmp($m,$id)==0)
{
mysqli_query($conn,"UPDATE adpassword  SET password='$h' where email_id='$g'")or die(mysqli_error()); 
 header('Location: rename1.php');

}
else
{
	header('Location:rename2.php');	
}
?>