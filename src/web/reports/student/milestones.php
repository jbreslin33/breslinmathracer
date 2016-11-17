<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>MY CLASS MILESTONES</title>
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
	<p><b> MY CLASS MILESTONES: </p></b>
<?php
echo '<table border=\"1\">';
	
	//get a result set of evaluations to loop 
	$query_evaluations = "select description from evaluations where progression > 0.9 order by progression;"; 
       	$result_evaluations = pg_query($conn,$query_evaluations);
        $numrows_evaluations = pg_numrows($result_evaluations);
        

	//get eval data
        $query_eval = "select user_id, evaluations_attempts.start_time, evaluations.description, case when count(*) = evaluations.score_needed THEN 1 ELSE 0 END from item_attempts join evaluations_attempts on evaluations_attempts.id=item_attempts.evaluations_attempts_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id join users on evaluations_attempts.user_id=users.id where evaluations_id != 1 AND school_id = "; 
	$query_eval .= $_SESSION["school_id"];
	$query_eval .= " AND room_id = ";
	$query_eval .= $_SESSION["room_id"];

	$query_eval .= " group by user_id, evaluations_attempts.start_time, evaluations.description, evaluations.score_needed order by evaluations_attempts.start_time desc;";

        $result_eval = pg_query($conn,$query_eval);
        $numrows_eval = pg_numrows($result_eval);

	//get students and loop...
	$query_students = "select id, first_name, last_name from users where school_id = "; 
	$query_students .= $_SESSION["school_id"];
	$query_students .= " AND room_id = ";
	$query_students .= $_SESSION["room_id"];

	//error_log($query_students);	
       
	$result_students = pg_query($conn,$query_students);
        $numrows_students = pg_numrows($result_students);
        
	echo '<tr>';
        echo '<td>first_name';
       	echo '</td>';
        echo '<td>last_name';
       	echo '</td>';
	for($x = 0; $x < $numrows_evaluations; $x++)
        {
                $row_evaluations = pg_fetch_array($result_evaluations, $x);
        	echo '<td>';
		echo $row_evaluations[0];
        	echo '</td>';
	}
        echo '</tr>';
	
	for($s = 0; $s < $numrows_students; $s++)
	{
        	echo '<tr>';

                $row_students = pg_fetch_array($result_students, $s);
        	echo '<td>';
		echo $row_students[1];
        	echo '</td>';
        	
		echo '<td>';
		echo $row_students[2];
        	echo '</td>';


       		for($e = 0; $e < $numrows_evaluations; $e++)
        	{
                	$row_evaluations = pg_fetch_array($result_evaluations, $e);

                	$description = $row_evaluations[0];
                	$start_time = "s";
                	$passed = 0;

                	//now lets loop for data using eval data 
                	$y = 0;
                	while ($y < $numrows_eval && $passed == 0)
                	{
                        	$row_eval = pg_fetch_array($result_eval, $y);
				$txt = $description; 
				$txt .= ":";
				$txt .= $row_eval[2]; 
				$txt .= ":";
				$txt .= $row_students[0]; 
				$txt .= ":";
				$txt .= $row_eval[0]; 
				//error_log($txt);

                        	if ($description == $row_eval[2] && $row_students[0] == $row_eval[0])
                        	{
                                	$passed = $row_eval[3];
                        	}

                        	$y++;
                	}
			//first data in row is milestone name
                	echo '<td>';
                	echo $passed;
                	echo '</td>';
		}

        	echo '</tr>';
	
	}
        pg_free_result($result_evaluations);
        pg_free_result($result_eval);
        pg_free_result($result_students);
        echo '</table>';
?>
</body>
</html>
