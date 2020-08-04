<?php include 'header.php';?>
<?php
echo $name = $_POST['product-img'];
echo $name = $_POST['title'];
echo $name = $_POST['description'];
echo $name = $_POST['price'];
echo $name = $_POST['facilites'];
echo $name = $_POST['gallery'];

// echo $name = $_POST['product-img'];
// echo $name = $_POST['product-img'];

?>
<div class="apart">
		<div class="container" style="width: 900px;">
			<h3>Apartments & Suites</h3>
			<div class="margin-btm" style="height: 25px;"></div>
		</div>
		<div class="booking">	
		 	<div class="apart-form">
		 		<div class="container" style="width: 850px;">
		 			<div class="our-room" style="margin-bottom: 10px;">
				 		<h5 style="margin-left: -15px;"><i class="fa fa-arrow-left" aria-hidden="true" onclick="goBack()" style="color: #D97B34 !important; border-right: 1px solid; padding-left: 0px; padding-right: 15px;"></i><span style="padding-left: 15px; font-size: 24px;"><?php echo $name = $_POST['title']; ?></span></h5>
				 	</div>
					<img src="<?php echo '/php-project/img/'. $_FILES['image']['name']; ?>" style="width: 549px; height: 350px;">
					<!-- <img src="<?php echo '/php-project/img/'. $_FILES['img[]']['name']; ?>" style="width: 300px; height: 200px;"> -->
					<div class="custom-img-gallery" style="display: flex;">
						<?php 
						if(isset($_POST['submit'])) { 

							// Configure upload directory and allowed file types 
							$upload_dir = '/img'.DIRECTORY_SEPARATOR; 
							$allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
							
							// Define maxsize for files i.e 2MB 
							$maxsize = 2 * 1024 * 1024; 

							// Checks if user sent an empty form 
							if(!empty(array_filter($_FILES['files']['name']))) { 

								// Loop through each file in files[] array 
								foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
									
									$file_tmpname = $_FILES['files']['tmp_name'][$key]; 
									$file_name = $_FILES['files']['name'][$key]; 
									$file_size = $_FILES['files']['size'][$key]; 
									$file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 

									// Set upload file path 
									$filepath = $upload_dir.$file_name; 

									// Check file type is allowed or not 
									if(in_array(strtolower($file_ext), $allowed_types)) { 

										// Verify file size - 2MB max 
										if ($file_size > $maxsize)		 
											echo "Error: File size is larger than the allowed limit."; 

										// If file with name already exist then append time in 
										// front of name of the file to avoid overwriting of file 
										if(file_exists($filepath)) { 
											$filepath = $upload_dir.time().$file_name; 
											
											if( move_uploaded_file($file_tmpname, $filepath)) { 
												echo "{$file_name} successfully uploaded <br />"; 
											} 
											else {					 
												echo "Error uploading {$file_name} <br />"; 
											} 
										} 
										else { 
										
											if( move_uploaded_file($file_tmpname, $filepath)) { 
												echo "{$file_name} successfully uploaded <br />"; 
											} 
											else {					 
												echo "<span class='img-gallery'><img src='/php-project/img/{$file_name}' style='width:68px; height:50px; object-fit:cover'></span>"; 

											} 
										} 
									} 
									else { 
										
										// If file extention not valid 
										echo "Error uploading {$file_name} "; 
										echo "({$file_ext} file type is not allowed)<br / >"; 
									} 
								} 
							} 
							else { 
								
								// If no files selected 
								echo "No files selected."; 
							} 
						} 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>