<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'fund');
$sql= "select * from applicationform where status='Approved'";
$results= mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>generate report</title>
</head>
<body style="background: #cccccc;">
	<div class="row">
		<div class="col">
			<div class="container">
				<div class="card">
			<div class="card-header">
				<form action="generate_pdf.php" method="post">
					<button type="submit" name="btn_pdf" class="btn btn-success">REPORT</button>
					
				</form>
				
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<tr>
						<th>Name</th>
						<th>Institution</th>
						<th>Amount Allocated</th>
						<th>Parent/Guardian </th>
						<th>Phonenumber</th>
						<th>Bursary Status</th>
					</tr>

					
					<?php
					 while ($row=mysqli_fetch_assoc($results))
					 { {
					
					?>
					<tr>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['School'];?></td>
						<td><?php echo $row['disbandedamount'];?></td>
						<td><?php echo $row['FatherName'];?></td>
						<td><?php echo $row['Telephonenumber'];?></td>
						<td><?php echo $row['status'];?></td>
						
						
					</tr>
					<?php
					} }
					?>

				</table>
			</div>
				
			</div>
			
		</div>
		
	</div>
			</div>
			
	</div>
        </div>
</body>
</html>