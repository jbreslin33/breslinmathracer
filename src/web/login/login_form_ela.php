<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>Login elacore.org</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>

<?php
session_start();

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
	
	<form method="post" action="/web/login/login.php?subjectid=2">

	<p>Username: <input type="text" name="username" /></p>
	<p>Password: <input type="text" name="password" /></p>

	<p><input type="submit" value="Log In" /></p>

	</form>
<br>
<br>
<br>
<br>
<br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KNFRHXLYQYV3U">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>
