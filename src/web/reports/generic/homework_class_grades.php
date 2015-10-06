<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>HOMEWORK CLASS GRADES</title>
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

echo "<br>";
?>

<p><b> Class Grades </p></b>

<p><b> Select Room and Student: </p></b>
<form method="post" action="/web/reports/generic/homework_class_grades.php">

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
</form>

<script>
function loadAgain()
{
    	var x = document.getElementById("room_id").value;
	document.location.href = '/web/reports/generic/homework_class_grades.php?room_id=' + x; 
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

for($s = 0; $s < $numrowsStudents; $s++)
{
	$gradeArray = array();
	$rowStudents = pg_fetch_array($resultStudents, $s);

	$queryOne = "select * from evaluations_attempts where user_id = ";
	$queryOne .= $rowStudents[0];
	$queryOne .= " AND (evaluations_id = 17 OR evaluations_id = 18) order by start_time desc;";
	$resultOne = pg_query($conn,$queryOne);
	$numrowsOne = pg_numrows($resultOne);

	//this loop is to calc a test for a grade that is all
	for($i = 0; $i < $numrowsOne; $i++)
	{
		$rowOne = pg_fetch_array($resultOne, $i);

       	 	$query = "select item_attempts.start_time, item_attempts.end_time, item_types.id, transaction_code, question, answers, user_answer, progression from item_attempts JOIN item_types ON item_attempts.item_types_id=item_types.id where evaluations_attempts_id = ";
		$query .= $rowOne[0];
		$query .= " order by start_time desc;";
        	$result = pg_query($conn,$query);
        	$numrows = pg_numrows($result);

		$progressionTotal = 0;
		$correctTotal = 0;
        	for($x = 0; $x < $numrows; $x++)
        	{
                	$row = pg_fetch_array($result, $x);
                
			$progression = $row[7];
			$progressionTotal = floatVal($progressionTotal + $progression);
		
			$transactionCode = $row[3];
			if ($transactionCode == 1)
			{
				$correctTotal = floatVal($correctTotal + $progression);
			}
		}

		$gradeDecimal = floatVal($correctTotal / $progressionTotal);
		$gradePercent = (int)($gradeDecimal * 100);
		$gradeArray[] = $gradePercent;
        }
	
	$totalTests = intval(count($gradeArray));
	$totalOfTests = 0;
	for($t = 0; $t < $totalTests; $t++)
	{
		$totalOfTests += $gradeArray[$t];
	}
	$averageGrade = 0;
	if ($totalTests != 0)
	{
		$averageGrade = floatVal($totalOfTests / $totalTests);
	}
	else
	{
		$averageGrade = 0;
	}
	$gradesArray[] = $averageGrade;	
}

echo '<table border=\"1\">';
echo '<tr>';
echo '<td> Student';
echo '</td>';
echo '<td> Grades';
echo '</td>';
echo '</tr>';

for($y = 0; $y < $numrowsStudents; $y++)
{
	$rowStudents = pg_fetch_array($resultStudents, $y);

        $fullname = $rowStudents[3];
	$fullname .= " ";
        $fullname .= $rowStudents[7];

        echo '<tr>';
        echo '<td>';
        echo $fullname;
       	echo '</td>';
        echo '<td>';
        echo $gradesArray[$y];
        echo '</td>';
        echo '</tr>';
}

pg_free_result($result);
echo '</table>';
}
?>

</body>
</html>
