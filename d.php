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
						<a href="">Admin Login</a>
				</div>
	</table>
<ul class="breadcrumb">
  <li><a href="u.php">User Registration</a></li>
  <li><a href="d.php">Donor Registration</a></li>
  <li><a href="message.php">Message</a></li>
  <li><a href="rename.php">Change Password</a></li>
  <li><a href="login_admin.php">Logout</a></li>
 <li align="right"><a align="right" href="upload">Uploded Photos</a></li>
 
</ul>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><strong>Name</strong></div></td>
			<td width="auto"><div align="center"><strong>Father Name</strong></div></td>
			<td width="auto"><div align="center" ><strong>Gender</strong></div></td>
			<td width="auto"><div align="center"><strong>Date Of Birth</strong></div></td>
          <td width="auto"><div align="center"><strong>Blood Group </strong></div></td>
         <td width="auto"><div align="center"><strong>Body Weight</strong></div></td>
          <td width="auto"><div align="center"><strong>E-mail</strong></div></td>
		  <td width="auto"><div align="center"><strong>Country</strong></div></td>
			<td width="auto"><div align="center"><strong>State</strong></div></td>
			<td width="auto"><div align="center"><strong>City</strong></div></td>
			<td width="auto"><div align="center"><strong>Area</strong></div></td>      
		<td width="auto"><div align="center"><strong>Full Address</strong></div></td>
          <td width="auto"><div align="center" ><strong>Pincode</strong></div></td>
           <td width="auto"><div align="center"><strong>Mobile Number-1 </strong></div></td>
          <td width="auto"><div align="center"><strong>Mobile Number-2</strong></div></td>
          <td width="auto"><div align="center"><strong>New Donor</strong></div></td>
        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","obbm");

	  $sql="select name,fathername,gender,dob,bloodgroup,bodyweight,email,country,state,city_name,area,address,pincode,mobile1,mobile2,newdonor from donorregistration";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['name'];
		$k1=$row['fathername'];
		$l=$row['gender'];
		$l1=$row['dob'];
		$m=$row['bloodgroup'];
		$n=$row['bodyweight'];
		$o=$row['email'];
		$o1=$row['country'];
		$o2=$row['state'];
		$o3=$row['city_name'];
		$o4=$row['area'];
		$p=$row['address'];
		$q=$row['pincode'];
		$r=$row['mobile1'];
		$s=$row['mobile2'];
		$t=$row['newdonor'];
		
		// echo"<table cellpadding='3' height='35px;'cellspacing='1' border='0' width='100%'>";
        //echo"<tbody>
		echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l1."</sd></strong></div></td>";
  	       echo"<td width='auto'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>";
           echo"<td width='auto'><div align='center'><strong><sd>".$n."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd><a href='mailto:'".$o.">".$o."</a></sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$o1."</sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$o2."</sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$o3."</sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$o4."</sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$p."</sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$q."</sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd'><a href='callto:'".$r." style='color:red;'>".$r."</a></sd> </strong></div></td>";
          echo"<td wwidth='auto'><div align='center'><strong><sd><a href='callto:'".$s." style='color:brown;'>".$s."</a></sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$t."</sd> </strong></div></td>";
		   echo" </tr>
              </tbody>";
	}
		?>
</table>

<footer>
		
		&copy;<strong>All Copyright reserved data from koustubh</strong>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="my"></i></button>
</footer>

</table>
</body>
</html>