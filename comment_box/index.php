<script>
// var reply = document.getElementById('reply');
// if(!reply){
	function commentSubmit(){
		if(form1.name.value == '' || form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', '/php-project/comment_box/insert.php?name='+name+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {
				$('#comment_logs').load('/php-project/comment_box/logs.php');
				}, 1000);
		});
	
</script>
<body>
<div id="comment_input">
	<h3 style="margin-top:20px; font-size:20px;">Comments</h3>
    <div class="comment_input">
        <form name="form1">
        	<input type="text" name="name" placeholder="Name..."/></br></br>
            <textarea name="comments" rows="6" placeholder="Leave Comments Here..."></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="btn">Post</a></br>
        </form>
		<hr>
    </div>
</div>
<?php
$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY id DESC");
$count = mysqli_num_rows($result);
if($count > 0){
	echo "<div id='comment-count' class='text-right'>";
		echo "<span id='count-number'>". $count . "</span> Comment(s)";
	echo "</div>";
	echo "<hr>";
}
?>
    <div id="comment_logs">
    	Loading comments...
    </div>
</body>
