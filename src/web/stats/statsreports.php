<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>UPDATE STANDARD</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_school.php");
echo "<br>";
$user_id = 0;
$progression_start = 4;
$progression_end = 6;
$user_id_array = array();

if (isset($_POST["user_id"]))
{
	$txt = "post if user_id:"; 
	$txt .= $user_id;
	error_log($txt);
        $user_id = $_POST["user_id"];
}
else
{
	$txt = "post else user_id:"; 
	$txt .= $user_id;
	error_log($txt);

}
if (isset($_GET["user_id"]))
{
        $txt = "get if user_id:";
        $txt .= $user_id;
        error_log($txt);
        $user_id = $_GET["user_id"];
}
else
{
        $txt = "get else user_id:";
        $txt .= $user_id;
        error_log($txt);

}

if (isset($_POST["progression_start"]))
{
        $progression_start = $_POST["progression_start"];
}
if (isset($_POST["progression_end"]))
{
        $progression_end = $_POST["progression_end"];
}

?>

<script>
function loadAgain()
{
        var x = document.getElementById("user_id").value;
        document.location.href = '/web/stats/statsreports.php?user_id=' + x;
	console.log('x:' + x);
}
</script>

        <form method="post" action="/web/stats/statsreports.php">



<select id="user_id" name="user_id" onchange="loadAgain()">

<?php
$query = "select last_name, first_name, username, id, score, unmastered from users where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by last_name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        $s = $row[0];
        $s .= ",";
        $s .= $row[1];
        $s .= ",";
        $s .= $row[2];
        $s .= ",";
        $s .= $row[3];
        $s .= ",";
        $s .= $row[4];
        $s .= ",";
        $s .= $row[5];
        echo "<option value=\"$row[3]\"> $s </option>";
	$user_id_array[] = $row[3];
}
?>
        $row = pg_fetch_array($result, $i);
        if ($row[0] == $room_id)
        {
                echo "<option selected=\"selected\" value=\"$row[0]\"> $row[1] </option>";
        }
        else
        {
                echo "<option value=\"$row[0]\"> $row[1] </option>";
        }
        $id_array[] = $row[0];


</select>

<select name="progression_start">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>

</select>

</select>

<select name="progression_end">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>

</select>

        <p><input type="submit" value="UPDATE" /></p>

        </form>



<p id="statsreport"><b> STATS REPORT: </p></b>

<?php
$progression_counter = $progression_start;

//last ones at end
$type_array = array();
$right_array = array();
$wrong_array = array();
$streak_array = array();

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Type';
        echo '</td>';
        echo '<td> Streak';
        echo '</td>';
        echo '<td> Right';
        echo '</td>';
        echo '<td> Wrong';
        echo '</td>';
        echo '<td> Last Ten Percent';
        echo '</td>';
        echo '<td> Total Percent';
        echo '</td>';
        echo '<td> LastOne';
        echo '</td>';
        echo '</td>';
        echo '<td> NextToLastOne';
        echo '</td>';
        echo '</tr>';

while ($progression_counter < $progression_end)  
{
	$wrong = 0;
	$right = 0;
	$streak = 0;
	$wrong_last_ten = 0;
	$right_last_ten = 0;
	$streak_last_ten = 0;

	$query = "select id, progression from item_types where progression > ";
	$query .= $progression_counter;
	//$query .= " AND active_code = 1 AND speed = 0";
	$query .= " AND active_code = 1";
	$query .= " order by progression LIMIT 1";

	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);

	$currenttypeid = 0; 
	$lastOne = '';
	$nextToLastOne = '';

	if ($numrows > 0) 
	{
        	$row = pg_fetch_array($result, 0);
		$currenttypeid = $row[0];
		$progression_counter = $row[1];
	}
	
	if ($user_id == 0)
	{
		$user_id = $user_id_array[0];
	}

	$query = "select item_attempts.transaction_code from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN users ON evaluations_attempts.user_id=users.id where users.id = ";
	$query .= $user_id;
	$query .= " AND item_attempts.item_types_id = '";
	$query .= $currenttypeid;
	$query .= "' order by item_attempts.start_time desc;";

	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);

	for($i = 0; $i < $numrows; $i++) 
	{
        	$row = pg_fetch_array($result, $i);
		$transaction_code = $row[0];

		if ($transaction_code == 1)
		{
			$right++;
			$streak++;

			if ($i < 10)
			{
				$right_last_ten++;
				$streak_last_ten++;
			}
		}
		if ($transaction_code == 2)
		{
			$wrong++;
			$streak = 0;

			if ($i < 10)
			{
				$wrong_last_ten++;
				$streak_last_ten = 0;
			}
		}

		if ($i == 0)
		{
			if ($transaction_code == 0) 
			{
				$lastOne = '<font color="black">empty</font>';		
			}
			if ($transaction_code == 1) 
			{
				$lastOne = '<font color="green">right</font>';		
			}
			if ($transaction_code == 2) 
			{
				$lastOne = '<font color="red">wrong</font>';		
			}
		}
		if ($i == 1)
		{
			if ($transaction_code == 0) 
			{
				$nextToLastOne = '<font color="black">empty</font>';		
			}
			if ($transaction_code == 1) 
			{
				$nextToLastOne = '<font color="green">right</font>';		
			}
			if ($transaction_code == 2) 
			{
				$nextToLastOne = '<font color="red">wrong</font>';		
			}
		}
	}
	$wrong_array[]  = $wrong;
	$right_array[]  = $right;
	$streak_array[] = $streak;

	$total = intval($right + $wrong);
	$percent = 0;
	if ($total != 0)
	{
		$percent = floatval($right / $total);
        	$percent = round( $percent, 2);
		$percent = $percent * 100;
	}

	$total_last_ten = intval($right_last_ten + $wrong_last_ten);
	$percent_last_ten = 0;
	if ($total_last_ten != 0)
	{
        	$percent_last_ten = floatval($right_last_ten / $total_last_ten);
        	$percent_last_ten = round( $percent_last_ten, 2);
        	$percent_last_ten = $percent_last_ten * 100;
	}
       	echo '<tr>';
        echo '<td>';
        echo $currenttypeid;
        echo '</td>';
        echo '<td>';
        echo $streak;
        echo '</td>';
        echo '<td>';
        echo $right;
        echo '</td>';
        echo '<td>';
        echo $wrong;
        echo '</td>';
        echo '<td>';
        echo $percent_last_ten;
        echo '%</td>';
        echo '<td>';
        echo $percent;
        echo '%</td>';
        echo '<td>';
        echo $lastOne;
        echo '</td>';
        echo '<td>';
        echo $nextToLastOne;
        echo '</td>';
        echo '</tr>';
}
pg_free_result($result);
echo '</table>';
?>
</body>
</html>
