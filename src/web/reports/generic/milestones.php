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
<form method="post" action="/web/reports/generic/any_homework_check.php">

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
        document.location.href = '/web/reports/generic/milestones.php?room_id=' + x;
}
</script>




<?php
echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> Last Name';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> The Izzy';
        echo '</td>';
        echo '<td> Basic Skills 4';
        echo '</td>';
        echo '<td> Basic Skills 5';
        echo '</td>';
        echo '</tr>';

$userIDArray = array();
$lastNameArray = array();
$firstNameArray = array();
$izzyPass = array();
$fourthPass = array();
$fifthPass = array();

//names
$queryNames = "select id, last_name, first_name from users where room_id = ";
$queryNames .= $room_id; 
$queryNames .= ";";

$nameResults = pg_query($conn,$queryNames);
$numOfNames = pg_numrows($nameResults);
for($i = 0; $i < $numOfNames; $i++)
{
	$row = pg_fetch_array($nameResults, $i);
        $userIDArray[] = $row[0];
        $lastNameArray[] = $row[1];
        $firstNameArray[] = $row[2];
	$izzyPass[] = 'No';
	$fourthPass[] = 'No';
	$fifthPass[] = 'No';
}

//evaluations
for ($x = 0; $x < $numOfNames; $x++)
{
	//the izzy
	$queryIzzy = "select users.id as usersid, evaluations.id as evaluationsid, evaluations_attempts.id as evaluationsattemptsid, SUM(CASE WHEN item_attempts.transaction_code = 1 THEN item_attempts.transaction_code ELSE 0 END) correct, SUM(CASE WHEN item_attempts.transaction_code = 2 THEN item_attempts.transaction_code ELSE 0 END) incorrect, COUNT(CASE WHEN item_attempts.transaction_code = 0 THEN item_attempts.transaction_code ELSE 0 END) unanswered from item_attempts join evaluations_attempts on item_attempts.evaluations_attempts_id=evaluations_attempts.id join users on users.id=evaluations_attempts.user_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id where users.room_id = ";
	$queryIzzy .=  $room_id;
	$queryIzzy .= " AND users.id = ";
	$queryIzzy .=  $userIDArray[$x];
	$queryIzzy .= " AND evaluations.id = 12 group by usersid, evaluationsid, evaluationsattemptsid;";

	$resultsIzzy = pg_query($conn,$queryIzzy);
	$numIzzyRows = pg_numrows($resultsIzzy);

	for($y = 0; $y < $numIzzyRows; $y++)
	{
		$row = pg_fetch_array($resultsIzzy, $y);
		$correct = $row[3];
		$incorrect = $row[4];
		$total = $row[5];

		if ($total == 64 && $correct == 64 && $incorrect == 0)
		{
			$izzyPass[$x] = 'Yes';
		}
	}
}

for($i = 0; $i < $numOfNames; $i++)
{
	$row = pg_fetch_array($nameResults, $i);

	echo '<tr>';
        echo '<td>';
        echo $lastNameArray[$i];
        echo '</td>';
        echo '<td>';
        echo $firstNameArray[$i];
        echo '</td>';
        echo '<td>';
        echo $izzyPass[$i];
        echo '</td>';
        echo '<td>';
        echo $fourthPass[$i];
        echo '</td>';
        echo '<td>';
        echo $fifthPass[$i];
        echo '</td>';

        echo '</tr>';
}

        pg_free_result($nameResults);
        echo '</table>';
?>
</body>
</html>
