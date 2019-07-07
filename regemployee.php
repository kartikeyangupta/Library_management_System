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
	
$Emp_id=$_POST["empid"];
Emp_id=$_POST["empname"];
$pos =$_POST["pos"];
$Sal =$_POST["sal"];
$br_id =$_POST["bnch_id"];
	$result="INSERT INTO employee VALUES('$Emp_id','Emp_id','$pos','$Sal','$br_id');";
	mysqli_query($connection, $result1) or die(mysqli_error($connection));
	

$res11 = mysqli_query($connection, $result);

if ($res11 == true) {    
    echo "<h3>New Employee has been successfully added</h3><br><br>";
}

?>

</body>
</html>
