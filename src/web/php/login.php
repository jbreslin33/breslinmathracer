<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];

$login = new Login();

if ($_SESSION["LOGGED_IN"] == 1)
{
	if ($_SESSION["role"] == 1)
	{
		error_log('role 1');
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
	}
	if ($_SESSION["role"] == 2)
	{
		error_log('role 2');
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string_teacher.php");
	}
	if ($_SESSION["role"] == 3)
	{
		error_log('role 3');
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string_school.php");
	}
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
