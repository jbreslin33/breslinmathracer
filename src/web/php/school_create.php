<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/school_create.php");

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["name"] = $_POST["name"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["state"] = $_POST["state"];
$_SESSION["zip"] = $_POST["zip"];

$create = new SchoolCreate();

if ($_SESSION["LOGGED_IN"] == 1)
{
	header("LOCATION: /web/stats/leaderboard.php");
}
else
{
	header("LOCATION: /web/login/school_login.php");
}

?>
