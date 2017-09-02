<?php
session_start();

$conn=mysqli_connect("localhost","root","","obbm");
//mysqli_select_db('savelife')or die("please");
if(move_uploaded_file($_FILES["pic_path"]["tmp_name"],"upload/".$_FILES["pic_path"]["name"]))
{
	$ph=$_FILES["pic_path"]["name"];
}

$a=$_POST['patient'];
$b=$_POST['gender'];
$c=$_POST['bloodgroup'];
$d=$_POST['units'];
$e=$_POST['haddress'];
$f=$_POST['city'];
$g=$_POST['pincode'];
$h=$_POST['doctorname'];
$i=$_POST['whenreq'];
$j=$_POST['contactname'];
$k=$_POST['address'];
$l=$_POST['email'];
$m=$_POST['mob1'];
$n=$_POST['mob2'];
$o=$_POST['reason'];

$s="select * from userregistration where email='$l'";
$t=mysqli_query($conn,$s);

while($row=mysqli_fetch_array($t))
{
$u=count($row['0']);
}
if($u<0)
{
	
header('Location:receiveremaila.php');
	
}
else
{
$w="insert into userregistration(patient,gender,bloodgroup,units,haddress,city,pincode,doctorname,whenreq,contactname,address,email,mob1,mob2,reason,photo)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$ph')";
$qa=mysqli_query($conn,$w);
header('Location:receiver.php');
}
?>