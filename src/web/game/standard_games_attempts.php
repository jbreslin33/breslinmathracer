<?php

//brian - get current date
$_SESSION["game_start_time"] = date('Y-m-d H:i:s');
$_SESSION["game_over"] = "false";

include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_games_attempts.php");

//brian - attempt a game - still hardcoding game_id = 1
insertIntoGamesAttempts($conn,$_SESSION["game_start_time"],1,$_SESSION["user_id"],$_SESSION["next_level"]);
?>

