<?php 
include('include/initialize.php');
	session_start();
	if(isset($_POST['postbtn'])){
		$postmessage=$_POST['postmessage'];
		$date=date("d-m-Y");
		$userid=$_SESSION['user_id'];
		$filename=rawurlencode($_FILES['uploadimage']['name']);
		$tempname=$_FILES['uploadimage']['tmp_name'];
		$size=$_FILES['uploadimage']['size'];
		$folder="image/".$filename;
		$pageid=1;
		$sql = "INSERT INTO post (user_id,post_content, post_date, page_id)	VALUES ($userid, '$postmessage', '$date', $pageid)";
		if ($conn->query($sql) === TRUE) {
			$postid=$conn->insert_id;
		}
		if($size){
			move_uploaded_file($tempname, $folder);
			$imageinfo="Yes";
			$sql = "INSERT INTO photos (filename,type,size,user_id,page_id, post_id)VALUES ('$filename','$folder',$size,$userid,$pageid, $postid)";
			$conn->query($sql);
		}
		header('location: home.php');
		$conn->close();
	}
 ?>