<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>MILESTONES</title>
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

echo "<br>";
?>

<p><b> School Milestones </p></b>

<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$room_result = pg_query($conn,$query);
$num_rooms = pg_numrows($room_result);


//arrays
$rank_array = array();
$room_array = array();
$grade_array = array();
$average_grade_array = array();
$percent_complete_array = array();
$raw_grade_array = array();
$number_of_students_array = array();

//calc results by looping rooms
for($i = 0; $i < $num_rooms; $i++)
{
        $rooms_row = pg_fetch_array($room_result, $i);


        $last_activity = '';
        $tmp_grade = '';

        $query = "select last_activity, first_name, last_name, core_standards_id, score, k_cc, k_oa_a_4, k_oa_a_5, g1_oa_b_3, g1_oa_c_6, g1_nbt, g2_oa_b_2, g2_nbt, alltimefive, alltimetwo, alltimefour, alltimeeight, alltimethree, alltimesix, alltimenine, alltimeseven, g3_oa_c_7, g3_nbt, g4_oa_b_4, g4_nbt_b_4, g4_nbt_b_5, g4_nbt_b_6, g4_nf_b_3_c, g5_oa_a_1, g5_nbt_b_5, g5_nbt_b_6, g5_nbt_b_7, g5_nf_a_1, g6_rp, g6_ns, g6_ee, g6_g, g6_sp, core_grades_id from users where banned_id = 0 and school_id = ";
        $query .= $_SESSION["school_id"];
	if ($rooms_row[0] != 0)
	{
		$query .= " AND room_id = ";
        	$query .= $rooms_row[0];
	}
        $query .= ";";
        $result = pg_query($conn,$query);
        $num_students = pg_numrows($result);

	
	$total_raw_grade = 0;

	$x = 0;

	//calc results by looping students in rooms
        for($x = 0; $x < $num_students; $x++)
        {
                $row = pg_fetch_array($result, $x);
                $last_activity = $row[0];
                $core_grades_id = $row[38];
                $core_standards_id = $row[3];
                $k_cc = $row[5];
                $k_oa_a_4 = $row[6];
                $k_oa_a_5 = $row[7];
                
		$g1_oa_b_3 = $row[8];
		$g1_oa_c_6 = $row[9];
		$g1_nbt = $row[10];
		
		$g2_oa_b_2 = $row[11];
		$g2_nbt = $row[12];
		
		$g5 = $row[13];
		$g2 = $row[14];
		$g4 = $row[15];
		$g8 = $row[16];
		$g3 = $row[17];
		$g6 = $row[18];
		$g9 = $row[19];
		$g7 = $row[20];
		$g3_oa_c_7 = $row[21];
		$g3_nbt = $row[22];
		
		$g4_oa_b_4 = $row[23];
		$g4_nbt_b_4 = $row[24];
		$g4_nbt_b_5 = $row[25];
		$g4_nbt_b_6 = $row[26];
		$g4_nf_b_3_c = $row[27];
		
		$g5_oa_a_1 = $row[28];
		$g5_nbt_b_5 = $row[29];
		$g5_nbt_b_6 = $row[30];
		$g5_nbt_b_7 = $row[31];
		$g5_nf_a_1 = $row[32];
		
		$g6_rp = $row[33];
		$g6_ns = $row[34];
		$g6_ee = $row[35];
		$g6_g = $row[36];
		$g6_sp = $row[37];
                
		$raw_grade = 60;

		//1st  thru k 
                if ($core_grades_id == 2)
                {
                        $bonus = 13.4;
                        for ($j = 5; $j < 8; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                }

		//2nd  thru 1st
                else if ($core_grades_id == 3)
                {
                        $bonus = 6.7;
                        for ($j = 5; $j < 11; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                }
//3rd thru 2nd
		else if ($core_grades_id == 4)
                {
                        $bonus = 5;
                        for ($j = 5; $j < 13; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                }
                
		else if ($core_grades_id == 5)
                {
                        $bonus = 4;
                        for ($j = 5; $j < 13; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                        for ($k = 21; $k < 23; $k++)
                        {
                                if ($row[$k] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                }

                else if ($core_grades_id == 6)
                {
                        $bonus = 2.7;
                        for ($j = 5; $j < 13; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                        for ($k = 21; $k < 28; $k++)
                        {
                                if ($row[$k] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                }


		else if ($core_grades_id == 7)
		{
			$bonus = 2;
			for ($j = 5; $j < 13; $j++)
			{
               			if ($row[$j] == 1)
				{
					$raw_grade += $bonus; 
				}			 
			}
			for ($k = 21; $k < 33; $k++)
			{
               			if ($row[$k] == 1)
				{
					$raw_grade += $bonus; 
				}			 
			}
		}

		else if ($core_grades_id == 8)
		{
                        $bonus = 1.6;
                        for ($j = 5; $j < 13; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                        for ($k = 21; $k < 38; $k++)
                        {
                                if ($row[$k] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
		}

                else if ($core_grades_id == 9)
                {
                        $bonus = 1.6;
                        for ($j = 5; $j < 13; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                        for ($k = 21; $k < 38; $k++)
                        {
                                if ($row[$k] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
                        }
                }
		else 
		{
		}
		
		$tmp_grade = $core_grades_id;
		$total_raw_grade += $raw_grade; //add student raw grade to class raw grade
        } //loop students
	if ($num_students > 5 && $num_students < 34)
	{
			if ($rooms_row[1] == 2)
			{
			}
			else
			{
			$number_of_students_array[] = $num_students;
			$raw_grade_array[] = $total_raw_grade; //stick class raw grade in array
			$rank_array[] = $i;
			$room_array[] = $rooms_row[1];
			$grade_array[] = $tmp_grade -1;
			$average_grade_array[] = round($total_raw_grade / $num_students);
			$tmppct = ($total_raw_grade / $num_students) - 60;
			$percent_complete_array[] = round($tmppct / 40 * 100);
			}
	}

        pg_free_result($result);
} //loop rooms

//bubble sort
//start by looping g to find 1st place then 2nd etc
for ($g = 0; $g < sizeof($rank_array); $g++)
{
	$highest_element = '';
	$highest_number = 0;
	$h = 0;
	for ($h = 0; $h < sizeof($rank_array); $h++)
	{
		if ($percent_complete_array[$h] > $highest_number)
		{
			$highest_number = $percent_complete_array[$h];
			$highest_element = $h;
		}
	}

	//copy current place your working on to tmp cause its getting overwritten 
 	$number_of_students_tmp = $number_of_students_array[$g];
        $raw_grade_tmp = $raw_grade_array[$g]; 
        $rank_tmp = $rank_array[$g];
        $room_tmp = $room_array[$g];
        $grade_tmp = $grade_array[$g];
        $average_grade_tmp = $average_grade_array[$g];
        $percent_complete_tmp = $percent_complete_array[$g];
	
	//overwrite place we are working on
/*
	$number_of_students[$g] = $number_of_students_array[$h];	
	$raw_grade_array[$g] = $raw_grade_array[$h];
	$rank_array[$g] = $rank_array[$h];
	$room_array[$g] = $room_array[$h];
	$grade_array[$g] = $grade_array[$h];
	$average_grade_array[$g] = $average_grade_array[$h];
	$percent_complete_array[$g] = $percent_complete_array[$h];
       
	//overwrite were we got place from  with tmp
	$number_of_students[$h] = $number_of_students_tmp;
        $raw_grade_array[$h] = $raw_grade_tmp;
        $rank_array[$h] = $rank_tmp;
        $room_array[$h] = $room_tmp;
        $grade_array[$h] = $grade_tmp;
        $average_grade_array[$h] = $average_grade_tmp;
        $percent_complete_array[$h] = $percent_complete_tmp;
*/
}

//show results
	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td>Rank';
        echo '</td>';
        echo '<td>Room';
        echo '</td>';
        echo '<td>Grade';
        echo '</td>';
        echo '<td>Average Grade';
        echo '</td>';
        echo '<td>Percent Complete';
        echo '</td>';
for($i = 0; $i < sizeof($rank_array); $i++)
{
        $row = pg_fetch_array($room_result, $i);
	
	if ($number_of_students_array[$i] > 5 && $number_of_students_array[$i] < 34)
	{
		if ($rooms_row[1] == 2)
		{
		}
		else
		{
		echo '<tr>';
		echo '<td>';
        	echo $rank_array[$i];
        	echo '</td>';
        	echo '<td>';
        	echo $room_array[$i];
        	echo '</td>';
        	echo '<td>';
        	echo $grade_array[$i];
        	echo '</td>';
                echo '<td>';
                echo $average_grade_array[$i];
                echo '</td>';
                echo '<td>';
                echo $percent_complete_array[$i];
                echo '</td>';
		echo '</tr>';
		}
	}
}
        echo '</table>';


/*
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
*/
?>

</body>
</html>
