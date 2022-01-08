<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bus Trip Catalogue - These are your trips</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your trips:</h1>
<ol>
<?php
   $whichOwner= $_POST["passengername"];
   $query = 'SELECT * FROM passenger, booking WHERE passenger.passengerid=booking.passengerid AND booking.passengerid="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["price"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
