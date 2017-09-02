
<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>
<title> Online Blood Donate Management System</title>
<link rel="stylesheet" href="blood.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
  <!--loading script-->
  <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

<script type="text/javascript" language="javascript">
function validate1()
	 {
		 if (document.getElementById("name").value == "")
		 {
			 alert("Please enter Name");
			 document.getElementById("name").focus();
			 return false;
		 }
		 //name
		 if (document.getElementById("fname").value == "")
		 {
			 alert("Please enter Father Name");
			 document.getElementById("fname").focus();
			 return false;
		 }
		 //father name
		 if (document.getElementById("gender").value == "")
		 {
			 alert("Select Gender");
			 document.getElementById("gender").focus();
			 return false;
		 }
		 //gender
		 if (document.getElementById("dob").value == "")
		 {
			 alert("Select Date of Birth");
			 document.getElementById("dob").focus();
			 return false;
		 }
		 //dob
		 if (document.getElementById("blood-group").value == "")
		 {
			 alert("Select Blood Group");
			 document.getElementById("blood-group").focus();
			 return false;
		 }
		 //Blood Group
		 if (document.getElementById("body-weight").value == "")
		 {
			 alert("Please enter Body Weight");
			 document.getElementById("body-weight").focus();
			 return false;
		 }
		 //Body-weight
		 if (document.getElementById("email").value == "")
		 {
			 alert("Please enter E-mail");
			 document.getElementById("email").focus();
			 return false;
		 } 
		         var emailPattern=/^([A-Za-z])$/;
		         var emailid=document.getElementById("email").value.charAt(0);
		         var matchArray = emailid.match(emailPattern);
	         if (matchArray == null)
	         {
		         alert("Your E-mail seems incorrect. Please start with alphabet and try again. ex:s@d.com");
		         document.getElementById("email").focus();
		         return false;
	         }
		         var emailPat =/^([\w]+)(\.[\w]+)*@([\w\-]+)(\.[\w]{2,7})(\.[a-z]{2})?$/;
		         var emailid=document.getElementById("email").value;
		         var matchArray = emailid.match(emailPat);
	         if (matchArray == null)
	         {
		         alert("Your E-mail seems incorrect. Please try again.");
		         document.getElementById("email").focus();
		         return false;
	         }
			 //email
			  	  if (document.getElementById("country").value == "")
	         {
		         alert("Please select country");
		         document.getElementById("country").focus();
		         return false;
	         }
			//country
				  if (document.getElementById("state").value == "")
	         {
		         alert("Please select state");
		         document.getElementById("state").focus();
		         return false;
	         }
		//state
		  if (document.getElementById("city").value == "")
	         {
		         alert("Please select city");
		         document.getElementById("city").focus();
		         return false;
	         }
		 //city
		 if (document.getElementById("area").value == "")
	         {
		         alert("Please enter area");
		         document.getElementById("area").focus();
		         return false;
	         }
			//area
			if (document.getElementById("address").value == "")
	         {
		         alert("Please enter address");
		         document.getElementById("address").focus();
		         return false;
	         }
			//address
			 if (document.getElementById("pincode").value == "")
	         {
		         alert("Please enter pincode");
		         document.getElementById("pincode").focus();
		         return false;
	         }
			  var digits="0123456789";
	         var temp;
	         for (var i=0;i<document.getElementById("pincode").value.length;i++)
             {
                       temp=document.getElementById("pincode").value.substring(i,i+1);
                       if (digits.indexOf(temp)==-1)
                       {
                                alert("Please enter numbers only");
                                document.getElementById("pincode").focus();
                                return false;
                       }
             }	
		//pincode
		 if (document.getElementById("mob1").value == "")
	         {
		         alert("Please enter Phone");
		         document.getElementById("mob1").focus();
		         return false;
	         }
	      var digits="0123456789-+()";
	         var temp;
	         for (var i=0;i<document.getElementById("mob1").value.length;i++)
             {
                       temp=document.getElementById("mob1").value.substring(i,i+1);
                       if (digits.indexOf(temp)==-1)
                       {
                                alert("Please enter numbers only");
                                document.getElementById("mob1").focus();
                                return false;
                       }
             }	
			 //mob1
		 if (document.getElementById("mob2").value == "")
	         {
		         alert("Please enter Phone");
		         document.getElementById("mob2").focus();
		         return false;
	         }
	      var digits="0123456789-+()";
	         var temp;
	         for (var i=0;i<document.getElementById("mob2").value.length;i++)
             {
                       temp=document.getElementById("mob2").value.substring(i,i+1);
                       if (digits.indexOf(temp)==-1)
                       {
                                alert("Please enter numbers only");
                                document.getElementById("mob2").focus();
                                return false;
                       }
             }	
			 //mob2
			  if (document.getElementById("pic_path").value == "")
	         {
		         alert("please select one ");
		         document.getElementById("pic_path").focus();
		         return false;
	         }
    }
	function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","search1.php?q="+str,true);
xmlhttp.send();
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
  <li><i class="fa fa-user" aria-hidden="true" style="font-size:15px; padding:0px 1px 0px 0px;"></i>Donate Blood</li>
  <li><i class="fa fa-medkit" aria-hidden="true" style="font-size:15px; padding:0px 1px 0px 0px;"></i><a href="receiver.php">Need Blood</a></li>
</ul>
<table border="0" align="left" width="25%"style="float:left;padding:0px 0px 0px 0px;margin:0px 30px 0px 10px;">
<tr>
<td>
<img src="donate.jpeg" width="320px" height="320px"></img>
</tr>

</table>
<table border="0" cellspacing="10px" cellpadding="2px" class="reg_table" style="float:left; margin:0px 0px 20px 0px;">
	<form method="post" name="dreg" action="dreginset.php" onSubmit="return validate1()" enctype="multipart/form-data">
		<tr>
			<td>
				<label>Name<br></label>
				<input type="text" size="72%" name="name" placeholder="Your good name" style="height:20px; padding:0px 0px 0px 5px;" required></input>
			</td>
		</tr>
		
		<tr>
			<td>
				<label>Father Name</label><br>
				<input type="text" size="72%" name="fname" placeholder="Father Name" style="height:20px; padding:0px 0px 0px 5px;" required></input>
			</td>
		</tr>
		
		<tr>
			<td>
				<label>Gender</label><br>
					<select name="gender" style="width: 100%; height:25px;" required>
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>
			<label>DOB</label><br>
				<input id="datepicker" name="dob" placeholder="MM/DD/YYYY" size="72%" style="height:20px; padding:0px 0px 0px 5px;" required></input>
			</td>	
		</tr>
		<tr>
			<td>
				<label>Blood Group</label><br>
					<select name="blood-group" style="width:100%;height:25px;" required>
						<option value="">Select</option>
						<option value="A+">A+</option>
						<option value="B+">B+</option>
						<option value="O+">O+</option>
						<option value="AB+">AB+</option>
						<option value="A1+">A1+</option>
						<option value="A2+">A2+</option>
						<option value="A1B+">A1B+</option>
						<option value="A2B+">A2B+</option>
						<option value="A-">A-</option>
						<option value="B-">B-</option>
						<option value="O-">O-</option>
						<option value="AB-">AB-</option>
						<option value="A1-">A1-</option>
						<option value="A2-">A2-</option>
						<option value="A1B-">A1B-</option>
						<option value="A2B-">A2B-</option>
						<option value="Bombay O+">Bombay O+</option>
						<option value="Bombay O-">Bombay O-</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>
				<label>Body Weight<br></label>
				<input type="text" size="72%" name="body-weight" placeholder="Weight in Kgs"style="height:20px; padding:0px 0px 0px 5px;" required></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Email ID<br></label>
				<input type="text" size="72%" name="email" placeholder="Email Address"style="height:20px; padding:0px 0px 0px 5px;" required></input>
				<br>Email already exist.Try another one.....
			</td>
		</tr>
		<tr>
			<td>
				<label>Country</label><br>
					<select name="country" style="width:100%; height:25px;" required>
						<option value="">Select</option>
	<?php
		$conn=mysqli_connect('localhost','root','','obbm');
		$sql="select * from countries";
		$rs=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			$c=$row['countryName'];
			echo "<option value='$c'>".$c."</option>";
		}
	?>
					</select>
			</td>
		</tr>
		<tr>
			<td>
				<label>State</label><br>
					<select name="state" style="width:100%; height:25px;" onchange="showUser(this.value)" required>
						<option value="">Select</option>
<?php
	$sql="select * from state";
	$rs=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($rs))
	{
		$c=$row['statenm'];
		echo "<option value='$c'>".$c."</option>";
	}
?>		

		</select>
			</td>
		</tr>
		<tr>
			<td>
			<div id="txtHint">
				<label> Select City</label><br>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label>Area<br></label><input type="text" size="72%" name="area" placeholder="Insert Area"style="height:20px; padding:0px 0px 0px 5px;" required></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Address<br></label><textarea cols="74" rows="5" name="address" placeholder="Full Address" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Pincode<br></label>
				<input type="text" size="72%" name="pincode" placeholder="Insert Pincode" style="height:20px; padding:0px 0px 0px 5px;" required></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Contact-1<br></label>
				<input type="text" size="72%" maxlength="10" name="mob1" placeholder="Contact Number-1"style="height:20px; padding:0px 0px 0px 5px;" required>
				</input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Contact-2<br></label>
				<input type="text" size="72%" maxlength="10" name="mob2" placeholder="Contact Number-2" style="height:20px; padding:0px 0px 0px 5px;">
				</input>
			</td>
		</tr>
		<tr>
			<td style="font-size:20px; padding:0px 0px 0px 10px">
				<input type="checkbox" style="padding:0px 0px 0px 20px; zoom:1.2;" name="voluntary" value="Yes" checked>Voluntary Donor</input>
			</td>
		</tr>
		<tr>
			<td>
				<label>New Donor</label><br>
					<select name="newdonor" style="width:100%; height:25px;" required>
						<option value="">Select</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
						</select>
			</td>
		</tr>
		<tr>
			<td style="padding:0px 0px 4px 0px;">
				<label>Upload Photo</label><br>
					<input type="file" size="72%" name="pic_path"style="height:20px; background:white;padding:6px 285px 6px 5px;" required></input>
			</td>
		</tr>
		<tr>
			<td style="color:black; text-align:justify;">
				<input type="checkbox" style="zoom:1.2;" name="eligible" value="Yes" required>I have read the eligibility criteria and confirm that i am eligible to donate<br>blood.
				</input>
			</td>
		</tr>
		<tr>
			<td style="color:black; text-align:justify;">
				<input type="checkbox" name="terms" value="Satisfied" style="zoom:1.2;" required>I agree to the <a href="terms.html" required>Terms and Conditions</a> and consent to have my contact and <br>donor information published to the potential blood recipients.
				</input>
			</td>
		</tr>
		<tr>
			<td style="padding:10px 0px 2px 200px;">
				<input type="submit" name="submit" value="Register Now" style="zoom:1.3;padding:4px 2px 2px 2px;background-color:red;border:1px solid red;"></input>
			</td>
		</tr>
	</form>
</table>
<table border="0" align="left" width="25%"style="float:left;padding:0px 0px 0px 0px;margin:0px 10px 0px 30px;">
<tr>
<td>
<img src="donate1.jpeg" width="320px" height="320px"></img>
</tr>
</table>
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