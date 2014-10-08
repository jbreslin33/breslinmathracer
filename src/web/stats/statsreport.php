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

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_user.php");
echo "<br>";
?>

<p><b> STATS REPORT: </p></b>

<?php
$username = $_GET["username"];
$progression_start   = $_GET["progression_start"];
$progression_end     = $_GET["progression_end"];
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
$query .= " order by progression LIMIT 1";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

$currenttypeid = 0; 

if ($numrows > 0) 
{
        $row = pg_fetch_array($result, 0);
	$currenttypeid = $row[0];
	$progression_counter = $row[1];
}

$query = "select item_attempts.transaction_code from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN users ON evaluations_attempts.user_id=users.id where users.username = '";
$query .= $username;
$query .= "' AND item_attempts.item_types_id = '";
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
        echo '</td>';
        echo '<td>';
        echo $percent;
        echo '%</td>';
        echo '</tr>';
}
pg_free_result($result);
echo '</table>';
?>
</body>
</html>
