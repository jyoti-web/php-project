<?php include 'header.php';?>
<?php require_once("config.php");?>
<div class="apart">
    <div class="container" style="width: 900px;">
        <h3>Apartments & Suites</h3>
        <div class="margin-btm" style="height: 25px;"></div>
    </div>
    <div class="booking">	
        <div class="apart-form">
        <?php
            if(isset($_GET['id'])){
                $id = (int)$_GET['id'];
                
                $result1 = mysqli_query($conn, "SELECT * FROM project_product WHERE ID = $id");
                
                while($show = mysqli_fetch_array($result1)){
                    // echo "ID: " . $show['id'] . " " . $show['image']. " Bedroom:".$show['title']." Price:$".$show['price']." <br></a>";
            ?>           
            <div class="container" style="width: 850px;">
                <div class="our-room" style="margin-bottom: 10px;">
                    <h5 style="margin-left: -15px;">
                    <i class="fa fa-arrow-left" aria-hidden="true" onclick="goBack()" 
                    style="color: #D97B34 !important; border-right: 1px solid; 
                    padding-left: 0px; padding-right: 15px;"></i>
                    <span style="padding-left: 15px; font-size: 24px;"><?php echo $show['title'];?></span>
                    </h5>
                </div>
                <script>
                    function goBack() {
                        window.history.back();
                    }
				</script>	
                <div class="row">
                    <div class="apart-left" style="width: 70%;">
                        <img src="./img/<?php echo $show['image'];?>" 
                        style="height:370px; width:595px;">
                        <div class="table" style="margin-top: 40px;">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <th>Properties:</th>
                                        <td><p>Accommodates: <?php echo $show['accommodates']; ?></p><p> Beds: <?php echo $show['bed']; ?>(s)</p></td>
                                        <td>Size: <?php echo $show['size']; ?> sq ft</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <table width="100%"> 
                                <tbody>
                                    <tr>
                                        <th width="28%">More Info:</th>
                                        <td width="72%">
                                        <?php echo $show['description'];?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>							    							    	
                            <hr>
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <th width="28%">Amenities:</th>
                                        <td width="72%">
                                            <?php echo $show['facilites'];?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <th width="28%">Terms:</th>
                                        <td width="72%"><a href="#" style="color: black">Read Our Policies</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="apart-center" style="width: 3%;"></div>
                    <div class="apart-right" style="width:27%;">
                        <div class="border-all" style="border: 1px solid #F2CFB5; padding: 18px; position: sticky; top: 20px;">
                            <span style="border-left: 1px solid #F2CFB5; padding-left: 13px; height: 75px;display: grid; margin:5px 0px 25px 0px; color: #000 !important; ">
                                <sub style="    bottom: -.25em !important;">From</sub>
                                <price style="margin-bottom: 0px; color: #000 !important; font-size: 30px;" id="price">$<?php echo $show['price'] ?></price>
                                <sub style="    bottom: -.25em !important;">Per Night</sub>
                            </span>
                            <form action="" method="post">
                                <div class="data-result" style="border: 1px solid #D97B34; border-bottom: 0px !important;">
                                    <input type="text"  class="form-control" id="in" name="in" placeholder="Check-In" value="Check-In" min="<?php echo $date1 = date("Y/m/d")?>" required >
                                    <input type="text" class="form-control" id="out" name="out" placeholder="Check-Out" value="Check-Out" required>
                                    <input type="number" name="adults" id="adults" min="1" value="1" placeholder="1 Adults" max="2">
                                    <input type="number" name="kids" id="kids" min="0" value="<?php //echo (isset($y))?$y:'';?>" placeholder="0 kids" max="1">
                                    <div id="num" style="padding: 10px 10px 10px 10px;">
                                    <?php 
                                        if(!isset($_POST['book'])){ 
                                        $date1 = $_POST["in"];
                                        $date2 = $_POST["out"];
                                        $diff= $date2 - $date1;
                                        $price =  $show['price']; 
                                        $subtotal = $diff * $price;
                                        $tax = $subtotal * 21 / 100;
                                        $total = $subtotal + $tax;
                                        echo "<p style='font-size:13px;'>Night(s) x " . $diff . "<span style='float:right'> $" . $subtotal . "</span>" . "</p>";
                                        echo "<p style='font-size:13px;'>Tax (21%)" . "<span style='float:right'> $" . $tax . "</span>" . "</p>";
                                        echo "<b style='font-size:13px;'>Total" . "<span style='float:right'>" . $total . "</span>" . "</b>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <input class="book" id="search" type="submit" name="submit" value="Book Now" style="margin-top: 0px !important;">				 		
                            </form>				 		
                        </div>
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

        
<?php include 'footer.php';?>
