<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Deleting Booking</title>
</head>

<body>
<?php
  include 'connectdb.php';
?>
<ol>
<?php
	$passengerid = $_POST["passengerid"];
	$tripid = $_POST["tripid"];
	$price = $_POST["price"];
	var_dump($passengerid);
	var_dump($tripid);
	var_dump($price);
	$query = "DELETE FROM booking WHERE passengerid='$passengerid' AND tripid='$tripid' AND price='$price'";
	if (!mysqli_query($connection, $query)) {
		die("Error: Insert Failed" . mysqli_error($connection));
	}
	echo "Your booking was deleted!";
	mysqli_close($connection);
?>
</ol>
</body>
</html>
