<?php include 'header.php';?>
<body>
	<section>
		<div class="main">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  	<div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img class="d-block w-100" src="/php-project/img/1.jpg" alt="First slide">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="/php-project/img/3.jpg" alt="Second slide">
			    	</div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="/php-project/img/2.jpg" alt="Third slide">
				    </div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
			 	</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
			<div class="form container" style="width: 980px; height: 80px;">
				<form style="display: flex;" action="/php-project/display-product.php"> 
					<span>
						<label>Check In</label></br>
						<input type="text"  class="form-control" id="in" name="in" placeholder="Check-In" value="Check-In" required>
					</span>
					<span>
						<label>Check Out</label></br>
						<input type="text"  class="form-control" id="out" name="out" placeholder="Check-Out" value="Check-Out	" required>
					</span>
					<span>
						<label>Adults</label></br>
						<input type="number" name="adults" id="adults" min="1" value="1">
					</span>
					<span>
						<label>kids</label></br>
						<input type="number" name="kids" id="kids" min="0" value="0">
					</span>
					<span>
						<label>&nbsp;</label></br>
						<button class="btn" id="search" type="submit" style="background-color: white; height: 33px; border: none; border-radius: 0px;width: 185px;">Search</button>
					</span>
				</form>
			</div>
			<div class="text-overlay text-center">
				<div class="under-overlay">
					<h2>Loft City</h2>
					<h3>Feel at Home When You're Away</h3>
				</div>
			</div>
		</div>
	</section>
	<section id="services">
		<div class="container">
			<div class="services align-self-center text-center">
				<span>
					<img src="/php-project/img/11.png" alt="">
					<h6>Free WiFi</h6>
				</span>
				<span>
					<img src="/php-project/img/12.png" alt="">
					<h6>Fully Furnished</h6>
				</span>
				<span>
					<img src="/php-project/img/13.png" alt="">
					<h6>Free Parking</h6>
				</span>
				<span>
					<img src="/php-project/img/14.png" alt="">
					<h6>Airport Transfers</h6>
				</span>
				<span>
					<img src="/php-project/img/15.png" alt="">
					<h6>Cleaning Services</h6>
				</span>
			</div>
		</div>		
	</section>
	<section id="loft-city-hoilday">
		<div class="container" style="width: 850px;">
			<h3>Loft City - Urban Holiday Rentals in SF</h3>
			<h5>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. >></h5>
		</div>
	</section>
	<section class="map">
		<div class="container" style="width: 850px;">
			<div class="row">
				<div class="col-sm-6" id="list">
					<h4>Why book with us</h4>
					<ul>
						<li>500m to Union Square</li>
						<li>300m to Bart Station</li>
						<li>5 minutes walking to Muni</li>
						<li>Private parking in the same building</li>
						<li>Solarium and terrace on the roof</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<div id="googleMap" style="width:100%;height:270px;"></div>
						<script>
							function initMap() {
							  var myLatLng = { lat: 30.921076, lng: 75.855103 };

							  var map = new google.maps.Map(document.getElementById("googleMap"), {
							    zoom: 4,
							    center: myLatLng
							  });

							  var marker = new google.maps.Marker({
							    position: myLatLng,
							    map: map,
							    title: "Hello World!"
							  });
							}
						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm0tUMt_M12nlMsDjU5qs_VNgq3DsNAFk&callback=initMap"></script>
				</div>
			</div>
		</div>
	</section>
	<section id="people-say" style="background-color: #F6F6F6">
		<div class="container" style="width: 850px;">
			<div class="row">
				<div class="col-sm-6" id="list">
					<h4>People say the nicest things… </h4>
					<div class="margin-btm">
						<p class="description" style="font-style: italic;">
							“I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.”
						</p>
						<p class="author text-right">Adam Kant</p>
					</div>
					<div class="margin-btm">
						<p class="description" style="font-style: italic;">
							“I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”
						</p>
						<p>&nbsp;</p>
						<p class="author text-right">Kevin Walker</p>
					</div>
					<div class="margin-btm">
						<p class="description" style="font-style: italic;">
							“I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.”
						</p>
						<p class="author text-right">Tracy Fox</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="promotion" style="display:flex; background-color: white; padding: 65px 30px;">
						<div class="img-2">
							<img src="/php-project/img/23.jpg" href="">
							<img src="/php-project/img/22.jpg" href="">
						</div>
						<div class="img-2">
							<img src="/php-project/img/24.jpg" href="">
							<img src="/php-project/img/21.jpg" href="">
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
</body>
<?php include 'footer.php';?>
