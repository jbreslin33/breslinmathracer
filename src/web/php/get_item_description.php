<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/get_item_description.php");

//start new session
session_start();

$typeid = $_GET["typeid"];

$getItemDescription = new GetItemDescription($typeid);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_item_description.php");
?>
