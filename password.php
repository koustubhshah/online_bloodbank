	

    <?php
   
  session_start();

   // $username = $_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password']; 
    $conn = mysqli_connect('localhost','root','','obbm')or die("uanble to connect");
   // mysqli_select_db('savelife', $conn)or die("uanble to connect");
     
    //$username = mysqli_real_escape_string($username);
    $query = "SELECT * FROM adpassword WHERE email_id ='$email' and password='$password'" ;
   // echo $query; exit;
    $result = mysqli_query($conn,$query);
	 //print_r($result);exit;
	while($row=mysqli_fetch_array($result))
	{
		$c=count($row);
	//	$c++;
	//echo $c;exit;
	}
	if($c>0)
	{
		header('location:adhome.php');
	}
	else
	{
		header('location:unlogin.php');
	}
	
    ?>