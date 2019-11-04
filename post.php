<?php 
include('include/database.php');

	if(isset($_POST['postbtn'])){

		$postmessage=$_POST['postmessage'];
		$date=date("d-m-Y");
		$sql = "INSERT INTO post (post_content, post_date)
		VALUES ('$postmessage', '$date')";

		if ($conn->query($sql) === TRUE) {
		    header('location: home.php');
		}
		$conn->close();
	}

 ?>