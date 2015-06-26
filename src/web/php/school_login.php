<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/school_login.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];

$login = new SchoolLogin();

if ($_SESSION["LOGGED_IN"] == 1)
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string_school.php");
}
else
{
	if ($login->mBadUsername == 1)
	{
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_username.php");
	}	
	if ($login->mBadPassword == 1)
	{
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_password.php");
	}	
}

?>
