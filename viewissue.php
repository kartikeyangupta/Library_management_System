<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<center>
<table border='1'>
<tr>
<th>Issue ID</th>
<th>Customer ID</th>
<th>Book Name</th>
<th>Date of Issue</th>
<th>Book ISBN</th>
<th>Employee ID</th>
</tr>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "library";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
			$res="SELECT * FROM issue_status;";
	$result=mysqli_query($connection,$res);
	echo "<h1><center>Issued Books</h1><br><br>";

if($result === FALSE) { 
    die(mysqli_error($connection)); 
}

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>" . $row["Issue_id"] . "</td>";
echo "<td>" . $row["Issued_Cust"] . "</td>";
echo "<td>" . $row["Issued_Book_Name"] . "</td>";
echo "<td>" . $row["Issue_Date"] . "</td>";
echo "<td>" . $row["ISBN_Book"] . "</td>";
echo "<td>" . $row["Employee_Id"] . "</td>";
echo "</tr>";
}
}
?>
</table>
</body>
</html>