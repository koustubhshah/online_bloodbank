<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
	<title> Online Blood Donate Management System</title>
	<link rel="stylesheet" href="blood.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--time and date-->
	<style type="text/css">
		#txt
		{
		color:red;
		text-decoration:none;
		text-align:right;
		border-radius:50px;
		}
	</style>
<div id="txt"></div>

<!--MOve to top-->
	<script language="javascript">
					// When the user scrolls down 20px from the top of the document, show the button
							window.onscroll = function() {scrollFunction()};
							function scrollFunction() 
							{
								if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
								{
									document.getElementById("myBtn").style.display = "block";
								} 
								else 
								{
									document.getElementById("myBtn").style.display = "none";
								}
							}
					// When the user clicks on the button, scroll to the top of the document
							function topFunction() 
								{
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
										if(year<1000)
										{
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
<!--head ends-->
	<!--body starts-->
		<!--header starts-->
<body bgcolor="orange"> 
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
		<!--header ends-->
<span style="font-size:36px; color:red; font-family:Calibri; padding:5px 0px 5px 10px;">Camps</span><span style="font-size:24px; color:grey; padding:5px 0px 5px 0px;"> Set up</span>
<hr style="color:grey;">

<!--body parts starts-->
<!--first div-->
<div class="talent">
	<a href="home.php"><img src="https://www.indiannavy.nic.in/sites/default/files/DSC_0126.JPG" alt="1.jpg" width="150px" height="120px" class="talent1"></a></img>
		<div class="hosiyar">
			<div class="hosiyar1">
			<li style="list-style:none;"> By Eastern Feet </li>
			</div>
		</div>
</div>
<!--second div-->			
<div class="talent">	
	<img src="http://dailytimes.com.pk/static/uploads/original/blood-donation-camp-to-be-setup-at-kcci-tomorrow-ff18037e69cedd27d01dceda9dc5076f.JPG" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">At Central Public Senior Sec. School Udaipur
			</div>
		</div>
</div>
<!--third div-->
<div class="talent">
	<img src="https://www.indiannavy.nic.in/sites/default/files/Blood_Donation_Camp_in_progress_at_NAD2.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">By Indian Navy
			</div>
		</div>
</div>
<!--fourth div-->			
<!--<div class="talent">	
	<img src="" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">By Eastern Feet
			</div>
		</div>
</div>
<!--fifth div-->
<!--<div class="talent">
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--sixth div-->			
<!--<div class="talent">	
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--seventh div-->
<!--<div class="talent">
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--eighth div-->			
<!--<div class="talent">	
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--ninth div-->
<!--<div class="talent">
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--tenth div-->			
<!--<div class="talent">	
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--eleventh div-->
<!--<div class="talent">
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--twelveth div-->			
<!--<div class="talent">	
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--thirteen div-->
<!--<div class="talent">
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--fourteenth div-->			
<!--<div class="talent">	
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--fifteenth div-->
<!--<div class="talent">
	<img src="1.jpg" alt=" " width="150px" height="150px" class="talent1"/>
		<div class="hosiyar">
			<div class="hosiyar1">Hello World
			</div>
		</div>
</div>
<!--body part ends here-->
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