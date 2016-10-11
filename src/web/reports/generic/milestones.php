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
?>

<p><b> Milestones </p></b>

<p><b> Select Room: </p></b>

<form method="post" action="/web/reports/generic/milestones.php">

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
	document.location.href = '/web/reports/generic/milestones.php?room_id=' + y; 
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
                        echo $raw_grade;
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
                        echo $raw_grade;
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
                        echo $raw_grade;
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
                        echo $raw_grade;
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
                        echo $raw_grade;
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
			echo $raw_grade;
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
                        echo $raw_grade;
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
                        echo $raw_grade;
                }

		else 
		{
                	echo 'grade unknown';
		}
                echo '</td>';

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


	$avg = $total_raw_grade / $i;
	echo 'hello';
	echo $avg;

}
?>

</body>
</html>
