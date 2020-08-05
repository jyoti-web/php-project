 <?php include 'header.php';?>

<?php
error_reporting(0);
$in = $_POST['in'];
$out = $_POST['out'];
$ad = $_POST['adults'];
$kids = $_POST['kids'];
 
 
 if ($_POST['clear'])
{
 $in="";
 $out="";
 $ad="";
 $kids="";
}
 if ($_POST['send']) 
 {
$m1 = $in;
$m2 = $out;
$m3 = $ad;
$m4 = $kids;
$di = $m2 - $m1;
$de = " - ";
$sl = " / ";
$night = " Night(s) ";
    }
?>
<html>
<form action = "" method = "POST">

<body>
	<div class="apart">
		<div class="container" style="width: 900px;">
			<h3>Apartments & Suites</h3>
			<div class="margin-btm" style="height: 25px;"></div>
		</div>
		<div class="booking">	
		 	<div class="apart-form">
		 		<div class="container" style="width: 840px;">
		 			<div class="our-room">
				 		<h5>Our Rooms</h5>
				 	</div>
		 			<hr>
		 			<span class="abc" style="display: flex;">
				    <input type="text"  class="form-control" id="in" name="in" placeholder="Check-In" value="<?php echo $in;?>" required>
				    <input type="text" class="form-control" id="out" name="out" placeholder="Check-Out" value="<?php echo $out;?>" required>
				    <input type="number" name="adults" id="adults" min="1" value="<?php echo $ad;?>" placeholder="1 Adults" max="2">
				    <input type="number" name="kids" id="kids" min="0" value="<?php echo $kids;?>" placeholder="0 kids" max="1">
				    <input type = "submit" name="send" value = "Ok" id="send">
					</span>
					<hr>
					<div class="booking-room" id="di">
						<h6 style="font-size: 18px;"><span style="font-weight: 100;">Result For:</span>
						    <?php
						echo $m1;
						echo $de;
						echo $m2;
						echo $sl;
						echo $di;
						echo $night;
						 ?> 
						<input type = "submit" name="clear" value = "Clear"><hr></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
<?php include 'footer.php';?> -->
<?php
require 'config.php';
 $output = '';  
 if(is_array($_FILES))   
 {  
      foreach ($_FILES['files']['name'] as $name => $value)  
      {  
           $file_name = explode(".", $_FILES['files']['name'][$name]);  
           $allowed_ext = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_ext))  
           {  
                $new_name = $file_name[1];  
                $sourcePath = $_FILES['files']['name'][$name];  
                //$targetPath = " ".$new_name;  
                $sql = "INSERT INTO tbl_images (id, location) VALUES (null, '{$sourcePath}')";
                $image = mysqli_query($conn,$sql);
                if(move_uploaded_file($sourcePath, $new_name))  
                { 

		            alert ("Successfully added.");
                }                 
           }            
      }  

 }  
 ?>

 <form method="POST" action="demo.php" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="submit" name="submit" value="ADD">
    </form>