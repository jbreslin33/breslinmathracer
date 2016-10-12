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
$result = pg_query($conn,$query);
$num_rooms = pg_numrows($result);

//calc results
for($i = 0; $i < $num_rooms; $i++)
{
        $row = pg_fetch_array($result, $i);


        $last_activity = '';

        $query = "select last_activity, first_name, last_name, core_standards_id, score, k_cc, k_oa_a_4, k_oa_a_5, g1_oa_b_3, g1_oa_c_6, g1_nbt, g2_oa_b_2, g2_nbt, alltimefive, alltimetwo, alltimefour, alltimeeight, alltimethree, alltimesix, alltimenine, alltimeseven, g3_oa_c_7, g3_nbt, g4_oa_b_4, g4_nbt_b_4, g4_nbt_b_5, g4_nbt_b_6, g4_nf_b_3_c, g5_oa_a_1, g5_nbt_b_5, g5_nbt_b_6, g5_nbt_b_7, g5_nf_a_1, g6_rp, g6_ns, g6_ee, g6_g, g6_sp, core_grades_id from users where banned_id = 0 and school_id = ";
        $query .= $_SESSION["school_id"];
	if ($row[0] != 0)
	{
		$query .= " AND room_id = ";
        	$query .= $row[0];
	}
        $query .= ";";
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

	
	$total_raw_grade = 0;

	$i = 0;

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
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

		$total_raw_grade += $raw_grade;

        }

        pg_free_result($result);
	
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
//bubble sort

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
for($i = 0; $i < $num_rooms; $i++)
{
        $row = pg_fetch_array($result, $i);
		echo '<tr>';
                
		echo '<td>';
                echo 'rank';
                echo '</td>';
                echo '<td>';
                echo 'room';
                echo '</td>';
                echo '<td>';
                echo 'grade';
                echo '</td>';
                echo '<td>';
                echo 'avg_grade';
                echo '</td>';
                echo '<td>';
                echo 'per_com';
                echo '</td>';

		echo '</tr>';

}
        echo '</table>';
?>

</body>
</html>
