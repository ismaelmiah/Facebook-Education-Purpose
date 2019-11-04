
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
					
if ($conn->query($sql)) {
    
    echo "<script type=\"text/javascript\">
                alert(\"New member added successfully.\");
                window.location = \"home.php\"
            </script>";
    
} else{
    die("Failed: " . mysql_error());
}
?>