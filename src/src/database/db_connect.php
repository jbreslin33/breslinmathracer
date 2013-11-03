<?php

//db connection
function dbConnect()
{
	$conn = pg_connect("host=localhost dbname=abcandyou user=postgres password=mibesfat")
	or die('Could not connect: ' . pg_last_error());
	return $conn;
}

function dbErrorCheck($connection,$resultToCheck)
{

if (!$resultToCheck) {
  echo "An error occured.\n";
  $err = pg_last_error($connection);
  $error_username = $_SESSION["username"];
  $query = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$err','$error_username');";
  $result = pg_query($connection,$query);
  exit;
}


}


?>
