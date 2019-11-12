<!DOCTYPE HTML>
<html lang="en-US">
<?php 
	include('include/initialize.php');
	session_start();
	$correct=true;
	$row_cnt=0;
	if(isset($_POST['btnfsech'])){
		$email=$_POST['mail'];
		$sql="SELECT * from user_info where email='$email'";
		if($record=$conn->query($sql)){
			$data=$record->fetch_assoc();
			$row_cnt=$record->num_rows;
			$_SESSION['ffName']=$data['fName'];
			$_SESSION['flName']=$data['lName'];
			$_SESSION['fuser_id']=$data['user_id'];
			$correct=false;
		}
	}

	if(isset($_POST['fsave'])){
		$npass=sha1($_POST['npass']);
		$sql="UPDATE user_info SET pword= '$npass' where user_id = ".$_SESSION['fuser_id'];
		$record=$conn->query($sql);
		$_SESSION['message']= $_SESSION['ffName']." ".$_SESSION['flName']." You have Successfully Changed Password";
		header('location:index.php');
	}
 ?>
<head>
	<meta charset="UTF-8">
	<title>Facebook -log in or sign up</title>
	<link rel="stylesheet" type="text/css" href="css/forget.css" media="all" />
	<link rel="shortcut icon" src="image/facebook.ico" type="image/x-icon"/>
	<script src="js/registrationformValidation.js"></script>
</head>
<body>
	<header class="header-area">
		<div class="container">	
			<div class="logo-area">
				<a href="#"><img src="image/facebook.png" alt="facebook" /></a>
			</div>
			<div class="login-area">
				<form name="login" action="login.php" method="POST" onsubmit="return loginformvalidation();">
					<div class="username-area">
						<label for="user">Email or Phone</label>
						<input type="text" id="user" name="log_email" />
						<input type="checkbox" name="checkbox" id="check" />
						<label for="check">Keep me log in</label>
					</div>
					<div class="password-area">
						<label for="pass">Password</label>
						<input type="password" name="log_pword" id="pass" />
						<a href="forget.php">Forgot your password?</a>
					</div>
					<div class="submit-area">
						<input type="submit" name="btnlogin" value="Log In" />
					</div>
				</form>
			</div>
		</div>
	</header>
	<div class="main-area">
	<?php if($row_cnt){?>
		<div class="allfbox">
			<div class="forgetbox">
					<h1>Reset Your Password</h1>
					<hr>
			</div>
			<div class="forget">
					<div class="fprofile">
						<img src="image/profile1.jpg" height="80" width="80">
						<p> <?php echo $_SESSION['ffName']." ".$_SESSION['flName']; ?> </p>
						<span>Facebook User</span>
						<a href="#">This isn't my account</a>
					</div>
			<form name="fnpass" method="POST" action="forget.php" onsubmit="return validpassword()">
					<div class="passwrd">
						<h2>New Password: </h2>
						<input type="password" name="npass">
						<h2>Confirm Password: </h2>
						<input type="password" name="cpass">
					</div>
			</div>
				<div class="btnfsave">
					<button name="fsave">Save</button>
					<button name="fcancl">Cancel</button>
				</div>
			</form>
		</div>
	<?php } else{ ?>
		<div class="allfbox">
			<div class="forgetbox">
					<h1>Find Your Account</h1>
					<hr>
			</div>
			<form name="searchfmail" method="POST" action="forget.php" onsubmit="return checkEmail();">
			<div class="searchforget">
					<p>Please enter your email address or phone number to search for your account.</p>
					<input type="email" name="mail" placeholder="Phone number or email address">
					<?php if($correct==false){ ?> <p style="color: red;" >Your email isn't registered</p> <?php } ?>
			</div>
				<div class="btnfsearch">
					<button type="sumbit" name="btnfsech">Search</button>
					<button type="reset" onclick="redirect();" name="btnfcancl">Cancel</button>
				</div>
			</form	>
		</div>
	<?php } ?>
	</div>
	<footer class="footer-area">
		<div class="container" style="padding: 40px 0px 30px 0px;">
			<div class="footer-top">
				<ul>
					<li><a href="#">English (US)</a></li>
					<li><a href="#">বাংলা</a></li>
					<li><a href="#">Español</a></li>
					<li><a href="#">Português (Brasil)</a></li>
					<li><a href="#">العربية</a></li>
					<li><a href="#">Italiano</a></li>
					<li><a href="#">Bahasa Indonesia</a></li>
					<li><a href="#">Français (France)</a></li>
					<li><a href="#">Deutsch</a></li>
					<li><a href="#">हिन्दी</a></li>
					<li><a href="#">…</a></li>
				</ul>
			</div>
			
			<hr />
			
			<div class="footer-bottom">
				<ul>				
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Log In</a></li>
					<li><a href="#">Messenger</a></li>
					<li><a href="#">Facebook Lite</a></li>
					<li><a href="#">Mobile</a></li>
					<li><a href="#">Find Friends</a></li>
					<li><a href="#">Badges</a></li>
					<li><a href="#">People</a></li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Places</a></li>
					<li><a href="#">Games</a></li>
					<li><a href="#">Locations</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Create Ad</a></li>
					<li><a href="#">Create Page</a></li>
					<li><a href="#">Developers</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Ad Choices</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
			<div class="copyright">
				<p>Facebook © 2015</p>
			</div>
		</div>
	</footer>
</body>
</html>