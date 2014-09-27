<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/advance.php");

//start new session
session_start();

$advance = new Advance();

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");

?>
