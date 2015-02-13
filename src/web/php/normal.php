<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");

//start new session
session_start();

//start new so pass 1 as first paremeter.
$normal = new Normal(1);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>
