<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/rewind.php");

//start new session
session_start();

$rewind = new Rewind();
include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>
