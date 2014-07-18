<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/signup.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];
$_SESSION["first_name"] = $_GET["first_name"];
$_SESSION["last_name"]  = $_GET["last_name"];

$signup = new SignUp();

//fill php vars
$returnString = "101,";
$returnString .= $_SESSION["ref_id"];
$returnString .= ",";
$returnString .= $_SESSION["level"];
$returnString .= ",";
$returnString .= $_SESSION["standard"];
$returnString .= ",";
$returnString .= $_SESSION["progression"];
$returnString .= ",";
$returnString .= $_SESSION["levels"];
$returnString .= ",";
$returnString .= $_SESSION["LOGGED_IN"];
$returnString .= ",";
$returnString .= $_SESSION["username"];
$returnString .= ",";
$returnString .= $_SESSION["first_name"];
$returnString .= ",";
$returnString .= $_SESSION["last_name"];
echo $returnString;

?>
