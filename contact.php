<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>
<title> Online Blood Donate Management System</title>
<link rel="stylesheet" href="blood.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<ul class="breadcrumb">
  <li><a href="home.php">Home</a></li>
  <li>Contact Us</li>
</ul>
<!--body part 2-->
<table border="0" width="100%" align="justify">
	<tr>
		<th colspan="2" align="left" style="padding:5px 0px 10px 55px;">Contact Information
		<th colspan="2" align="left" style="padding:5px 0px 10px 155px;"> Contact Us
	</tr>
	
	<tr>
		<td align="right" style="padding:12px 70px 10px 5px;">Name:
		<td align="left" style="padding:12px 5px 10px 5px;">
		<form method="post" name="messagef" action="sendmessage.php">
			<input type="text" placeholder="Your good name" name="name" size="52px" required/> 
		<td align="right" style="padding:12px 70px 10px 5px;">Email:
		<td align="left" style="padding:12px 5px 10px 5px;"><a href="mailto:koush110198@gmail.com" style='text-decoration:none;color:blue;'>koush110198@gmail.com</a>
	</tr>
	<tr>
		<td align="right" style="padding:12px 70px 10px 5px;">Email:
		<td align="left" style="padding:12px 5px 10px 5px;">
		<input type="text" placeholder="email address" size="25px" name="email" required/>@<input type="text" placeholder="domain name" size="25px" name="domai"/ required>
		<td align="right" style="padding:12px 5px 10px 5px;">Mobile Number:
		<td align="justify" style="padding:12px 5px 10px 5px;">
			<a href="callto:+918754561594" style='text-decoration:none;color:blue;'>+918754561594</a>
		</tr>
	<tr>
		<td align="right" style="padding:12px 2px 10px 5px;">Contact Number:
		<td style="padding:12px 5px 10px 5px;">
			<input type="text" maxlength="10" size="25px" name="mob"/ required>
		<td style="padding:0px 50px 10px 5px;" align="right">Address:
		<td align="justify" style="padding:0px 5px 10px 5px;">
			<li class="ele4">P.S.Girwa Quarter No. 6,</li>
			<li class="ele4">Near Kisaan Bhavan,</li>
			<li class="ele4">Udaipur(Raj)-313001,India</li>
	</tr>
	<tr>
		<td align="right" style="padding:12px 10px 10px 5px;">Enter Message:
		<td style="padding:12px 5px 10px 5px;">
			<textarea rows="3" cols="53" placeholder="Enter your message...." name="message" required></textarea> 
	</tr>
	<tr>
		<td colspan="2" style="padding:12px 5px 10px 355px; margin:0px 0px 0px 10px;"> 
			<input type="submit" value="Send">&nbsp;&nbsp;&nbsp;</input> 
			<input type="reset" value="Clear"></input> 
		</form>
	</tr>
</table>
<footer>
			Follow Us On<br>
				<a href="https://www.facebook.com/koush11" class="fa fa-facebook"></a>
				<a href="https://twitter.com/koustubh_shah" class="fa fa-twitter"></a>
				<a href="https://plus.google.com/u/0/102391280163617662696" class="fa fa-google"></a>
				<a href="https://www.linkedin.com/in/koustubh-shah-92541b9a/" class="fa fa-linkedin"></a>
				<a href="https://www.youtube.com/channel/UCJ3SYCrmPCq-6LVudzWjtRw" class="fa fa-youtube"></a>
				<a href="https://www.instagram.com/koush_98/" class="fa fa-instagram"></a>
				<a href="https://in.yahoo.com/?p=us" class="fa fa-yahoo"></a>
		<hr/>
		&copy;<strong>All Copyright reserved data from koustubh</strong>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
</footer>

</table>
</body>
</html>