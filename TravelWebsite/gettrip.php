<?php
   $query = "SELECT * FROM bustrip";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "<b>Trips:</b> </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="trips" value="';
        echo $row["tripid"];
        echo '">' . $row["tripname"] . "<br>";
   }
   mysqli_free_result($result);
?>
