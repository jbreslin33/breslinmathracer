<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/get_student_item_stats.php");

//start new session
session_start();

$getStudentItemStats = new GetStudentItemStats();

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_student_item_stats.php");
?>
