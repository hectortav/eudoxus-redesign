<?php
	session_start();

	function get_subjects($uni = '', $division = '', $semester = 0) //stelnw panepisthmio,sxolh kai eksamhno
	{
		$errors = array();
		$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
		if ($uni == '')
		{
			$query = "SELECT subject_name FROM subject GROUP BY subject_name";
		}
		else if ($division == '')
		{
			if ($semester == 0)
			{
				$query = "SELECT subject_name FROM subject WHERE subject_uni = '$uni' GROUP BY subject_name";
			}
			else
			{
				$query = "SELECT subject_name FROM subject WHERE subject_uni = '$uni' AND subject_semester = $semester GROUP BY subject_name";
			}
		}
		else if ($semester == 0)
		{
			$query = "SELECT subject_name FROM subject WHERE subject_uni = '$uni' AND subject_division = '$division' GROUP BY subject_name";
		}
		else
		{
			$query = "SELECT subject_name FROM subject WHERE subject_uni = '$uni' AND subject_division = '$division' AND subject_semester = $semester GROUP BY subject_name";
		}
		$result = mysqli_query($db, $query);

		if ($result->num_rows > 0) {
	    // output data of each row
			$counter = 0;
	    while($row = $result->fetch_assoc()) {
				$key = $row["subject_name"];
		  	//echo $key ."<br>";
				$ar[] = $row["subject_name"];
				//"SELECT ISBN FROM subject_book WHERE subject_name = $key" - "SELECT book_name FROM book WHERE ISBN = $key_1"
			}
			//mysql_close($db);
			return $ar;
		}
		else {
			//mysql_close($db);
			echo "0 Μαθήματα";
		}
	}

	function get_books($ar = 0, $order = 0) //stelnw pinaka me mathhmata, sort by 0 = alfavhtika, 1 = megalutero popularity, 2 = mikrotero popularity
	{
		if ($ar == 0)
		{
			echo "0 Βιβλία" ."<br>";
		}
		else
		{
			$counter = 0;
			$errors = array();
			$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
			$query = "";
			$result = "";
			for($counter = 0; $counter < sizeof($ar); $counter++)
			{
				echo $ar[$counter] ."<br>";
				if ($order == 1)
				{
					$query = "SELECT book_name FROM book INNER JOIN subject_book ON subject_book.ISBN = book.ISBN WHERE subject_book.subject_name = '$ar[$counter]' GROUP BY book.popularity DESC";
				}
				else if ($order == 2)
				{
					$query = "SELECT book_name FROM book INNER JOIN subject_book ON subject_book.ISBN = book.ISBN WHERE subject_book.subject_name = '$ar[$counter]' GROUP BY book.popularity ASC";
				}
				else
				{
					$query = "SELECT book_name FROM book INNER JOIN subject_book ON subject_book.ISBN = book.ISBN WHERE subject_book.subject_name = '$ar[$counter]' GROUP BY book_name";
				}
				$result = mysqli_query($db, $query);
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$arb[] = $row["book_name"];
						//echo "book: ". $key ."<br>";
					}
					return $arb;
					//mysql_close($db);
				}
				else {
					//mysql_close($db);
					echo "0 books" ."<br>";
				}
			}
		}
	}

	function get_ISBN($name = '')
	{
		$errors = array();
		$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
		$query = "";
		$result = "";

		$query = "SELECT ISBN FROM book WHERE book_name = '$name'";
		$result = mysqli_query($db, $query);
		$row = $result->fetch_assoc();
		return $row["ISBN"];

	}

	function get_subject($name = '')
	{
		$errors = array();
		$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
		$query = "";
		$result = "";
		$sub =  get_ISBN($name);
		$query = "SELECT subject_name FROM subject_book WHERE ISBN = '$sub'";
		$result = mysqli_query($db, $query);
		$row = $result->fetch_assoc();
		return $row["subject_name"];

	}

	function addTo_cart($bookISBN = 0, $subject = '')
	{
		$string = "";
		if ($bookISBN == 0 || $subject == '')
		{
			$string = "give bookISBN, subject <br>";
			return $string;
		}
		$errors = array();
		$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
		$query = "";
		$result = "";

		$query = "SELECT id FROM cart WHERE ISBN = '$bookISBN' OR subject_name = '$subject'";
		$result = mysqli_query($db, $query);
		if($result->num_rows == 0)
		{
		    $query = "INSERT INTO cart(ISBN, subject_name) VALUES('$bookISBN', '$subject')";
				if ($db->query($query) === TRUE) {
				    $string = 'Προστέθηκε στο καλάθι <br>';
				} else {
				    $string = "Error: " . $query . "<br>" . $db->error;
				}

		}
		else
		{
		    $string = "Δεν μπορείτε να πραγματοποιήσετε αυτή την ενέργεια για έναν από τους παρακάτω λόγους: "."<br>".
				"-Είτε έχετε παραλάβει βιβλίο για αυτό το μάθημα."."<br>".
				"-Είτε υπάρχει βιβλίο για το μάθημα ήδη στο καλάθι σας."."<br>";
		}
		return $string;

	}

	function removeFrom_cart($bookISBN = 0, $subject = '')
	{
		$string = "";
		if ($bookISBN == 0 || $subject == '')
		{
			$string = "give bookISBN, subject <br>";
			return $string;
		}
		$errors = array();
		$db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
		$query = "";
		$result = "";

		$query = "DELETE FROM cart WHERE ISBN = '$bookISBN' AND subject_name = '$subject'";
		if ($db->query($query) === TRUE) {
			$string = 'Αφαιρέθηκε στο καλάθι <br>';
		}
		else
		{
			//echo "Error deleting record: " . $db->error;
			$string = 'Έχει ήδη αφαιρεθεί από το καλάθι σας';
		}

		return $string;

	}
?>
