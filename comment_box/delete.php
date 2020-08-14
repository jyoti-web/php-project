<?php
require("../config.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM comments WHERE id='$id'");
//header("location: index.php");
echo "Comment Delete Successfully";
}
//mysqli_close($con);
?>