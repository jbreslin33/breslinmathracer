<?php
session_start();

//fill php vars 
$returnString .= "100,"; // 
$returnString .= ",";
$returnString .= $_SESSION["last_level_id"];
$returnString .= ",";
$returnString .= $_SESSION["next_level_id"];
echo $returnString;
?>
