<?php 
	include('include/initialize.php');
		session_start();
	if(isset($_POST['ppsave'])){
		$filename=rawurlencode($_FILES['profileimg']['name']);
		$tempname=$_FILES['profileimg']['tmp_name'];
		$size=$_FILES['profileimg']['size'];
		$folder="image/".$filename;
		$userid=$_SESSION['user_id'];
		$pageid=0;
		move_uploaded_file($tempname, $folder);
		$sql = "INSERT INTO photos (filename,type,size,caption,user_id,page_id)VALUES 
		('$filename','$folder',$size,'profile',$userid,$pageid)";
		$conn->query($sql);
		header('location: home.php');
	}

	if(isset($_POST['skip'])){
		header('location: home.php');
	}
 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Facebook -log in or sign up</title>
	<link rel="stylesheet" type="text/css" href="css/newmember.css" media="all" />
	<link rel="shortcut icon" src="image/facebook.ico" type="image/x-icon"/>
	<script src="https://kit.fontawesome.com/7d6d41d97c.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
</head>

<div class="navbar">
	<div class="scale">
		<div class="left">
			<div class="logo">
				<a href=""><i class="fab fa-facebook-square fa-4x"></i></a>
			</div>
			<div class="searchbar">
				<input type="text" name="searchbox" placeholder="Search">
			</div>
		</div>
		<div class="right">
			<div class="navmenu">
				<ul>
					<li style="padding-left: 5px; padding-bottom: 0px">
						<div class="proimage">
							<img src="image/empty.jpg" height="150" width="150">
						</div>
						<div class="proname">
							<a href="profile.php">
								
								<?php 
									echo $_SESSION['fName'];
								 ?>

							</a>
						</div>
					</li>
					<li><a href="">Home</a></li>
					<li><a href="">Find Friends</a></li>
					<li><a href="">Create</a></li>
				</ul>
			</div>
			<div class="fabmenu" style="font-size: 0.4rem;">
				<ul>
					<li><i class="fas fa-user-friends fa-3x"></i></li>
					<li><i class="fab fa-facebook-messenger fa-3x"></i></li>
					<li><i class="fas fa-bell fa-3x"></i></li>
					<li><i class="fas fa-question-circle fa-3x"></i></li>
					<li><i onclick="allsettings()" class=" dropbtn fas fa-caret-down fa-3x"></i></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="dropdown">
	  <div id="myDropdown" class="dropdown-content">
	    <a href="#home">Manage Groups</a>
	    <hr>
	    <a href="#about">Advertising on Facebook</a>
	    <hr>
	    <a href="#contact">Activity Log</a>
	    <a href="#contact">News Feed preferences</a>
	    <a href="#contact">Settings</a>
	    <hr>
	    <a href ="home.php?logout=true">Logout</a>
	  </div>
	</div>
</div>
		
<div class="allfbox">
<div class="forgetbox">
	<h1>Set Your Profile Photo</h1>
	<hr>
</div>
<form name="searchfmail" method="POST" action="newprofile.php" enctype="multipart/form-data">
	<div class="proinfo">
			<img id="output"/>
		<div id="image"></div>
		
<input type="file" name="profileimg" onchange="loadFile(event)">
	</div>
	<div class="btnfsearch">
		<button type="submit" name="ppsave">Save</button>
		<button type="submit" name="skip">Skip</button>
	</div>
</form>
</div>	
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</body>
</html>