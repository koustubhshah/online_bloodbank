<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Online Blood Donate Management System</title>
<link rel="stylesheet" href="blood.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
 <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/func.js"></script>
<script type="text/javascript">


	function validateForm()
{
var x=document.forms["adlogin"]["email"].value;
var y=document.forms["adlogin"]["password"].value;
if (x==null || x==""||y==null || y=="")
  {
  alert("Username or password empty");
  return false;
  }
}

</script>
  <!--loading script-->
 <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<!--ends here-->

<style type="text/css">
#txt{
color:red;
text-decoration:none;
text-align:right;
border-radius:50px;
}
</style>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  border:1px groove red;
  margin: 10px 10px 20px 50px;
  text-align: left;
  float:left;
  font-family: arial;
}

.containert {
  padding: 0 16px;
}

.containert::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: white;
  font-size: 18px;
}

.button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.button1:hover, a:hover {
  opacity: 0.7;
}
</style>
<!--Login-->
<div id="txt"></div>
<!--PHP LOGIN FORM-->
	<!--MOve to top-->
<script language="javascript">
	// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
	</script>
<!--ends here-->

<script type="text/javascript">
			function showTime()
			{
				var mydate=new Date();
			var year=mydate.getYear();
				if(year<1000){
					year+=1900;
					}
			var day=mydate.getDay();
			var month=mydate.getMonth();
			var daym=mydate.getDate();
			var dayarray = new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
			var montharray = new Array("January,","February,","March,","April,","May,","June,","July,","August,","September,","October,","November,","December");
			
			
			var date=new Date();
			var h=date.getHours();
			var m=date.getMinutes();
			var s=date.getSeconds();
			var session="AM";
			if(h==0)
			{
			h=12;
			}
			if(h>12)
			{
			h=h-12;
			session="PM";
			}
			h=(h<10)? "0"+ h:h;
			m=(m<10)? "0"+ m:m;
			s=(s<10)? "0"+ s:s;
			var time=document.getElementById("txt");
			time.innerText = dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s+" "+session;
			time.textContent = dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s+" "+session;
			setTimeout(showTime,1000);
			}
			showTime();
			</script>

</head>
<body bgcolor="orange" onload="myFunction()"> 
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
	<table border="0" width="100%" height="100%">
	<tr>
	<td align="right" style="margin:2px 0px 0px 25px; padding:8px 0px 0px 35px;">
	<img src="4.jpg" width="70px" height="70px" alt="logo"></img>
	<td align="center" style="margin:0px 0px 0px 30px; padding:0px 90px 0px 2px;">
	<font size="7px"><p><u class="underline">Online Blood Bank</u></font><br><font size="6px" color="red">Management System</font></p>
	<td align="right">
					<div class="container">
						<a href="home.php">Home</a>
						<a href="about.php">About Us</a>
						<a href="camps.php">Gallery</a>
					<div class="dropdown">
						<button class="dropbtn">Register</button>
						<div class="dropdown-content">
						<a href="donor_reg.php">Donate Blood</a>
						<a href="receiver.php">Need Blood</a>
						</div>
					</div>
						<a href="donor.php">Donor List</a>
						<a href="contact.php">Contact Us</a>
						<a href="login_admin.php">Admin Login</a>
				</div>
	</table>
<ul class="breadcrumb">
  <li><i class="fa fa-home" aria-hidden="true" style="font-size:15px; padding:0px 1px 0px 0px;"></i><a href="home.php">Home</a></li>
  <li><i class="fa fa-user admin" aria-hidden="true" style="font-size:15px; padding:0px 1px 0px 0px;"></i>Admin Login</li>
</ul>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2 style="text-align:left;margin:0px 0px 0px 90px;">Admin Profile Card</h2>

<div class="card">
  <img src="koush.jpg" alt="John" style="width:100%">
  <div class="containert">
    <h1>Koustubh Shah</h1>
    <p class="title">Software Engineering Student</p>
    <p>SRM University</p>
    <div class="t" style="margin: 5px;background:none;">
    <a href="https://www.facebook.com/koush11" ><i class="fa fa-facebook"></i></a>
	<a href="https://twitter.com/koustubh_shah" class="fa fa-twitter"></a>
	<a href="https://www.linkedin.com/in/koustubh-shah-92541b9a/" class="fa fa-linkedin"></a>
	<a href="https://plus.google.com/u/0/102391280163617662696" class="fa fa-google"></a>
	<a href="https://www.youtube.com/channel/UCJ3SYCrmPCq-6LVudzWjtRw" class="fa fa-youtube"></a>
			
	</div>
   <p><a href="contact.php"><button class="button1">Contact</button></a></p>
  </div>
</div>

<div class="form" style="border:1px solid black; padding:50px 120px 10px 0px; margin:0px 50px 0px 750px;">
 <form  name="adlogin" action="password.php" method="post" onsubmit="return validateForm()">         
              <p  align="center" style="padding:50px 0px 0px 90px;">
			  <d1><strong><i>Email :</i></strong></d1>
                <input name="email" type="text" placeholder="Email Address" style="height:25px;width:250px;box-shadow: 4px 4px 4px #008888;padding:0px 0px 0px 0px;margin:0px 0px 0px 10px;"id="email" />
              </p>
              <p  align="center" style="padding:10px 0px 0px 70px;"><br/>
               <d1><strong><i> Password :</i></strong></d1>
               <input  align="center" name="password" type="password" placeholder="Enter Password" style="align:center;height:25px;width:250px;padding:0px 0px 0px 0px;margin:0px 0px 0px 10px;box-shadow: 4px 4px 5px #007888 " id="password"/>
              </p>                       
              <p align="center">
  	 <button class="button" style="border:1px yellow groove;margin:20px 0px 0px 105px;padding:5px;text-align:center;width:100px;">
	 <span> <input type="submit" name="submit" id="submit"style="background:none; border:0px;font-size:16px;" align="center" value="Login" />
           </span>
	</button> 
	<br/>
               </p>
			   <p align="center" style="margin:5px 0px 0px 100px;color:red;">USERNAME OR PASSWORD INCORRECT</p>
            </form>
  </div>     
  
<footer>
		<table border="0" align="center" width="90%">
		<tr>
		<th align="left"><u>REACH US</u>
		<th>
		<th align="center"><u>CONTACT US</u>
		</tr>
		<tr>
			<td align="justify">
			<li class="ele1"><i class="add"></i><b class="mobile">Address:</b></li>
			<li class="ele1"><span class="mobile">P.S.Girwa Quarter No. 6,</li>
			<li class="ele1"><span class="mobile">Near Kisaan Bhavan,</li>
			<li class="ele1"><span class="mobile">Udaipur(Raj),India</li>
			<li class="ele1"><i class="pin"></i><b class="mobile">Pin-Code:</b>313001</li>
			<td><li class="ele2"><img src="log1o2.jpg" width="170px" height="150px" class="img_logo"/></li>
			<td align="justify">
			<li class="ele"><i class="element"></i><b class="mobile">Mobile:</b> +91-8754561594</li>
			<li class="ele"><b class="mobile">&nbsp;Office:</b>&nbsp; +91-9462199670</li>
			<li class="ele"><i class="email"></i><b class="mobile">&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
			<li class="ele">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:koush110198@gmail.com" style="color:#FFF;">koush110198@gmail.com</a></li>
		</tr>
		</table>
		<hr/>
		
		&copy;<strong>All Copyright reserved data from koustubh</strong>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="my"></i></button>
</footer>

</table>
</body>
</html>