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
else
{

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

$pre_end[] = 0;
$pre_end[] = 0;
$pre_end[] = 8;
$pre_end[] = 11;
$pre_end[] = 13;
$pre_end[] = 23;
$pre_end[] = 28;
$pre_end[] = 33;
$pre_end[] = 38;
$pre_end[] = 38;

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


?>

<p><b> My Class Milestones</p></b>

<p><b> Select Room: </p></b>

<form method="post" action="/web/reports/student/milestones_class.php">

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"Entire School\" </option>";

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
<script>
function loadAgain()
{
    	var y = document.getElementById("room_id").value;
	document.location.href = '/web/reports/student/milestones_class.php?room_id=' + y; 
}
</script>

<?php



if ($room_id == 99999)
{

}
else
{

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td>Rank';
        echo '</td>';
        echo '<td>First Name';
        echo '</td>';
        echo '<td>Last Name';
        echo '</td>';
        echo '<td>Grade';
        echo '</td>';
        echo '<td>Est complete pre-grade date';
        echo '</td>';
        echo '<td>Est complete grade date';
        echo '</td>';
        echo '<td>Score';
        echo '</td>';
        echo '<td>Standard';
        echo '</td>';
        echo '<td>k cc';
        echo '</td>';
        echo '<td>k oa a 4';
        echo '</td>';
        echo '<td>k oa a 5';
        echo '</td>';
        echo '<td>1 oa b 3';
        echo '</td>';
        //echo '<td>H<br>y<br>p<br>e<br>r<br>i<br>o<br>n<br><br> 1 oa c 6';
        echo '<td>1 oa c 6';
        
        echo '</td>';
        echo '<td>1 nbt';
        echo '</td>';
        echo '<td>2 oa b 2';
        echo '</td>';
        echo '<td>2 nbt';
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
	echo '<td>The Izzy 3 oa c 7';
        echo '</td>';
        echo '<td>3 nbt';
        echo '</td>';
        echo '<td>4 oa b 4';
        echo '</td>';
        echo '<td>4 nbt b 4';
        echo '</td>';
        echo '<td>4 nbt b 5';
        echo '</td>';
        echo '<td>4 nbt b 6';
        echo '</td>';
        echo '<td>4 nf b 3 c';
        echo '</td>';
        echo '<td>5 oa a 1';
        echo '</td>';
        echo '<td>5 nbt b 5';
        echo '</td>';
        echo '<td>5 nbt b 6';
        echo '</td>';
        echo '<td>5 nbt b 7';
        echo '</td>';
        echo '<td>5 nf a 1';
        echo '</td>';
        echo '<td>6 rp';
        echo '</td>';
        echo '<td>6 ns';
        echo '</td>';
        echo '<td>6 ee';
        echo '</td>';
        echo '<td>6 g';
        echo '</td>';
        echo '<td>6 sp';
        echo '</td>';
        echo '</tr>';

        $id = '';
        $firstName = '';
        $lastName = '';
        $score = '';
//ms
	
	$query_m = "select distinct sub.id, sub.first_name, sub.last_name, sub.description, sub.progression, sub.case, sub.start_time FROM ( select users.id, users.first_name, users.last_name, evaluations.description, evaluations.progression, evaluations_attempts.start_time, case when count(*) = evaluations.score_needed THEN 1 ELSE 0 END from evaluations_attempts join users on evaluations_attempts.user_id=users.id JOIN item_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id where evaluations_attempts.start_time > '2016-09-10 09:28:27.777635' AND evaluations_attempts.evaluations_id != 1 "; 

	//if ($room_id != 0)
	//{
		$query_m .= " AND users.room_id = ";
        	//$query_m .= $room_id;
        	$query_m .= $_SESSION["room_id"];
	//}
	$query_m .= " AND item_attempts.transaction_code = 1 AND evaluations.progression > 0.9 group by evaluations_attempts, evaluations.progression, evaluations.description, users.id, users.first_name, users.last_name, evaluations_attempts.start_time, evaluations.score_needed) sub WHERE sub.case = 1 order by sub.last_name, sub.progression;";
        $result_m = pg_query($conn,$query_m);
        $numrows_m = pg_numrows($result_m);

	error_log($query_m);

//users
        $query = "select id, first_name, last_name, core_standards_id, score, core_grades_id from users where banned_id = 0 and school_id = ";
        $query .= $_SESSION["school_id"];
	//if ($room_id != 0)
	//{
		$query .= " AND room_id = ";
        	//$query .= $room_id;
        	$query .= $_SESSION["room_id"];
	//}
        $query .= " order by score desc;";
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);
	error_log($query);

	
	$total_raw_grade = 0;

	$i = 0;

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $id = $row[0];
                $firstName = $row[1];
                $lastName = $row[2];
                $core_standards_id = $row[3];
                $score = $row[4];
                $core_grades_id = $row[5];
		
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
        	
		for($m = 0; $m < $numrows_m; $m++)
		{
                	$row_m = pg_fetch_array($result_m, $m);

			if ($id == $row_m[0] && $row_m[3] == 'k_cc' && $row_m[5] == 1)
			{
				$k_cc = 1;	
				$row[5] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'k_oa_a_4' && $row_m[5] == 1)
			{
				$k_oa_a_4 = 1;	
				$row[6] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'k_oa_a_5' && $row_m[5] == 1)
			{
				$k_oa_a_5 = 1;	
				$row[7] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '1_oa_b_3' && $row_m[5] == 1)
			{
				$g1_oa_b_3 = 1;	
				$row[8] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '1_oa_c_6' && $row_m[5] == 1)
			{
				$g1_oa_c_6 = 1;	
				$row[9] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '1_nbt' && $row_m[5] == 1)
			{
				$g1_nbt = 1;	
				$row[10] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '2_oa_b_2' && $row_m[5] == 1)
			{
				$g2_oa_b_2 = 1;	
				$row[11] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '2_nbt' && $row_m[5] == 1)
			{
				$g2_nbt = 1;	
				$row[12] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == 'timestables_5' && $row_m[5] == 1)
			{
				$g5 = 1;	
				$row[13] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_2' && $row_m[5] == 1)
			{
				$g2 = 1;	
				$row[14] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_4' && $row_m[5] == 1)
			{
				$g4 = 1;	
				$row[15] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_8' && $row_m[5] == 1)
			{
				$g8 = 1;	
				$row[16] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_3' && $row_m[5] == 1)
			{
				$g3 = 1;	
				$row[17] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_6' && $row_m[5] == 1)
			{
				$g6 = 1;	
				$row[18] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_9' && $row_m[5] == 1)
			{
				$g9 = 1;	
				$row[19] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == 'timestables_7' && $row_m[5] == 1)
			{
				$g7 = 1;	
				$row[20] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '3_oa_c_7' && $row_m[5] == 1)
			{
				$g3_oa_c_7 = 1;	
				$row[21] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '3_nbt' && $row_m[5] == 1)
			{
				$g3_nbt = 1;	
				$row[22] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '4_oa_b_4' && $row_m[5] == 1)
			{
				$g4_oa_b_4 = 1;	
				$row[23] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nbt_b_4' && $row_m[5] == 1)
			{
				$g4_nbt_b_4 = 1;	
				$row[24] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nbt_b_4' && $row_m[5] == 1)
			{
				$g4_nbt_b_5 = 1;	
				$row[25] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nbt_b_4' && $row_m[5] == 1)
			{
				$g4_nbt_b_6 = 1;	
				$row[26] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '4_nf_b_3_c' && $row_m[5] == 1)
			{
				$g4_nf_b_3_c = 1;	
				$row[27] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '5_oa_a_1' && $row_m[5] == 1)
			{
				$g5_oa_a_1 = 1;	
				$row[28] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nbt_b_5' && $row_m[5] == 1)
			{
				$g5_nbt_b_5 = 1;	
				$row[29] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nbt_b_6' && $row_m[5] == 1)
			{
				$g5_nbt_b_6 = 1;	
				$row[30] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nbt_b_7' && $row_m[5] == 1)
			{
				$g5_nbt_b_7 = 1;	
				$row[31] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '5_nf_a_1' && $row_m[5] == 1)
			{
				$g5_nf_a_1 = 1;	
				$row[32] = 1;
			}
			
			if ($id == $row_m[0] && $row_m[3] == '6_rp' && $row_m[5] == 1)
			{
				$g6_rp = 1;	
				$row[33] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_ns' && $row_m[5] == 1)
			{
				$g6_ns = 1;	
				$row[34] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_ee' && $row_m[5] == 1)
			{
				$g6_ee = 1;	
				$row[35] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_g' && $row_m[5] == 1)
			{
				$g6_g = 1;	
				$row[36] = 1;
			}
			if ($id == $row_m[0] && $row_m[3] == '6_sp' && $row_m[5] == 1)
			{
				$g6_sp = 1;	
				$row[37] = 1;
			}
		}

                echo '<tr>';
                echo '<td>';
                echo $i + 1;
                echo '</td>';
                echo '<td>';
                echo $firstName;
                echo '</td>';
                echo '<td>';
                echo $lastName;
                echo '</td>';

 		echo '<td>';

		$raw_grade = 60;

		//1st  thru k 
		$raw_grade = calc_raw_grade($core_grades_id,$row);
                echo $raw_grade;
                echo '</td>';

//BEGIN PRE DATE 
		$r = $raw_grade - 60;


                //get total days since start
               	$now = time(); // or your date as well
                $start_date = strtotime("2016-09-12");
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

                $cut_date = strtotime("2016-12-22");
                $class_date = strtotime($estdate);
                if ($cut_date > $class_date)
                {
                        echo '<td bgcolor="#99ffcc">';
                        echo $estdate;
                        echo '</td>';
                }
                else //#ffe6e6
                {
                        echo '<td bgcolor="#ffb3d1">';
                        echo $estdate;
                        echo '</td>';
                }
//END PRED DATE

//BEGIN CALC RAW GRADE NEW
		$raw_grade_new = calc_raw_grade_new($core_grades_id,$row);

//END CALC RAW GRADE NEW


//BEGIN GRADE DATE
                $r = $raw_grade_new - 60;

                //get total days since start
                $now = time(); // or your date as well
                $start_date = strtotime("2016-09-12");
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

                $cut_date = strtotime("2017-06-01");
                $class_date = strtotime($estdate);
                if ($cut_date > $class_date)
                {
                        echo '<td bgcolor="#99ffcc">';
                        echo $estdate;
                        echo '</td>';
                }
                else
                {
                        echo '<td bgcolor="#ffb3d1">';
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

		if ($k_cc == 1)
		{
 			echo '<td bgcolor="green">';
		}	
		else
		{
 			echo '<td bgcolor="red">';
		}
                echo '';
                echo '</td>';

                if ($k_oa_a_4 == 1)
                {
                        echo '<td bgcolor="green">';
                }      
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($k_oa_a_5 == 1)
                {
                        echo '<td bgcolor="green">';
                }      
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';


                if ($g1_oa_b_3 == 1)
                {
                        echo '<td bgcolor="green">';
                }     
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g1_oa_c_6 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g1_nbt == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g2_oa_b_2 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g2_nbt == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g5 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g2 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g4 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g8 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g3 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g6 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g9 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g7 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g3_oa_c_7 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g3_nbt == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g4_oa_b_4 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g4_nbt_b_4 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g4_nbt_b_5 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g4_nbt_b_6 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g4_nf_b_3_c == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

             	if ($g5_oa_a_1 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g5_nbt_b_5 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g5_nbt_b_6 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g5_nbt_b_7 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

		if ($g5_nf_a_1 == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g6_rp == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g6_ns == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g6_ee == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g6_g == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

                if ($g6_sp == 1)
                {
                        echo '<td bgcolor="green">';
                }
                else
                {
                        echo '<td bgcolor="red">';
                }
                echo '';
                echo '</td>';

		echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
	
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
?>

</body>
</html>
