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

$room_id = 0;

if (isset($_POST["room_id"]))
{
        $room_id = $_POST["room_id"];
}
else if (isset($_GET['room_id']))
{
        $room_id = $_GET['room_id'];
}


echo "<br>";
?>


	<p><b> MILESTONES: </p></b>

<p><b> Select Room: </p></b>
<form method="post" action="/web/reports/school/milestones.php">

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"Select Room\" </option>";

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
        var x = document.getElementById("room_id").value;
        document.location.href = '/web/reports/school/milestones.php?room_id=' + x;
}
</script>

<?php
echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> Last Name';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> K';
        echo '</td>';
        echo '<td> Make 10';
        echo '</td>';
        echo '<td> add sub within 5';
        echo '</td>';
        echo '<td> add sub within 10';
        echo '</td>';
        echo '<td> properties';
        echo '</td>';
        echo '<td> Basic Skills 1';
        echo '</td>';
        echo '<td> add sub within 20';
        echo '</td>';
        echo '<td> Basic Skills 2';
        echo '</td>';
        echo '<td> The Izzy';
        echo '</td>';
        echo '<td> Basic Skills 3';
        echo '</td>';
        echo '<td> Basic Skills 4';
        echo '</td>';
        echo '<td> Basic Skills 4 Boss Level';
        echo '</td>';
        echo '<td> Basic Skills 5';
        echo '</td>';
        echo '<td> Basic Skills 5 Boss Level';
        echo '</td>';
        echo '</tr>';

$userIDArray = array();
$lastNameArray = array();
$firstNameArray = array();
$kPass = array();
$makeTenPass = array();
$addSubWithinFivePass = array();
$addSubWithinTenPass = array();
$propertiesPass = array();
$firstPass = array();
$addSubWithinTwentyPass = array();
$secondPass = array();
$izzyPass = array();
$thirdPass = array();
$fourthPass = array();
$fourthBossLevelPass = array();
$fifthPass = array();
$fifthBossLevelPass = array();

//names
$queryNames = "select id, last_name, first_name from users where room_id = ";
$queryNames .= $room_id; 
$queryNames .= " order by score desc;";

$nameResults = pg_query($conn,$queryNames);
$numOfNames = pg_numrows($nameResults);
for($i = 0; $i < $numOfNames; $i++)
{
	$row = pg_fetch_array($nameResults, $i);
        $userIDArray[] = $row[0];
        $lastNameArray[] = $row[1];
        $firstNameArray[] = $row[2];
	$kPass[] = 'No';
	$makeTenPass[] = 'No';
	$addSubWithinFivePass[] = 'No';
	$addSubWithinTenPass[] = 'No';
	$propertiesPass[] = 'No';
	$firstPass[] = 'No';
	$addSubWithinTwentyPass[] = 'No';
	$secondPass[] = 'No';
	$izzyPass[] = 'No';
	$thirdPass[] = 'No';
	$fourthPass[] = 'No';
	$fourthBossLevelPass[] = 'No';
	$fifthPass[] = 'No';
	$fifthBossLevelPass[] = 'No';
}

//the izzy
$queryIzzy = "select evaluations_attempts.start_time as startime, users.id as usersid, evaluations.id as evaluationsid, evaluations_attempts.id as evaluationsattemptsid, SUM(CASE WHEN item_attempts.transaction_code = 1 THEN item_attempts.transaction_code ELSE 0 END) correct, SUM(CASE WHEN item_attempts.transaction_code = 2 THEN item_attempts.transaction_code ELSE 0 END) incorrect, COUNT(CASE WHEN item_attempts.transaction_code = 0 THEN item_attempts.transaction_code ELSE 0 END) unanswered from item_attempts join evaluations_attempts on item_attempts.evaluations_attempts_id=evaluations_attempts.id join users on users.id=evaluations_attempts.user_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id where users.room_id = ";
$queryIzzy .=  $room_id;
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
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $kPass[$u] = substr($start_time,0,19);
                                        $kPass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }


	//make 10
	if ($evaluations_id == 26)
	{
		if ($total == 18 && $correct == 18 && $incorrect == 0)
		{
			for($u = 0; $u < $numOfNames; $u++)
			{		
				if ($users_id == $userIDArray[$u])
				{
					$makeTenPass[$u] = substr($start_time,0,19);
					$makeTenPass[$u] .= $evaluations_attempts_id;
				}
			}
		}
	}

       	//add sub within 5 
        if ($evaluations_id == 13)
        {
                if ($total == 20 && $correct == 20 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $addSubWithinFivePass[$u] = substr($start_time,0,19);
                                        $addSubWithinFivePass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }

        //add sub within 10 
        if ($evaluations_id == 27)
        {
                if ($total == 70 && $correct == 70 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $addSubWithinTenPass[$u] = substr($start_time,0,19);
                                        $addSubWithinTenPass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }

        //properties
        if ($evaluations_id == 29)
        {
                if ($total == 36 && $correct == 36 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $propertiesPass[$u] = substr($start_time,0,19);
                                        $propertiesPass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }

        //first pass
        if ($evaluations_id == 24)
        {
                if ($total == 12 && $correct == 12 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $firstPass[$u] = substr($start_time,0,19);
                                        $firstPass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }

        //second pass
        if ($evaluations_id == 23)
        {
                if ($total == 13 && $correct == 13 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $secondPass[$u] = substr($start_time,0,19);
                                        $secondPass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }

        //third pass
        if ($evaluations_id == 22)
        {

		//need skills...
                if ($total == 130000 && $correct == 130000 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $thirdPass[$u] = substr($start_time,0,19);
                                        $thirdPass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }



       	//the izzy
        if ($evaluations_id == 12)
        {
                if ($total == 64 && $correct == 64 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {
                                        $izzyPass[$u] = substr($start_time,0,19);
                                        $izzyPass[$u] .= $evaluations_attempts_id;
                                }
                        }
                }
        }

	/*
		basic skills have been revamped so old ones will not show due to date....
	*/
	//fourth  
	$fourth_time = '2016-06-01 01:00:33';
	if ($evaluations_id == 20)
	{
		if ($total == 8 && $correct == 8 && $incorrect == 0)
		{
			for($u = 0; $u < $numOfNames; $u++)
			{		
				if ($users_id == $userIDArray[$u])
				{
			
					if ( strtotime($start_time) > strtotime($fourth_time))
					{
						$fourthPass[$u] = substr($start_time,0,19);
						$fourthPass[$u] .= $evaluations_attempts_id;
					}
				}
			}
		}
	}

  	//fourth_boss
        $fourth_boss_time = '2016-06-01 01:00:33';
        if ($evaluations_id == 30)
        {
                if ($total == 13 && $correct == 13 && $incorrect == 0)
                {
                        for($u = 0; $u < $numOfNames; $u++)
                        {
                                if ($users_id == $userIDArray[$u])
                                {

                                        if ( strtotime($start_time) > strtotime($fourth_boss_time))
                                        {
                                                $fourthBossLevelPass[$u] = substr($start_time,0,19);
                                                $fourthBossLevelPass[$u] .= $evaluations_attempts_id;
                                        }
                                }
                        }
                }
        }



	//fifth old 
	if ($evaluations_id == 21)
	{
		if ($total == 10 && $correct == 10 && $incorrect == 0)
		{
			for($u = 0; $u < $numOfNames; $u++)
			{		
				if ($users_id == $userIDArray[$u])
				{
					$fifthPass[$u] = substr($start_time,0,19);
					$fifthPass[$u] .= " old";
					$fifthPass[$u] .= $evaluations_attempts_id;
				}
			}
		}
	}
	//fifth new
	if ($evaluations_id == 21)
	{
		if ($total == 11 && $correct == 11 && $incorrect == 0)
		{
			for($u = 0; $u < $numOfNames; $u++)
			{		
				if ($users_id == $userIDArray[$u])
				{
					$fifthPass[$u] = substr($start_time,0,19);
					$fifthPass[$u] .= $evaluations_attempts_id;
				}
			}
		}
	}
}

for($i = 0; $i < $numOfNames; $i++)
{
	$row = pg_fetch_array($nameResults, $i);
 	
	if ($kPass[$i] == 'No')
        {
                $kcolor = 'Red';
        }
	else
        {
                $kcolor = 'Green';
        }

       	if ($makeTenPass[$i] == 'No')
        {
                $maketencolor = 'Red';
        }
        else
        {
                $maketencolor = 'Green';
        }
       	
	if ($addSubWithinFivePass[$i] == 'No')
        {
                $addsubwithinfivecolor = 'Red';
        }
        else
        {
                $addsubwithinfivecolor = 'Green';
        }
	
	if ($addSubWithinTenPass[$i] == 'No')
        {
                $addsubwithintencolor = 'Red';
        }
        else
        {
                $addsubwithintencolor = 'Green';
        }
	
	if ($propertiesPass[$i] == 'No')
        {
                $propertiescolor = 'Red';
        }
        else
        {
                $propertiescolor = 'Green';
        }
 	
	if ($firstPass[$i] == 'No')
        {
                $firstcolor = 'Red';
        }
	else
        {
                $firstcolor = 'Green';
        }
	
	if ($addSubWithinTwentyPass[$i] == 'No')
        {
                $addsubwithintwentycolor = 'Red';
        }
        else
        {
                $addsubwithintwentycolor = 'Green';
        }
	
	if ($secondPass[$i] == 'No')
        {
                $secondcolor = 'Red';
        }
	else
        {
                $secondcolor = 'Green';
        }

 	if ($izzyPass[$i] == 'No')
        {
                $izzycolor = 'Red';
        }
	else
        {
                $izzycolor = 'Green';
        }
 	
	if ($thirdPass[$i] == 'No')
        {
                $thirdcolor = 'Red';
        }
	else
        {
                $thirdcolor = 'Green';
        }

 	if ($fourthPass[$i] == 'No')
        {
                $fourthcolor = 'Red';
        }
	else
        {
                $fourthcolor = 'Green';
        }
 	
	if ($fourthBossLevelPass[$i] == 'No')
        {
                $fourthbosslevelcolor = 'Red';
        }
	else
        {
                $fourthbosslevelcolor = 'Green';
        }

        if ($fifthPass[$i] == 'No')
        {
                $fifthcolor = 'Red';
        }
        else
        {
                $fifthcolor = 'Green';
        }
        
	if ($fifthBossLevelPass[$i] == 'No')
        {
                $fifthbosslevelcolor = 'Red';
        }
        else
        {
                $fifthbosslevelcolor = 'Green';
        }


	echo '<tr>';
        echo '<td>';
        echo $lastNameArray[$i];
        echo '</td>';
        echo '<td>';
        echo $firstNameArray[$i];
        echo '</td>';

        echo '<td bgcolor="';
        echo $kcolor;
        echo '">';
        echo $kPass[$i];
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $maketencolor;
        echo '">';
        echo $makeTenPass[$i];
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $addsubwithinfivecolor;
        echo '">';
        echo $addSubWithinFivePass[$i];
        echo '</td>';
	
	echo '<td bgcolor="';
        echo $addsubwithintencolor;
        echo '">';
        echo $addSubWithinTenPass[$i];
        echo '</td>';

	echo '<td bgcolor="';
        echo $propertiescolor;
        echo '">';
        echo $propertiesPass[$i];
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $firstcolor;
        echo '">';
        echo $firstPass[$i];
        echo '</td>';
	
	echo '<td bgcolor="';
        echo $addsubwithintwentycolor;
        echo '">';
        echo $addSubWithinTwentyPass[$i];
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $secondcolor;
        echo '">';
        echo $secondPass[$i];
        echo '</td>';

        echo '<td bgcolor="';
        echo $izzycolor;
        echo '">';
        echo $izzyPass[$i];
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $thirdcolor;
        echo '">';
        echo $thirdPass[$i];
        echo '</td>';

        echo '<td bgcolor="';
        echo $fourthcolor;
        echo '">';
        echo $fourthPass[$i];
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $fourthbosslevelcolor;
        echo '">';
        echo $fourthBossLevelPass[$i];
        echo '</td>';

        echo '<td bgcolor="';
        echo $fifthcolor;
        echo '">';
        echo $fifthPass[$i];
        echo '</td>';
        
	echo '<td bgcolor="';
        echo $fifthbosslevelcolor;
        echo '">';
        echo $fifthBossLevelPass[$i];
        echo '</td>';

        echo '</tr>';
}

        pg_free_result($nameResults);
        echo '</table>';
?>
</body>
</html>
