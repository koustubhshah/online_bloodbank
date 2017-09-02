<?php
include('db.php');
$conn = mysqli_connect('localhost', 'root', '','obbm')or die("uanble to connect");
$n=$_POST['name'];
$e=$_POST['email'];
$d=$_POST['domai'];
$r=$_POST['mob'];
$m=$_POST['message'];
$q="insert into message (name,email,mobile,message)values('".$n."','".$e.'@'.$d."','".$r."','".$m."')";
echo "<script>alert('message has been sent');</script>";
$r=mysqli_query($conn,$q);
mysqli_close($conn);
  header("Location: contact.php");		      
?>


