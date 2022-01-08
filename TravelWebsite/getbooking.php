<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Your Bookings</title>
</head>

<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your bookings:</h1>
<ol>
<?php
   $whichPassenger = $_POST["passenger"];
   $query = 'SELECT * FROM booking WHERE booking.passengerid="' . $whichPassenger . '"';
   $result=mysqli_query($connection,$query);
   if (!$result) {
	die("database query2 failed.");
   }
   echo "<ol>";
   while ($row=mysqli_fetch_assoc($result)) {
	echo '<li>';
	echo $row["passengerid"] . " -- " . $row["tripid"] . " -- " . $row["price"] . "</li>";
   }
   mysqli_free_result($result);
   echo "</ol>";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
   
