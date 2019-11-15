<!DOCTYPE HTML>
<html lang="en-US">
<?php 
	session_start();
	if(isset($_SESSION['fName'])){
		header('location:home.php');
	}
 ?>
<head>
	<meta charset="UTF-8">
	<title>Facebook -log in or sign up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	<link rel="shortcut icon" href="image/facebook.ico" type="image/x-icon"/>
</head>
<body>
<script src="js/registrationformValidation.js"></script>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
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
		<div class="left">
			<h3>Facebook helps you connect and share with the people in your life.</h3>
			<img src="image/left.png" alt="picture" />
		</div>
		<div class="right">
			<h1>Create an account</h1>
			<p><span>It's quick and easy</span></p>
			<form name="register" onsubmit="return checkRegistration();" method="POST" action="registration_basic.php">
				<div class="first-name">
					<input type="text" name="fname" placeholder="First Name" />
				</div>
				<div class="sur-name">
					<input type="text" name="sname" placeholder="Surname" />
				</div>
				<div class="mobile">
					<input type="email" name="email" placeholder="Mobile number or email address" />
				</div>
				<div class="mobile">
					<input type="password" name="password" placeholder="Password" />
				</div>
				<div class="birthday">
					<h2>Birthday</h2>
					<select name="day" id="day" class="day">
						<option value="Day">Day</option>
						<?php 
                           $d = range(31, 1);
							foreach ($d as $day) {
								echo '<option value='.$day.'>'.$day.'</option>';
							}
						 ?>
					</select>
					<select name="month" id="month" class="month">
						<option value="Month">Month</option>
						 <?php 
                           $m = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                            foreach ($m as $month=>$value) {
                              echo '<option value='.$month.'>'.$value .'</option>';
                            }
                         ?>
					</select>
					<select name="year" id="year" class="year">
						<option value="Year">Year</option>

						 <?php 
	                         $years = range(2010, 1900);
							  foreach ($years as $yr) {
								  echo '<option value='.$yr.'>'.$yr.'</option>';
							  }	
                         ?>		  
					</select>
				</div>
				<div class="gender">
					<h2>Gender</h2>
					<input type="radio" name="gender" id="female" value="Female" /><label for="female">Female</label>
					<input type="radio" name="gender" id="male" value="Male" /><label for="male">Male</label>
					<input type="radio" name="gender" id="custom" value="Custom" /><label for="custom">Custom</label>
					<p>By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
				</div>
				<div class="sign-up">
					<input type="submit" value="Sign Up" />
					<h4><a href="#">Create a Page</a> for a celebrity, band or business.</h4>
				</div>
			</form>
		</div>
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