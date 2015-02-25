<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/scroll.php");

//start new session
session_start();

//start new so pass 1 as first paremeter.
$scroll = new Scroll();

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_scroll.php");
?>
