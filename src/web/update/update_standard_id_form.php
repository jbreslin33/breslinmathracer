<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>UPDATE STANDARD</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_user.php");
echo "<br>";

      	$mess = $_GET["message"];
	
	if ($mess == "no_user")
	{
		echo "No user try again.";
	}
	if ($mess == "user")
	{
		echo "we have a user.";
	}
?>
	<p><b> Enter Standard ID: </p></b>
	
	<form method="post" action="/web/update/updatestandardid.php">

	<p>STANDARD ID: <input type="text" name="standardid" /></p>

	<p><input type="submit" value="UPDATE" /></p>

	</form>
</body>
</html>
