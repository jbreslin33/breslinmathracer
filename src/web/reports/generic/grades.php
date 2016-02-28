<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>GRADES</title>
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
$user_id = 0;
$id = 0;

if (isset($_POST["room_id"]))
{
	$room_id = $_POST["room_id"];
}
else if (isset($_GET['room_id']))
{
	$room_id = $_GET['room_id'];
}

if (isset($_POST["user_id"]))
{
        $user_id = $_POST["user_id"];
}
else if (isset($_GET['user_id']))
{
        $user_id = $_GET['user_id'];
}

echo "<br>";
?>

<p><b> Grades </p></b>

<p><b> Select Room and Student: </p></b>
<form method="post" action="/web/reports/generic/grades.php">

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

<select id="user_id" name="user_id" onchange="loadAgain()">
<?php
$query = "select * from users where room_id = ";
$query .= $room_id;
$query .= " order by last_name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"Select Student\" </option>";

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
	$fullname = $row[3];
	$fullname .= " ";
	$fullname .= $row[7];
        if ($row[0] == $user_id)
        {
                echo "<option selected=\"selected\" value=\"$row[0]\"> $fullname </option>";
        }      
        else
        {
                echo "<option value=\"$row[0]\"> $fullname </option>";
        }
}
?>
</select>

</form>


<script>
function loadAgain()
{
    	var x = document.getElementById("room_id").value;
    	var y = document.getElementById("user_id").value;
	document.location.href = '/web/reports/generic/grades.php?room_id=' + x + '&user_id=' + y; 
}
</script>


<?php

if ($room_id == 99999)
{

}
else
{
	$startTimeArray = array();
	$testIDArray = array();
	$gradeArray = array();

	$queryOne = "select evaluations_attempts.id, evaluations_attempts.start_time, evaluations.description from evaluations_attempts join evaluations on evaluations.id=evaluations_attempts.evaluations_id where user_id = ";
	$queryOne .= $user_id;
	$queryOne .= " AND (evaluations_id = 15 OR evaluations_id = 16) order by start_time desc;";
	$resultOne = pg_query($conn,$queryOne);
	$numrowsOne = pg_numrows($resultOne);

	//this loop is to calc a test for a grade that is all
	for($i = 0; $i < $numrowsOne; $i++)
	{
		//skip out here...
  		//get evaluations_attempts row
        	//$row = pg_fetch_array($result, $i);
		$rowOne = pg_fetch_array($resultOne, $i);

        	//get item_attempts related to evaluations_attempts_id
        	$query2 = "select id from item_attempts where evaluations_attempts_id = ";
        	$query2 .= $rowOne[0];
        	$query2 .= ";";
        	$result2 = pg_query($conn,$query2);
        	$numrows2 = pg_numrows($result2);

        	if ($numrows2 > 4)
        	{
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
			$startTimeArray[] = $row[0];
			$testIDArray[] = $rowOne[0];
			$gradeArray[] = $gradePercent;
		}
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
	$gradeTxt = "Average Grade: ";
	$gradeTxt .= $averageGrade;
	
	echo $gradeTxt;

	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Start Time';
        echo '</td>';
        echo '<td> Test ID';
        echo '</td>';
        echo '<td> Grade';
        echo '</td>';
        echo '</tr>';
	for($z = 0; $z < count($gradeArray); $z++)
	{
		$rowOne = pg_fetch_array($resultOne, $z);

                $startTime = $rowOne[1];
                $testID = $rowOne[0];

                echo '<tr>';
                echo '<td>';
                echo $startTimeArray[$z];
                echo '</td>';
                echo '<td>';
                echo $testIDArray[$z];
                echo '</td>';
                echo '<td>';
                echo $gradeArray[$z];
                echo '</td>';
                echo '</tr>';
	}

        pg_free_result($result);
        echo '</table>';
}
?>

</body>
</html>
