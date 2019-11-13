<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
<?php 
	session_start();
	echo $_SESSION['a']."<br>".$_SESSION['b']."<br>".$_SESSION['c']."<br>".$_SESSION['d'];
 ?>
</body>
</html>