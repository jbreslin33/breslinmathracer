<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];
$_SESSION["role"]       = $_GET["role"]; //1 student, 2 teacher, 3 school, 4 admin 

$login = new Login();

if ($_SESSION["LOGGED_IN"] == 1)
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
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
