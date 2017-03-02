<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>LIVE EVALUATIONS</title>
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
	<p><b> LIVE EVALUATIONS ATTEMPTS: </p></b>
<?php

echo '<table border=\"1\">';
        echo '<tr>';


        echo '<tr>';
        echo '<td>first_name';
        echo '</td>';
        echo '<td>last_name';
        echo '</td>';
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

	$query = "select (select first_name from users where id = evaluations_attempts.user_id) as captain_firstname, (select last_name from users where id = evaluations_attempts.user_id) as captain_lastname, evaluations_attempts.start_time, evaluations.description, evaluations.score_needed, count(*), case when count(*) = evaluations.score_needed THEN 1 ELSE 0 END from item_attempts join evaluations_attempts on evaluations_attempts.id=item_attempts.evaluations_attempts_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id join users on evaluations_attempts.user_id=users.id where evaluations_id != 1 ";
        $query .= " AND item_attempts.transaction_code != 0 AND item_attempts.transaction_code != 2 group by evaluations_attempts, score_needed, evaluations_attempts.start_time, evaluations.description, users.first_name, users.last_name, captain_firstname, captain_lastname order by evaluations_attempts.start_time desc limit 20;";

       	$result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

	error_log($query);

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                
		if ($row[4] == 1)
                {
                        echo '<tr bgcolor="green">';
                }
                else
                {
                        echo '<tr bgcolor="red">';
                }
                echo '<td>';
                echo $row[0];
                echo '</td>';
                
		echo '<td>';
                echo $row[1];
                echo '</td>';
 		
		echo '<td>';
                echo mb_strimwidth($row[2], 0, 19, "");
                echo '</td>';

                echo '<td>';
                echo $row[3];
                echo '</td>';

                echo '<td>';
                echo $row[4];
                echo '</td>';

                echo '<td>';
                echo $row[5];
               	echo '</td>';

                echo '<td>';
                echo $row[6];
                echo '</td>';

                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
?>
</body>
</html>
