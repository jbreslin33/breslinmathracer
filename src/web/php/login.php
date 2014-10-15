<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];

$login = new Login();

if ($_SESSION["LOGGED_IN"] == 1)
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
}
else
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_not_logged_in.php");
}

?>
