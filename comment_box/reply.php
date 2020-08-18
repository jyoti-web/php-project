<script>
function myFunction(){
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
			setInterval(function() {$('#comment_logs').load('/php-project/comment_box/logs.php');}, 1000);
		});
</script>
<body>
	<h3 style="margin-top:20px; font-size:20px;">Comments</h3>
    <div class="comment_input">
        <form name="form1">
        	<input type="text" name="name" placeholder="Name..."/></br></br>
            <textarea name="comments" rows="6" placeholder="Leave Comments Here..."></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="btn">Post</a></br>
        </form>
		<hr>
    </div>
    <div id="comment_logs">
    	Loading comments...
    </div>
</body>