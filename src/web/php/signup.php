<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/signup.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];
$_SESSION["first_name"] = $_GET["first_name"];
$_SESSION["last_name"]  = $_GET["last_name"];
$_SESSION["core_standards_id"]  = $_GET["core_standards_id"];

$signup = new SignUp();
include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>
