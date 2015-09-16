<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>ADD TEAM</title>
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
	<p><b> ADD TEAM: </p></b>
	
	<form method="post" action="/web/add/school/addteam.php">

<input type="text" name="team_name">

</select>
	<p><input type="submit" value="UPDATE" /></p>

	</form>
</body>
</html>
