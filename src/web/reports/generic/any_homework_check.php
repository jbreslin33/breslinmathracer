<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>ANY HOMEWORK CHECK</title>
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

$eval_id = 0;
$room_id = 0;
$start_time = 0;
$end_time = 0;
$id = 0;

if (isset($_POST["room_id"]))
{
	$room_id = $_POST["room_id"];
}
else if (isset($_GET['room_id']))
{
	$room_id = $_GET['room_id'];
}

if (isset($_POST["eval_id"]))
{
	$eval_id = $_POST["eval_id"];
}
else if (isset($_GET['eval_id']))
{
	$eval_id = $_GET['eval_id'];
}

if (isset($_POST["start_time"]))
{
	$start_time = $_POST["start_time"];
}
else if (isset($_GET['start_time']))
{
	$start_time = $_GET['start_time'];
}

if (isset($_POST["end_time"]))
{
	$end_time = $_POST["end_time"];
}
else if (isset($_GET['end_time']))
{
	$end_time = $_GET['end_time'];
}

echo "<br>";
?>

<p><b> Select Room: </p></b>
<form method="post" action="/web/reports/generic/any_homework_check.php">

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"Select Room\" </option>";

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

<p><b> Select Evaluation: </p></b>
<form method="post" action="/web/reports/generic/any_homework_check.php">

<select id="eval_id" name="eval_id" onchange="loadAgain()">
<?php
$query = "select id, description from evaluations order by id asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"Select Evaluation\" </option>";

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        if ($row[0] == $eval_id)
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

<?php

echo "<p><b> Start time: </p></b>";
if ($start_time == 0 || $start_time == NULL)
{ 
 	$currentTime = time() + 3600;
        date_default_timezone_set('America/New_York');
        $d = date("w");
        $h = date("G");
	//monday check
        if ($d == 1)
	{
		$rightnow = date('Y-m-d',strtotime("-3 days"));
		$rightnow .= " 14:55:00";
		echo "<input id=\"start_time\" type=\"text\" name=\"start_time\" value=\"$rightnow\">";
	}
	else
	{
		$rightnow = date('Y-m-d',strtotime("-1 days"));
		$rightnow .= " 14:55:00";
		echo "<input id=\"start_time\" type=\"text\" name=\"start_time\" value=\"$rightnow\">";
	}
}
else
{
	echo "<input id=\"start_time\" type=\"text\" name=\"start_time\" value=\"$start_time\">";
}


echo "<p><b> End time: </p></b>";
if ($end_time == 0 || $end_time == NULL)
{ 
	$rightnow = date('Y-m-d');
	$rightnow .= " 08:40:00";
	echo "<input id=\"end_time\" type=\"text\" name=\"end_time\" value=\"$rightnow\">";
}
else
{
	echo "<input id=\"end_time\" type=\"text\" name=\"end_time\" value=\"$end_time\">";
}

?>

</form>

<script>
function loadAgain()
{
    	var x = document.getElementById("room_id").value;
    	var e = document.getElementById("eval_id").value;
    	var y = document.getElementById("start_time").value;
    	var z = document.getElementById("end_time").value;
	document.location.href = '/web/reports/generic/any_homework_check.php?room_id=' + x + '&eval_id=' + e + '&start_time=' + y + '&end_time=' + z; 
}
</script>


<?php

if ($room_id == 99999)
{

}
else
{

//number of students...
$queryStudents = "select * from users where room_id = ";
$queryStudents .= $room_id;
$queryStudents .= " order by last_name asc;";
$resultStudents = pg_query($conn,$queryStudents);
$numrowsStudents = pg_numrows($resultStudents);

$userArray = array();
$gradesArray = array();
$percentsArray = array();
$questionsArray = array(); 

for($s = 0; $s < $numrowsStudents; $s++)
{
	$rowStudents = pg_fetch_array($resultStudents, $s);

	$query = "select progression, transaction_code from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN item_types ON item_types.id=item_attempts.item_types_id where user_id = ";
	$query .= $rowStudents[0];
	$query .= " AND item_attempts.start_time > '";
	$query .= $start_time;
	$query .= "' AND item_attempts.start_time < '";
	$query .= $end_time;
	$query .= "' AND evaluations_attempts.evaluations_id = "; 
	$query .= $eval_id;
	$query .= " order by item_attempts.start_time desc;";
	//error_log($query);
	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);
		
	$progressionTotal = 0;
	$correctTotal = 0;
	$percentCorrectTotal = 0;

	//this loop is to calc a test for a grade that is all
	for($i = 0; $i < $numrows; $i++)
	{
		$row = pg_fetch_array($result, $i);
                
		$progression = $row[0];
		$progressionTotal = floatVal($progressionTotal + $progression);
		
		$transactionCode = $row[1];
		
		if ($transactionCode == 1)
		{
			$correctTotal = floatVal($correctTotal + $progression);
			$percentCorrectTotal = $percentCorrectTotal + 1;
		}
	}
	


	//percents
        if ($numrows != 0)
        {
                $percentsArray[] = floatVal($percentCorrectTotal / $numrows);
        }
        else
        {
                $percentsArray[] = 0;
        }

	
	//grade
	$grade = 0;
	if ($progressionTotal != 0)
	{
		$gradesArray[] = floatVal($correctTotal / $progressionTotal);
	}
	else
	{
		$gradesArray[] = 0;
	}
	
	//questions total
	$questionsArray[] = $numrows;
}

echo '<table border=\"1\">';
echo '<tr>';
echo '<td> Student';
echo '</td>';
echo '<td> Percent';
echo '</td>';
echo '<td> Grade';
echo '</td>';
echo '<td> Questions';
echo '</td>';
echo '</tr>';

for($y = 0; $y < $numrowsStudents; $y++)
{
	$rowStudents = pg_fetch_array($resultStudents, $y);

        $fullname = $rowStudents[3];
	$fullname .= " ";
        $fullname .= $rowStudents[7];
        
        $bcolor = 'Green';
	if ($questionsArray[$y] < 9)
        {
                $bcolor = 'Red';
        }
        
	echo '<td bgcolor="';
        echo $bcolor;
        echo '">';
        echo $fullname;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $bcolor;
        echo '">';
 	$percent = (int)($percentsArray[$y] * 100);
        echo $percent;
        echo '</td>';

        echo '<td bgcolor="';
        echo $bcolor;
        echo '">';
 	$grades = (int)($gradesArray[$y] * 100);

        echo $grades;
        echo '</td>';

        if ($questionsArray[$y] == 0)
        {
                $bcolor = 'White';
        }
        if ($questionsArray[$y] > 8)
        {
                $bcolor = 'Green';
        }
        if ($questionsArray[$y] < 9)
        {
                $bcolor = 'Red';
        }
        
	echo '<td bgcolor="';
        echo $bcolor;
        echo '">';
        echo $questionsArray[$y];
        echo '</td>';
        echo '</tr>';
}

pg_free_result($result);
echo '</table>';
}
?>

</body>
</html>
