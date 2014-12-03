<?php

session_start();

$_SESSION["LOGGED_IN"] = NULL;

//fill php vars
$returnString = "102,1";
echo $returnString;

header("Location: /index.html");

?>
