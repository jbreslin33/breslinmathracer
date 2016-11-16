<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>MILESTONES</title>
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
	<p><b> MILESTONE ATTEMPTS: </p></b>
<?php

echo '<table border=\"1\">';
        echo '<tr>';


        echo '<tr>';
        echo '<td>start time';
        echo '</td>';
        echo '<td>description';
        echo '</td>';
        echo '<td>score_needed';
        echo '</td>';
        echo '<td>score';
        echo '</td>';
        echo '<td>passed?';
        echo '</td>';
        echo '</tr>';

	$query = "select evaluations_attempts.start_time, evaluations.description, evaluations.score_needed, count(*), case when count(*) = evaluations.score_needed THEN 1 ELSE 0 END from item_attempts join evaluations_attempts on evaluations_attempts.id=item_attempts.evaluations_attempts_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id join users on evaluations_attempts.user_id=users.id where evaluations_id != 1 AND user_id = ";

        $query .= $_SESSION["user_id"];
        $query .= " group by evaluations_attempts, score_needed, evaluations_attempts.start_time, evaluations.description, users.first_name, users.last_name order by evaluations_attempts.start_time desc limit 20;";

       	$result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $match_id = $row[0];
                $team_name = $row[1];
                $start_time = $row[2];
                $end_time = $row[3];
                $score = $row[4];

                echo '<tr>';
 		
		echo '<td>';
                echo $row[0];
                echo '</td>';

                echo '<td>';
                echo $row[1];
                echo '</td>';

                echo '<td>';
                echo $row[2];
                echo '</td>';

                echo '<td>';
                echo $row[3];
               	echo '</td>';

                echo '<td>';
                echo $row[4];
                echo '</td>';

                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
?>
</body>
</html>
