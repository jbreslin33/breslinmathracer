<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");

//start new session
session_start();

//start new so pass 1 as first paremeter.
if (isset($_SESSION["user_id"]))
{
	$normal = new Normal(0);
	$userid = $_SESSION["user_id"];	
	//error_log("calling normal with user id: $userid");
}
else
{
	//error_log('no user id!!!!!! not calling normal');
}

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>
