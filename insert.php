<!DOCTYPE html>
<html>
<head>
	<title>Inserting data in database</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<?php
		include('db.php');
	?>
	<h2 align="center">Inserting data in database</h2>
			<div class="container">
				<div class="row">
					<div class="col md-2">
						
					</div>
					<div class="col md-6">
						<form action="insert.php" method="POST">
							<input type="text" class="form-control" name="name" placeholder="name"> 
								<br>
							<input type="text" class="form-control" name="surname" placeholder="surname"> 
							<br>
							<textarea class="form-control" cols="50" placeholder="Address" name="address"></textarea>
							<br>
							<button class="btn btn-success" type="submit" name="submit">Insert</button>
						</form>

					</div>
					<div class="col md-2">
						
					</div>
				</div>
			</div>
				<?php
				if (isset($_POST["submit"])) {
					$sql="INSERT INTO `data`(`name`, `surname`, `address`) VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["address"]."')";

					$result=mysqli_query($con,$sql);
			if ($result==TRUE) {
				echo "Inserted ";
			}
				}
			
			
			

			?>
			

</body>
</html>
