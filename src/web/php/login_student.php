<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login_student.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];

$loginStudent = new LoginStudent();

if ($_SESSION["LOGGED_IN"] == 1)
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_login_student.php");
}
else
{
	if ($loginStudent->mBadUsername == 1)
	{
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_username.php");
	}	
	if ($loginStudent->mBadPassword == 1)
	{
		include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_password.php");
	}	
}

?>
