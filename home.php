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

		<!--slideshow starts-->
	<p>
		<script class="auto_image" type="text/javascript">
				var slideimages=new Array()
				function slideshowimages()
				{
					for (i=0;i<slideshowimages.arguments.length;i++)
					{
					slideimages[i]=new Image()
					slideimages[i].src=slideshowimages.arguments[i]
					}
				}
		</script>
	<img src='1.jpg' class="auto_image" name="slide">
		<script type="text/javascript">
								slideshowimages("3.jpg","1.jpg","2.jpg","5.jpg","6.jpg")
								var slideshowspeed=3000
								var whichimage=0
							function slideit()
									{
									if (!document.images)
										return
											document.images.slide.src=slideimages[whichimage].src
									if (whichimage<slideimages.length-1)
											whichimage++
										else
											whichimage=0
      
						setTimeout("slideit()",slideshowspeed)
									}
						slideit()
		</script>
	</p>
	<!--slideshow ends-->
<!--search button-->
		<script>
						function abc()
						{
							alert("SELECTED");
						}
		</script>

		<table id="search1" class="searchtable" border="0" width="35%" height="500px" cellspacing="5px" cellpadding="3px">
			<tr>
				<th>
				<h2>SEARCH DONOR</h2>
				<hr/>
			</tr>
			<tr>
				<th align="justify">Search Type
			</tr>
			<tr>
				<td>
					<select class="area_select">
						<option value="Pincode">Pincode</option>
						<option value="Area">Area</option>
						<option value="State">State</option>
						<option value="City">City</option>
					</select>
			</tr>
			<tr>
				<th align="justify">Blood Group
			</tr>
			<tr>
				<td>
					<select class="blood_group">
						<option value="A+">A+</option>
						<option value="AB+">AB+</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB-">AB-</option>
						<option value="O-">O-</option>
						<option value="O+">O+</option>
						<option value="A-">A-</option>
					</select>
			</tr>
			<tr>
				<th align="justify">Search Text
			</tr>
			<tr>
				<td>
					<input type="" name="search" placeholder="Search For Blood.." class="search"></input><br>
			</tr>
			<tr>
				<td>
					<input type="button" value="search" align="center" class="search_button" onClick="abc();">
			</tr>
		</table>
<br>
<br>
	<!--search button ends-->
													<!--body part2 starts   WELCOME THEN ACHIEVEMENT GAINED BY US-->
		<table width="30%" border="0" class="donate_blood">
				<tr style="background:grey; color:yellow; font-size:30px;">
					<th><i class="fa fa-user" aria-hidden="true" style="font-size:30px; padding:0px 15px 0px 0px;"></i>Donate Blood
				</tr>
				<tr>
					<td>
						<img src="2.jpg" alt="blood" width="100%" height="150px"/>
				</tr>
				<tr>
					<td align="justify"> 
					Our motto "Delivering millions smiles" means we keep customers at the center of all our decisions. This customer focus the helped in delivering exceptional value to our 
					clients and has made us the logistics partner of choice for some of the most trusted brands in India.
				</tr>
				<tr>
					<td align="center" style="padding:15px;">
						<a href="donor_reg.php" style="text-decoration:none; color:black;0"><button class="button"><span>View More</span></button></a>
				</tr>
		</table>

		<table width="30%" border="0"  class="donate_blood">
				<tr style="background:grey; color:yellow; font-size:30px;">
					<th><i class="fa fa-medkit" aria-hidden="true" style="font-size:30px; padding:0px 15px 0px 0px;"></i>Need Blood
				</tr>
				<tr>
					<td>
						<img src="4.jpg" alt="blood" width="100%" height="150px"/>
				</tr>
				<tr>
					<td align="justify"> 
					Our team's e-commerce roots have equipped us with in-depth knowledge about the operational and logistic requirement in the fast paced e-commerce industry.Our service industry background defnes
					our customer first approach.
				</tr>
				<tr>
					<td align="center" style="color:red; padding:15px;">
						<a href="receiver.php" style="text-decoration:none; color:black;"><button class="button"><span>View More</span></button></a>
				</tr>
		</table>

		<table width="30%" border="0"  class="donate_blood">
				<tr style="background:grey; color:yellow; font-size:30px;">
					<th><i class="fa fa-search" aria-hidden="true" style="font-size:30px; padding:0px 15px 0px 0px;"></i>Search Donor
				</tr>
				<tr>
					<td>
						<img src="3.jpg" alt="blood" width="100%" height="150px"/>
				</tr>
				<tr>
					<td>
						The vision of becoming an industry leader in providing reliable, time-bound logistics and supply-chain solutions to its business partners. Our network reach, state of the art technology
						platform and hands-on approach make us one of the fastest growing teams in India.
				</tr>
				<tr>
					<td align="center" style="color:red; padding:15px;">
						<a href="#search1" style="text-decoration:none; color:black;"><button class="button"><span>View More</span></button></a>
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
				<td>
					<li class="ele2"><img src="log1o2.jpg" width="170px" height="150px" class="img_logo"/></li>
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
</body>
</html>