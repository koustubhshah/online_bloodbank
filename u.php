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
			<td width="auto"><div align="center"><strong>Patient Name</strong></div></td>
			<td width="auto"><div align="center" ><strong>Gender</strong></div></td>
		  <td width="auto"><div align="center"><strong>Blood Group </strong></div></td>
         <td width="auto"><div align="center"><strong>No. of Units need</strong></div></td>
     <!--    <td width="auto"><div align="center"><strong>Hospital Address</strong></div></td>
         <td width="auto"><div align="center"><strong>City</strong></div></td>
         <td width="auto"><div align="center"><strong>Pincode</strong></div></td>
         <td width="auto"><div align="center"><strong>Doctor Name</strong></div></td>
         <td width="auto"><div align="center"><strong>When Required</strong></div></td>
         <td width="auto"><div align="center"><strong>Contact Name</strong></div></td>
         <td width="auto"><div align="center"><strong>Address</strong></div></td>-->
          <td width="auto"><div align="center"><strong>E-mail</strong></div></td>
		   <td width="auto"><div align="center"><strong>Mobile Number-1 </strong></div></td>
          <td width="auto"><div align="center"><strong>Mobile Number-2</strong></div></td>
         <td width="auto"><div align="center"><strong>Reason For Blood</strong></div></td>
         <td width="auto"><div align="center"><strong>Action</strong></div></td>
    <!--      <td width="auto"><div align="center"><strong>Photo</strong></div></td>-->
        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","obbm");

	  $sql="select patient,gender,bloodgroup,units,email,mob1,mob2,reason from userregistration";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['patient'];
		$l=$row['gender'];
		$m=$row['bloodgroup'];
		$n=$row['units'];
	//	$o=$row['haddress'];
		//$p=$row['city'];
		//$q=$row['pincode'];
	//	$r=$row['doctorname'];
//		$s=$row['whenreq'];
	//	$t=$row['contactname'];
	//	$u=$row['address'];
		$v=$row['email'];
		$w=$row['mob1'];
		$x=$row['mob2'];
		$y=$row['reason'];
	//	$z=$row['photo'];
		
		// echo"<table cellpadding='3' height='35px;'cellspacing='1' border='0' width='100%'>";
        //echo"<tbody>
		echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>";
           echo"<td width='auto'><div align='center'><strong><sd>".$n."</sd></strong></div></td>";
	//		echo"<td width='auto'><div align='center'><strong><sd>".$o."</sd> </strong></div></td>";
      //    echo"<td width='auto'><div align='center'><strong><sd>".$p."</sd> </strong></div></td>";
       //   echo"<td width='auto'><div align='center'><strong><sd>".$q."</sd> </strong></div></td>";
       //   echo"<td width='auto'><div align='center'><strong><sd>".$r."</sd> </strong></div></td>";
       //   echo"<td width='auto'><div align='center'><strong><sd>".$s."</sd> </strong></div></td>";
       //   echo"<td width='auto'><div align='center'><strong><sd>".$t."</sd> </strong></div></td>";    
       //   echo"<td width='auto'><div align='center'><strong><sd>".$u."</sd> </strong></div></td>";    
		echo"<td width='auto'><div align='center'><strong><sd><a href='mailto:'".$v.">".$v."</a></sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd'><a href='callto:'".$w." style='color:red;'>".$w."</a></sd> </strong></div></td>";
          echo"<td wwidth='auto'><div align='center'><strong><sd><a href='callto:'".$x." style='color:brown;'>".$x."</a></sd> </strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$y."</sd> </strong></div></td>";
       echo"<td> <a href ='view.php?email=$l'><center>View More</center></a>";
			 //  echo"<td width='auto'><div align='center'><strong><sd>".$z."</sd> </strong></div></td>";
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