<?php

include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/advance.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/evaluation.php");

//start new session
session_start();

$advance = new Advance();

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
