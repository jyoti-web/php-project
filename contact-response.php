<?php
include "config.php";
$contact_name = $conn->real_escape_string($_POST['con_name']);
$contact_email = $conn->real_escape_string($_POST['con_email']);
$contact_phone = $conn->real_escape_string($_POST['con_phone']);
$contact_area = $conn->real_escape_string($_POST['con_area']);

$sql="INSERT INTO contact (con_name, con_email, con_phone, con_area) 
VALUES ('".$contact_name."', '".$contact_email."' , '".$contact_phone."', '".$contact_area."')";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else{
    //echo "<h2 class='text-center' style='margin-top:50px; margin-bottom:50px;'>Thank You. </h2>";
}
include "../footer.php";
?>