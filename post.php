<?php 
include('include/initialize.php');
	session_start();
	if(isset($_POST['postbtn'])){
		$postmessage=$_POST['postmessage'];
		$pageid=$_POST['page'];
		$date=date("d-m-Y");
		$userid=$_SESSION['user_id'];
		$filename=rawurlencode($_FILES['uploadimage']['name']);
		$tempname=$_FILES['uploadimage']['tmp_name'];
		$size=$_FILES['uploadimage']['size'];
		$folder="image/".$filename;
		$sql = "INSERT INTO post (user_id,post_content, post_date, page_id)	VALUES ($userid, '$postmessage', '$date', $pageid)";
		if ($conn->query($sql) === TRUE) {
			$postid=$conn->insert_id;
		}
		if($size>0){
			move_uploaded_file($tempname, $folder);
			$sql = "INSERT INTO photos (filename,type,size,user_id,page_id, post_id)VALUES ('$filename','$folder',$size,$userid,$pageid, $postid)";
			$conn->query($sql);
		}
		if($pageid==0){
			header('location: profile.php');
		}
		else if($pageid==1){
			header('location: home.php');
		}
		$conn->close();
	}
 ?>