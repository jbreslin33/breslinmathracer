<?php

//db connection
function dbConnect()
{
	$conn = pg_connect("host=localhost dbname=jamesanthonybreslin user=postgres password=mibesfat")
	or die('Could not connect: ' . pg_last_error());
	return $conn;
}

?>
