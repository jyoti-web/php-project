<?php 
require_once("config.php");
if((isset($_POST['title'])&& $_POST['title'] !='') && (isset($_POST['price'])&& $_POST['price'] !=''))
{
$title = $conn->real_escape_string($_POST['title']);
$des = $conn->real_escape_string($_POST['description']);
$price = $conn->real_escape_string($_POST['price']);
$size1 = $conn->real_escape_string($_POST['size']);
$beds1 = $conn->real_escape_string($_POST['bed']);
$accommodates1 = $conn->real_escape_string($_POST['accommodates']);
//Checkbox data store in database
$checkbox1=$_POST['facilites'];  
	$chk="";  
	foreach($checkbox1 as $chk1)  
	   {  
	      $chk .= $chk1." ";  
	   }  
//single image store in database
$filename = $_FILES['image']['name'];
$filetmpname = $_FILES['image']['tmp_name'];
$folder = '/php-project/img/';
 move_uploaded_file($filetmpname, $folder.$filename);
 //multiple image store in database
 foreach ($_FILES['files']['tmp_name'] as $key => $images) {
        $imageTmpName = $_FILES['files']['tmp_name'][$key];
        $imageName = $_FILES['files']['name'][$key];
        move_uploaded_file($imageTmpName,$folder.$imageName);
$sql="INSERT INTO project_product(title, price, size, bed, accommodates, image, description, facilites, files) 
VALUES ('".$title."', '".$price."', '".$size1."', '".$beds1."', '".$accommodates1."', '".$filename."', '".$des."', '".$chk."', '".$imageName."' )";
}

session_start();
    $_SESSION['success_message'] = "Product Add successfully In Database.";
    header("Location: thankyou.php");
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else{
    echo "No result found";
}
}
else
{
echo "Please fill Name and Email";
}    
?>
