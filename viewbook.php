<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<center>
<table border='1'>
<tr>
<th>ISBN</th>
<th>Book_Title</th>
<th>Category</th>
<th>Rental_Price</th>
<th>Status</th>
<th>Author</th>
<th>Publisher</th>
</tr>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "";
	$database_name = "library";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	$Ctype=$_POST["Ctype"];
			
			$res="SELECT ISBN,Book_Title,Category,Rental_Price,Status,Author,Publisher FROM books where books.category='$Ctype';";
	$result=mysqli_query($connection,$res);
	echo "<h1><center>".$Ctype."&nbsp;Books</h1><br><br>";

if($result === FALSE) { 
    die(mysqli_error($connection)); 
}

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>" . $row["ISBN"] . "</td>";
echo "<td>" . $row["Book_Title"] . "</td>";
echo "<td>" . $row["Category"] . "</td>";
echo "<td>" . $row["Rental_Price"] . "</td>";
echo "<td>" . $row["Status"] . "</td>";
echo "<td>" . $row["Author"] . "</td>";
echo "<td>" . $row["Publisher"] . "</td>";
echo "</tr>";
}
}
?>
</table>
</body>
</html>


