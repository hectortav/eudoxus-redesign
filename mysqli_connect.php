<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'pa55word');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mydb');

$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL' .
      mysqli_connect_error());


 ?>
