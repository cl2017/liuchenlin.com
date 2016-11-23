<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		session_start();
		if ($_SESSION['isLogin']==1)
			echo "you are login";
		else echo "please login";
	?>
</body>
</html>