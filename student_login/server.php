<?php
	session_start();

	// variable declaration
	$email    = "";
	$password    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO student (student_email, student_password)
					  VALUES('$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['success'] = "You are now logged in";
			header('location: ../index.html');
		}

	}

	// ...

	// LOGIN USER
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			//$password = md5($password);
			$query = "SELECT * FROM student WHERE student_email='$email' AND student_password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../index.html');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}

?>
