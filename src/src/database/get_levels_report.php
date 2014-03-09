<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");

$returnString = getLevelsReport($conn,$_SESSION["user_id"]);

//fill php vars
echo $returnString;
//echo "101,1,2,3,4,5,6,7,8,9,10,11,12,13,14";

?>

