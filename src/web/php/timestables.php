<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/timestables.php");

//start new session
session_start();

$typeid = $_GET["typeid"];
$start_new = $_GET["start_new"];

//start new so pass 1 as first paremeter. pass the type id sent from client.
$timestables = new TimesTables($typeid,$start_new,0);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>

