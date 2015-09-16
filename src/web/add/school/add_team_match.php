<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>ADD TEAM TO MATCH</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

echo "<br>";
?>
	<p><b> ADD TEAM TO MATCH: </p></b>

	
	<form method="post" action="/web/add/school/addteammatch.php">
<select name="match_id">

<?php
$query = "select id, start_time, end_time from matches where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by start_time desc;";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        echo "<option value=\"$row[0]\">$row[0]</option>";
}
?>

</select>
<select name="team_id">

<?php
$query = "select id, name from teams where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result); 

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        echo "<option value=\"$row[0]\">$row[1]</option>";
}
?>
</select>
	<p><input type="submit" value="UPDATE" /></p>
	</form>
<?php
echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> match_id';
        echo '</td>';
        echo '<td> team_name';
        echo '</td>';
        echo '<td> start_time';
        echo '</td>';
        echo '<td> end_time';
        echo '</td>';
        echo '<td> score';
        echo '</td>';

        echo '</tr>';

$q = "select matches.id, teams.name, matches.start_time, matches.end_time, teams_matches.score from matches JOIN teams_matches ON matches.id=teams_matches.matches_id JOIN teams ON teams_matches.team_id=teams.id where matches.school_id = ";
$q .= $_SESSION["school_id"];
$q .= " order by matches.id desc;";

$r = pg_query($conn,$q);
$n = pg_numrows($r);

        for($i = 0; $i < $n; $i++)
        {
                $row = pg_fetch_array($r, $i);
                $match_id = $row[0];
                $team_name = $row[1];
                $start_time = $row[2];
                $end_time = $row[3];
                $score = $row[4];

                echo '<tr>';
                echo '<td>';
                echo $match_id;
                echo '</td>';
                echo '<td>';
                echo $team_name;
                echo '</td>';
                echo '<td>';
                echo $start_time;
                echo '</td>';
                echo '<td>';
                echo $end_time;
                echo '</td>';
                echo '<td>';
                echo $score;
                echo '</td>';

                echo '</tr>';
        }

        pg_free_result($r);
        echo '</table>';
?>
</body>
</html>
