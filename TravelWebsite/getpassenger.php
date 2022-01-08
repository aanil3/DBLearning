<?php
   $query = "SELECT * FROM passenger";
   $result = mysqli_query($connection,$query);
   if (!$result) {
	die("Databases query failed.");
   }
   echo "<b>Passengers:</b><br>";
   while ($row = mysqli_fetch_assoc($result)) {
	echo '<input type="radio" name="passenger" value="';
	echo $row["passengerid"];
	echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
   }
   mysqli_free_result($result);
?>

