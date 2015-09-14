<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>UPDATE FIRST NAME</title>
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
	<p><b> FIRST NAME: </p></b>
	
	<form method="post" action="/web/update/student/updatefirstname.php">

<input type="text" name="first_name">

</select>
	<p><input type="submit" value="UPDATE" /></p>

	</form>
</body>
</html>
