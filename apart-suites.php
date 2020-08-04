<?php include 'header.php';?>
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
					<form style="display: flex;" action="apart-suites.php" method="post" onsubmit="return false;">
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
								<span class="in-out" id="result"><?php 
									// $mydate=date_create($_POST["in"]);
									// echo date_format($mydate,"m/d/y") . " - ";
								 //   	$mydate1=date_create($_POST["out"]);
									// echo date_format($mydate1,"m/d/y") . " | ";
									// $date1=date_create($_POST["in"]);
									// $date2=date_create($_POST["out"]);
									// $diff=date_diff($date1,$date2);
									// echo $diff->format("%a night(s)");
								?>	
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
					<div class="room-booking" style="display: inline-flex;">
						<a href="/php-project/apart-product.php"><img src="/php-project/img/43.jpg"></a>
						<span style="padding: 0px 40px 0px 25px; width: 445px;">
							<h6>Junior Suite</h6>
							<sub>Our Junior Suites offer breathtaking views of the city skyline.</sub>
							<ul>
								<li><sub>Size: 260 sq ft</sub></li>
								<li><sub>Beds: 2 Double(s)</sub></li>
							</ul>
							<hr>
							<span>
								<i class='far fa-snowflake'></i>
								<i class="fa fa-wifi" aria-hidden="true"></i>
								<i class="fa fa-television" aria-hidden="true"></i>
								<i class="fa fa-window-maximize" aria-hidden="true"></i>
								<i class="fa fa-glass" aria-hidden="true"></i>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<i class='fas fa-utensils'></i>
								<i class="fa fa-suitcase" aria-hidden="true"></i>

								
							</span>
						</span>
						<span class="price-booking text-center" style="padding-left:10px; padding-top: 25px;">
							<sub>From</sub><br>
							<price>$250</price><br>
							<a href="/php-project/apart-product.php"><button class="btn1" style="margin-top: 20px;">More Info</button></a>
						</span>
					</div>
					<hr>
					<div class="room-booking" style="display: inline-flex;">
						<img src="/php-project/img/41.jpg">
						<span style="padding: 0px 40px 0px 25px; width: 445px;">
							<h6>Standard Room</h6>
							<sub>Our Standard Rooms are the perfect combination of function and comfort.</sub>
							<ul>
								<li><sub>Size: 230 sq ft</sub></li>
								<li><sub>Beds: 1 Double(s)</sub></li>
							</ul>
							<hr>
							<span>
								<i class='far fa-snowflake'></i>
								<i class="fa fa-wifi" aria-hidden="true"></i>
								<i class="fa fa-television" aria-hidden="true"></i>
								<i class="fa fa-window-maximize" aria-hidden="true"></i>
								<i class="fa fa-glass" aria-hidden="true"></i>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<i class='fas fa-utensils'></i>
							</span>
						</span>
						<span class="price-booking text-center" style="padding-left:10px; padding-top: 25px;">
							<sub>From</sub><br>
							<price>$150</price><br>
							<button class="btn1" style="margin-top: 20px;">More Info</button>
						</span>
					</div>
					<hr>
					<div class="room-booking" style="display: inline-flex;">
						<img src="/php-project/img/42.jpg">
						<span style="padding: 0px 40px 0px 25px; width: 445px;">
							<h6>Superior Room</h6>
							<sub>Our Superior Rooms are comfortable, roomy and elegant.</sub>
							<ul>
								<li><sub>Size: 280 sq ft</sub></li>
								<li><sub> Beds: 1 King(s)</sub></li>
							</ul>
							<hr>
							<span>
								<i class='far fa-snowflake'></i>
								<i class="fa fa-wifi" aria-hidden="true"></i>
								<i class="fa fa-television" aria-hidden="true"></i>
								<i class="fa fa-window-maximize" aria-hidden="true"></i>
								<i class="fa fa-glass" aria-hidden="true"></i>
								<i class='fas fa-shower'></i>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<i class='fas fa-bath'></i>
								<i class='fas fa-utensils'></i>
								<i class='fas fa-door-closed'></i>
							</span>
						</span>
						<span class="price-booking text-center" style="padding-left:10px; padding-top: 25px;">
							<sub>From</sub><br>
							<price>$350</price><br>
							<button class="btn1" style="margin-top: 20px;">More Info</button>
						</span>
					</div>
					<hr>
				</div>
		 	</div>
		</div>
	</div>
</body>
<?php include 'footer.php';?>