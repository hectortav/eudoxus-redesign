<?php
	session_start();

	// variable declaration

	$counter = 0;
	$email    = "";
	$password    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');

	$query = "SELECT subject_name FROM subject GROUP BY subject_name";
	$result = mysqli_query($db, $query);

	if ($result->num_rows > 0) {
    // output data of each row
		$counter = 0;
    while($row = $result->fetch_assoc()) {
			$key = $row["subject_name"];
	  	//echo $key ."<br>";
			$ar[] = $row["subject_name"];
			$counter++;
			//"SELECT ISBN FROM subject_book WHERE subject_name = $key" - "SELECT book_name FROM book WHERE ISBN = $key_1"
		}
	}
	else {
		echo "0 subjects";
	}
	$query = "";
	$result = "";
	for($counter = 0; $counter < sizeof($ar); $counter++)
	{
		echo $ar[$counter] ."<br>";
		$query = "SELECT book_name FROM book INNER JOIN subject_book ON subject_book.ISBN = book.ISBN WHERE subject_book.subject_name = '$ar[$counter]'";
		$result = mysqli_query($db, $query);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$key = $row["book_name"];
				echo "book: ". $key ."<br>";
			}
		}
		else {
			echo "0 books" ."<br>";
		}
	}
	$query = "SELECT subject_name, book_name FROM subject, book INNER JOIN subject_book ON subject_book.ISBN = book.ISBN WHERE subject_book.subject_name = subject.subject_name";
?>
