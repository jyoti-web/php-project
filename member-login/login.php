
<?php include('../header.php');?>

<body>

	<div class="form-header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php" class="form-login">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
<?php include '../footer.php';?>
