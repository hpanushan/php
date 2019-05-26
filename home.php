<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<h1>Home Page</h1>

	<?php 
		$fname = "Anushan";
		$lname = "Ramesh";

		$url = "about.php?{$fname}=anushan&{$lname}=ramesh"


	 ?>
	<a href="<?php echo $url?>">Click here</a>


	

</body>
</html>