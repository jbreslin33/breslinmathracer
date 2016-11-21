<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>MILESTONES BETA</title>
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

<p><b> Milestones Beta</p></b>

<p><b> Select Room: </p></b>

<form method="post" action="/web/reports/generic/milestones_beta.php">

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
	document.location.href = '/web/reports/generic/milestones_beta.php?room_id=' + y; 
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

        $lastAnswerTime = '';
        $firstName = '';
        $lastName = '';
        $score = '';

        $query = "select last_activity, first_name, last_name, core_standards_id, score, k_cc, k_oa_a_4, k_oa_a_5, g1_oa_b_3, g1_oa_c_6, g1_nbt, g2_oa_b_2, g2_nbt, alltimefive, alltimetwo, alltimefour, alltimeeight, alltimethree, alltimesix, alltimenine, alltimeseven, g3_oa_c_7, g3_nbt, g4_oa_b_4, g4_nbt_b_4, g4_nbt_b_5, g4_nbt_b_6, g4_nf_b_3_c, g5_oa_a_1, g5_nbt_b_5, g5_nbt_b_6, g5_nbt_b_7, g5_nf_a_1, g6_rp, g6_ns, g6_ee, g6_g, g6_sp, core_grades_id from users where banned_id = 0 and school_id = ";
        $query .= $_SESSION["school_id"];
	if ($room_id != 0)
	{
		$query .= " AND room_id = ";
        	$query .= $room_id;
	}
        $query .= " order by score desc;";
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

	
	$total_raw_grade = 0;

	$i = 0;

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $lastAnswerTime = $row[0];
                $firstName = $row[1];
                $lastName = $row[2];
                $core_grades_id = $row[38];
                $core_standards_id = $row[3];
                $score = $row[4];


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
