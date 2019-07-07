<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "carrental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	
$cid=$_POST["cid"];
$cname=$_POST["cname"];
$caddress=$_POST["caddress"];
$rdate=$_POST["rdate"];

	$result="INSERT INTO customer VALUES('$cid','$cname','$caddress','$rdate')";
	mysqli_query($connection,$result) or die(mysqli_error($connection));
	echo "<h3>New customer has been successfully added</h3>";
?>

</body>
</html>

