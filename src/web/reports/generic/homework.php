<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>HOME WORK</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();

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

<p><b> HOME WORK </p></b>
<ul>
<?php
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
<br>


<p><b> Select School and Room: </p></b>

<form method="post" action="/web/stats/homework.php">

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

//echo "<option selected=\"selected\" value=\"0\"> \"Entire School\" </option>";
echo "<option selected=\"selected\" value=\"0\"> \"\" </option>";


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
	document.location.href = '/web/reports/generic/homework.php?room_id=' + y; 
}
</script>


<?php

date_default_timezone_set('America/New_York');
$start = new DateTime('2015-09-08');
$end = new DateTime(date('Y-m-d H:i:s'));
//echo $end;
$days = $start->diff($end, true)->days;

//sundays
$sundays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);
$mondays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);
$tuesdays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);
$wednesdays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);
$thursdays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);
$total = intval($sundays + $mondays + $tuesdays + $wednesdays + $thursdays);
$questions_needed = $total * 100;
$text = "Current Homework total needed: ";
$text .= $questions_needed;
//error_log($total);
echo $text;


//error_log($sundays);

if ($room_id == 99999)
{

}
else
{

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Username';
        echo '</td>';
        echo '<td> Last Name';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Homework Questions';
        echo '</td>';
        echo '</tr>';

        $score = '';

if ($room_id != 0)
{
	$queryUsers = "select username, last_name, first_name from users where school_id = ";
        $queryUsers .= $_SESSION["school_id"];
	$queryUsers .= " AND room_id = ";
        $queryUsers .= $room_id;
 	$queryUsers .= " order by last_name asc;";
        $resultUsers = pg_query($conn,$queryUsers);
        $numrowsUsers = pg_numrows($resultUsers);
        $fetchAllUsers = pg_fetch_all($resultUsers);

	
        for($i = 0; $i < $numrowsUsers; $i++)
	{
		$query = "select count(item_attempts.transaction_code) from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN users ON evaluations_attempts.user_id=users.id where item_attempts.start_time > '2015-09-08' AND ( extract(hour from item_attempts.start_time) < 9 OR extract(hour from item_attempts.start_time) > 14 OR extract(dow from item_attempts.start_time) = 0 OR extract(dow from item_attempts.start_time) = 6) AND username = '";
		$query .= $fetchAllUsers[$i]['username'];
		$query .= "';";

        	$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

        	$row = pg_fetch_array($result, 0);

                echo '<tr>';
                echo '<td>';
                echo $fetchAllUsers[$i]['username'];
                echo '</td>';
                echo '<td>';
                echo $fetchAllUsers[$i]['last_name'];
                echo '</td>';
                echo '<td>';
                echo $fetchAllUsers[$i]['first_name'];
                echo '</td>';

		$c = 'Green';
		if ($row[0] < $questions_needed)
		{
			$c = 'Red';
		}
                echo '<td bgcolor="';
                echo $c;
                echo '">';


                echo $row[0];
                echo '</td>';
                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
}
}
?>

</body>
</html>
