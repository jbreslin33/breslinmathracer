<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/rewind.php");

//start new session
session_start();

$rewind = new Rewind();

//fill php vars
$returnString = "103,"; 
$returnString .= $_SESSION["ref_id"];
$returnString .= ",";
$returnString .= $_SESSION["level"];
$returnString .= ",";
$returnString .= $_SESSION["standard"];
$returnString .= ",";
$returnString .= $_SESSION["progression"];
$returnString .= ",";
$returnString .= $_SESSION["levels"];
echo $returnString;

?>
