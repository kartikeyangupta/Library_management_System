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
	
$Fname=$_POST["manId"];
$Lname=$_POST["BrName"];
$AGE=$_POST["number"];
$Dlno=$_POST["Address"];
	//$result1 = "INSERT INTO DRIVER VALUES('$Dlno')";
	$result="INSERT INTO branch(Branch_Id,Manager_id,Branch_Address,Contact_No ) VALUES('$Lname','$Fname','$Dlno','$AGE')";
	
	 //mysqli_query($connection, $result1) or die(mysqli_error($connection));
	
	$res11=mysqli_query($connection,$result) ;
		if($res11==false){
			die(mysqli_error($connection));
			echo "<h3>New customer has not  been added</h3><br><br>";
		}
		else
		{
			echo "<h3>New Employee has been successfully added</h3><br><br>";

		}
?>
</body>
</html>
