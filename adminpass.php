    <?php
   
  session_start();

   // $username = $_POST['username'];
	$e=$_POST['email'];
    //$password = $_POST['password']; */
    $conn = mysqli_connect('localhost', 'root', '','obbm')or die("uanble to connect");
   // mysqli_select_db('savelife', $conn)or die("uanble to connect");
     
    //$username = mysqli_real_escape_string($username);
    $query = "SELECT * FROM adpassword WHERE emailid = '$e'" ;
    // echo $query; exit;
    $result = mysqli_query($conn,$query);
	
	while($row=mysqli_fetch_array($result))
	{
		
		$c=count($row);
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
	
/*	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM adpassword WHERE emailid = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
 //     if (!$result || mysqli_num_rows($result) == 1)

$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
 if($count == 1) 
	 {
         //$_session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: adhome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
    ?>