<!DOCTYPE html>
<html>
<head>
	<title>Process</title>
</head>
<body>
	<?php 
		$username = $_POST["username"];
		$password = $_POST["password"];
		if ($username=="anushan"&&$password=="anu"){
			echo "Login is successful";
		}else{
			echo "Invalid";
		}
	 ?>
</body>
</html>