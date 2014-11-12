<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/practice.php");

//start new session
session_start();

$practice = new Practice(0,0,1);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>

