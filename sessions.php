<?php 

	session_start();
	$_SESSION["UID"] = "373";
	$_SESSION["UNAME"] = "Anushan";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>

	<?php 
		echo $_SESSION["UID"];
	 ?>


</body>
</html>