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

//names
$queryNames = "select id, last_name, first_name from users where room_id = ";
$queryNames .= $room_id; 
$queryNames .= ";";

$nameResults = pg_query($conn,$queryNames);
$n = pg_numrows($nameResults);
for($i = 0; $i < $n; $i++)
{
	$row = pg_fetch_array($nameResults, $i);
        $id = $row[0];
        $last_name = $row[1];
        $first_name = $row[2];
	
	echo $id;
	echo $last_name;
	echo $first_name;
}

//evaluations
$query = "select item_attempts.start_time, evaluations.description, evaluations_attempts.id, users.first_name, users.last_name, item_attempts.transaction_code from item_attempts join evaluations_attempts on item_attempts.evaluations_attempts_id=evaluations_attempts.id join users on users.id=evaluations_attempts.user_id join evaluations on evaluations.id=evaluations_attempts.evaluations_id where users.room_id = ";
$query .= $room_id; 
$query .= " order by evaluations_attempts.start_time desc LIMIT 10;"; 

$r = pg_query($conn,$query);
$n = pg_numrows($r);

        for($i = 0; $i < $n; $i++)
        {
                $row = pg_fetch_array($r, $i);
                $match_id = $row[0];
                $team_name = $row[1];
                $start_time = $row[2];
                $end_time = $row[3];
                $score = $row[4];

                echo '<tr>';
                echo '<td>';
                echo $match_id;
                echo '</td>';
                echo '<td>';
                echo $team_name;
                echo '</td>';
                echo '<td>';
                echo $start_time;
                echo '</td>';
                echo '<td>';
                echo $end_time;
                echo '</td>';
                echo '<td>';
                echo $score;
                echo '</td>';

                echo '</tr>';
        }

        pg_free_result($r);
        echo '</table>';
?>
</body>
</html>
