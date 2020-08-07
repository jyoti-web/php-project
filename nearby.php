<?php include 'header.php';?>
<body>
	<div class="nearby-me">
		<div class="nearby">
			<div class="container" style="width: 850px;">
				<h3>Nearby Attractions</h3>
			</div>
		</div>
		<section class="map" style="background-color: #F6F6F6; height: 350px;">
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6" id="list">
						<h5>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</h5>		
					</div>
					<div class="col-sm-6">
						<div id="googleMap" style="width:100%;height:350px;"></div>
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
		<section class="mission" style="height: 350px;">
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6">
						<img src="/php-project/img/51.jpg" width="450px" height="350px;" style="object-fit: cover;">
					</div>
					<div class="col-sm-6" id="list">
						<h3 style="margin-bottom: 20px;">Mission Dolores Park</h3>
						<p style="font-size: 14px; color: #000;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.</p><br>
						<p style="font-size: 14px; color: #000;">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="castro" style="background-color: #F6F6F6; height: 350px;" >
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6" id="list">
						<h3 style="margin-bottom: 20px;">The Castro</h3>
						<p style="font-size: 14px; color: #000;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p>
					</div>
					<div class="col-sm-6">
						<img src="/php-project/img/52.jpg" width="450px" height="350px;" style="object-fit: cover;">
					</div>					
				</div>
			</div>
		</section>
		<section class="mission" style="height: 390px;">
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6">
						<img src="/php-project/img/53.jpg" width="450px" height="390px;" style="object-fit: cover;">
					</div>
					<div class="col-sm-6" id="list">
						<h3 style="margin-bottom: 20px;">Haight & Ashbury</h3>
						<p style="font-size: 14px; color: #000;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
						<p style="font-size: 14px; color: #000;">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="castro" style="background-color: #F6F6F6; height: 350px;" >
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6" id="list">
						<h3 style="margin-bottom: 20px;">Golden Gate Bridge</h3>
						<p style="font-size: 14px; color: #000;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.</p>
						<p style="font-size:14px; color: #000;">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.</p>
					</div>
					<div class="col-sm-6">
						<img src="/php-project/img/54.jpg" width="450px" height="350px;" style="object-fit: cover;">
					</div>					
				</div>
			</div>
		</section>
		<section class="mission" style="height: 390px;">
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6">
						<img src="/php-project/img/55.jpg" width="450px" height="390px;" style="object-fit: cover;">
					</div>
					<div class="col-sm-6" id="list">
						<h3 style="margin-bottom: 20px;">Chinatown</h3>
						<p style="font-size: 14px; color: #000;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
<?php include 'footer.php';?>
