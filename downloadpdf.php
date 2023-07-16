<!-- <?php
include'conn.php';
$sql="SELECT * FROM customer ";
$res=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Download Pdf Using Php</title>
</head>
<body style="background: #cccccc;">
<div class="row">
	<div class="col">
		<div class="container mt-5">
			<div class="card">
			<div class="card-header">
				<form method="POST" action="loadpdf.php">
					<button type="submit" name="downloadpdf" class="btn btn-success">PDF</button>
				</form>
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
					    <th>Frist Name</th>
					    <th>Last Name</th>
					    <th>Phone</th>
					    <th>Email</th>
					    <th>Password</th>
					    <th>Product</th>
					    <th>Price</th>
					    <th>City</th>
					    <th>District</th>
					    <th>Status</th>
					</tr>
					<?php
					    while ($row=mysqli_fetch_assoc($res)) {?>
					    	<tr>
							<td><?=$row['id']?></td>
							<td><?=$row['fname']?></td>
							<td><?=$row['lname']?></td>
							<td><?=$row['phone']?></td>
							<td><?=$row['email']?></td>
							<td><?=$row['password']?></td>
							<td><?=$row['product']?></td>
							<td><?=$row['price']?></td>
							<td><?=$row['city']?></td>
							<td><?=$row['district']?></td>
							<td><?=($row['status']==1)?'Active':'Inactive'?></td>
								<td>
	                                <?php if ($row['status']==1) {?>
	                                 <button class="badge bg-success stsbtn" data-id="<?=$row['id']?>" data-status='2'>Active</button>
	                                <?php }else {?>
	                                <button class="badge bg-primary stsbtn" data-id="<?=$row['id']?>" data-status='1'>Inactive</button>
	                                <?php } ?>
	                            </td>
					<?php }?>
				</table>
			</div>
		</div>
		</div>
	</div>
</div>


</body>
</html> -->