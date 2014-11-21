<?php
//fill php vars
$returnString = "112,";
$returnString .= $_SESSION["LOGGED_IN"];
$returnString .= ",";
$returnString .= $_SESSION["username"];
$returnString .= ",";
$returnString .= $_SESSION["first_name"];
$returnString .= ",";
$returnString .= $_SESSION["last_name"];
echo $returnString;
?>
