<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php"); 

$_SESSION["type_id"] = $_GET["typeid"]; 
$_SESSION["item_transaction_code"] = $_GET["transactioncode"];

insertLevelAttempt($conn,$_SESSION["user_id"]);
insertItemAttempt($conn,$_SESSION["user_id"]);

//fill php vars
$returnString = "101,"; 
$returnString .= $_SESSION["attempt_id"];
echo $returnString;

?>

