<?php
//fill php vars
$returnString = "114,";
$returnString .= $_SESSION["LOGGED_IN"];
$returnString .= ",";
$returnString .= $_SESSION["username"];
$returnString .= ",";
$returnString .= $_SESSION["role"];
echo $returnString;
?>
