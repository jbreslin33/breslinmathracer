<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/signup.php");

//start new session
session_start();

$_SESSION["username"] = $_GET["username"];
$_SESSION["password"] = $_GET["password"];
$_SESSION["first_name"] = $_GET["first_name"];
$_SESSION["last_name"] = $_GET["last_name"];

//$level_attempt = new LevelAttempt();
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
$returnString .= $_SESSION["LOGIN"];
echo $returnString;

?>
