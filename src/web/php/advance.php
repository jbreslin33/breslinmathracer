<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/advance.php");

//start new session
session_start();

$advance = new Advance();

//fill php vars

$returnString = "";

if ($_SESSION["ref_id"] == 'evaluation')
{
	$returnString = "104,";
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
	$returnString .= $_SESSION["item_type_id_raw_data"];
}
else
{	
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
}
echo $returnString;

?>
