<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<center>
<table border='1'>
<tr>
<th>Customer ID</th>
<th>Customer Name</th>
<th>Customer Address</th>
<th>Date of Registration</th>
</tr>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "library";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
			$res="SELECT * FROM customer;";
	$result=mysqli_query($connection,$res);
	echo "<h1><center>Customers</h1><br><br>";

if($result === FALSE) { 
    die(mysqli_error($connection)); 
}

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>" . $row["Customer_id"] . "</td>";
echo "<td>" . $row["Customer_Name"] . "</td>";
echo "<td>" . $row["Customer_Address"] . "</td>";
echo "<td>" . $row["Registration_Date"] . "</td>";
echo "</tr>";
}
}
?>
</table>
</body>
</html>