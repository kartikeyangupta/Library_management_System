<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "library";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	$res="SELECT * FROM library.branch";
	$result=mysqli_query($connection,$res);
	echo "<h1><center>Branches</h1><br><br>";
?>
<center>
<table border='1'>
<tr>
<th>Branch Id</th>
<th>Manager Id</th>
<th>Branch Address</th>
<th>Contanct Number</th>
</tr>
<?php
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>" . $row["Branch_Id"] . "</td>";
echo "<td>" . $row["Manager_id"] . "</td>";
echo "<td>" . $row["Branch_Address"] . "</td>";
echo "<td>" . $row["Contact_No"] . "</td>";
echo "</tr>";
}
}
?>
</table>
</body>
</html>


