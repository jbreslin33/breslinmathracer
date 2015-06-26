<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");

//start new session
session_start();

//start new so pass 1 as first paremeter.
if (isset($_SESSION["user_id"]))
{
	$normal = new Normal(0);
	$userid = $_SESSION["user_id"];	
}
else
{

}

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_string_normal.php");
?>
