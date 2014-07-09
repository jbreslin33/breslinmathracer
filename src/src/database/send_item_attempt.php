<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php"); 

$_SESSION["item_type_id"] = $_GET["itemtypeid"];
$_SESSION["item_transaction_code"] = $_GET["transactioncode"];

insertItemAttempt($conn,$_SESSION["user_id"]);

//fill php vars
$returnString = "101,"; 
$returnString .= $_SESSION["level_attempt_id"];
echo $returnString;

?>

