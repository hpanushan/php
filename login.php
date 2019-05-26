<?php 
	if (isset($_POST["sumbit"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		if ($username=="anushan"&&$password=="anu"){
			echo "Login is successful";
		}else{
			echo "Invalid";
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<form action="process.php" method="post">

		Username : <input type="text" name="username"> <br>
		Password : <input type="password" name="password"> <br>
		<input type="submit" name="submit">

	</form>

</body>
</html>