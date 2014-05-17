<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();

$_SESSION["subject_id"] = $_GET["subjectid"];
//echo $_SERVER['HTTP_HOST'];
echo $_SESSION["subject_id"];

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_for_login_form.php");
echo "<br>";

	//and set Login to NO
	$_SESSION["Login"] = "NO";

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
	<p><b> PLEASE LOGIN: </p></b>
	
	<form method="post" action="/web/login/login.php">

	<p>Username: <input type="text" name="username" /></p>
	<p>Password: <input type="text" name="password" /></p>

	<p><input type="submit" value="Log In" /></p>

	</form>
</body>
</html>
