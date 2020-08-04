<?php include 'header.php';?>
<form action="product.php" method="post" enctype = "multipart/form-data">
	<input type="file" name="image">
	<input type="text" name="title">
	<textarea name="description" cols="30" rows="6"></textarea>
	<input type="text" name="price">
	<input type="checkbox" name="facilites">
	<input type="file" name="files[]" multiple>
	<input type="submit" name="submit">
	<input type="reset" name="reset">
</form>

<?php 
  if(isset($_FILES['image'])){$errors= array();

  $file_name = $_FILES['image']['name'];

  $file_size = $_FILES['image']['size'];

  $file_tmp = $_FILES['image']['tmp_name'];

  $file_type = $_FILES['image']['type'];

  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
  
  $extensions= array("jpeg","jpg","png");
  
  if(in_array($file_ext,$extensions)=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  }
  
  if($file_size > 2097152) {
     $errors[]='File size must be excately 2 MB';
  }
  
  if(empty($errors)==true) {
     move_uploaded_file($file_tmp,"/php-project/img/".$file_name);
     //echo "Success";
  }else{
     print_r($errors);
  }    } 
  ?> 
 <?php include 'footer.php';?>