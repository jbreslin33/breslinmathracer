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
$nick_name_array = array();
$room_array = array();
$grade_array = array();
$average_grade_array = array();
$percent_complete_array = array();
$raw_grade_array = array();
$number_of_students_array = array();
$percent_passed_grade_level_array = array();
$percent_passed_add_sub_array = array(); //0,1,2
$percent_passed_tables_array = array(); //0,1,2

$nick_name_array[] = "Savages";
$nick_name_array[] = "Destroyers";
$nick_name_array[] = "Beast Modes";
$nick_name_array[] = "Big Kids";
$nick_name_array[] = "Carson Wentzes";
$nick_name_array[] = "Masterminds";
$nick_name_array[] = "Chicken Wings";
$nick_name_array[] = "Angry Babies";
$nick_name_array[] = "Newbies";
$nick_name_array[] = "The Tenderfoots";
$nick_name_array[] = "Fledglings";
$nick_name_array[] = "Little Kids";
$nick_name_array[] = "Neophytes";
$nick_name_array[] = "Trainees";
$nick_name_array[] = "Novices";
$nick_name_array[] = "Recruits";
$nick_name_array[] = "Lovable Losers";
$nick_name_array[] = "Freshman";
$nick_name_array[] = "Babes";
$nick_name_array[] = "Tyros";
$nick_name_array[] = "Rookies";
$nick_name_array[] = "Least Modes";
$nick_name_array[] = "Greenhorns";
$nick_name_array[] = "Donald Trump's Haircuts";
$nick_name_array[] = "Hillary Clinton's Emails";
$nick_name_array[] = "Abecedarians";
 

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
	$total_passed_grade_level = 0;
	$total_add_sub = 0;
	$total_tables = 0;

	$x = 0;

	//calc results by looping students in rooms
        for($x = 0; $x < $num_students; $x++)
        {
		$passed_grade_level = true;
		$passed_add_sub = true;
		$passed_tables = true;

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
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7)
					{
						$passed_add_sub = false;	
					}
				}
                        }
                        for ($k = 21; $k < 23; $k++)
                        {

                                if ($row[$k] == 1)
                                {
                                        //$raw_grade += $bonus;
                                }
                                else
                                {
                                        //$passed_grade_level = false;
                                        if ($k == 21)
                                        {
                                                $passed_tables = false;
                                        }
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
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7 || $j == 8 || $j == 9)
					{
						$passed_add_sub = false;	
					}
				}
                        }
                        for ($k = 21; $k < 23; $k++)
                        {

                                if ($row[$k] == 1)
                                {
                                        //$raw_grade += $bonus;
                                }
                                else
                                {
                                        //$passed_grade_level = false;
                                        if ($k == 21)
                                        {
                                                $passed_tables = false;
                                        }
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
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7 || $j == 8 || $j == 9 || $j == 11)
					{
						$passed_add_sub = false;	
					}
				}
                        }
                       	for ($k = 21; $k < 23; $k++)
                        {
				
                                if ($row[$k] == 1)
                                {
                                        //$raw_grade += $bonus;
                                }
                                else
                                {
                                        //$passed_grade_level = false;
                                        if ($k == 21)
                                        {
                                                $passed_tables = false;
                                        }
                                }
                        }
                }
                
		else if ($core_grades_id == 5)
                {
                        $bonus = 2.2;
                        for ($j = 5; $j < 23; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7 || $j == 8 || $j == 9 || $j == 11)
					{
						$passed_add_sub = false;	
					}
					
					$passed_grade_level = false;	
					if ($j == 21)
					{
						$passed_tables = false;	
					}
				}
                        }
                }

                else if ($core_grades_id == 6)
                {
                        $bonus = 1.74;
                        for ($j = 5; $j < 28; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7 || $j == 8 || $j == 9 || $j == 11)
					{
						$passed_add_sub = false;	
					}
					if ($j == 21)
					{
						$passed_tables = false;	
					}
				}
                        }
                }


		else if ($core_grades_id == 7)
		{
			$bonus = 1.43;
			for ($j = 5; $j < 33; $j++)
			{
               			if ($row[$j] == 1)
				{
					$raw_grade += $bonus; 
				}			 
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7 || $j == 8 || $j == 9 || $j == 11)
					{
						$passed_add_sub = false;	
					}
					if ($j == 21)
					{
						$passed_tables = false;	
					}
				}
			}
		}

		else if ($core_grades_id == 8)
		{
                        $bonus = 1.22;
                        for ($j = 5; $j < 38; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7 || $j == 8 || $j == 9 || $j == 11)
					{
						$passed_add_sub = false;	
					}
					if ($j == 21)
					{
						$passed_tables = false;	
					}
				}
                        }
		}

                else if ($core_grades_id == 9)
                {
                        $bonus = 0.94;
                        for ($j = 5; $j < 38; $j++)
                        {
                                if ($row[$j] == 1)
                                {
                                        $raw_grade += $bonus;
                                }
				else
				{
					$passed_grade_level = false;	
					if ($j == 6 || $j == 7 || $j == 8 || $j == 9 || $j == 11)
					{
						$passed_add_sub = false;	
					}
					if ($j == 21)
					{
						$passed_tables = false;	
					}
				}
                        }
                }
		else 
		{
		}
		
		$tmp_grade = $core_grades_id;
		$total_raw_grade += $raw_grade; //add student raw grade to class raw grade

		if ($passed_grade_level == true)
		{
			$total_passed_grade_level++;	
		}
		if ($passed_add_sub == true)
		{
			$total_add_sub++;	
		}
		if ($passed_tables == true)
		{
			$total_tables++;	
		}

        } //loop students

	if ($num_students > 0 && $num_students < 34)
	{
		if ($rooms_row[1] != 2)
		{
			$number_of_students_array[] = $num_students;
			$raw_grade_array[] = $total_raw_grade; //stick class raw grade in array
			$rank_array[] = $i;
			$room_array[] = $rooms_row[1];
			$grade_array[] = $tmp_grade -1;
			$average_grade_array[] = round($total_raw_grade / $num_students);

			$tmppct = ($total_raw_grade / $num_students) - 60;
			$percent_complete_array[] = round($tmppct / 40 * 100);

			$pct = ($total_passed_grade_level / $num_students) * 100;
			$percent_passed_grade_level_array[] = round($pct); 
			
			$pct_add = ($total_add_sub / $num_students) * 100;
			$percent_passed_add_sub_array[] = round($pct_add); 
			
			$pct_tab = ($total_tables / $num_students) * 100;
			$percent_passed_tables_array[] = round($pct_tab); 
		}
	}

        pg_free_result($result);
} //loop rooms

//bubble sort
//start by looping g to find 1st place then 2nd etc
//error_log(sizeof($rank_array));
for ($g = 0; $g < intval(sizeof($rank_array)); $g++)
{
	$highest_element = '';
	$highest_number = 0;
	$h = 0;
	for ($h = $g; $h < intval(sizeof($rank_array)); $h++)
	{
		if (intval($percent_complete_array[$h]) > intval($highest_number))
		{
			$highest_number = $percent_complete_array[$h];
			$highest_element = $h;
		}
	}
	//error_log($highest_number);
	//error_log($highest_element);

	//copy current place your working on to tmp cause its getting overwritten 
 	$number_of_students_tmp = $number_of_students_array[$g];
        $raw_grade_tmp = $raw_grade_array[$g]; 
        $rank_tmp = $rank_array[$g];
        $room_tmp = $room_array[$g];
        $grade_tmp = $grade_array[$g];
        $average_grade_tmp = $average_grade_array[$g];
        $percent_complete_tmp = $percent_complete_array[$g];
        $percent_passed_grade_level_tmp = $percent_passed_grade_level_array[$g];
        $percent_passed_add_sub_tmp = $percent_passed_add_sub_array[$g];
        $percent_passed_tables_tmp = $percent_passed_tables_array[$g];
	
	//overwrite place we are working on
	$number_of_students[$g] = $number_of_students_array[$highest_element];	
	$raw_grade_array[$g] = $raw_grade_array[$highest_element];
	$rank_array[$g] = $rank_array[$highest_element];
	$room_array[$g] = $room_array[$highest_element];
	$grade_array[$g] = $grade_array[$highest_element];
	$average_grade_array[$g] = $average_grade_array[$highest_element];
	$percent_complete_array[$g] = $percent_complete_array[$highest_element];
	$percent_passed_grade_level_array[$g] = $percent_passed_grade_level_array[$highest_element];
	$percent_passed_add_sub_array[$g] = $percent_passed_add_sub_array[$highest_element];
	$percent_passed_tables_array[$g] = $percent_passed_tables_array[$highest_element];
       
	//overwrite were we got place from  with tmp
	$number_of_students[$highest_element] = $number_of_students_tmp;
        $raw_grade_array[$highest_element] = $raw_grade_tmp;
        $rank_array[$highest_element] = $rank_tmp;
        $room_array[$highest_element] = $room_tmp;
        $grade_array[$highest_element] = $grade_tmp;
        $average_grade_array[$highest_element] = $average_grade_tmp;
        $percent_complete_array[$highest_element] = $percent_complete_tmp;
        $percent_passed_grade_level_array[$highest_element] = $percent_passed_grade_level_tmp;
        $percent_passed_add_sub_array[$highest_element] = $percent_passed_add_sub_tmp;
        $percent_passed_tables_array[$highest_element] = $percent_passed_tables_tmp;
}

//show results
	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td>Rank';
        echo '</td>';
        echo '<td>Room';
        echo '</td>';
        echo '<td>Handle';
        echo '</td>';
        echo '<td>Grade';
        echo '</td>';
        echo '<td>% Complete';
        echo '</td>';
        echo '<td>% @ grade Level';
        echo '</td>';
        echo '<td>% fluent single digit add/sub';
        echo '</td>';
        echo '<td>% fluent times tables';
        echo '</td>';
for($i = 0; $i < sizeof($rank_array); $i++)
{
        $row = pg_fetch_array($room_result, $i);
	
	if ($number_of_students_array[$i] > 0 && $number_of_students_array[$i] < 34)
	{
		if ($rooms_row[1] == 2)
		{
		}
		else
		{
		echo '<tr>';
		echo '<td>';
        	echo $i + 1;
        	echo '</td>';
        	echo '<td>';
        	echo $room_array[$i];
        	echo '</td>';
        	echo '<td>';
        	echo $nick_name_array[$i];
        	echo '</td>';
        	echo '<td>';
        	echo $grade_array[$i];
        	echo '</td>';
                echo '<td>';
                echo $percent_complete_array[$i];
                echo '</td>';
                echo '<td>';
                echo $percent_passed_grade_level_array[$i];
                echo '</td>';
                echo '<td>';
                echo $percent_passed_add_sub_array[$i];
                echo '</td>';
                echo '<td>';
                echo $percent_passed_tables_array[$i];
                echo '</td>';
		echo '</tr>';
		}
	}
}
        echo '</table>';
?>

</body>
</html>
