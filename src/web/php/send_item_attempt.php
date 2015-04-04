<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");

//start new session
session_start();

if(isset($_SESSION['item_types_id']) && !empty($_SESSION['item_types_id']))
{
	$_SESSION["item_types_id"] = $_GET["itemtypesid"];
	$_SESSION["item_transaction_code"] = $_GET["transactioncode"];
	$_SESSION["item_question"] = $_GET["question"];
	$_SESSION["item_answers"] = $_GET["answers"];
	$_SESSION["item_answer"] = $_GET["answer"];
	$_SESSION["item_attempt_id_update"] = $_GET["itemattemptid"];

	$item_attempt = new ItemAttempt();
	$item_attempt->update();
}
else
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_timed_out.php");
}
?>
