<style>
#cmtuser{
	margin-left: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-top: -5px;
	font-weight: bold;
    line-height: 1.3em;
    background: #E9EBEE;
    padding: 10px;
	border-radius: 10px;
	float: left;
	width: 80%;
}

#cmt{
	font-weight: normal;
	margin-left: 5px;
}

</style>

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

    if(isset($_POST['displaycomment'])){
        $postid=$_POST['post_id'];
        $result= $conn->query("SELECT * FROM comments where post_id = $postid");

        while($row=$result->fetch_assoc()){
            ?>
              
                <div id="comment-box">
                    <p id="cmtuser">
                        <?php echo $row['author']; ?>
                    <span id="cmt">
                    <?php echo $row['content']; ?>
                    </span>
                    </p>
                </div>
              
            <?php
        }
        $conn->close();
    }

?>