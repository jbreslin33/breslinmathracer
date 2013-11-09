<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
//start new session
session_start();
$conn = dbConnect();

/******* join games and games_levels  ***************/
$query = "select games.game, games.url, games.picture_open, games.picture_closed, games.id from games join games_levels on games.id = games_levels.game_id where games_levels.level_id = ";
$query .= $_SESSION["next_level_id"];
$query .= ";";

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows
$numberOfRows = pg_num_rows($result);

$next_level = $_SESSION["next_level"];
$counter = 0;
while ($row = pg_fetch_row($result))
{
        //fill php vars from db
        $game_id = $row[4];

	//echo $game_id; 
	echo "helllllllllllllllllllls";
        $counter++;
}
?>
