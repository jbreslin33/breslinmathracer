<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");

//start new session
session_start();

$_SESSION["item_types_id"] = $_GET["itemtypesid"];
$_SESSION["item_transaction_code"] = $_GET["transactioncode"];

$item_attempt = new ItemAttempt();
$item_attempt->update();
?>
