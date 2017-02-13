<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>SCHOOL MILESTONES</title>
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
$query = "select id, name from rooms where ";
$query .= "name = '4'"; 
$query .= " OR name = '5'"; 
$query .= " OR name = '21'"; 
$query .= " OR name = '22'"; 
$query .= " OR name = '23'"; 
$query .= " OR name = '24'"; 
$query .= " OR name = '25'"; 
$query .= " OR name = '28'"; 
$query .= " OR name = '31'"; 
$query .= " OR name = '32'"; 
$query .= " OR name = '33'"; 
$query .= " OR name = '34'"; 
$query .= " OR name = '35'"; 
$query .= " OR name = '36'"; 
$query .= " OR name = '37'"; 
$query .= " OR name = '39'"; 
//$query .= " OR name = 'AM2'"; 
$query .= " OR name = 'AM7'"; 
$query .= " OR name = 'RR3'"; 
$query .= " OR name = 'RR4'"; 
$query .= " OR name = 'RR5'"; 
$query .= " OR name = 'RR6'"; 
$query .= " OR name = 'RR7'"; 
$query .= " OR name = 'RR8'"; 
$query .= " order by name asc;";
$room_result = pg_query($conn,$query);
$num_rooms = pg_numrows($room_result);

//arrays
$rank_array = array();
$nick_name_array = array();
$room_array = array();
$room_id_array = array();
$grade_array = array();
$average_grade_array = array();

$percent_complete_array = array();
$percent_complete_new_array = array();
$est_percent_complete_array = array();
$est_percent_complete_new_array = array();

$raw_grade_array = array();
$raw_grade_new_array = array();
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
$nick_name_array[] = "Donald Trumps Haircuts";
$nick_name_array[] = "Hillary Clintons Emails";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";
$nick_name_array[] = "Abecedarians";

$bonus_array[] = 0; //
$bonus_array[] = 0; //k
$bonus_array[] = 13.4; //1
$bonus_array[] = 6.7; //2
$bonus_array[] = 5; //3
$bonus_array[] = 2.3; //4
$bonus_array[] = 1.74; //5
$bonus_array[] = 1.43; //6
$bonus_array[] = 1.22; //7
$bonus_array[] = 1.22; //8

$bonus_new_array[] = 0;
$bonus_new_array[] = 0;
$bonus_new_array[] = 6.7;
$bonus_new_array[] = 5;
$bonus_new_array[] = 2.3;
$bonus_new_array[] = 1.74;
$bonus_new_array[] = 1.43;
$bonus_new_array[] = 1.22; 
$bonus_new_array[] = 1.22;
$bonus_new_array[] = 1.22;

$pre_end[] = 0; //0
$pre_end[] = 0; //1
$pre_end[] = 8; //2
$pre_end[] = 11; //3
$pre_end[] = 13; //4
$pre_end[] = 23; //5
$pre_end[] = 28; //6
$pre_end[] = 33; //7
$pre_end[] = 38; //8
$pre_end[] = 38; //9

$new_end[] = 0;
$new_end[] = 0;
$new_end[] = 11;
$new_end[] = 13;
$new_end[] = 23;
$new_end[] = 28;
$new_end[] = 33;
$new_end[] = 38;
$new_end[] = 38;
$new_end[] = 38;

function check_add_sub($core_grades_id,&$row)
{
	if ($core_grades_id == NULL)
	{
		return false;
	}
	global $pre_end;
	
 	for ($j = 5; $j < $pre_end[$core_grades_id]; $j++)
	{
		if ($row[6] == 1 && $row[7] == 1 && $row[8] == 1 && $row[9] == 1 && $row[11])
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}


function calc_raw_grade($core_grades_id,&$row)
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
       		if ($row[$j] == 1)
               	{
               		$rg += $bonus_array[$core_grades_id];
               	}
        }
	return $rg;
}

function check_passed_grade_level($core_grades_id,&$row)
{

	if ($core_grades_id == NULL)
	{
		return false;
	}
	global $pre_end;
	$passed_grade_level = true;	
//33
	for ($j = 5; $j < $pre_end[$core_grades_id]; $j++)
        {
                if ($row[$j] == 0)
		{	
			if ($j != 23)
			{
				$passed_grade_level = false;	
			}
                }
        }

	if ($core_grades_id == 7)
	{
		if ($passed_grade_level == true)
		{
			$name = $row[1];
			$name .= " ";
			$name .= $row[2];
			$name .= " passed";
			//error_log($name);	
		}
	}

        return $passed_grade_level;
}

function check_passed_tables($core_grades_id,&$row)
{
	if ($core_grades_id == NULL)
	{
		return false;
	}
        $passed_tables = true;
	//easy just check izzy
        if ($row[21] == 0) 
        {
                $passed_tables = false;
        }
        return $passed_tables;
}

function check_passed_grade_level_new($core_grades_id,&$row)
{
	if ($core_grades_id == NULL)
	{
		return false;
	}
	global $new_end;
        $passed_grade_level_new = true;
              
	for ($j = 5; $j < $new_end[$core_grades_id]; $j++)
        {
        	if ($row[$j] == 0)
		{
                	$passed_grade_level_new = false;
                }
	}
        return $passed_grade_level_new;
}

function calc_raw_grade_new($core_grades_id,&$row)
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
                if ($row[$j] == 1)
                {
                        $rg += $bonus_new_array[$core_grades_id];
                }
        }
        return $rg;
}

//m
        $query_m = "select distinct sub.id, sub.first_name, sub.last_name, sub.description, sub.progression, sub.room_id FROM ( select users.id, users.first_name, users.last_name, users.room_id, evaluations.description, evaluations.progression, evaluations.score_needed,  COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as incorrect, 
    COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) as correct   from evaluations_attempts join users on evaluations_attempts.user_id=users.id JOIN item_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id where evaluations_attempts.start_time > '2016-09-10 09:28:27.777635' AND evaluations_attempts.evaluations_id != 1 AND (";

	for($r = 0; $r < $num_rooms; $r++)
	{
        	$rooms_row = pg_fetch_array($room_result, $r);
		if ($r == 0)
		{
			$query_m .= " room_id = ";
		}
		else
		{
			$query_m .= " OR room_id = ";
		}
        	$query_m .= $rooms_row[0];
	}
        $query_m .= ") AND evaluations.progression > 0.9 group by evaluations_attempts, evaluations.progression, evaluations.description, users.id, users.first_name, users.last_name, evaluations_attempts.start_time, evaluations.score_needed) sub WHERE sub.incorrect = 0 AND sub.correct >= sub.score_needed order by sub.room_id, sub.last_name, sub.progression;";
        $result_m = pg_query($conn,$query_m);
        $numrows_m = pg_numrows($result_m);
//end ms

	//BEGIN TODAY
	$query_total = "select users.room_id, count(*) from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN users ON users.id=evaluations_attempts.user_id AND item_attempts.start_time > CURRENT_DATE GROUP BY users.room_id;";

        $result_total = pg_query($conn,$query_total);
        $numrows_total = pg_numrows($result_total);
	//END TODAY


//calc results by looping rooms
for($i = 0; $i < $num_rooms; $i++)
{
        $rooms_row = pg_fetch_array($room_result, $i);

        $last_activity = '';
        $tmp_grade = '';

        $query = "select id, first_name, last_name, core_standards_id, score, core_grades_id from users where banned_id = 0 and school_id = ";
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
	$total_raw_grade_new = 0;
	$total_passed_grade_level = 0;
	$total_passed_grade_level_new = 0;
	$total_add_sub = 0;
	$total_tables = 0;

	$x = 0;

	//calc results by looping students in rooms
        for($x = 0; $x < $num_students; $x++)
        {
		$passed_grade_level = true;
		$passed_grade_level_new = true;
		$passed_add_sub = true;
		$passed_tables = true;

                $row = pg_fetch_array($result, $x);

                $id = $row[0];
                $core_grades_id = $row[5];
                $core_standards_id = $row[3];

                for($r = 5; $r < 38; $r++)
                {
                        $row[] = 0;
                }

                $k_cc = 0;
                $k_oa_a_4 = 0;
                $k_oa_a_5 = 0;

                $g1_oa_b_3 = 0;
                $g1_oa_c_6 = 0;
                $g1_nbt = 0;

                $g2_oa_b_2 = 0;
                $g2_nbt = 0;

                $g5 = 0;
                $g2 = 0;
                $g4 = 0;
                $g8 = 0;
                $g3 = 0;
                $g6 = 0;
                $g9 = 0;
                $g7 = 0;
                $g3_oa_c_7 = 0;
                $g3_nbt = 0;

                $g4_oa_b_4 = 0;
                $g4_nbt_b_4 = 0;
                $g4_nbt_b_5 = 0;
                $g4_nbt_b_6 = 0;
                $g4_nf_b_3_c = 0;

                $g5_oa_a_1 = 0;
                $g5_nbt_b_5 = 0;
                $g5_nbt_b_6 = 0;
                $g5_nbt_b_7 = 0;
                $g5_nf_a_1 = 0;

                $g6_rp = 0;
                $g6_ns = 0;
                $g6_ee = 0;
                $g6_g = 0;
                $g6_sp = 0;

//fill in row to be used everywhere
		for($m = 0; $m < $numrows_m; $m++)
		{
                	$row_m = pg_fetch_array($result_m, $m);

			if ($id == $row_m[0] && $row_m[3] == 'k_cc')
			{
				$k_cc = 1;	
				$row[5] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'k_oa_a_4')
			{
				$k_oa_a_4 = 1;	
				$row[6] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'k_oa_a_5')
			{
				$k_oa_a_5 = 1;	
				$row[7] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '1_oa_b_3')
			{
				$g1_oa_b_3 = 1;	
				$row[8] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '1_oa_c_6')
			{
				$g1_oa_c_6 = 1;	
				$row[9] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '1_nbt')
			{
				$g1_nbt = 1;	
				$row[10] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '2_oa_b_2')
			{
				$g2_oa_b_2 = 1;	
				$row[11] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '2_nbt')
			{
				$g2_nbt = 1;	
				$row[12] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == 'timestables_5')
			{
				$g5 = 1;	
				$row[13] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_2')
			{
				$g2 = 1;	
				$row[14] = 1;
			}	
			if ($id == $row_m[0] && $row_m[3] == 'timestables_4')
			{
				$g4 = 1;	
				$row[15] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_8')
			{
				$g8 = 1;	
				$row[16] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_3')
			{
				$g3 = 1;	
				$row[17] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_6')
			{
				$g6 = 1;	
				$row[18] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_9')
			{
				$g9 = 1;	
				$row[19] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_7')
			{
				$g7 = 1;	
				$row[20] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '3_oa_c_7')
			{
				$g3_oa_c_7 = 1;	
				$row[21] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '3_nbt')
			{
				$g3_nbt = 1;	
				$row[22] = 1;
			}
		
			//skip for grade level checks....	
			if ($id == $row_m[0] && $row_m[3] == '4_oa_b_4')
			{
				$g4_oa_b_4 = 1;	
				$row[23] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nbt_b_4')
			{
				$g4_nbt_b_4 = 1;	
				$row[24] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nbt_b_5')
			{
				$g4_nbt_b_5 = 1;	
				$row[25] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nbt_b_6')
			{
				$g4_nbt_b_6 = 1;	
				$row[26] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nf_b_3_c')
			{
				$g4_nf_b_3_c = 1;	
				$row[27] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '5_oa_a_1')
			{
				$g5_oa_a_1 = 1;	
				$row[28] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nbt_b_5')
			{
				$g5_nbt_b_5 = 1;	
				$row[29] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nbt_b_6')
			{
				$g5_nbt_b_6 = 1;	
				$row[30] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nbt_b_7')
			{
				$g5_nbt_b_7 = 1;	
				$row[31] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nf_a_1')
			{
				$g5_nf_a_1 = 1;	
				$row[32] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '6_rp')
			{
				$g6_rp = 1;	
				$row[33] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_ns')
			{
				$g6_ns = 1;	
				$row[34] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_ee')
			{
				$g6_ee = 1;	
				$row[35] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_g')
			{
				$g6_g = 1;	
				$row[36] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_sp')
			{
				$g6_sp = 1;	
				$row[37] = 1;
			}
		}
//end fill in row



		$raw_grade = 60;
		$raw_grade_new = 60;

		$passed_add_sub = check_add_sub($core_grades_id,$row);

		$raw_grade = calc_raw_grade($core_grades_id,$row);

		$passed_grade_level = check_passed_grade_level($core_grades_id,$row);
		$passed_tables = check_passed_tables($core_grades_id,$row);


		$raw_grade_new = calc_raw_grade_new($core_grades_id,$row);
		$passed_grade_level_new = check_passed_grade_level_new($core_grades_id,$row);

		$tmp_grade = $core_grades_id;
		$total_raw_grade += $raw_grade; //add student raw grade to class raw grade
		$total_raw_grade_new += $raw_grade_new; //add student raw grade to class raw grade

		if ($passed_grade_level == true)
		{
			$total_passed_grade_level++;	
		}
		if ($passed_grade_level_new == true)
		{
			$total_passed_grade_level_new++;	
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

	$roomtxt = "room:";
	$roomtxt .= $rooms_row[1];

	$number_of_students_array[] = $num_students;
	$raw_grade_array[] = $total_raw_grade; //stick class raw grade in array
	$raw_grade_new_array[] = $total_raw_grade_new; //stick class raw grade in array
	$rank_array[] = $i;
	$room_array[] = $rooms_row[1];
	$room_id_array[] = $rooms_row[0];
	$grade_array[] = $tmp_grade -1;
	if ($num_students != 0)
	{
		$average_grade_array[] = round($total_raw_grade / $num_students);
	}
	else
	{
		$average_grade_array[] = 0;
	}
		
	//OLD
	if ($num_students != 0)
	{
		$tmppct = ($total_raw_grade / $num_students) - 60;
	}
	else
	{
		$tmppct = 0;
	}
	$percent_complete_array[] = round($tmppct / 40 * 100);
		
	//get total days since start
	$now = time(); // or your date as well
	$start_date = strtotime("2016-09-12");
	$datediff_seconds = $now - $start_date;
	$diff_days = floor($datediff_seconds / (60 * 60 * 24));

	//get percent complete thus far
	$p = round($tmppct / 40 * 100);

	$ratio = 0;
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

	$txt = $estdate; 
	$est_percent_complete_array[] = $txt;
			
	if ($num_students != 0)
	{
		$pct = ($total_passed_grade_level / $num_students) * 100;
	}
	else
	{
		$pct = 0;
	}
	$percent_passed_grade_level_array[] = round($pct); 

	//new
			
	if ($num_students != 0)
	{
		$tmppctnew = ($total_raw_grade_new / $num_students) - 60;
	}
	else
	{
		$tmppctnew = 0;	
	}
	$percent_complete_new_array[] = round($tmppctnew / 40 * 100);

 	//get total days since start
        $now = time(); // or your date as well
        $start_date = strtotime("2016-09-12");
        $datediff_seconds = $now - $start_date;
        $diff_days = floor($datediff_seconds / (60 * 60 * 24));

	//get percent complete thus far
	$p = round($tmppctnew / 40 * 100);
			
	//get a ratio to use to multiply by total days since start
	$ratio = 0;
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
			
	$txt = $estdate; 
	$est_percent_complete_new_array[] = $txt;

	if ($num_students != 0)
	{
		$pctnew = ($total_passed_grade_level_new / $num_students) * 100;
	}
	else
	{
		$pctnew = 0;
	}
	$percent_passed_grade_level_new_array[] = round($pctnew); 

	//themes
	if ($num_students != 0)
	{
		$pct_add = ($total_add_sub / $num_students) * 100;
	}
	else
	{
		$pct_add = 0;
	}
	$percent_passed_add_sub_array[] = round($pct_add); 
			
	if ($num_students != 0)
	{
		$pct_tab = ($total_tables / $num_students) * 100;
	}
	else
	{
		$pct_tab = 0;
	}
	$percent_passed_tables_array[] = round($pct_tab); 

        pg_free_result($result);
} //loop rooms

//bubble sort
//start by looping g to find 1st place then 2nd etc
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

	//copy current place your working on to tmp cause its getting overwritten 
 	$number_of_students_tmp = $number_of_students_array[$g];
        $raw_grade_tmp = $raw_grade_array[$g]; 
        $rank_tmp = $rank_array[$g];
        $room_tmp = $room_array[$g];
        $room_id_tmp = $room_id_array[$g];
        $grade_tmp = $grade_array[$g];
        $average_grade_tmp = $average_grade_array[$g];
        $percent_complete_tmp = $percent_complete_array[$g];
        $est_percent_complete_tmp = $est_percent_complete_array[$g];
        $est_percent_complete_new_tmp = $est_percent_complete_new_array[$g];
        $percent_complete_new_tmp = $percent_complete_new_array[$g];
        $percent_passed_grade_level_tmp = $percent_passed_grade_level_array[$g];
        $percent_passed_grade_level_new_tmp = $percent_passed_grade_level_new_array[$g];
        $percent_passed_add_sub_tmp = $percent_passed_add_sub_array[$g];
        $percent_passed_tables_tmp = $percent_passed_tables_array[$g];
	
	//overwrite place we are working on
	$txt = "g:";
	$txt .= $g;
	$txt .= " highest_element:";
	$txt .= $highest_element;
	$txt .= " sizeOfRankArray:";
	$txt .= intval(sizeof($rank_array));

	$number_of_students[$g] = $number_of_students_array[$highest_element];	
	$raw_grade_array[$g] = $raw_grade_array[$highest_element];
	$rank_array[$g] = $rank_array[$highest_element];
	$room_array[$g] = $room_array[$highest_element];
	$room_id_array[$g] = $room_id_array[$highest_element];
	$grade_array[$g] = $grade_array[$highest_element];
	$average_grade_array[$g] = $average_grade_array[$highest_element];
	$percent_complete_array[$g] = $percent_complete_array[$highest_element];
	$est_percent_complete_array[$g] = $est_percent_complete_array[$highest_element];
	$est_percent_complete_new_array[$g] = $est_percent_complete_new_array[$highest_element];
	$percent_complete_new_array[$g] = $percent_complete_new_array[$highest_element];
	$percent_passed_grade_level_array[$g] = $percent_passed_grade_level_array[$highest_element];
	$percent_passed_grade_level_new_array[$g] = $percent_passed_grade_level_new_array[$highest_element];
	$percent_passed_add_sub_array[$g] = $percent_passed_add_sub_array[$highest_element];
	$percent_passed_tables_array[$g] = $percent_passed_tables_array[$highest_element];
       
	//overwrite were we got place from  with tmp
	$number_of_students[$highest_element] = $number_of_students_tmp;
        $raw_grade_array[$highest_element] = $raw_grade_tmp;
        $rank_array[$highest_element] = $rank_tmp;
        $room_array[$highest_element] = $room_tmp;
        $room_id_array[$highest_element] = $room_id_tmp;
        $grade_array[$highest_element] = $grade_tmp;
        $average_grade_array[$highest_element] = $average_grade_tmp;
        $percent_complete_array[$highest_element] = $percent_complete_tmp;
        $est_percent_complete_array[$highest_element] = $est_percent_complete_tmp;
        $est_percent_complete_new_array[$highest_element] = $est_percent_complete_new_tmp;
        $percent_complete_new_array[$highest_element] = $percent_complete_new_tmp;
        $percent_passed_grade_level_array[$highest_element] = $percent_passed_grade_level_tmp;
        $percent_passed_grade_level_new_array[$highest_element] = $percent_passed_grade_level_new_tmp;
        $percent_passed_add_sub_array[$highest_element] = $percent_passed_add_sub_tmp;
        $percent_passed_tables_array[$highest_element] = $percent_passed_tables_tmp;
}

//show results
	echo '<table border=\"1\">';
        echo '<tr>';

	echo '<th colspan="4" >INFO';
        echo '</th>';
	
	echo '<th colspan="3" >PRE GRADE LEVEL STATS';
        echo '</th>';
	
	echo '<th colspan="3" >GRADE LEVEL STATS';
        echo '</th>';
	
	echo '<th colspan="2" >THEMES';
        echo '</th>';
        
	echo '</tr>';



        echo '<tr>';
        echo '<td>Rank';
        echo '</td>';
        echo '<td>Room';
        echo '</td>';
        echo '<td>Handle';
        echo '</td>';
        echo '<td>Grade';
        echo '</td>';
        
	echo '<td>Today';
        echo '</td>';
       
 

        echo '<td>% Complete Pre-Grade level';
        echo '</td>';
        echo '<td>% @ pre-grade Level';
        echo '</td>';
        echo '<td>est complete pre-grade Level';
        echo '</td>';


        echo '<td>% Complete Grade level';
        echo '</td>';
        echo '<td>% @ grade Level';
        echo '</td>';
        echo '<td>est complete grade Level';
        echo '</td>';

        echo '<td>% fluent single digit add/sub';
        echo '</td>';
        echo '<td>% fluent times tables';
        echo '</td>';

        echo '</tr>';

for($i = 0; $i < sizeof($rank_array); $i++)
{
        $row = pg_fetch_array($room_result, $i);
	
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

	//BEGIN TODAY
        $today = 0;
	//error_log($numrows_total);
        for($t = 0; $t < $numrows_total; $t++)
        {
        	$row_total = pg_fetch_array($result_total, $t);
                if ($room_id_array[$i] == $row_total[0])
                {
                        $today = $row_total[1];
                }
        }
        echo '<td>';
        echo $today;
        echo '</td>';
	//END TODAY


        echo '<td>';
        echo $percent_complete_array[$i];
        echo '</td>';
        echo '<td>';
        echo $percent_passed_grade_level_array[$i];
        echo '</td>';

        $cut_date = strtotime("2016-12-22");
        $class_date = strtotime($est_percent_complete_array[$i]);
        if ($cut_date > $class_date)
	{	
               	echo '<td bgcolor="#99ffcc">';
               	echo $est_percent_complete_array[$i];
               	echo '</td>';
	} 
	else
	{
                echo '<td bgcolor="#ffb3d1">';
               	echo $est_percent_complete_array[$i];
              	echo '</td>';
	}

        echo '<td>';
        echo $percent_complete_new_array[$i];
        echo '</td>';
        echo '<td>';
        echo $percent_passed_grade_level_new_array[$i];
        echo '</td>';

        $cut_date = strtotime("2017-06-01");
        $class_date = strtotime($est_percent_complete_new_array[$i]);
        if ($cut_date > $class_date)
        {
        	echo '<td bgcolor="#99ffcc">';
                echo $est_percent_complete_new_array[$i];
                echo '</td>';
        }
        else
        {
                echo '<td bgcolor="#ffb3d1">';
               	echo $est_percent_complete_new_array[$i];
               	echo '</td>';
        }

        echo '<td>';
        echo $percent_passed_add_sub_array[$i];
        echo '</td>';
        echo '<td>';
        echo $percent_passed_tables_array[$i];
        echo '</td>';
	echo '</tr>';
}
        echo '</table>';
?>

</body>
</html>
