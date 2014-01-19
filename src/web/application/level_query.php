<?php
session_start();

//fill php vars 
$returnString .= "100,"; // 
$returnString .= $_SESSION["ref_id"];
$returnString .= ",";
$returnString .= $_SESSION["level"];
$returnString .= ",";
$returnString .= $_SESSION["levels"];
echo $returnString;
?>
