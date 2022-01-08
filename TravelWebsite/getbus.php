<?php
   $query = "SELECT * FROM bus";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Bus Options: </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="assignedbus" value="';
        echo $row["licenseplate"];
        echo '">' . $row["licenseplate"] . "<br>";
   }
   mysqli_free_result($result);
?>
