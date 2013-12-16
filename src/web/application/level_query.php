<?php
session_start();

//fill php vars 
$returnString .= "100,"; // 
$returnString .= ",";
$returnString .= $_SESSION["RefID"];
$returnString .= ",";
$returnString .= $_SESSION["level"];
echo $returnString;
?>
