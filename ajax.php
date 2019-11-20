<?php
    include('include/initialize.php');
    if(isset($_POST['done'])){
        $name=$_POST['username'];
        $comment=$_POST['comment_text'];
        $date=date("y-m-d    h:i:sa");
        $post_id=$_POST['post_id'];
        echo "hell Dude";
        $sql="INSERT INTO comments(content, author, created,post_id) VALUES('$comment', '$name','$date',$post_id)";
        $conn->query($sql);
        $conn->close();
    }

?>