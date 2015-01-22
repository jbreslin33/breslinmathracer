<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/get_core_description.php");

//start new session
session_start();

$getCoreDescription = new GetCoreDescription();

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_core_description.php");
?>
