<?php include "../header.php" ?>
    <div class="apart">
		<div class="booking">	
		 	<div class="apart-form">
                 <div class="container" style="width:850px">
                    <h3>Post</h3>
                    <div class="blog-combine" style="display:flex;">
                        <div class="floatleft" style="width:550px;">
                            <?php require_once("../config.php");
                            $limit = 2;  
                            if (isset($_GET["page"])) {
                                $page  = $_GET["page"]; 
                                } 
                                else{ 
                                $page=1;
                                };  
                            $start_from = ($page-1) * $limit; 
                            $result1 = mysqli_query($conn,"SELECT * ,  DATE_FORMAT(date, '%W %D %M %Y') as date FROM post ORDER BY id ASC LIMIT $start_from, $limit ");
                            if (mysqli_num_rows($result1) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_array($result1)) {
                            ?>
                            <div class="room-booking" >
                            <a style='color:black; text-decoration:none;'
                                href="single-blog.php?page=single-blog&id=<?=$row['id']; ?>">
                                <h5 style="font-size:20px; font-weight: 700;">
                                <?php echo $row["post_title"]; ?></h5>
                                <div class="margin-btm-15px"></div> 	
  	
                                <?php echo '<img src=/php-project/img/'.$row["post_image"].' style="height:400px; width:550px; object-fit:cover;">'?>
                                <h5 style="font-size:16px; margin-top:15px; text-align:justify; line-height:1.5;"><?php echo $row["post_description"];?></h5>
                                <div class="margin-btm-15px"></div>
                                <span class="combine"><span class="text-left"><?php echo $row["post_author"];?></span>
                                <span class="text-right" style="float:right;"><?php echo $row["date"];;?></span></span>
                            </a>
                            </div>
                            <hr>
                            <?php
                            $i++;
                            }
                            }
                            ?>
                            <?php  
                            $result_db = mysqli_query($conn,"SELECT COUNT(id) FROM post"); 
                            $row_db = mysqli_fetch_row($result_db);  
                            $total_records = $row_db[0];  
                            $total_pages = ceil($total_records / $limit); 
                            /* echo  $total_pages; */
                            $pagLink = "<ul class='pagination'>";  
                            for ($i=1; $i<=$total_pages; $i++) {
                                $pagLink .= "<li class='page-item'><a class='page-link' href='blog.php?page=".$i."'>".$i."</a></li>";	
                            }
                            echo $pagLink . "</ul>";  
                            ?>
                        </div>
                        <div class="floatright" style="width:270px; margin:0px 0px 0px 30px;">
                            <?php include "../book-package/package-form.php";?>
                        </div>
                    </div>
				</div>
			</div>
		</div>
    </div>
    <style>
        li{
            margin-left:0px !important;
        }
        </style>
<?php include "../footer.php" ?> 