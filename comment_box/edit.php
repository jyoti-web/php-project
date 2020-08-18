<?php

require("../config.php");
$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content' style='margin-left:30px;'>";
    echo "<div class='comment-data align-self-center' >";
        echo "<h4 class='text-right'><a style='color:#CB5920;' href='/php-project/comment_box/delete.php?id=" . $row['id'] . "'> X</a></h4>";
        echo "<span class='float-left' style='width:70px;'>
        <img src='../img/user.png'></span>";
        echo "<p style='color:#CB5920; font-size:18px;'>" . $row['name'] . "</p>";
        echo "<sub>" . $row['date_publish'] . "</sub>";
        echo "<hr style='border-color: #f2f2f2 !important;'>";
    echo "</div>";
    echo "<div class='comments-des'>";
        echo "<h5 style='font-size:18px; line-height:1.5'>" . $row['comments'] . "</h5>";
    echo "</div>";
?>
   <a href='#comment_input'><button class='btn' id='reply' onclick="myFunction()">Reply</button></a>
   <?php
   echo "</div>";
}
mysqli_close($con);
?>
<!-- var post = document.getElementById("post");
	var reply = document.getElementById("reply");
	post.onclick = function(){
        $(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('/php-project/comment_box/logs.php');}, 1000);
		});
    }
    reply.onclick = function(){
        $(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('/php-project/comment_box/edit.php');}, 1000);
		});
    } -->