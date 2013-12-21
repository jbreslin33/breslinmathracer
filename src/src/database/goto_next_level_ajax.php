<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php"); 
/*
$query = "insert into levelAttempts (end_time, ref_id, level, passed, user_id) values (current_timestamp,'";
$query .= $_SESSION["ref_id"];
$query .= "','";
$query .= $_SESSION["level"];
$query .= "',";
$query .= "'TRUE'";
$query .= ",'";
$query .= $_SESSION["user_id"];
$query .= "');";

//db call to update
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
*/
setLevelSessionVariablesAdvance($conn,$_SESSION["user_id"]);

//fill php vars
$returnString = "101,"; 
$returnString .= $_SESSION["ref_id"];
$returnString .= ",";
$returnString .= $_SESSION["level"];
echo $returnString;


?>

