<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/remediate.php");

//start new session
session_start();

$learningstandard = $_GET["learningstandard"];
$typeid = $_GET["typeid"];

$remediate = new Remediate($learningstandard,$typeid);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>
