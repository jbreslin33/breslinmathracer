<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/practice.php");

//start new session
session_start();

$typeid = $_GET["typeid"];

//start new so pass 1 as first paremeter. pass the type id sent from client.
$practice = new Practice($typeid,1,0);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>

