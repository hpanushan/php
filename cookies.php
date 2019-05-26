<?php 
	//setcookie(name,value,expiration);
	//if (isset($_COOKIE['ck1'])){
	//	echo $_COOKIE['ck1'];
	//}
	//else{
	//	setcookie('ck1','test',time()+(60*60));	
	//}

	// How to remove a cookie

	setcookie('ck1',NULL,-time()-1);
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

</body>
</html>