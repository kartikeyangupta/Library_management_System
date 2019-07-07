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
	
$iid=$_POST["iid"];
$cid=$_POST["cid"];
$bname=$_POST["bname"];
$date=$_POST["date"];
$bid=$_POST["bid"];
$eid=$_POST["eid"];
	$result="INSERT INTO issue_status VALUES('$iid','$cid','$bname','$date','$bid','$eid');";
	mysqli_query($connection,$result) or die(mysqli_error($connection));
	echo "<h3>New Issue has been successfully added</h3>";
?>
</body>
</html>