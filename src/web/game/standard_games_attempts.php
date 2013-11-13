<?php

include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_games_attempts.php");

//start new session
session_start();

$conn = dbConnect();

//brian - get current date
$_SESSION["game_start_time"] = date('Y-m-d H:i:s');
$_SESSION["game_over"] = "false";


//brian - attempt a game - still hardcoding game_id = 1
insertIntoGamesAttempts($conn,$_SESSION["game_start_time"],1,$_SESSION["user_id"],$_SESSION["next_level"]);
?>

