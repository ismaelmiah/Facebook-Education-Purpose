<?php 
	session_start();
	include('include/database.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Facebook</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
	<script src="https://kit.fontawesome.com/7d6d41d97c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
							<img src="image/profile.jpg">
						</div>
						<div class="proname">
							<a href="">
								
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
					<li><i class="fas fa-caret-down fa-3x"></i></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="bodylist">
	<div class="middlescale">
		<div class="leftsidebar">
			<ul>
			  <li class="profileli huber">
			  	<div class="proimage">
					<img src="image/profile.jpg">
				</div>
				<div class="proname">
					<a style="color: black;" href="">
						<?php 
							echo $_SESSION['fName']." ".$_SESSION['lName'];
						 ?>
					</a>
				</div>
			  </li>

			  <li class="huber" style="margin-top: 10px; ">
			  	<div class="fontawsome">
			  		<i style="font-size: 16px;
    margin-top: 3px;
    margin-left: 6px;" class="far fa-newspaper fa-3x fa-messenger"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;font-weight: 600" href="">News Feed</a>
				</div>	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i  style="font-size: 16px;
    margin-top: 3px;
    margin-left: 6px;" class="fab fa-facebook-messenger fa-3x fa-messenger"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Messenger</a>
				</div>	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i  style="font-size: 16px;
    margin-top: 3px;
    margin-left: 6px;" class="fa fa-tv fa-3x fa-messenger"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Watch</a>
				</div>				  	
			  </li>
			  <li style="margin-top: 10px; font-weight: 700; color: gray;" >Shortcut</li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i class="fas fa-lightbulb fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">DIU ACM SOLVER F...</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="font-size: 10px;" class="fas fa-users fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Programming Club</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="font-size: 10px;" class="fas fa-users fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">DIU Software Eng...</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="font-size: 10px;" class="fas fa-users fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">DIU SWE ICPC Cont..</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="font-size: 10px;" class="fas fa-users fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Software Engineering</a>
				</div>				  	
			  </li>
			  <li>
			  	<div class="fontawsome">
			  		<i style="color: gray; "class="fas fa-caret-down fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: #00A0FF; margin-left: 5px" href="#">See More...</a>
				</div>				  	
			  </li>

			  
			  <li style="margin-top: 10px; font-weight: 700; color: gray;" >Explore</li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="color: orange;" class="fas fa-flag fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Pages</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="font-size: 10px;color: #FFF; background-color: #00A0FF;" class="fas fa-users fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Groups</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="color: red;" class="far fa-calendar-alt fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Events</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="color: red;" class="fab fa-gratipay fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Fundraisers</a>
				</div>				  	
			  </li>
			  <li class="huber">
			  	<div class="fontawsome">
			  		<i style="color: #00A0FF;" class="fas fa-history fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: black;" href="">Memories</a>
				</div>				  	
			  </li>
			  <li>
			  	<div class="fontawsome">
			  		<i style="color: gray; margin-left: 5px;" class="fas fa-caret-down fa-3x"></i>
			  	</div>
				<div class="fonttext">
					<a style="color: #00A0FF; margin-left: 5px" href="#">See More...</a>
				</div>				  	
			  </li>
			</ul>
		</div>
		<div class="middle">
			<div class="middleleft ">
				<div class="scalemid">
				<form method="post" action="post.php">
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
										<a style="color: black;font-weight: 600" href="#">Photo/Video</a>
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
								  		<a href="#"><i class="fas fa-ellipsis-h"></i></a>
								  	</div>
							  </li>
						</ul>
						</div>
						<button class="btnpost" name="postbtn">
							POST
						</button>
					</div>
				</form>
				<?php
					$sql="SELECT * FROM post ORDER BY post_id DESC";
					$record=$conn->query($sql);
					while($data = $record->fetch_assoc()){
				 ?>
					<div class="posts">
						<div class="newpost whitecolor">
								<div class="posttitlesinfo">
									<div class="userinfos">
										<div class="usrimg">
											<img src="image/profile.jpg">
										</div>
										<div class="usrname">
											<h1>Rana Islam</h1>
											<a href="#"><?php echo "".$data['post_date'];?></a>
										</div>
									</div>
									<div class="postoption">
										<a href="#"><i class="fas fa-ellipsis-h"></i></a>
									</div>
								</div>
								<div class="post-contents">
									<p>
										<?php 
											echo "".$data['post_content']."<br>";
										 ?>
									</p>
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
			<div class="middleright">
				<ul class="whitecolor">
					<li>
						<div class="fontawsome">
							<i style="color: gray;" class="fas fa-chess-board fa-3x"></i>
						</div>
						<div class="fonttext">
							<a style="color: blue;" href="#">20 request<span style="color: gray;"> from Zakir Hosen</span>.</a>
						</div>				  	
					</li>

					<li style="margin-top: -5px">
						<div class="fontawsome">
							<i style="color: orange;" class="fas fa-gift fa-3x"></i>
						</div>
						<div class="fonttext">
							<a style="color: blue;" href="#">Raihan Mahmud<span style="color: gray;">'s birthday is today</span>.</a>
						</div>				  	
					</li>
				</ul>

				<div style="margin-top: 20px" class="suggestedbox whitecolor">
					<ul>
						<div class="suggestedtitle">
							<h1>Suggested Groups</h1>
							<a style="color: #00A0FF;" href="#">See all</a>
						</div>
						<li>
							<div class="sggttbox">
								<div class="suggestimg">
									<img src="image/sggttimg1.jpg" width="258" height="140">
								</div>
								<div class="sggttboxinfo">
									<h1>Ziaul Haque Polash <span><br>Fans</span></h1>
									<button>+ Join Group</button>
									<p>234,566 members</p>
								</div>
							</div>
						</li>
						<li>
							<div class="sggttbox">
								<div class="suggestimg">
									<img src="image/sggttimg2.jpg" width="258" height="140">
								</div>
								<div class="sggttboxinfo">
									<h1>Ziaul Haque Polash <span><br>Fans</span></h1>
									<button>+ Join Group</button>
									<p>234,566 members</p>
								</div>
							</div>
						</li>
						<li>
							<div class="sggttbox">
								<div class="suggestimg">
									<img src="image/sggttimg3.jpg" width="258" height="140">
								</div>
								<div class="sggttboxinfo">
									<h1>Ziaul Haque Polash <span><br>Fans</span></h1>
									<button>+ Join Group</button>
									<p>234,566 members</p>
								</div>
							</div>
						</li>
						<li>
							<div class="sggttbox">
								<div class="suggestimg">
									<img src="image/sggttimg1.jpg" width="258" height="140">
								</div>
								<div class="sggttboxinfo">
									<h1>Ziaul Haque Polash <span><br>Fans</span></h1>
									<button>+ Join Group</button>
									<p>234,566 members</p>
								</div>
							</div>
						</li>
						<li>
							<div class="sggttbox">
								<div class="suggestimg">
									<img src="image/sggttimg2.jpg" width="258" height="140">
								</div>
								<div class="sggttboxinfo">
									<h1>Ziaul Haque Polash <span><br>Fans</span></h1>
									<button>+ Join Group</button>
									<p>234,566 members</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div style="margin-top: 15px" class="whitecolor">
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
					<span style="padding: 5px; margin-top: 5px;">Facebook © 2019</span>
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
</body>
</html>