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
date_default_timezone_set('America/New_York');

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
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

echo "<br>";
?>


	<p><b> MILESTONES: </p></b>

</select>

<?php
echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> k_cc';
        echo '</td>';
        echo '<td> Make Ten';
        echo '</td>';
        echo '<td>Add Subtract Within 5';
        echo '</td>';
        echo '<td>Add Subtract Within 10';
        echo '</td>';
        echo '<td> Properties';
        echo '</td>';
        echo '<td> Basic Skills First';
        echo '</td>';
        echo '<td>Add Subtract Within 20';
        echo '</td>';
        echo '<td> Basic Skills Second';
        echo '</td>';
        echo '<td> The Izzy';
        echo '</td>';
        echo '<td> Basic Skills Third';
        echo '</td>';
        echo '<td> Basic Skills Fourth';
        echo '</td>';
        echo '<td> Basic Skills Fourth Boss Level';
        echo '</td>';
        echo '<td> Basic Skills Fifth';
        echo '</td>';
        echo '<td> Basic Skills Fifth Boss Level';
        echo '</td>';
        echo '</tr>';

$kPass = 'No';
$makeTenPass = 'No';
$addSubWithinFivePass = 'No';
$addSubWithinTenPass = 'No';
$propertiesPass = 'No';
$firstPass = 'No';
$addSubWithinTwentyPass = 'No';
$secondPass = 'No';
$izzyPass = 'No';
$thirdPass = 'No';
$fourthPass = 'No';
$fourthBossLevelPass = 'No';
$fifthPass = 'No';
$fifthBossLevelPass = 'No';

//the izzy
$queryIzzy = "select evaluations_attempts.start_time as startime, users.id as usersid, evaluations.id as evaluationsid, evaluations_attempts.id as evaluationsattemptsid, SUM(CASE WHEN item_attempts.transaction_code = 1 THEN item_attempts.transaction_code ELSE 0 END) correct, SUM(CASE WHEN item_attempts.transaction_code = 2 THEN item_attempts.transaction_code ELSE 0 END) incorrect, COUNT(CASE WHEN item_attempts.transaction_code = 0 THEN item_attempts.transaction_code ELSE 0 END) unanswered from item_attempts join evaluations_attempts on item_attempts.evaluations_attempts_id=evaluations_attempts.id join users on users.id=evaluations_attempts.user_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id where users.id = ";
$queryIzzy .=  $_SESSION["user_id"];  
$queryIzzy .= " group by usersid, evaluationsid, evaluationsattemptsid;";

$resultsIzzy = pg_query($conn,$queryIzzy);
$numIzzyRows = pg_numrows($resultsIzzy);

for($y = 0; $y < $numIzzyRows; $y++)
{
	$row = pg_fetch_array($resultsIzzy, $y);
		
	$start_time = $row[0];
	$users_id = $row[1];
	$evaluations_id = $row[2];
	$evaluations_attempts_id = $row[3];
	$correct = $row[4];
	$incorrect = $row[5];
	$total = $row[6];

        //basic skills k
        if ($evaluations_id == 25)
        {
                if ($total == 13 && $correct == 13 && $incorrect == 0)
                {
                	$kPass = substr($start_time,0,19);
                        $kPass .= $evaluations_attempts_id;
                }
        }

	//make 10
	if ($evaluations_id == 26)
	{
		if ($total == 18 && $correct == 18 && $incorrect == 0)
		{
			$makeTenPass = substr($start_time,0,19);
			$makeTenPass .= $evaluations_attempts_id;
		}
	}

       	//add sub within 5 
        if ($evaluations_id == 13)
        {
                if ($total == 20 && $correct == 20 && $incorrect == 0)
                {
                	$addSubWithinFivePass = substr($start_time,0,19);
                        $addSubWithinFivePass .= $evaluations_attempts_id;
                }
        }

        //add sub within 10 
        if ($evaluations_id == 27)
        {
                if ($total == 70 && $correct == 70 && $incorrect == 0)
                {
                	$addSubWithinTenPass = substr($start_time,0,19);
                        $addSubWithinTenPass .= $evaluations_attempts_id;
                }
        }

        //properties
        if ($evaluations_id == 29)
        {
                if ($total == 36 && $correct == 36 && $incorrect == 0)
                {
                        $propertiesPass = substr($start_time,0,19);
                        $propertiesPass .= $evaluations_attempts_id;
                }
        }

        //first pass
        if ($evaluations_id == 24)
        {
                if ($total == 12 && $correct == 12 && $incorrect == 0)
                {
                        $firstPass = substr($start_time,0,19);
                        $firstPass .= $evaluations_attempts_id;
                }
        }

        //second pass
        if ($evaluations_id == 23)
        {
                if ($total == 13 && $correct == 13 && $incorrect == 0)
                {
                        $secondPass = substr($start_time,0,19);
                        $secondPass .= $evaluations_attempts_id;
                }
        }

        //third pass
        if ($evaluations_id == 22)
        {
		//need skills...
                if ($total == 130000 && $correct == 130000 && $incorrect == 0)
                {
                        $thirdPass = substr($start_time,0,19);
                        $thirdPass .= $evaluations_attempts_id;
                }
        }

       	//the izzy
        if ($evaluations_id == 12)
        {
                if ($total == 64 && $correct == 64 && $incorrect == 0)
                {
                	$izzyPass = substr($start_time,0,19);
                        $izzyPass .= $evaluations_attempts_id;
                }
        }

	//fourth  
	$fourth_time = '2016-06-01 01:18:33';
	if ($evaluations_id == 20)
	{
		if ($total == 8 && $correct == 8 && $incorrect == 0)
		{
			if ( strtotime($start_time) > strtotime($fourth_time))
			{
				$fourthPass = substr($start_time,0,19);
				$fourthPass .= $evaluations_attempts_id;
			}
		}
	}

   	//fourth_boss
        $fourth_boss_time = '2016-06-01 01:18:33';
        if ($evaluations_id == 30)
        {
                if ($total == 13 && $correct == 13 && $incorrect == 0)
                {
                        if ( strtotime($start_time) > strtotime($fourth_boss_time))
                        {
                                $fourthBossLevelPass = substr($start_time,0,19);
                                $fourthBossLevelPass .= $evaluations_attempts_id;
                        }
                }
        }

	//fifth 
        $fifth_time = '2016-06-01 01:18:33';
	if ($evaluations_id == 21)
	{
		if ($total == 8 && $correct == 8 && $incorrect == 0)
		{
                        if ( strtotime($start_time) > strtotime($fifth_time))
			{
				$fifthPass = substr($start_time,0,19);
				$fifthPass .= $evaluations_attempts_id;
			}
		}
	}

     	//fifth_boss
        $fifth_boss_time = '2016-06-01 01:18:33';
        if ($evaluations_id == 31)
        {
                if ($total == 3 && $correct == 3 && $incorrect == 0)
                {
                        if ( strtotime($start_time) > strtotime($fifth_boss_time))
                        {
                                $fifthBossLevelPass = substr($start_time,0,19);
                                $fifthBossLevelPass .= $evaluations_attempts_id;
                        }
                }
        }
}
	
	if ($kPass == 'No')
        {
                $kcolor = 'Red';
        }
	else
        {
                $kcolor = 'Green';
        }

       	if ($makeTenPass == 'No')
        {
                $maketencolor = 'Red';
        }
        else
        {
                $maketencolor = 'Green';
        }
       	
	if ($addSubWithinFivePass == 'No')
        {
                $addsubwithinfivecolor = 'Red';
        }
        else
        {
                $addsubwithinfivecolor = 'Green';
        }
	
	if ($addSubWithinTenPass == 'No')
        {
                $addsubwithintencolor = 'Red';
        }
        else
        {
                $addsubwithintencolor = 'Green';
        }
	
	if ($propertiesPass == 'No')
        {
                $propertiescolor = 'Red';
        }
        else
        {
                $propertiescolor = 'Green';
        }
 	
	if ($firstPass == 'No')
        {
                $firstcolor = 'Red';
        }
	else
        {
                $firstcolor = 'Green';
        }
	
	if ($addSubWithinTwentyPass == 'No')
        {
                $addsubwithintwentycolor = 'Red';
        }
        else
        {
                $addsubwithintwentycolor = 'Green';
        }
	
	if ($secondPass == 'No')
        {
                $secondcolor = 'Red';
        }
	else
        {
                $secondcolor = 'Green';
        }

 	if ($izzyPass == 'No')
        {
                $izzycolor = 'Red';
        }
	else
        {
                $izzycolor = 'Green';
        }
 	
	if ($thirdPass == 'No')
        {
                $thirdcolor = 'Red';
        }
	else
        {
                $thirdcolor = 'Green';
        }

 	if ($fourthPass == 'No')
        {
                $fourthcolor = 'Red';
        }
	else
        {
                $fourthcolor = 'Green';
        }
 	
	if ($fourthBossLevelPass == 'No')
        {
                $fourthbosslevelcolor = 'Red';
        }
	else
        {
                $fourthbosslevelcolor = 'Green';
        }

        if ($fifthPass == 'No')
        {
                $fifthcolor = 'Red';
        }
        else
        {
                $fifthcolor = 'Green';
        }
        
	if ($fifthBossLevelPass == 'No')
        {
                $fifthbosslevelcolor = 'Red';
        }
        else
        {
                $fifthbosslevelcolor = 'Green';
        }


	echo '<tr>';

        echo '<td bgcolor="';
        echo $kcolor;
        echo '">';
        echo $kPass;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $maketencolor;
        echo '">';
        echo $makeTenPass;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $addsubwithinfivecolor;
        echo '">';
        echo $addSubWithinFivePass;
        echo '</td>';
	
	echo '<td bgcolor="';
        echo $addsubwithintencolor;
        echo '">';
        echo $addSubWithinTenPass;
        echo '</td>';

	echo '<td bgcolor="';
        echo $propertiescolor;
        echo '">';
        echo $propertiesPass;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $firstcolor;
        echo '">';
        echo $firstPass;
        echo '</td>';
	
	echo '<td bgcolor="';
        echo $addsubwithintwentycolor;
        echo '">';
        echo $addSubWithinTwentyPass;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $secondcolor;
        echo '">';
        echo $secondPass;
        echo '</td>';

        echo '<td bgcolor="';
        echo $izzycolor;
        echo '">';
        echo $izzyPass;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $thirdcolor;
        echo '">';
        echo $thirdPass;
        echo '</td>';

        echo '<td bgcolor="';
        echo $fourthcolor;
        echo '">';
        echo $fourthPass;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $fourthbosslevelcolor;
        echo '">';
        echo $fourthBossLevelPass;
        echo '</td>';

        echo '<td bgcolor="';
        echo $fifthcolor;
        echo '">';
        echo $fifthPass;
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $fifthbosslevelcolor;
        echo '">';
        echo $fifthBossLevelPass;
        echo '</td>';

        echo '</tr>';

        pg_free_result($resultsIzzy);
        echo '</table>';
?>
</body>
</html>
