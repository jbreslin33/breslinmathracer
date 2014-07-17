<?php

//start new session
session_start();

//check if still LOGGED_IN on server
if ( isset($_SESSION["LOGGED_IN"]) )
{
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
	echo $returnString;
}
else
{
	$returnString = "102,1";
	echo $returnString;
}
?>
