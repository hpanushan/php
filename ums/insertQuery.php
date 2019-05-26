<?php include('includes/connection.php'); ?>

<?php 
	echo "<br>";
	$firstName = 'Geeshani';
	$lastName = 'Hewapathirana';
	$email = 'geeshanichethana@gmail.com';
	$password = 'mypassword';
	$isDeleted = 0;

	$hashedPassword = sha1($password);

	$query = "INSERT INTO user (first_name,last_name,email,password,is_deleted) VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$hashedPassword}', '{$isDeleted}') ";

	$result = mysqli_query($connection,$query);
	
	if ($result){
		echo "One record is added";
	}
	else{
		echo "Adding record is failed";
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>