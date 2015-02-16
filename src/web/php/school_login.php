<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/school_login.php");

//start new session
//session_start();

error_log("hhhala");
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

$login = new SchoolLogin();

if ($_SESSION["LOGGED_IN"] == 1)
{
	header("LOCATION: /web/stats/leaderboard.php");
}
else
{
	//header("LOCATION: /web/php/school_login.php");
	header("LOCATION: /web/stats/leaderboard_33.php");
/*
	if ($login->mBadUsername == 1)
	{
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_username.php");
	}	
	if ($login->mBadPassword == 1)
	{
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_password.php");
	}	
*/
}

?>
