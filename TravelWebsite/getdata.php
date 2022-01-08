<?php
   $query = "SELECT DISTINCT country FROM bustrip ORDER BY country ASC";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Which country are you looking up? <br><br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="country" value="';
        echo $row["country"];
        echo '">' . $row["country"] . "<br>";
   }
   mysqli_free_result($result);
?>
