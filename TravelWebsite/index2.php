<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to my Bus Trip Catalogue</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to my Trip Catalogue</h1>
<hr>
<h2>Trips we look after</h2>
<hr>
<?php
include 'tablesort.php';
?>
<br>
<hr>
<h2>Add new trips</h2>
<hr>
<form action="addnewtrip.php" method="post"><br>
Trip ID: <input type="text" name="tripid"><br><br>
Trip Name: <input type="text" name="tripname"><br><br>
Trip Start Date: <input type="text" name="tripstart"><br><br>
Trip End Date: <input type="text" name="tripend"><br><br>
Trip Country: <input type="text" name="tripcountry"><br><br>
<?php
include 'getbus.php';
?>
<br>
urlImage: <input type="text" name="urlImage"><br><br>
<input type="submit" value="Add New Trip">
</form>
<br>
<hr>
<h2>Check Trips to Country</h2>
<hr>
<br>
<form action="getcountry.php" method="post">
<?php
  include 'getdata.php';
?>
<br>
<input type="submit" value="Get Trips">
</form>
<br>
<hr>
<h2>Add New Booking:</h2>
<hr>
<br>
<form action="addnewbooking.php" method="post">
<?php
include 'getpassenger.php';
include 'gettrip.php';
?>
<b>Price:</b>
<input type="text" name="price"><br><br>
<input type="submit" value="Add New Booking">
</form>
<br>
<hr>
<h2>All Passengers:</h2>
<hr>
<form action="getbooking.php" method="post">
<?php
include 'getpassengertable.php';
include 'getpassenger.php';
?>
<br>
<input type="submit" value="Get Booking Details">
</form>
<hr>
<h2>Delete Booking:</h2>
<hr>
<form action="deletebooking.php" method="post">
Passenger ID: <input type="text" name="passengerid"><br>
Trip ID: <input type="text" name="tripid"><br>
Price: <input type="text" name="price"><br><br>
<input type="submit" value="Delete Booking">
</form>
<hr>
<h2> Bus Trips without Bookings</h2>
<hr>
<?php
   include 'gettripsbooking.php';
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
