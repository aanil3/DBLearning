<?php
$mysqli = mysqli_connect('localhost', 'root', 'cs3319', 'lreid2assign2db');
$id = $_GET['id'];
$query= "SELECT * FROM bustrip WHERE tripid='$id'";
$qry = $mysqli->query("SELECT * FROM bustrip WHERE tripid='$id'");
$data = mysqli_fetch_array($qry);
if(isset($_POST['update'])) // when click on Update button
{
    $tripname = $_POST['tripname'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $urlImage = $_POST['urlImage'];
	
    $edit_query = "UPDATE bustrip SET tripname='$tripname', startdate='$startdate', enddate='$enddate', urlImage='$urlImage' WHERE tripid='$id'";
    $edit = $mysqli->query($edit_query);
	
    if($edit)
    {
        mysqli_close($mysqli); // Close connection
        header("location:index2.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<h3>Update Data</h3>

<form method="POST" novalidate>
  <input type="text" name="tripname" value="<?php echo $data['tripname'] ?>" placeholder="Enter Trip Name" Required>
  <input type="text" name="startdate" value="<?php echo $data['startdate'] ?>" placeholder="Enter Start Date" Required>
  <input type="text" name="enddate" value="<?php echo $data['enddate'] ?>" placeholder="Enter End Date" Required>
  <input type="text" name="urlImage" value="<?php echo $data['urlImage'] ?>" placeholder="Enter Image URL" Required>
  <input type="submit" name="update" value="Update">
</form>

