<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/classmates.php");

$classmates = new Classmates();
$classmates->setClassmates();

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_classmates.php");
?>
