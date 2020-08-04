<?php include 'header.php';?>
<?php session_start(); ?>
<div class="thankyou">
	<div class="container" >
		<div class="cards" style="background-color: #1aa0938a; margin: 50px 0px; padding: 40px;">
			<?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
			<div class="success-message" style="text-align: center;font-size: 35px;color: white;"><?php echo $_SESSION['success_message']; ?>
				
			</div>
			<?php
			unset($_SESSION['success_message']);
			}
			?>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
