<?php
include "config.php";
// if (isset($_POST['uploadImageBtn'])) {
//     $uploadFolder = '/php-project/img/';
//     foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {
//         $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
//         $imageName = $_FILES['imageFile']['name'][$key];
//         $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

//         // save to database
//         $query = "INSERT INTO uploadedimage SET imagename='$imageName' " ;
//         $run = $conn->query($query) or die("Error in saving image".$conn->error);
//     }
//     if ($result) {
//         echo '<script>alert("Images uploaded successfully !")</script>';
//         echo '<script>window.location.href="example.php";</script>';
//     }
// }
?>
<?php

if(isset($_FILES['files'])){

$errors= array();

foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){

$file_name = $key.$_FILES['files']['name'][$key];

$file_size =$_FILES['files']['size'][$key];

$file_tmp =$_FILES['files']['tmp_name'][$key];

$file_type=$_FILES['files']['type'][$key];

if($file_size > 2097152){

$errors[]='File size must be less than 2 MB';

}

$query="INSERT INTO upload_data (USER_ID, FILE_NAME, FILE_SIZE , FILE_TYPE) VALUES('$user_id','$file_name','$file_size','$file_type'); "; $desired_dir="user_data";

if(empty($errors)==true){

if(is_dir($desired_dir)==false){

mkdir("$desired_dir", 0700);

// Create directory if it does not exist

}

if(is_dir("$desired_dir/".$file_name)==false){ move_uploaded_file($file_tmp,"user_data/".$file_name);

}else{

//rename the file if another one exist

$new_dir="user_data/".$file_name.time();

rename($file_tmp,$new_dir) ;

}

mysqli_query($query);

}else{

print_r($errors);

}

}

if(empty($error)){

echo "Success";

}

}

?>

<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="files[]" multiple="" />

<input type="submit"/></form>