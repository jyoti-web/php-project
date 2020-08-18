<?php include 'header.php' ?>
<body>
	<div class="nearby-me">
		<div class="nearby">
			<div class="container" style="width: 850px;">
				<h3>Contact Details</h3>
			</div>
		</div>
		<section class="map" style="background-color: #F6F6F6; height: 350px;">
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6" id="list">
						<h5>If you have any questions, please contact us by telephone or email and we'll get back to you as soon as possible. We look forward to hearing from you.</h5>		
					</div>
					<div class="col-sm-6">
						<img src="/php-project/img/56.jpg" width="450px" height="350px;" style="object-fit: cover;">
					</div>
				</div>
			</div>
		</section>
		<Section class="contact-form">
			<div class="container" style="width: 850px;">
				<div class="row">
					<div class="col-sm-6">
						<form style="display: grid; padding: 0px 18px;" class="con-form" method="post" action="contact-response.php">
							<input type="text" name="con_name" placeholder="Name" id="con_name" required>
							<input type="email" name="con_email" placeholder="Email" id="con_email" required>
							<input type="tel" name="con_phone" placeholder="Phone" id="con_phone">
							<textarea cols="20" rows="6" name="con_area" id="con-area" placeholder="Type your message here..."></textarea>
							<input type="submit" name="con-submit" id="con-submit">
						</form>
					</div>
					<div class="col-sm-6">
						<h5 style="margin-bottom: 15px;">Loft City</h5>
						<p>500 Terry Francois Street<br>
							San Francisco, CA  94158</p>
						<div style="margin-bottom: 15px;"></div>
						<p>Tel: 123-456-7890<br>
							Fax: 123-456-7890</p>
						<div style="margin-bottom: 15px;"></div>

						<p><a href="mailto:infosite@gmail.com" data-type="mail" style="color: #000">infosite@gmail.com</a></p>
					</div>
				</div>
			</div>
		</Section>
	</div>
</body>
<?php include 'footer.php' ?>