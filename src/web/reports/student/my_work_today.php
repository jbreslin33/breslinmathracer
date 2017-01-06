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

$q = "select item_attempts.start_time, item_attempts.item_types_id, transaction_code, question, user_answer from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where evaluations_attempts.user_id = ";
$q .= $_SESSION["user_id"];

$q .= " AND item_attempts.start_time > CURRENT_DATE order by item_attempts.start_time desc;";

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
