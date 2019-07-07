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
$Isbn=$_POST["ISBN"];
$Tittle=$_POST["TITTLE"];
$Rate=$_POST["RATE"];
$Status=$_POST["STATUS"];
$Author=$_POST["AUTHOR"];
$Ctype=$_POST["CATEGORY"];
$Publisher=$_POST["PUBLISHER"];
	$result="INSERT INTO books (ISBN,Book_Title,Category,Rental_Price,Status,Author,Publisher) VALUES('$Isbn','$Tittle','$Ctype','$Rate','$Status','$Author','$Publisher')";
	mysqli_query($connection,$result) or die(mysqli_error($connection));
	echo "<h3>New Book has been successfully added</h3>";
?>

</body>
</html>
