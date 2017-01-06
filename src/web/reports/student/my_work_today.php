<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>MY WORK TODAY</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<ul>

<?php
session_start();
if ($_SESSION["role"] == 1)
{
        echo "<li><a href=\"/web/navigation/student/main_menu.php\">Main Menu</a></li>";
        echo "<li><a href=\"/web/navigation/student/reports.php\">Reports</a></li>";
}
else
{
        echo "<li><a href=\"/web/navigation/school/main_menu.php\">Main Menu</a></li>";
}
?>
<li><a href="/web/php/logout.php">Logout</a></li>
</ul>

<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

echo "<br>";
?>
	<p><b> MY WORK TODAY: </p></b>
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
