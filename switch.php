<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
</head>
<body>

	<?php 
		$var = 20;

		switch($var){
			case (20):
				echo "It is twenty"."<br>";
				//break;
			case 25:
				echo "It is twenty five"."<br>";
				//break;
			case 30:
				echo "It is thirty"."<br>";
				//break;
			default:
				echo "It is neither twenty or twenty five";
				break;
		}
	 ?>

</body>
</html>