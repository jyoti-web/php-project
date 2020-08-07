<?php include 'header.php';?>
<?php require_once("config.php");?>
<div class="apart">
    <div class="container" style="width: 850px;">
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
                    <h5>
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
                        style="height:370px; width:auto; object-fit:cover;">
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
                    <div class="apart-center" style="width: 2%;"></div>
                    <div class="apart-right" style="width:28%;">
                        <div class="border-all" style="border: 1px solid #F2CFB5; padding: 18px; position: sticky; top: 20px;">
                            <span style="border-left: 1px solid #F2CFB5; padding-left: 13px; height: 75px;display: grid; margin:5px 0px 25px 0px; color: #000 !important; ">
                                <sub style="    bottom: -.25em !important;">From</sub>
                                <price style="margin-bottom: 0px; color: #000 !important; font-size: 30px;" id="price">$<?php echo $show['price'] ?></price>
                                <sub style="    bottom: -.25em !important;">Per Night</sub>
                            </span>
                            <form action="book-room.php" method="post">
                                <div class="data-result" style="border: 1px solid #D97B34; border-bottom: 0px !important; padding-bottom:5px;">
                                    <input type="text"  class="form-control" id="in" name="ch_in" placeholder="Check-In" required >
                                    <input type="text" class="form-control" id="out" name="check_out" placeholder="Check-Out" required>
                                    <input type="number" name="check_adults" id="adults" min="1"  placeholder="1 Adults" max="2">
                                    <input type="number" style="margin-bottom:5px;" name="check_kids" id="kids"  placeholder="0 kids" max="1" min="0">
                                    <button onClick="myFunction();">try it</button>
                                    <div id="num" style="padding: 10px 10px 10px 10px; font-size:14px;">
                                    </div>
                                    <?php $sql = "SELECT ch_in FROM booking";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            //echo $row['ch_in'];
                                       ?>
                                    <script>
                                        $(document).ready(function() {
                                        var startDate;
                                        var endDate;
                                        //var undate = ["<?php echo $row['ch_in']; ?>"];
                                        var unavailableDates =  ["9-8-2020", "14-8-2020", "15-8-2020"];                                     
                                        function unavailable(date) {
                                            dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                                            if ($.inArray(dmy, unavailableDates) == -1) {
                                                return [true, ""];
                                            } else {
                                                return [false, "", "Unavailable"];
                                            }
                                        }
                                        $( "#in" ).datepicker({
                                        dateFormat: 'dd-mm-yy',
                                        minDate: new Date(),
                                        beforeShowDay: unavailable
                                        })
                                        $( "#out" ).datepicker({
                                        dateFormat: 'dd-mm-yy'    
                                        });
                                        $('#in').change(function() {
                                        startDate = $(this).datepicker('getDate');
                                        $("#out").datepicker("option", "minDate", startDate);
                                        })
                                        $('#out').change(function() {
                                        endDate = $(this).datepicker('getDate') ;
                                        $("#in").datepicker("option", "maxDate", endDate);
                                        var t1=$('#in').val();
                                        t1=t1.split('-');
                                        dt_t1=new Date(t1[2],t1[1]-1,t1[0]); 
                                        dt_t1_tm=dt_t1.getTime(); 
                                        var t2=$('#out').val();
                                        t2=t2.split('-');
                                        dt_t2=new Date(t2[2],t2[1]-1,t2[0]); 
                                        dt_t2_tm=dt_t2.getTime(); 
                                        var one_day = 24*60*60*1000; 
                                        var diff_days=Math.abs((dt_t2_tm-dt_t1_tm)/one_day);
                                        var pay = "<?php echo $show['price'];?>";
                                        var price = pay;
                                        var sub = price * diff_days;
                                        var tax = sub * 21 / 100; 
                                        var total = sub + tax;
                                        $("#num").html("Night(s) " + " x " + diff_days + "<span style='float:right;'> $" + sub + "</span>" + 
                                        "<br />" + "Tax(21%) " + "<span style='float:right;'> $" + tax + "</span>" + "<br />" + "Total " + "<span style='float:right;'> $" + total + "</span>");
                                        $("#nym").show();
                                        });
                                        });
                                        </script>
                                         <?php
                                 }
                                } else {
                                echo "0 results";
                                }?>
                                        <a class="book" onClick= "return bill()" id="search" style="padding-left:60px!important;
                                padding-right:61px !important;">Book Now</a>
                                </div>
                                			 		
                                <script>  
                                    function show(divId) { 
                                        $("#" + divId).show(); 
                                    } 
                                    function bill() { 
                                        show('num'); 
                                    } 
                                </script>
                               
                                <input type="submit" name="booking" value= "Confirm Booking">
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
<script>
function myFunction() {
var indate = document.getElementById('adults').value;
  if (indate == 2) {
    document.getElementById("kids").max = "0";
    //aler(document.getElementById("kids").max = "0");
  }else if (indate == 1){
    document.getElementById("kids").max = "1";

  }
}
</script>
        
<?php include 'footer.php';?>
