<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");

$returnString = getLevelsReport($conn,$_SESSION["user_id"]);

//fill php vars
echo $returnString;
?>
