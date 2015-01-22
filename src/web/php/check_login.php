<?php

//start new session
session_start();

//check if still LOGGED_IN on server
if ( isset($_SESSION["LOGGED_IN"]) )
{
	include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
}
else
{
	$returnString = "102,1";
	echo $returnString;
}
?>
