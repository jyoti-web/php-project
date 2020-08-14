<?php
include "../header.php";
include "../config.php";
$pt_title = $conn->real_escape_string($_POST['post_title']);
$pt_description = $conn->real_escape_string($_POST['post_description']);
$pt_author = $conn->real_escape_string($_POST['post_author']);
$pt_image = $_FILES['post_image']['name'];
$filetmpname = $_FILES['post_image']['tmp_name'];
$folder = '/php-project/img/';
 move_uploaded_file($filetmpname, $folder.$pt_image);
$sql="INSERT INTO post(post_title, post_description, post_author, post_image) 
VALUES ('".$pt_title."', '".$pt_description."' , '".$pt_author."', '".$pt_image."')";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else{
    echo "<h2 class='text-center' style='margin-top:50px; margin-bottom:50px;'>Post Added Sucessfully. </h2>";
}
include "../footer.php";
?>