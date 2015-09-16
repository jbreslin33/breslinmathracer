<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>ADD MATCH</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

echo "<br>";
?>
	<p><b> ADD MATCH: </p></b>
	
	<form method="post" action="/web/add/school/addmatch.php">

<p><b> Start time: </p></b>
<input type="text" name="start_time">
<p><b> End time: </p></b>
<input type="text" name="end_time">

</select>
	<p><input type="submit" value="UPDATE" /></p>

	</form>
</body>
</html>
