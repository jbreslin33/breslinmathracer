<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/remediate.php");

//start new session
session_start();

$typeid = $_GET["typeid"];

//start new so pass 1 as first paremeter. pass the type id sent from client.
$remediate = new Remediate(1,$typeid);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>
