<?php

include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/advance.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/evaluation.php");

//start new session
session_start();

$advance = new Advance();

//fill php vars
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
//$returnString .= ",";
//$returnString .= $_SESSION["item_type_id_raw_data"];
echo $returnString;

?>

