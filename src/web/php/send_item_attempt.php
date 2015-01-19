<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");

//start new session
session_start();

if(isset($_SESSION['item_types_id']) && !empty($_SESSION['item_types_id']))
{
	$_SESSION["item_types_id"] = $_GET["itemtypesid"];
	$_SESSION["item_transaction_code"] = $_GET["transactioncode"];

	$item_attempt = new ItemAttempt();
	$item_attempt->update();
}
else
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_timed_out.php");
}
?>
