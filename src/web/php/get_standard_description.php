<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/get_standard_description.php");

//start new session
session_start();

$typeid = $_GET["typeid"];

$getStandardDescription = new GetStandardDescription($typeid);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_standard_description.php");
?>
