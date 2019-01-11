<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Σύνδεση</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="logo">
		<p style="text-align:center;"><img src="../images/logo.png" alt="logo"></p>
	</div>
	<div class="header">
		<h2>Σύνδεση</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Διεύθυνση Email</label>
			<input type="text" name="email" >
		</div>
		<div class="input-group">
			<label>Κωδικού</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Σύνδεση</button>
		</div>
		<p>
			Δεν έχετε λογαριασμό; <a href="register.php">Εγγραφή</a>
		</p>
	</form>


</body>
</html>
