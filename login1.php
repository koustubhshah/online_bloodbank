<?php
 
    session_start();
   if (isset($_SESSION['email']) && ($_SESSION['password'])) 
   {
header('Location: adhome.php');
}
else
{
	header('Location: login_admin.php');
	}

// Check, if username session is NOT set then this page will jump to login page



?>