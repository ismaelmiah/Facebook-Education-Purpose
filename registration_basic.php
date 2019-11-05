
<?php
include('include/database.php');

$f_name = $_POST['fname'];
$l_name = $_POST['sname'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$month	  = $_POST['month']; 
$month    = $month + 1;
$day	  = $_POST['day'];
$yr	      = $_POST['year'];
$bday     = $yr . '-' . $month . '-' .  $day;
$gender   = $_POST['gender'];

$sql = "INSERT INTO `user_info` (`fName`, `lName`, `email`, `pword`, `gender`, `bday`) 
VALUES ('{$f_name}', '{$l_name}', '{$email}', '{$password}','{$gender}','{$bday}')";
					
$query="SELECT * FROM user_info where email = '$email'";
$record=$conn->query($query);
$row_cnt = $record->num_rows;
if($row_cnt){
echo "<script type=\"text/javascript\">
	alert(\"Error: Email address exists try another email.\");
	window.location=\"index.php\";
</script>";
}
else{

}
if ($conn->query($sql)) {
    
    echo "<script type=\"text/javascript\">
                alert(\"Welcome To Facebook.\");
                window.location = \"index.php\"
            </script>";
    
} else{
    die("Failed: " . mysql_error());
}
?>