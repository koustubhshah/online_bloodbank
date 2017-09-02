<?php
$conn=mysqli_connect("localhost","root","","obbm");
//mysqli_select_db('savelife')or die("please");
if(move_uploaded_file($_FILES["pic_path"]["tmp_name"],"upload/".$_FILES["pic_path"]["name"]))
{
	$ph=$_FILES["pic_path"]["name"];
}
$a=$_POST['name'];
$b=$_POST['fname'];
$c=$_POST['gender'];
$date=$_POST['dob'];
$d=$_POST['blood-group'];
$e=$_POST['body-weight'];
$f=$_POST['email'];
$g=$_POST['country'];
$h=$_POST['state'];
$i=$_POST['city'];
$j=$_POST['area'];
$k=$_POST['address'];
$l=$_POST['pincode'];
$m=$_POST['mob1'];
$n=$_POST['mob2'];
$o=$_POST['voluntary'];
$p=$_POST['newdonor'];
$q=$_POST['eligible'];
$r=$_POST['terms'];	

$s="select * from donorregistration where email='$f'";
$t=mysqli_query($conn,$s);

while($row=mysqli_fetch_array($t))
{
$u=count($row['0']);
}
if($u>0)
{
	
header('Location:donor_rega.php');
	
}
else
{
$w="insert into donorregistration(name,fathername,gender,dob,bloodgroup,bodyweight,email,country,state,city_name,area,address,pincode,mobile1,mobile2,voluntary,newdonor,document,eligible,satisfied)values('$a','$b','$c','$date','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$ph','$q','$r')";
$qa=mysqli_query($conn,$w);
header('Location:donor_reg.php');

}




?>