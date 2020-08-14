<?php 
include "../member-login/login-nav.php";
include "../header.php"; 
require_once "../config.php"; ?>
<body>
    <div class="apart">
        <div class="container" style="width:850px;">
        <h3>Add Post </h3>
            <form class="post_form" action="get_post_response.php" method="post" enctype = "multipart/form-data">
                <label>Title</label>
                <input type="text" name="post_title" id="post_title">
                <label>Feature Image</label>
                <input type="file" name="post_image" id="post_image">
                <label>Description</label>
                <textarea name="post_description" id="post_description"></textarea>
                <label>Author name</label>
                <input type="text" name="post_author" id="post_author">
                <input type="submit" name="post_submit" id="post_submit" value="Add Post">
                <input type="reset" name="post_reset" id="post_reset" value="Cancel">
            </form>
        </div>
    </div>
</body>
<?php include "../footer.php" ?>