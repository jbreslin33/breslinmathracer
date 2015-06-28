<?php
//fill php vars
$returnString = "117,";
$returnString .= $_SESSION["ref_id"];
$returnString .= ",";
$returnString .= $_SESSION["LOGGED_IN"];
$returnString .= ",";
$returnString .= $_SESSION["username"];
$returnString .= ",";
$returnString .= $_SESSION["first_name"];
$returnString .= ",";
$returnString .= $_SESSION["last_name"];
$returnString .= ",";
$returnString .= $_SESSION["raw_data"];
$returnString .= ",";
$returnString .= $_SESSION["role"];
echo $returnString;
?>
