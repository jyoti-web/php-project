<?php include '../header.php';?>
<?php require_once("../config.php");?>
<div class="apart">
    <div class="booking">
        <div class="apart-form">
        <?php
            if(isset($_GET['id'])){
                $id = (int)$_GET['id'];
                
                $result1 = mysqli_query($conn, "SELECT * FROM post WHERE ID = $id");
                
                while($show = mysqli_fetch_array($result1)){
            ?>           
            <div class="container" style="width:850px">
                <h3>Single Post</h3>
                <div class="margin-btm"></div>

                <div class="our-room" style="margin-bottom: 10px;">
                    <h5>
                    <i class="fa fa-arrow-left" aria-hidden="true" onclick="goBack()" 
                    style="color: #D97B34 !important; border-right: 1px solid; 
                    padding-left: 0px; padding-right: 15px;"></i>
                    <span style="padding-left: 15px; font-size: 24px;"><?php echo $show['post_title'];?></span>
                    </h5>
                </div>
                <script>
                    function goBack() {
                        window.history.back();
                    }
				</script>	
                <div class="row">
                    <div class="apart-left" style="width: 550px;">
                        <img src="../img/<?php echo $show['post_image'];?>" 
                        style="height:400px; width:550px; object-fit:cover;">
                        <h5 style="font-size:16px; margin-top:15px; text-align:justify; line-height:1.5;"><?php echo $show['post_description'] ?></h5>
                        <hr>
                        <?php include "../comment_box/index.php"; ?>
                    </div>
                    <div class="apart-right" style="width:250px; margin-top:-30px; margin-left:20px; margin-right:0px;">
                        <?php include "../book-package/package-form.php";?>
                    </div>
                </div>
            </div>
            <?php
                } 
                } 
                else{
                    echo "It is not set.";
                }
            ?>
        </div>
    </div>
</div>  
<style>
textarea{
    width:100%;
    border:1px solid #F2CFB5 !important;
}
li{
    margin-left:0px !important;
}

</style>     
<?php include '../footer.php';?>
