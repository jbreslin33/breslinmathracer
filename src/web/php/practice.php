<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/practice.php");

//start new session
session_start();

//start new so pass 1 as first paremeter. pass the type id sent from client.
$practice = new Practice(1,0);
?>
