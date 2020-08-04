<?php include 'header.php'?>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
               <div class="col-md-4">
                   <div class="form-group">
                       <input type="file" name="imageFile[]" required multiple class="form-control">
                   </div>
               </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="submit" name="uploadImageBtn" id="uploadImageBtn" value="Upload Images" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <?php
        // fetch Images
        require_once("config.php");

        $i = 1;
        $queryGetImg = "SELECT * FROM uploadedimage";
        $resultImg = $conn->query($queryGetImg);
        if ($resultImg->num_rows > 0 ){
            while ($row = $resultImg->fetch_object()){ ?>
                <div class="col-sm-3">
                    <h3>Image <?php echo $i;?></h3>
                    <img src="<?php echo '/php-project/img/'.$row->imagename;?>"/ style="width: 100px; height: 50px;">
                </div>
           <?php $i++;
            }
        }
        ?>
    </div>
</div>
<?php
include "config.php";
if (isset($_POST['uploadImageBtn'])) {
    $uploadFolder = '/php-project/img/';
    foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
        $imageName = $_FILES['imageFile']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

        // save to database
        $query = "INSERT INTO uploadedimage SET imagename='$imageName' " ;
        $run = $conn->query($query) or die("Error in saving image".$conn->error);
    }
    if ($result) {
        echo '<script>alert("Images uploaded successfully !")</script>';
        echo '<script>window.location.href="example.php";</script>';
    }
}