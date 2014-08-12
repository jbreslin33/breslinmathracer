<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/get_practice_description.php");

//start new session
session_start();

$getPracticeDescription = new GetPracticeDescription();

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_practice_description.php");
?>
