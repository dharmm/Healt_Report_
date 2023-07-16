
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Report</title>
</head>
<body>
	<table cellpadding="10px" border="3px" align="center">
		<center><h1>Report</h1></center>
		<?php
		include("connection.php");
		$query = "SELECT * FROM healthdetail";
		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result) > 0) {
		
		

		?>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th> AGE</th>
		<th>WEIGHT</th>
		<th> EMAIL</th>
		
		<th>
			<form method="POST" action="loadpdf.php">
			    <button type="submit" style="float:left" name="downloadpdf" class="btn btn-success">PDF DOWNLOAD</button>
		    </form>
		</th>
	</tr>
	<?php 
	while ($show = mysqli_fetch_assoc($result)) {
	


	?>

	<tr>
		<td><?php echo $show['id']; ?></td>
		<td><?php echo $show['name']; ?></td>
		<td><?php echo $show['age']; ?></td>
		<td><?php echo $show['weight']; ?></td>
		<td><?php echo $show['email']; ?></td>
		
		
		
		 
	</tr>

<?php 
} 
}

?>
			

	</table>

</body>
</html>