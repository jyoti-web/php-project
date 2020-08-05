<?php include 'header.php';?>
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
					<form style="display: flex;" action="#" method="post" onsubmit="return false;">
						<span>
							<input type="text" name="in" id="in" placeholder="Check-In" required >
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
							<button class="btn" id="search" type="submit">Search</button>
						</span>
					</form>
					<hr>
					<div class="display-booking">
						<form class="data-show">
							<h6 style="font-size: 16px;"><span style="font-weight: 100;">Result For:</span> 
								<span class="in-out" id="result"> 
								</span>
								<input type="reset" name="reset" value="clear" id="hide" class="text-right" style="border:none; background-color: transparent; font-size: 16px; color: #D97B33;">
							</h6>						
							<hr>
						</form>
						<script type="text/javascript">
							$("#hide").click(function(){
							  $(".data-show").hide();
							});
							$("#search").click(function(){
							  $(".data-show").show();
							});
						</script>	
					</div>
						<?php require_once("config.php");
						$result1 = mysqli_query($conn,"SELECT * FROM project_product");
						if (mysqli_num_rows($result1) > 0) {
						$i=0;
						while($row = mysqli_fetch_array($result1)) {
						?>
						<div class="room-booking" >
						<a style='display: inline-flex; color:black; text-decoration:none;'
						 href="single-page.php?page=single-page&id=<?=$row['id']; ?>">

							<?php //echo $row["id"];?>
						    <?php echo '<img src=/php-project/img/'.$row["image"].' style="width:240px; height:170px;">'?>
						    <span style="padding: 0px 40px 0px 25px; width: 445px;">
						    	<h5 style="font-size:20px; font-weight: 700;"><?php echo $row["title"]; ?></h5>	    	
							    <sub><?php echo $row["description"];?></sub>
							    <hr>
							    <p><?php echo $row["facilites"];?></p>
							</span>
						    <span class="price-booking text-center" style="padding-left:10px; padding-top: 25px;">
								<sub>From</sub><br>
								<price>$<?php echo $row["price"]; ?></price><br>
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
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>
