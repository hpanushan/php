<?php include('includes/connection.php'); ?>
<?php 
	echo "<br>";
	$query = "SELECT * FROM user";

	$result = mysqli_query($connection,$query);

	if ($result){
		echo "Query is successful"."<br>";

		while ($record = mysqli_fetch_assoc($result)){
			echo $record['first_name']."<br>";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>