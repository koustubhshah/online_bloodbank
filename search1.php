<?php
$q=$_GET["q"];
$conn=mysqli_connect("localhost","root","","obbm");
	////mysqli_select_db('savelife');
	$sql="SELECT * FROM city WHERE state = '".$q."'";
	$rs=mysqli_query($conn,$sql);
	echo "<select name='city'>
	<option value='Select City'>Select City</option>";
	while($row=mysqli_fetch_array($rs))
	{
		$c=$row['city_name'];
		echo "<option value='$c'>".$c."</option>";
	}
	echo "</select>";
?>