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
        echo '<td>Score';
        echo '</td>';
        echo '<td>Standard';
        echo '</td>';
        echo '<td>k_cc';
        echo '</td>';
        echo '<td>k_oa_a_4';
        echo '</td>';
        echo '<td>k_oa_a_5';
        echo '</td>';
        echo '<td>1_oa_b_3';
        echo '</td>';
        echo '<td>1_oa_c_6';
        echo '</td>';
        echo '<td>1_nbt';
        echo '</td>';
        echo '<td>2_oa_b_2';
        echo '</td>';
        echo '<td>2_nbt';
        echo '</td>';
        echo '<td>3_oa_c_7';
        echo '</td>';
        echo '<td>3_nbt';
        echo '</td>';
        echo '</tr>';

        $lastAnswerTime = '';
        $firstName = '';
        $lastName = '';
        $score = '';

        $query = "select last_activity, first_name, last_name, core_standards_id, score, k_cc, k_oa_a_4, k_oa_a_5, g1_oa_b_3, g1_oa_c_6, g1_nbt, g2_oa_b_2, g2_nbt, g3_oa_c_7, g3_nbt from users where banned_id = 0 and school_id = ";
        $query .= $_SESSION["school_id"];
	if ($room_id != 0)
	{
		$query .= " AND room_id = ";
        	$query .= $room_id;
	}
        $query .= " order by score desc;";
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $lastAnswerTime = $row[0];
                $firstName = $row[1];
                $lastName = $row[2];
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
		
		$g3_oa_c_7 = $row[13];
		$g3_nbt = $row[14];
                

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



                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
}
?>

</body>
</html>