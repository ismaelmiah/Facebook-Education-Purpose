<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
<input id="upload" type="file" name="uploadimage" style="visibility: hidden; color: transparent;">

<button onclick="document.getElementById('upload').click(); return false;">Photo/Video</button>
	<input id="save" type="submit" name="sub" value="save">
</form>

<?php 

	print_r($_FILES["uploadimage"]);
 ?>
</body>
</html>