<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>TEAMS</title>
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
	<p><b> TEAMS: </p></b>
<?php
echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> Team Name';
        echo '</td>';
        echo '<td> Player Name';
        echo '</td>';

        echo '</tr>';

$q = "select teams.name, first_name, last_name from users JOIN teams on teams.id=users.team_id where teams.school_id = ";
$q .= $_SESSION["school_id"];
$q .= " order by teams.name;";

$r = pg_query($conn,$q);
$n = pg_numrows($r);

        for($i = 0; $i < $n; $i++)
        {
                $row = pg_fetch_array($r, $i);
                $team_name = $row[0];
                $first_name = $row[1];
                $last_name = $row[2];

		$player_name = $first_name;
		$player_name .= " ";
		$player_name .= $last_name;

                echo '<tr>';
                echo '<td>';
                echo $team_name;
                echo '</td>';
                echo '<td>';
                echo $player_name;
                echo '</td>';

                echo '</tr>';
        }

        pg_free_result($r);
        echo '</table>';
?>
</body>
</html>
