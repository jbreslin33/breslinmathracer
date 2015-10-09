<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>DAILY HOMEWORK CHECK</title>
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

<p><b> Select Room: </p></b>
<form method="post" action="/web/reports/generic/daily_homework_check.php">

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
	document.location.href = '/web/reports/generic/daily_homework_check.php?room_id=' + x; 
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

$homeworkGradesArray = array();
$terraNovaGradesArray = array();

$homeworkQuestionsArray = array(); //0,1,2
$terraNovaQuestionsArray = array(); //0,1,2

for($s = 0; $s < $numrowsStudents; $s++)
{
	$homeworkGradeArray = array();
	$terraNovaGradeArray = array();

	$homeworkQuestionArray = array(); //0,1,2
	$terraNovaQuestionArray = array(); //0,1,2

	$rowStudents = pg_fetch_array($resultStudents, $s);

	$queryOne = "select * from evaluations_attempts where user_id = ";
	$queryOne .= $rowStudents[0];
	$queryOne .= " AND (evaluations_id = 17 OR evaluations_id = 18) ";

 	//$queryOne .= "AND ( extract(hour from evaluations_attempts.start_time) < 9 OR extract(hour from evaluations_attempts.start_time) > 14)";
	$queryOne .= "AND evaluations_attempts.start_time > '";
	$queryOne .= "2015-10-08 14:55:00";
	$queryOne .= "'"; 

 	$queryOne .= " order by start_time desc;";
	$resultOne = pg_query($conn,$queryOne);
	$numrowsOne = pg_numrows($resultOne);

	//this loop is to calc a test for a grade that is all
	for($i = 0; $i < $numrowsOne; $i++)
	{
		$rowOne = pg_fetch_array($resultOne, $i);

       	 	$query = "select progression, transaction_code, evaluations_attempts.evaluations_id from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN item_types ON item_attempts.item_types_id=item_types.id where evaluations_attempts_id = ";
		$query .= $rowOne[0];
		$query .= " order by item_attempts.start_time desc;";
        	$result = pg_query($conn,$query);
        	$numrows = pg_numrows($result);

		$progressionTotal = 0;
		$correctTotal = 0;
        	for($x = 0; $x < $numrows; $x++)
        	{
                	$row = pg_fetch_array($result, $x);
                
			$progression = $row[0];
			$progressionTotal = floatVal($progressionTotal + $progression);
		
			$transactionCode = $row[1];
		
			$evaluations_id = $row[2]; 
			if ($evaluations_id == 17)
			{
				$homeworkQuestionArray[] = $transactionCode;
			}
			if ($evaluations_id == 18)
			{
				$terraNovaQuestionArray[] = $transactionCode;
			}
			if ($transactionCode == 1)
			{
				$correctTotal = floatVal($correctTotal + $progression);
			}
		}

		$gradeDecimal = 0;
		if ($progressionTotal ==  0)	
		{
			$gradeDecimal = 0;
		}
		else
		{
			$gradeDecimal = floatVal($correctTotal / $progressionTotal);
		}
		
		$gradePercent = (int)($gradeDecimal * 100);

		$evaluation_id = $row[2]; 
		if ($evaluation_id == 17)
		{
			$homeworkGradeArray[] = $gradePercent;
		}
		if ($evaluation_id == 18)
		{
			$terraNovaGradeArray[] = $gradePercent;
		}
        }

	$totalTests = intval(count($homeworkGradeArray));
	$totalOfTests = 0;
	for($t = 0; $t < $totalTests; $t++)
	{
		$totalOfTests += $homeworkGradeArray[$t];
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
	$homeworkGradesArray[] = $averageGrade;	

	$totalTests = intval(count($terraNovaGradeArray));
	$totalOfTests = 0;
	for($t = 0; $t < $totalTests; $t++)
	{
		$totalOfTests += $terraNovaGradeArray[$t];
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
	$terraNovaGradesArray[] = $averageGrade;	

	//questions total
	$homeworkQuestionsArray[] = count($homeworkQuestionArray);
	$terraNovaQuestionsArray[] = count($terraNovaQuestionArray);
	
}

echo '<table border=\"1\">';
echo '<tr>';
echo '<td> Student';
echo '</td>';
echo '<td> Homework Grade';
echo '</td>';
echo '<td> Total Homework Questions';
echo '</td>';
echo '<td> TerrNova Homework Grade';
echo '</td>';
echo '<td> Total TerraNova Homework Questions';
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
        echo $homeworkGradesArray[$y];
        echo '</td>';
        echo '<td>';
        echo $homeworkQuestionsArray[$y];
        echo '</td>';
        echo '<td>';
        echo $terraNovaGradesArray[$y];
        echo '</td>';
        echo '<td>';
        echo $terraNovaQuestionsArray[$y];
        echo '</td>';
        echo '</tr>';
}

pg_free_result($result);
echo '</table>';
}
?>

</body>
</html>
