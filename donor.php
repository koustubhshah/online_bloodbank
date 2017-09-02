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
  <li>Donor List</li>
</ul>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td height="20" width="140"><div align="center"><strong>Name</strong></div></td>
          <td width="60"><div align="center" ><strong>Gender</strong></div></td>
          <td width="45"><div align="center"><strong>Blood Group </strong></div></td>
         <td height="20" width="40"><div align="center"><strong>Body Weight</strong></div></td>
          <td height="20" width="200"><div align="center"><strong>E-mail</strong></div></td>
          <td height="20" width="260"><div align="center"><strong>Full Address</strong></div></td>
          <td width="60"><div align="center" ><strong>Pincode</strong></div></td>
           <td width="100"><div align="center"><strong>Mobile Number-1 </strong></div></td>
          <td width="100"><div align="center"><strong>Mobile Number-2</strong></div></td>
          <td width="30"><div align="center"><strong>New Donor</strong></div></td>
        </tr>
        </tbody>
     <?php
        $conn=mysqli_connect("localhost","root","","obbm");

	  $sql="select name,gender,bloodgroup,bodyweight,email,address,pincode,mobile1,mobile2,newdonor from donorregistration";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['name'];
		$l=$row['gender'];
		$m=$row['bloodgroup'];
		$n=$row['bodyweight'];
		$o=$row['email'];
		$p=$row['address'];
		$q=$row['pincode'];
		$r=$row['mobile1'];
		$s=$row['mobile2'];
		$t=$row['newdonor'];
		
		// echo"<table cellpadding='3' height='35px;'cellspacing='1' border='0' width='100%'>";
        echo"<tbody><tr bgcolor='#fffff'>";
          echo"<td height='20' width='140'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='55'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
  	       echo"<td width='45'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>";
           echo"<td width='45'><div align='center'><strong><sd>".$n."</sd></strong></div></td>";
          echo"<td width='200'><div align='center'><strong><sd><a href='mailto:'".$o.">".$o."</a></sd> </strong></div></td>";
          echo"<td width='250'><div align='center'><strong><sd>".$p."</sd> </strong></div></td>";
          echo"<td width='60'><div align='center'><strong><sd>".$q."</sd> </strong></div></td>";
          echo"<td width='100'><div align='center'><strong><sd'><a href='callto:'".$r." style='color:red;'>".$r."</a></sd> </strong></div></td>";
          echo"<td width='100'><div align='center'><strong><sd><a href='callto:'".$s." style='color:brown;'>".$s."</a></sd> </strong></div></td>";
          echo"<td width='30'><div align='center'><strong><sd>".$t."</sd> </strong></div></td>";
		   echo" </tr>
              </tbody>";
	}
		?>
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