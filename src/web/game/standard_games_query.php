<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_ajax_connect.php");
//dbErrorCheck();
$conn = dbConnect();

/******* join games and games_levels  ***************/
$query = "select games.id from games join games_levels on games.id = games_levels.game_id where games_levels.level_id = ";
$query .= $_SESSION["next_level_id"];
$query .= ";";

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows
$numberOfRows = pg_num_rows($result);
$counter = 0;
while ($row = pg_fetch_row($result))
{
        //fill php vars from db
        $game_id = $row[0];
	echo $game_id;
        $counter++;
}
?>
