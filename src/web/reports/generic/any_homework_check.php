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
	$queryOne .= " AND evaluations_attempts.start_time > '";
	$queryOne .= $start_time;
	$queryOne .= "' AND evaluations_attempts.start_time < '";
	$queryOne .= $end_time;
	$queryOne .= "' AND evaluations_id = "; 
	$queryOne .= $eval_id;
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
/*
			if ($evaluations_id == 17)
			{
				$homeworkQuestionArray[] = $transactionCode;
			}
*/
			//if ($evaluations_id == 18)
			//{
				$terraNovaQuestionArray[] = $transactionCode;
			//}
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
/*
		if ($evaluation_id == 17)
		{
			$homeworkGradeArray[] = $gradePercent;
		}
*/
//		if ($evaluation_id == 18)
//		{
			$terraNovaGradeArray[] = $gradePercent;
//		}
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
        
        $bcolor = 'Green';
	if ($homeworkQuestionsArray[$y] < 10 || $terraNovaQuestionsArray[$y] < 9)
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
        echo $terraNovaGradesArray[$y];
        echo '</td>';

        if ($terraNovaQuestionsArray[$y] == 0)
        {
                $bcolor = 'White';
        }
        if ($terraNovaQuestionsArray[$y] > 8)
        {
                $bcolor = 'Green';
        }
        if ($terraNovaQuestionsArray[$y] < 9)
        {
                $bcolor = 'Red';
        }
        
	echo '<td bgcolor="';
        echo $bcolor;
        echo '">';
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
