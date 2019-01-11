<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Εγγραφή</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<div class="logo">
		<p style="text-align:center;"><img src="../images/logo.png" alt="logo"></p>
	</div>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Διεύθυνση Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Κωδικού</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Επαλήθευση Κωδικού</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Εγγραφή</button>
		</div>
		<p>
			Έχετε ήδη λογαριασμό; <a href="login.php">Σύνδεση</a>
		</p>
	</form>
</body>
</html>
