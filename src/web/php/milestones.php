<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/milestones.php");

//start new session
//session_start();

$milestones = new Milestones();
$milestones->setMilestones();

include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_milestones.php");
?>
