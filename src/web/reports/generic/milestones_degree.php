<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>MILESTONES DEGREE</title>
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

ini_set("date.timezone", "America/New_York");

//start date
$start_date = date("Y-m-d");

if (isset($_POST["start_date"]))
{
        $start_date = $_POST["start_date"];
}
else if (isset($_GET['start_date']))
{
        $start_date = $_GET['start_date'];
}
else
{
        //$start_date = date("Y-m-d");
        $start_date = date("2017-09-10");
}

//end date
$end_date = date("Y-m-d");

if (isset($_POST["end_date"]))
{
        $end_date = $_POST["end_date"];
}
else if (isset($_GET['end_date']))
{
        $end_date = $_GET['end_date'];
}
else
{
        $end_date = date("Y-m-d");
	$end_date = date('Y-m-d', strtotime($end_date . ' +1 day'));
}


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

$team_flag = 0;
if (isset($_POST["team_flag"]))
{
        $team_flag = $_POST["team_flag"];
}

else if (isset($_GET['team_flag']))
{
        $team_flag = $_GET['team_flag'];
}
else
{
        $team_flag = 0;
}

$extras_flag = 0;
if (isset($_POST["extras_flag"]))
{
        $extras_flag = $_POST["extras_flag"];
}

else if (isset($_GET['extras_flag']))
{
        $extras_flag = $_GET['extras_flag'];
}
else
{
        $extras_flag = 0;
}

echo "<br>";

$bonus_array[] = 0; //
$bonus_array[] = 0; //k
$bonus_array[] = 13.4; //1
$bonus_array[] = 6.7; //2
$bonus_array[] = 5; //3
$bonus_array[] = 2.3; //4
$bonus_array[] = 1.74; //5
$bonus_array[] = 1.43; //6
$bonus_array[] = 1.43; //7
$bonus_array[] = 1.43; //8

$bonus_new_array[] = 0;
$bonus_new_array[] = 0; //k 
$bonus_new_array[] = 6.7; //1
$bonus_new_array[] = 5; //2
$bonus_new_array[] = 2.3; //3
$bonus_new_array[] = 1.74; //4
$bonus_new_array[] = 1.43; //5
$bonus_new_array[] = 1.43; //6
$bonus_new_array[] = 1.43; //7
$bonus_new_array[] = 1.43; //8

$pre_end[] = 0;
$pre_end[] = 0;
$pre_end[] = 8;
$pre_end[] = 11;
$pre_end[] = 16;
$pre_end[] = 26;
$pre_end[] = 31; //5
$pre_end[] = 36;
$pre_end[] = 36;
$pre_end[] = 36;

$new_end[] = 0;
$new_end[] = 0;
$new_end[] = 11;
$new_end[] = 16;
$new_end[] = 26;
$new_end[] = 31;
$new_end[] = 36; //5
$new_end[] = 36;
$new_end[] = 36;
$new_end[] = 36;
        
//------------------EVALUATIONS------------------------------
$query_e = "select * from evaluations where progression > 0.9 AND progression < 21 order by progression asc;";
$result_e = pg_query($conn,$query_e);
$numrows_e = pg_numrows($result_e);
//------------------END EVALUATIONS------------------------------


function calc_raw_grade($core_grades_id,&$row,&$result_e)
{
        if ($core_grades_id == NULL)
        {
                return false;
        }
        global $bonus_array;
        global $pre_end;
        $rg = 60;

        for ($j = 5; $j < $pre_end[$core_grades_id]; $j++)
        {
		$row_e = pg_fetch_array($result_e, intval($j - 5));
		
                if ($row[$j] >= $row_e[7])
                {
                        $rg += $bonus_array[$core_grades_id];
                }
        }
        return $rg;
}
function calc_raw_grade_new($core_grades_id,&$row,&$result_e)
{
        if ($core_grades_id == NULL)
        {
                return false;
        }
        global $bonus_new_array;
        global $new_end;
        $rg = 60;

        for ($j = 5; $j < $new_end[$core_grades_id]; $j++)
        {
		$row_e = pg_fetch_array($result_e, intval($j - 5));

                if ($row[$j] >= $row_e[7])
                {
                        $rg += $bonus_new_array[$core_grades_id];
                }
        }
        return $rg;
}


?>

<form method="post" action="/web/reports/generic/milestones_degree.php">
<b> Select Room:</b>

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=0>0</option>";

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

<b>START DATE:</b>
<input id="start_date" type="text" name="start_date" value="<?php echo htmlentities($start_date); ?>"  onchange="loadAgain()">

<b>END DATE:</b>
<input id="end_date" type="text" name="end_date" value="<?php echo htmlentities($end_date); ?>"  onchange="loadAgain()">


<select id="team_flag" name="team_flag" onchange="loadAgain()">
<?php
$team_flag_array = array();
$team_flag_array[] = "team"; // 012
$team_flag_array[] = "solo"; //2

for($i = 0; $i < sizeof($team_flag_array); $i++)
{
        if ($team_flag_array[$i] == $team_flag)
        {
                echo "<option selected=\"selected\" value=\"$team_flag_array[$i]\"> $team_flag_array[$i] </option>";
        }
        else
        {
                echo "<option value=\"$team_flag_array[$i]\"> $team_flag_array[$i] </option>";
        }
}
?>
</select>

<select id="extras_flag" name="extras_flag" onchange="loadAgain()">
<?php
$extras_flag_array = array();
$extras_flag_array[] = "extras"; 
$extras_flag_array[] = "no extras"; 

for($i = 0; $i < sizeof($extras_flag_array); $i++)
{
        if ($extras_flag_array[$i] == $extras_flag)
        {
                echo "<option selected=\"selected\" value=\"$extras_flag_array[$i]\"> $extras_flag_array[$i] </option>";
        }
        else
        {
                echo "<option value=\"$extras_flag_array[$i]\"> $extras_flag_array[$i] </option>";
        }
}
?>
</select>


</form>


<script>
function loadAgain()
{
        var w = document.getElementById("room_id").value;
        var x = document.getElementById("start_date").value;
        var y = document.getElementById("end_date").value;
        var z = document.getElementById("team_flag").value;
        var a = document.getElementById("extras_flag").value;

        document.location.href = '/web/reports/generic/milestones_degree.php?room_id=' + w + '&start_date=' + x + '&end_date=' + y + '&team_flag=' + z + '&extras_flag=' + a;
}
</script>

<?php

error_log($extras_flag);

if ($room_id == 0)
{

}
else
{

echo '<table border=\"1\">';
        echo '<tr>';

	if ($extras_flag == "extras")
	{
        	echo '<td>Rank';
        	echo '</td>';
	}
        echo '<td>First Name';
        echo '</td>';
        echo '<td>Last Name';
        echo '</td>';
	if ($extras_flag == "extras")
	{
        	echo '<td>Today';
        	echo '</td>';
        	echo '<td>Grade';
        	echo '</td>';
        	echo '<td>pre-grade';
        	echo '</td>';
        	echo '<td>grade';
        	echo '</td>';
        	echo '<td>Score';
        	echo '</td>';
        	echo '<td>Standard';
        	echo '</td>';
	}
        echo '<td>k<br>c<br>c';
        echo '</td>';
        echo '<td>k<br>o<br>a<br>a<br>4';
        echo '</td>';
        echo '<td>k<br>o<br>a<br>a<br>5';
        echo '</td>';
        echo '<td>1<br> o<br>a<br> b<br> 3';
        echo '</td>';
        //echo '<td>H<br>y<br>p<br>e<br>r<br>i<br>o<br>n<br><br> 1 oa c 6';
        echo '<td>1<br> o<br>a<br> c<br> 6';
        
        echo '</td>';
        echo '<td>1<br> n<br>b<br>t';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>9<br>s';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>8<br>s';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>7<br>s';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>6<br>s';
        echo '</td>';
        echo '<td>2<br> o<br>a<br> b<br> 2';
        echo '</td>';
        echo '<td>2<br> n<br>b<br>t';
        echo '</td>';
        echo '<td>5';
        echo '</td>';
        echo '<td>2';
        echo '</td>';
        echo '<td>4';
        echo '</td>';
        echo '<td>8';
        echo '</td>';
        echo '<td>3';
        echo '</td>';
        echo '<td>6';
        echo '</td>';
        echo '<td>9';
        echo '</td>';
        echo '<td>7';
        echo '</td>';
        //echo '<td>T<br>h<br>e<br><br> I<br>z<br>z<br>y<br><br> 3<br> oa<br> c<br> 7';
	echo '<td>3<br> o<br>a<br> c<br> 7';
        echo '</td>';
        echo '<td>3<br> n<br>b<br>t';
        echo '</td>';
        echo '<td>4<br> o<br>a<br> b<br> 4';
        echo '</td>';
        echo '<td>4<br> n<br>b<br>t<br> b<br> 4';
        echo '</td>';
        echo '<td>4 <br>n<br>b<br>t<br> b <br>5';
        echo '</td>';
        echo '<td>4<br> n<br>b<br>t <br>b<br> 6';
        echo '</td>';
        echo '<td>4<br> n<br>f<br> b<br> 3<br> c';
        echo '</td>';
        echo '<td>5<br> n<br>b<br>t <br>b<br> 5';
        echo '</td>';
        echo '<td>5<br> n<br>b<br>t<br> b <br>6';
        echo '</td>';
        echo '<td>5<br> n<br>b<br>t<br> b<br> 7';
        echo '</td>';
        echo '<td>D<br>D';
        echo '</td>';
        echo '<td>5<br> n<br>f<br> a<br> 1';
        echo '</td>';
        echo '</tr>';

        $id = '';
        $firstName = '';
        $lastName = '';
        $score = '';

        //------------------MILESTONES------------------------------
	$query_m = "select distinct sub.id, sub.first_name, sub.last_name, sub.description, sub.progression, sub.inner_grade, sub.teammate_id FROM ( select users.id, users.first_name, users.last_name, evaluations_attempts.teammate_id, evaluations.description, evaluations.progression, evaluations.score_needed, COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) as not_answered,  COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as incorrect,
    COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) as correct, COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as total_answered,

COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) / (COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END))::float * 100 as inner_grade   from evaluations_attempts join users on evaluations_attempts.user_id=users.id JOIN item_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id where evaluations_attempts.start_time > '";
	$query_m .= $start_date;
	$query_m .= "' AND evaluations_attempts.start_time < '";  
	$query_m .= $end_date;
	$query_m .= "' AND evaluations_attempts.evaluations_id != 1 "; 

	if ($room_id != 0)
	{
		$query_m .= " AND users.room_id = ";
        	$query_m .= $room_id;
	}

	//$query_m .= " AND evaluations.progression > 0.9 AND progression < 21 AND evaluations_attempts.teammate_id is NULL group by evaluations_attempts, evaluations.progression, evaluations.description, users.id, users.first_name, users.last_name, evaluations_attempts.teammate_id,
	$query_m .= " AND evaluations.progression > 0.9 AND progression < 21 group by evaluations_attempts, evaluations.progression, evaluations.description, users.id, users.first_name, users.last_name, evaluations_attempts.teammate_id,
evaluations.score_needed) sub WHERE sub.total_answered >= sub.score_needed order by sub.last_name, sub.progression;";
        $result_m = pg_query($conn,$query_m);
        $numrows_m = pg_numrows($result_m);
	//error_log($query_m);
        //------------------END MILESTONES------------------------------



	//------------------USERS------------------------------
        $query = "select id, first_name, last_name, core_standards_id, score, core_grades_id from users where banned_id = 0 and school_id = ";
        $query .= $_SESSION["school_id"];
	if ($room_id != 0)
	{
		$query .= " AND room_id = ";
        	$query .= $room_id;
	}
        $query .= " order by score desc;";
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);
	//------------------END USERS------------------------------
	
	//-------------------------BEGIN TOTAL---------------------------------		
	$query_total = "select evaluations_attempts.user_id, count(*) from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN users ON users.id=evaluations_attempts.user_id AND item_attempts.start_time > CURRENT_DATE ";
	if ($room_id != 0)
	{
		$query_total .= " AND users.room_id = ";
        	$query_total .= $room_id;
	}
	$query_total .= " GROUP BY evaluations_attempts.user_id;";

     	$result_total = pg_query($conn,$query_total);
        $numrows_total = pg_numrows($result_total);
	//---------------------------END TOTAL------------------------
	
	$total_raw_grade = 0;

	$i = 0;

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $id = $row[0];
                $firstName = $row[1];
                $lastName = $row[2];

		//BEGIN TOTAL        	
		$today = 0;
        	for($t = 0; $t < $numrows_total; $t++)
		{
			$row_total = pg_fetch_array($result_total, $t);
			if ($id == $row_total[0]) 
			{
				$today = $row_total[1];
			}
		}
		//END TOTAL        	

                $core_standards_id = $row[3];
                $score = $row[4];
                $core_grades_id = $row[5];
		
		for($r = 5; $r < 38; $r++)
		{
			$row[] = 0;
		}

		for($m = 0; $m < $numrows_m; $m++)
		{
                	$row_m = pg_fetch_array($result_m, $m);
			$row_m[5] = intval($row_m[5]);
	
			for ($p = 0; $p < $numrows_e; $p++)
			{
                		$row_e = pg_fetch_array($result_e, $p);

				//lets split and check here

				if ($team_flag == "team")
				{
					if ($row_m[6] != "") //is there a teammate
					{
						if ($row_m[3] == $row_e[1]) //ms match?
						{
							if ($id == $row_m[0] || $id == $row_m[6]) //do we have a user or teammate match?
							{
								if ($row[intval($p + 5)] < $row_m[5]) //less than new comming in
								{
									$row[intval($p + 5)] = $row_m[5];
								}
							}
						}
					}
					//error_log("team");
				}
				else 
				{
					if ($id == $row_m[0] && $row_m[3] == $row_e[1] && $row_m[6] == "") //do we have a user and ms match?
					{
						if ($row[intval($p + 5)] < $row_m[5]) //less than new comming in
						{
							$row[intval($p + 5)] = $row_m[5];
						}
					}
					//error_log("solo");
				}
			}	
		}

                echo '<tr>';
		if ($extras_flag == "extras")
		{
                	echo '<td>';
                	echo $i + 1;
                	echo '</td>';
		}
                echo '<td>';
                echo $firstName;
                echo '</td>';
                echo '<td>';
                echo $lastName;
                echo '</td>';
		if ($extras_flag == "extras")
		{
                	echo '<td>';
                	echo $today;
                	echo '</td>';
 			echo '<td>';
			$raw_grade = 60;

			//1st  thru k 
			$raw_grade = calc_raw_grade($core_grades_id,$row,$result_e);
                	echo $raw_grade;
                	echo '</td>';

//BEGIN PRE DATE 
			$r = $raw_grade - 60;


       	         	//get total days since start
               		$now = time(); // or your date as well
                	$start_date = strtotime("2017-09-10");
                	$datediff_seconds = $now - $start_date;
                	$diff_days = floor($datediff_seconds / (60 * 60 * 24));

                	//get percent complete thus far
                	$p = round($r / 40 * 100);

			$ratio = 99;
                
			//get a ratio to use to multiply by total days since start
			if ($p != 0)
			{	
               	        	$ratio = floatval(100 / $p);
			}

               	 	//get est days to complete from start date
                	$est_days_from_start = round($ratio * $diff_days);

                	$addto = $est_days_from_start - $diff_days;

                	$add_days = "+";
                	$add_days .= $addto;
                	$add_days .= " day";

                	$date = strtotime($add_days);
                	$estdate = date('M d, Y', $date);

                	$cut_date = strtotime("now"); 
                	$class_date = strtotime($estdate);
                	if ($cut_date > $class_date)
                	{
                       		echo '<td bgcolor="green">';
                        	echo $estdate;
                        	echo '</td>';
                	}
                	else //#ffe6e6
                	{
                        	echo '<td bgcolor="red">';
                        	echo $estdate;
                        	echo '</td>';
                	}
//END PRED DATE

//BEGIN CALC RAW GRADE NEW
			$raw_grade_new = calc_raw_grade_new($core_grades_id,$row,$result_e);

//END CALC RAW GRADE NEW


//BEGIN GRADE DATE
                	$r = $raw_grade_new - 60;

                	//get total days since start
                	$now = time(); // or your date as well
                	$start_date = strtotime("2017-09-10");
                	$datediff_seconds = $now - $start_date;
                	$diff_days = floor($datediff_seconds / (60 * 60 * 24));

               		//get percent complete thus far
                	$p = round($r / 40 * 100);

                	$ratio = 99;
                
                	//get a ratio to use to multiply by total days since start
                	if ($p != 0)
                	{
                        	$ratio = floatval(100 / $p);
                	}

                	//get est days to complete from start date
                	$est_days_from_start = round($ratio * $diff_days);

                	$addto = $est_days_from_start - $diff_days;

     	           	$add_days = "+";
                	$add_days .= $addto;
                	$add_days .= " day";

                	$date = strtotime($add_days);
                	$estdate = date('M d, Y', $date);

                	$cut_date = strtotime("2018-06-01");
                	$class_date = strtotime($estdate);
                	if ($cut_date > $class_date)
                	{
                       		echo '<td bgcolor="green">';
                        	echo $estdate;
                        	echo '</td>';
                	}
                	else
                	{
                        	echo '<td bgcolor="red">';
                        	echo $estdate;
                        	echo '</td>';
                	}


//END GRADE DATE

			$total_raw_grade += $raw_grade;

                	echo '<td>';
                	echo $score;
                	echo '</td>';
                	echo '<td>';
                	echo $core_standards_id;
                	echo '</td>';
		}	
		for ($e = 0; $e < $numrows_e; $e++)
		{
                	$row_e = pg_fetch_array($result_e, $e);
			//100 90 80
			if ($row[intval($e + 5)] >= $row_e[6])    
			{
 				echo '<td bgcolor="green">';
				echo $row[intval($e + 5)];
                		echo '';
                		echo '</td>';
			}
			else if ($row[intval($e + 5)] >= $row_e[7])    
			{
 				echo '<td bgcolor="lime">';
				echo $row[intval($e + 5)];
                		echo '';
                		echo '</td>';
			}
			else if ($row[intval($e + 5)] >= $row_e[8])    
			{
 				echo '<td bgcolor="yellow">';
				echo $row[intval($e + 5)];
                		echo '';
                		echo '</td>';
			}
			else if ($row[intval($e + 5)] >= $row_e[9])    
			{
 				echo '<td bgcolor="orange">';
				echo $row[intval($e + 5)];
                		echo '';
                		echo '</td>';
			}
			else if ($row[intval($e + 5)] >= $row_e[10])    
			{
 				echo '<td bgcolor="pink">';
				echo $row[intval($e + 5)];
                		echo '';
                		echo '</td>';
			}
			else     
			{
 				echo '<td bgcolor="red">';
				echo $row[intval($e + 5)];
                		echo '';
                		echo '</td>';
			}
		}  
        }

        pg_free_result($result);
        echo '</table>';
		
	if ($extras_flag == "extras")
	{
		$avg = round($total_raw_grade / $i);
		$tmp = $avg - 60;
		$pct = $tmp / 40;

		$avg_txt = 'PERCENT COMPLETE: %';
		$pct = $pct * 100;
		$avg_txt .= $pct; 
		$avg_txt .= '   ';
		$avg_txt .= 'CLASS AVERAGE GRADE: %';
		$avg_txt .= $avg;
		echo $avg_txt;
	}
}
?>

</body>
</html>
