<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/school_login.php");
session_start();

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

$login = new SchoolLogin();

if ($_SESSION["LOGGED_IN"] == 1)
{
	header("LOCATION: /web/stats/leaderboards.php");
}
else
{
	header("LOCATION: /web/login/school_login.php");
}

?>
