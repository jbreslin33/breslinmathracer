<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];

$login = new Login();

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
$returnString .= ",";
$returnString .= $_SESSION["raw_data"];
echo $returnString;

?>
