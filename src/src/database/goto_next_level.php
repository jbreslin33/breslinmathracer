<?php
include(getenv("DOCUMENT_ROOT") . "/web/login/check_login.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php"); 

$conn = dbConnect();

$query = "insert into levels_transactions (advancement_time, level_id, user_id) values (current_timestamp,'";
$query .= $_SESSION["next_level_id"];
$query .= "','";
$query .= $_SESSION["user_id"];
$query .= "');";

//db call to update
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

setLevelSessionVariables($conn,$_SESSION["user_id"]);

//send player to the game page where he will be redirected.
header("Location: /web/game/chooser.php");

?>

