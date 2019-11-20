<?php 
	session_start();
	include('include/database.php');	
	$userid=$_SESSION['user_id'];
	$pageid=0;
	if(isset($_GET['logout'])){
		session_unset();
		header('location: index.php');
	}

	if(isset($_POST['psave'])){
		$userid=$_SESSION['user_id'];
		$filename=rawurlencode($_FILES['uploadproimage']['name']);
		$tempname=$_FILES['uploadproimage']['tmp_name'];
		$size=$_FILES['uploadproimage']['size'];
		$folder="image/".$filename;
		$pageid=0;
		move_uploaded_file($tempname, $folder);
		$sql = "UPDATE photos SET filename='$filename', type='$folder', size=$size, caption='profile', 
		page_id=$pageid WHERE user_id=$userid";
		if($conn->query($sql)===True){
			header('location: profile.php');
		}
	}

	if(isset($_GET['del'])){
		$id=$_GET['del'];
		$sql="DELETE FROM post where post_id=$id";
		$conn->query($sql);
		header('location:profile.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Facebook</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<script src="https://kit.fontawesome.com/7d6d41d97c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/functions.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</head>
<body>


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
						<?php 
							$rec=$conn->query("SELECT * FROM photos WHERE user_id = ".$_SESSION['user_id']." AND 
								caption = 'profile'");
						    while($row = $rec->fetch_assoc()) {
						        echo "<img src=".$row['type']." height=\"150\" width=\"150\">";
						    }
						?>
							
						</div>
						<div class="proname">
							<a href="profile.php">
								
								<?php 
									echo $_SESSION['fName'];
								 ?>

							</a>
						</div>
					</li>
					<li><a href="home.php">Home</a></li>
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
				

<div class="bodylist">
	<div class="middlescale">
		<div class="middle">

			<div class="coverinfo">
		<form method="POST" action="profile.php" name="proform" enctype="multipart/form-data">
				<div class="leftcover">
					<div class="camera">
						<p ><i class="fas fa-camera"></i>Add Cover Photo</p>
					</div>
					<div class="profileimage">
						<?php 
							$rec=$conn->query("SELECT * FROM photos WHERE user_id = ".$_SESSION['user_id']." AND 
								caption = 'profile'");
						    while($row = $rec->fetch_assoc()) {
						        echo "<img src=".$row['type']." height=\"150\" width=\"150\">";
						        break;
						    }
						?>
					</div>
					<div class="profileup">
						<i class="fas fa-camera" onclick="document.getElementById('upprofile').click(); return false;"></i>
					</div>
					<input id="upprofile" type="file" name="uploadproimage" style="visibility: hidden;">
				</div>

				<div class="rightcover">
					<h2> <?php echo $_SESSION['fName']." ".$_SESSION['lName']; ?> </h2>
					<button name="psave" class="lock">Change Profile Photo</button>
					<button class="update">Update Info</button>
					<button class="activity"><i class="fas fa-list-ul"></i>Activity log</button>
				</div>
				<div class="profilemenu">
					<ul>
						<li>Timeline <i style="margin-left: 5px" class="fas fa-caret-down"></i></li>
						<li>About</li>
						<li>Friends <span>92</span></li>
						<li>Photos</li>
						<li><i style="margin-right: 5px;" class="fas fa-lock"></i>Archives</li>
						<li>More <i  style="margin-right: 5px;" class="fas fa-caret-down"></i></li>
					</ul>
				</div>
			</div>
			</form>

			<div class="otherinfo">
				<div class="otherleft">
					<div class="intro">
						<div class="world">
							<i class="fas fa-globe-americas"></i>
							<h2>Intro</h2>
						</div>
						<div class="bio">
							<i class="far fa-comment-alt"></i>
							<p>Add a short bio to tell people more about yourself.</p>
							<a href="#">Add Bio</a>
						</div>
						<div class="editdetails">
							<i class="far fa-clock"></i>
							<p>Joined on February 2013</p>
							<button>Edit Details</button>
						</div>
						<div class="showcase">
							<i class="far fa-star"></i>
							<p>
								Showcase what's important to you by adding photos, Pages, groups and more to your featured section on your public profile.
							</p>
							<a href="#">Add to Featured</a>
						</div>
					</div>
					<div class="photo">
						<div class="photoss">
							<i class="fas fa-image"></i>
							<h2>Photos</h2>
						</div>
						<div class="addphoto">
							<a href="#">Add photo</a>
						</div>
						<div class="all_photo">
							<div class="photo1">
								<img src="image/game1.jpg">
							</div>
							<div class="photo1">
								<img src="image/game3.jpg">
							</div>
							<div class="photo1">
								<img src="image/game2.jpg">
							</div>
						<hr>
						</div>
					</div>


					<div class="friends">
						<div class="photoss">
							<i class="fas fa-user-friends"></i>
							<h2>Friends</h2>
						</div>
						<div class="addphoto">
							<a href="#">Find Friends</a>
						</div>
						<div class="all_photo">
							<div class="friendpro">
								<img src="image/game1.jpg">
								<a href="#">welcome</a>
							</div>
							<div class="friendpro">
								<img src="image/game3.jpg">
								<a href="#">welcome</a>
							</div>
							<div class="friendpro">
								<img src="image/game2.jpg">
								<a href="#">welcome</a>
							</div>
							<div class="friendpro">
								<img src="image/game1.jpg">
								<a href="#">welcome</a>
							</div>
							<div class="friendpro">
								<img src="image/game3.jpg">
								<a href="#">welcome</a>
							</div>
							<div class="friendpro">
								<img src="image/game2.jpg">
								<a href="#">welcome</a>
							</div>
						</div>
						<hr>
					</div>

					<div style="margin-top: 15px; background-color: white; padding: 10px;">
					<div class="languagelink">
						<div class="links">
						<a href="#"><span style="color: gray;">English (UK)</span></a>
						<a href="#">English (US)</a>
						<a href="#"> বাংলা</a>
						<a href="#">অসমীয়া</a>
						<a href="#">Español</a>
						</div>
					</div>
					<div class="morelanguage">
						<button>+</button>
					</div>				  	
				</div>
				<div class="pageinfo">
					<a href="#"><span style="color: gray;">Privacy</span></a>
					<a href="#"><span style="color: gray;">Terms</span></a>
					<a href="#"><span style="color: gray;">Advertising</span></a>
					<a href="#"><span style="color: gray;">AdChoices</span></a>
					<a href="#"><span style="color: gray;">Cookies</span></a>
					<a href="#"><span style="color: gray;">More</span></a>
					<br>
					<span style="padding: 5px; margin-top: 5px; color: gray;">Facebook © 2019</span>
				</div>
			</div>
			</div>

				<div class="otherright">

				<form method="post" action="post.php" enctype="multipart/form-data">
					<div class="statusbox">
						<h1>Create Post</h1>
						<i class="fas fa-user-circle"></i>
						<textarea placeholder="What's On Your Mind?
						" name="postmessage"></textarea>
						<hr>
						<div class="extrapost">
							<ul>
								<li>
								  	<div class="fontawsome">
								  		<i class="fas fa-image"></i>
								  	</div>
									<div class="fonttext">
										
<input id="upload" type="file" name="uploadimage" style="visibility: hidden; color: transparent;">
<button style="color: black; font-weight: 600; border: none; background: none; cursor: pointer;"onclick="document.getElementById('upload').click(); return false;" 
	>Photo/Video</button>
										
									</div>	
							  </li>
								<li>
								  	<div class="fontawsome">
								  		<i  style="color: blue;" class="fas fa-user-tag"></i>
								  	</div>
									<div class="fonttext">
										<a style="color: black;font-weight: 600" href="#">Tags friends</a>
									</div>	
							  </li>
								<li>
								  	<div class="fontawsome">
								  		<i style="color: orange;" class="fas fa-laugh"></i>
								  	</div>
									<div class="fonttext">
										<a style="color: black;font-weight: 600" href="#">Feelings/Act.</a>
									</div>	
							  </li>
								<li>
								  	<div class="fontawsome">
								  		<a href="#"><i style="background: none;" class="fas fa-ellipsis-h"></i></a>
								  	</div>
							  </li>
						</ul>
						</div>
						<input type="hidden" name="page" value="0" >
						<button class="btnpost" name="postbtn">
							POST
						</button>
					</div>
				</form>

					<div class="postinfo">
					
				<?php
					$sql="SELECT * FROM post where user_id = $userid ORDER BY post_id DESC";
					$record=$conn->query($sql);
					while($data = $record->fetch_assoc()){
				 ?>
					<div class="posts">
						<div class="newpost whitecolor">
								<div class="posttitlesinfo">
									<div class="userinfos">
										<div class="usrimg">
												
						<?php 
							$rec=$conn->query("SELECT * FROM photos WHERE user_id = ".$_SESSION['user_id']." AND 
								caption = 'profile'");
						    while($row = $rec->fetch_assoc()) {
						        echo "<img src=".$row['type']." height=\"150\" width=\"150\">";
						        break;
						    }
						?>
										</div>
										<div class="usrname">
											<h1>
												<?php echo $_SESSION['fName']." ".$_SESSION['lName'] ?>
											</h1>
											<a href="#"><?php echo "".$data['post_date'];?></a>
										</div>
									</div>
									<div class="postoption">
										<a href="#"><i class="fas fa-edit"></i></a>
										<a href="#"><i class="fas fa-bookmark"></i></a>
										<a href="profile.php?del=<?php echo $data['post_id']; ?>"><i class="fas fa-trash-alt"></i></a>
										<a href="#"><i class="fas fa-share"></i></a>
								
									</div>
								</div>
								<div class="post-contents">
									<p>
										<?php 
											echo "".$data['post_content']."<br>";
										 ?>
									</p>
									<?php 
										$rec=$conn->query("SELECT * FROM photos WHERE post_id= ".$data['post_id']);		
										if ($rec->num_rows > 0) {
										    while($row = $rec->fetch_assoc()) {
										    	echo "<div>";
										        echo "<img src=".$row['type']." height=\"300\" width=\"465\"></div>";
										    }
									}?>
									<hr>
								</div>
								<div class="postreact">
									<div class="like">
										<i class="far fa-thumbs-up"></i>
										<a href="#">Like</a>
									</div>
									<div class="comments">
										<i class="far fa-comment-alt"></i>
										<a href="#">Comments</a>
									</div>
								</div>
							</div>
						<div class="commentsinfo whitecolor">
							<img src="image/profile.jpg">
							<input type="text" name="comment" placeholder="Write a comment...">
							<input style="margin-left: -20px;width: 100px;border-left: none;background-color: white; " type="text" name="" disabled>
							<div class="blox">
								<i class="fab fa-sticker-mule"></i>
								<i class="fas fa-image"></i>
								<i class="fas fa-camera"></i>
								<i class="far fa-smile"></i>
							</div>
						</div>
					</div>
	
				<?php } ?>

  
					</div>
				</div>
			</div>
		</div>

		<div class="rightsidebar">
			<div class="chattinglist">
					<div class="ads">
						<div class="instanttext">
							<h1>INSTANT GAME</h1>
						</div>
						<div class="more">
							<a>MORE</a>
						</div>
						<div class="games">
							<div class="leftsign">
								<a><</a>
							</div>
							<div class="advertisegame">
								<img src="image/game1.jpg" width="50" height="50">
								<img src="image/game2.jpg" width="50" height="50">
								<img src="image/game3.jpg" width="50" height="50">
							</div>
							<div class="rightsign">
								<a style="color: black;">></a>
							</div>
						</div>
					</div>

					<div class="ads">
						<div class="instanttext">
							<h1>Your GAMEs</h1>
						</div>
						<div style="margin-left: 90px" class="more">
							<a>MORE</a>
						</div>
						<div class="games">
							<div class="leftsign">
								<a><</a>
							</div>
							<div class="advertisegame">
								<img src="image/game1.jpg" width="50" height="50">
								<img src="image/game2.jpg" width="50" height="50">
								<img src="image/game3.jpg" width="50" height="50">
							</div>
							<div class="rightsign">
								<a style="color: black;">></a>
							</div>
						</div>
					</div>
					<ul class="profilestatus">
					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>

					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>

					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>

					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>
					  <li style=" font-weight: 700; color: gray;" >Shortcut</li>
					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>
					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>
					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>
					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>
					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>
					  <li class="profileli huber">
					  	<div class="proimage">
							<img src="image/game1.jpg">
						</div>
						<div class="proname" style="margin-top: -18px;">
							<a style="color: black;" href="">Profile Full Name</a>
							<span>.</span>
						</div>
					  </li>
					</ul>
					<div class="chattingsearch">
						<div class="fontawsome">
							<i class="fas fa-search fa-3x"></i>
						</div>
						<input type="text" name="searchprofile" placeholder="Search">
						<div class="fontawsome">
							<i class="fas fa-cog fa-3x"></i>
						</div>

						<div class="fontawsome">
							<i class="fas fa-edit fa-3x"></i>
						</div>
						<div class="fontawsome">
							<i class="fas fa-user-friends fa-3x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

										
<script>
function allsettings() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>


</body>
</html>