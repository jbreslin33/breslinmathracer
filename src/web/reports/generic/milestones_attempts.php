<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>MILESTONES ATTEMPTS</title>
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
        echo "<li><a href=\"/web/navigation/school/reports.php\">Reports</a></li>";
}
?>
<li><a href="/web/php/logout.php">Logout</a></li>
</ul>

<?php

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

$room_id = 0;
$id = 0;

if (isset($_POST["room_id"]))
{
	$room_id = $_POST["room_id"];
}

else if (isset($_GET['room_id']))
{
	$room_id = $_GET['room_id'];
}
else
{

}
echo "<br>";

?>

<p><b> Milestones attempts </p></b>

<p><b> Select Room: </p></b>

<form method="post" action="/web/reports/generic/milestones_attempts.php">

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"Entire School\" </option>";

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
	if ($row[0] == $room_id)
	{
        	echo "<option selected=\"selected\" value=\"$row[0]\"> $row[1] </option>";
	}	
	else
	{
        	echo "<option value=\"$row[0]\"> $row[1] </option>";
	}
}
?>
</select>
<script>
function loadAgain()
{
    	var y = document.getElementById("room_id").value;
	document.location.href = '/web/reports/generic/milestones_attempts.php?room_id=' + y; 
}
</script>

<?php
if ($room_id == 99999)
{

}
else
{

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td>start time';
        echo '</td>';
        echo '<td>description';
        echo '</td>';
        echo '<td>first_name';
        echo '</td>';
        echo '<td>last_name';
        echo '</td>';
        echo '<td>score_needed';
        echo '</td>';
        echo '<td>score';
        echo '</td>';
        echo '<td>passed?';
        echo '</td>';
        echo '</tr>';

        $lastAnswerTime = '';
        $firstName = '';
        $lastName = '';
        $score = '';

        $query = "select evaluations_attempts.start_time, evaluations.description, users.first_name, users.last_name, evaluations.score_needed, count(*), case when count(*) = evaluations.score_needed THEN 1 ELSE 0 END from item_attempts join evaluations_attempts on evaluations_attempts.id=item_attempts.evaluations_attempts_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id join users on evaluations_attempts.user_id=users.id where evaluations_id != 1 AND school_id = ";

        $query .= $_SESSION["school_id"];

	if ($room_id != 0)
	{
		$query .= " AND room_id = ";
        	$query .= $room_id;
	}

	$query .= " group by evaluations_attempts, score_needed, evaluations_attempts.start_time, evaluations.description, users.first_name, users.last_name order by evaluations_attempts.start_time desc;";
        $query .= " order by score desc;";

	error_log($query);

        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

	
        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                
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
}
?>

</body>
</html>
