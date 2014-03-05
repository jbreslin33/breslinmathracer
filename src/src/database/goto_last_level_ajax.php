<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");

insertLevelAttempt($conn,$_SESSION["user_id"]);
//setLevelSessionVariables($conn,$_SESSION["user_id"]);

//fill php vars
$returnString = "101,";
$returnString .= $_SESSION["attempt_id"];
echo $returnString;

?>

