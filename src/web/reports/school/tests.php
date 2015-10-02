<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>TESTS</title>
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
$user_id = 0;
$test_id = 0;
$id = 0;

if (isset($_POST["room_id"]))
{
	$room_id = $_POST["room_id"];
}
else if (isset($_GET['room_id']))
{
	$room_id = $_GET['room_id'];
}

if (isset($_POST["user_id"]))
{
        $user_id = $_POST["user_id"];
}
else if (isset($_GET['user_id']))
{
        $user_id = $_GET['user_id'];
}

if (isset($_POST["test_id"]))
{
        $test_id = $_POST["test_id"];
}
else if (isset($_GET['test_id']))
{
        $test_id = $_GET['test_id'];
}

echo "<br>";
?>

<p><b> Tests </p></b>

<p><b> Select Room, Student and Test: </p></b>

<form method="post" action="/web/reports/school/tests.php">

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"All Rooms\" </option>";

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

<select id="user_id" name="user_id" onchange="loadAgain()">
<?php
$query = "select * from users where room_id = ";
$query .= $room_id;
$query .= " order by last_name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"All Users\" </option>";

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        if ($row[0] == $user_id)
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

<select id="test_id" name="test_id" onchange="loadAgain()">
<?php
$query = "select * from evaluations_attempts where user_id = ";
$query .= $user_id;
$query .= " order by start_time desc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"All Tests\" </option>";

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        if ($row[0] == $test_id)
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
</form>


<script>
function loadAgain()
{
    	var x = document.getElementById("room_id").value;
    	var y = document.getElementById("user_id").value;
    	var z = document.getElementById("test_id").value;
	document.location.href = '/web/reports/school/tests.php?room_id=' + x + '&user_id=' + y + '&test_id=' + z; 
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
        echo '<td> Rank';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Last Name';
        echo '</td>';
        echo '<td> Score';
        echo '</td>';
        echo '</tr>';

        $lastAnswerTime = '';
        $firstName = '';
        $lastName = '';
        $score = '';


        $query = "select * from item_attempts where evaluations_attempts_id = ";
	$query .= $test_id;
	$query .= " order by start_time desc;";
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $lastAnswerTime = $row[0];
                $firstName = $row[1];
                $lastName = $row[2];
                $score = $row[3];

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
                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
}
?>


</body>
</html>
