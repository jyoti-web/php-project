<?php include 'header.php';?>
<?php
$min = 100;
$max = 300;

if (! empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (! empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}

?>
<script>
  $(document).ready(function() {
    $("#slider-range").slider({
      range: true,
      min: 100,
      max: 5000,
      values: [ '<?php echo $min; ?>', '<?php echo $max; ?>' ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>
	<div class="apart">
		<div class="container" style="width: 850px;">
			<h3>Apartments & Suites</h3>
			<div class="margin-btm" style="height: 25px;"></div>
		</div>
		<div class="booking">	
		 	<div class="apart-form">
		 		<div class="container" style="width: 850px;">
		 			<div class="our-room">
				 		<h5>Our Rooms</h5>
				 	</div>
		 			<hr>
					<form style="display: flex;" action="#" method="post" onsubmit="return false;">
						<span>
							<input type="text" name="in" id="in" placeholder="Check-In" required>
						</span>
						<span>
							<input type="text" name="out" id="out" placeholder="Check-Out" required>
						</span>
						<span>
							<input type="number" name="adults" id="adults" min="1" value="1" placeholder=" 1 Adults">
						</span>
						<span>
							<input type="number" name="kids" id="kids" min="0" value="0" placeholder="0 kids">
						</span>
						<span>
							<button class="btn" id="search" type="submit" onClick="GFG_Fun()">Search</button>
						</span>
					</form>
					<hr>
					<div class="display-booking">
						<form id="data-show">
							<h6 style="font-size: 16px;"><span style="font-weight: 100;">Result For:</span> 
								<span class="in-out" id="result"> 
								</span>
								<input type="reset" name="reset" value="clear" id="hide" onClick="display()"
								class="text-right" style="border:none; background-color: transparent; 
								font-size: 16px; color: #D97B33;">
							</h6>						
							<hr>
						</form>
						<script> 
							function hide(divId){
								$("#" + divId).hide();
							}
							function display(){
								hide('data-show');
							}
					
							function show(divId) { 
								$("#" + divId).show(); 
							} 
					
							function GFG_Fun() { 
								show('data-show'); 
							} 
						</script> 
					</div>
					<div class="form-price-range-filter">
						<form method="post" action="">
							<div class="slider-min-max">
								<input type="" id="min" name="min_price"
									value="<?php echo $min; ?>" class="input-count">
								<div id="slider-range"></div>
								<input type="" id="max" name="max_price"
									value="<?php echo $max; ?>" class="input-count">
							</div>
							<div>
								<input type="submit" name="submit_range"
									value="Filter Product" class="filter">
							</div>
						</form>
					</div>
					<?php require_once("config.php");
						$limit = 5;  
						if (isset($_GET["page"])) {
							$page  = $_GET["page"]; 
							} 
							else{ 
							$page=1;
							};  
						$start_from = ($page-1) * $limit; 
						$result1 = mysqli_query($conn,"SELECT * FROM project_product WHERE price BETWEEN '$min' AND '$max' ORDER BY id ASC LIMIT $start_from, $limit " );
						if (mysqli_num_rows($result1) > 0) {
						$i=0;
						while($row = mysqli_fetch_array($result1)) {
						?>
						<hr>
						<div class="room-booking" >
						<a style='display: inline-flex; color:black; text-decoration:none;'
						 href="single-page.php?page=single-page&id=<?=$row['id']; ?>">

							<?php //echo $row["id"];?>
						    <?php echo '<img src=/php-project/img/'.$row["image"].' style="width:240px; height:170px; object-fit:cover;">'?>
						    <span style="padding: 0px 40px 0px 25px; width: 445px;">
						    	<h5 style="font-size:20px; font-weight: 700;"><?php echo $row["title"]; ?></h5>	    	
							    <sub><?php echo $row["description"];?></sub>
							    <hr>
							    <p><?php echo $row["facilites"];?></p>
							</span>
						    <span class="price-booking text-center" style="padding-left:10px; padding-top: 25px;">
								<sub>From</sub><br>
								<?php if (($row["sale_price"] != 0) && ($row["price"] != 0)) {
									echo "<del>" 
									. $row["price"] . "</del><br>" . " " . 
									"<price>" . $row["sale_price"] . "</price>";
								}
								else if (($row["sale_price"] == 0) && ($row["price"] != 0)){
									echo "<price> $" . $row["price"] . "</price>";
								}?>
								<button class="btn1" style="margin-top: 20px;">More Info</button>
						    </span>
						    <?php //echo '<img src=/php-project/img/'.$row["files"].' style="width:300px; height:100px; object-fit:contain;">'?>
						</a>
						</div>
						<hr>
						<?php
						$i++;
						}
						}
						?>
						<?php  

						$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM project_product"); 
						$row_db = mysqli_fetch_row($result_db);  
						$total_records = $row_db[0];  
						$total_pages = ceil($total_records / $limit); 
						/* echo  $total_pages; */
						$pagLink = "<ul class='pagination'>";  
						for ($i=1; $i<=$total_pages; $i++) {
							$pagLink .= "<li class='page-item'><a class='page-link' href='display-product.php?page=".$i."'>".$i."</a></li>";	
						}
						echo $pagLink . "</ul>";  
						?>
				</div>
			</div>
		</div>
	</div>
	<style>
		.slider-min-max{
			display:flex;
		}
		#slider-range.ui-slider{
			width:100%;
			margin:10px 14px;
			height:20px;
			border-radius: 30px;
    		border-color: #D97B34;
		}
		.ui-slider-horizontal .ui-slider-handle {
			top:22px !important;
			border-radius: 50% 50% 0;
			transform: rotateZ(226deg);
			border-color: #b15108;
			background-color:#D97B34;
		}
		.ui-widget-header{
			background-color:#D97B34;
			border-radius:30px;
		}
		.input-count{
			width: 40px!important;
    border-radius: 50%;
    text-align: center;
		}
		.filter{
			text-align:center;
			margin:auto;
			margin-top:30px !important;
			display:grid;
		}
		li{
			margin-left:0px !important;
		}
		</style>
<?php include 'footer.php';?>
