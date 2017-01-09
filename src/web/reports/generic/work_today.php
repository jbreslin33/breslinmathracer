<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>WORK TODAY</title>
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
$category = 0;
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

<p><b> WORK TODAY </p></b>

<p><b> Select Room </p></b>

<form method="post" action="/web/reports/generic/work_today.php">

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
    	var x = document.getElementById("room_id").value;
	document.location.href = '/web/reports/generic/work_today.php?room_id=' + x; 
}
</script>

<?php

//BEGIN TODAY
	$query_today = "select users.id, count(*) from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN users ON users.id=evaluations_attempts.user_id AND item_attempts.start_time > CURRENT_DATE"; 

	if ($room_id != 0)
	{
		$query_today .= " AND users.room_id = ";
        	$query_today .= $room_id;
	}

	$query_today .= " GROUP BY users.id";

        $result_today = pg_query($conn,$query_today);
        $numrows_today = pg_numrows($result_today);
//END TODAY

//BEGIN REGULAR

	$query = "select id, last_activity, first_name, last_name, core_standards_id, score from users"; 
	if ($room_id != 0)
	{
		$query .= " where room_id = ";
        	$query .= $room_id;
		$query .= ";";
	}
	else
	{
		$query .= ";";	
	}
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);
	

//END REGULAR

if ($room_id == 99999)
{

}
else
{

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Last Name';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Last Answer';
        echo '</td>';
        echo '<td> Today';
        echo '</td>';
        echo '<td> Score';
        echo '</td>';
        echo '<td> Standard';
        echo '</td>';
        echo '</tr>';

        $lastAnswerTime = '';
        $firstName = '';
        $lastName = '';
        $score = '';


        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $id = $row[0];
                $lastAnswerTime = $row[1];
                $firstName = $row[2];
                $lastName = $row[3];
                $core_standards_id = $row[4];
                $score = $row[5];

                echo '<tr>';
                echo '<td>';
                echo $lastName;
                echo '</td>';
                echo '<td>';
                echo $firstName;
                echo '</td>';
                echo '<td>';
                echo $lastAnswerTime;
                echo '</td>';


       		//BEGIN TODAY
        	$today = 0;
        	//error_log($numrows_today);
        	for($t = 0; $t < $numrows_today; $t++)
        	{
                	$row_today = pg_fetch_array($result_today, $t);
                	if ($row[0] == $row_today[0])
                	{
                        	$today = $row_today[1];
                	}
        	}
        	echo '<td>';
        	echo $today;
        	echo '</td>';
        	//END TODAY


                echo '<td>';
                echo $score;
                echo '</td>';
                echo '<td>';
                echo $core_standards_id;
                echo '</td>';
                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
}
?>

</body>
</html>
