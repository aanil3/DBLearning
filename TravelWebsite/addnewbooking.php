<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Adding New Booking</title>
</head>

<body>
<?php
  include 'connectdb.php';
?>
<h1>Here are your bookings: </h1>
<ol>
<?php
   $passengerid = $_POST["passenger"];
   $trips = $_POST["trips"];
   $price = $_POST["price"];
   $query = 'INSERT INTO booking values("' . $passengerid . '","' . $trips . '","' . $price . '")';
   if (!mysqli_query($connection, $query)) {
	die("Error: insert failed" . mysqli_error($connection));
   }
   echo "Your booking was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
