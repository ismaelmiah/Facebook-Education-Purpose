
<?php 
	session_start();
	include('include/database.php');

if (isset($_POST['btnlogin']))
{		
	$email	= trim($_POST['log_email']);
	$upass	= trim($_POST['log_pword']);
	$h_upass = sha1($upass);

	$sql = "SELECT * FROM `user_info` WHERE `email`='". $email ."' and `pword`='". $h_upass ."'";
	$result = $conn->query($sql);
	$found_user = $result->fetch_assoc();
	$numrows = $result->num_rows;
	if($numrows==1){
		$_SESSION['user_id'] = $found_user['user_id'];
		$_SESSION['fName'] = $found_user['fName'];
		$_SESSION['lName'] = $found_user['lName'];
		$_SESSION['email'] = $found_user['email'];
		$_SESSION['pword'] = $found_user['pword'];
		$_SESSION['gender'] = $found_user['gender'];

		echo "<script>
				window.location=\"home.php\";
			</script>";
	}
	else{ ?>
		<script type="text/javascript">
			alert("Username/Password Incorrect");
			window.location="index.php";
		</script>
	<?php 
	}
}

?>
