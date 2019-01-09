<!DOCTYPE html>
<html>
<head>
	<title>displaying the records</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<style type="text/css">
		 th{
		 	background-color: black;
		 	color: white;
		 }
	</style>
</head>
<body>
<?php
	include('db.php');
?>
<h2 align="center">Displaying the records</h2>
<center>
	<table class="table table-dark">
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Address</th>
		</tr>
	<?php
		$sql="SELECT `name`, `surname`, `address` FROM `data`";
		$result=mysqli_query($con,$sql);
		if ($result-> num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>". $row["surname"] ."</td><td>". $row["address"] ."</td></tr>";
			}
		}
		echo "</table>";
	?>
	</center>
</body>
</html>