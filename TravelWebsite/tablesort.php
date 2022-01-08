<?php
$mysqli = mysqli_connect('localhost', 'root', 'cs3319', 'lreid2assign2db');
$columns = array('tripid','tripname','startdate','enddate','country','assignedbus','urlImage');
$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

// Get the result...
if ($result = $mysqli->query('SELECT * FROM bustrip ORDER BY ' .  $column . ' ' . $sort_order)) {
	// Some variables we need for the table.
	$up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
	$asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
	$add_class = ' class="highlight"';
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Sortable Table</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
			<style>
			html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 10px;
			}
			table {
				border-collapse: collapse;
				width: 500px;
			}
			th {
				background-color: #54585d;
				border: 1px solid #54585d;
			}
			th:hover {
				background-color: #64686e;
			}
			th a {
				display: block;
				text-decoration:none;
				padding: 10px;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
			}
			th a i {
				margin-left: 5px;
				color: rgba(255,255,255,0.4);
			}
			td {
				padding: 10px;
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #ffffff;
			}
			tr .highlight {
				background-color: #f9fafb;
			}
			</style>
		</head>
		<body>
			<table>
				<tr>
					<th>tripid</th>
					<th><a href="tablesort.php?column=tripname&order=<?php echo $asc_or_desc; ?>">tripname<i class="fas fa-sort<?php echo $column == 'tripname' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th>startdate</th>
					<th>enddate</th>
					<th><a href="tablesort.php?column=country&order=<?php echo $asc_or_desc; ?>">country<i class="fas fa-sort<?php echo $column == 'country' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th>assignedbus</th>
					<th>urlImage</th>
					<th>edit</th>
					<th>delete</th>
				</tr>
				<?php while ($row = $result->fetch_assoc()): ?>
				<tr>
					<td<?php echo $column == 'tripid' ? $add_class : ''; ?>><?php echo $row['tripid']; ?></td>
					<td<?php echo $column == 'tripname' ? $add_class : ''; ?>><?php echo $row['tripname']; ?></td>
					<td<?php echo $column == 'startdate' ? $add_class : ''; ?>><?php echo $row['startdate']; ?></td>
					<td<?php echo $column == 'enddate' ? $add_class : ''; ?>><?php echo $row['enddate']; ?></td>
					<td<?php echo $column == 'country' ? $add_class : ''; ?>><?php echo $row['country']; ?></td>
					<td<?php echo $column == 'assignedbus' ? $add_class : ''; ?>><?php echo $row['assignedbus']; ?></td>
					<td<?php echo $column == 'urlImage' ? $add_class : ''; ?>><?php echo '<img src="' . $row["urlImage"] . '" height="60" width="60">'; ?></td>
					<td><a href="edit.php?id=<?php echo $row['tripid']; ?>">Edit</a></td>
					<td><a href="delete.php?id=<?php echo $row['tripid']; ?>">Delete</a></td>
				</tr>
				<?php endwhile; ?>
			</table>
		</body>
	</html>
	<?php
	$result->free();
}
?>
