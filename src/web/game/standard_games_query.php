<?php
/******* join games and games_levels  ***************/
$query = "select games.game, games.url, games.picture_open, games.picture_closed, games.id from games join games_levels on games.id = games_levels.game_id where games_levels.level_id = ";
$query .= $_SESSION["next_level_id"];
$query .= ";";

//get db result
$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

//get numer of rows
$numberOfRows = pg_num_rows($result);

echo "<script language=\"javascript\">";
echo "var numberOfRows = $numberOfRows;";
echo "var game_name = new Array();";
echo "var picture_open = new Array();";
echo "var picture_closed = new Array();";
echo "var url = new Array();";

$next_level = $_SESSION["next_level"];
echo "var next_level = $next_level;";

echo "</script>";

$counter = 0;
while ($row = pg_fetch_row($result))
{
        //fill php vars from db
        $game_name = $row[0];
        $url = $row[1];
        $picture_open = $row[2];
        $picture_closed = $row[3];
        $game_id = $row[4];

        echo "<script language=\"javascript\">";

        echo "game_name[$counter] = \"$game_name\";";
        echo "url[$counter] = \"$url?game_id=$game_id\";";
        echo "picture_open[$counter] = \"$picture_open\";";
        echo "picture_closed[$counter] = \"$picture_closed\";";
        echo "</script>";
        $counter++;
}
?>
